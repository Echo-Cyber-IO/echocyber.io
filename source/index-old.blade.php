---
title: Home
description: Home page
---
@extends('_layouts.main')

@section('body')
    <div class="relative">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                    viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="0,0 90,0 50,100 0,100" />
                </svg>

                <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                        <img src="assets/img/Echo-Cyber-Horiz.png" alt="">
                        {{-- <div class="hidden sm:mb-10 sm:flex">
                                <div
                                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                    Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#"
                                        class="whitespace-nowrap font-semibold text-indigo-600"><span
                                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                            aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div> --}}
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900">Unlock Your Business's
                            Security Potential Today</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">At Echo Cyber, we provide comprehensive managed
                            security services and vCISO expertise to protect
                            your business from cyber threats. Our team of experts will assess your cyber risk and deliver
                            clarity, so you can focus on what you do best.</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-crimson px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-crimson-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Schedule a Strategy Call <i class="fa-solid fa-arrow-right"></i></a>
                            {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more
                                    <span aria-hidden="true">→</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="assets/img/cyber-lock.jpeg"
                alt="">
        </div>
    </div>

    <div class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:flex lg:justify-between lg:px-8">
            <div class="max-w-xl">
                <h2 class="text-4xl font-bold tracking-tight text-gray-200">Simplifying Complex Security Challenges:
                    Decoding Cyber Risk with Echo Cyber</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">At Echo Cyber, we understand the complexity of cyber risk.
                    Our managed security services provide small and medium-sized businesses with the expertise and support
                    they need to stay protected.</p>
            </div>
            <div class="mt-10 w-full max-w-md">
                <img class="rounded-lg shadow-md max-w-lg" src="assets/img/hacker.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Expert Cybersecurtiy Services for your
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
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more <span
                                        aria-hidden="true">→</span></a>
                            </p>
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
                            <p class="flex-auto">Our dedicated team of expert analysts works around the clock, 24 hours a
                                day, 7 days a week, to carefully monitor your systems in order to swiftly and effectively
                                detect and respond to any potential threats that may arise.
                            </p>
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more <span
                                        aria-hidden="true">→</span></a>
                            </p>
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
                            <p class="flex-auto">We provide expert guidance to help you develop, implement, and maintain
                                effective cybersecurity strategies that are tailored to your specific business needs. Our
                                team of experienced professionals is committed to assisting you every step of the way,
                                ensuring that your cybersecurity measures are robust and up-to-date in the ever-evolving
                                digital landscape.
                            </p>
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">Learn more <span
                                        aria-hidden="true">→</span></a>
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div>
                    {{-- <h2 class="text-base font-semibold leading-7 text-indigo-600">Benefits</h2> --}}
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Unlock the Benefits of
                        Managed Security Services for Your Business
                    </p>
                    <p class="mt-6 text-base leading-7 text-gray-600">At Echo Cyber, we provide a comprehensive suite of
                        managed security services that offer numerous advantages to your business. With our expertise and
                        advanced technologies, you can enjoy cost savings, enhanced security posture, and peace of mind.

                    </p>
                </div>
                <dl
                    class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Expanded Security Expertise
                        </dt>
                        <dd class="mt-2">Get instant access to a team of specialized security professionals who become an
                            extension of your own IT staff. MSSPs have extensive experience across technologies to cover all
                            your security needs.

                        </dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            24/7 Threat Monitoring
                        </dt>
                        <dd class="mt-2">MSSPs provide around-the-clock monitoring of networks, systems, and data to
                            rapidly detect potential threats. This enables a much quicker response time to minimize impact
                            of any incidents.


                        </dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Improved Risk Management
                        </dt>
                        <dd class="mt-2">MSSPs regularly audit, assess, and test systems to identify vulnerabilities and
                            recommend risk mitigation steps tailored to your organization. This results in better visibility
                            and control over security risks.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <svg class="absolute left-0 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Increased Operational Efficiency
                        </dt>
                        <dd class="mt-2">By delegating day-to-day security tasks to an MSSP, your own IT team can focus
                            on core business objectives. The MSSP takes care of workflows like alert triaging, reporting,
                            and maintenance.

                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="relative bg-white">
        <img class="h-48 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2"
            src="assets/img/map.jpg" alt="">
        <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
            <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
                <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                    <h2 class="text-base font-semibold leading-8 text-indigo-600">Our track record</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Discover the Alarming
                        Statistics of Cybersecurity Risks for Small and Medium-Sized Businesses</p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">With cyber threats on the rise, it is crucial for small
                        and medium-sized businesses to prioritize their cybersecurity measures. Protect your sensitive data
                        and safeguard your operations with Echo Cyber's comprehensive managed security services.

                    </p>
                    <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-600">of SMBs were targets of cyberattck in 2021</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">61%</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-600">of small businesses have customer data that could
                                be
                                compromised in an attack.
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">87%</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-600">in damages from over 700,000 attacks</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">$2.8 Billion</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-600">of SMBs could not continue to operate if hit by
                                ransomware
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">75%</dd>
                        </div>
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm leading-6 text-gray-600">of SMBs with no cybersecurity measures in place
                                believe their business is too small to be attacked.
                            </dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">60%</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
            <div>
                <h2 class="max-w-sm text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Unlock Your Cyber Security
                    Potential
                </h2>
                <p class="text-lg">
                    Protect your business with our expert vCISO services and comprehensive Cyber Risk assessments.
                </p>
            </div>
            <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:flex-shrink-0">
                <a href="#"
                    class="rounded-md bg-crimson-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-crimson-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-600">Schedule
                    <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                        aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>

@stop
