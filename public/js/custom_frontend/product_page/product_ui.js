document.addEventListener("DOMContentLoaded", function () {
    const filter = document.getElementById("productFilter"),
        overlay = document.getElementById("productFilterOverlay"),
        open = document.getElementById("productFilterToggle"),
        close = document.getElementById("closeProductFilter");
    function openFilter() {
        filter.classList.add("open");
        overlay.classList.add("show");
        document.body.classList.add("product-filter-open");
    }
    function closeFilter() {
        filter.classList.remove("open");
        overlay.classList.remove("show");
        document.body.classList.remove("product-filter-open");
    }
    open?.addEventListener("click", openFilter);
    close?.addEventListener("click", closeFilter);
    overlay?.addEventListener("click", closeFilter);
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeFilter();
    });
    document.querySelectorAll(".product-wishlist").forEach((button) =>
        button.addEventListener("click", function (e) {
            e.preventDefault();
            this.classList.toggle("active");
            const icon = this.querySelector("i");
            icon.classList.toggle("bi-heart");
            icon.classList.toggle("bi-heart-fill");
            this.animate(
                [
                    { transform: "scale(1)" },
                    { transform: "scale(1.2)" },
                    { transform: "scale(1)" },
                ],
                { duration: 300, easing: "ease-out" },
            );
        }),
    );
    document.querySelectorAll(".product-quick-view").forEach((button) =>
        button.addEventListener("click", function () {
            const card = this.closest(".product-card"),
                name = card.querySelector("h3")?.textContent || "Product";
            button.classList.add("clicked");
            setTimeout(() => button.classList.remove("clicked"), 300);
            console.log("Quick view:", name);
        }),
    );
});
