---
title: Fractional CTO & CISO
description: Executive-level technology and security leadership for growing businesses. Get strategic guidance without the full-time commitment.
---
@extends('_layouts.main')

@section('body')

{{-- Hero Section --}}
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
    {{-- Background pattern --}}
    <div class="absolute inset-0 bg-signal-grid opacity-50"></div>

    {{-- Gradient orbs --}}
    <div class="absolute top-1/4 -left-32 w-96 h-96 bg-crimson-900/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-crimson-800/10 rounded-full blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
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
                Get executive-level CTO and CISO expertise for your growing business without the full-time overhead. Clear strategy. Real results.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/contact"
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

{{-- What I Do Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Two roles. One mission.
            </h2>
            <p class="text-lg text-echo-300">
                Whether you need technology strategy, security leadership, or both - I bring executive-level expertise to help your business grow confidently.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- CTO Card --}}
            <div class="group relative bg-echo-800/30 border border-echo-700 rounded-2xl p-8 lg:p-10 hover:border-crimson-700/50 transition-all duration-500 hover:bg-echo-800/50">
                <div class="absolute top-0 right-0 w-32 h-32 bg-crimson-900/10 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

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
                        Strategic technology leadership to align your tech investments with business goals. From architecture decisions to team building, get the guidance you need to scale.
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
            <div class="group relative bg-echo-800/30 border border-echo-700 rounded-2xl p-8 lg:p-10 hover:border-crimson-700/50 transition-all duration-500 hover:bg-echo-800/50">
                <div class="absolute top-0 right-0 w-32 h-32 bg-crimson-900/10 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

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
                        Security leadership that protects your business without the complexity. Get practical, risk-based security guidance that fits your budget and growth stage.
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
                    Not every business needs a full-time CTO or CISO. But every growing business needs strategic technology and security leadership at some point.
                </p>
                <p class="text-lg text-echo-300 mb-8">
                    Fractional leadership gives you access to executive-level expertise at a fraction of the cost. You get the strategic thinking, the experience, and the accountability - scaled to what you actually need.
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
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">70%</div>
                    <p class="text-echo-400 text-sm">Cost savings vs. full-time executive hire</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">24hr</div>
                    <p class="text-echo-400 text-sm">Typical response time for urgent issues</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">15+</div>
                    <p class="text-echo-400 text-sm">Years of enterprise technology experience</p>
                </div>
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6">
                    <div class="text-4xl font-display font-bold text-crimson-500 mb-2">Flex</div>
                    <p class="text-echo-400 text-sm">Scale up or down based on your needs</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="relative bg-gradient-to-br from-crimson-900/40 to-crimson-950/40 border border-crimson-800/30 rounded-3xl p-12 lg:p-16 overflow-hidden">
            {{-- Background decoration --}}
            <div class="absolute top-0 right-0 w-64 h-64 bg-crimson-800/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-crimson-900/20 rounded-full blur-3xl"></div>

            <div class="relative max-w-2xl">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Ready to level up your technology strategy?
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Let's have a conversation about where you are today and where you want to go. No pressure, no sales pitch - just a straightforward discussion about how I might be able to help.
                </p>
                <a href="/contact"
                   class="inline-flex items-center justify-center gap-2 bg-white hover:bg-echo-100 text-echo-950 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 group">
                    <span>Schedule a Call</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
