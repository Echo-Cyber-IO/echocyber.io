{{-- Navigation --}}
<header x-data="{ mobileMenuOpen: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 20 })"
        :class="{ 'bg-echo-950/70 backdrop-blur-md shadow-lg': scrolled, 'bg-transparent': !scrolled }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

    <nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Main navigation">
        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="/assets/img/logo-hex.png" alt="Michael Faas" class="h-12 w-auto">
                    <span class="font-display text-2xl font-bold text-white group-hover:text-crimson-400 transition-colors hidden sm:inline">
                        Michael Faas
                    </span>
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex lg:items-center lg:gap-x-10">
                <a href="/about"
                   class="{{ $page->isActive('/about') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors relative
                          after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-crimson-500
                          after:transition-all after:duration-300 hover:after:w-full
                          {{ $page->isActive('/about') ? 'after:w-full' : '' }}">
                    About
                </a>
                <a href="/services"
                   class="{{ $page->isActive('/services') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors relative
                          after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-crimson-500
                          after:transition-all after:duration-300 hover:after:w-full
                          {{ $page->isActive('/services') ? 'after:w-full' : '' }}">
                    Services
                </a>
                <a href="/contact"
                   class="{{ $page->isActive('/contact') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors relative
                          after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-crimson-500
                          after:transition-all after:duration-300 hover:after:w-full
                          {{ $page->isActive('/contact') ? 'after:w-full' : '' }}">
                    Contact
                </a>
            </div>

            {{-- CTA Button (Desktop) --}}
            <div class="hidden lg:block">
                <a href="mailto:info@echocyber.com"
                   class="inline-flex items-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-5 py-2.5 rounded-lg font-medium transition-all duration-300 hover:shadow-glow">
                    <span>Let's Talk</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        type="button"
                        class="text-echo-200 hover:text-white p-2 -mr-2"
                        aria-expanded="false"
                        :aria-expanded="mobileMenuOpen.toString()">
                    <span class="sr-only">Open menu</span>
                    {{-- Hamburger icon --}}
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    {{-- Close icon --}}
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden py-4 border-t border-echo-800">
            <div class="flex flex-col gap-4">
                <a href="/about"
                   class="{{ $page->isActive('/about') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors py-2">
                    About
                </a>
                <a href="/services"
                   class="{{ $page->isActive('/services') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors py-2">
                    Services
                </a>
                <a href="/contact"
                   class="{{ $page->isActive('/contact') ? 'text-crimson-400' : 'text-echo-200' }}
                          font-medium hover:text-crimson-400 transition-colors py-2">
                    Contact
                </a>
                <a href="mailto:info@echocyber.com"
                   class="inline-flex items-center justify-center gap-2 bg-crimson-700 hover:bg-crimson-600 text-white px-5 py-3 rounded-lg font-medium transition-all duration-300 mt-2">
                    <span>Let's Talk</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>

{{-- Spacer to prevent content from being hidden under fixed nav --}}
<div class="h-20"></div>
