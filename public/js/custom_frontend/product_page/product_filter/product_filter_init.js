document.addEventListener("DOMContentLoaded", function () {
    window.productGrid = document.getElementById("productGrid");
    window.productFilterItems = [...document.querySelectorAll(".product-item")];
    window.productResultCount = document.getElementById("productResultCount");
    window.productResultText = document.getElementById("productResultText");
    window.productSearch = document.getElementById("productSearch");
    window.productClearSearch = document.getElementById("clearProductSearch");
    window.productSort = document.getElementById("productSort");
    window.productEmpty = document.getElementById("productEmpty");
    window.productReset = document.getElementById("resetProductFilters");
    window.productEmptyReset = document.getElementById("emptyReset");

    initProductFilterButtons();
    initProductFilterSearch();
    initProductFilterReset();
    filterProducts();
});
