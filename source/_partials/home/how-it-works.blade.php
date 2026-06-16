{{-- ==================== HOW IT WORKS (the path: Tune → Signal → Echo) ==================== --}}
<section class="bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Intro / one-liner --}}
        <div class="mx-auto max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">How it works</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>

            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-5xl">
                Tune in. Find the signal. <span class="text-crimson-500">Let it echo.</span>
            </h2>

            <p class="mx-auto mt-8 max-w-2xl text-lg leading-8 text-echo-300">
                I help founder-led companies make confident technology and security decisions, and build the programs behind them, so you can grow without flying blind, or paying for a $250K hire.
            </p>
        </div>

        {{-- The three steps: 01 Tune, 02 Signal, 03 Echo --}}
        <div class="mx-auto mt-16 grid max-w-md grid-cols-1 gap-6 lg:max-w-none lg:grid-cols-3">
            @foreach([
                ['01', 'Tune', 'Tune in.', 'A strategy session and a prioritized roadmap. I get the full picture of your technology and security; you get a clear plan you can act on.'],
                ['02', 'Signal', 'Find the signal.', 'I embed part-time as your fractional CTO and CISO, for as long as you need, cut the noise, make the calls with you, and build the programs.'],
                ['03', 'Echo', 'Let it echo.', 'Once it is running, I stay on for ongoing advisory so the work keeps paying off.'],
            ] as $step)
                <div class="relative flex flex-col rounded-2xl bg-echo-900/60 p-7 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                    <span class="font-mono text-sm text-crimson-500/70">{{ $step[0] }}</span>
                    <h3 class="mt-3 font-display text-xl font-semibold text-crimson-400">{{ $step[1] }}</h3>
                    <p class="mt-1 font-display text-base font-medium text-white">{{ $step[2] }}</p>
                    <p class="mt-3 text-base leading-7 text-echo-300">{{ $step[3] }}</p>
                </div>
            @endforeach
        </div>

        {{-- What you walk away with --}}
        <div class="mx-auto mt-20 max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">What you walk away with</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
                Not a report. A program that runs.
            </h2>
        </div>

        <dl class="mx-auto mt-14 grid max-w-md grid-cols-1 gap-6 md:max-w-none md:grid-cols-2 lg:grid-cols-3">
            @foreach([
                ['A prioritized roadmap', 'The order to do things in, not a 90-page report that sits in a drawer.'],
                ['Decisions you can defend', 'Technology and security calls you can take to your board and stand behind.'],
                ['Programs built and running', 'The actual work in place, not a stack of recommendations to figure out later.'],
                ['A team that can keep it going', 'Your people trained to run what we built after I step back.'],
                ['A translator in the room', 'Someone who speaks both sides for every vendor call and board meeting.'],
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
