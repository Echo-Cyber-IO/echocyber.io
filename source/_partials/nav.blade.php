<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8 mx-auto max-w-7xl" aria-label="Global">
            <div class="flex flex-1">
                <a href="/" class="-m-1 5 p1">
                    <div class="flex content-center">
                        <img class="h-10" src="../assets/img/logo-small.png" alt="Your Company">
                        <span class="text-3xl font-bold text-white px-6">Echo
                            Cyber</span>
                    </div>
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/about"
                    class="{{ $page->isActive('/about/') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-200 hover:text-gray-300">About</a>
                <div x-data=" { open: true }">
                    <a href="#" @click.prevent = "open = ! open"
                        class="{{ $page->isActive('/services') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                        hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-200 hover:text-gray-300">Services
                        <i class="fa-solid fa-chevron-down"></i></a>

                    <div class="absolute left-1/2 z-10 mt-3 flex w-screen max-w-max -translate-x-10 px-4" x-cloak x-show="open" @click.outside = "open = false">
                        <div class="w-screen max-w-xs flex-auto rounded-3xl bg-white p-4 text-sm leading-6 shadow-lg ring-1 ring-gray-100/5">
                            <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                <a href="" class="font-semibold text-gray-900 hover:text-crimson-700">
                                    <i class="fa-solid fa-magnifying-glass"></i><span class="ml-2">Cybersecurity Risk Assessments</span>
                                    <p class="mt-1 text-gray-600">Uncover your exposures with our deep-dive analysis identifying vulnerabilities across your systems.</p>
                                </a>

                                <a href="" class="font-semibold text-gray-900 hover:text-crimson-700">
                                    <i class="fa-solid fa-user-shield"></i><span class="ml-2">Managed Security Services</span>
                                    <p class="mt-1 text-gray-600">Stay vigilant against threats with our team providing 24/7 monitoring, detection, and response.</p>
                                </a>

                                <a href="" class="font-semibold text-gray-900 hover:text-crimson-700">
                                    <i class="fa-regular fa-lightbulb"></i><span class="ml-2">Virtual CISO</span>
                                    <p class="mt-1 text-gray-600">Get on-demand security leadership with our seasoned CISO advising on strategy and compliance.</p>
                                </a>

                                <a href="" class="font-semibold text-gray-900 hover:text-crimson-700">
                                    <i class="fa-solid fa-building-shield"></i><span class="ml-2">Custom Security Projects</span>
                                    <p class="mt-1 text-gray-600">Tighten up your defenses with bespoke solutions tailored to your unique environment and risks.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/contact"
                    class="{{ $page->isActive('/contact') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-200 hover:text-gray-300">Contact</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div>
                    <a href="/schedule"
                        class="bg-crimson text-white px-4 py-2 rounded-lg shadow-lg font-semibold hover:bg-crimson-700 hover:text-white transform transition hover:-translate-y-1">
                        Schedule a Strategy Session</a>
                </div>
            </div>

        </nav>
    </header>
</div>
