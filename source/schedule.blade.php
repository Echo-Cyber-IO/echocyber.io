---
title: Strategy Session
description: Book a free strategy session with Mike Faas to discuss your business, technology, and security.
---
@extends('_layouts.main')

@section('body')

    {{-- Hero / intro --}}
    <section class="relative pt-16 pb-4 lg:pt-20 lg:pb-6 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/40 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>

        <div class="relative mx-auto max-w-3xl px-6 text-center lg:px-8">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Free strategy session</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
                30 minutes. <span class="text-crimson-500">No pitch.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-lg text-pretty text-echo-300 sm:text-xl/8">
                Honest questions, straight answers. Pick a time that works &mdash; we'll figure out if there's a fit, and you'll walk away with something useful either way.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">30 minutes</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">No cost</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Direct with Mike</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">No prep required</span>
            </div>
        </div>
    </section>

    {{-- Calendar widget --}}
    <section class="pt-0 pb-16 lg:pb-24">
        <div class="mx-auto max-w-7xl px-4">
            <div x-data="{ loaded: false }" class="relative">
                {{-- Loading state --}}
                <div x-show="!loaded" x-transition.opacity.duration.300ms
                     class="absolute inset-0 z-10 flex flex-col items-center justify-center min-h-[800px] rounded-2xl bg-echo-900/40 ring-1 ring-echo-700/40 backdrop-blur-sm pointer-events-none">
                    <svg class="animate-spin h-12 w-12 text-crimson-500" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="mt-5 font-mono text-xs uppercase tracking-[0.2em] text-crimson-400">Loading calendar</p>
                    <p class="mt-2 text-sm text-echo-400">Just a moment&hellip;</p>
                </div>

                <iframe src="https://apicrm.ctox.com/widget/booking/KjGTZUQdoqLZpU5NtmNL"
                    @load="loaded = true"
                    style="width: 100%; min-height: 800px; border: none; overflow: hidden;" scrolling="no"
                    id="KjGTZUQdoqLZpU5NtmNL_1774582373290"
                    allow="payment"></iframe>
            </div>
            <script src="https://apicrm.ctox.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="bg-echo-950 py-20 sm:py-24 border-t border-echo-800/50">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                        <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">FAQ</span>
                    </div>
                    <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Frequently asked.
                    </h2>
                    <p class="mt-6 text-echo-400">
                        Can't find the answer you're looking for?
                        <a href="/contact" class="font-semibold text-crimson-500 hover:text-crimson-400 transition-colors">Get in touch</a>.
                    </p>
                </div>

                <div class="mt-10 lg:col-span-7 lg:mt-0">
                    <dl class="space-y-4">
                        @foreach([
                            [
                                'q' => 'What will we cover in the strategy session?',
                                'a' => "You'll talk directly with me about where your business is today &mdash; your team size, how you use technology, and what's keeping you up at night. This isn't a deep-dive audit. It's a conversation to figure out if there's a fit. If there is, we'll talk about what comes next. If there isn't, you'll still walk away with something useful.",
                            ],
                            [
                                'q' => 'Is there a cost for this initial session?',
                                'a' => 'No. Zero. This is a conversation, not a sales pitch.',
                            ],
                            [
                                'q' => "Who will I be meeting with?",
                                'a' => "Me &mdash; Mike Faas. I'm a fractional CTO and CISO who helps founder-led businesses make sense of technology and security without the overhead of a full-time executive.",
                            ],
                            [
                                'q' => 'What should I prepare for the meeting?',
                                'a' => "Nothing formal. Know your business, know what's bugging you. That's enough.",
                            ],
                        ] as $faq)
                            <div class="rounded-2xl bg-echo-900/60 p-6 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                                <dt class="font-display text-lg font-semibold text-white">{{ $faq['q'] }}</dt>
                                <dd class="mt-3 text-base leading-7 text-echo-300">{!! $faq['a'] !!}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </section>
@stop
