---
title: Strategy Session
description: Book a free strategy session with Mike Faas to discuss your business, technology, and security.
---
@extends('_layouts.main')

@section('body')
    <section class="pt-4 pb-16 lg:pt-6 lg:pb-24">
        <div class="mx-auto max-w-7xl px-4">
            {{-- Calendar Widget --}}
            <iframe src="https://apicrm.ctox.com/widget/booking/KjGTZUQdoqLZpU5NtmNL"
                style="width: 100%; min-height: 800px; border: none; overflow: hidden;" scrolling="no"
                id="KjGTZUQdoqLZpU5NtmNL_1774582373290"
                allow="payment"></iframe>
            <script src="https://apicrm.ctox.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-16 lg:py-24 bg-echo-900/50">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-5">
                    <h2 class="text-2xl font-bold leading-10 tracking-tight text-echo-100">Frequently asked
                        questions</h2>
                    <p class="mt-4 text-base leading-7 text-echo-400">Can't find the answer you're looking for?
                        <a href="/contact"
                            class="font-semibold text-crimson-500 hover:text-crimson-400">Get in touch</a>.</p>
                </div>
                <div class="mt-10 lg:col-span-7 lg:mt-0">
                    <dl class="space-y-10">
                        <div>
                            <dt class="text-base font-semibold leading-7 text-echo-100">What will we cover in the
                                strategy session?</dt>
                            <dd class="mt-2 text-base leading-7 text-echo-400">You'll talk directly with me about where your business is today &mdash; your team size, how you use technology, and what's keeping you up at night. This isn't a deep-dive audit. It's a conversation to figure out if there's a fit. If there is, we'll talk about what comes next. If there isn't, you'll still walk away with something useful.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-echo-100">Is there a cost for this
                                initial session?</dt>
                            <dd class="mt-2 text-base leading-7 text-echo-400">No. Zero. This is a conversation, not a sales pitch.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-echo-100">Who will I be meeting with?</dt>
                            <dd class="mt-2 text-base leading-7 text-echo-400">Me &mdash; Mike Faas. I'm a fractional CTO and CISO who helps founder-led businesses make sense of technology and security without the overhead of a full-time executive. I've led security programs for companies like Carhartt, Bose, and Black Rifle Coffee Company.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-echo-100">What should I prepare for
                                the meeting?</dt>
                            <dd class="mt-2 text-base leading-7 text-echo-400">Nothing formal. Know your business, know what's bugging you. That's enough.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
@stop
