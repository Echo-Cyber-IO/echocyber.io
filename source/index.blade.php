---
title: Fractional CTO & CISO
description: Fractional CTO & CISO for growth-stage companies navigating technology and security decisions without full-time executive leadership.
---
@extends('_layouts.main')

@push('scripts')
{{-- Alpine.js Intersect plugin for scroll-triggered animations --}}
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<style>
    [x-cloak] { display: none !important; }
    .fade-up-init { opacity: 0; transform: translateY(24px); }
    .fade-up-active { opacity: 1; transform: translateY(0); transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
    .fade-in-init { opacity: 0; }
    .fade-in-active { opacity: 1; transition: opacity 0.6s ease-out; }
    .stagger-1 { transition-delay: 0.1s !important; }
    .stagger-2 { transition-delay: 0.2s !important; }
    .stagger-3 { transition-delay: 0.3s !important; }
    .stagger-4 { transition-delay: 0.35s !important; }
    .stagger-5 { transition-delay: 0.4s !important; }
    .stagger-6 { transition-delay: 0.45s !important; }

    /* Headshot clip path — hexagonal / diamond shape with rounded feel */
    .headshot-frame {
        clip-path: polygon(50% 0%, 95% 15%, 100% 55%, 85% 95%, 50% 100%, 15% 95%, 0% 55%, 5% 15%);
    }

    /* Logo cloud scroll */
    @keyframes logo-scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .logo-scroll-track { animation: logo-scroll 25s linear infinite; }
    .logo-scroll-track:hover { animation-play-state: paused; }

    /* Pricing card lift */
    .pricing-card { transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease; }
    .pricing-card:hover { transform: translateY(-4px); }
    .pricing-signal { box-shadow: 0 0 0 2px rgb(153 0 0 / 0.5), 0 25px 50px -12px rgb(153 0 0 / 0.15); }
    .pricing-signal:hover { box-shadow: 0 0 0 2px rgb(153 0 0 / 0.7), 0 30px 60px -12px rgb(153 0 0 / 0.25); }

    /* Testimonial card hover glow */
    .testimonial-card { transition: border-color 0.4s ease, box-shadow 0.4s ease; }
    .testimonial-card:hover { border-color: rgb(153 0 0 / 0.3); box-shadow: 0 10px 40px -10px rgb(153 0 0 / 0.08); }

    /* Sound Familiar card pulse on hover */
    .familiar-card { transition: border-color 0.3s ease, background-color 0.3s ease, transform 0.3s ease; }
    .familiar-card:hover { transform: translateX(4px); border-color: rgb(153 0 0 / 0.4); background-color: rgb(250 250 249); }

    /* Footer CTA shimmer */
    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }
    .footer-cta-card {
        background: linear-gradient(135deg, rgb(153 0 0 / 0.25) 0%, rgb(153 0 0 / 0.1) 30%, rgb(153 0 0 / 0.3) 50%, rgb(153 0 0 / 0.1) 70%, rgb(153 0 0 / 0.25) 100%);
        background-size: 200% 100%;
    }
    .footer-cta-card:hover { animation: shimmer 3s ease infinite; }
</style>
@endpush

@section('body')

{{-- ==================== ACT 1: PAIN ==================== --}}

{{-- Section 1: Hero (dark — uses layout bg-echo-950) --}}
<section class="relative min-h-[90vh] flex items-center">
    <div class="absolute bottom-0 -right-20 w-80 h-80 bg-gradient-to-tl from-crimson-800/20 to-transparent transform skew-x-12 blur-2xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-20 lg:py-28">
        <div class="grid lg:grid-cols-5 gap-12 items-center">
            <div class="lg:col-span-3">
                {{-- Eyebrow --}}
                <div class="flex items-center gap-3 mb-8 animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Fractional CTO &amp; CISO</span>
                </div>

                {{-- Headline --}}
                <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl font-bold text-white leading-[1.1] tracking-tight mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    The CTO and CISO you're
                    <span class="text-crimson-500">not ready to hire full-time.</span>
                </h1>

                {{-- Subheadline --}}
                <p class="text-xl lg:text-2xl text-echo-300 leading-relaxed mb-10 max-w-2xl animate-fade-in-up" style="animation-delay: 0.35s;">
                    You know you need a security strategy. You don't need a $250K salary to get one. I plug into your leadership team, fix what's broken, and build what's missing.
                </p>

                {{-- Dual CTAs --}}
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay: 0.5s;">
                    <a href="/contact"
                       class="inline-flex items-center justify-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-glow-lg hover:scale-[1.02] active:scale-[0.98] group">
                        <span>Schedule a Clarity Call</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="/assessment"
                       class="inline-flex items-center justify-center gap-2 bg-transparent border border-echo-600 hover:border-crimson-500/60 text-echo-200 hover:text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:bg-crimson-950/20">
                        Take the Signal Score Assessment
                    </a>
                </div>
            </div>

            {{-- Headshot with geometric frame --}}
            <div class="hidden lg:flex lg:col-span-2 justify-center animate-fade-in" style="animation-delay: 0.4s;">
                <div class="relative">
                    {{-- Glow behind --}}
                    <div class="absolute inset-0 bg-crimson-700/15 blur-3xl scale-110 rounded-full"></div>
                    {{-- Decorative ring --}}
                    <div class="absolute -inset-3 border border-crimson-500/20 rounded-2xl rotate-3"></div>
                    <div class="absolute -inset-3 border border-echo-600/30 rounded-2xl -rotate-2"></div>
                    {{-- Main image --}}
                    <div class="relative w-72 h-[28rem] rounded-2xl overflow-hidden border-2 border-echo-600/50 shadow-2xl">
                        <img src="/assets/img/mike-faas-hero.jpg" alt="Mike Faas — Fractional CTO and CISO" class="w-full h-full object-cover object-top">
                        {{-- Bottom gradient overlay --}}
                        <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-echo-950/60 to-transparent"></div>
                    </div>
                    {{-- Corner accent --}}
                    <div class="absolute -bottom-2 -right-2 w-6 h-6 border-r-2 border-b-2 border-crimson-500/40 rounded-br-lg"></div>
                    <div class="absolute -top-2 -left-2 w-6 h-6 border-l-2 border-t-2 border-crimson-500/40 rounded-tl-lg"></div>
                </div>
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

{{-- Trusted By Logo Cloud --}}
<section class="py-10 lg:py-14 bg-echo-950 border-t border-echo-800/40 border-b border-echo-800/40 overflow-hidden"
         x-data="{ shown: false }" x-intersect.once="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-center text-xs font-mono text-echo-500 uppercase tracking-widest mb-8 fade-up-init"
           :class="shown && 'fade-up-active'">Trusted by leaders at</p>
        <div class="relative overflow-hidden">
            {{-- Fade edges --}}
            <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-echo-950 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-echo-950 to-transparent z-10"></div>
            {{-- Scrolling track (duplicated for seamless loop) --}}
            <div class="logo-scroll-track flex items-center gap-16 w-max">
                @for ($i = 0; $i < 2; $i++)
                <img src="/assets/img/clients/bose.png" alt="Bose" class="h-8 opacity-40 hover:opacity-70 transition-opacity duration-300 grayscale hover:grayscale-0">
                <img src="/assets/img/clients/brcc.png" alt="Black Rifle Coffee Company" class="h-8 opacity-40 hover:opacity-70 transition-opacity duration-300 grayscale hover:grayscale-0">
                <img src="/assets/img/clients/carhartt.png" alt="Carhartt" class="h-8 opacity-40 hover:opacity-70 transition-opacity duration-300 grayscale hover:grayscale-0">
                <img src="/assets/img/clients/carnival.png" alt="Carnival" class="h-8 opacity-40 hover:opacity-70 transition-opacity duration-300 grayscale hover:grayscale-0">
                <img src="/assets/img/clients/strongrock.png" alt="Strong Rock" class="h-8 opacity-40 hover:opacity-70 transition-opacity duration-300 grayscale hover:grayscale-0">
                @endfor
            </div>
        </div>
    </div>
</section>

{{-- Section 2: Problem (light) --}}
<section id="services" class="py-20 lg:py-28 bg-stone-100"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16 fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">The Real Problem</span>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-stone-950 mb-6">
                Every vendor says it's urgent.<br>You can't tell what's real.
            </h2>
        </div>

        {{-- Three scenario blocks --}}
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            {{-- Block 1 --}}
            <div class="group relative bg-white shadow-md border border-stone-200 rounded-xl p-8 hover:border-crimson-500/50 transition-all duration-500 hover:shadow-lg fade-up-init stagger-1"
                 :class="shown && 'fade-up-active'">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-crimson-50/50 transform rotate-45 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="inline-flex items-center justify-center w-10 h-10 bg-crimson-50 group-hover:bg-crimson-100 rounded-lg mb-5 transition-colors duration-300">
                        <span class="text-crimson-500 font-display font-bold text-lg">01</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed">
                        A board member asks about your security posture and you're tap-dancing. That's not a knowledge gap &mdash; it's a governance gap.
                    </p>
                </div>
            </div>

            {{-- Block 2 --}}
            <div class="group relative bg-white shadow-md border border-stone-200 rounded-xl p-8 hover:border-crimson-500/50 transition-all duration-500 hover:shadow-lg fade-up-init stagger-2"
                 :class="shown && 'fade-up-active'">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-crimson-50/50 transform rotate-45 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="inline-flex items-center justify-center w-10 h-10 bg-crimson-50 group-hover:bg-crimson-100 rounded-lg mb-5 transition-colors duration-300">
                        <span class="text-crimson-500 font-display font-bold text-lg">02</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed">
                        You're making million-dollar tech decisions with vendor slide decks and gut instinct. You know it's not sustainable.
                    </p>
                </div>
            </div>

            {{-- Block 3 --}}
            <div class="group relative bg-white shadow-md border border-stone-200 rounded-xl p-8 hover:border-crimson-500/50 transition-all duration-500 hover:shadow-lg fade-up-init stagger-3"
                 :class="shown && 'fade-up-active'">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-crimson-50/50 transform rotate-45 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative">
                    <div class="inline-flex items-center justify-center w-10 h-10 bg-crimson-50 group-hover:bg-crimson-100 rounded-lg mb-5 transition-colors duration-300">
                        <span class="text-crimson-500 font-display font-bold text-lg">03</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed">
                        You're not ready for a $300K hire you don't know how to evaluate. The last consultant talked in acronyms nobody could act on.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Red-line divider --}}
<div class="flex justify-center py-2 bg-white">
    <img src="/assets/img/red-line.png" alt="" class="w-96 opacity-80" role="presentation">
</div>

{{-- Section 3: Sound Familiar? (light) --}}
<section class="py-16 lg:py-20 bg-white"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center gap-3 mb-6 fade-up-init" :class="shown && 'fade-up-active'">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Sound Familiar?</span>
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-1"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">A client just sent you a security questionnaire and your team is scrambling.</p>
                </div>
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-2"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">Your cyber insurance premium just doubled and nobody can explain why.</p>
                </div>
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-3"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">Someone asked about SOC 2 or HIPAA and you changed the subject.</p>
                </div>
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-4"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">Your IT person is also your &ldquo;security team&rdquo; and everyone knows that's not enough.</p>
                </div>
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-5"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">The board asked about cybersecurity and you tap-danced through the answer.</p>
                </div>
                <div class="familiar-card flex items-start gap-3 bg-stone-50 border border-stone-200 rounded-lg p-5 cursor-default fade-up-init stagger-6"
                     :class="shown && 'fade-up-active'">
                    <span class="text-crimson-500 mt-0.5 flex-shrink-0 text-lg">&#x25B8;</span>
                    <p class="text-stone-600 text-sm leading-relaxed">You need a technology strategy but a full-time CTO costs more than you can justify.</p>
                </div>
            </div>

            <div class="mt-12 max-w-2xl mx-auto fade-up-init" :class="shown && 'fade-up-active'" style="transition-delay: 0.5s;">
                <div class="border-l-4 border-crimson-600 pl-6 py-3 bg-crimson-50/30 rounded-r-lg">
                    <p class="font-display text-lg sm:text-xl text-stone-950 leading-snug font-medium">
                        Most security failures aren't technical. They're what happens when leaders optimize what they should be governing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== ACT 2: PERSON ==================== --}}

{{-- Section 4: Guide (light) --}}
<section id="about" class="py-20 lg:py-28 bg-stone-100"
         x-data="{ shown: false }" x-intersect.once.threshold.15="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div class="fade-up-init" :class="shown && 'fade-up-active'">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Your Guide</span>
                </div>
                <div class="flex items-center gap-6 mb-6">
                    <img src="/assets/img/mike-faas-square.jpg" alt="Mike Faas" class="w-20 h-20 rounded-xl object-cover border-2 border-stone-200 shadow-sm flex-shrink-0">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-stone-950">
                        I've sat in the CISO chair. I've lived the governance problems I write about.
                    </h2>
                </div>
                <p class="text-lg text-stone-600 mb-6">
                    I'm Mike Faas. 25+ years building security and technology programs &mdash; Fortune 500 to high-growth startups. Clients hire me because I translate complexity into clarity. I speak boardroom and server room. And I'd rather tell you the uncomfortable truth than sell you a comfortable lie.
                </p>
                <p class="text-base text-stone-500 italic">
                    Based in Raleigh, NC. Dad. Blue belt. Reluctant morning person.
                </p>
            </div>

            {{-- Spiky POV pull quotes --}}
            <div class="space-y-6 fade-up-init stagger-2" :class="shown && 'fade-up-active'">
                <div class="bg-white shadow-md border border-stone-200 rounded-xl p-8 relative overflow-hidden hover:border-crimson-500/30 transition-all duration-400">
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-crimson-500 to-crimson-700"></div>
                    <svg class="h-10 w-10 text-crimson-500/20 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-lg text-stone-950 font-medium leading-relaxed">
                        Cybersecurity isn't a problem. It's a signal. A breach doesn't mean your firewall failed. It means your org chart did.
                    </p>
                </div>

                <div class="bg-white shadow-md border border-stone-200 rounded-xl p-8 relative overflow-hidden hover:border-crimson-500/30 transition-all duration-400">
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-crimson-500 to-crimson-700"></div>
                    <svg class="h-10 w-10 text-crimson-500/20 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-lg text-stone-950 font-medium leading-relaxed">
                        If your CISO reports to the CIO who reports to the CFO, you don't have a security program. You have a suggestion box with extra steps.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 5: Testimonials (light) --}}
<section class="py-20 lg:py-28 bg-white"
         x-data="{ shown: false }" x-intersect.once.threshold.15="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-16 fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Don't Take My Word For It</span>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Jackson --}}
            <div class="testimonial-card bg-white shadow-md border border-stone-200 rounded-xl p-8 relative overflow-hidden fade-up-init stagger-1"
                 :class="shown && 'fade-up-active'">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-crimson-500/0 via-crimson-500/40 to-crimson-500/0"></div>
                <svg class="h-12 w-12 text-crimson-500/15 mb-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983z"/>
                </svg>
                <p class="text-stone-600 leading-relaxed mb-8">Mike has an exceptional talent for building authentic, trust-based relationships with customers. He was a key contributor to both strategic direction and client engagement. His skill set brings immediate value and would be an asset to any organization.</p>
                <div class="border-t border-stone-200 pt-5 mt-auto">
                    <p class="text-stone-950 font-semibold text-sm">James L. Jackson, MBA, CISM</p>
                    <p class="text-stone-500 text-sm mt-1">Cybersecurity Leader</p>
                </div>
            </div>

            {{-- Helms --}}
            <div class="testimonial-card bg-white shadow-md border border-stone-200 rounded-xl p-8 relative overflow-hidden fade-up-init stagger-2"
                 :class="shown && 'fade-up-active'">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-crimson-500/0 via-crimson-500/40 to-crimson-500/0"></div>
                <svg class="h-12 w-12 text-crimson-500/15 mb-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983z"/>
                </svg>
                <p class="text-stone-600 leading-relaxed mb-8">Mike has the ability to communicate technical concepts to a non-technical audience. When assigned a task, you can trust it will be done with the same level of attention to detail as if you had done it yourself.</p>
                <div class="border-t border-stone-200 pt-5 mt-auto">
                    <p class="text-stone-950 font-semibold text-sm">JD Helms</p>
                    <p class="text-stone-500 text-sm mt-1">COO @ SoftwareOne · Co-Founder @ PsychReport.ai</p>
                </div>
            </div>

            {{-- Sorensen --}}
            <div class="testimonial-card bg-white shadow-md border border-stone-200 rounded-xl p-8 relative overflow-hidden fade-up-init stagger-3"
                 :class="shown && 'fade-up-active'">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-crimson-500/0 via-crimson-500/40 to-crimson-500/0"></div>
                <svg class="h-12 w-12 text-crimson-500/15 mb-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <p class="text-stone-600 leading-relaxed mb-8">Mike is a strategic leader with deep expertise across multiple technology areas. He knows how to build trusted relationships with his customers, vendors, senior managers, peers, and direct reports. He is one of the good guys.</p>
                <div class="border-t border-stone-200 pt-5 mt-auto">
                    <p class="text-stone-950 font-semibold text-sm">Karan Sorensen, Ed.D, MBA, MS</p>
                    <p class="text-stone-500 text-sm mt-1">Innovation & Technology Executive</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Track Record (light) --}}
<section class="py-16 lg:py-20 bg-stone-100"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mb-12 fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Track Record</span>
            </div>
            <p class="text-stone-500 text-lg">Real engagements. Names withheld &mdash; NDAs are a feature, not a limitation.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Retailer --}}
            <div class="group bg-white shadow-md border border-stone-200 rounded-xl p-8 hover:border-crimson-500/50 transition-all duration-500 hover:shadow-lg fade-up-init stagger-1"
                 :class="shown && 'fade-up-active'">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-crimson-500 font-display font-bold text-lg">01</span>
                    <div>
                        <p class="text-stone-950 font-semibold text-sm">Fortune 500 Retailer</p>
                        <p class="text-stone-500 text-xs">Hundreds of locations · 5,000+ employees</p>
                    </div>
                </div>
                <p class="text-stone-600 leading-relaxed text-sm mb-4">Security enforcement was nonexistent at the edge &mdash; POS systems across hundreds of stores required manual intervention, with no centralized governance or policy control.</p>
                <div class="border-t border-stone-200 pt-4">
                    <p class="text-stone-600 text-sm font-medium">Designed a cloud-native device governance framework, migrated 15 legacy policies, and automated enrollment across 4 platforms. The organization had enforceable, auditable security posture for the first time.</p>
                </div>
            </div>

            {{-- Ecommerce --}}
            <div class="group bg-white shadow-md border border-stone-200 rounded-xl p-8 hover:border-crimson-500/50 transition-all duration-500 hover:shadow-lg fade-up-init stagger-2"
                 :class="shown && 'fade-up-active'">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-crimson-500 font-display font-bold text-lg">02</span>
                    <div>
                        <p class="text-stone-950 font-semibold text-sm">High-Growth Ecommerce Brand</p>
                        <p class="text-stone-500 text-xs">900+ users · Rapid scale</p>
                    </div>
                </div>
                <p class="text-stone-600 leading-relaxed text-sm mb-4">Outgrew their collaboration platform but couldn't afford downtime during a migration that touched every employee, 32TB of data, and 40 business-critical sites.</p>
                <div class="border-t border-stone-200 pt-4">
                    <p class="text-stone-600 text-sm font-medium">Led a zero-disruption platform migration &mdash; 893 active users, 1,200+ archived accounts, identity sync, and policy-driven device reconfiguration. Eliminated legacy infrastructure and reduced administrative overhead.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== ACT 3: PLAN ==================== --}}

{{-- Red-line divider --}}
<div class="flex justify-center py-2 bg-stone-100">
    <img src="/assets/img/red-line.png" alt="" class="w-96 opacity-80" role="presentation">
</div>

{{-- Section 7: Pricing (light) --}}
<section id="pricing" class="py-20 lg:py-28 bg-stone-100"
         x-data="{ shown: false }" x-intersect.once.threshold.10="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16 fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">The Path Forward</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-stone-950 mb-4">
                Three ways to work together. Start wherever makes sense.
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mb-10 items-stretch">
            {{-- Tune --}}
            <div class="pricing-card group bg-white shadow-md border border-stone-200 hover:border-crimson-500 rounded-xl p-8 transition-all duration-300 flex flex-col fade-up-init stagger-1"
                 :class="shown && 'fade-up-active'">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-crimson-50 group-hover:bg-crimson-100 rounded-2xl mb-5 transition-colors duration-300">
                        <svg class="h-8 w-8 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="8" />
                            <circle cx="12" cy="12" r="2.5" fill="currentColor" stroke="none" />
                            <line x1="12" y1="9.5" x2="12" y2="4" />
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-stone-950 mb-1">Tune</h3>
                    <p class="text-crimson-500 text-lg font-semibold mb-1">$7,500</p>
                    <p class="text-stone-500 text-sm">one-time</p>
                </div>
                <p class="text-crimson-500 text-sm font-semibold uppercase tracking-wide mb-3 text-center">Strategic Assessment</p>
                <p class="text-stone-500 text-sm leading-relaxed mb-6">
                    I map your landscape, find the highest-leverage fixes, and hand you a roadmap you can actually execute. Best first step if you're not sure what you need.
                </p>
                <ul class="space-y-3 text-stone-600 text-sm mt-auto">
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Stakeholder interviews + current-state assessment</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Technology and security gap analysis</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Prioritized roadmap with clear next steps</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-stone-200">
                    <p class="text-stone-500 text-xs font-mono uppercase tracking-wider mb-2">Outcome</p>
                    <p class="text-stone-600 text-sm italic">You stop guessing what to fix first.</p>
                </div>
            </div>

            {{-- Signal (highlighted) --}}
            <div class="pricing-card pricing-signal group bg-white border-2 border-crimson-500 rounded-xl p-8 transition-all duration-300 flex flex-col relative md:-mt-4 md:mb-[-1rem] fade-up-init stagger-2"
                 :class="shown && 'fade-up-active'">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="bg-crimson-700 text-white text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wider shadow-lg shadow-crimson-900/30">Most Popular</span>
                </div>
                <div class="text-center mb-6 mt-2">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-crimson-100 group-hover:bg-crimson-200 rounded-2xl mb-5 transition-colors duration-300">
                        <svg class="h-8 w-8 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788m13.788 0c3.808 3.807 3.808 9.98 0 13.788M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-stone-950 mb-1">Signal</h3>
                    <p class="text-crimson-500 text-2xl font-bold mb-1">$10,000/mo</p>
                    <p class="text-stone-500 text-sm">3-month minimum</p>
                </div>
                <p class="text-crimson-500 text-sm font-semibold uppercase tracking-wide mb-3 text-center">Fractional CTO/CISO</p>
                <p class="text-stone-500 text-sm leading-relaxed mb-6">
                    I join your leadership team part-time. Strategy, vendor calls, team building, incident response, board prep &mdash; the CTO or CISO work without the $250K+ salary.
                </p>
                <ul class="space-y-3 text-stone-600 text-sm mt-auto">
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>10 hours/week embedded with your team</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Staff meetings, vendor calls, board prep</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Governance design + security program buildout</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Roadmap execution and vendor negotiation</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-crimson-200">
                    <p class="text-stone-500 text-xs font-mono uppercase tracking-wider mb-2">Outcome</p>
                    <p class="text-stone-600 text-sm italic">Vendor calls where you ask the right questions. Decisions backed by evidence, not hope.</p>
                </div>
            </div>

            {{-- Echo --}}
            <div class="pricing-card group bg-white shadow-md border border-stone-200 hover:border-crimson-500 rounded-xl p-8 transition-all duration-300 flex flex-col fade-up-init stagger-3"
                 :class="shown && 'fade-up-active'">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-crimson-50 group-hover:bg-crimson-100 rounded-2xl mb-5 transition-colors duration-300">
                        <svg class="h-8 w-8 text-crimson-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12h4l2-5 4 10 2-5h8" />
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-stone-950 mb-1">Echo</h3>
                    <p class="text-crimson-500 text-lg font-semibold mb-1">$3,000/mo</p>
                    <p class="text-stone-500 text-sm">6-month commitment</p>
                </div>
                <p class="text-crimson-500 text-sm font-semibold uppercase tracking-wide mb-3 text-center">Ongoing Advisory</p>
                <p class="text-stone-500 text-sm leading-relaxed mb-6">
                    For clients who've finished a Signal engagement. Monthly counsel, quarterly reviews, escalation support. Momentum without full-time cost.
                </p>
                <ul class="space-y-3 text-stone-600 text-sm mt-auto">
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Monthly check-ins + quarterly strategic reviews</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>On-call for key decisions and vendor evaluations</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-crimson-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Governance oversight and course corrections</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-stone-200">
                    <p class="text-stone-500 text-xs font-mono uppercase tracking-wider mb-2">Outcome</p>
                    <p class="text-stone-600 text-sm italic">Momentum without the full-time salary. A runbook that works at 3 AM and in the boardroom.</p>
                </div>
            </div>
        </div>

        {{-- Below tiers note --}}
        <p class="text-center text-stone-500 text-sm max-w-xl mx-auto fade-up-init" :class="shown && 'fade-up-active'" style="transition-delay: 0.4s;">
            Not sure which tier? Most clients start with Tune. It's designed to give you clarity before you commit to anything else.
        </p>
    </div>
</section>

{{-- ==================== ACT 4: NEXT STEP ==================== --}}

{{-- Red-line divider --}}
<div class="flex justify-center py-2 bg-stone-100">
    <img src="/assets/img/red-line.png" alt="" class="w-96 opacity-80" role="presentation">
</div>

{{-- Section 8: Signal Score CTA (dark) --}}
<section id="assessment" class="py-20 lg:py-28 bg-echo-950"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Free Assessment</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-6">
                Not ready for a call? Start here.
            </h2>
            <p class="text-lg text-echo-300 mb-10 leading-relaxed">
                15-minute self-assessment. 8 categories. Instant A&ndash;F grade. No email required.
            </p>
            <a href="/assessment"
               class="inline-flex items-center justify-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:shadow-glow-lg hover:scale-[1.02] active:scale-[0.98] group">
                <span>Take the Signal Score Assessment</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- Section 9: Newsletter (dark) --}}
<section class="py-20 lg:py-28 bg-echo-950"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center fade-up-init" :class="shown && 'fade-up-active'">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Weekly Newsletter</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-4">
                Signal vs. Noise
            </h2>
            <p class="text-lg text-echo-300 mb-8">
                Cutting through the chaos of cybersecurity and technology &mdash; so you can lead with clarity. One email per week. No fluff, no vendor hype, no fear-mongering.
            </p>

            {{-- Beehiiv embed --}}
            <div class="max-w-lg mx-auto">
                <script async src="https://subscribe-forms.beehiiv.com/embed.js"></script>
                <iframe src="https://subscribe-forms.beehiiv.com/b961a68a-112f-4a22-984f-1ffef0ae248c"
                        class="beehiiv-embed"
                        data-test-id="beehiiv-embed"
                        frameborder="0"
                        scrolling="no"
                        style="width: 100%; height: 50px; margin: 0; border-radius: 0px; background-color: transparent; box-shadow: none; max-width: 100%;"></iframe>
            </div>
            <p class="mt-4 text-sm text-echo-400">
                <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer" class="text-echo-300 hover:text-crimson-500 transition-colors duration-300">
                    Browse past issues &rarr;
                </a>
            </p>
        </div>
    </div>
</section>

{{-- Section 10: Footer CTA (dark) --}}
<section id="contact" class="py-20 lg:py-28 bg-echo-950"
         x-data="{ shown: false }" x-intersect.once.threshold.20="shown = true">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="footer-cta-card relative border border-crimson-700/40 rounded-2xl p-12 lg:p-16 overflow-hidden fade-up-init"
             :class="shown && 'fade-up-active'">
            {{-- Decorative blobs --}}
            <div class="absolute -top-16 -right-16 w-56 h-56 bg-crimson-700/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 -left-12 w-40 h-40 bg-crimson-800/20 rounded-full blur-3xl"></div>
            {{-- Subtle grid pattern --}}
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgb(153 0 0) 1px, transparent 1px); background-size: 24px 24px;"></div>

            <div class="relative max-w-2xl mx-auto text-center">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-4">
                    Ready to turn complexity into clarity?
                </h2>
                <p class="text-lg text-echo-300 mb-8">
                    30 minutes. No pitch &mdash; just honest questions and straight answers.
                </p>
                <a href="/contact"
                   class="inline-flex items-center justify-center gap-2 bg-white hover:bg-stone-100 text-echo-950 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl group">
                    <span>Let's Talk</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <p class="mt-6 text-echo-400 italic text-sm">Echo Cyber Consulting &mdash; Translating geek into human.</p>
            </div>
        </div>
    </div>
</section>

@endsection
