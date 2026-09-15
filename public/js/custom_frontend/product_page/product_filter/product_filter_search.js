function initProductFilterSearch() {
    productSearch.addEventListener("input", function () {
        productFilters.search = this.value;
        productSearch.parentElement.classList.toggle("has-value", !!this.value);
        filterProducts();
    });

    productClearSearch.addEventListener("click", function () {
        productSearch.value = "";
        productFilters.search = "";
        productSearch.parentElement.classList.remove("has-value");
        filterProducts();
        productSearch.focus();
    });

    productSort.addEventListener("change", filterProducts);
}
