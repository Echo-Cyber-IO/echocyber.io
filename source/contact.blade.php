---
title: Contact
description: Get in touch to discuss your technology and security leadership needs. Let's have a conversation about how I can help.
---
@extends('_layouts.main')

@section('body')

<section class="relative py-24 lg:py-32">
    {{-- Subtle gradient accent --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-crimson-900/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-crimson-900/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 lg:items-start gap-16">
            {{-- Content --}}
            <div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Get in touch</span>
                </div>
                <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
                    Let's <span class="text-crimson-500">talk.</span>
                </h1>
                <p class="mt-6 text-lg text-pretty text-echo-300 sm:text-xl/8">
                    Whether you have a specific challenge in mind or just want to explore how fractional leadership might work for your business, I'm happy to have a conversation.
                </p>

                <div class="mt-10 space-y-4">

                    {{-- What to expect --}}
                    <div class="overflow-hidden rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                        <div class="border-b border-echo-800/60 bg-echo-950/40 px-6 py-4">
                            <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">The conversation</p>
                            <h3 class="mt-1.5 font-display text-xl font-bold tracking-tight text-white">
                                What to <span class="text-crimson-400">expect</span>
                            </h3>
                        </div>
                        <p class="px-6 py-5 text-sm leading-6 text-echo-300">
                            Straightforward and no-pressure. We'll talk about where you are, where you want to go, and whether I can help get you there. If it's not a fit, I'll tell you.
                        </p>
                    </div>

                    {{-- Response time --}}
                    <div class="overflow-hidden rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 transition-all hover:ring-echo-600">
                        <div class="border-b border-echo-800/60 bg-echo-950/40 px-6 py-4">
                            <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Response</p>
                            <h3 class="mt-1.5 font-display text-xl font-bold tracking-tight text-white">
                                Within <span class="text-crimson-400">24 hours.</span>
                            </h3>
                        </div>
                        <p class="px-6 py-5 text-sm leading-6 text-echo-300">
                            On business days. For urgent matters, mention it in your message.
                        </p>
                    </div>

                    {{-- Book directly (featured CTA panel) --}}
                    <div class="relative isolate overflow-hidden rounded-2xl bg-echo-900 p-6 ring-1 ring-crimson-700/40 shadow-xl shadow-crimson-950/30">
                        <div aria-hidden="true" class="absolute -top-20 -right-20 w-64 h-64 bg-gradient-to-br from-crimson-700/30 to-transparent blur-3xl pointer-events-none"></div>
                        <div class="relative">
                            <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-400">Skip the form</p>
                            <h3 class="mt-1.5 font-display text-xl font-bold tracking-tight text-white">
                                Prefer to just <span class="text-crimson-400">book?</span>
                            </h3>
                            <p class="mt-3 text-sm leading-6 text-echo-300">
                                Grab a 30-minute strategy session directly on my calendar.
                            </p>
                            <a href="/schedule" class="mt-5 w-full inline-flex items-center justify-center gap-2 px-5 py-3 bg-crimson-700 hover:bg-crimson-600 text-white font-semibold rounded-lg transition-all hover:shadow-glow">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Schedule a Strategy Session
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Contact Form --}}
            <div class="bg-echo-900/50 border border-echo-700 rounded-2xl p-6 lg:p-8">
                <form
                    x-data="{
                        submitting: false,
                        submitted: false,
                        error: false,
                        _loadedAt: Date.now(),
                        formData: {
                            firstName: '',
                            lastName: '',
                            email: '',
                            company: '',
                            phone: '',
                            website: '',
                            message: ''
                        },
                        async submit() {
                            this.submitting = true;
                            this.error = false;

                            try {
                                const response = await fetch('/.netlify/functions/contact', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify({
                                        first_name: this.formData.firstName,
                                        last_name: this.formData.lastName,
                                        email: this.formData.email,
                                        company_name: this.formData.company,
                                        phone: this.formData.phone,
                                        website: this.formData.website,
                                        message: this.formData.message,
                                        _form_loaded: String(this._loadedAt),
                                        _form_submitted: String(Date.now()),
                                        source: 'echocyber.io'
                                    })
                                });

                                if (response.ok) {
                                    this.submitted = true;
                                } else {
                                    this.error = true;
                                }
                            } catch (e) {
                                this.error = true;
                            }

                            this.submitting = false;
                        }
                    }"
                    @submit.prevent="submit"
                    class="space-y-6"
                >
                    {{-- Success State --}}
                    <div x-show="submitted" x-cloak class="text-center py-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-500/20 mb-6">
                            <svg class="w-8 h-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-2">Message sent!</h3>
                        <p class="text-echo-400">I'll get back to you within 24 hours.</p>
                    </div>

                    {{-- Form Fields --}}
                    <div x-show="!submitted" class="space-y-6">
                        {{-- Honeypot — hidden from humans, bots fill it --}}
                        <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" x-model="formData.website" tabindex="-1" autocomplete="off">
                        </div>

                        {{-- Name Row --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-echo-300 mb-2">First Name *</label>
                                <input
                                    type="text"
                                    id="firstName"
                                    x-model="formData.firstName"
                                    required
                                    class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all"
                                    placeholder="First name"
                                >
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-echo-300 mb-2">Last Name *</label>
                                <input
                                    type="text"
                                    id="lastName"
                                    x-model="formData.lastName"
                                    required
                                    class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all"
                                    placeholder="Last name"
                                >
                            </div>
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-echo-300 mb-2">Email *</label>
                            <input
                                type="email"
                                id="email"
                                x-model="formData.email"
                                required
                                class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all"
                                placeholder="you@company.com"
                            >
                        </div>

                        {{-- Company & Phone Row --}}
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="company" class="block text-sm font-medium text-echo-300 mb-2">Company</label>
                                <input
                                    type="text"
                                    id="company"
                                    x-model="formData.company"
                                    class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all"
                                    placeholder="Your company"
                                >
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-echo-300 mb-2">Phone</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    x-model="formData.phone"
                                    class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all"
                                    placeholder="(555) 123-4567"
                                >
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-medium text-echo-300 mb-2">How can I help? *</label>
                            <textarea
                                id="message"
                                x-model="formData.message"
                                required
                                rows="5"
                                class="w-full px-4 py-3 bg-echo-800/50 border border-echo-600 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:ring-2 focus:ring-crimson-500 focus:border-transparent transition-all resize-none"
                                placeholder="Tell me about your situation, challenges, or questions..."
                            ></textarea>
                        </div>

                        {{-- Error Message --}}
                        <div x-show="error" x-cloak class="bg-red-500/10 border border-red-500/30 rounded-lg p-4">
                            <p class="text-red-400 text-sm">Something went wrong. Please try again or email me directly at <a href="mailto:info@echocyber.io" class="underline">info@echocyber.io</a></p>
                        </div>

                        {{-- Submit Button --}}
                        <button
                            type="submit"
                            :disabled="submitting"
                            class="w-full px-6 py-4 bg-crimson-600 hover:bg-crimson-500 disabled:bg-crimson-800 disabled:cursor-not-allowed text-white font-semibold rounded-lg transition-colors flex items-center justify-center gap-2"
                        >
                            <span x-show="!submitting">Send Message</span>
                            <span x-show="submitting" class="flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>

                        <p class="text-echo-500 text-sm text-center">
                            I'll respond within 24 hours on business days.
                        </p>
                    </div>
                </form>
            </div>
        </div>

        {{-- Direct contact — full width, three columns --}}
        <div class="mt-16 grid md:grid-cols-3 gap-4">
            <div class="overflow-hidden rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 transition-all hover:ring-crimson-700/40">
                <div class="border-b border-echo-800/60 bg-echo-950/40 px-6 py-4">
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Email</p>
                </div>
                <a href="mailto:info@echocyber.io" class="block px-6 py-5 font-display text-lg font-semibold text-white hover:text-crimson-400 transition-colors">
                    info@echocyber.io
                </a>
            </div>

            <div class="overflow-hidden rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 transition-all hover:ring-crimson-700/40">
                <div class="border-b border-echo-800/60 bg-echo-950/40 px-6 py-4">
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Phone</p>
                </div>
                <a href="tel:+19194300720" class="block px-6 py-5 font-display text-lg font-semibold text-white hover:text-crimson-400 transition-colors">
                    (919) 430-0720
                </a>
            </div>

            <div class="overflow-hidden rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40">
                <div class="border-b border-echo-800/60 bg-echo-950/40 px-6 py-4">
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Location</p>
                </div>
                <p class="px-6 py-5 font-display text-lg font-semibold text-white">
                    Wake Forest, <span class="text-crimson-400">NC</span>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
