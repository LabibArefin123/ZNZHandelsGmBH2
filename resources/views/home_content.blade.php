<!-- Hero Section -->
<section class="container-fluid p-0">
    @include('home_page.banner_part.banner')
</section>

@include('home_page.about_part.about')
<br>
@include('home_page.category_part.category')
@include('home_page.partner_part.partner')
<br>



<div class="news-container">
    <style>
        .news-container {
            background-color: #f9f9f9;
            min-height: 100vh;
            /* Ensures the container stretches to fill the screen */
            padding-top: 5rem;
            /* Keeps the spacing from the top */
            padding-right: 5rem;
            /* Keeps the spacing from the right */
            padding-left: 5rem;
            /* Keeps the spacing from the left */
        }
    </style>
    <div class="container">
        <h2 class="text-center mb-5">Latest News</h2>

        <div class="row">
            <!-- First news item -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('blog-1.jpg') }}" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <p class="card-text text-muted">16 February 2020</p>
                        <h5 class="card-title">What Curling Irons Are The Best Ones</h5>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Second news item -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('blog-2.jpg') }}" class="card-img-top" alt="News Image 2">
                    <div class="card-body">
                        <p class="card-text text-muted">21 February 2020</p>
                        <h5 class="card-title">Eternity Bands Do Last Forever</h5>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Third news item -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('blog-3.jpg') }}" class="card-img-top" alt="News Image 3">
                    <div class="card-body">
                        <p class="card-text text-muted">28 February 2020</p>
                        <h5 class="card-title">The Health Benefits Of Sunglasses</h5>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
