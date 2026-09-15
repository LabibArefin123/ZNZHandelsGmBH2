function resetProductFilters() {
    productFilters = {
        category: "all",
        brand: "all",
        price: null,
        size: "all",
        tag: "all",
        search: "",
    };

    productSearch.value = "";
    productSearch.parentElement.classList.remove("has-value");
    productSort.value = "default";

    document
        .querySelectorAll(
            ".product-filter-option,.product-size-option,.product-tags button",
        )
        .forEach((el) => el.classList.remove("active"));

    const defaultCategory = document.querySelector(
        '[data-filter-type="category"][data-filter-value="all"]',
    );

    if (defaultCategory) defaultCategory.classList.add("active");

    filterProducts();
}

function initProductFilterReset() {
    productReset.addEventListener("click", resetProductFilters);
    productEmptyReset.addEventListener("click", resetProductFilters);
}
