---
title: Signal Measure
description: A fixed-scope engagement that rebuilds how your team prioritizes vulnerabilities. Severity, exploitation probability, and real cost. Founding cohort, three pilot slots.
---
@extends('_layouts.main')

@section('body')

{{-- ═══════════════════════════════════════════ --}}
{{-- HERO                                          --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="relative overflow-hidden pt-16 pb-12 lg:pt-24 lg:pb-16">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/40 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-20 w-[400px] h-[400px] bg-gradient-to-tr from-crimson-800/20 to-transparent blur-3xl pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Founding cohort &middot; three pilot slots</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
                Stop inheriting the <span class="text-crimson-500">scanner's list.</span>
            </h1>

            <p class="mx-auto mt-8 max-w-2xl text-lg text-pretty text-echo-300 sm:text-xl/8">
                Signal Measure is a fixed-scope engagement that rebuilds how your team prioritizes vulnerabilities. Severity, plus how likely each flaw is to actually be exploited, plus what a breach would actually cost you. You walk away with a calibrated model, a number your board can hear, and a team that can run it without us.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">3 pilot slots</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">$5,000 flat</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Vulnerability triage</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Starts late June</span>
            </div>

            <div class="mt-10">
                <a href="/schedule"
                   class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white font-semibold text-lg px-8 py-4 shadow-sm transition-all hover:shadow-glow active:scale-[0.98]">
                    Book a fit call
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <p class="mt-3 text-xs text-echo-500">30 minutes. Free. We confirm the fit, or point you somewhere better.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- THE PROBLEM  (two-column: heading | body)     --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="border-t border-echo-800/50 bg-echo-950 py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-5">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">The problem</span>
                </div>
                <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
                    Your scanner sorts by the one thing it can measure.
                </h2>
                <p class="mt-6 text-lg leading-8 text-crimson-300/90 font-medium">
                    If "highest severity first" is how your team decides what to fix, you are not managing risk. You are inheriting a tool's opinion.
                </p>
            </div>

            <div class="mt-10 lg:col-span-7 lg:mt-0">
                <div class="space-y-6 text-lg leading-8 text-echo-300">
                    <p>A scanner hands you a list. It flags some vulnerabilities Critical and some Medium, ranks them by severity, and calls that risk.</p>
                    <p>It is not risk. Severity measures how bad a flaw could be in the abstract, on any network anywhere. It says nothing about how likely it is to be exploited against you, and nothing about what it would cost your business if it were.</p>
                    <p>So teams patch the highest number first. They grind through a five-month queue of "criticals," many of which will never be touched, while the flaw most likely to actually hurt them sits in the middle of the pile, rated Medium, waiting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- WHAT SIGNAL MEASURE IS  (3-lens card grid)    --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">What it is</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
                One decision, rebuilt on evidence.
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                Signal Measure takes a single decision your team is currently making by severity alone, vulnerability triage, and rebuilds it on three lenses instead of one.
            </p>
        </div>

        <div class="mx-auto mt-14 grid max-w-md grid-cols-1 gap-6 lg:max-w-none lg:grid-cols-3">
            @foreach([
                ['01', 'Severity', 'What the scanner already tells you. We keep it. It is just not the whole answer.'],
                ['02', 'Probability', 'How likely each flaw is to actually be exploited, using EPSS, a free, public, daily-refreshed exploitation model almost nobody at your scale is using.'],
                ['03', 'Cost', 'What a breach of each affected system would actually cost your business, calibrated with the people who run it.'],
            ] as $lens)
                <div class="relative flex flex-col rounded-2xl bg-echo-900/60 p-7 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                    <span class="font-mono text-sm text-crimson-500/70">{{ $lens[0] }}</span>
                    <h3 class="mt-3 font-display text-xl font-semibold text-crimson-400">{{ $lens[1] }}</h3>
                    <p class="mt-3 text-base leading-7 text-echo-300">{{ $lens[2] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mx-auto mt-12 max-w-3xl text-center space-y-6 text-lg leading-8 text-echo-300">
            <p>Put together, those three turn a sorted dashboard into a decision. A shorter list, in a different order, that you can defend line by line to a board. And one sentence that says your risk in dollars instead of colors.</p>
            <p class="text-white font-medium">This is not a new tool to buy and maintain. It is the discipline that makes every tool decision sharper, built once, with you, until your team can run it without us.</p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- WHAT YOU GET  (multi-column card grid)        --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="border-t border-echo-800/50 bg-echo-950 py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">What you get</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
                What you walk away with.
            </h2>
        </div>

        <dl class="mx-auto mt-14 grid max-w-md grid-cols-1 gap-6 md:max-w-none md:grid-cols-2 lg:grid-cols-3">
            @foreach([
                ['An honest audit', 'How your team prioritizes today. Written, specific, not flattering.'],
                ['A calibrated workbook', 'Your asset inventory, your live exploitation scores, your calibrated impact estimates, and a ranked list of what to fix first, by expected loss.'],
                ['A loss-exceedance read', 'Your odds of losing more than the numbers that matter to you this year. The board-ready translation of the whole model.'],
                ['A methodology doc', 'The inputs, the math behind them, and how to spot when the model has drifted.'],
                ['Calibration training', 'For the internal owner who runs it after we leave, because a model with no owner is dead in ninety days.'],
                ['A quarterly recalibration playbook', 'What you update, what we update, and the signals that say it is time.'],
            ] as $item)
                <div class="rounded-2xl bg-echo-900/60 p-6 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                    <dt class="flex items-start gap-3">
                        <svg class="mt-0.5 h-5 w-5 flex-none text-crimson-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-display text-lg font-semibold text-white">{{ $item[0] }}</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-echo-300">{{ $item[1] }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- THE PILOT OFFER  (featured CTA card)          --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="relative isolate overflow-hidden py-20 sm:py-28">
    <div class="absolute inset-x-0 top-0 -z-10 h-96 bg-gradient-to-b from-crimson-950/30 to-transparent pointer-events-none"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">The pilot</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-5xl">
                The founding cohort.
            </h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-echo-300">
                We are taking three teams through Signal Measure as a founding cohort. You get the full method at founding pricing. We get the proof.
            </p>
        </div>

        {{-- Featured offer card --}}
        <div class="mx-auto mt-14 max-w-2xl">
            <div class="relative rounded-3xl bg-echo-950 p-8 ring-2 ring-crimson-600 shadow-glow sm:p-12">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-crimson-600 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-crimson-900/50 whitespace-nowrap">
                        Founding cohort &middot; only 3 slots
                    </span>
                </div>

                <div class="text-center">
                    <p class="flex items-baseline justify-center gap-x-2">
                        <span class="font-display text-6xl font-bold tracking-tight text-white">$5,000</span>
                        <span class="text-base text-echo-400">flat</span>
                    </p>
                    <p class="mt-2 text-sm font-mono uppercase tracking-widest text-crimson-400">One-time founding rate</p>
                </div>

                <div class="mt-8 space-y-4 border-t border-echo-800 pt-8 text-base leading-7 text-echo-300">
                    <p>That is a one-time founding-cohort rate, well under what this engagement becomes once it is proven. The trade is simple and it is part of the offer, not a footnote: in exchange for founding pricing, we get to publish what we learn from your engagement, anonymized as needed, as the case study that makes the next cohort possible.</p>
                </div>

                <ul role="list" class="mt-6 space-y-3 text-base leading-7 text-echo-300">
                    @foreach([
                        'The full Signal Measure engagement, start to finish',
                        'Three slots only, because doing three of these right beats doing ten of them badly',
                        'Founding pricing in exchange for case-study permission, anonymized as needed',
                    ] as $point)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

                <div class="mt-10">
                    <a href="/schedule"
                       class="flex w-full items-center justify-center gap-2 rounded-lg bg-crimson-700 px-6 py-4 text-center text-lg font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow active:scale-[0.98]">
                        Claim a founding slot
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                    <p class="mt-4 text-center text-sm text-echo-400">
                        Pilot engagements start in <span class="text-echo-200 font-medium">late June 2026,</span> after the current campaign closes. The slots fill before the calendar does. If three teams claim slots before you do, the founding-cohort rate is gone.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- WHO THIS IS FOR  (2-column bullet grid)       --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="border-t border-echo-800/50 bg-echo-950 py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Who this is for</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
                Is this you?
            </h2>
        </div>

        <ul class="mx-auto mt-14 grid max-w-md grid-cols-1 gap-6 md:max-w-none md:grid-cols-2">
            @foreach([
                '"Highest severity first" is how your team decides what to fix, and you suspect that is the wrong order.',
                'You are a founder, a first security hire, or a VP of Engineering who needs something defensible to put in front of a board, fast.',
                'You have one person who can own the model after the engagement ends. If you do not, you are not ready yet, and we will tell you so on the call.',
                'You can name the systems that would actually hurt you if they were breached. The pilot rebuilds the prioritization; it does not build your asset inventory from scratch.',
            ] as $bullet)
                <li class="flex items-start gap-3 rounded-2xl bg-echo-900/40 p-6 ring-1 ring-echo-700/40">
                    <svg class="mt-1 h-5 w-5 flex-none text-crimson-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="text-base leading-7 text-echo-300">{{ $bullet }}</span>
                </li>
            @endforeach
        </ul>

        <p class="mx-auto mt-10 max-w-2xl text-center text-base leading-7 text-echo-400">
            If that is not you yet, start with the free <a href="/assessment" class="font-semibold text-crimson-500 hover:text-crimson-400 transition-colors">Signal Score</a>. It tells you in fifteen minutes whether severity-only prioritization is quietly dragging your program down.
        </p>
    </div>
</section>

{{-- ═══════════════════════════════════════════ --}}
{{-- CLOSING CTA                                   --}}
{{-- ═══════════════════════════════════════════ --}}
<section class="py-20 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-5xl">
                Claim a slot.
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                A fit call is thirty minutes, free, and honest. We confirm the decision domain is right for you, confirm you have an owner, and confirm the data exists. If it is not a fit, we will say so, and point you somewhere better. No pitch.
            </p>

            <div class="mt-10">
                <a href="/schedule"
                   class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white font-semibold text-lg px-8 py-4 shadow-sm transition-all hover:shadow-glow active:scale-[0.98]">
                    Book a fit call
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
            </div>

            <p class="mt-6 text-base text-echo-400">
                Not ready to talk yet? Start with the free <a href="/assessment" class="font-semibold text-crimson-500 hover:text-crimson-400 transition-colors">Signal Score</a>.
            </p>
        </div>
    </div>
</section>

@stop
