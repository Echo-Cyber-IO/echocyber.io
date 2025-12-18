---
title: Services
description: Fractional CTO and CISO services for growing businesses. Strategic technology and security leadership scaled to your needs.
---
@extends('_layouts.main')

@section('body')

{{-- Hero Section --}}
<section class="relative py-24 lg:py-32">
    {{-- Subtle gradient accent --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-crimson-900/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Services</span>
            </div>
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                Executive leadership, flexibly delivered.
            </h1>
            <p class="text-xl text-echo-300 leading-relaxed mb-12">
                Whether you need a strategic technology partner, security leadership, or both - I provide fractional executive services that scale with your business needs and budget. No jargon, no fear-mongering, no pretending complex problems have simple answers.
            </p>

            {{-- Quick stats --}}
            <div class="flex flex-wrap gap-8 text-sm">
                <div class="flex items-center gap-2">
                    <span class="text-2xl font-display font-bold text-crimson-500">20+</span>
                    <span class="text-echo-400">Years Experience</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-2xl font-display font-bold text-crimson-500">50+</span>
                    <span class="text-echo-400">Projects Delivered</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-2xl font-display font-bold text-crimson-500">Fortune 500</span>
                    <span class="text-echo-400">to Startups</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Engagement Tiers: Tune → Signal → Echo --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Engagement Options</span>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Ways to engage
            </h2>
            <p class="text-lg text-echo-300">
                Three tiers designed to meet you where you are. Start with clarity, scale to full engagement, then maintain momentum with ongoing advisory.
            </p>
        </div>

        {{-- Tier cards --}}
        <div class="grid lg:grid-cols-3 gap-8">
            {{-- Tune --}}
            <div class="bg-echo-800/50 border border-echo-700 rounded-xl p-8 hover:border-crimson-800/50 transition-colors">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 flex items-center justify-center bg-crimson-900/50 rounded-lg">
                        <svg class="w-5 h-5 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="8" />
                            <circle cx="12" cy="12" r="2.5" fill="currentColor" stroke="none" />
                            <line x1="12" y1="9.5" x2="12" y2="4" />
                        </svg>
                    </div>
                    <span class="text-xs font-mono text-echo-500 uppercase tracking-wider">Entry</span>
                </div>

                <h3 class="font-display text-2xl font-bold text-white mb-2">Tune</h3>
                <p class="text-crimson-500 text-sm font-medium mb-4">Tune in, calibrate, assess</p>

                <p class="text-echo-400 text-sm mb-6">
                    A focused strategy session using the Functional Technology Framework to diagnose where you are and chart where you need to go.
                </p>

                <ul class="space-y-2 mb-6">
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        4-hour strategy session
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        1-2 week prep via email
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Punch list + blindspot analysis
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        1-6 month campaign roadmap
                    </li>
                </ul>

                <div class="pt-4 border-t border-echo-700">
                    <p class="text-xs text-echo-500 mb-1">One-time engagement</p>
                    <p class="text-white font-display font-bold">Starting at $7,500</p>
                </div>
            </div>

            {{-- Signal --}}
            <div class="relative bg-echo-800/50 border-2 border-crimson-800/50 rounded-xl p-8 ring-1 ring-crimson-900/20">
                {{-- Featured badge --}}
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 bg-crimson-600 rounded-full text-xs font-semibold text-white">
                    Full Engagement
                </div>

                <div class="flex items-center gap-3 mb-4 mt-2">
                    <div class="w-10 h-10 flex items-center justify-center bg-crimson-900/50 rounded-lg">
                        <svg class="w-5 h-5 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788m13.788 0c3.808 3.807 3.808 9.98 0 13.788M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </div>
                    <span class="text-xs font-mono text-echo-500 uppercase tracking-wider">Fractional</span>
                </div>

                <h3 class="font-display text-2xl font-bold text-white mb-2">Signal</h3>
                <p class="text-crimson-500 text-sm font-medium mb-4">Clear signal through the noise</p>

                <p class="text-echo-400 text-sm mb-6">
                    Embedded fractional leadership. 10 hours per week of hands-on strategic guidance, team leadership, and execution oversight.
                </p>

                <ul class="space-y-2 mb-6">
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        10 hours/week engagement
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Systems Map at 30 days
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Weekly sprint planning & review
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Vendor & team management
                    </li>
                </ul>

                <div class="pt-4 border-t border-echo-700">
                    <p class="text-xs text-echo-500 mb-1">3-month minimum</p>
                    <p class="text-white font-display font-bold">Starting at $10,000/mo</p>
                </div>
            </div>

            {{-- Echo --}}
            <div class="bg-echo-800/50 border border-echo-700 rounded-xl p-8 hover:border-crimson-800/50 transition-colors">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 flex items-center justify-center bg-crimson-900/50 rounded-lg">
                        <svg class="w-5 h-5 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12h4l2-5 4 10 2-5h8" />
                        </svg>
                    </div>
                    <span class="text-xs font-mono text-echo-500 uppercase tracking-wider">Advisory</span>
                </div>

                <h3 class="font-display text-2xl font-bold text-white mb-2">Echo</h3>
                <p class="text-crimson-500 text-sm font-medium mb-4">The feedback loop, guidance reflected back</p>

                <p class="text-echo-400 text-sm mb-6">
                    Ongoing strategic advisory after completing a Tune or Signal engagement. Stay aligned with monthly check-ins and unlimited async support.
                </p>

                <ul class="space-y-2 mb-6">
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Monthly strategy sessions
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Bi-monthly sprint planning
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Unlimited email support
                    </li>
                    <li class="flex items-start gap-2 text-sm text-echo-300">
                        <svg class="w-4 h-4 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Access to SOPs & playbooks
                    </li>
                </ul>

                <div class="pt-4 border-t border-echo-700">
                    <p class="text-xs text-echo-500 mb-1">6-month commitment · Requires prior engagement</p>
                    <p class="text-white font-display font-bold">Starting at $3,000/mo</p>
                </div>
            </div>
        </div>

        <p class="text-center text-echo-400 text-sm mt-12">
            Every engagement is scoped to your specific situation. <a href="/contact" class="text-crimson-500 hover:text-crimson-400 transition-colors">Let's talk about what makes sense for you.</a>
        </p>
    </div>
</section>

{{-- Services Detail --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Fractional CTO --}}
        <div class="grid lg:grid-cols-2 gap-16 items-start mb-24">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Technology Leadership</span>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Fractional CTO
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Strategic technology leadership to align your tech investments with business goals. I help you navigate complex decisions, build the right team, and translate technical trade-offs into language your whole leadership team can act on.
                </p>
                <a href="/contact" class="text-crimson-500 hover:text-crimson-400 font-medium inline-flex items-center gap-2 transition-colors">
                    Discuss your technology needs
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-8">
                <h3 class="font-display text-lg font-bold text-white mb-6">What's included</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        {{-- map --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Technology strategy & roadmap</span>
                            <p class="text-echo-400 text-sm mt-1">Align technology investments with business objectives</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- cube-transparent --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Architecture decisions</span>
                            <p class="text-echo-400 text-sm mt-1">Make informed choices about platforms, tools, and design</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- scale --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Vendor evaluation</span>
                            <p class="text-echo-400 text-sm mt-1">Cut through sales pitches and find the right partners</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- user-group --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Team leadership</span>
                            <p class="text-echo-400 text-sm mt-1">Mentorship, hiring guidance, and process improvement</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- presentation-chart-line --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Board & investor communications</span>
                            <p class="text-echo-400 text-sm mt-1">Translate technical progress for stakeholders</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Fractional CISO --}}
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Security Leadership</span>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Fractional CISO
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Security leadership that protects your business without the fear-mongering. Practical, risk-based guidance focused on what actually matters for your business - not what vendors are selling this quarter.
                </p>
                <a href="/contact" class="text-crimson-500 hover:text-crimson-400 font-medium inline-flex items-center gap-2 transition-colors">
                    Discuss your security needs
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-8">
                <h3 class="font-display text-lg font-bold text-white mb-6">What's included</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        {{-- shield-check --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Security program development</span>
                            <p class="text-echo-400 text-sm mt-1">Build or mature your security capabilities systematically</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- chart-bar --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Risk assessment</span>
                            <p class="text-echo-400 text-sm mt-1">Identify and prioritize your actual security risks</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- clipboard-document-check --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Compliance guidance</span>
                            <p class="text-echo-400 text-sm mt-1">Navigate SOC 2, ISO 27001, HIPAA, and other frameworks</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- bell-alert --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Incident response</span>
                            <p class="text-echo-400 text-sm mt-1">Preparation, planning, and support when things go wrong</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        {{-- academic-cap --}}
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Security awareness</span>
                            <p class="text-echo-400 text-sm mt-1">Train your team without boring them to death</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Ideal For Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Best Fit</span>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Ideal for
            </h2>
            <p class="text-lg text-echo-300">
                Fractional executive services work best for companies at certain stages and situations.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                <h3 class="font-display text-lg font-bold text-white mb-2">Growing startups</h3>
                <p class="text-echo-400 text-sm">Series A-B companies that need strategic guidance but aren't ready for a full-time exec.</p>
            </div>
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                <h3 class="font-display text-lg font-bold text-white mb-2">SMBs scaling up</h3>
                <p class="text-echo-400 text-sm">Established businesses hitting technology or security complexity they haven't faced before.</p>
            </div>
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                <h3 class="font-display text-lg font-bold text-white mb-2">Compliance-bound</h3>
                <p class="text-echo-400 text-sm">Organizations facing SOC 2, HIPAA, or other compliance requirements for the first time.</p>
            </div>
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                <h3 class="font-display text-lg font-bold text-white mb-2">In transition</h3>
                <p class="text-echo-400 text-sm">Companies between technical leaders who need coverage and strategic continuity.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="relative bg-gradient-to-br from-crimson-900/40 to-crimson-950/40 border border-crimson-800/30 rounded-3xl p-12 lg:p-16 overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-crimson-800/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-crimson-900/20 rounded-full blur-3xl"></div>

            <div class="relative max-w-2xl">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Not sure what you need?
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    That's okay. Most conversations start with "we're not exactly sure what we need." Let's talk through your situation and figure out together if there's a fit.
                </p>
                <a href="/contact"
                   class="inline-flex items-center justify-center gap-2 bg-white hover:bg-echo-100 text-echo-950 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 group">
                    <span>Get in Touch</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
