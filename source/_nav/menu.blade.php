<nav class="hidden md:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} My work" href="/my-work"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/my-work') ? 'active text-zuzana-green' : '' }}">
        My work
    </a>

    <a title="{{ $page->siteName }} Articles" href="/articles"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/articles') ? 'active text-zuzana-green' : '' }}">
        Articles
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-grey-darker hover:text-zuzana-green {{ $page->isActive('/contact') ? 'active text-zuzana-green' : '' }}">
        Contact
    </a>

    <a title="{{ $page->siteName }} Twitter" href="https://www.twitter.com/zk433" target="_blank">
        <img src="/assets/img/twitter.svg" alt="twitter icon" class="h-8 w-8 max-w-none m-6 twitter">
    </a>
</nav>
