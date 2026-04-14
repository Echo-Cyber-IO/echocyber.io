// Netlify Function: Newsletter subscription
// Accepts { email, source? }, subscribes to Beehiiv, returns ok/error.

const BEEHIIV_API_KEY = process.env.BEEHIIV_API_KEY;
const BEEHIIV_PUB_ID = process.env.BEEHIIV_PUB_ID || 'pub_4aa9e626-adfb-44d3-991a-ba8cbdd146fa';

const submissions = new Map();
const RATE_LIMIT = 5;
const RATE_WINDOW_MS = 30 * 60 * 1000;

function isRateLimited(ip) {
  const now = Date.now();
  const record = submissions.get(ip);
  if (!record || now - record.firstAt > RATE_WINDOW_MS) {
    submissions.set(ip, { count: 1, firstAt: now });
    return false;
  }
  record.count++;
  return record.count > RATE_LIMIT;
}

export default async (req, context) => {
  const headers = {
    'Content-Type': 'application/json',
    'Access-Control-Allow-Origin': 'https://echocyber.io',
    'Access-Control-Allow-Methods': 'POST, OPTIONS',
    'Access-Control-Allow-Headers': 'Content-Type',
  };

  if (req.method === 'OPTIONS') return new Response(null, { status: 204, headers });
  if (req.method !== 'POST') {
    return new Response(JSON.stringify({ error: 'Method not allowed' }), { status: 405, headers });
  }

  const ip = context.ip || req.headers.get('x-forwarded-for') || 'unknown';
  if (isRateLimited(ip)) {
    return new Response(JSON.stringify({ error: 'Too many submissions' }), { status: 429, headers });
  }

  let data;
  try { data = await req.json(); }
  catch { return new Response(JSON.stringify({ error: 'Invalid JSON' }), { status: 400, headers }); }

  const { email, source } = data;
  if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    return new Response(JSON.stringify({ error: 'Valid email required' }), { status: 400, headers });
  }

  if (!BEEHIIV_API_KEY) {
    console.error('[subscribe] BEEHIIV_API_KEY not configured');
    return new Response(JSON.stringify({ error: 'Newsletter unavailable' }), { status: 503, headers });
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
          send_welcome_email: true,
          utm_source: source || 'homepage',
          utm_medium: 'website',
        }),
      }
    );

    if (!res.ok) {
      const text = await res.text();
      console.error(`[subscribe] Beehiiv error: ${res.status} ${text}`);
      return new Response(JSON.stringify({ error: 'Subscription failed' }), { status: 502, headers });
    }

    console.log(`[subscribe] ${email} subscribed (source: ${source || 'homepage'})`);
    return new Response(JSON.stringify({ ok: true }), { status: 200, headers });
  } catch (err) {
    console.error(`[subscribe] fetch error: ${err.message}`);
    return new Response(JSON.stringify({ error: 'Subscription failed' }), { status: 502, headers });
  }
};

export const config = { method: ['POST', 'OPTIONS'] };
