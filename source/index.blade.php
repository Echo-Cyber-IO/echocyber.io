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
            <div class="mt-10 flex items-center justify-center gap-x-8">
                <a href="/contact" class="rounded-lg bg-crimson-700 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                    Schedule a Clarity Call
                </a>
                <a href="/assessment" class="text-sm font-semibold text-echo-300 transition-colors hover:text-white">
                    Take the Signal Score <span aria-hidden="true">&rarr;</span>
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
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">The real problem</p>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-5xl">
                You don't have a security problem. You have a leadership gap.
            </h2>
            <div class="mt-10 space-y-6 text-lg leading-8 text-echo-300">
                <p>
                    Every vendor in your inbox is selling urgency. Firewalls, endpoint protection, zero trust, AI-powered threat detection&nbsp;&mdash; the list never stops and nobody's translating it into decisions you can actually make.
                </p>
                <p>
                    Meanwhile, you've got a client sending you a security questionnaire and your team is scrambling. Your cyber insurance premium just doubled. Someone mentioned SOC 2 and the room went quiet.
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
                <img src="/assets/img/mike-faas-hero.jpg"
                     alt="Mike Faas"
                     class="w-full rounded-2xl object-cover object-top aspect-[3/4] ring-1 ring-echo-700/30">
            </div>

            {{-- Bio --}}
            <div class="lg:col-span-3">
                <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">Who you're working with</p>
                <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    I'm Mike Faas.
                </h2>
                <div class="mt-8 space-y-6 text-lg leading-8 text-echo-300">
                    <p>
                        25+ years building security and technology programs&nbsp;&mdash; Fortune 500 to high-growth startups. I've sat in the CISO chair. I've built the governance programs. I've had the vendor calls where nobody in the room knew what questions to ask.
                    </p>
                    <p>
                        I started Echo Cyber because too many smart founders are making million-dollar technology decisions with vendor slide decks and gut instinct. They don't need another consultant who talks in acronyms. They need someone who can walk into a board meeting and explain what's actually going on&nbsp;&mdash; in plain English.
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
        <p class="text-center font-mono text-xs uppercase tracking-widest text-crimson-500">What people say</p>

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
<section id="pricing" class="bg-echo-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">How it works</p>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-5xl">
                Three ways to work together.
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                No discovery calls that are really sales pitches. No "custom pricing" that means "we'll charge whatever we think you'll pay." Here's exactly what it costs.
            </p>
        </div>

        <div class="mx-auto mt-16 grid max-w-md grid-cols-1 gap-8 lg:max-w-none lg:grid-cols-3">
            {{-- Tune --}}
            <div class="flex flex-col rounded-2xl bg-echo-950 p-8 ring-1 ring-echo-700/50">
                <div class="flex-1">
                    <div class="flex items-baseline justify-between">
                        <h3 class="font-display text-xl font-semibold text-white">Tune</h3>
                        <span class="text-xs font-medium uppercase tracking-wider text-echo-500">Strategic Assessment</span>
                    </div>
                    <p class="mt-6 flex items-baseline gap-x-2">
                        <span class="font-display text-4xl font-bold tracking-tight text-white">$7,500</span>
                        <span class="text-sm text-echo-500">one-time</span>
                    </p>
                    <p class="mt-6 text-sm leading-6 text-echo-300">
                        I map your technology and security landscape, interview your stakeholders, identify the highest-leverage fixes, and hand you a prioritized roadmap you can actually execute.
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-echo-400">
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Stakeholder interviews + current-state assessment
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Technology and security gap analysis
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Prioritized roadmap with clear next steps
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-echo-800">
                    <a href="/contact" class="block w-full rounded-lg bg-echo-800 px-4 py-3 text-center text-sm font-semibold text-white ring-1 ring-echo-700 transition-all hover:bg-echo-700 hover:ring-echo-600">
                        Get started
                    </a>
                </div>
            </div>

            {{-- Signal (featured) --}}
            <div class="relative flex flex-col rounded-2xl bg-echo-950 p-8 ring-2 ring-crimson-700/50 shadow-glow-sm">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="inline-block rounded-full bg-crimson-700 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white">Most Popular</span>
                </div>
                <div class="flex-1">
                    <div class="flex items-baseline justify-between">
                        <h3 class="font-display text-xl font-semibold text-white">Signal</h3>
                        <span class="text-xs font-medium uppercase tracking-wider text-crimson-400">Fractional CTO/CISO</span>
                    </div>
                    <p class="mt-6 flex items-baseline gap-x-2">
                        <span class="font-display text-4xl font-bold tracking-tight text-white">$10,000</span>
                        <span class="text-sm text-echo-500">/month &middot; 3-month min</span>
                    </p>
                    <p class="mt-6 text-sm leading-6 text-echo-300">
                        I join your leadership team part-time. Strategy sessions, vendor calls, team building, incident response, board prep&nbsp;&mdash; whatever the role requires that week.
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-echo-300">
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            10 hours/week embedded with your team
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Staff meetings, vendor calls, board prep
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Governance design + security program buildout
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Roadmap execution and vendor negotiation
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-echo-800">
                    <a href="/contact" class="block w-full rounded-lg bg-crimson-700 px-4 py-3 text-center text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow">
                        Get started
                    </a>
                </div>
            </div>

            {{-- Echo --}}
            <div class="flex flex-col rounded-2xl bg-echo-950 p-8 ring-1 ring-echo-700/50">
                <div class="flex-1">
                    <div class="flex items-baseline justify-between">
                        <h3 class="font-display text-xl font-semibold text-white">Echo</h3>
                        <span class="text-xs font-medium uppercase tracking-wider text-echo-500">Ongoing Advisory</span>
                    </div>
                    <p class="mt-6 flex items-baseline gap-x-2">
                        <span class="font-display text-4xl font-bold tracking-tight text-white">$3,000</span>
                        <span class="text-sm text-echo-500">/month &middot; 6-month commitment</span>
                    </p>
                    <p class="mt-6 text-sm leading-6 text-echo-300">
                        For clients who've finished a Signal engagement. Monthly counsel, quarterly strategic reviews, and on-call support for the decisions that matter.
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-echo-400">
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Monthly check-ins + quarterly strategic reviews
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            On-call for key decisions and vendor evaluations
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-5 w-5 flex-none text-crimson-500 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Governance oversight and course corrections
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-6 border-t border-echo-800">
                    <a href="/contact" class="block w-full rounded-lg bg-echo-800 px-4 py-3 text-center text-sm font-semibold text-white ring-1 ring-echo-700 transition-all hover:bg-echo-700 hover:ring-echo-600">
                        Get started
                    </a>
                </div>
            </div>
        </div>

        <p class="mx-auto mt-10 max-w-2xl text-center text-sm text-echo-500">
            Most clients start with Tune. No pressure, no lock-in beyond what's listed above.
        </p>
    </div>
</section>

{{-- ==================== TRACK RECORD ==================== --}}
<section class="bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">Track record</p>
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
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">Free assessment</p>
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
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-500">Weekly newsletter</p>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white">
                Signal vs. Noise
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                Cutting through the chaos of cybersecurity and technology&nbsp;&mdash; so you can lead with clarity. One email per week. No fluff, no vendor hype, no fear-mongering.
            </p>
        </div>

        <div class="mx-auto mt-10 max-w-lg">
            <script async src="https://subscribe-forms.beehiiv.com/embed.js"></script>
            <iframe src="https://subscribe-forms.beehiiv.com/b961a68a-112f-4a22-984f-1ffef0ae248c"
                    class="beehiiv-embed"
                    data-test-id="beehiiv-embed"
                    frameborder="0"
                    scrolling="no"
                    style="width: 100%; height: 50px; margin: 0; border-radius: 0px; background-color: transparent; box-shadow: none; max-width: 100%;"></iframe>
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
            <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-5xl">
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
