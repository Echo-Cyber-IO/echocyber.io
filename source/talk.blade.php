---
title: Talk with Mike
description: Pick 30 minutes or an hour with Mike Faas.
noindex: true
minimal: true
---
@extends('_layouts.main')

@section('body')

    {{-- Warm 1:1 lane: sent directly to connectors, peers, and partners. Unlisted and noindex. --}}
    {{-- Published CTAs belong on /schedule, not here. --}}
    <section class="relative pt-8 pb-4 lg:pt-10 lg:pb-6 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/40 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>

        <div class="relative mx-auto max-w-3xl px-6 text-center lg:px-8">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-450">Talk with Mike</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
                Let's find <span class="text-crimson-500">a time.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-lg text-pretty text-echo-300 sm:text-xl/8">
                Catching up, comparing notes, or working through something. Pick 30 minutes or an hour, whatever the conversation needs.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">30 or 60 minutes</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Google Meet</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Direct with Mike</span>
            </div>
        </div>
    </section>

    {{-- Calendar group widget (GHL "Talk with Mike": 30 and 60 minute calendars) --}}
    <section class="pt-0 pb-16 lg:pb-24">
        <div class="mx-auto max-w-7xl px-4">
            <div x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 2500)" class="relative">
                <div x-show="!loaded" x-transition.opacity.duration.300ms
                     class="absolute inset-0 z-10 flex flex-col items-center justify-center min-h-[800px] rounded-2xl bg-echo-900/40 ring-1 ring-echo-700/40 backdrop-blur-sm pointer-events-none">
                    <svg class="animate-spin h-12 w-12 text-crimson-500" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="mt-5 font-mono text-xs uppercase tracking-[0.2em] text-crimson-450">Loading calendar</p>
                </div>

                <iframe src="https://apicrm.ctox.com/widget/groups/talk-with-mike"
                    @load="loaded = true"
                    style="width: 100%; min-height: 800px; border: none; overflow: hidden;" scrolling="no"
                    id="talk-with-mike-group"
                    title="Book time with Mike Faas"></iframe>
            </div>

            <p class="mt-8 text-center text-sm text-echo-400">
                None of these times work?
                <a href="/contact" class="font-semibold text-crimson-500 transition-colors hover:text-crimson-450">Send me a note</a> and we'll find one.
            </p>

            <script src="https://apicrm.ctox.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </section>
@stop
