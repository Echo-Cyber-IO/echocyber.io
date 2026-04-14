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
    const created = await ghlRequest('POST', '/contacts/', {
      locationId: GHL_LOCATION_ID,
      firstName: lead.firstName,
      lastName: lead.lastName,
      email: lead.email,
      companyName: lead.company || '',
      source: 'Signal Score Assessment',
      tags: ['signal-score'],
      customFields: [
        { key: 'contact.role_title', field_value: lead.role || '' },
        { key: 'contact.company_size', field_value: lead.companySize || '' },
      ],
    });
    contactId = created?.contact?.id;
  }

  return contactId;
}

async function updateContactScores(contactId, results) {
  const now = new Date().toISOString().split('T')[0]; // YYYY-MM-DD

  await ghlRequest('PUT', `/contacts/${contactId}`, {
    tags: ['signal-score', `signal-grade-${results.overallGrade.toLowerCase()}`],
    customFields: [
      { key: 'contact.signal_score_overall', field_value: results.totalScore },
      { key: 'contact.signal_score_grade', field_value: results.overallGrade },
      { key: 'contact.signal_score_date', field_value: now },
      ...results.categories.map(c => ({
        key: `contact.signal_score_${c.key}`,
        field_value: `${c.grade} (${c.score}/${c.maxPoints})`,
      })),
    ],
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
