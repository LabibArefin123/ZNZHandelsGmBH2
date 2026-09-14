<div class="product-view-details">
    <div class="product-view-tabs">
        <button type="button" class="active" data-tab="description">Description</button>
        <button type="button" data-tab="details">Product Details</button>
        <button type="button" data-tab="shipping">Shipping</button>
        <button type="button" data-tab="reviews">Reviews</button>
    </div>

    <div class="product-view-tab-content active" id="tab-description">
        <div class="product-view-content-heading">
            <span>01</span>
            <div>
                <span>ABOUT THE PRODUCT</span>
                <h2>Designed with purpose.</h2>
            </div>
        </div>

        <p>{{ $product->description }}</p>
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
                <h3>Secure Handling</h3>
                <p>Your selected products are handled carefully throughout the fulfillment process.</p>
            </div>
        </div>
    </div>

    <div class="product-view-tab-content" id="tab-reviews">
        <div class="product-view-review-summary">
            <div class="product-view-review-score">
                <strong>{{ number_format($product->rating, 1) }}</strong>

                <div class="product-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="bi {{ $i <= round($product->rating) ? 'bi-star-fill' : 'bi-star' }}"></i>
                    @endfor
                </div>

                <span>{{ $product->review_count }} customer reviews</span>
            </div>

            <div class="product-view-review-message">
                <span>CUSTOMER EXPERIENCE</span>
                <h3>A product selected with confidence.</h3>
                <p>Our collection focuses on quality, presentation and dependable customer experience.</p>
            </div>
        </div>
    </div>
</div>
