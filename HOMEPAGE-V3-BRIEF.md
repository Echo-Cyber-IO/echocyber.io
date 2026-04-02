# Homepage v3 — Build Brief

## Goal
Replace the current `source/index.blade.php` with the v3 homepage design. This is a **Jigsaw static site** using **Blade templates** and **Tailwind CSS**.

## Architecture
- **Layout:** `source/_layouts/main.blade.php` (DO NOT modify — it includes nav, footer, hex-grid background, fonts, scripts)
- **Nav partial:** `source/_partials/nav.blade.php` (NEEDS UPDATE — see below)
- **Footer partial:** `source/_partials/footer.blade.php` (NEEDS UPDATE — see below)
- **Homepage:** `source/index.blade.php` (REWRITE — the main deliverable)
- **Tailwind config:** `tailwind.config.js` (may need minor additions)
- **CSS:** `source/_assets/css/main.css` (add custom styles if needed)

## Design Reference
The full prototype HTML is at: `/home/R21/clawd/echo-cyber/website/homepage-prototype-v3.html`

Read it thoroughly before starting — it has all the content, structure, and class names.

## Structure: 4 Acts, 10 Sections

### Act 1: Pain
1. **Hero** (dark, full-viewport) — headline, subheadline with headshot photo, dual CTAs
2. **Problem** (light section) — "Most businesses don't have a technology problem" with 3 problem cards
3. **Sound Familiar?** (light section) — 6 self-identification trigger cards + philosophical quote closer

### Act 2: Person  
4. **Guide** (light section) — Mike's bio with square headshot, credentials, approach
5. **Testimonials** (light section) — 3 LinkedIn recommendations (James L. Jackson, JD Helms, Karan Sorensen)
6. **Track Record** (light section) — anonymized case studies with NDA transparency framing

### Act 3: Plan
7. **Pricing** (light section) — 3 tiers (Tune $7,500 / Signal $10,000/mo / Echo $3,000/mo) with outcome bullets

### Act 4: Next Step
8. **Signal Score CTA** (dark section) — free assessment call-to-action
9. **Newsletter** (dark section) — Signal vs. Noise with Beehiiv embed
10. **Footer CTA** (dark section) — "Ready to turn complexity into clarity?" contact CTA

## Theme: Hybrid Dark/Light
- **Dark sections:** Hero, Signal Score CTA, Newsletter, Footer CTA → use existing `echo-950`/`echo-900` palette
- **Light sections:** Everything in Acts 1-3 → use warm palette (NOT cold gray/white)
  - Section backgrounds: alternate between `bg-white` and a warm off-white/cream
  - Text: dark (`text-stone-800` / `text-stone-900` for headlines)
  - Cards: white with visible shadows against the warm background
  - Accent color: `crimson-500` / `crimson-700` for highlights, CTAs, icons
- **No gradient transitions** between dark and light — clean hard cuts with red-line dividers

## Red-Line Dividers
Between major acts, use: `<img src="/assets/img/red-line.png" alt="" class="w-48 opacity-60 mx-auto" role="presentation">`

## Images Available (in source/assets/img/)
- `mike-faas-hero.jpg` — full-length photo for hero section
- `mike-faas-square.jpg` — square crop for guide section  
- `echo-cyber-logo-white.png` — white horizontal logo (transparent PNG) for dark nav/footer
- `red-line.png` — crimson divider line
- `clients/bose.png`, `clients/brcc.png`, `clients/carhartt.png`, `clients/carnival.png`, `clients/strongrock.png` — existing client logos

## Nav Update (`_partials/nav.blade.php`)
- Replace "Michael Faas" text + logo-hex.png with `echo-cyber-logo-white.png`
- Keep the same structure (fixed, glassmorphism on scroll, mobile menu)
- Logo should be `<img src="/assets/img/echo-cyber-logo-white.png" alt="Echo Cyber" class="h-10 w-auto">`

## Footer Update (`_partials/footer.blade.php`)
- Replace "Michael Faas" text with Echo Cyber logo (same white horizontal)
- Keep the tagline "Navigating complexity. Translating tech."
- Keep nav links, social links, copyright

## Tailwind Config
The existing config has `crimson` and `echo` color palettes, custom fonts (Space Grotesk display, Outfit body, JetBrains Mono), shadows, animations. These should be sufficient.

You may need to add `stone` colors if Tailwind v3 doesn't include them by default (it does — they're a built-in palette, no config needed).

## Key Content Details

### Hero Headline
"The CTO and CISO you're not ready to hire full-time."
Subheadline: "You know you need a security strategy. You don't need a $250K salary to get one."

### Testimonials (exact quotes from prototype)
1. **James L. Jackson** — Leadership/translation quote
2. **JD Helms** — Collaboration/technical depth quote  
3. **Karan Sorensen** — Complex simplification quote

### Pricing Tiers
- **Tune** ($7,500 one-time): Strategy session + roadmap
- **Signal** ($10,000/mo): Fractional engagement, 10 hrs/week, 3-month minimum (FEATURED)
- **Echo** ($3,000/mo): Ongoing advisory, requires prior engagement, 6-month commitment

### Signal Score CTA
Links to `/assessment` — free security self-assessment

## Important Notes
1. This is a Blade template — use `@extends('_layouts.main')` and `@section('body')` / `@endsection`
2. All Tailwind classes from the prototype should work — the config already has the custom palette
3. The layout already adds the hex-grid background for homepage, the fixed nav, and the footer
4. Keep Alpine.js interactions (scroll-triggered animations, etc.)
5. The body in `main.blade.php` is `bg-echo-950` — the light sections need explicit light backgrounds
6. For the Beehiiv embed, use the exact same iframe code from the prototype
7. DO NOT modify `_layouts/main.blade.php` — only touch nav, footer, and index

## Build & Verify
After making changes, run:
```bash
cd /home/R21/clawd/repos/echocyber.io
npm install  # if needed
vendor/bin/jigsaw build
```
Then check `build_local/index.html` to verify the output renders correctly.

When completely finished, run this command to notify:
```bash
openclaw system event --text "Done: Homepage v3 built as Blade templates — index.blade.php rewritten, nav/footer updated with Echo Cyber logo, hybrid dark/light theme applied" --mode now
```
