// Netlify Function: Signal Score Assessment
// Scores quiz answers server-side, creates/updates GHL contact with scores,
// pushes to Signal Score pipeline, optionally subscribes to Beehiiv newsletter.
// Returns teaser results JSON to the browser.

const GHL_API_KEY = process.env.GHL_API_KEY;
const GHL_LOCATION_ID = process.env.GHL_LOCATION_ID || 'LTsOV0bzU0aByRBneCoy';
const GHL_PIPELINE_ID = process.env.GHL_SIGNAL_SCORE_PIPELINE_ID; // Set after creating pipeline in GHL UI
const GHL_PIPELINE_STAGE_ID = process.env.GHL_SIGNAL_SCORE_STAGE_ID; // "Assessment Completed" stage ID
const BEEHIIV_API_KEY = process.env.BEEHIIV_API_KEY;
const BEEHIIV_PUB_ID = process.env.BEEHIIV_PUB_ID || 'pub_4aa9e626-adfb-44d3-991a-ba8cbdd146fa';

// PDF service (tools.echocyber.io) — gated by CF Access service token + app bearer
const PDF_SERVICE_URL = 'https://tools.echocyber.io/pdf/signal-score';
const PDF_SERVICE_TOKEN = process.env.PDF_SERVICE_TOKEN;
const CF_ACCESS_CLIENT_ID = process.env.CF_ACCESS_CLIENT_ID;
const CF_ACCESS_CLIENT_SECRET = process.env.CF_ACCESS_CLIENT_SECRET;


// ── Scoring Engine ──────────────────────────────────────────────────────────

const CATEGORIES = [
  { key: 'identity',  name: 'Identity & Access',       questionCount: 5, maxPoints: 25 },
  { key: 'devices',   name: 'Devices & Patching',      questionCount: 5, maxPoints: 25 },
  { key: 'email',     name: 'Email & Phishing Defense', questionCount: 5, maxPoints: 25 },
  { key: 'backup',    name: 'Backup & Recovery',        questionCount: 4, maxPoints: 20 },
  { key: 'network',   name: 'Network Security',         questionCount: 4, maxPoints: 20 },
  { key: 'data',      name: 'Data Protection',          questionCount: 4, maxPoints: 20 },
  { key: 'vendor',    name: 'Vendor & SaaS Risk',       questionCount: 5, maxPoints: 25 },
  { key: 'incident',  name: 'Incident Readiness',       questionCount: 5, maxPoints: 25 },
];

const TOTAL_MAX = 185;

function getGrade(score, maxPoints) {
  const pct = score / maxPoints;
  if (pct >= 0.88) return 'A';
  if (pct >= 0.68) return 'B';
  if (pct >= 0.48) return 'C';
  if (pct >= 0.28) return 'D';
  return 'F';
}

// Risk estimates per category per grade (from SCORING-MATRIX-v2.md)
const CATEGORY_RISKS = {
  identity:  { A: '<$25K', B: '$25K-$75K',  C: '$75K-$200K',  D: '$200K-$500K', F: '$500K-$1M+' },
  devices:   { A: '<$15K', B: '$15K-$50K',  C: '$50K-$150K',  D: '$150K-$400K', F: '$400K-$1M+' },
  email:     { A: '<$10K', B: '$10K-$50K',  C: '$50K-$200K',  D: '$200K-$500K', F: '$500K-$2.9M+' },
  backup:    { A: '<$10K', B: '$10K-$50K',  C: '$50K-$150K',  D: '$150K-$500K', F: '$500K-$1M+' },
  network:   { A: '<$10K', B: '$10K-$40K',  C: '$40K-$120K',  D: '$120K-$300K', F: '$300K-$750K' },
  data:      { A: '<$15K', B: '$15K-$60K',  C: '$60K-$200K',  D: '$200K-$500K', F: '$500K-$1M+' },
  vendor:    { A: '<$10K', B: '$10K-$50K',  C: '$50K-$150K',  D: '$150K-$400K', F: '$400K-$1M+' },
  incident:  { A: '<$10K', B: '$10K-$40K',  C: '$40K-$150K',  D: '$150K-$400K', F: '$400K-$1M+' },
};

const OVERALL_RISKS = {
  A: '<$83K annual risk exposure',
  B: '$83K-$300K annual risk exposure',
  C: '$300K-$750K annual risk exposure',
  D: '$750K-$2M annual risk exposure',
  F: '$1M-$4M+ annual risk exposure',
};

// Mothertree cascade teasers (pre-computed — vague indicators, no specifics)
const CASCADE_TEASERS = {
  identity:  { cascades: 6, frameworks: 4, hint: 'Identity gaps cascade across 6 connected security domains' },
  devices:   { cascades: 5, frameworks: 3, hint: 'Unpatched endpoints expose you under 3 compliance frameworks' },
  email:     { cascades: 4, frameworks: 3, hint: 'Email defense gaps affect 4 downstream security controls' },
  backup:    { cascades: 5, frameworks: 4, hint: 'Backup failures cascade into 5 domains during incident response' },
  network:   { cascades: 4, frameworks: 3, hint: 'Network visibility gaps affect 4 connected control areas' },
  data:      { cascades: 5, frameworks: 4, hint: 'Data protection gaps expose you under 4 regulatory frameworks' },
  vendor:    { cascades: 6, frameworks: 5, hint: 'Vendor risk gaps cascade across 6 domains — your weakest link may not be yours' },
  incident:  { cascades: 7, frameworks: 5, hint: 'Incident readiness gaps affect every other security domain' },
};

function scoreAssessment(answers) {
  // answers = array of 37 numbers (0-5 point values, one per question)
  if (!Array.isArray(answers) || answers.length !== 37) {
    return null;
  }

  let questionIndex = 0;
  const categoryResults = [];

  for (const cat of CATEGORIES) {
    const catAnswers = answers.slice(questionIndex, questionIndex + cat.questionCount);
    const score = catAnswers.reduce((sum, v) => sum + (parseInt(v) || 0), 0);
    const grade = getGrade(score, cat.maxPoints);
    const pct = Math.round((score / cat.maxPoints) * 100);

    categoryResults.push({
      key: cat.key,
      name: cat.name,
      score,
      maxPoints: cat.maxPoints,
      grade,
      pct,
      risk: CATEGORY_RISKS[cat.key][grade],
      cascade: CASCADE_TEASERS[cat.key],
    });

    questionIndex += cat.questionCount;
  }

  const totalScore = categoryResults.reduce((sum, c) => sum + c.score, 0);
  const overallGrade = getGrade(totalScore, TOTAL_MAX);
  const overallPct = Math.round((totalScore / TOTAL_MAX) * 100);

  // Top 3 risks (lowest percentage scores)
  const topRisks = [...categoryResults]
    .sort((a, b) => a.pct - b.pct)
    .slice(0, 3);

  return {
    totalScore,
    totalMax: TOTAL_MAX,
    overallGrade,
    overallPct,
    overallRisk: OVERALL_RISKS[overallGrade],
    categories: categoryResults,
    topRisks: topRisks.map(r => ({
      name: r.name,
      grade: r.grade,
      risk: r.risk,
      cascadeHint: r.cascade.hint,
    })),
  };
}

// ── GHL Integration ─────────────────────────────────────────────────────────

// Lazy-loaded map of GHL custom field fieldKey → id for the location.
// GHL v2 PUT /contacts/{id} requires field IDs (not keys); we fetch the map
// once per cold start and cache for the lambda's lifetime.
let fieldIdCache = null;
async function getFieldId(fieldKey) {
  if (!fieldIdCache) {
    const res = await ghlRequest('GET', `/locations/${GHL_LOCATION_ID}/customFields`);
    const fields = res?.customFields || [];
    fieldIdCache = Object.fromEntries(fields.map(f => [f.fieldKey, f.id]));
    console.log(`[assess] Cached ${fields.length} GHL custom field IDs`);
  }
  const id = fieldIdCache[fieldKey];
  if (!id) console.warn(`[assess] Unknown GHL field key: ${fieldKey}`);
  return id;
}

async function buildCustomFields(entries) {
  // entries: [[fieldKey, field_value], ...]
  const resolved = await Promise.all(entries.map(async ([key, value]) => {
    const id = await getFieldId(key);
    return id ? { id, field_value: value } : null;
  }));
  return resolved.filter(Boolean);
}

async function ghlRequest(method, path, body = null) {
  const opts = {
    method,
    headers: {
      'Authorization': `Bearer ${GHL_API_KEY}`,
      'Version': '2021-07-28',
      'Content-Type': 'application/json',
    },
  };
  if (body) opts.body = JSON.stringify(body);

  const res = await fetch(`https://services.leadconnectorhq.com${path}`, opts);
  if (!res.ok) {
    const text = await res.text();
    console.error(`[assess] GHL ${method} ${path} → ${res.status}: ${text}`);
    return null;
  }
  return res.json();
}

async function findOrCreateContact(lead) {
  // Search by email
  const search = await ghlRequest('GET',
    `/contacts/?locationId=${GHL_LOCATION_ID}&query=${encodeURIComponent(lead.email)}&limit=1`
  );

  let contactId;
  if (search?.contacts?.length > 0) {
    contactId = search.contacts[0].id;
  } else {
    // Create new contact
    const customFields = await buildCustomFields([
      ['contact.role_title', lead.role || ''],
      ['contact.company_size', lead.companySize || ''],
    ]);
    const created = await ghlRequest('POST', '/contacts/', {
      locationId: GHL_LOCATION_ID,
      firstName: lead.firstName,
      lastName: lead.lastName,
      email: lead.email,
      companyName: lead.company || '',
      source: 'Signal Score Assessment',
      tags: ['signal-score'],
      customFields,
    });
    contactId = created?.contact?.id;
  }

  return contactId;
}

async function updateContactScores(contactId, results) {
  const now = new Date().toISOString().split('T')[0]; // YYYY-MM-DD

  const customFields = await buildCustomFields([
    ['contact.signal_score_overall', String(results.totalScore)],
    ['contact.signal_score_grade', results.overallGrade],
    ['contact.signal_score_date', now],
    ...results.categories.map(c => [
      `contact.signal_score_${c.key}`,
      `${c.grade} (${c.score}/${c.maxPoints})`,
    ]),
  ]);

  await ghlRequest('PUT', `/contacts/${contactId}`, {
    tags: ['signal-score', `signal-grade-${results.overallGrade.toLowerCase()}`],
    customFields,
  });
}

async function createOpportunity(contactId, lead, results) {
  if (!GHL_PIPELINE_ID || !GHL_PIPELINE_STAGE_ID) {
    console.log('[assess] Pipeline not configured — skipping opportunity creation');
    return;
  }

  await ghlRequest('POST', '/opportunities/', {
    pipelineId: GHL_PIPELINE_ID,
    pipelineStageId: GHL_PIPELINE_STAGE_ID,
    locationId: GHL_LOCATION_ID,
    contactId,
    name: `Signal Score: ${lead.firstName} ${lead.lastName} (${results.overallGrade})`,
    status: 'open',
    monetaryValue: results.overallGrade === 'F' ? 7500 :
                   results.overallGrade === 'D' ? 7500 :
                   results.overallGrade === 'C' ? 10000 : 3000,
    source: 'Signal Score Assessment',
  });
}

// ── Beehiiv Integration ─────────────────────────────────────────────────────

async function subscribeToNewsletter(email, firstName, lastName) {
  if (!BEEHIIV_API_KEY) {
    console.log('[assess] Beehiiv not configured — skipping subscription');
    return;
  }

  try {
    const res = await fetch(
      `https://api.beehiiv.com/v2/publications/${BEEHIIV_PUB_ID}/subscriptions`,
      {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${BEEHIIV_API_KEY}`,
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          email,
          reactivate_existing: true,
          send_welcome_email: false,
          utm_source: 'signal_score',
          utm_medium: 'assessment',
          custom_fields: [
            { name: 'First Name', value: firstName || '' },
            { name: 'Last Name', value: lastName || '' },
          ],
        }),
      }
    );

    if (res.ok) {
      console.log(`[assess] Beehiiv subscribed: ${email}`);
    } else {
      const text = await res.text();
      console.error(`[assess] Beehiiv error: ${res.status} ${text}`);
    }
  } catch (err) {
    console.error(`[assess] Beehiiv fetch error: ${err.message}`);
  }
}

// ── PDF Report Generation + Email Delivery ─────────────────────────────────

const SCORE_NARRATIVES = {
  A: 'Exceptional posture with security baked into operational fundamentals. Baseline is strong; focus shifts to maintaining vigilance and closing edge cases.',
  B: 'Solid foundation with a few manageable gaps. Ahead of most peers, but specific cascades below warrant attention before they compound.',
  C: 'Mid-tier posture with real cascade failures. Fix the weakest two domains and you move to a B within a quarter.',
  D: 'Dangerous territory — statistically likely to have a costly incident in the next 12–24 months without intervention.',
  F: 'Critical exposure. Operating on borrowed time. The cascade risks below are not theoretical — they are the playbook attackers actually use.',
};

const CATEGORY_RISK_DESCRIPTIONS = {
  identity: {
    A: 'MFA everywhere, password manager enforced, access reviews quarterly.',
    B: 'MFA on critical systems, offboarding same-day, some reviews.',
    C: 'MFA on email only, shared admin accounts, cleanup happens eventually.',
    D: 'Spotty MFA, weak passwords, ex-employees still have access.',
    F: 'No MFA, no password policy, no offboarding process.',
  },
  devices: {
    A: 'EDR + encryption + auto-patching + device inventory.',
    B: 'Business AV + encryption, regular manual patching.',
    C: 'Basic AV, inconsistent encryption, patches when prompted.',
    D: 'Outdated AV, no encryption, months behind on patches.',
    F: 'No protection, unpatched, unsupported OS in production.',
  },
  email: {
    A: 'Advanced filtering + DMARC enforced + regular phishing tests + security culture.',
    B: 'Good filtering, DMARC monitoring, trained users.',
    C: 'Basic spam filtering, SPF exists, some awareness.',
    D: 'Poor filtering, no DMARC, regular phishing victims.',
    F: 'No email security, domain spoofable, users click everything.',
  },
  backup: {
    A: '3-2-1 + immutable + tested quarterly + known RTO.',
    B: 'Regular backups, offsite, tested annually.',
    C: 'Backups exist but untested, scope unclear.',
    D: 'Sporadic backups, no offsite, never tested.',
    F: 'No backups — ransomware = game over.',
  },
  network: {
    A: 'NGFW + segmentation + VPN w/MFA + active monitoring.',
    B: 'Business firewall, guest WiFi separated, VPN.',
    C: 'Basic firewall, some segmentation, logs unreviewed.',
    D: 'Consumer router, flat network, exposed RDP.',
    F: 'ISP modem, open WiFi, no visibility.',
  },
  data: {
    A: 'Classified, encrypted, inventoried, policy-driven.',
    B: 'Encryption + secure sharing + known sensitive data.',
    C: 'Partial encryption, informal policies.',
    D: 'No encryption, no controls, data scattered.',
    F: 'No idea where data lives, wide open access.',
  },
  vendor: {
    A: 'Vendor inventory, security reviews, contractual protections.',
    B: 'Major vendors tracked, some security evaluation.',
    C: 'Know some vendors, no formal evaluation.',
    D: 'No inventory, shadow IT, no vendor evaluation.',
    F: 'No idea what tools are in use or who has your data.',
  },
  incident: {
    A: 'IR plan + exercises + insurance + legal obligations known.',
    B: 'Plan documented, insurance, some practice.',
    C: 'Informal plan, some insurance.',
    D: 'Would call IT, no plan, no insurance.',
    F: 'No plan, no insurance, panic mode.',
  },
};

const CATEGORY_QUICK_WINS = {
  identity: {
    F: ['Turn on MFA for email and admin accounts this week.', 'Audit who has admin access to financials today.'],
    D: ['Enforce MFA on email, finance, and file storage.', 'Remove ex-employee access within 24 hours of termination.'],
    C: ['Extend MFA beyond email to every SaaS with customer data.', 'Issue dedicated admin accounts separate from daily-use accounts.'],
    B: ['Add quarterly access reviews to your operational cadence.', 'Automate offboarding from your HRIS → identity provider.'],
    A: ['Run a tabletop on admin-account compromise scenarios.'],
  },
  devices: {
    F: ['Install business-grade EDR within 7 days.', 'Identify every unsupported OS in production — retire or isolate.'],
    D: ['Turn on full-disk encryption across every laptop.', 'Set a 7-day max patch SLA for critical security updates.'],
    C: ['Upgrade to EDR from consumer AV.', 'Stand up an MDM or RMM to inventory every device.'],
    B: ['Verify monthly that patches are actually reaching every device.', 'Add MDM remote-wipe capability to every mobile device.'],
    A: ['Test device recovery scenarios quarterly.'],
  },
  email: {
    F: ['Publish DMARC at p=quarantine for your primary sending domain this week.', 'Turn on advanced email protection (Defender for O365, Proofpoint, or equivalent).'],
    D: ['Add SPF + DKIM + DMARC for every domain you send from.', 'Run your first phishing simulation within 30 days.'],
    C: ['Move DMARC from monitor to enforcement (p=reject).', 'Add a one-click phishing-report button in your email client.'],
    B: ['Extend phishing simulations to quarterly cadence.', 'Add enhanced monitoring for executive email accounts.'],
    A: ['Run adversary simulation against your email stack annually.'],
  },
  backup: {
    F: ['Stand up 3-2-1 backup for critical systems within 14 days.', 'Test-restore one real dataset this month.'],
    D: ['Add an offline or immutable copy of your backups.', 'Schedule a full restore test within 60 days.'],
    C: ['Move backups off the production network (or make them immutable).', 'Document your RTO and test against it.'],
    B: ['Shorten your RTO by testing against realistic scenarios.', "Automate backup verification — don't just check that the job ran."],
    A: ['Run a ransomware tabletop against your recovery procedures.'],
  },
  network: {
    F: ['Replace the ISP modem with a business-grade firewall within 30 days.', 'Close exposed RDP — require VPN-with-MFA for remote access.'],
    D: ['Separate guest WiFi onto its own VLAN.', 'Upgrade the consumer router to a business NGFW.'],
    C: ['Enable threat detection features on your existing firewall.', 'Assign someone to review firewall logs weekly.'],
    B: ['Segment finance and HR onto their own VLANs.', 'Add DNS filtering (Cloudflare Gateway, Cisco Umbrella).'],
    A: ['Run regular network-wide threat hunts.'],
  },
  data: {
    F: ['Draft a one-page data inventory this week — where does customer data live?', "Turn on disk encryption where it's free (BitLocker, FileVault)."],
    D: ['Publish a data classification policy (even a simple three-tier one).', 'Stop sharing sensitive files via email attachment — use a secure tool.'],
    C: ['Extend encryption to server-side and cloud storage.', 'Stand up access logging for sensitive data stores.'],
    B: ['Map the full data lifecycle — creation to deletion.', 'Add DLP controls for your top-two data categories.'],
    A: ['Run regular data discovery scans to catch drift.'],
  },
  vendor: {
    F: ['Build a vendor inventory this week — every SaaS tool in use.', 'Require SOC 2 review for any vendor touching customer data.'],
    D: ["Review access scopes for every OAuth integration you've granted.", 'Establish a vendor approval workflow — no more shadow procurements.'],
    C: ['Annual security review for Tier-1 vendors (payroll, CRM, accounting).', 'Document what data each Tier-1 vendor holds.'],
    B: ['Formalize contractual security requirements for new vendors.', 'Include vendor breach scenarios in your IR planning.'],
    A: ['Run vendor concentration risk analysis annually.'],
  },
  incident: {
    F: ['Write a one-page IR plan this week — who to call first.', 'Get a cyber insurance quote.'],
    D: ['Run a 90-minute tabletop exercise against a ransomware scenario.', 'Identify legal counsel and breach-coach in advance.'],
    C: ['Document your notification obligations (state, federal, contractual).', 'Rehearse your incident response quarterly.'],
    B: ['Expand tabletop exercises to cover supply-chain scenarios.', 'Pre-position forensic retainer relationships.'],
    A: ['Run realistic red-team exercises annually.'],
  },
};

function buildSummary(results, lead) {
  const company = (lead.company || '').trim() || 'Your organization';
  const position = {
    A: 'strong',
    B: 'solid with room to tighten',
    C: 'mid-tier with real gaps',
    D: 'well below industry expectations',
    F: 'at critical risk',
  }[results.overallGrade];

  const sortedCats = [...results.categories].sort((a, b) => a.pct - b.pct);
  const weakest = sortedCats[0];
  const secondWeakest = sortedCats[1];

  return `${company}'s posture is ${position}. The biggest exposures live in ${weakest.name} (Grade ${weakest.grade}) and ${secondWeakest.name} (Grade ${secondWeakest.grade}). The cascade hints below show how weaknesses in those domains propagate to the rest of your security posture.`;
}

function buildTopRisks(results) {
  const sortedCats = [...results.categories].sort((a, b) => a.pct - b.pct);
  return sortedCats.slice(0, 5).map(cat => {
    const desc = CATEGORY_RISK_DESCRIPTIONS[cat.key]?.[cat.grade] || '';
    return `${cat.name} (${cat.grade}) — ${desc}`;
  });
}

function buildQuickWins(results) {
  const sortedCats = [...results.categories].sort((a, b) => a.pct - b.pct);
  const wins = [];
  for (const cat of sortedCats) {
    if (wins.length >= 5) break;
    const catWins = CATEGORY_QUICK_WINS[cat.key]?.[cat.grade] || [];
    for (const w of catWins) {
      if (wins.length >= 5) break;
      wins.push(w);
    }
  }
  return wins;
}

function buildPdfPayload(results, lead) {
  const today = new Date().toLocaleDateString('en-US', {
    year: 'numeric', month: 'long', day: 'numeric',
  });
  const company = (lead.company || '').trim() ||
    `${lead.firstName || ''} ${lead.lastName || ''}`.trim() ||
    'Signal Score Report';

  return {
    company,
    email: lead.email,
    date: today,
    overall_grade: results.overallGrade,
    overall_score: results.totalScore,
    annual_risk: results.overallRisk,
    score_narrative: SCORE_NARRATIVES[results.overallGrade],
    summary: buildSummary(results, lead),
    top_risks: buildTopRisks(results),
    quick_wins: buildQuickWins(results),
    categories: results.categories.map(c => {
      const entry = {
        name: c.name,
        grade: c.grade,
        score: c.score,
        max: c.maxPoints,
        risk_range: c.risk,
      };
      if (['D', 'F'].includes(c.grade) && c.cascade?.hint) {
        entry.cascade_hint = c.cascade.hint;
      }
      return entry;
    }),
  };
}

async function generatePdf(payload) {
  if (!PDF_SERVICE_TOKEN || !CF_ACCESS_CLIENT_ID || !CF_ACCESS_CLIENT_SECRET) {
    console.warn('[assess] PDF service credentials missing — skipping PDF generation');
    return null;
  }
  try {
    const res = await fetch(PDF_SERVICE_URL, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${PDF_SERVICE_TOKEN}`,
        'CF-Access-Client-Id': CF_ACCESS_CLIENT_ID,
        'CF-Access-Client-Secret': CF_ACCESS_CLIENT_SECRET,
      },
      body: JSON.stringify(payload),
    });
    if (!res.ok) {
      const text = await res.text();
      console.error(`[assess] PDF service ${res.status}: ${text}`);
      return null;
    }
    const data = await res.json();
    if (!data.downloadUrl) {
      console.error('[assess] PDF service response missing downloadUrl');
      return null;
    }
    console.log(`[assess] PDF generated: ${data.downloadUrl}`);
    return data.downloadUrl;
  } catch (err) {
    console.error(`[assess] PDF service error: ${err.message}`);
    return null;
  }
}

async function updateContactReportUrl(contactId, downloadUrl) {
  const customFields = await buildCustomFields([
    ['contact.signal_score_report_url', downloadUrl],
  ]);
  if (customFields.length === 0) {
    console.warn('[assess] signal_score_report_url field not found in GHL');
    return;
  }
  await ghlRequest('PUT', `/contacts/${contactId}`, { customFields });
}

function escapeHtml(str) {
  if (!str) return '';
  return String(str)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');
}

function buildEmailHtml(lead, results, downloadUrl) {
  const firstName = escapeHtml(lead.firstName);
  const grade = escapeHtml(results.overallGrade);
  const url = escapeHtml(downloadUrl);
  return `<!DOCTYPE html>
<html>
<body style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;color:#1a1a1a;line-height:1.55;max-width:600px;margin:0 auto;padding:16px;">
  <p>Hi ${firstName},</p>
  <p>Your full Signal Score cascade report is ready — Grade ${grade}.</p>

  <p style="text-align:center;margin:32px 0;">
    <a href="${url}" style="display:inline-block;background:#8B0000;color:#ffffff;text-decoration:none;padding:14px 32px;border-radius:6px;font-weight:600;font-size:16px;">Download Your Full Report</a>
  </p>

  <p><strong>What's in it:</strong></p>
  <ul>
    <li>Your 8-domain breakdown with specific risk dollar ranges</li>
    <li>The cascade hints that were blurred on your results page — how each weak domain pulls down its neighbors</li>
    <li>Three things you can do Monday morning that move your grade the most</li>
  </ul>
  <p><strong>A few things worth knowing:</strong></p>
  <ul>
    <li>The dollar figures are industry ranges, not quotes for your environment</li>
    <li>"Grade" isn't a compliance score — it's a fit-for-growth signal</li>
    <li>Cascade patterns are the shape I see most often across 20 years in SMB security</li>
  </ul>
  <p>If any of it sparks a conversation — reply to this email or grab time on my calendar: <a href="https://echocyber.io/schedule">echocyber.io/schedule</a></p>
  <p style="margin-top:32px;">— Mike<br>Fractional CTO / CISO<br>Echo Cyber</p>

  <p style="margin-top:32px;font-size:12px;color:#888;">
    Having trouble with the button? Paste this into your browser:<br>
    <a href="${url}" style="color:#888;word-break:break-all;">${url}</a>
  </p>
</body>
</html>`;
}

async function sendReportEmail(contactId, lead, downloadUrl, results) {
  if (!contactId) {
    console.warn('[assess] No contactId — skipping email send');
    return false;
  }
  if (!downloadUrl) {
    console.warn('[assess] No downloadUrl — skipping email send');
    return false;
  }
  try {
    const res = await fetch('https://services.leadconnectorhq.com/conversations/messages', {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${GHL_API_KEY}`,
        'Version': '2021-04-15',
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        type: 'Email',
        contactId,
        subject: `Your Signal Score cascade report — Grade ${results.overallGrade}`,
        html: buildEmailHtml(lead, results, downloadUrl),
      }),
    });
    if (!res.ok) {
      const text = await res.text();
      console.error(`[assess] GHL email send ${res.status}: ${text}`);
      return false;
    }
    console.log(`[assess] Report emailed to ${lead.email}`);
    return true;
  } catch (err) {
    console.error(`[assess] GHL email send error: ${err.message}`);
    return false;
  }
}

// ── Rate Limiting ───────────────────────────────────────────────────────────

const submissions = new Map();
const RATE_LIMIT = 3;
const RATE_WINDOW_MS = 30 * 60 * 1000; // 30 minutes

function isRateLimited(ip) {
  const now = Date.now();
  const record = submissions.get(ip);
  if (!record) {
    submissions.set(ip, { count: 1, firstAt: now });
    return false;
  }
  if (now - record.firstAt > RATE_WINDOW_MS) {
    submissions.set(ip, { count: 1, firstAt: now });
    return false;
  }
  record.count++;
  return record.count > RATE_LIMIT;
}

// ── Handler ─────────────────────────────────────────────────────────────────

export default async (req, context) => {
  const headers = {
    'Content-Type': 'application/json',
    'Access-Control-Allow-Origin': 'https://echocyber.io',
    'Access-Control-Allow-Methods': 'POST, OPTIONS',
    'Access-Control-Allow-Headers': 'Content-Type',
  };

  // CORS preflight
  if (req.method === 'OPTIONS') {
    return new Response(null, { status: 204, headers });
  }

  if (req.method !== 'POST') {
    return new Response(JSON.stringify({ error: 'Method not allowed' }), { status: 405, headers });
  }

  // Rate limiting
  const ip = context.ip || req.headers.get('x-forwarded-for') || 'unknown';
  if (isRateLimited(ip)) {
    console.log(`[assess] Rate limited: ${ip}`);
    return new Response(JSON.stringify({ error: 'Too many submissions' }), { status: 429, headers });
  }

  let data;
  try {
    data = await req.json();
  } catch {
    return new Response(JSON.stringify({ error: 'Invalid JSON' }), { status: 400, headers });
  }

  // Validate input
  const { answers, lead } = data;
  if (!answers || !lead) {
    return new Response(JSON.stringify({ error: 'Missing answers or lead data' }), { status: 400, headers });
  }
  if (!lead.email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(lead.email)) {
    return new Response(JSON.stringify({ error: 'Valid email required' }), { status: 400, headers });
  }
  if (!lead.firstName?.trim() || !lead.lastName?.trim()) {
    return new Response(JSON.stringify({ error: 'Name required' }), { status: 400, headers });
  }

  // Score
  const results = scoreAssessment(answers);
  if (!results) {
    return new Response(JSON.stringify({ error: 'Invalid answers — expected 37 values' }), { status: 400, headers });
  }

  console.log(`[assess] Scored: ${lead.email} → ${results.overallGrade} (${results.totalScore}/${TOTAL_MAX})`);

  // GHL: create/update contact and push scores
  let contactId = null;
  if (GHL_API_KEY) {
    try {
      contactId = await findOrCreateContact(lead);
      if (contactId) {
        await updateContactScores(contactId, results);
        await createOpportunity(contactId, lead, results);
        console.log(`[assess] GHL contact updated: ${contactId}`);
      }
    } catch (err) {
      console.error(`[assess] GHL error: ${err.message}`);
      // Don't fail the request — still return results
    }
  }

  // PDF generation → write URL to contact custom field → email with download button.
  // Any step failing is logged but does not break the teaser response.
  try {
    const pdfPayload = buildPdfPayload(results, lead);
    const downloadUrl = await generatePdf(pdfPayload);
    if (downloadUrl && contactId) {
      await updateContactReportUrl(contactId, downloadUrl);
      await sendReportEmail(contactId, lead, downloadUrl, results);
    } else if (!downloadUrl) {
      console.warn('[assess] PDF generation returned null — email not sent');
    } else if (!contactId) {
      console.warn('[assess] No contactId — PDF generated but not delivered');
    }
  } catch (err) {
    console.error(`[assess] PDF/email pipeline error: ${err.message}`);
  }

  // Beehiiv: subscribe if opted in
  if (lead.newsletter) {
    await subscribeToNewsletter(lead.email, lead.firstName, lead.lastName);
  }

  // Return teaser results (no full details — just grades, risks, cascade hints)
  return new Response(JSON.stringify({
    ok: true,
    results: {
      overallGrade: results.overallGrade,
      overallPct: results.overallPct,
      overallRisk: results.overallRisk,
      totalScore: results.totalScore,
      totalMax: results.totalMax,
      categories: results.categories.map(c => ({
        name: c.name,
        grade: c.grade,
        pct: c.pct,
        score: c.score,
        maxPoints: c.maxPoints,
        risk: c.risk,
      })),
      topRisks: results.topRisks,
    },
  }), { status: 200, headers });
};

export const config = {
  method: ['POST', 'OPTIONS'],
};
