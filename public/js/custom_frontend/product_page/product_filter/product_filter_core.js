function filterProducts() {
    const query = productFilters.search.toLowerCase().trim();
    let visible = productFilterItems.filter((item) => {
        const name = item.dataset.name.toLowerCase(),
            category = item.dataset.category.toLowerCase(),
            brand = item.dataset.brand.toLowerCase(),
            price = parseFloat(item.dataset.price),
            sizes = item.dataset.size.toLowerCase(),
            tags = item.dataset.tags.toLowerCase();

        return (
            (productFilters.category === "all" ||
                category.includes(productFilters.category)) &&
            (productFilters.brand === "all" ||
                brand.includes(productFilters.brand)) &&
            (!productFilters.price ||
                (price >= productFilters.price.min &&
                    price <= productFilters.price.max)) &&
            (productFilters.size === "all" ||
                sizes.includes(productFilters.size)) &&
            (productFilters.tag === "all" ||
                tags.includes(productFilters.tag)) &&
            (!query ||
                name.includes(query) ||
                category.includes(query) ||
                brand.includes(query) ||
                tags.includes(query))
        );
    });

    applyProductSort(visible);

    productFilterItems.forEach((item) => {
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

    productResultCount.textContent = visible.length;
    productResultText.textContent =
        visible.length === productFilterItems.length
            ? "Showing all available products"
            : `Showing ${visible.length} matching product${visible.length !== 1 ? "s" : ""}`;

    productEmpty.classList.toggle("show", visible.length === 0);
}

function applyProductSort(visible) {
    const value = productSort.value;

    visible.sort((a, b) => {
        if (value === "low")
            return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
        if (value === "high")
            return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
        if (value === "az") return a.dataset.name.localeCompare(b.dataset.name);
        if (value === "za") return b.dataset.name.localeCompare(a.dataset.name);
        return productFilterItems.indexOf(a) - productFilterItems.indexOf(b);
    });

    visible.forEach((item) => productGrid.appendChild(item));
}

function activateProductFilter(type, button) {
    document
        .querySelectorAll(`[data-filter-type="${type}"]`)
        .forEach((el) => el.classList.remove("active"));
    button.classList.add("active");
}
