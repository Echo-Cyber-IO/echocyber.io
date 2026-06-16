---
title: Contact
description: Get in touch to discuss your technology and security leadership needs. Let's have a conversation about how I can help.
---
@extends('_layouts.main')

@section('body')

{{-- ==================== HERO ==================== --}}
<section class="relative pt-16 pb-8 lg:pt-20 lg:pb-10 overflow-hidden">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-900/40 to-transparent blur-3xl -skew-x-12 pointer-events-none"></div>

    <div class="relative mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="flex items-center justify-center gap-3">
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Get in touch</span>
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        </div>

        <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
            Let's <span class="text-crimson-500">talk.</span>
        </h1>

        <p class="mx-auto mt-6 max-w-xl text-lg text-pretty text-echo-300 sm:text-xl/8">
            A specific challenge? An exploratory conversation?
            <span class="block mt-2 font-semibold text-white">Either path works.</span>
        </p>
    </div>
</section>

{{-- ==================== TWO-PATH BENTO ==================== --}}
<section class="pb-12 lg:pb-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-2 lg:items-stretch">

            {{-- Path 1: Send a message (form tile) --}}
            <div class="flex flex-col overflow-hidden rounded-3xl bg-echo-900/60 ring-1 ring-echo-700/40">
                <div class="border-b border-echo-800/60 bg-echo-950/40 px-8 py-6">
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Path 1 &middot; Write it out</p>
                    <h2 class="mt-1.5 font-display text-2xl font-bold tracking-tight text-white">
                        Send a <span class="text-crimson-400">message</span>
                    </h2>
                </div>

                <div class="flex-1 p-8 lg:p-10">
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
                        class="h-full flex flex-col"
                    >
                        {{-- Success State --}}
                        <div x-show="submitted" x-cloak class="flex-1 flex flex-col items-center justify-center text-center py-12">
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
                            {{-- Honeypot --}}
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

                            {{-- Error --}}
                            <div x-show="error" x-cloak class="bg-red-500/10 border border-red-500/30 rounded-lg p-4">
                                <p class="text-red-400 text-sm">Something went wrong. Please try again or email me directly at <a href="mailto:info@echocyber.io" class="underline">info@echocyber.io</a></p>
                            </div>

                            {{-- Submit --}}
                            <button
                                type="submit"
                                :disabled="submitting"
                                class="w-full px-6 py-4 bg-crimson-700 hover:bg-crimson-600 disabled:bg-crimson-800 disabled:cursor-not-allowed text-white font-semibold rounded-lg transition-all hover:shadow-glow flex items-center justify-center gap-2"
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
                        </div>
                    </form>
                </div>
            </div>

            {{-- Path 2: Book a session (featured tile) --}}
            <div class="relative isolate flex flex-col overflow-hidden rounded-3xl bg-echo-900 ring-1 ring-crimson-700/40 shadow-xl shadow-crimson-950/30">
                {{-- Ambient crimson glow --}}
                <div aria-hidden="true" class="absolute -top-32 -right-32 w-[400px] h-[400px] bg-gradient-to-br from-crimson-700/30 to-transparent blur-3xl pointer-events-none"></div>
                <div aria-hidden="true" class="absolute -bottom-40 -left-20 w-[350px] h-[350px] bg-gradient-to-tr from-crimson-900/20 to-transparent blur-3xl pointer-events-none"></div>

                <div class="relative border-b border-crimson-800/40 bg-echo-950/40 px-8 py-6">
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-400">Path 2 &middot; Skip the form</p>
                    <h2 class="mt-1.5 font-display text-2xl font-bold tracking-tight text-white">
                        Book a <span class="text-crimson-400">session</span>
                    </h2>
                </div>

                <div class="relative flex flex-1 flex-col p-8 lg:p-10">
                    <div class="flex items-center gap-4">
                        <div class="flex-none inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-crimson-900/40 ring-1 ring-crimson-700/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-crimson-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="font-display text-xl font-semibold text-white">
                            Grab 30 minutes on my calendar.
                        </p>
                    </div>
                    <p class="mt-3 text-base leading-7 text-echo-300">
                        Direct with me &mdash; no pitch, no prep required. Honest questions, straight answers. If it's not a fit, I'll tell you.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="rounded-md bg-echo-950/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">30 min</span>
                        <span class="rounded-md bg-echo-950/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">No cost</span>
                        <span class="rounded-md bg-echo-950/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">No prep</span>
                        <span class="rounded-md bg-echo-950/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">No pitch</span>
                    </div>

                    {{-- What we'll cover (fills card to match form density) --}}
                    <div class="mt-8 rounded-2xl bg-echo-950/40 p-5 ring-1 ring-echo-800/60">
                        <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">What we'll cover</p>
                        <ul class="mt-4 space-y-3 text-sm text-echo-300">
                            <li class="flex gap-x-3">
                                <svg class="h-5 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                                Where your business is today &mdash; team, tech, what's keeping you up at night
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-5 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                                Whether there's a fit &mdash; and how that might look
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-5 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                                One or two things you can act on either way
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1"></div>

                    <a href="/schedule" class="mt-8 w-full inline-flex items-center justify-center gap-2 px-6 py-4 bg-crimson-700 hover:bg-crimson-600 text-white font-semibold rounded-lg transition-all hover:shadow-glow">
                        Grab 30 Minutes
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>

        </div>

        {{-- ==================== INFO STRIP (3 tiles) ==================== --}}
        <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            <div class="rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 px-6 py-5 transition-all hover:ring-echo-600">
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Expect</p>
                <p class="mt-6 text-sm leading-7 text-echo-300">
                    No-pressure conversation &mdash; we figure out fit. If it's not, <span class="text-white font-medium">I'll tell you.</span>
                </p>
            </div>

            <div class="rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 px-6 py-5 transition-all hover:ring-echo-600">
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Response</p>
                <p class="mt-6 text-sm leading-6 text-echo-300">
                    Within <span class="text-white font-medium">24 hours</span> on business days.<br>
                    For urgent matters, mention it in your message.
                </p>
            </div>

            <div class="rounded-2xl bg-echo-900/60 ring-1 ring-echo-700/40 px-6 py-5 transition-all hover:ring-crimson-700/40 sm:col-span-2 lg:col-span-1">
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Direct contact</p>
                <p class="mt-6 text-sm leading-6 text-echo-300">
                    Email &mdash; <a href="mailto:info@echocyber.io" class="font-medium text-white hover:text-crimson-400 transition-colors">info@echocyber.io</a><br>
                    Call &mdash; <a href="tel:+19194300720" class="font-medium text-white hover:text-crimson-400 transition-colors">(919) 430-0720</a><br>
                    Based in Raleigh, <span class="text-white font-medium">NC</span> &middot; EST
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
