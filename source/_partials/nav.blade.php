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
                {{-- <a href="/services"
                    class="{{ $page->isActive('/services') ? 'active border-b-2 border-crimson' : 'border-b-2 border-transparent' }}
                    hover:border-crimson hover:border-b-2 text-lg uppercase tracking-widest leading-6 text-gray-200 hover:text-gray-300">Services</a> --}}
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
