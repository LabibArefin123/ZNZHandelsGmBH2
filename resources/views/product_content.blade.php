<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_header.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_toolbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_filter.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_grid.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_card.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_responsive.css') }}">

<section class="product-page">  
    <div class="container">

        <div class="product-header">
            <div class="product-header-content">
                <span class="product-eyebrow">OUR COLLECTION</span>
                <h1>Discover Our Products</h1>
                <p>Explore our carefully selected collection of quality fashion and lifestyle products.</p>
            </div>
            <div class="product-header-decoration">
                <span></span><span></span><span></span>
            </div>
        </div>

        <div class="product-toolbar">
            <div class="product-toolbar-info">
                <span class="product-toolbar-label">Collection</span>
                <strong><span id="productResultCount">4</span> Products</strong>
            </div>

            <div class="product-search">
                <i class="bi bi-search"></i>
                <input type="search" id="productSearch" placeholder="Search products..." autocomplete="off">
                <button type="button" id="clearProductSearch" aria-label="Clear search"><i
                        class="bi bi-x"></i></button>
            </div>

            <button type="button" class="product-filter-toggle" id="productFilterToggle">
                <i class="bi bi-sliders"></i>
                <span>Filters</span>
            </button>

            <div class="product-sort">
                <label for="productSort">Sort</label>
                <select id="productSort">
                    <option value="default">Featured</option>
                    <option value="low">Price: Low to High</option>
                    <option value="high">Price: High to Low</option>
                    <option value="az">Name: A-Z</option>
                    <option value="za">Name: Z-A</option>
                </select>
            </div>
        </div>

        <div class="product-layout">

            <aside class="product-filter" id="productFilter">

                <div class="product-filter-mobile-head">
                    <div>
                        <span>REFINE</span>
                        <h3>Filters</h3>
                    </div>
                    <button type="button" id="closeProductFilter" aria-label="Close filters"><i
                            class="bi bi-x-lg"></i></button>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title">
                        <span>Categories</span>
                        <i class="bi bi-chevron-up"></i>
                    </div>
                    <div class="product-filter-options">
                        <button type="button" class="product-filter-option active" data-filter-type="category"
                            data-filter-value="all">
                            <span>All Products</span><small>04</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="men">
                            <span>Men</span><small>01</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="women">
                            <span>Women</span><small>01</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="bags">
                            <span>Bags</span><small>01</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="clothing">
                            <span>Clothing</span><small>01</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="shoes">
                            <span>Shoes</span><small>00</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="accessories">
                            <span>Accessories</span><small>00</small>
                        </button>
                        <button type="button" class="product-filter-option" data-filter-type="category"
                            data-filter-value="kids">
                            <span>Kids</span><small>00</small>
                        </button>
                    </div>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title">
                        <span>Brands</span>
                        <i class="bi bi-chevron-up"></i>
                    </div>
                    <div class="product-filter-options">
                        <button type="button" class="product-filter-option" data-filter-type="brand"
                            data-filter-value="louis-vuitton"><span>Louis Vuitton</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="brand"
                            data-filter-value="chanel"><span>Chanel</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="brand"
                            data-filter-value="hermes"><span>Hermès</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="brand"
                            data-filter-value="gucci"><span>Gucci</span></button>
                    </div>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title">
                        <span>Price Range</span>
                        <i class="bi bi-chevron-up"></i>
                    </div>
                    <div class="product-filter-options">
                        <button type="button" class="product-filter-option" data-filter-type="price" data-min="0"
                            data-max="5000"><span>Tk 0 – 5,000</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="price"
                            data-min="5000" data-max="10000"><span>Tk 5,000 – 10,000</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="price"
                            data-min="10000" data-max="20000"><span>Tk 10,000 – 20,000</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="price"
                            data-min="20000" data-max="50000"><span>Tk 20,000 – 50,000</span></button>
                    </div>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title">
                        <span>Size</span>
                        <i class="bi bi-chevron-up"></i>
                    </div>
                    <div class="product-size-options">
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="xs">XS</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="s">S</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="m">M</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="xl">XL</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="2xl">2XL</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="xxl">XXL</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="3xl">3XL</button>
                        <button type="button" class="product-size-option" data-filter-type="size"
                            data-filter-value="4xl">4XL</button>
                    </div>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title">
                        <span>Tags</span>
                        <i class="bi bi-chevron-up"></i>
                    </div>
                    <div class="product-tags">
                        <button type="button" data-filter-type="tag" data-filter-value="product">Product</button>
                        <button type="button" data-filter-type="tag" data-filter-value="bags">Bags</button>
                        <button type="button" data-filter-type="tag" data-filter-value="shoes">Shoes</button>
                        <button type="button" data-filter-type="tag" data-filter-value="fashion">Fashion</button>
                        <button type="button" data-filter-type="tag" data-filter-value="clothing">Clothing</button>
                        <button type="button" data-filter-type="tag" data-filter-value="hats">Hats</button>
                        <button type="button" data-filter-type="tag"
                            data-filter-value="accessories">Accessories</button>
                    </div>
                </div>

                <button type="button" class="product-reset" id="resetProductFilters">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset All Filters
                </button>

            </aside>

            <div class="product-filter-overlay" id="productFilterOverlay"></div>

            <main class="product-results">

                <div class="product-results-head">
                    <div>
                        <span class="product-results-eyebrow">CURATED FOR YOU</span>
                        <h2>Latest Collection</h2>
                    </div>
                    <p id="productResultText">Showing all available products</p>
                </div>

                <div class="product-grid" id="productGrid">

                    <article class="product-item" data-name="Readymade Garment 1" data-category="men clothing"
                        data-brand="gucci" data-price="67.24" data-size="s m l xl"
                        data-tags="product fashion clothing">
                        <div class="product-card">
                            <div class="product-image-wrap">
                                <span class="product-badge">Featured</span>
                                <img src="{{ asset('images/product_page/readymate garment 1.jpg') }}" alt="Readymade Garment 1"
                                    class="product-image">
                                <div class="product-card-overlay">
                                    <button type="button" class="product-card-action product-wishlist"
                                        aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
                                    <button type="button" class="product-quick-view"><i
                                            class="bi bi-eye"></i><span>Quick View</span></button>
                                </div>
                            </div>
                            <div class="product-card-body">
                                <span class="product-category">Men / Clothing</span>
                                <h3>Readymade Garment 1</h3>
                                <p class="product-description">Premium ready-to-wear garment crafted for everyday
                                    elegance.</p>
                                <div class="product-card-bottom">
                                    <strong>$67.24</strong>
                                    <a href="#" class="product-view-link">View <i
                                            class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="product-item" data-name="Readymade Garment 2" data-category="women clothing"
                        data-brand="chanel" data-price="43.48" data-size="xs s m"
                        data-tags="product fashion clothing">
                        <div class="product-card">
                            <div class="product-image-wrap">
                                <span class="product-badge">New</span>
                                <img src="{{ asset('images/product_page/readymate garment 2.jpg') }}" alt="Readymade Garment 2"
                                    class="product-image">
                                <div class="product-card-overlay">
                                    <button type="button" class="product-card-action product-wishlist"
                                        aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
                                    <button type="button" class="product-quick-view"><i
                                            class="bi bi-eye"></i><span>Quick View</span></button>
                                </div>
                            </div>
                            <div class="product-card-body">
                                <span class="product-category">Women / Clothing</span>
                                <h3>Readymade Garment 2</h3>
                                <p class="product-description">A refined silhouette combining comfort with contemporary
                                    style.</p>
                                <div class="product-card-bottom">
                                    <strong>$43.48</strong>
                                    <a href="#" class="product-view-link">View <i
                                            class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="product-item" data-name="Readymade Garment 3" data-category="bags"
                        data-brand="louis-vuitton" data-price="60.90" data-size="m l xl"
                        data-tags="product bags fashion accessories">
                        <div class="product-card">
                            <div class="product-image-wrap">
                                <span class="product-badge">Popular</span>
                                <img src="{{ asset('images/product_page/readymate garment 3.jpg') }}" alt="Readymade Garment 3"
                                    class="product-image">
                                <div class="product-card-overlay">
                                    <button type="button" class="product-card-action product-wishlist"
                                        aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
                                    <button type="button" class="product-quick-view"><i
                                            class="bi bi-eye"></i><span>Quick View</span></button>
                                </div>
                            </div>
                            <div class="product-card-body">
                                <span class="product-category">Bags / Fashion</span>
                                <h3>Readymade Garment 3</h3>
                                <p class="product-description">A versatile fashion piece selected for modern premium
                                    collections.</p>
                                <div class="product-card-bottom">
                                    <strong>$60.90</strong>
                                    <a href="#" class="product-view-link">View <i
                                            class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="product-item" data-name="Readymade Garment 4" data-category="clothing men"
                        data-brand="hermes" data-price="60.90" data-size="l xl 2xl"
                        data-tags="product fashion clothing">
                        <div class="product-card">
                            <div class="product-image-wrap">
                                <span class="product-badge">Limited</span>
                                <img src="{{ asset('images/product_page/readymate garment 4.jpg') }}" alt="Readymade Garment 4"
                                    class="product-image">
                                <div class="product-card-overlay">
                                    <button type="button" class="product-card-action product-wishlist"
                                        aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
                                    <button type="button" class="product-quick-view"><i
                                            class="bi bi-eye"></i><span>Quick View</span></button>
                                </div>
                            </div>
                            <div class="product-card-body">
                                <span class="product-category">Clothing / Men</span>
                                <h3>Readymade Garment 4</h3>
                                <p class="product-description">A premium wardrobe essential with a polished
                                    contemporary finish.</p>
                                <div class="product-card-bottom">
                                    <strong>$60.90</strong>
                                    <a href="#" class="product-view-link">View <i
                                            class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="product-empty" id="productEmpty">
                    <div class="product-empty-icon"><i class="bi bi-search"></i></div>
                    <h3>No products found</h3>
                    <p>We couldn't find anything matching your current filters.</p>
                    <button type="button" id="emptyReset">Clear Filters</button>
                </div>

            </main>
        </div>
    </div>
</section>

<script src="{{ asset('js/custom_frontend/product_page/product_filter.js') }}"></script>
<script src="{{ asset('js/custom_frontend/product_page/product_animation.js') }}"></script>
<script src="{{ asset('js/custom_frontend/product_page/product_ui.js') }}"></script>
