@extends('frontend.shared_layout.app')

@section('content')
    @include('custom_layout.header')
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_info.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_related.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_frontend/product_page/product_view/product_view_responsive.css') }}">

    <section class="product-view-page">
        <div class="container">
            <div class="product-view-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>
                    <i class="bi bi-chevron-right"></i>
                </span>
                <a href="{{ route('product') }}">Products</a>
                <span>
                    <i class="bi bi-chevron-right"></i>
                </span>
                <strong>{{ $product->name }}</strong>
            </div>

            <div class="product-view-hero">
                <div class="product-view-gallery">
                    @php
                        $productImages = $product->images ?? [];

                        if (empty($productImages) && $product->image) {
                            $productImages = [$product->image];
                        }

                        if (!empty($product->image) && !in_array($product->image, $productImages)) {
                            array_unshift($productImages, $product->image);
                        }
                    @endphp

                    <div class="product-view-thumbnails">
                        @foreach ($productImages as $index => $image)
                            <button type="button" class="product-view-thumb {{ $index === 0 ? 'active' : '' }}"
                                data-image="{{ asset($image) }}">
                                <img src="{{ asset($image) }}" alt="{{ $product->name }} {{ $index + 1 }}">
                            </button>
                        @endforeach
                    </div>

                    <div class="product-view-main-image">
                        @if ($product->badge)
                            <span class="product-view-badge">{{ $product->badge }}</span>
                        @endif

                        <button type="button" class="product-view-expand" id="productViewExpand"
                            aria-label="View larger image">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </button>

                        <img id="productViewMainImage" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    </div>
                </div>

                <div class="product-view-info">
                    <span class="product-view-eyebrow">
                        {{ strtoupper($product->category?->name ?? 'PRODUCT') }}
                    </span>

                    <h1>{{ $product->name }}</h1>

                    <div class="product-view-meta">
                        <div class="product-view-rating">
                            <span class="product-stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi {{ $i <= round($product->rating) ? 'bi-star-fill' : 'bi-star' }}">
                                    </i>
                                @endfor
                            </span>

                            <strong>{{ number_format($product->rating, 1) }} </strong>
                            <span>({{ $product->review_count }} Reviews)</span>
                        </div>

                        <span class="product-view-sku"> SKU: {{ $product->sku }}</span>
                    </div>

                    <div class="product-view-price">
                        <strong>
                            {{ $product->currency }}
                            {{ number_format($product->price, 2) }}
                        </strong>
                        @if ($product->old_price)
                            <del>
                                {{ $product->currency }}
                                {{ number_format($product->old_price, 2) }}
                            </del>
                        @endif
                    </div>

                    <p class="product-view-short-description">{{ $product->short_description }}</p>
                    <div class="product-view-divider"></div>
                    @if ($product->brand)
                        <div class="product-view-option">
                            <div class="product-view-option-head">
                                <span>Brand</span>
                                <strong>{{ $product->brand->name }}</strong>
                            </div>
                        </div>
                    @endif

                    @if (!empty($product->colors))
                        <div class="product-view-option">
                            <div class="product-view-option-head">
                                <span>Color</span>
                                <strong id="selectedColor">{{ $product->colors[0] }}</strong>
                            </div>

                            <div class="product-view-color-options">
                                @foreach ($product->colors as $index => $color)
                                    <button type="button" class="product-view-color {{ $index === 0 ? 'active' : '' }}"
                                        data-color="{{ $color }}" title="{{ $color }}">
                                        <span style="--option-color: {{ strtolower($color) }}">
                                        </span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if ($product->sizes->count())
                        <div class="product-view-option">
                            <div class="product-view-option-head">
                                <span>Size</span>
                                <strong id="selectedSize">{{ $product->sizes->first()->name }}</strong>
                            </div>

                            <div class="product-view-size-options">
                                @foreach ($product->sizes as $index => $size)
                                    <button type="button" class="product-view-size {{ $index === 0 ? 'active' : '' }}"
                                        data-size="{{ $size->slug }}">
                                        {{ $size->name }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="product-view-option product-view-quantity-option">
                        <div class="product-view-option-head">
                            <span>Quantity</span>
                            <strong>{{ $product->availability }}</strong>
                        </div>

                        <div class="product-view-quantity-row">
                            <div class="product-view-quantity">
                                <button type="button" id="quantityMinus">
                                    <i class="bi bi-dash"></i>
                                </button>

                                <input type="number" id="productQuantity" value="1" min="1"
                                    max="{{ max(1, $product->stock) }}">

                                <button type="button" id="quantityPlus">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>

                            <span class="product-stock">{{ $product->stock }} available</span>
                        </div>
                    </div>

                    <div class="product-view-actions">
                        <button type="button" class="product-view-cart" id="productAddCart">
                            <span>Add to Collection </span>
                            <i class="bi bi-bag-plus"></i>
                        </button>

                        <button type="button" class="product-view-wishlist" id="productWishlist"
                            data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}"
                            data-product-image="{{ asset($product->image) }}"
                            data-product-price="{{ number_format($product->price, 2) }}"
                            data-product-currency="{{ $product->currency }}"
                            data-product-category="{{ $product->category?->name ?? 'Product' }}"
                            data-product-url="{{ route('product.view', $product) }}" aria-label="Add to wishlist">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>

                    <div class="product-view-benefits">
                        <div>
                            <i class="bi bi-patch-check"></i>
                            <span>
                                <strong>Quality Checked</strong>
                                Carefully selected products
                            </span>
                        </div>

                        <div>
                            <i class="bi bi-box-seam"></i>
                            <span>
                                <strong>Reliable Delivery</strong>
                                Secure product handling
                            </span>
                        </div>

                        <div>
                            <i class="bi bi-headset"></i>
                            <span>
                                <strong>Customer First</strong>
                                Dedicated support
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-view-details">
                <div class="product-view-tabs">
                    <button type="button" class="active" data-tab="description">Description</button>
                    <button type="button" data-tab="details">Product Details</button>
                    <button type="button" data-tab="shipping">Shipping</button>
                    <button type="button" data-tab="reviews">Reviews</button>
                </div>

                <div class="product-view-tab-content active" id="tab-description">
                    <div class="product-view-content-heading">
                        <span>01 </span>
                        <div>
                            <span>ABOUT THE PRODUCT </span>
                            <h2> Designed with purpose.</h2>
                        </div>
                    </div>

                    <p>{{ $product->description }} </p>
                </div>

                <div class="product-view-tab-content" id="tab-details">
                    <div class="product-view-specifications">
                        <div>
                            <span>Category</span>
                            <strong>{{ $product->category?->name ?? 'N/A' }}</strong>
                        </div>

                        <div>
                            <span>Brand</span>
                            <strong>{{ $product->brand?->name ?? 'N/A' }}</strong>
                        </div>

                        <div>
                            <span>SKU</span>
                            <strong>{{ $product->sku }}</strong>
                        </div>

                        <div>
                            <span>Material</span>
                            <strong>{{ $product->material ?? 'Premium Material' }}</strong>
                        </div>

                        <div>
                            <span>Origin</span>
                            <strong>{{ $product->origin ?? 'European Collection' }}</strong>
                        </div>

                        <div>
                            <span>Fit</span>
                            <strong>{{ $product->fit ?? 'Regular Fit' }}</strong>
                        </div>

                        <div>
                            <span>Availability</span>
                            <strong>{{ $product->availability }}</strong>
                        </div>

                        <div>
                            <span>Stock</span>
                            <strong>{{ $product->stock }}</strong>
                        </div>
                    </div>
                </div>

                <div class="product-view-tab-content" id="tab-shipping">
                    <div class="product-view-shipping">
                        <div>
                            <i class="bi bi-box-seam"></i>
                            <h3>Carefully Packed</h3>
                            <p>Every product is prepared and packed with attention to quality and presentation.</p>
                        </div>

                        <div>
                            <i class="bi bi-truck"></i>
                            <h3>Reliable Delivery</h3>
                            <p>We work with reliable logistics partners to provide dependable delivery.</p>
                        </div>


                        <div>
                            <i class="bi bi-shield-check"></i>

                            <h3>
                                Secure Handling
                            </h3>

                            <p>
                                Your selected products are handled carefully throughout the fulfillment process.
                            </p>

                        </div>


                    </div>

                </div>


                {{-- Reviews --}}
                <div class="product-view-tab-content" id="tab-reviews">

                    <div class="product-view-review-summary">


                        <div class="product-view-review-score">

                            <strong>
                                {{ number_format($product->rating, 1) }}
                            </strong>


                            <div class="product-stars">

                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi {{ $i <= round($product->rating) ? 'bi-star-fill' : 'bi-star' }}">
                                    </i>
                                @endfor

                            </div>


                            <span>
                                {{ $product->review_count }}
                                customer reviews
                            </span>

                        </div>


                        <div class="product-view-review-message">

                            <span>
                                CUSTOMER EXPERIENCE
                            </span>

                            <h3>
                                A product selected with confidence.
                            </h3>

                            <p>
                                Our collection focuses on quality, presentation and dependable customer experience.
                            </p>

                        </div>


                    </div>

                </div>

            </div>

            @if ($relatedProducts->count())
                <div class="product-view-related">
                    <div class="product-view-related-heading">
                        <div>
                            <span>YOU MAY ALSO LIKE</span>
                            <h2>Explore More</h2>
                        </div>

                        <a href="{{ route('product') }}">
                            View Collection
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>

                    <div class="product-view-related-grid">
                        @foreach ($relatedProducts as $related)
                            <article class="product-related-card">
                                <a href="{{ route('product.view', $related) }}" class="product-related-image">
                                    @if ($related->badge)
                                        <span>{{ $related->badge }}</span>
                                    @endif
                                    <img src="{{ asset($related->image) }}" alt="{{ $related->name }}">
                                </a>

                                <div class="product-related-body">
                                    <small>{{ $related->category?->name ?? 'Product' }} </small>
                                    <h3>
                                        <a href="{{ route('product.view', $related) }}">{{ $related->name }}</a>
                                    </h3>

                                    <div>
                                        <strong>
                                            {{ $related->currency }}
                                            {{ number_format($related->price, 2) }}
                                        </strong>

                                        <a href="{{ route('product.view', $related) }}">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="product-image-modal" id="productImageModal">
        <button type="button" id="productImageModalClose" aria-label="Close image">
            <i class="bi bi-x-lg"></i>
        </button>
        <img id="productImageModalImage" src="" alt="{{ $product->name }}">
    </div>

    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_gallery.js') }}"></script>
    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_quantity.js') }}"></script>
    <script src="{{ asset('js/custom_frontend/product_page/product_view/product_view_ui.js') }}"></script>
    @include('custom_layout.footer')
@endsection
