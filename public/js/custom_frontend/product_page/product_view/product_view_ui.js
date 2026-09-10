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
    if (wishlist) {
        wishlist.addEventListener("click", function () {
            this.classList.toggle("active");
            const icon = this.querySelector("i");
            if (icon) {
                icon.classList.toggle("bi-heart");
                icon.classList.toggle("bi-heart-fill");
            }
        });
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
