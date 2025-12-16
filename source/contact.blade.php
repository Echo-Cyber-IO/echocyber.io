---
title: Contact
description: Get in touch to discuss your technology and security leadership needs. Let's have a conversation about how I can help.
---
@extends('_layouts.main')

@section('body')

<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            {{-- Content --}}
            <div>
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
                        <a href="mailto:info@echocyber.io" class="text-crimson-400 hover:text-crimson-300 transition-colors">
                            info@echocyber.io
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

            {{-- Contact Form (Wisetrack CRM) --}}
            <div class="bg-echo-900/50 border border-echo-700 rounded-2xl p-2 lg:p-4 min-h-[700px]">
                <iframe src="https://link.wisetrackcrm.com/widget/form/oe160e3F8IYMF7bOmt9P"
                    style="width:100%;height:100%;min-height:680px;border:none;border-radius:8px"
                    id="inline-oe160e3F8IYMF7bOmt9P"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Website Inbound"
                    data-height="680"
                    data-layout-iframe-id="inline-oe160e3F8IYMF7bOmt9P"
                    data-form-id="oe160e3F8IYMF7bOmt9P"
                    title="Contact Form">
                </iframe>
                <script src="https://link.wisetrackcrm.com/js/form_embed.js"></script>
            </div>
        </div>
    </div>
</section>

@endsection
