<section class="news-section" id="news">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/news_part/news_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/news_part/news_heading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/news_part/news_grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/news_part/news_card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/welcome_page/news_part/news_resp.css') }}">
    <div class="container">
        <div class="news-heading">
            <span class="news-eyebrow">Journal &amp; Updates</span>
            <h2>Latest News</h2>
            <p>Insights, stories and updates from the world of fashion, textiles and global production.</p>
        </div>
        <div class="news-grid">
            @foreach ($news as $item)
                <article class="news-card">
                    <a href="#" class="news-image-link">
                        <div class="news-image-wrap">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->image_alt }}">
                            <span class="news-category">{{ $item->category }}</span>
                        </div>
                    </a>
                    <div class="news-card-content">
                        <span class="news-date">{{ $item->published_at->format('d F Y') }}</span>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <a href="#" class="news-read-more">
                            <span>Read More</span>
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="news-footer">
            <a href="#" class="news-all-link">
                <span>View All News</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
