<header class="site-header">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_actions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/shared_layout/header_part/header_resp.css') }}">
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="header-actions">
                    <a href="#" class="header-action" aria-label="Search">
                        <i class="bi bi-search"></i>
                    </a>
                    <a href="#" class="header-action" aria-label="Wishlist">
                        <i class="bi bi-heart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
