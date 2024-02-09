<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8 mx-auto max-w-7xl" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1 5 p1">
                    <span class="sr-only">Echo Cyber LLC</span>
                    <img src="../assets/img/logo-small.png" alt="Echo Cyber" class="h-10 w-auto">
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/"
                    class="{{ $page->isActive('/') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-300 hover:text-gray-500">Home</a>
                <a href="/about"
                    class="{{ $page->isActive('/about/') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-300 hover:text-gray-500">About</a>
                {{-- <a href="/services"
                    class="{{ $page->isActive('/services') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-300 hover:text-gray-500">Services</a> --}}
                <a href="/contact"
                    class="{{ $page->isActive('/contact') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-300 hover:text-gray-500">Contact</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div>
                    <a href="/schedule"
                        class="bg-crimson text-white px-4 py-2 rounded-lg shadow-lg font-semibold hover:bg-crimson-700 hover:text-white transform transition hover:-translate-y-1">Schedule
                        a Strategy
                        Session</a>
                </div>
            </div>
        </nav>
    </header>
</div>
