<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Home"
                href="/"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog') ? 'active text-crimson-450' : 'text-gray-800 hover:text-crimson-450' }}"
            >Home</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/about') ? 'active text-crimson-450' : 'text-gray-800 hover:text-crimson-450' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active text-crimson-450' : 'text-gray-800 hover:text-crimson-450' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active text-crimson-450' : 'text-gray-800 hover:text-crimson-450' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
