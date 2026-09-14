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
                    <div class="product-filter-title"> <span>Categories</span> <i class="bi bi-chevron-up"></i> </div>
                    <div class="product-filter-options"> <button type="button" class="product-filter-option active"
                            data-filter-type="category" data-filter-value="all"> <span>All Products</span> <small>
                                {{ str_pad($products->count(), 2, '0', STR_PAD_LEFT) }} </small> </button>
                        @foreach ($categories as $category)
                            <button type="button" class="product-filter-option" data-filter-type="category"
                                data-filter-value="{{ $category->slug }}"> <span> {{ $category->name }} </span> <small>
                                    {{ str_pad($category->products_count, 2, '0', STR_PAD_LEFT) }} </small> </button>
                        @endforeach
                    </div>
                </div>

                <div class="product-filter-section">
                    <div class="product-filter-title"> <span>Brands</span> <i class="bi bi-chevron-up"></i> </div>
                    <div class="product-filter-options">
                        @foreach ($brands as $brand)
                            <button type="button" class="product-filter-option" data-filter-type="brand"
                                data-filter-value="{{ $brand->slug }}"> <span> {{ $brand->name }} </span> <small>
                                    {{ str_pad($brand->products_count, 2, '0', STR_PAD_LEFT) }} </small> </button>
                        @endforeach
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
                        <button type="button" class="product-filter-option" data-filter-type="price" data-min="5000"
                            data-max="10000"><span>Tk 5,000 – 10,000</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="price" data-min="10000"
                            data-max="20000"><span>Tk 10,000 – 20,000</span></button>
                        <button type="button" class="product-filter-option" data-filter-type="price" data-min="20000"
                            data-max="50000"><span>Tk 20,000 – 50,000</span></button>
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
                    @foreach ($products as $product)
                        <article class="product-item" data-name="{{ strtolower($product->name) }}"
                            data-category="{{ $product->category?->slug }}"
                            data-brand="{{ $product->brand?->slug }}" data-price="{{ $product->price }}"
                            data-size="{{ $product->sizes->pluck('slug')->implode(' ') }}"
                            data-tags="{{ collect($product->tags ?? [])->map(fn($tag) => strtolower($tag))->implode(' ') }}">
                            <div class="product-card">
                                <div class="product-image-wrap">
                                    @if ($product->badge)
                                        <span class="product-badge"> {{ $product->badge }} </span>
                                    @endif <img src="{{ asset($product->image) }}"
                                        alt="{{ $product->name }}" class="product-image">
                                    <div class="product-card-overlay"> <button type="button"
                                            class="product-card-action product-wishlist"
                                            data-product-id="{{ $product->id }}"
                                            data-product-name="{{ $product->name }}"
                                            data-product-image="{{ asset($product->image) }}"
                                            data-product-price="{{ number_format($product->price, 2) }}"
                                            data-product-currency="{{ $product->currency }}"
                                            data-product-category="{{ $product->category?->name ?? 'Product' }}"
                                            data-product-url="{{ route('product.view', $product) }}"
                                            aria-label="Add to wishlist">

                                            <i class="bi bi-heart"></i>
                                        </button>
                                        <a href="{{ route('product.view', $product) }}" class="product-quick-view">
                                            <i class="bi bi-eye"></i>
                                            <span> View Product </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-card-body"> <span class="product-category">
                                        {{ $product->category?->name ?? 'Uncategorized' }} @if ($product->brand)
                                            / {{ $product->brand->name }}
                                        @endif </span>
                                    <h3> {{ $product->name }} </h3>
                                    <p class="product-description"> {{ $product->short_description }} </p>
                                    <div class="product-card-bottom">
                                        <div class="product-price"> <strong> {{ $product->currency }}
                                                {{ number_format($product->price, 2) }} </strong>
                                            @if ($product->old_price)
                                                <del> {{ $product->currency }}
                                                    {{ number_format($product->old_price, 2) }} </del>
                                            @endif
                                        </div> <a href="{{ route('product.view', $product) }}"
                                            class="product-view-link"> View <i class="bi bi-arrow-up-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
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
