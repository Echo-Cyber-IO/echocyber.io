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
        <div class="grid lg:grid-cols-2 gap-16">
            {{-- Content --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                    <span class="text-xs font-mono text-crimson-500 uppercase tracking-wider">Get In Touch</span>
                </div>
                <h1 class="font-display text-4xl sm:text-5xl font-bold text-white mb-6">
                    Let's talk.
                </h1>
                <p class="text-xl text-echo-300 leading-relaxed mb-8">
                    Whether you have a specific challenge in mind or just want to explore how fractional leadership might work for your business, I'm happy to have a conversation.
                </p>

                <div class="space-y-8 mb-12">
                    <div>
                        <h3 class="font-display text-lg font-bold text-white mb-2">What to expect</h3>
                        <p class="text-echo-400">
                            A straightforward, no-pressure conversation. We'll talk about where you are, where you want to go, and whether I can help get you there. If it's not a fit, I'll tell you.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-display text-lg font-bold text-white mb-2">Response time</h3>
                        <p class="text-echo-400">
                            I typically respond within 24 hours on business days. For urgent matters, mention it in your message.
                        </p>
                    </div>
                </div>

                {{-- Direct contact info --}}
                <div class="bg-echo-800/30 border border-echo-700 rounded-xl p-6 space-y-4">
                    <h3 class="font-display text-lg font-bold text-white mb-4">Direct contact</h3>

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-echo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@echocyber.com" class="text-crimson-500 hover:text-crimson-400 transition-colors">
                            info@echocyber.com
                        </a>
                    </div>

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-echo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+19194300720" class="text-echo-300 hover:text-white transition-colors">
                            (919) 430-0720
                        </a>
                    </div>

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-echo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-echo-400">Wake Forest, NC</span>
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
                        formData: {
                            firstName: '',
                            lastName: '',
                            email: '',
                            company: '',
                            phone: '',
                            message: ''
                        },
                        async submit() {
                            this.submitting = true;
                            this.error = false;

                            try {
                                const response = await fetch('https://services.leadconnectorhq.com/hooks/LTsOV0bzU0aByRBneCoy/webhook-trigger/cac4af7b-574e-4b21-82a4-1754bb95e4c3', {
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
                                        message: this.formData.message,
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
                            <p class="text-red-400 text-sm">Something went wrong. Please try again or email me directly at <a href="mailto:info@echocyber.com" class="underline">info@echocyber.com</a></p>
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
    </div>
</section>

@endsection
