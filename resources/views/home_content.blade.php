<!-- Hero Section -->
<section class="container-fluid p-0">
    @include('home_page.banner_part.banner')
</section>

@include('home_page.about_part.about')
<br>

@include('home_page.category_part.category')
<h1 style=" text-align: center;">Our Partners</h1>
<div class="grid-container">
    <style>
        .grid-class {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 30px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto
        }

        .grid-item {
            background-color: #f1f1f1;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .2);
            transition: transform .3s ease, box-shadow .3s ease
        }

        .grid-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .3);
            background-color: #e0f7fa
        }

        .grid-item a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 10px;
            font-size: 1.1rem
        }

        .grid-item a:hover {
            color: #0077b6
        }

        .grid-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover
        }
    </style>


    <div class="grid-class">


        <div class="grid-item">
            <a href="https://www.totalofftec.com" target="_blank">
                <img src="{{ asset('img/tot.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://event.amfori.org/" target="_blank">
                <img src="{{ asset('images/amfori.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.textilestandards.com/standards/43-bsci" target="_blank">
                <img src="{{ asset('images/bsci.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.totalofftec.com" target="_blank">
                <img src="{{ asset('img/Google.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.totalofftec.com" target="_blank">
                <img src="{{ asset('img/Google.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>




    </div>
</div>
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
