---
title: Fractional CTO & CISO
description: Fractional CTO & CISO for growth-stage companies navigating technology and security decisions without full-time executive leadership.
---
@extends('_layouts.main')

@section('body')

{{-- ==================== ACT 1: PAIN ==================== --}}

{{-- Section 1: Hero — Tailwind Plus "Split with image" pattern --}}
<section class="relative isolate overflow-hidden">
    {{-- Gradient mesh background decoration --}}
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
        <defs>
            <pattern id="hero-pattern" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#hero-pattern)" />
    </svg>
    <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
        <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-crimson-800/30 to-crimson-600/10 opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:shrink-0 lg:pt-8">
            {{-- Eyebrow --}}
            <div class="mt-4 flex items-center gap-x-3">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-500">Fractional CTO &amp; CISO</span>
            </div>

            {{-- Headline --}}
            <h1 class="mt-10 font-display text-5xl font-bold tracking-tight text-white sm:text-7xl">
                The CTO and CISO you're <span class="text-crimson-500">not ready to hire full-time.</span>
            </h1>

            {{-- Subheadline --}}
            <p class="mt-8 text-lg leading-8 text-echo-300 sm:text-xl sm:leading-9">
                You know you need a security strategy. You don't need a $250K salary to get one. I plug into your leadership team, fix what's broken, and build what's missing.
            </p>

            {{-- Dual CTAs --}}
            <div class="mt-10 flex items-center gap-x-6">
                <a href="/contact" class="rounded-lg bg-crimson-700 px-5 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                    Schedule a Clarity Call
                </a>
                <a href="/assessment" class="text-sm font-semibold leading-6 text-echo-200 transition-colors hover:text-white">
                    Take the Signal Score <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>

        {{-- Headshot --}}
        <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
            <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                <div class="relative rounded-2xl bg-echo-800/50 p-2 ring-1 ring-inset ring-echo-700/30 lg:-m-4 lg:rounded-3xl lg:p-4">
                    <img src="/assets/img/mike-faas-hero.jpg"
                         alt="Mike Faas — Fractional CTO and CISO"
                         width="316"
                         height="448"
                         class="w-[22rem] rounded-xl shadow-2xl ring-1 ring-white/10 object-cover object-top aspect-[3/4]">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Logo Cloud — Tailwind Plus static grid pattern --}}
<section class="bg-echo-950 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center font-mono text-xs uppercase tracking-widest text-echo-500">
            Trusted by leaders at
        </h2>
        <div class="mx-auto mt-10 grid max-w-lg grid-cols-3 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-5 sm:gap-x-10 lg:mx-0 lg:max-w-none">
            <img class="col-span-1 max-h-10 w-full object-contain brightness-0 invert opacity-50 transition-opacity hover:opacity-80" src="/assets/img/clients/bose.png" alt="Bose" width="158" height="48">
            <img class="col-span-1 max-h-10 w-full object-contain brightness-0 invert opacity-50 transition-opacity hover:opacity-80" src="/assets/img/clients/brcc.png" alt="Black Rifle Coffee Company" width="158" height="48">
            <img class="col-span-1 max-h-10 w-full object-contain brightness-0 invert opacity-50 transition-opacity hover:opacity-80" src="/assets/img/clients/carhartt.png" alt="Carhartt" width="158" height="48">
            <img class="col-span-1 max-h-10 w-full object-contain brightness-0 invert opacity-50 transition-opacity hover:opacity-80" src="/assets/img/clients/carnival.png" alt="Carnival" width="158" height="48">
            <img class="col-span-1 max-h-10 w-full object-contain brightness-0 invert opacity-50 transition-opacity hover:opacity-80" src="/assets/img/clients/strongrock.png" alt="Strong Rock" width="158" height="48">
        </div>
    </div>
</section>

{{-- Section 2: Problem — Tailwind Plus "Feature section" pattern --}}
<section id="services" class="bg-stone-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-left">
            <div class="flex items-center gap-x-4">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">The Real Problem</span>
            </div>
            <h2 class="mt-4 font-display text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                Every vendor says it's urgent.<br class="hidden sm:inline">You can't tell what's real.
            </h2>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                {{-- Problem 1 --}}
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-stone-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <span class="font-display text-lg font-bold text-white">01</span>
                        </div>
                        The governance gap
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-stone-600">
                        A board member asks about your security posture and you're tap-dancing. That's not a knowledge gap — it's a governance gap.
                    </dd>
                </div>

                {{-- Problem 2 --}}
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-stone-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <span class="font-display text-lg font-bold text-white">02</span>
                        </div>
                        Gut-instinct decisions
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-stone-600">
                        You're making million-dollar tech decisions with vendor slide decks and gut instinct. You know it's not sustainable.
                    </dd>
                </div>

                {{-- Problem 3 --}}
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-stone-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <span class="font-display text-lg font-bold text-white">03</span>
                        </div>
                        The expertise gap
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-stone-600">
                        You're not ready for a $300K hire you don't know how to evaluate. The last consultant talked in acronyms nobody could act on.
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</section>

{{-- Section 3: Sound Familiar? --}}
<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <div class="flex items-center gap-x-4">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">Sound Familiar?</span>
            </div>
        </div>

        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-4 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">A client just sent you a security questionnaire and your team is scrambling.</p>
            </div>

            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">Your cyber insurance premium just doubled and nobody can explain why.</p>
            </div>

            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">Someone asked about SOC 2 or HIPAA and you changed the subject.</p>
            </div>

            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">Your IT person is also your &ldquo;security team&rdquo; and everyone knows that's not enough.</p>
            </div>

            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">The board asked about cybersecurity and you tap-danced through the answer.</p>
            </div>

            <div class="flex gap-x-4 rounded-xl bg-stone-50 p-6 ring-1 ring-inset ring-stone-900/5 transition-all hover:ring-crimson-500/30 hover:bg-stone-100/80">
                <svg class="h-5 w-5 flex-none text-crimson-600 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm leading-6 text-stone-700">You need a technology strategy but a full-time CTO costs more than you can justify.</p>
            </div>
        </div>

        {{-- Pull quote --}}
        <div class="mx-auto mt-16 max-w-2xl lg:mx-0 lg:max-w-xl">
            <figure class="pl-8">
                <blockquote class="text-xl font-medium leading-8 tracking-tight text-stone-900 sm:text-2xl sm:leading-9">
                    <p>&ldquo;Most security failures aren't technical. They're what happens when leaders optimize what they should be governing.&rdquo;</p>
                </blockquote>
            </figure>
        </div>
    </div>
</section>

{{-- ==================== ACT 2: PERSON ==================== --}}

{{-- Section 4: Guide — Tailwind Plus "Team section" split pattern --}}
<section id="about" class="bg-stone-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            {{-- Left: Image + Bio --}}
            <div>
                <div class="flex items-center gap-x-4">
                    <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                    <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">Who You're Working With</span>
                </div>

                <div class="mt-8 flex items-start gap-x-6">
                    <img src="/assets/img/mike-faas-square.jpg" alt="Mike Faas" class="h-20 w-20 flex-none rounded-xl object-cover ring-1 ring-stone-900/10">
                    <div>
                        <h2 class="font-display text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl">
                            I've sat in the CISO chair.
                        </h2>
                        <p class="mt-1 text-lg font-medium text-stone-600">I've lived the governance problems I write about.</p>
                    </div>
                </div>

                <div class="mt-8 text-base leading-7 text-stone-700">
                    <p>I'm Mike Faas. 25+ years building security and technology programs — Fortune 500 to high-growth startups. Clients hire me because I translate complexity into clarity. I speak boardroom and server room.</p>
                    <p class="mt-6">And I'd rather tell you the uncomfortable truth than sell you a comfortable lie.</p>
                    <p class="mt-6 text-sm italic text-stone-500">Based in Raleigh, NC. Dad. Blue belt. Reluctant morning person.</p>
                </div>
            </div>

            {{-- Right: Pull quotes --}}
            <div class="space-y-8 lg:pt-12">
                <figure class="rounded-2xl bg-white p-8 shadow-lg ring-1 ring-stone-900/5">
                    <blockquote class="text-lg font-semibold leading-8 tracking-tight text-stone-900">
                        <p>&ldquo;Cybersecurity isn't a problem. It's a signal. A breach doesn't mean your firewall failed. It means your org chart did.&rdquo;</p>
                    </blockquote>
                    <figcaption class="mt-6 flex items-center gap-x-4 border-t border-stone-900/10 pt-6">
                        <div class="h-px flex-auto bg-gradient-to-r from-crimson-500/30 to-transparent"></div>
                        <span class="text-sm font-semibold text-crimson-600">Mike Faas</span>
                    </figcaption>
                </figure>

                <figure class="rounded-2xl bg-white p-8 shadow-lg ring-1 ring-stone-900/5">
                    <blockquote class="text-lg font-semibold leading-8 tracking-tight text-stone-900">
                        <p>&ldquo;If your CISO reports to the CIO who reports to the CFO, you don't have a security program. You have a suggestion box with extra steps.&rdquo;</p>
                    </blockquote>
                    <figcaption class="mt-6 flex items-center gap-x-4 border-t border-stone-900/10 pt-6">
                        <div class="h-px flex-auto bg-gradient-to-r from-crimson-500/30 to-transparent"></div>
                        <span class="text-sm font-semibold text-crimson-600">Mike Faas</span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

{{-- Section 5: Testimonials — Tailwind Plus testimonial grid pattern --}}
<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-xl text-center">
            <div class="flex items-center justify-center gap-x-3">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">Don't Take My Word For It</span>
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
            </div>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                {{-- Jackson --}}
                <div class="flex">
                    <figure class="flex flex-col justify-between rounded-2xl bg-stone-50 p-8 text-sm leading-6 ring-1 ring-inset ring-stone-900/5 h-full">
                        <blockquote class="text-stone-900">
                            <p>&ldquo;Mike has an exceptional talent for building authentic, trust-based relationships with customers. He was a key contributor to both strategic direction and client engagement. His skill set brings immediate value and would be an asset to any organization.&rdquo;</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-crimson-100 flex items-center justify-center">
                                <span class="text-crimson-700 font-bold text-sm">JJ</span>
                            </div>
                            <div>
                                <div class="font-semibold text-stone-900">James L. Jackson, MBA, CISM</div>
                                <div class="text-stone-500">Cybersecurity Leader</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                {{-- Helms --}}
                <div class="flex">
                    <figure class="flex flex-col justify-between rounded-2xl bg-stone-50 p-8 text-sm leading-6 ring-1 ring-inset ring-stone-900/5 h-full">
                        <blockquote class="text-stone-900">
                            <p>&ldquo;Mike has the ability to communicate technical concepts to a non-technical audience. When assigned a task, you can trust it will be done with the same level of attention to detail as if you had done it yourself.&rdquo;</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-crimson-100 flex items-center justify-center">
                                <span class="text-crimson-700 font-bold text-sm">JH</span>
                            </div>
                            <div>
                                <div class="font-semibold text-stone-900">JD Helms</div>
                                <div class="text-stone-500">COO @ SoftwareOne · Co-Founder @ PsychReport.ai</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                {{-- Sorensen --}}
                <div class="flex">
                    <figure class="flex flex-col justify-between rounded-2xl bg-stone-50 p-8 text-sm leading-6 ring-1 ring-inset ring-stone-900/5 h-full">
                        <blockquote class="text-stone-900">
                            <p>&ldquo;Mike is a strategic leader with deep expertise across multiple technology areas. He knows how to build trusted relationships with his customers, vendors, senior managers, peers, and direct reports. He is one of the good guys.&rdquo;</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-crimson-100 flex items-center justify-center">
                                <span class="text-crimson-700 font-bold text-sm">KS</span>
                            </div>
                            <div>
                                <div class="font-semibold text-stone-900">Karan Sorensen, Ed.D, MBA, MS</div>
                                <div class="text-stone-500">Innovation & Technology Executive</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Track Record — Stats + Case Studies --}}
<section class="bg-stone-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <div class="flex items-center gap-x-4">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">Track Record</span>
            </div>
            <p class="mt-4 text-lg leading-8 text-stone-600">Real engagements. Names withheld — NDAs are a feature, not a limitation.</p>
        </div>

        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            {{-- Case Study 1 --}}
            <article class="flex flex-col justify-between rounded-2xl bg-white p-8 shadow-lg ring-1 ring-stone-900/5">
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-crimson-600">Case 01</p>
                    <p class="mt-2 text-lg font-semibold text-stone-900">Fortune 500 Retailer</p>
                    <p class="text-sm text-stone-500">Hundreds of locations · 5,000+ employees</p>
                    <p class="mt-6 text-sm leading-6 text-stone-600">
                        Security enforcement was nonexistent at the edge — POS systems across hundreds of stores required manual intervention, with no centralized governance or policy control.
                    </p>
                </div>
                <div class="mt-6 border-t border-stone-900/5 pt-6">
                    <p class="text-sm font-medium leading-6 text-stone-700">
                        Designed a cloud-native device governance framework, migrated 15 legacy policies, and automated enrollment across 4 platforms. The organization had enforceable, auditable security posture for the first time.
                    </p>
                </div>
            </article>

            {{-- Case Study 2 --}}
            <article class="flex flex-col justify-between rounded-2xl bg-white p-8 shadow-lg ring-1 ring-stone-900/5">
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-crimson-600">Case 02</p>
                    <p class="mt-2 text-lg font-semibold text-stone-900">High-Growth Ecommerce Brand</p>
                    <p class="text-sm text-stone-500">900+ users · Rapid scale</p>
                    <p class="mt-6 text-sm leading-6 text-stone-600">
                        Outgrew their collaboration platform but couldn't afford downtime during a migration that touched every employee, 32TB of data, and 40 business-critical sites.
                    </p>
                </div>
                <div class="mt-6 border-t border-stone-900/5 pt-6">
                    <p class="text-sm font-medium leading-6 text-stone-700">
                        Led a zero-disruption platform migration — 893 active users, 1,200+ archived accounts, identity sync, and policy-driven device reconfiguration. Eliminated legacy infrastructure and reduced administrative overhead.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- ==================== ACT 3: PLAN ==================== --}}

{{-- Section 7: Pricing — Tailwind Plus "Three tiers" with emphasized middle --}}
<section id="pricing" class="relative isolate bg-white py-24 sm:py-32">
    {{-- Background decoration --}}
    <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-crimson-100 to-crimson-50 opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <div class="flex items-center justify-center gap-x-3">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-600">The Path Forward</span>
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
            </div>
            <h2 class="mt-4 font-display text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl">
                Three ways to work together
            </h2>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-stone-600">
            Start wherever makes sense. Most clients begin with Tune.
        </p>

        <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            {{-- Tune --}}
            <div class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-stone-200 xl:p-10 lg:mt-8 lg:rounded-r-none">
                <div>
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 class="font-display text-lg font-semibold leading-8 text-stone-900">Tune</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-stone-600">
                        I map your landscape, find the highest-leverage fixes, and hand you a roadmap you can actually execute.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <span class="text-4xl font-bold tracking-tight text-stone-900">$7,500</span>
                        <span class="text-sm font-semibold leading-6 text-stone-600">one-time</span>
                    </p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wide text-crimson-600">Strategic Assessment</p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-stone-600">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Stakeholder interviews + current-state assessment
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Technology and security gap analysis
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Prioritized roadmap with clear next steps
                        </li>
                    </ul>
                </div>
                <div class="mt-8">
                    <p class="border-t border-stone-200 pt-4 text-xs text-stone-500 italic">You stop guessing what to fix first.</p>
                    <a href="/contact" aria-describedby="tier-tune" class="mt-4 block rounded-md bg-crimson-50 px-3 py-2 text-center text-sm font-semibold leading-6 text-crimson-700 ring-1 ring-inset ring-crimson-200 transition-all hover:ring-crimson-300 hover:bg-crimson-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-600">
                        Get started
                    </a>
                </div>
            </div>

            {{-- Signal (highlighted — dark card) --}}
            <div class="relative flex flex-col justify-between rounded-3xl bg-echo-900 p-8 shadow-2xl ring-1 ring-echo-700/50 xl:p-10 lg:z-10">
                <div class="absolute -top-5 left-0 right-0 mx-auto w-fit">
                    <span class="inline-flex items-center rounded-full bg-crimson-700/90 px-4 py-1.5 text-xs font-semibold text-white ring-1 ring-inset ring-crimson-500/30">Most Popular</span>
                </div>
                <div>
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 class="font-display text-lg font-semibold leading-8 text-white">Signal</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-echo-300">
                        I join your leadership team part-time. Strategy, vendor calls, team building, incident response, board prep.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <span class="text-4xl font-bold tracking-tight text-white">$10,000</span>
                        <span class="text-sm font-semibold leading-6 text-echo-300">/month</span>
                    </p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wide text-crimson-400">Fractional CTO/CISO · 3-month min</p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-echo-300">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            10 hours/week embedded with your team
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Staff meetings, vendor calls, board prep
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Governance design + security program buildout
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Roadmap execution and vendor negotiation
                        </li>
                    </ul>
                </div>
                <div class="mt-8">
                    <p class="border-t border-echo-700 pt-4 text-xs text-echo-400 italic">Vendor calls where you ask the right questions. Decisions backed by evidence, not hope.</p>
                    <a href="/contact" aria-describedby="tier-signal" class="mt-4 block rounded-md bg-crimson-700 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                        Get started
                    </a>
                </div>
            </div>

            {{-- Echo --}}
            <div class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-stone-200 xl:p-10 lg:mt-8 lg:rounded-l-none">
                <div>
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 class="font-display text-lg font-semibold leading-8 text-stone-900">Echo</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-stone-600">
                        For clients who've finished a Signal engagement. Monthly counsel, quarterly reviews, escalation support.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <span class="text-4xl font-bold tracking-tight text-stone-900">$3,000</span>
                        <span class="text-sm font-semibold leading-6 text-stone-600">/month</span>
                    </p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wide text-crimson-600">Ongoing Advisory · 6-month commitment</p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-stone-600">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Monthly check-ins + quarterly strategic reviews
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            On-call for key decisions and vendor evaluations
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            Governance oversight and course corrections
                        </li>
                    </ul>
                </div>
                <div class="mt-8">
                    <p class="border-t border-stone-200 pt-4 text-xs text-stone-500 italic">Momentum without the full-time salary.</p>
                    <a href="/contact" aria-describedby="tier-echo" class="mt-4 block rounded-md bg-crimson-50 px-3 py-2 text-center text-sm font-semibold leading-6 text-crimson-700 ring-1 ring-inset ring-crimson-200 transition-all hover:ring-crimson-300 hover:bg-crimson-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-600">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== ACT 4: NEXT STEP ==================== --}}

{{-- Section 8: Signal Score CTA — Tailwind Plus "Centered on dark panel" --}}
<section id="assessment" class="relative isolate overflow-hidden bg-echo-900">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex items-center justify-center gap-x-3 mb-4">
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                <span class="font-mono text-xs uppercase tracking-wider text-crimson-400">Free Assessment</span>
                <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
            </div>
            <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Not ready for a call?<br>Start here.
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-echo-300">
                15-minute self-assessment. 8 categories. Instant A–F grade. No email required.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/assessment" class="rounded-md bg-white px-5 py-3.5 text-sm font-semibold text-echo-900 shadow-sm transition-all hover:bg-stone-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                    Take the Signal Score Assessment
                </a>
            </div>
        </div>
    </div>
    {{-- Decorative background --}}
    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#cta-gradient)" fill-opacity="0.15" />
        <defs>
            <radialGradient id="cta-gradient">
                <stop stop-color="#990000" />
                <stop offset="1" stop-color="#4D0000" />
            </radialGradient>
        </defs>
    </svg>
</section>

{{-- Section 9: Newsletter --}}
<section class="bg-echo-950 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none lg:grid lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:gap-x-8">
            <div class="max-w-xl">
                <div class="flex items-center gap-x-3 mb-4">
                    <div class="h-1 w-8 rounded-full bg-crimson-600"></div>
                    <span class="font-mono text-xs uppercase tracking-wider text-crimson-400">Weekly Newsletter</span>
                </div>
                <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Signal vs. Noise
                </h2>
                <p class="mt-6 text-lg leading-8 text-echo-300">
                    Cutting through the chaos of cybersecurity and technology — so you can lead with clarity. One email per week. No fluff, no vendor hype, no fear-mongering.
                </p>
            </div>
        </div>

        <div class="mx-auto mt-10 max-w-lg">
            <script async src="https://subscribe-forms.beehiiv.com/embed.js"></script>
            <iframe src="https://subscribe-forms.beehiiv.com/b961a68a-112f-4a22-984f-1ffef0ae248c"
                    class="beehiiv-embed"
                    data-test-id="beehiiv-embed"
                    frameborder="0"
                    scrolling="no"
                    style="width: 100%; height: 50px; margin: 0; border-radius: 0px; background-color: transparent; box-shadow: none; max-width: 100%;"></iframe>
            <p class="mt-4 text-sm text-echo-400">
                <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer" class="text-echo-300 transition-colors hover:text-white">
                    Browse past issues <span aria-hidden="true">→</span>
                </a>
            </p>
        </div>
    </div>
</section>

{{-- Section 10: Footer CTA — Tailwind Plus "Simple centered with gradient" --}}
<section id="contact" class="relative isolate overflow-hidden bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl rounded-3xl ring-1 ring-echo-700/50 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
                <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Ready to turn complexity into clarity?
                </h2>
                <p class="mt-6 text-base leading-7 text-echo-300">
                    30 minutes. No pitch — just honest questions and straight answers.
                </p>
                <div class="mt-10 flex items-center gap-x-4">
                    <h3 class="flex-none text-sm font-semibold leading-6 text-crimson-500">What to expect</h3>
                    <div class="h-px flex-auto bg-echo-700"></div>
                </div>
                <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-echo-300 sm:grid-cols-2 sm:gap-6">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Honest assessment of where you stand
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        No sales pitch or pressure
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Actionable next steps either way
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Plain English, not acronym soup
                    </li>
                </ul>
            </div>
            <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                <div class="rounded-2xl bg-echo-800/50 py-10 text-center ring-1 ring-inset ring-echo-700/30 lg:flex lg:flex-col lg:justify-center lg:py-16">
                    <div class="mx-auto max-w-xs px-8">
                        <p class="text-base font-semibold text-echo-300">Free clarity call</p>
                        <p class="mt-6 flex items-baseline justify-center gap-x-2">
                            <span class="text-5xl font-bold tracking-tight text-white">30</span>
                            <span class="text-sm font-semibold leading-6 tracking-wide text-echo-400">minutes</span>
                        </p>
                        <a href="/contact" class="mt-10 block w-full rounded-md bg-crimson-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                            Let's Talk
                        </a>
                        <p class="mt-6 text-xs leading-5 text-echo-500 italic">
                            Translating geek into human.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
