---
title: Home
description: Home page
---
@extends('_layouts.main')

@section('body')

    <!-- Hero section -->
    <div class="relative isolate overflow-hidden">
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
        <div class="mx-auto max-w-7xl px-6 pb-16 pt-10 lg:flex lg:px-8 lg:pt-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                {{-- <div class="mt-24 sm:mt-32 lg:mt-16">
                            <a href="#" class="inline-flex space-x-6">
                                <span
                                    class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-400 ring-1 ring-inset ring-indigo-500/20">Latest
                                    updates</span>
                                <span
                                    class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-300">
                                    <span>Just shipped v1.0</span>
                                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </a>
                        </div> --}}
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-5xl">Unlock Your Business's
                    Security Potential Today
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">At Echo Cyber, we provide comprehensive managed
                    security services and vCISO expertise to protect your business from cyber threats. Our team of
                    experts will assess your cyber risk and deliver clarity, so you can focus on what you do best.

                </p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="/schedule"
                        class="rounded-md bg-crimson-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-crimson-700 hover:text-white transition transform hover:-translate-y-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-400">
                        Schedule Strategy Session <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="../assets/img/cyber-lock.jpeg" alt="Cyber Lock" class="w-[32rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div>
        </div>
    </div>

    <!-- Custom HR -->
    <div class="flex items-center">
        <div class=" h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
    </div>
    <div class="flex items-center mt-2">
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-gray-700 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-gray-700 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
    </div>

    <div class="mx-auto max-w-7xl px-6 py-16 lg:flex lg:justify-between lg:px-8">
        <div class="max-w-xl">
            <h2 class="text-4xl font-bold tracking-tight text-gray-200">Simplifying Complex Security Challenges:
                Decoding Cyber Risk with Echo Cyber</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">At Echo Cyber, we understand the complexity and
                ever-evolving nature of cyber risk in today's interconnected world. Our comprehensive suite of
                managed security services is designed to address the unique challenges faced by small and
                medium-sized businesses, offering them the expertise, guidance, and support necessary to proactively
                manage and mitigate potential cyber threats.</p>
        </div>
        <div class="mt-10 w-full max-w-md">
            <img class="rounded-lg shadow-md max-w-lg" src="../assets/img/hacker.jpg" alt="">
        </div>
    </div>

    <!-- Custom HR -->
    <div class="flex items-center">
        <div class=" h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
    </div>
    <div class="flex items-center mt-2">
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-gray-700 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-gray-700 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
    </div>

    <!-- Logo cloud -- NO LOGOS YET... -->
    {{-- <div class="mx-auto mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-white">The world’s most innovative companies use
                    our app</h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor"
                        width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158"
                        height="48">
                    <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                        src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158"
                        height="48">
                </div>
            </div> --}}

    <!-- Feature Section -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8 my-16">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Expert Cybersecurtiy Services for
                your
                Business</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">Our vCISO and Cyber Risk assessment services provide
                comprehensive protection and insights to small and medium sized businesses.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-white">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        Comprehensive Cyber Risk Assessments
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                        <p class="flex-auto">We conduct a thorough assessment of your business's cyber risks and
                            vulnerabilities in order to develop customized security solutions that are specifically
                            designed to address your company's unique needs and challenges.
                        </p>
                        {{-- <p class="mt-6">
                            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more
                                <span aria-hidden="true">→</span></a>
                        </p> --}}
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-white">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        Proactive Threat Monitoring and Response
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                        <p class="flex-auto">Our dedicated team of expert analysts works around the clock, 24 hours
                            a
                            day, 7 days a week, to carefully monitor your systems in order to swiftly and
                            effectively
                            detect and respond to any potential threats that may arise.
                        </p>
                        {{-- <p class="mt-6">
                            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more
                                <span aria-hidden="true">→</span></a>
                        </p> --}}
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-white">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-crimson-700">
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>
                        Strategic Security Planning and Consulting
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                        <p class="flex-auto">We provide expert guidance to help you develop, implement, and
                            maintain
                            effective cybersecurity strategies that are tailored to your specific business needs.
                            Our
                            team of experienced professionals is committed to assisting you every step of the way,
                            ensuring that your cybersecurity measures are robust and up-to-date in the ever-evolving
                            digital landscape.
                        </p>
                        {{-- <p class="mt-6">
                            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more
                                <span aria-hidden="true">→</span></a>
                        </p> --}}
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- Custom HR -->
    <div class="flex items-center">
        <div class=" h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
    </div>
    <div class="flex items-center mt-2">
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-gray-700 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-gray-700 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
    </div>

    {{-- Benefits Section --}}
    <div class="mx-auto max-w-7xl py-16">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                {{-- <h2 class="text-base font-semibold leading-7 text-indigo-600">Benefits</h2> --}}
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl">Unlock the Benefits
                    of
                    Managed Security Services for Your Business
                </p>
                <p class="mt-6 text-base leading-7 text-gray-300">At Echo Cyber, we provide a comprehensive
                    suite of
                    managed security services that offer numerous advantages to your business. With our
                    expertise and
                    advanced technologies, you can enjoy cost savings, enhanced security posture, and peace of
                    mind.

                </p>
            </div>
            <dl class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:gap-y-16">
                <div class="relative pl-9">
                    <dt class="font-semibold text-gray-200">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Expanded Security Expertise
                    </dt>
                    <dd class="mt-2">Get instant access to a team of specialized security professionals who
                        become an
                        extension of your own IT staff. MSSPs have extensive experience across technologies to
                        cover all
                        your security needs.

                    </dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-gray-200">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        24/7 Threat Monitoring
                    </dt>
                    <dd class="mt-2">MSSPs provide around-the-clock monitoring of networks, systems, and data
                        to
                        rapidly detect potential threats. This enables a much quicker response time to minimize
                        impact
                        of any incidents.


                    </dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-gray-200">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Improved Risk Management
                    </dt>
                    <dd class="mt-2">MSSPs regularly audit, assess, and test systems to identify
                        vulnerabilities and
                        recommend risk mitigation steps tailored to your organization. This results in better
                        visibility
                        and control over security risks.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-gray-200">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Increased Operational Efficiency
                    </dt>
                    <dd class="mt-2">By delegating day-to-day security tasks to an MSSP, your own IT team can
                        focus
                        on core business objectives. The MSSP takes care of workflows like alert triaging,
                        reporting,
                        and maintenance.

                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- Custom HR -->
    <div class="flex items-center">
        <div class=" h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
    </div>
    <div class="flex items-center mt-2">
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-gray-700 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-gray-700 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
    </div>

    <!-- Stats Section -->
    <div class="relative my-16">
        <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
            <img class="h-48 w-full bg-gray-50 object-cover lg:h-full" src="../assets/img/map.jpg" alt="">
            <div class="px-6 pb-24 pt-16 sm:pb-8 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-8">
                <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                    <h2 class="text-base font-semibold leading-8 text-gray-300">Industry statistics</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl">Discover the
                        Alarming
                        Statistics of Cybersecurity Risks for Small and Medium-Sized Businesses</p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">With cyber threats on the rise, it is
                        crucial
                        for small
                        and medium-sized businesses to prioritize their cybersecurity measures. Protect your
                        sensitive data
                        and safeguard your operations with Echo Cyber's comprehensive managed security services.

                    </p>
                    <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
                        <div class="flex flex-col gap-y-3 border-l border-gray-300/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-300">of SMBs were targets of cyberattck in
                                2021
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-200">61%
                            </dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-200/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-300">of small businesses have customer data
                                that
                                could
                                be
                                compromised in an attack.
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-200">87%
                            </dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-200/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-300">in damages from over 700,000 attacks
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-200">$2.8
                                Billion</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-200/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-300">of SMBs could not continue to operate
                                if
                                hit by
                                ransomware
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-200">75%
                            </dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-200/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-300">of SMBs with no cybersecurity measures
                                in
                                place
                                believe their business is too small to be attacked.
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-200">60%
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom HR -->
    <div class="flex items-center">
        <div class=" h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-crimson-900 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-crimson-900 flex-1"></div> <!-- Line -->
    </div>
    <div class="flex items-center mt-2">
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
        <div class="h-2 w-2 bg-gray-700 rounded-full mr-4"></div> <!-- Circle -->
        <div class="h-2 w-2 bg-gray-700 rounded-full"></div> <!-- Circle -->
        <div class="h-0.5 bg-gray-700 flex-1"></div> <!-- Line -->
    </div>

    <!-- CTA section -->
    <div class="relative isolate mt-16 px-6 py-16 lg:px-8">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="1d4240dd-898f-445f-932d-e2872fd12de3" width="200" height="200" x="50%" y="0" patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="0" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1d4240dd-898f-445f-932d-e2872fd12de3)" />
        </svg>
        {{-- <div class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-auto blur-3xl" aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div> --}}
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Unlock Your Cyber Security
                Potential
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Protect your business with our
                expert vCISO services and comprehensive Cyber Risk assessments.

            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/schedule"
                    class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-300 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                    started</a>
                <a href="/contact" class="text-sm font-semibold leading-6 text-white hover:text-gray-200">Learn more <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
    </main>

@stop
