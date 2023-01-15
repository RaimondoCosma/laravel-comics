<header>
    <section class="bg-pre-header">
        <div class="pre-header container">
            <div>DC POWER VISA</div>
            <div>ADDICTIONAL DC SITES <i class="fa-solid fa-chevron-down"></i></div>
        </div>
    </section>
    <section class="header-nav d-flex container align-items-center py-3">
        <div class="logo">
            <img class="image-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Comics">
        </div>
        <nav class="ms-nav">
            <ul class="d-flex list-unstyled justify-content-between">
                <li class="position-relative"><a href="{{ route('characters') }}">CHARACTERS</a>
                    <div class="position-absolute link-nav {{ request()->is('characters') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('comics') }}">COMICS</a>
                    <div class="position-absolute link-nav {{ request()->is('comics') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('home') }}">MOVIES</a>
                    <div class="position-absolute link-nav {{ request()->is('/') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('tv') }}">TV</a>
                    <div class="position-absolute link-nav {{ request()->is('tv') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('games') }}">GAMES</a>
                    <div class="position-absolute link-nav {{ request()->is('games') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                    <div class="position-absolute link-nav {{ request()->is('collectibles') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('videos') }}">VIDEOS</a>
                    <div class="position-absolute link-nav {{ request()->is('videos') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('fans') }}">FANS</a>
                    <div class="position-absolute link-nav {{ request()->is('fans') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('news') }}">NEWS</a>
                    <div class="position-absolute link-nav {{ request()->is('news') ? 'active' : '' }}"></div>
                </li>
                <li class="position-relative"><a href="{{ route('shop') }}">SHOP <i
                            class="fa-solid fa-chevron-down"></i></a>
                    <div class="position-absolute link-nav {{ request()->is('shop') ? 'active' : '' }}"></div>
                </li>
            </ul>
        </nav>
        <div class="search-bar position-relative"><input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass position-absolute ms-lens"></i>
        </div>
    </section>
</header>
