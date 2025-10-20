<!-- Hero Section -->
<section class="container-fluid p-0">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active" style="background: url('img/hero/hero-1.jpg') center/cover no-repeat;">
                <div class="container h-100">
                    <div class="row min-vh-100 align-items-center justify-content-center text-center text-lg-start">
                        <div class="col-xl-10 col-lg-3 col-md-10 p-3">
                            <div class="text-dark">
                                <h6 class="text-uppercase mb-2 fs-6">Summer Collection</h6>
                                <h2 class="fw-bold fs-2 mb-3">Fall - Winter Collections 2030</h2>
                                <p class="mb-3 fs-3">A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.</p>
                                <a href="#" class="btn btn-dark btn-sm mb-3">Shop now <i class="bi bi-arrow-right"></i></a>
                                <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                                    <a href="#" class="text-dark"><i class="bi bi-facebook fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-twitter fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-pinterest fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-instagram fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item" style="background: url('img/hero/hero-2.jpg') center/cover no-repeat;">
                <div class="container h-100">
                    <div class="row min-vh-100 align-items-center justify-content-center text-center text-lg-start">
                        <div class="col-xl-10 col-lg-3 col-md-10 p-3">
                            <div class="text-dark">
                                <h6 class="text-uppercase mb-2 fs-6">Summer Collection</h6>
                                <h2 class="fw-bold fs-2 mb-3">Fall - Winter Collections 2030</h2>
                                <p class="mb-3 fs-3">A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.</p>
                                <a href="#" class="btn btn-dark btn-sm mb-3">Shop now <i class="bi bi-arrow-right"></i></a>
                                <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                                    <a href="#" class="text-dark"><i class="bi bi-facebook fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-twitter fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-pinterest fs-5"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-instagram fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="container-fluid bg-light rounded shadow-sm">
    <div class="p-4">

        <h2 class="text-center text-dark mb-4">About Us</h2>
        <p class="text-muted mb-3 fs-5 text-justify">
            We at ZNZ Handels GmbH offer a full service in the textile sector. We design and produce the latest fashion
            and basic articles, which we distribute through different own brands and licenses. The textiles are procured
            through our cooperating production facilities in China, Pakistan, Portugal and Bangladesh. Quality control
            is very important to us, this is carried out via our own control and external testing institutes.
        </p>

    </div>
</div>


<br>
<h1 style=" text-align: center;">Categories</h1>
<div class="container my-5">
    <style>
        .col:hover {
            transform: scale(1.05);
            /* Scale up slightly on hover */
            transition: transform 0.3s ease-in-out;
            /* Smooth transition */
            z-index: 2;
            /* Bring the hovered element forward */
        }
    </style>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Product Card -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate garments.jpg') }}"
                            alt="Readymate Garments"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate garments.jpg') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Garments</a>
                </div>
            </div>
        </div>
        <!-- Product Card -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate footwear.jpg') }}"
                            alt="Readymate Footwear"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate footwear.jpg') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Footwear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate sports.jpg') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate sports.jpg') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Sports Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate leather.jpg') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate leather.jpg') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Leather Accessories</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate casual.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate casual.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Casual Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate innerwear.jpg') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate innerwear.jpg') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Inner Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/winter wear.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/winter wear.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Winter Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate summer.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate summer.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Summer Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/ethnic wear.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/ethnic wear.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Ethnic Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/readymate kids.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/readymate kids.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Kids Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/pregnancy wear.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/pregnancy wear.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Pregnancy Wear</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm text-center hover-scale">
                <div class="card-body">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/formal wear.PNG') }}"
                            alt="Readymate LEather Accessories"
                            class="img-fluid h-100 w-100 object-fit-cover rounded"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-bs-image="{{ asset('images/formal wear.PNG') }}">
                    </div>
                    <a href="#" class="d-block mt-2 text-decoration-none text-dark fw-bold">Formal Wear</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <img src="{{ asset('img/tot.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://event.amfori.org/" target="_blank">
                <img src="{{ asset('images/amfori.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.textilestandards.com/standards/43-bsci" target="_blank">
                <img src="{{ asset('images/bsci.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.totalofftec.com" target="_blank">
                <img src="{{ asset('img/Google.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
        </div>
        <div class="grid-item">
            <a href="https://www.totalofftec.com" target="_blank">
                <img src="{{ asset('img/Google.png') }}" alt="TOT" data-pagespeed-url-hash="1307051800" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
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