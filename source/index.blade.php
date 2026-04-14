---
title: Fractional CTO & CISO
description: Fractional CTO & CISO for growth-stage companies navigating technology and security decisions without full-time executive leadership.
---
@extends('_layouts.main')

@section('body')

{{-- ==================== HERO ==================== --}}
{{-- Full dark. Statement, not a sales pitch. --}}
<section class="relative overflow-hidden">
    {{-- Decorative crimson gradient blur (hex-grid comes from the layout) --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/50 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 sm:py-28 lg:px-8 lg:py-32">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="font-display text-5xl font-bold tracking-tight text-white sm:text-7xl lg:text-8xl">
                Translating <span class="text-crimson-500">geek</span> into human.
            </h1>
            <p class="mx-auto mt-8 max-w-2xl text-xl leading-8 text-echo-300">
                Fractional CTO &amp; CISO for founders who know they need a technology and security strategy&nbsp;&mdash; but aren't ready to hire a $250K executive to get one.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row sm:gap-x-5">
                <a href="/contact" class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                    Schedule a Clarity Call
                </a>
                <a href="/assessment" class="group inline-flex items-center gap-2 rounded-lg border border-crimson-700 bg-crimson-900/20 px-6 py-3.5 text-sm font-semibold text-white transition-all hover:border-crimson-500 hover:bg-crimson-900/40 hover:shadow-glow">
                    Discover your Signal Score
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Stats strip --}}
        <div class="mx-auto mt-20 max-w-4xl">
            <dl class="grid grid-cols-2 gap-x-8 gap-y-10 sm:grid-cols-4">
                <div class="text-center">
                    <dt class="text-sm text-echo-500">Years in the field</dt>
                    <dd class="mt-2 font-display text-4xl font-bold text-white">25+</dd>
                </div>
                <div class="text-center">
                    <dt class="text-sm text-echo-500">Security programs built</dt>
                    <dd class="mt-2 font-display text-4xl font-bold text-white">40+</dd>
                </div>
                <div class="text-center">
                    <dt class="text-sm text-echo-500">Frameworks navigated</dt>
                    <dd class="mt-2 font-display text-4xl font-bold text-white">8+</dd>
                </div>
                <div class="text-center">
                    <dt class="text-sm text-echo-500">Buzzwords on this page</dt>
                    <dd class="mt-2 font-display text-4xl font-bold text-crimson-500">0</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

{{-- ==================== TRUST BAR (pull quote) ==================== --}}
<section class="border-y border-echo-800 bg-echo-900/50 py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <figure class="mx-auto max-w-3xl text-center">
            <svg class="mx-auto h-8 w-8 text-crimson-700/60" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
            </svg>
            <blockquote class="mt-6 text-xl font-medium leading-8 text-white sm:text-2xl sm:leading-9">
                <p>&ldquo;Mike has the ability to communicate technical concepts to a non-technical audience. When assigned a task, you can trust it will be done with the same level of attention to detail as if you had done it yourself.&rdquo;</p>
            </blockquote>
            <figcaption class="mt-8">
                <div class="font-semibold text-white">JD Helms</div>
                <div class="mt-1 text-sm text-echo-400">COO @ SoftwareOne &middot; Co-Founder @ PsychReport.ai</div>
            </figcaption>
        </figure>
    </div>
</section>

{{-- ==================== THE PROBLEM (conversational) ==================== --}}
<section class="bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <div class="flex items-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">The real problem</span>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-5xl">
                You don't have a security problem. You have a leadership gap.
            </h2>
            <div class="mt-10 space-y-6 text-lg leading-8 text-echo-300">
                <p>
                    Every vendor in your inbox is selling urgency. Firewalls, endpoint protection, zero trust, AI-powered threat detection&nbsp;&mdash; the list never stops and nobody's translating it into decisions you can actually make.
                </p>
                <p>
                    A client sent you a security questionnaire and your team is scrambling. Your cyber insurance premium just doubled. Someone mentioned SOC 2 and the room went quiet.
                </p>
                <p class="text-white font-medium">
                    Sound familiar?
                </p>
                <p>
                    These aren't technology problems. They're what happens when a growing company doesn't have someone in the room who speaks both boardroom and server room.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== WHO I AM (split layout) ==================== --}}
<section id="about" class="bg-echo-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-16 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            {{-- Photo --}}
            <div class="lg:col-span-2">
                <img src="/assets/img/Michael_Faas.jpg"
                     alt="Mike Faas"
                     class="w-full rounded-2xl object-cover object-top aspect-[3/4] ring-1 ring-echo-700/30">
            </div>

            {{-- Bio --}}
            <div class="lg:col-span-3">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Who you're working with</span>
                </div>
                <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    I'm Mike Faas.
                </h2>
                <div class="mt-8 space-y-6 text-lg leading-8 text-echo-300">
                    <p>
                        25+ years building security and technology programs&nbsp;&mdash; Fortune 500 to high-growth startups. I've sat in the CISO chair. I've built the governance programs. I've had the vendor calls where nobody in the room knew what questions to ask.
                    </p>
                    <p>
                        I started Echo Cyber because smart founders are making million-dollar technology decisions with vendor slide decks and gut instinct. Not another consultant talking in acronyms. Someone who can walk into a board meeting and explain what's actually going on&nbsp;&mdash; in plain English.
                    </p>
                    <p class="text-sm italic text-echo-500">
                        Based in Raleigh, NC. Dad. Blue belt. Reluctant morning person.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== WHAT PEOPLE SAY ==================== --}}
<section class="bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex items-center justify-center gap-3">
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">What people say</span>
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        </div>

        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            {{-- Jackson --}}
            <figure class="flex flex-col justify-between rounded-2xl bg-echo-900 p-8 ring-1 ring-echo-700/50 h-full">
                <blockquote class="text-base leading-7 text-echo-200">
                    <p>&ldquo;Mike has an exceptional talent for building authentic, trust-based relationships with customers. He was a key contributor to both strategic direction and client engagement. His skill set brings immediate value and would be an asset to any organization.&rdquo;</p>
                </blockquote>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/50 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-crimson-900/50 flex items-center justify-center ring-1 ring-crimson-700/30">
                        <span class="text-crimson-400 font-bold text-sm">JJ</span>
                    </div>
                    <div>
                        <div class="font-semibold text-white text-sm">James L. Jackson, MBA, CISM</div>
                        <div class="text-echo-500 text-sm">Cybersecurity Leader</div>
                    </div>
                </figcaption>
            </figure>

            {{-- Vosburgh --}}
            <figure class="flex flex-col justify-between rounded-2xl bg-echo-900 p-8 ring-1 ring-echo-700/50 h-full">
                <blockquote class="text-base leading-7 text-echo-200">
                    <p>&ldquo;Mike is a natural problem-solver who remains cool under pressure. He is a born leader who continuously takes on more projects and responsibility to further his expertise.&rdquo;</p>
                </blockquote>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/50 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-crimson-900/50 flex items-center justify-center ring-1 ring-crimson-700/30">
                        <span class="text-crimson-400 font-bold text-sm">JV</span>
                    </div>
                    <div>
                        <div class="font-semibold text-white text-sm">Jennifer Vosburgh</div>
                        <div class="text-echo-500 text-sm">B2B Marketing Executive, Tego &middot; Former Client</div>
                    </div>
                </figcaption>
            </figure>

            {{-- Sorensen --}}
            <figure class="flex flex-col justify-between rounded-2xl bg-echo-900 p-8 ring-1 ring-echo-700/50 h-full">
                <blockquote class="text-base leading-7 text-echo-200">
                    <p>&ldquo;Mike is a strategic leader with deep expertise across multiple technology areas. He knows how to build trusted relationships with his customers, vendors, senior managers, peers, and direct reports. He is one of the good guys.&rdquo;</p>
                </blockquote>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/50 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-crimson-900/50 flex items-center justify-center ring-1 ring-crimson-700/30">
                        <span class="text-crimson-400 font-bold text-sm">KS</span>
                    </div>
                    <div>
                        <div class="font-semibold text-white text-sm">Karan Sorensen, Ed.D, MBA, MS</div>
                        <div class="text-echo-500 text-sm">Innovation &amp; Technology Executive</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

{{-- ==================== HOW IT WORKS (narrative pricing) ==================== --}}
<section id="pricing" class="relative isolate bg-echo-900 py-24 sm:py-32">
    {{-- Subtle gradient backdrop --}}
    <div class="absolute inset-x-0 top-0 -z-10 h-96 bg-gradient-to-b from-crimson-950/30 to-transparent pointer-events-none"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">How it works</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-4xl font-bold tracking-tight text-balance text-white sm:text-6xl">
                Three ways to work together.
            </h2>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-echo-400 sm:text-xl/8">
            No discovery calls that are really sales pitches. No "custom pricing" that means "we'll charge whatever we think you'll pay." Here's exactly what it costs.
        </p>

        <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            {{-- Tune --}}
            @include('_partials.pricing-tier', [
                'name' => 'Tune',
                'tagline' => 'Strategic Assessment',
                'price' => '$7,500',
                'priceSuffix' => 'one-time',
                'description' => 'I map your technology and security landscape, interview your stakeholders, identify the highest-leverage fixes, and hand you a prioritized roadmap you can actually execute.',
                'features' => [
                    'Stakeholder interviews + current-state assessment',
                    'Technology and security gap analysis',
                    'Prioritized roadmap with clear next steps',
                ],
                'cta' => 'Get started',
                'featured' => false,
            ])

            {{-- Signal (featured) --}}
            @include('_partials.pricing-tier', [
                'name' => 'Signal',
                'tagline' => 'Fractional CTO/CISO',
                'price' => '$10,000',
                'priceSuffix' => '/month · 3-month min',
                'description' => 'I join your leadership team part-time. Strategy sessions, vendor calls, team building, incident response, board prep — whatever the role requires that week.',
                'features' => [
                    '10 hours/week embedded with your team',
                    'Staff meetings, vendor calls, board prep',
                    'Governance design + security program buildout',
                    'Roadmap execution and vendor negotiation',
                ],
                'cta' => 'Get started',
                'featured' => true,
            ])

            {{-- Echo --}}
            @include('_partials.pricing-tier', [
                'name' => 'Echo',
                'tagline' => 'Ongoing Advisory',
                'price' => '$3,000',
                'priceSuffix' => '/month · 6-month commitment',
                'description' => "For clients who've finished a Signal engagement. Monthly counsel, quarterly strategic reviews, and on-call support for the decisions that matter.",
                'features' => [
                    'Monthly check-ins + quarterly strategic reviews',
                    'On-call for key decisions and vendor evaluations',
                    'Governance oversight and course corrections',
                ],
                'cta' => 'Get started',
                'featured' => false,
            ])

        </div>

        <p class="mx-auto mt-12 max-w-2xl text-center text-sm text-echo-500">
            Most clients start with Tune. No pressure, no lock-in beyond what's listed above.
        </p>
    </div>
</section>

{{-- ==================== TRACK RECORD ==================== --}}
<section class="bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <div class="flex items-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Track record</span>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Real engagements. Real results.
            </h2>
            <p class="mt-4 text-echo-400 text-sm">Names withheld&nbsp;&mdash; NDAs are a feature, not a limitation.</p>
        </div>

        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            {{-- Case 1 --}}
            <article class="rounded-2xl bg-echo-900 p-8 ring-1 ring-echo-700/50">
                <p class="text-xs font-bold uppercase tracking-wider text-crimson-500">Case 01</p>
                <h3 class="mt-3 text-lg font-semibold text-white">Fortune 500 Retailer</h3>
                <p class="mt-1 text-sm text-echo-500">Hundreds of locations &middot; 5,000+ employees</p>
                <div class="mt-6 space-y-4 text-sm leading-6 text-echo-300">
                    <p>
                        <span class="font-semibold text-echo-200">The problem:</span> Security enforcement was nonexistent at the edge&nbsp;&mdash; POS systems across hundreds of stores required manual intervention, with no centralized governance or policy control.
                    </p>
                    <p>
                        <span class="font-semibold text-echo-200">What I did:</span> Designed a cloud-native device governance framework, migrated 15 legacy policies, and automated enrollment across 4 platforms. The organization had enforceable, auditable security posture for the first time.
                    </p>
                </div>
            </article>

            {{-- Case 2 --}}
            <article class="rounded-2xl bg-echo-900 p-8 ring-1 ring-echo-700/50">
                <p class="text-xs font-bold uppercase tracking-wider text-crimson-500">Case 02</p>
                <h3 class="mt-3 text-lg font-semibold text-white">High-Growth Ecommerce Brand</h3>
                <p class="mt-1 text-sm text-echo-500">900+ users &middot; Rapid scale</p>
                <div class="mt-6 space-y-4 text-sm leading-6 text-echo-300">
                    <p>
                        <span class="font-semibold text-echo-200">The problem:</span> Outgrew their collaboration platform but couldn't afford downtime during a migration that touched every employee, 32TB of data, and 40 business-critical sites.
                    </p>
                    <p>
                        <span class="font-semibold text-echo-200">What I did:</span> Led a zero-disruption platform migration&nbsp;&mdash; 893 active users, 1,200+ archived accounts, identity sync, and policy-driven device reconfiguration. Eliminated legacy infrastructure and reduced administrative overhead.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- ==================== SIGNAL SCORE CTA ==================== --}}
<section id="assessment" class="bg-echo-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Free assessment</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Not ready for a call? Start here.
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-echo-300">
                The Signal Score is a 15-minute self-assessment across 8 categories. You get an instant A&ndash;F grade. No email required. No sales follow-up. Just clarity.
            </p>
            <div class="mt-10">
                <a href="/assessment" class="inline-block rounded-lg bg-white px-8 py-4 text-sm font-semibold text-echo-900 shadow-sm transition-all hover:bg-echo-100">
                    Take the Signal Score Assessment
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ==================== NEWSLETTER ==================== --}}
<section class="border-t border-echo-800 bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Weekly newsletter</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white">
                Signal vs. Noise
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                Cutting through the chaos of cybersecurity and technology&nbsp;&mdash; so you can lead with clarity. One email per week. No fluff, no vendor hype, no fear-mongering.
            </p>
        </div>

        <div x-data="newsletterSignup()" class="mx-auto mt-10 max-w-lg">
            <form @submit.prevent="submit()" x-show="!success" class="flex flex-col gap-3 sm:flex-row">
                <label for="newsletter-email" class="sr-only">Email address</label>
                <input id="newsletter-email" type="email" x-model="email" required
                       placeholder="you@company.com"
                       :disabled="submitting"
                       class="flex-1 px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:border-crimson-500 focus:ring-1 focus:ring-crimson-500 transition disabled:opacity-60">
                <button type="submit" :disabled="submitting"
                        class="px-6 py-3 bg-crimson-700 hover:bg-crimson-600 disabled:opacity-60 disabled:cursor-not-allowed text-white font-semibold rounded-lg transition-all hover:shadow-glow whitespace-nowrap">
                    <span x-text="submitting ? 'Subscribing...' : 'Subscribe'"></span>
                </button>
            </form>

            <div x-show="success" x-cloak x-transition class="rounded-lg border border-crimson-800/50 bg-crimson-950/30 p-4 text-center">
                <p class="font-semibold text-white">You're in. 💎</p>
                <p class="mt-1 text-sm text-echo-300">Check your inbox to confirm.</p>
            </div>

            <p x-show="error" x-cloak class="mt-2 text-center text-sm text-red-400" x-text="error"></p>

            <p class="mt-4 text-center text-sm text-echo-500">
                <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-x-1 text-echo-400 transition-colors hover:text-white">
                    Browse past issues <span aria-hidden="true">&rarr;</span>
                </a>
            </p>
        </div>
    </div>
</section>

{{-- ==================== FINAL CTA ==================== --}}
<section id="contact" class="bg-echo-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Next step</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-5xl">
                Ready to have a real conversation?
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                30 minutes. No pitch&nbsp;&mdash; just honest questions and straight answers. You'll walk away with actionable next steps either way.
            </p>
            <div class="mt-10">
                <a href="/contact" class="inline-block rounded-lg bg-crimson-700 px-8 py-4 text-base font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow">
                    Schedule a Clarity Call
                </a>
            </div>
            <p class="mt-6 text-sm italic text-echo-600">
                Translating geek into human.
            </p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function newsletterSignup() {
    return {
        email: '',
        submitting: false,
        success: false,
        error: '',
        async submit() {
            if (this.submitting) return;
            this.submitting = true;
            this.error = '';
            try {
                const res = await fetch('/.netlify/functions/subscribe', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email: this.email, source: 'homepage' }),
                });
                const data = await res.json().catch(() => ({}));
                if (res.ok && data.ok) {
                    this.success = true;
                } else {
                    this.error = data.error || 'Something went wrong. Try again?';
                }
            } catch (err) {
                this.error = 'Network error. Try again?';
            } finally {
                this.submitting = false;
            }
        },
    };
}
</script>
@endpush
