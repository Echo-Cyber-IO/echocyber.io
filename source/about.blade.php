---
title: About
description: Meet Michael Faas - Fractional CTO and CISO helping growing businesses build strategic technology and security capabilities.
---
@extends('_layouts.main')

@section('body')

{{-- Hero Section --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Content --}}
            <div>
                <h1 class="font-display text-4xl sm:text-5xl font-bold text-white mb-6">
                    Technology leadership that speaks your language.
                </h1>
                <p class="text-xl text-echo-300 leading-relaxed mb-8">
                    I'm Michael Faas, and I help growing businesses navigate the complex world of technology and security. My mission: translating technical complexity into clear, actionable strategy.
                </p>
                <div class="flex items-center gap-4">
                    <a href="/contact"
                       class="inline-flex items-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-glow">
                        Let's Connect
                    </a>
                    <a href="https://www.linkedin.com/in/mfaas/" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 text-echo-300 hover:text-white transition-colors">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>

            {{-- Photo --}}
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-crimson-900/20 to-transparent rounded-2xl blur-2xl"></div>
                <img src="/assets/img/Michael_Faas.jpg"
                     alt="Michael Faas - Fractional CTO & CISO"
                     class="relative rounded-2xl shadow-2xl w-full max-w-md mx-auto lg:max-w-none">
            </div>
        </div>
    </div>
</section>

{{-- Background Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-8">
                Background
            </h2>

            <div class="prose prose-lg prose-invert max-w-none">
                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    With over 20 years in enterprise technology and security, I've worn many hats: software engineer, security analyst, team lead, and technology executive. I've built systems that scale, led teams through complex projects, and helped organizations navigate everything from cloud migrations to security incidents.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    But what I've found most valuable isn't the technical knowledge itself - it's the ability to bridge the gap between technology teams and business leadership. Too often, critical technology decisions get lost in translation, and that's where things go wrong.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    That's why I started Echo Cyber. I saw too many growing businesses struggle with the same challenge: they needed strategic technology and security guidance, but couldn't justify (or find) a full-time executive. The fractional model solves that problem.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Philosophy Section --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-8">
                Why most technology initiatives fail
            </h2>

            <div class="prose prose-lg prose-invert max-w-none">
                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    Most leaders think they have a complicated technology problem. They actually have a complex one. And that confusion is expensive.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    <strong class="text-white">Complicated</strong> is a jet engine. Thousands of parts, incredibly intricate, but fundamentally predictable. You can disassemble it, understand every component, troubleshoot when it breaks. More expertise equals more control.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    <strong class="text-white">Complex</strong> is an ecosystem. The parts don't just connect—they interact, adapt, and create behaviors that can't be predicted by studying the pieces. Remove one thing and maybe nothing happens. Or maybe everything collapses. You won't know until it happens.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    Here's the danger: <strong class="text-white">they look identical from the outside.</strong>
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    That "straightforward" system modernization? Complex. The "simple" integration project? Complex. The reorg that was supposed to fix everything? Definitely complex.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed mb-6">
                    Leadership sees a complicated problem and deploys a complicated solution—new software, reorganization, updated processes. But they've got a complex problem. The system absorbs the change, routes around it, and returns to equilibrium. Or worse, the intervention triggers something unexpected.
                </p>

                <p class="text-crimson-400 text-xl leading-relaxed mb-6 font-medium">
                    The problem isn't that you're not smart enough. It's that you're using complicated-system thinking on a complex-system problem. Different game. Different rules.
                </p>

                <p class="text-echo-300 text-lg leading-relaxed">
                    I help leaders recognize which game they're actually playing—and navigate it with clear thinking instead of false certainty.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Approach Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                My approach
            </h2>
            <p class="text-lg text-echo-300">
                Three principles guide how I work with clients.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Principle 1 --}}
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-8">
                <div class="text-5xl font-display font-bold text-crimson-500/30 mb-4">01</div>
                <h3 class="font-display text-xl font-bold text-white mb-4">
                    Complex vs. Complicated
                </h3>
                <p class="text-echo-400">
                    A system migration isn't a puzzle with one right answer. A security program isn't a checklist. These are complex challenges—interdependent, context-dependent, full of trade-offs. I help you navigate them as they actually are, not as vendors wish they were.
                </p>
            </div>

            {{-- Principle 2 --}}
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-8">
                <div class="text-5xl font-display font-bold text-crimson-500/30 mb-4">02</div>
                <h3 class="font-display text-xl font-bold text-white mb-4">
                    Translation, not jargon
                </h3>
                <p class="text-echo-400">
                    Architecture decisions, risk assessments, vendor evaluations—none of it matters if your leadership team can't understand and act on it. I translate geek into human so the people making decisions actually know what they're deciding.
                </p>
            </div>

            {{-- Principle 3 --}}
            <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-8">
                <div class="text-5xl font-display font-bold text-crimson-500/30 mb-4">03</div>
                <h3 class="font-display text-xl font-bold text-white mb-4">
                    Signal over noise
                </h3>
                <p class="text-echo-400">
                    Every vendor has a 'critical' solution. Every framework has 'essential' controls. I filter the noise and focus on what actually moves the needle for your business—whether that's a technology roadmap, a security investment, or a hiring decision.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32 bg-echo-900/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Let's talk about your challenges.
            </h2>
            <p class="text-lg text-echo-300 mb-8">
                Whether you're facing a specific technology decision or need ongoing strategic guidance, I'm happy to have a conversation about how I might help.
            </p>
            <a href="/contact"
               class="inline-flex items-center justify-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-glow-lg group">
                <span>Get in Touch</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
