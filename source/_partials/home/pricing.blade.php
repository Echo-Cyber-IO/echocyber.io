{{-- ==================== HOW IT WORKS (Tune → Signal → Echo: narrative + pricing + payoff) ==================== --}}
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
                Tune in. Find the signal. <span class="text-crimson-500">Let it echo.</span>
            </h2>
        </div>

        <p class="mx-auto mt-8 max-w-2xl text-center text-lg leading-8 text-pretty text-echo-300">
            I help founder-led companies make confident technology and security decisions, and build the programs behind them, so you can grow without flying blind, or paying for a $250K hire.
        </p>
        <p class="mx-auto mt-4 max-w-2xl text-center text-base font-medium text-pretty text-echo-400">
            No discovery calls that are really sales pitches. No "custom pricing" that means "whatever we think you'll pay." Here's exactly what it costs.
        </p>

        <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            {{-- Tune --}}
            @include('_partials.pricing-tier', [
                'name' => 'Tune',
                'tagline' => 'Strategic Assessment',
                'metaphor' => 'Tune in.',
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
                'metaphor' => 'Find the signal.',
                'price' => '$10,000',
                'priceSuffix' => '/month · 3-month min',
                'description' => 'I join your leadership team part-time. Strategy sessions, vendor calls, team building, incident response, board prep, whatever the role requires that week.',
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
                'metaphor' => 'Let it echo.',
                'price' => '$3,000',
                'priceSuffix' => '/month · 6-month commitment',
                'description' => "I stay in the picture for clients who've finished a Signal engagement. Monthly counsel, quarterly strategic reviews, and on-call support for the decisions that matter.",
                'features' => [
                    'Monthly check-ins + quarterly strategic reviews',
                    'On-call for key decisions and vendor evaluations',
                    'Governance oversight and course corrections',
                ],
                'cta' => 'Get started',
                'featured' => false,
            ])

        </div>

        {{-- What you walk away with --}}
        <div class="mx-auto mt-24 max-w-3xl text-center">
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
                <div class="rounded-2xl bg-echo-950/60 p-6 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                    <dt class="flex items-start gap-3">
                        <svg class="mt-0.5 h-5 w-5 flex-none text-crimson-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-display text-lg font-semibold text-white">{{ $item[0] }}</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-echo-300">{{ $item[1] }}</dd>
                </div>
            @endforeach
        </dl>

        <p class="mx-auto mt-16 max-w-2xl text-center text-sm text-echo-500">
            Most clients start with Tune. No pressure, no lock-in beyond what's listed above.
        </p>
    </div>
</section>
