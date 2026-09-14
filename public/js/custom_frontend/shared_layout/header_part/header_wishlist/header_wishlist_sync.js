(function () {
    "use strict";

    function syncProductWishlistButtons() {
        const items = window.ZNZWishlistStorage.get();

        document
            .querySelectorAll(".product-wishlist,.product-view-wishlist")
            .forEach(function (button) {
                const id = button.dataset.productId;

                if (!id) {
                    return;
                }

                const saved = items.some(function (item) {
                    return String(item.id) === String(id);
                });

                button.classList.toggle("active", saved);

                const icon = button.querySelector("i");

                if (icon) {
                    icon.classList.remove(
                        "bi-heart",
                        "bi-heart-fill",
                        "bi-check",
                        "bi-check-lg",
                    );

                    icon.classList.add(saved ? "bi-check-lg" : "bi-heart");
                }

                button.setAttribute(
                    "aria-label",
                    saved ? "Remove from wishlist" : "Add to wishlist",
                );

                button.setAttribute(
                    "title",
                    saved ? "Remove from wishlist" : "Add to wishlist",
                );
            });
    }

    window.ZNZWishlist.sync = syncProductWishlistButtons;
})();
