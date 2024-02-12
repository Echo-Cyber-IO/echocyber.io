---
title: CSRA
description: Describes Cybersecurity Risk Assessment service.
---
@extends('_layouts.main')

<!-- TODO: Pickup here. Use copy created by Claude. Figure out layout....ugh. -->

@section('body')
    <div class="relative isolate overflow-hidden bg-gray-900">
        <div class="bg-gray-900 pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
            <div class="relative isolate mx-auto max-w-3xl lg:max-w-7xl">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                        <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
                </svg>
                <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
                <div class="mx-auto max-w-6xl text-base leading-7 text-gray-100">
                    {{-- <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-100">Echo Cyber</h1> --}}
                    <p class="mt-6 text-xl leading-8">
                        At Echo Cyber, our mission is translating "geek speak" into clear guidance that empowers businesses to
                        improve their security. We were founded by Michael Faas, an experienced cybersecurity leader who saw a
                        need for a more human approach to protecting organizations.
                    </p>
                    <p class="mt-6 text-xl leading-8">
                        After spending years assisting companies in strengthening their defenses, Michael Faas knew that
                        starting
                        with a comprehensive risk assessment provided the necessary baseline to architect effective security
                        programs tailored to each client’s unique needs. We don’t make assumptions – we start by listening and
                        mapping out vulnerabilities to illuminate the best path forward.
                    </p>

                    <p class="mt-6 text-xl leading-8">
                        Our services include:

                    <ul class="mt-8 max-w-xl space-y-4">
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-200">Cybersecurity Risk Assessments</strong>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-200">Managed Security Services</strong>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-200">Virtual CISO Advisory</strong>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-crimson-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-200">Custom Security Projects</strong>
                        </li>
                    </ul>
                    </p>

                    <p class="mt-6 text-xl leading-8">
                        We primarily serve small to mid-size businesses across a wide range of industries. Our clients trust us
                        because we’ve been in the trenches and have a proven track record of distilling complex technical
                        concepts into understandable and actionable strategies.
                    </p>
                    <p class="mt-6 text-xl leading-8">
                        Radical transparency and an idea meritocracy are at the core of how we operate. We tell it like it is
                        and invite open conversations focused purely on the best security outcomes.
                    </p>
                    <p class="mt-6 text-xl leading-8">
                        Let us know if you would like us to help strengthen your company’s defenses. We’re here to listen and
                        turn cybersecurity into clear, human-friendly guidance.
                    </p>
                    </p>
                </div>
            </div>
            {{-- <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                        alt="App screenshot" width="2432" height="1442"
                        class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div> --}}
        </div>
    </div>

@stop
