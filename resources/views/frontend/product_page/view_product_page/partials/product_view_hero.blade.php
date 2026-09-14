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

            <button type="button" class="product-view-expand" id="productViewExpand" aria-label="View larger image">
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
                        <i class="bi {{ $i <= round($product->rating) ? 'bi-star-fill' : 'bi-star' }}"></i>
                    @endfor
                </span>

                <strong>{{ number_format($product->rating, 1) }}</strong>
                <span>({{ $product->review_count }} Reviews)</span>
            </div>

            <span class="product-view-sku">SKU: {{ $product->sku }}</span>
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
                            <span style="--option-color:{{ strtolower($color) }}"></span>
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
                <span>Add to Collection</span>
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
