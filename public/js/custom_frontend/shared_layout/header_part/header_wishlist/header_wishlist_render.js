(function () {
    "use strict";

    function updateCount(items) {
        const count = document.getElementById("headerWishlistCount");
        const modalCount = document.getElementById("wishlistModalCount");
        const total = items.length;

        if (count) {
            count.textContent = total > 99 ? "99+" : total;
            count.style.display = total > 0 ? "flex" : "none";
        }

        if (modalCount) {
            modalCount.textContent =
                total + " Product" + (total !== 1 ? "s" : "");
        }
    }

    function renderWishlist() {
        const list = document.getElementById("headerWishlistList");
        const empty = document.getElementById("headerWishlistEmpty");

        if (!list || !empty) {
            return;
        }

        const items = window.ZNZWishlistStorage.get();

        list.innerHTML = "";

        updateCount(items);

        empty.classList.toggle("show", items.length === 0);

        items.forEach(function (product) {
            const li = document.createElement("li");
            li.className = "header-wishlist-item";

            const wrapper = document.createElement("div");
            wrapper.className = "header-wishlist-product";

            const imageWrapper = document.createElement("div");
            imageWrapper.className = "header-wishlist-product-image";

            const image = document.createElement("img");
            image.src = product.image || "";
            image.alt = product.name || "Product";

            imageWrapper.appendChild(image);

            const content = document.createElement("div");
            content.className = "header-wishlist-product-content";

            const category = document.createElement("span");
            category.textContent = product.category || "Product";

            const name = document.createElement("h3");
            name.textContent = product.name || "Product";

            const price = document.createElement("strong");
            price.textContent =
                (product.currency || "") + " " + (product.price || "");

            content.appendChild(category);
            content.appendChild(name);
            content.appendChild(price);

            const actions = document.createElement("div");
            actions.className = "header-wishlist-actions";

            const view = document.createElement("a");
            view.href = product.url || "#";
            view.className = "header-wishlist-view";
            view.setAttribute("aria-label", "View product");
            view.setAttribute("title", "View product");
            view.innerHTML = '<i class="bi bi-arrow-up-right"></i>';

            const remove = document.createElement("button");
            remove.type = "button";
            remove.className = "header-wishlist-remove";
            remove.dataset.id = product.id;
            remove.setAttribute("aria-label", "Remove from wishlist");
            remove.setAttribute("title", "Remove from wishlist");
            remove.innerHTML = '<i class="bi bi-x-lg"></i>';

            remove.addEventListener("click", function () {
                window.ZNZWishlist.remove(this.dataset.id);
            });

            actions.appendChild(view);
            actions.appendChild(remove);

            wrapper.appendChild(imageWrapper);
            wrapper.appendChild(content);
            wrapper.appendChild(actions);

            li.appendChild(wrapper);
            list.appendChild(li);
        });
    }

    window.ZNZWishlistRender = {
        updateCount: updateCount,
        render: renderWishlist,
    };
})();
