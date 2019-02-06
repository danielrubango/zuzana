<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/blog') ? 'active text-zuzana-green' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/about') ? 'active text-zuzana-green' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/contact') ? 'active text-zuzana-green' : '' }}">
        Contact
    </a>
</nav>
