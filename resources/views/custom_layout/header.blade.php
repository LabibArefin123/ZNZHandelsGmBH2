<nav class="site-header">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation_link.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation_active.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation_toggler.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_actions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_search_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_wishlist_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_resp.css') }}">
    @include('custom_layout.header_search_modal')
    @include('custom_layout.header_wishlist_modal')
    <div class="header-main">
        <div class="container">
            <div class="header-wrapper">

                <div class="header-brand">
                    <a href="{{ route('home') }}" class="header-logo-link">
                        <img src="{{ asset('images/logo.PNG') }}" alt="ZNZ Handels GmbH" class="header-logo">
                    </a>
                </div>

                <nav class="header-navigation">
                    <button class="header-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav header-nav-list">

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('product') || request()->routeIs('men') || request()->routeIs('women') ? 'active' : '' }}"
                                    href="{{ route('product') }}">
                                    Product
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                                    href="{{ route('blog') }}">
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">
                                    Contacts
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>

                <div class="header-actions">
                    <button type="button" class="header-action" id="headerSearchButton" aria-label="Search"
                        data-bs-toggle="modal" data-bs-target="#headerSearchModal">
                        <i class="bi bi-search"></i>
                    </button>

                    <button type="button" class="header-action header-wishlist-button" id="headerWishlistButton"
                        aria-label="Wishlist" data-bs-toggle="modal" data-bs-target="#headerWishlistModal">
                        <i class="bi bi-heart"></i>
                        <span class="header-wishlist-count" id="headerWishlistCount">0</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<script src="{{ asset('js/custom_frontend/shared_layout/header_part/nav_link.js') }}"></script>
<script src="{{ asset('js/custom_frontend/shared_layout/header_part/header_search.js') }}"></script>
<script src="{{ asset('js/custom_frontend/shared_layout/header_part/header_wishlist.js') }}"></script>