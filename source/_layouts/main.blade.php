<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
        <!-- Insert analytics code here -->
    @endif

    {{-- Alpine.js for interactions --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Google Fonts: Space Grotesk (display), Outfit (body), JetBrains Mono (code) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Outfit:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    {{-- Vite refresh for development hot reload --}}
    @viteRefresh()

    {{-- Compiled styles --}}
    <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
</head>

<body class="bg-echo-950 text-echo-200 min-h-screen flex flex-col">
    {{-- Fixed hex-grid background for homepage --}}
    @if($page->getPath() === '/' || $page->getPath() === '')
    <div class="fixed inset-0 bg-hex-grid opacity-30 pointer-events-none z-0"></div>
    <div class="fixed top-0 left-0 w-[450px] h-[450px] bg-gradient-to-br from-crimson-900/40 to-transparent transform -skew-x-12 blur-2xl pointer-events-none z-0"></div>
    @endif

    {{-- Navigation --}}
    @include('_partials.nav')

    {{-- Main content --}}
    <main class="flex-grow">
        @yield('body')
    </main>

    {{-- Footer --}}
    @include('_partials.footer')

    {{-- Back to top button --}}
    <div x-data="{ show: false }"
         x-on:scroll.window="show = window.pageYOffset >= 300"
         class="fixed bottom-8 right-8 z-50">
        <button x-show="show"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
                x-on:click="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="bg-crimson-700 hover:bg-crimson-600 text-white p-3 rounded-full shadow-glow transition-all duration-300 hover:shadow-glow-lg"
                aria-label="Back to top">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    {{-- Compiled scripts --}}
    <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
