<nav id="js-nav-menu" class="nav-menu hidden md:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} My Work"
                href="/my-work"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/my-work') ? 'active text-blue' : '' }}"
            >My Work</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Articles"
                href="/articles"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/articles') ? 'active text-blue' : '' }}"
            >Articles</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Twitter"
                href="https://www.twitter.com/zk0433"
                class="nav-menu__item">
                <img src="/assets/img/twitter.svg" alt="twitter icon" class="h-8 w-8 max-w-none twitter">
            </a>
        </li>
    </ul>
</nav>
