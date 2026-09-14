<div class="modal fade header-search-modal" id="headerSearchModal" tabindex="-1" aria-labelledby="headerSearchModalLabel"
    aria-hidden="true" data-bs-backdrop="false">

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div class="header-modal-heading">
                    <span>ZNZ HANDELS GMBH</span>
                    <h2 id="headerSearchModalLabel">Find a Product</h2>
                </div>

                <button type="button" class="header-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="modal-body">

                <div class="header-search-input-wrap">
                    <i class="bi bi-search"></i>

                    <input type="search" id="headerProductSearch" class="header-product-search"
                        placeholder="Search products, categories or brands..." autocomplete="off">

                    <button type="button" id="clearHeaderSearch" class="header-search-clear" aria-label="Clear search">
                        <i class="bi bi-x"></i>
                    </button>
                </div>

                <div class="header-search-summary">
                    <span>AVAILABLE COLLECTION</span>
                    <strong id="headerSearchResultCount">
                        {{ $headerProducts->count() }} Products
                    </strong>
                </div>

                <div class="header-search-results">
                    <ul class="header-search-list" id="headerSearchList">

                        @foreach ($headerProducts as $product)
                            <li class="header-search-item" data-name="{{ strtolower($product->name) }}"
                                data-category="{{ strtolower($product->category?->name ?? '') }}"
                                data-brand="{{ strtolower($product->brand?->name ?? '') }}">

                                <a href="{{ route('product.view', $product) }}" class="header-search-product">

                                    <div class="header-search-product-image">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                    </div>

                                    <div class="header-search-product-content">
                                        <span>
                                            {{ $product->category?->name ?? 'Product' }}
                                            @if ($product->brand)
                                                · {{ $product->brand->name }}
                                            @endif
                                        </span>

                                        <h3>{{ $product->name }}</h3>

                                        <strong>
                                            {{ $product->currency }}
                                            {{ number_format($product->price, 2) }}
                                        </strong>
                                    </div>

                                    <i class="bi bi-arrow-up-right header-search-product-arrow"></i>
                                </a>
                            </li>
                        @endforeach

                    </ul>

                    <div class="header-search-empty" id="headerSearchEmpty">
                        <div>
                            <i class="bi bi-search"></i>
                        </div>
                        <h3>No products found</h3>
                        <p>Try another product name, category or brand.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
