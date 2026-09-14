document.addEventListener("DOMContentLoaded", function () {
    const list = document.getElementById("headerWishlistList");
    const empty = document.getElementById("headerWishlistEmpty");
    const count = document.getElementById("headerWishlistCount");
    const modalCount = document.getElementById("wishlistModalCount");
    const clearButton = document.getElementById("clearWishlist");

    if (!list) {
        return;
    }

    const storageKey = "znzWishlist";

    function getWishlist() {
        try {
            return JSON.parse(localStorage.getItem(storageKey)) || [];
        } catch (error) {
            return [];
        }
    }

    function saveWishlist(items) {
        localStorage.setItem(storageKey, JSON.stringify(items));
    }

    function updateCount(items) {
        const total = items.length;

        if (count) {
            count.textContent = total > 99 ? "99+" : total;
            count.style.display = total ? "flex" : "none";
        }

        if (modalCount) {
            modalCount.textContent =
                total + " Product" + (total !== 1 ? "s" : "");
        }
    }

    function renderWishlist() {
        const items = getWishlist();

        list.innerHTML = "";

        updateCount(items);

        empty.classList.toggle("show", items.length === 0);

        items.forEach(function (product) {
            const li = document.createElement("li");

            li.className = "header-wishlist-item";

            li.innerHTML = `
                <div class="header-wishlist-product">
                    <div class="header-wishlist-product-image">
                        <img src="${product.image}" alt="${product.name}">
                    </div>

                    <div class="header-wishlist-product-content">
                        <span>${product.category || "Product"}</span>
                        <h3>${product.name}</h3>
                        <strong>${product.currency} ${product.price}</strong>
                    </div>

                    <div class="header-wishlist-actions">
                        <a href="${product.url}"
                            class="header-wishlist-view"
                            aria-label="View product">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                        <button type="button"
                            class="header-wishlist-remove"
                            data-id="${product.id}"
                            aria-label="Remove from wishlist">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                </div>
            `;

            list.appendChild(li);
        });

        list.querySelectorAll(".header-wishlist-remove").forEach(
            function (button) {
                button.addEventListener("click", function () {
                    removeWishlistItem(this.dataset.id);
                });
            },
        );
    }

    function removeWishlistItem(id) {
        const items = getWishlist().filter(function (item) {
            return String(item.id) !== String(id);
        });

        saveWishlist(items);
        renderWishlist();
        syncProductWishlistButtons();
    }

    function clearWishlist() {
        localStorage.removeItem(storageKey);
        renderWishlist();
        syncProductWishlistButtons();
    }

    function syncProductWishlistButtons() {
        const items = getWishlist();

        document
            .querySelectorAll(".product-wishlist")
            .forEach(function (button) {
                const id = button.dataset.productId;

                if (!id) {
                    return;
                }

                const saved = items.some(function (item) {
                    return String(item.id) === String(id);
                });

                button.classList.toggle("active", saved);

                const icon = button.querySelector("i");

                if (icon) {
                    icon.classList.toggle("bi-heart-fill", saved);
                    icon.classList.toggle("bi-heart", !saved);
                }
            });
    }

    window.ZNZWishlist = {
        get: getWishlist,
        add: function (product) {
            const items = getWishlist();

            const exists = items.some(function (item) {
                return String(item.id) === String(product.id);
            });

            if (!exists) {
                items.push(product);
                saveWishlist(items);
            }

            renderWishlist();
            syncProductWishlistButtons();
        },
        remove: removeWishlistItem,
        has: function (id) {
            return getWishlist().some(function (item) {
                return String(item.id) === String(id);
            });
        },
    };

    clearButton?.addEventListener("click", function () {
        clearWishlist();
    });

    renderWishlist();
    syncProductWishlistButtons();

    window.addEventListener("storage", function (event) {
        if (event.key === storageKey) {
            renderWishlist();
            syncProductWishlistButtons();
        }
    });
});
