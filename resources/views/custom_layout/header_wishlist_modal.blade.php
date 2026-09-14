<div class="modal fade header-wishlist-modal" id="headerWishlistModal" tabindex="-1"
    aria-labelledby="headerWishlistModalLabel" aria-hidden="true" data-bs-backdrop="false">

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div class="header-modal-heading">
                    <span>YOUR COLLECTION</span>
                    <h2 id="headerWishlistModalLabel">Wishlist</h2>
                </div>

                <button type="button" class="header-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="modal-body">

                <div class="header-wishlist-summary">
                    <div>
                        <span>SAVED PRODUCTS</span>
                        <strong id="wishlistModalCount">0 Products</strong>
                    </div>

                    <button type="button" class="header-wishlist-clear" id="clearWishlist">
                        <i class="bi bi-trash3"></i>
                        Clear All
                    </button>
                </div>

                <div class="header-wishlist-results">
                    <ul class="header-wishlist-list" id="headerWishlistList"></ul>

                    <div class="header-wishlist-empty" id="headerWishlistEmpty">
                        <div class="header-wishlist-empty-icon">
                            <i class="bi bi-heart"></i>
                        </div>

                        <span>YOUR WISHLIST IS EMPTY</span>

                        <h3>Save something you love.</h3>

                        <p>
                            Add products to your wishlist and keep your favourite
                            collections close at hand.
                        </p>

                        <a href="{{ route('product') }}" class="header-wishlist-browse">
                            Explore Collection
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
