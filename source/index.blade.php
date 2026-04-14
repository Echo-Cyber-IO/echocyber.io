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

{{-- ==================== TRUST BAR (featured pull quote) ==================== --}}
<section class="bg-echo-950 pt-16 pb-12 sm:pt-20 sm:pb-16">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="relative isolate overflow-hidden rounded-3xl bg-echo-900/50 px-6 py-14 outline outline-crimson-700/20 sm:px-16 sm:py-16">
            <figure class="relative isolate">
                {{-- Giant decorative quote marks (TailwindPlus signature) --}}
                <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                     class="absolute -top-2 -left-4 -z-10 h-32 stroke-crimson-700/30 sm:-left-8">
                    <path id="trustbar-quote-marks" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                    <use x="86" href="#trustbar-quote-marks" />
                </svg>

                <blockquote class="text-xl/8 font-semibold text-white sm:text-2xl/9">
                    <p>Mike has the ability to communicate technical concepts to a non-technical audience. When assigned a task, you can trust it will be done with the same level of attention to detail as if you had done it yourself.</p>
                </blockquote>

                <figcaption class="mt-8 flex items-center gap-x-4">
                    <div class="h-12 w-12 flex-none rounded-full bg-crimson-900/60 flex items-center justify-center ring-1 ring-crimson-700/40">
                        <span class="text-crimson-300 font-bold">JH</span>
                    </div>
                    <div>
                        <div class="font-semibold text-white">JD Helms</div>
                        <div class="mt-0.5 text-sm text-echo-400">COO @ SoftwareOne &middot; Co-Founder @ PsychReport.ai</div>
                    </div>
                </figcaption>
            </figure>
        </div>
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

        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:auto-rows-fr">

            {{-- Jackson --}}
            <figure class="relative isolate flex flex-col justify-between overflow-hidden rounded-2xl bg-echo-900/80 p-8 ring-1 ring-echo-700/50 transition-all hover:ring-echo-600">
                <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                     class="absolute -top-2 -left-2 -z-10 h-20 stroke-crimson-700/15">
                    <path d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404C6.08991 102.749 9.12394 108.02 12.959 112.654C16.8027 117.138 21.2829 120.739 26.4034 123.459C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                </svg>
                <blockquote class="text-lg leading-7 text-white">
                    <p>&ldquo;Exceptional talent for building authentic, trust-based relationships. His skill set brings immediate value.&rdquo;</p>
                </blockquote>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/40 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-echo-800 flex items-center justify-center ring-1 ring-echo-700/40">
                        <span class="text-echo-300 font-bold text-sm">JJ</span>
                    </div>
                    <div class="min-w-0">
                        <div class="font-semibold text-white text-sm">James L. Jackson</div>
                        <div class="text-xs text-echo-500">Cybersecurity Leader</div>
                    </div>
                </figcaption>
            </figure>

            {{-- Vosburgh (client — subtly distinguished by crimson tint + badge) --}}
            <figure class="relative isolate flex flex-col justify-between overflow-hidden rounded-2xl bg-gradient-to-br from-crimson-950/30 via-echo-900/80 to-echo-900/80 p-8 ring-1 ring-crimson-700/30 transition-all hover:ring-crimson-600/50">
                <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                     class="absolute -top-2 -left-2 -z-10 h-20 stroke-crimson-700/30">
                    <path d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404C6.08991 102.749 9.12394 108.02 12.959 112.654C16.8027 117.138 21.2829 120.739 26.4034 123.459C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                </svg>
                <div>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-crimson-900/40 px-2.5 py-0.5 text-[10px] font-mono uppercase tracking-wider text-crimson-300 ring-1 ring-crimson-700/30">
                        <span class="h-1 w-1 rounded-full bg-crimson-400"></span>
                        Client
                    </span>
                    <blockquote class="mt-4 text-lg leading-7 text-white">
                        <p>&ldquo;A natural problem-solver who remains cool under pressure. A born leader.&rdquo;</p>
                    </blockquote>
                </div>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/40 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-crimson-900/60 flex items-center justify-center ring-1 ring-crimson-700/40">
                        <span class="text-crimson-300 font-bold text-sm">JV</span>
                    </div>
                    <div class="min-w-0">
                        <div class="font-semibold text-white text-sm">Jennifer Vosburgh</div>
                        <div class="text-xs text-echo-500">B2B Marketing Executive, Tego</div>
                    </div>
                </figcaption>
            </figure>

            {{-- Sorensen --}}
            <figure class="relative isolate flex flex-col justify-between overflow-hidden rounded-2xl bg-echo-900/80 p-8 ring-1 ring-echo-700/50 transition-all hover:ring-echo-600">
                <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                     class="absolute -top-2 -left-2 -z-10 h-20 stroke-crimson-700/15">
                    <path d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404C6.08991 102.749 9.12394 108.02 12.959 112.654C16.8027 117.138 21.2829 120.739 26.4034 123.459C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                </svg>
                <blockquote class="text-lg leading-7 text-white">
                    <p>&ldquo;Deep expertise across multiple technology areas. One of the good guys.&rdquo;</p>
                </blockquote>
                <figcaption class="mt-8 flex items-center gap-x-4 border-t border-echo-700/40 pt-6">
                    <div class="h-10 w-10 flex-none rounded-full bg-echo-800 flex items-center justify-center ring-1 ring-echo-700/40">
                        <span class="text-echo-300 font-bold text-sm">KS</span>
                    </div>
                    <div class="min-w-0">
                        <div class="font-semibold text-white text-sm">Karan Sorensen</div>
                        <div class="text-xs text-echo-500">Innovation &amp; Technology Executive</div>
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
            <article class="relative flex flex-col overflow-hidden rounded-2xl bg-echo-900 ring-1 ring-echo-700/50">
                {{-- Header band --}}
                <header class="flex items-center gap-4 border-b border-echo-800/60 bg-echo-950/40 px-8 py-5">
                    <div class="flex h-12 w-12 flex-none items-center justify-center rounded-xl bg-crimson-900/40 ring-1 ring-crimson-700/40">
                        <span class="font-display text-lg font-bold leading-none tabular-nums text-crimson-400">01</span>
                    </div>
                    <div class="min-w-0">
                        <h3 class="text-lg font-semibold text-white">Fortune 500 Retailer</h3>
                        <p class="text-xs text-echo-500">Specialty retail &middot; brick-and-mortar</p>
                    </div>
                </header>

                {{-- Body --}}
                <div class="flex-1 px-8 py-7">
                    <div class="flex flex-wrap gap-2">
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">5,000+ employees</span>
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Hundreds of locations</span>
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Edge POS</span>
                    </div>

                    <p class="mt-5 text-sm leading-6 text-echo-400">
                        <span class="font-semibold text-echo-200">Challenge.</span> Security enforcement was nonexistent at the edge. POS systems across stores required manual intervention with no centralized governance.
                    </p>
                    <p class="mt-3 text-sm leading-6 text-echo-300">
                        <span class="font-semibold text-white">Outcome.</span> Cloud-native device governance framework. Enforceable, auditable security posture for the first time.
                    </p>
                </div>

                {{-- Outcome metrics strip --}}
                <footer class="grid grid-cols-3 gap-px border-t border-echo-800/60 bg-echo-800/40">
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-white">15</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">policies migrated</p>
                    </div>
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-white">4</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">platforms automated</p>
                    </div>
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-crimson-400">0</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">store outages</p>
                    </div>
                </footer>
            </article>

            {{-- Case 2 --}}
            <article class="relative flex flex-col overflow-hidden rounded-2xl bg-echo-900 ring-1 ring-echo-700/50">
                <header class="flex items-center gap-4 border-b border-echo-800/60 bg-echo-950/40 px-8 py-5">
                    <div class="flex h-12 w-12 flex-none items-center justify-center rounded-xl bg-crimson-900/40 ring-1 ring-crimson-700/40">
                        <span class="font-display text-lg font-bold leading-none tabular-nums text-crimson-400">02</span>
                    </div>
                    <div class="min-w-0">
                        <h3 class="text-lg font-semibold text-white">High-Growth Ecommerce Brand</h3>
                        <p class="text-xs text-echo-500">DTC &middot; rapid scale</p>
                    </div>
                </header>

                <div class="flex-1 px-8 py-7">
                    <div class="flex flex-wrap gap-2">
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">900+ users</span>
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">32TB data</span>
                        <span class="rounded-md bg-echo-950/60 px-2 py-0.5 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">40 sites</span>
                    </div>

                    <p class="mt-5 text-sm leading-6 text-echo-400">
                        <span class="font-semibold text-echo-200">Challenge.</span> Outgrew their collaboration platform but couldn't afford downtime during a migration touching every employee and every business-critical site.
                    </p>
                    <p class="mt-3 text-sm leading-6 text-echo-300">
                        <span class="font-semibold text-white">Outcome.</span> Zero-disruption platform migration. Identity sync, policy-driven device reconfiguration, legacy infrastructure eliminated.
                    </p>
                </div>

                <footer class="grid grid-cols-3 gap-px border-t border-echo-800/60 bg-echo-800/40">
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-white">893</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">active users moved</p>
                    </div>
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-white">1,200+</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">accounts archived</p>
                    </div>
                    <div class="bg-echo-900 px-4 py-4 text-center">
                        <p class="font-display text-2xl font-bold text-crimson-400">0</p>
                        <p class="mt-0.5 text-[10px] font-mono uppercase tracking-wider text-echo-500">downtime</p>
                    </div>
                </footer>
            </article>

        </div>
    </div>
</section>

{{-- ==================== SIGNAL SCORE CTA ==================== --}}
<section id="assessment" class="bg-echo-950">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden bg-echo-900 px-6 py-24 text-center after:pointer-events-none after:absolute after:inset-0 after:inset-ring after:inset-ring-crimson-700/20 sm:rounded-3xl sm:px-16 after:sm:rounded-3xl">

            {{-- Eyebrow --}}
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-500 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-400">Free assessment</span>
                <div class="w-8 h-1 bg-crimson-500 rounded-full"></div>
            </div>

            <h2 class="mt-6 font-display text-4xl font-bold tracking-tight text-balance text-white sm:text-5xl">
                Not ready for a call? <span class="text-crimson-400">Start here.</span>
            </h2>

            <p class="mx-auto mt-6 max-w-xl text-lg/8 text-pretty text-echo-300">
                The Signal Score is a 15-minute self-assessment across 8 categories. You get an instant A&ndash;F grade. No email required to take it. Just clarity.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row sm:gap-x-6">
                <a href="/assessment"
                   class="inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3.5 text-sm font-semibold text-echo-950 shadow-sm transition-all hover:bg-echo-100 hover:shadow-glow">
                    Take the Signal Score Assessment
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="#pricing" class="text-sm/6 font-semibold text-echo-300 transition-colors hover:text-white">
                    Or compare engagements <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            {{-- Decorative crimson radial gradient backdrop --}}
            <svg viewBox="0 0 1024 1024" aria-hidden="true"
                 class="absolute top-1/2 left-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]">
                <circle r="512" cx="512" cy="512" fill="url(#signal-score-gradient)" fill-opacity="0.35" />
                <defs>
                    <radialGradient id="signal-score-gradient">
                        <stop stop-color="#CC3333" />
                        <stop offset="1" stop-color="#7A1F1F" />
                    </radialGradient>
                </defs>
            </svg>
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
