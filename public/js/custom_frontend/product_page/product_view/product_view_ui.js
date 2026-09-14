document.addEventListener("DOMContentLoaded", function () {
    const colors = document.querySelectorAll(".product-view-color");
    const sizes = document.querySelectorAll(".product-view-size");
    const selectedColor = document.getElementById("selectedColor");
    const selectedSize = document.getElementById("selectedSize");
    const wishlist = document.getElementById("productWishlist");
    const addCart = document.getElementById("productAddCart");
    const tabs = document.querySelectorAll(".product-view-tabs button");
    const tabContents = document.querySelectorAll(".product-view-tab-content");
    colors.forEach(function (button) {
        button.addEventListener("click", function () {
            colors.forEach(function (item) {
                item.classList.remove("active");
            });
            this.classList.add("active");
            if (selectedColor)
                selectedColor.textContent = this.dataset.color || "";
        });
    });
    sizes.forEach(function (button) {
        button.addEventListener("click", function () {
            sizes.forEach(function (item) {
                item.classList.remove("active");
            });
            this.classList.add("active");
            if (selectedSize)
                selectedSize.textContent = this.dataset.size || "";
        });
    });
    if (wishlist && window.ZNZWishlist) {
        const product = {
            id: wishlist.dataset.productId,
            name: wishlist.dataset.productName,
            image: wishlist.dataset.productImage,
            price: wishlist.dataset.productPrice,
            currency: wishlist.dataset.productCurrency,
            category: wishlist.dataset.productCategory,
            url: wishlist.dataset.productUrl,
        };

        function syncWishlistButton() {
            const saved = window.ZNZWishlist.has(product.id);

            wishlist.classList.toggle("active", saved);

            const icon = wishlist.querySelector("i");

            if (icon) {
                icon.classList.remove(
                    "bi-heart",
                    "bi-heart-fill",
                    "bi-check",
                    "bi-check-lg",
                );

                icon.classList.add(saved ? "bi-check-lg" : "bi-heart");
            }

            wishlist.setAttribute(
                "aria-label",
                saved ? "Remove from wishlist" : "Add to wishlist",
            );
        }

        wishlist.addEventListener("click", function () {
            if (window.ZNZWishlist.has(product.id)) {
                window.ZNZWishlist.remove(product.id);
            } else {
                window.ZNZWishlist.add(product);
            }

            syncWishlistButton();
        });

        syncWishlistButton();
    }
    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            const target = this.dataset.tab;
            tabs.forEach(function (item) {
                item.classList.remove("active");
            });
            tabContents.forEach(function (item) {
                item.classList.remove("active");
            });
            this.classList.add("active");
            const content = document.getElementById("tab-" + target);
            if (content) content.classList.add("active");
        });
    });
    if (addCart) {
        addCart.addEventListener("click", function () {
            if (this.classList.contains("added")) return;
            const original = this.innerHTML;
            this.classList.add("added");
            this.innerHTML =
                '<span>Added to Collection</span><i class="bi bi-check2"></i>';
            setTimeout(function () {
                addCart.classList.remove("added");
                addCart.innerHTML = original;
            }, 1800);
        });
    }
});
