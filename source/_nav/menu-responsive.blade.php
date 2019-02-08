<nav id="js-nav-menu" class="nav-menu hidden md:hidden">
    <ul class="list-reset my-0 -ml-2">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} My work"
                href="/my-work"
                class="text-lg nav-menu__item hover:text-blue {{ $page->isActive('/my-work') ? 'active text-blue' : '' }}"
            >My work</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Articles"
                href="/articles"
                class="text-lg nav-menu__item hover:text-blue {{ $page->isActive('/articles') ? 'active text-blue' : '' }}"
            >Articles</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="text-lg nav-menu__item hover:text-blue {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Twitter"
                href="https://www.twitter.com/zk0433"
                class="nav-menu__item" target="_blank">
                <img src="/assets/img/twitter.svg"  alt="twitter icon" class="h-10 w-10 max-w-none twitter">
            </a>
        </li>
    </ul>
</nav>
