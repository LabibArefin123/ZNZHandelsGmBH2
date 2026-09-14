document.querySelectorAll(".product-wishlist").forEach(function (button) {
    button.addEventListener("click", function (event) {
        event.preventDefault();

        if (!window.ZNZWishlist) {
            return;
        }

        const product = {
            id: this.dataset.productId,
            name: this.dataset.productName,
            image: this.dataset.productImage,
            price: this.dataset.productPrice,
            currency: this.dataset.productCurrency,
            category: this.dataset.productCategory,
            url: this.dataset.productUrl,
        };

        if (window.ZNZWishlist.has(product.id)) {
            window.ZNZWishlist.remove(product.id);
        } else {
            window.ZNZWishlist.add(product);
        }

        this.animate(
            [
                { transform: "scale(1)" },
                { transform: "scale(1.2)" },
                { transform: "scale(1)" },
            ],
            {
                duration: 300,
                easing: "ease-out",
            },
        );
    });
});
