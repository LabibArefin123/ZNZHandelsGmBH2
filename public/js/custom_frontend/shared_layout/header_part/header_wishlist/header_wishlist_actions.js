(function () {
    "use strict";

    function removeWishlistItem(id) {
        const items = window.ZNZWishlistStorage.get().filter(function (item) {
            return String(item.id) !== String(id);
        });

        window.ZNZWishlistStorage.save(items);

        window.ZNZWishlistRender.render();
        window.ZNZWishlist.sync();
    }

    function clearWishlist() {
        window.ZNZWishlistStorage.save([]);

        window.ZNZWishlistRender.render();
        window.ZNZWishlist.sync();
    }

    function addWishlistItem(product) {
        if (!product || !product.id) {
            return;
        }

        const items = window.ZNZWishlistStorage.get();

        const exists = items.some(function (item) {
            return String(item.id) === String(product.id);
        });

        if (!exists) {
            items.push(product);
            window.ZNZWishlistStorage.save(items);
        }

        window.ZNZWishlistRender.render();
        window.ZNZWishlist.sync();
    }

    function hasWishlistItem(id) {
        return window.ZNZWishlistStorage.has(id);
    }

    window.ZNZWishlist = {
        get: window.ZNZWishlistStorage.get,
        add: addWishlistItem,
        remove: removeWishlistItem,
        clear: clearWishlist,
        has: hasWishlistItem,
        sync: function () {},
    };
})();
