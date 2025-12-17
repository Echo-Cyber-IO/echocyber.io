---
title: Services
description: Fractional CTO and CISO services for growing businesses. Strategic technology and security leadership scaled to your needs.
---
@extends('_layouts.main')

@section('body')

{{-- Hero Section --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                Executive leadership, flexibly delivered.
            </h1>
            <p class="text-xl text-echo-300 leading-relaxed">
                Whether you need a strategic technology partner, security leadership, or both - I provide fractional executive services that scale with your business needs and budget.
            </p>
        </div>
    </div>
</section>

{{-- How It Works --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                How it works
            </h2>
            <p class="text-lg text-echo-300">
                Fractional leadership is simple: you get executive-level expertise without the executive-level salary. Here's what that looks like in practice.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="relative">
                <div class="absolute top-0 left-0 w-12 h-12 flex items-center justify-center bg-crimson-900/50 rounded-xl text-crimson-400 font-display font-bold text-xl">1</div>
                <div class="pt-16">
                    <h3 class="font-display text-xl font-bold text-white mb-3">Discovery call</h3>
                    <p class="text-echo-400">
                        We start with a conversation to understand your current situation, challenges, and goals. No commitment, just clarity.
                    </p>
                </div>
            </div>

            <div class="relative">
                <div class="absolute top-0 left-0 w-12 h-12 flex items-center justify-center bg-crimson-900/50 rounded-xl text-crimson-400 font-display font-bold text-xl">2</div>
                <div class="pt-16">
                    <h3 class="font-display text-xl font-bold text-white mb-3">Tailored engagement</h3>
                    <p class="text-echo-400">
                        Based on your needs, we design an engagement that makes sense - from a few hours a month to a more embedded role.
                    </p>
                </div>
            </div>

            <div class="relative">
                <div class="absolute top-0 left-0 w-12 h-12 flex items-center justify-center bg-crimson-900/50 rounded-xl text-crimson-400 font-display font-bold text-xl">3</div>
                <div class="pt-16">
                    <h3 class="font-display text-xl font-bold text-white mb-3">Ongoing partnership</h3>
                    <p class="text-echo-400">
                        I become part of your extended team - available for strategy sessions, ad-hoc questions, and hands-on guidance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Detail --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Fractional CTO --}}
        <div class="grid lg:grid-cols-2 gap-16 items-start mb-24">
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-echo-800/50 border border-echo-700 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crimson-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-sm font-medium text-echo-300">Technology Leadership</span>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Fractional CTO
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Strategic technology leadership to align your tech investments with business goals. I help you make the right decisions, build the right team, and avoid costly mistakes.
                </p>
                <a href="mailto:info@echocyber.com" class="text-crimson-400 hover:text-crimson-300 font-medium inline-flex items-center gap-2 transition-colors">
                    Discuss your technology needs
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="bg-echo-800/30 border border-echo-700 rounded-2xl p-8">
                <h3 class="font-display text-lg font-bold text-white mb-6">What's included</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Technology strategy & roadmap</span>
                            <p class="text-echo-400 text-sm mt-1">Align technology investments with business objectives</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Architecture decisions</span>
                            <p class="text-echo-400 text-sm mt-1">Make informed choices about platforms, tools, and design</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Vendor evaluation</span>
                            <p class="text-echo-400 text-sm mt-1">Cut through sales pitches and find the right partners</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Team leadership</span>
                            <p class="text-echo-400 text-sm mt-1">Mentorship, hiring guidance, and process improvement</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
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
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-echo-800/50 border border-echo-700 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-crimson-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span class="text-sm font-medium text-echo-300">Security Leadership</span>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                    Fractional CISO
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    Security leadership that protects your business without the complexity. Practical, risk-based guidance that fits your resources and growth stage.
                </p>
                <a href="mailto:info@echocyber.com" class="text-crimson-400 hover:text-crimson-300 font-medium inline-flex items-center gap-2 transition-colors">
                    Discuss your security needs
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="bg-echo-800/30 border border-echo-700 rounded-2xl p-8">
                <h3 class="font-display text-lg font-bold text-white mb-6">What's included</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Security program development</span>
                            <p class="text-echo-400 text-sm mt-1">Build or mature your security capabilities systematically</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Risk assessment</span>
                            <p class="text-echo-400 text-sm mt-1">Identify and prioritize your actual security risks</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Compliance guidance</span>
                            <p class="text-echo-400 text-sm mt-1">Navigate SOC 2, ISO 27001, HIPAA, and other frameworks</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <span class="text-white font-medium">Incident response</span>
                            <p class="text-echo-400 text-sm mt-1">Preparation, planning, and support when things go wrong</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
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
                <a href="mailto:info@echocyber.com"
                   class="inline-flex items-center justify-center gap-2 bg-white hover:bg-echo-100 text-echo-950 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 group">
                    <span>Let's Figure It Out</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
