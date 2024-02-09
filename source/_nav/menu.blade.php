<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Home" href="/"
        class="ml-6 border-transparent text-gray-500 hover:border-crimson hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-md font-semibold
        {{ $page->isActive('/') ? 'active border-b-2 border-transparent border-crimson' : '' }}">
        Home
    </a>

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 border-transparent text-gray-500 hover:border-crimson hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-md font-semibold
        {{ $page->isActive('/blog') ? 'active border-b-2 border-transparent border-crimson' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 border-transparent text-gray-500 hover:border-crimson hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-md font-semibold
        {{ $page->isActive('/about') ? 'active border-b-2 border-transparent border-crimson' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 border-transparent text-gray-500 hover:border-crimson hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-md font-semibold
        {{ $page->isActive('/contact') ? 'active border-b-2 border-transparent border-crimson' : '' }}">
        Contact
    </a>

    <button class="ml-6 bg-crimson-700 hover:bg-crimson-800 text-base text-white font-bold py-2 px-4 border border-crimson-800 rounded">
    Schedule Strategy Session <i class="fa-solid fa-arrow-right"></i>
    </button>
</nav>
