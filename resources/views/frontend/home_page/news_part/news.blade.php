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
            <article class="news-card">
                <a href="#" class="news-image-link">
                    <div class="news-image-wrap">
                        <img src="{{ asset('images/news_part/news-1.png') }}" alt="Textile manufacturing">
                        <span class="news-category">Industry</span>
                    </div>
                </a>
                <div class="news-card-content">
                    <span class="news-date">16 February 2026</span>
                    <h3>Innovation in Modern Textile Manufacturing</h3>
                    <p>Exploring the latest developments shaping efficient and responsible garment production.</p>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </article>

            <article class="news-card">
                <a href="#" class="news-image-link">
                    <div class="news-image-wrap">
                        <img src="{{ asset('images/news_part/news-2.png') }}" alt="Sustainable fashion">
                        <span class="news-category">Sustainability</span>
                    </div>
                </a>
                <div class="news-card-content">
                    <span class="news-date">21 February 2026</span>
                    <h3>The Future of Sustainable Fashion</h3>
                    <p>How responsible sourcing and better materials are transforming the global fashion industry.</p>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </article>

            <article class="news-card">
                <a href="#" class="news-image-link">
                    <div class="news-image-wrap">
                        <img src="{{ asset('images/news_part/news-3.png') }}" alt="Textile quality control">
                        <span class="news-category">Quality</span>
                    </div>
                </a>
                <div class="news-card-content">
                    <span class="news-date">28 February 2026</span>
                    <h3>Quality Control Across Global Supply Chains</h3>
                    <p>A closer look at the standards and processes behind reliable textile production.</p>
                    <a href="#" class="news-read-more">
                        <span>Read More</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </article>
        </div>

        <div class="news-footer">
            <a href="#" class="news-all-link">
                <span>View All News</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
