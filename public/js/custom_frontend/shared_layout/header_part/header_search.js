document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("headerSearchModal");
    const input = document.getElementById("headerProductSearch");
    const clearButton = document.getElementById("clearHeaderSearch");
    const list = document.getElementById("headerSearchList");
    const empty = document.getElementById("headerSearchEmpty");
    const count = document.getElementById("headerSearchResultCount");
    const inputWrap = document.querySelector(".header-search-input-wrap");

    if (!modal || !input || !list) {
        return;
    }

    const items = Array.from(list.querySelectorAll(".header-search-item"));

    function filterProducts() {
        const query = input.value.toLowerCase().trim();
        let visibleCount = 0;

        items.forEach(function (item) {
            const name = item.dataset.name || "";
            const category = item.dataset.category || "";
            const brand = item.dataset.brand || "";

            const matches =
                !query ||
                name.includes(query) ||
                category.includes(query) ||
                brand.includes(query);

            item.style.display = matches ? "" : "none";

            if (matches) {
                visibleCount++;
            }
        });

        count.textContent = visibleCount + " Products";

        empty.classList.toggle("show", visibleCount === 0);
        inputWrap.classList.toggle("has-value", input.value.length > 0);
    }

    input.addEventListener("input", filterProducts);

    clearButton?.addEventListener("click", function () {
        input.value = "";
        filterProducts();
        input.focus();
    });

    modal.addEventListener("shown.bs.modal", function () {
        input.focus();
    });

    modal.addEventListener("hidden.bs.modal", function () {
        input.value = "";
        filterProducts();
    });

    filterProducts();
});
