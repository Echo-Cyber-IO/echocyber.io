{{-- Footer --}}
<footer class="bg-echo-900 border-t border-echo-800">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

            {{-- Logo and tagline --}}
            <div class="flex flex-col gap-4">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="/assets/img/logo-hex.png" alt="Michael Faas" class="h-10 w-auto opacity-80 group-hover:opacity-100 transition-opacity">
                    <span class="font-display text-xl font-bold text-echo-100 group-hover:text-white transition-colors">
                        Michael Faas
                    </span>
                </a>
                <p class="text-echo-400 text-sm max-w-xs italic">
                    Navigating complexity. Translating tech.
                </p>
            </div>

            {{-- Navigation links --}}
            <nav class="flex flex-wrap gap-x-8 gap-y-4" aria-label="Footer navigation">
                <a href="/#about" class="text-echo-300 hover:text-white text-sm transition-colors">About</a>
                <a href="/#pricing" class="text-echo-300 hover:text-white text-sm transition-colors">Pricing</a>
                <a href="/assessment" class="text-echo-300 hover:text-white text-sm transition-colors">Assessment</a>
                <a href="/podcast" class="text-echo-300 hover:text-white text-sm transition-colors">Podcast</a>
                <a href="/contact" class="text-echo-300 hover:text-white text-sm transition-colors">Contact</a>
                <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer" class="text-echo-300 hover:text-white text-sm transition-colors">Newsletter</a>
            </nav>

            {{-- LinkedIn (primary and only social) --}}
            <a href="https://www.linkedin.com/in/mfaas/" target="_blank" rel="noopener noreferrer"
               class="group inline-flex items-center gap-2 rounded-lg border border-echo-700 bg-echo-800/50 px-4 py-2.5 text-sm font-medium text-echo-200 transition-all hover:border-crimson-700 hover:bg-crimson-900/20 hover:text-white"
               aria-label="Connect on LinkedIn">
                <svg class="h-5 w-5 text-crimson-500 transition-colors group-hover:text-crimson-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
                Connect on LinkedIn
            </a>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-12 pt-8 border-t border-echo-800">
            <p class="text-echo-500 text-sm text-center lg:text-left">
                &copy; {{ date('Y') }} Echo Cyber LLC. All rights reserved.
            </p>
        </div>
    </div>
</footer>
