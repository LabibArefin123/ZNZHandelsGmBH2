function initProductFilterButtons() {
    document.querySelectorAll(".product-filter-option").forEach((button) => {
        button.addEventListener("click", function () {
            const type = this.dataset.filterType;

            if (type === "category") {
                productFilters.category = this.dataset.filterValue;
                activateProductFilter(type, this);
            }

            if (type === "brand") {
                productFilters.brand = this.dataset.filterValue;
                activateProductFilter(type, this);
            }

            if (type === "price") {
                productFilters.price = {
                    min: parseFloat(this.dataset.min),
                    max: parseFloat(this.dataset.max),
                };
                activateProductFilter(type, this);
            }

            filterProducts();
        });
    });

    document.querySelectorAll(".product-size-option").forEach((button) => {
        button.addEventListener("click", function () {
            if (this.classList.contains("active")) {
                this.classList.remove("active");
                productFilters.size = "all";
            } else {
                document
                    .querySelectorAll(".product-size-option")
                    .forEach((el) => el.classList.remove("active"));
                this.classList.add("active");
                productFilters.size = this.dataset.filterValue;
            }

            filterProducts();
        });
    });

    document.querySelectorAll(".product-tags button").forEach((button) => {
        button.addEventListener("click", function () {
            if (this.classList.contains("active")) {
                this.classList.remove("active");
                productFilters.tag = "all";
            } else {
                document
                    .querySelectorAll(".product-tags button")
                    .forEach((el) => el.classList.remove("active"));
                this.classList.add("active");
                productFilters.tag = this.dataset.filterValue;
            }

            filterProducts();
        });
    });
}
