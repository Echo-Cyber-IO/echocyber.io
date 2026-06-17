{{-- ==================== HERO ==================== --}}
{{-- Full dark. Statement, not a sales pitch. --}}
<section class="relative overflow-hidden">
    {{-- Decorative crimson gradient blur (hex-grid comes from the layout) --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/50 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 sm:py-28 lg:px-8 lg:py-32">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="font-display text-4xl font-bold tracking-tight text-balance text-white sm:text-6xl lg:text-7xl">
                Technology doesn't fail in silos. It fails in <span class="text-crimson-500">cascades.</span>
            </h1>
            <p class="mx-auto mt-6 font-display text-2xl font-semibold text-echo-100 sm:text-3xl">
                Translating <span class="text-crimson-500">geek</span> into human.
            </p>
            <p class="mx-auto mt-4 max-w-2xl text-lg leading-8 text-echo-300">
                Fractional CTO &amp; CISO for founder-led companies. Strategy without the $250K hire.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row sm:gap-x-5">
                <a href="/schedule" class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-crimson-600 hover:shadow-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
                    Grab 30 Minutes
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
        <div class="mx-auto mt-20 max-w-5xl">
            <dl class="grid grid-cols-2 gap-px overflow-hidden rounded-2xl bg-echo-800/40 ring-1 ring-echo-700/40 sm:grid-cols-4">

                <div class="group relative flex flex-col items-center bg-echo-950/70 px-6 py-8 text-center transition-colors hover:bg-echo-900/70">
                    <dd class="font-display text-5xl font-bold tracking-tight text-white sm:text-6xl">25+</dd>
                    <div class="mt-3 h-0.5 w-8 rounded-full bg-crimson-700 transition-all group-hover:w-12 group-hover:bg-crimson-500"></div>
                    <dt class="mt-3 font-mono text-[10px] uppercase tracking-[0.2em] text-echo-400">Years of tech leadership</dt>
                </div>

                <div class="group relative flex flex-col items-center bg-echo-950/70 px-6 py-8 text-center transition-colors hover:bg-echo-900/70">
                    <dd class="font-display text-5xl font-bold tracking-tight text-white sm:text-6xl">40+</dd>
                    <div class="mt-3 h-0.5 w-8 rounded-full bg-crimson-700 transition-all group-hover:w-12 group-hover:bg-crimson-500"></div>
                    <dt class="mt-3 font-mono text-[10px] uppercase tracking-[0.2em] text-echo-400">Security programs built</dt>
                </div>

                <div class="group relative flex flex-col items-center bg-echo-950/70 px-6 py-8 text-center transition-colors hover:bg-echo-900/70">
                    <dd class="font-display text-5xl font-bold tracking-tight text-white sm:text-6xl">8+</dd>
                    <div class="mt-3 h-0.5 w-8 rounded-full bg-crimson-700 transition-all group-hover:w-12 group-hover:bg-crimson-500"></div>
                    <dt class="mt-3 font-mono text-[10px] uppercase tracking-[0.2em] text-echo-400">Frameworks navigated</dt>
                </div>

                {{-- Punchline tile (crimson-tinted + glow) --}}
                <div class="group relative flex flex-col items-center overflow-hidden bg-gradient-to-br from-crimson-950/40 via-echo-950/70 to-echo-950/70 px-6 py-8 text-center transition-colors hover:bg-echo-900/70">
                    <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-br from-crimson-700/10 to-transparent opacity-60 pointer-events-none"></div>
                    <dd class="relative font-display text-5xl font-bold tracking-tight text-crimson-500 sm:text-6xl drop-shadow-[0_0_12px_rgba(204,51,51,0.35)]">0</dd>
                    <div class="relative mt-3 h-0.5 w-8 rounded-full bg-crimson-500 transition-all group-hover:w-12"></div>
                    <dt class="relative mt-3 font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-400">Fear-mongering</dt>
                </div>

            </dl>
        </div>
    </div>
</section>
