---
title: Fractional CTO & CISO
description: Executive-level technology and security leadership for growing businesses. Get strategic guidance without the full-time commitment.
---
@extends('_layouts.main')

@section('body')

{{-- Hero Section --}}
<section class="relative min-h-[90vh] flex items-center">
    {{-- Bottom-right gradient accent (top-left is now fixed in layout) --}}
    <div class="absolute bottom-0 -right-20 w-80 h-80 bg-gradient-to-tl from-crimson-800/20 to-transparent transform skew-x-12 blur-2xl"></div>

    {{-- Hero circuit decoration --}}
    <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-3/4 h-[120%] pointer-events-none hidden lg:block">
        <svg viewBox="0 0 600 700" class="w-full h-full opacity-30" fill="none" xmlns="http://www.w3.org/2000/svg">
            {{-- Main central hexagon cluster --}}
            <path d="M300 200 L380 246 L380 338 L300 384 L220 338 L220 246 Z" stroke="#CC3333" stroke-width="2" fill="none"/>
            <path d="M300 220 L360 254 L360 322 L300 356 L240 322 L240 254 Z" stroke="#CC3333" stroke-width="1.5" fill="none" opacity="0.7"/>
            <path d="M300 245 L340 267 L340 313 L300 335 L260 313 L260 267 Z" stroke="#990000" stroke-width="1.5" fill="#990000" fill-opacity="0.15"/>

            {{-- Circuit traces from main hexagon --}}
            {{-- Top --}}
            <line x1="300" y1="200" x2="300" y2="120" stroke="#CC3333" stroke-width="2"/>
            <line x1="300" y1="120" x2="380" y2="80" stroke="#CC3333" stroke-width="2"/>
            <circle cx="385" cy="77" r="5" fill="#CC3333"/>

            {{-- Top branch --}}
            <line x1="300" y1="150" x2="220" y2="100" stroke="#990000" stroke-width="1.5"/>
            <line x1="220" y1="100" x2="220" y2="50" stroke="#990000" stroke-width="1.5"/>
            <circle cx="220" cy="45" r="4" fill="#990000"/>

            {{-- Upper right --}}
            <line x1="380" y1="246" x2="450" y2="210" stroke="#CC3333" stroke-width="2"/>
            <line x1="450" y1="210" x2="520" y2="210" stroke="#CC3333" stroke-width="2"/>
            <circle cx="528" cy="210" r="5" fill="#CC3333"/>

            {{-- Right side --}}
            <line x1="380" y1="292" x2="480" y2="292" stroke="#990000" stroke-width="1.5"/>
            <line x1="480" y1="292" x2="480" y2="350" stroke="#990000" stroke-width="1.5"/>
            <circle cx="480" cy="358" r="4" fill="#990000"/>

            {{-- Lower right --}}
            <line x1="380" y1="338" x2="440" y2="380" stroke="#CC3333" stroke-width="2"/>
            <line x1="440" y1="380" x2="440" y2="450" stroke="#CC3333" stroke-width="2"/>
            <circle cx="440" cy="458" r="5" fill="#CC3333"/>

            {{-- Bottom --}}
            <line x1="300" y1="384" x2="300" y2="480" stroke="#CC3333" stroke-width="2"/>
            <line x1="300" y1="480" x2="200" y2="530" stroke="#CC3333" stroke-width="2"/>
            <circle cx="193" cy="534" r="5" fill="#CC3333"/>

            {{-- Lower left --}}
            <line x1="220" y1="338" x2="150" y2="380" stroke="#990000" stroke-width="1.5"/>
            <line x1="150" y1="380" x2="150" y2="320" stroke="#990000" stroke-width="1.5"/>
            <circle cx="150" cy="312" r="4" fill="#990000"/>

            {{-- Left side --}}
            <line x1="220" y1="292" x2="120" y2="292" stroke="#CC3333" stroke-width="2"/>
            <line x1="120" y1="292" x2="80" y2="250" stroke="#CC3333" stroke-width="2"/>
            <circle cx="75" cy="245" r="5" fill="#CC3333"/>

            {{-- Secondary hexagon - upper right --}}
            <path d="M480 100 L530 130 L530 190 L480 220 L430 190 L430 130 Z" stroke="#CC3333" stroke-width="1.5" fill="none" opacity="0.5"/>
            <line x1="530" y1="160" x2="580" y2="160" stroke="#CC3333" stroke-width="1.5" opacity="0.5"/>
            <circle cx="588" cy="160" r="4" fill="#CC3333" opacity="0.5"/>
            <line x1="480" y1="100" x2="480" y2="60" stroke="#CC3333" stroke-width="1.5" opacity="0.5"/>
            <circle cx="480" cy="52" r="4" fill="#CC3333" opacity="0.5"/>

            {{-- Secondary hexagon - lower right --}}
            <path d="M500 420 L540 445 L540 495 L500 520 L460 495 L460 445 Z" stroke="#990000" stroke-width="1" fill="none" opacity="0.4"/>
            <line x1="540" y1="470" x2="590" y2="470" stroke="#990000" stroke-width="1" opacity="0.4"/>
            <circle cx="596" cy="470" r="3" fill="#990000" opacity="0.4"/>

            {{-- Secondary hexagon - upper left --}}
            <path d="M120 80 L160 105 L160 155 L120 180 L80 155 L80 105 Z" stroke="#CC3333" stroke-width="1" fill="none" opacity="0.35"/>
            <line x1="80" y1="130" x2="30" y2="130" stroke="#CC3333" stroke-width="1" opacity="0.35"/>
            <circle cx="22" cy="130" r="3" fill="#CC3333" opacity="0.35"/>

            {{-- Secondary hexagon - lower --}}
            <path d="M180 580 L220 605 L220 655 L180 680 L140 655 L140 605 Z" stroke="#990000" stroke-width="1" fill="none" opacity="0.3"/>
            <line x1="220" y1="630" x2="270" y2="630" stroke="#990000" stroke-width="1" opacity="0.3"/>

            {{-- Connecting traces between hexagons --}}
            <line x1="430" y1="160" x2="385" y2="200" stroke="#990000" stroke-width="1" opacity="0.4"/>
            <line x1="460" y1="445" x2="400" y2="400" stroke="#990000" stroke-width="1" opacity="0.3"/>

            {{-- Floating accent nodes --}}
            <circle cx="550" cy="300" r="3" fill="#CC3333" opacity="0.4"/>
            <circle cx="570" cy="380" r="2" fill="#990000" opacity="0.3"/>
            <circle cx="50" cy="200" r="3" fill="#CC3333" opacity="0.35"/>
            <circle cx="30" cy="350" r="2" fill="#990000" opacity="0.3"/>
            <circle cx="350" cy="550" r="3" fill="#CC3333" opacity="0.3"/>
            <circle cx="100" cy="450" r="2" fill="#990000" opacity="0.25"/>
            <circle cx="550" cy="80" r="2" fill="#CC3333" opacity="0.3"/>
            <circle cx="400" y="600" r="2" fill="#990000" opacity="0.2"/>
        </svg>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl lg:max-w-xl">
            {{-- Eyebrow --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-echo-800/50 border border-echo-700 mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-crimson-500 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-crimson-500"></span>
                </span>
                <span class="text-sm font-medium text-echo-300">Fractional Executive Services</span>
            </div>

            {{-- Headline --}}
            <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl font-bold text-white leading-[1.1] tracking-tight mb-6">
                Strategic tech leadership,
                <span class="text-crimson-500">when you need it.</span>
            </h1>

            {{-- Subheadline --}}
            <p class="text-xl lg:text-2xl text-echo-300 leading-relaxed mb-10 max-w-2xl">
                Technology strategy. Security leadership. Architecture decisions. Vendor evaluation. The CTO and CISO work your business needs—without the full-time overhead. And unlike most consultants, I won't pretend your challenges have simple answers when they don't.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="mailto:info@echocyber.com"
                   class="inline-flex items-center justify-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-glow-lg group">
                    <span>Start the Conversation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="/services"
                   class="inline-flex items-center justify-center gap-2 bg-transparent border border-echo-600 hover:border-echo-500 text-echo-200 hover:text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-echo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>

{{-- Trusted By Section --}}
<section class="py-12 border-y border-echo-800/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col items-center gap-8">
            <span class="text-echo-500 text-sm font-medium uppercase tracking-wider">Trusted by teams at</span>
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12">
                <div class="flex items-center">
                    <img src="/assets/img/clients/bose.png" alt="Bose" class="h-20 w-auto">
                </div>
                <div class="flex items-center gap-3">
                    <img src="/assets/img/clients/sr-logo.png" alt="Strongrock" class="h-8 w-auto">
                    <span class="text-echo-300 font-display text-lg font-semibold">Strongrock Engineering</span>
                </div>
                <div class="flex items-center">
                    <img src="/assets/img/clients/carnival.png" alt="Carnival Cruise Lines" class="h-7 w-auto">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- What I Do Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Strategic technology leadership that speaks your language.
            </h2>
            <p class="text-lg text-echo-300 mb-4">
                Technology roadmaps. Architecture decisions. Security programs. Vendor negotiations. Team building. Compliance. These aren't complicated puzzles with right answers—they're complex decisions that depend on your specific context, constraints, and goals.
            </p>
            <p class="text-lg text-echo-300">
                I serve as your fractional CTO and CISO, bringing executive-level judgment to the decisions that matter. But more importantly, I translate the complexity into strategy your whole leadership team can understand and act on.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- CTO Card --}}
            <div class="group relative bg-echo-800/30 border border-echo-700 rounded-xl p-8 lg:p-10 hover:border-crimson-700/50 transition-all duration-500 hover:bg-echo-800/50 overflow-hidden">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-crimson-900/20 transform rotate-45 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-crimson-900/30 rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crimson-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <h3 class="font-display text-2xl font-bold text-white mb-4">
                        Fractional CTO
                    </h3>
                    <p class="text-echo-300 mb-6">
                        Technology strategy for complex environments. I help you build roadmaps, make architecture decisions, evaluate vendors, and develop teams—while recognizing that these aren't puzzle problems with clean solutions. They're judgment calls that need clear thinking and honest trade-offs.
                    </p>

                    <ul class="space-y-3 text-echo-400">
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Technology roadmap & strategy</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Architecture & technical decisions</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Vendor evaluation & management</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Team mentorship & hiring</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- CISO Card --}}
            <div class="group relative bg-echo-800/30 border border-echo-700 rounded-xl p-8 lg:p-10 hover:border-crimson-700/50 transition-all duration-500 hover:bg-echo-800/50 overflow-hidden">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-crimson-900/20 transform rotate-45 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-crimson-900/30 rounded-xl mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crimson-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>

                    <h3 class="font-display text-2xl font-bold text-white mb-4">
                        Fractional CISO
                    </h3>
                    <p class="text-echo-300 mb-6">
                        Security leadership without the fear-mongering. I build programs, assess risk, guide compliance, and plan for incidents—focused on what actually matters for your business, not what vendors are selling this quarter.
                    </p>

                    <ul class="space-y-3 text-echo-400">
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Security program development</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Risk assessment & management</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Compliance guidance (SOC 2, etc.)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Incident response planning</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Fractional Section --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Why fractional?
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Think of it like having a CFO on retainer. You get the strategic thinking and executive experience of a CTO or CISO - without the $300K+ salary, benefits, and hiring headaches.
                </p>
                <p class="text-lg text-echo-300 mb-8">
                    A fractional executive works with your business 10-20 hours per week, joining leadership meetings, guiding your team, and owning the decisions that matter. Same accountability as a full-time hire. Fraction of the cost.
                </p>
                <div class="flex items-center gap-4">
                    <a href="/about" class="text-crimson-400 hover:text-crimson-300 font-medium inline-flex items-center gap-2 transition-colors">
                        Learn more about my approach
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">$150K+</div>
                    <p class="text-echo-400 text-sm">Average annual savings vs. full-time exec</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">10-20</div>
                    <p class="text-echo-400 text-sm">Hours per week, tailored to your needs</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">20+</div>
                    <p class="text-echo-400 text-sm">Years enterprise technology experience</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">1 day</div>
                    <p class="text-echo-400 text-sm">Typical response for urgent matters</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="relative bg-gradient-to-br from-crimson-900/40 to-crimson-950/40 border border-crimson-800/30 rounded-2xl p-12 lg:p-16 overflow-hidden">
            {{-- Background decoration - angular shapes --}}
            <div class="absolute -top-12 -right-12 w-48 h-48 bg-crimson-800/20 transform rotate-45 blur-xl"></div>
            <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-crimson-900/30 transform -rotate-12 blur-xl"></div>

            <div class="relative max-w-2xl">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Ready to level up your technology strategy?
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Let's have a conversation about where you are today and where you want to go. No pressure, no sales pitch - just a straightforward discussion about how I might be able to help.
                </p>
                <a href="mailto:info@echocyber.com"
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
