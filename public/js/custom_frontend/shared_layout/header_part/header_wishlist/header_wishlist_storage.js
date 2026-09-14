(function () {
    "use strict";

    const storageKey = "znzWishlist";

    function getWishlist() {
        try {
            const items = JSON.parse(localStorage.getItem(storageKey));
            return Array.isArray(items) ? items : [];
        } catch (error) {
            return [];
        }
    }

    function saveWishlist(items) {
        localStorage.setItem(storageKey, JSON.stringify(items));
    }

    function hasWishlistItem(id) {
        return getWishlist().some(function (item) {
            return String(item.id) === String(id);
        });
    }

    window.ZNZWishlistStorage = {
        key: storageKey,
        get: getWishlist,
        save: saveWishlist,
        has: hasWishlistItem,
    };
})();
