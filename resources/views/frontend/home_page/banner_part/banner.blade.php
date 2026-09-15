<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/banner_part/banner_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/banner_part/banner_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/banner_part/banner_controls.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/banner_part/banner_social.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/banner_part/banner_responsive.css') }}">
    <div class="carousel-inner">
        @foreach ($banners as $banner)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="banner-slide">
                    <div class="banner-image" style="background-image: url('{{ asset($banner->image) }}');"></div>
                    <div class="banner-overlay"></div>

                    <div class="container banner-container">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-7 col-lg-7 col-md-9">
                                <div class="banner-content">
                                    @if ($banner->subtitle)
                                        <span class="banner-subtitle">
                                            <span class="banner-subtitle-line"></span>
                                            {{ $banner->subtitle }}
                                        </span>
                                    @endif

                                    @if ($banner->title)
                                        <h2>{{ $banner->title }}</h2>
                                    @endif

                                    @if ($banner->description)
                                        <p>{{ $banner->description }}</p>
                                    @endif

                                    @if ($banner->button_text && $banner->button_url)
                                        <div class="banner-actions">
                                            <a href="{{ $banner->button_url }}" class="banner-button">
                                                <span>{{ $banner->button_text }}</span>
                                                <i class="bi bi-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    @endif

                                    <div class="banner-social">
                                        @if ($banner->facebook_url)
                                            <a href="{{ $banner->facebook_url }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        @endif

                                        @if ($banner->twitter_url)
                                            <a href="{{ $banner->twitter_url }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="bi bi-twitter-x"></i>
                                            </a>
                                        @endif

                                        @if ($banner->pinterest_url)
                                            <a href="{{ $banner->pinterest_url }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="bi bi-pinterest"></i>
                                            </a>
                                        @endif

                                        @if ($banner->instagram_url)
                                            <a href="{{ $banner->instagram_url }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-slide-number">
                        <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="banner-slide-line"></span>
                        <span>{{ str_pad($loop->count, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
