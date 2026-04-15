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
                15 minutes. 8 categories. Your A&ndash;F grade up front&nbsp;&mdash; full report one click from there. Just clarity.
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
