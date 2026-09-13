<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_header.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_grid.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_card.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_meta.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_read_more.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/blog_page/blog_resp.css') }}">

<section class="blog-header">
    <div class="container">
        <div class="blog-header-content">
            <span class="blog-header-eyebrow">ZNZ Journal</span>

            <h1>
                Insights from the world of
                <em>textiles &amp; fashion.</em>
            </h1>

            <p>
                Explore ideas, industry insights, sourcing stories and
                perspectives from the international textile and fashion
                business.
            </p>
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <div class="blog-section-heading">
            <div>
                <span class="blog-section-label">Latest Stories</span>
                <h2>From our <em>journal.</em></h2>
            </div>

            <p>
                Discover the people, processes and ideas shaping
                modern textile sourcing.
            </p>
        </div>

        <div class="blog-grid">
            @foreach ($blogs as $blog)
                <article class="blog-card">
                    <a href="#" class="blog-card-image">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">

                        <span class="blog-card-category">
                            {{ $blog->category }}
                        </span>
                    </a>

                    <div class="blog-card-body">
                        <div class="blog-meta">
                            <span>{{ $blog->published_at->format('d F Y') }}</span>
                            <span class="blog-meta-divider"></span>
                            <span>ZNZ Handels GmbH</span>
                        </div>

                        <h3>
                            <a href="#">
                                {{ $blog->title }}
                            </a>
                        </h3>

                        <p>
                            {{ $blog->excerpt }}
                        </p>

                        <a href="#" class="blog-read-more">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
