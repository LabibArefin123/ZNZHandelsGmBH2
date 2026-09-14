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
                        <small>{{ $related->category?->name ?? 'Product' }}</small>

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
