document.addEventListener("DOMContentLoaded", function () {
    const grid = document.getElementById("productGrid"),
        items = [...document.querySelectorAll(".product-item")],
        count = document.getElementById("productResultCount"),
        resultText = document.getElementById("productResultText"),
        search = document.getElementById("productSearch"),
        clearSearch = document.getElementById("clearProductSearch"),
        sort = document.getElementById("productSort"),
        empty = document.getElementById("productEmpty"),
        reset = document.getElementById("resetProductFilters"),
        emptyReset = document.getElementById("emptyReset");
    let filters = {
        category: "all",
        brand: "all",
        price: null,
        size: "all",
        tag: "all",
        search: "",
    };
    function filterProducts() {
        const query = filters.search.toLowerCase().trim();
        let visible = items.filter((item) => {
            const name = item.dataset.name.toLowerCase(),
                category = item.dataset.category.toLowerCase(),
                brand = item.dataset.brand.toLowerCase(),
                price = parseFloat(item.dataset.price),
                sizes = item.dataset.size.toLowerCase(),
                tags = item.dataset.tags.toLowerCase();
            return (
                (filters.category === "all" ||
                    category.includes(filters.category)) &&
                (filters.brand === "all" || brand.includes(filters.brand)) &&
                (!filters.price ||
                    (price >= filters.price.min &&
                        price <= filters.price.max)) &&
                (filters.size === "all" || sizes.includes(filters.size)) &&
                (filters.tag === "all" || tags.includes(filters.tag)) &&
                (!query ||
                    name.includes(query) ||
                    category.includes(query) ||
                    brand.includes(query) ||
                    tags.includes(query))
            );
        });
        applySort(visible);
        items.forEach((item) => {
            if (visible.includes(item)) {
                item.classList.remove("product-hidden", "product-hiding");
                item.classList.add("product-showing");
            } else {
                item.classList.remove("product-showing");
                item.classList.add("product-hiding");
                setTimeout(() => {
                    if (!visible.includes(item))
                        item.classList.add("product-hidden");
                }, 300);
            }
        });
        count.textContent = visible.length;
        resultText.textContent =
            visible.length === items.length
                ? "Showing all available products"
                : `Showing ${visible.length} matching product${visible.length !== 1 ? "s" : ""}`;
        empty.classList.toggle("show", visible.length === 0);
    }
    function applySort(visible) {
        const value = sort.value;
        visible.sort((a, b) => {
            if (value === "low")
                return (
                    parseFloat(a.dataset.price) - parseFloat(b.dataset.price)
                );
            if (value === "high")
                return (
                    parseFloat(b.dataset.price) - parseFloat(a.dataset.price)
                );
            if (value === "az")
                return a.dataset.name.localeCompare(b.dataset.name);
            if (value === "za")
                return b.dataset.name.localeCompare(a.dataset.name);
            return items.indexOf(a) - items.indexOf(b);
        });
        visible.forEach((item) => grid.appendChild(item));
    }
    function activate(type, button) {
        document
            .querySelectorAll(`[data-filter-type="${type}"]`)
            .forEach((el) => el.classList.remove("active"));
        button.classList.add("active");
    }
    document.querySelectorAll(".product-filter-option").forEach((button) =>
        button.addEventListener("click", function () {
            const type = this.dataset.filterType;
            if (type === "category") {
                filters.category = this.dataset.filterValue;
                activate(type, this);
            }
            if (type === "brand") {
                filters.brand = this.dataset.filterValue;
                activate(type, this);
            }
            if (type === "price") {
                filters.price = {
                    min: parseFloat(this.dataset.min),
                    max: parseFloat(this.dataset.max),
                };
                activate(type, this);
            }
            filterProducts();
        }),
    );
    document.querySelectorAll(".product-size-option").forEach((button) =>
        button.addEventListener("click", function () {
            if (this.classList.contains("active")) {
                this.classList.remove("active");
                filters.size = "all";
            } else {
                document
                    .querySelectorAll(".product-size-option")
                    .forEach((el) => el.classList.remove("active"));
                this.classList.add("active");
                filters.size = this.dataset.filterValue;
            }
            filterProducts();
        }),
    );
    document.querySelectorAll(".product-tags button").forEach((button) =>
        button.addEventListener("click", function () {
            if (this.classList.contains("active")) {
                this.classList.remove("active");
                filters.tag = "all";
            } else {
                document
                    .querySelectorAll(".product-tags button")
                    .forEach((el) => el.classList.remove("active"));
                this.classList.add("active");
                filters.tag = this.dataset.filterValue;
            }
            filterProducts();
        }),
    );
    search.addEventListener("input", function () {
        filters.search = this.value;
        search.parentElement.classList.toggle("has-value", !!this.value);
        filterProducts();
    });
    clearSearch.addEventListener("click", function () {
        search.value = "";
        filters.search = "";
        search.parentElement.classList.remove("has-value");
        filterProducts();
        search.focus();
    });
    sort.addEventListener("change", filterProducts);
    function resetFilters() {
        filters = {
            category: "all",
            brand: "all",
            price: null,
            size: "all",
            tag: "all",
            search: "",
        };
        search.value = "";
        search.parentElement.classList.remove("has-value");
        sort.value = "default";
        document
            .querySelectorAll(
                ".product-filter-option,.product-size-option,.product-tags button",
            )
            .forEach((el) => el.classList.remove("active"));
        document
            .querySelector(
                '[data-filter-type="category"][data-filter-value="all"]',
            )
            .classList.add("active");
        filterProducts();
    }
    reset.addEventListener("click", resetFilters);
    emptyReset.addEventListener("click", resetFilters);
    filterProducts();
});
