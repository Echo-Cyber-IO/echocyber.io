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
                'description' => "I stay in the picture for clients who've finished a Signal engagement &mdash; monthly counsel, quarterly strategic reviews, and on-call support for the decisions that matter.",
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
