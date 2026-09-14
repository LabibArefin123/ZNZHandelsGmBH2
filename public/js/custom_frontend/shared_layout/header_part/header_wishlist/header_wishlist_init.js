document.addEventListener("DOMContentLoaded", function () {
    "use strict";

    const clearButton = document.getElementById("clearWishlist");
    const modal = document.getElementById("headerWishlistModal");
    const storageKey = window.ZNZWishlistStorage.key;

    if (clearButton) {
        clearButton.addEventListener("click", function () {
            window.ZNZWishlist.clear();
        });
    }

    if (modal) {
        modal.addEventListener("show.bs.modal", function () {
            window.ZNZWishlistRender.render();
            window.ZNZWishlist.sync();
        });

        modal.addEventListener("shown.bs.modal", function () {
            window.ZNZWishlistRender.render();
        });
    }

    window.addEventListener("storage", function (event) {
        if (event.key === storageKey) {
            window.ZNZWishlistRender.render();
            window.ZNZWishlist.sync();
        }
    });

    window.ZNZWishlistRender.render();
    window.ZNZWishlist.sync();
});
