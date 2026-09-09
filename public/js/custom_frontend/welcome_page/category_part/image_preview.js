document.addEventListener("DOMContentLoaded", function () {
    const list = document.getElementById("categoryList");
    const image = document.getElementById("categoryPreviewImage");
    const title = document.getElementById("categoryPreviewTitle");
    const number = document.getElementById("categoryPreviewNumber");
    const progress = document.getElementById("categoryPreviewProgress");
    const content = document.querySelector(".category-preview-content");
    const viewButton = document.querySelector(".category-preview-view");
    if (!list || !image || !title || !number) return;
    const items = [...list.querySelectorAll(".category-item")];
    if (!items.length) return;
    let current = 0;
    let timer = null;
    let paused = false;
    const duration = 5000;
    function update(index, manual = false) {
        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;
        current = index;
        const item = items[index];
        const newImage = item.dataset.image;
        const newTitle = item.dataset.title;
        items.forEach((el) => el.classList.remove("active"));
        item.classList.add("active");
        image.classList.remove("is-visible", "reveal");
        content.classList.add("is-changing");
        if (progress) {
            progress.classList.remove("running");
            void progress.offsetWidth;
            if (!paused) progress.classList.add("running");
        }
        setTimeout(() => {
            image.src = newImage;
            image.alt = newTitle;
            title.textContent = newTitle;
            number.textContent = String(index + 1).padStart(2, "0");
            if (viewButton) viewButton.dataset.bsImage = newImage;
            image.classList.add("reveal", "is-visible");
            content.classList.remove("is-changing");
        }, 220);
        if (manual) restart();
    }
    function next() {
        if (!paused) update((current + 1) % items.length);
    }
    function start() {
        clearInterval(timer);
        timer = setInterval(next, duration);
        if (progress && !paused) {
            progress.classList.remove("running");
            void progress.offsetWidth;
            progress.classList.add("running");
        }
    }
    function stop() {
        clearInterval(timer);
        timer = null;
    }
    function restart() {
        stop();
        if (!paused) start();
    }
    items.forEach((item, index) => {
        item.addEventListener("click", function () {
            update(index, true);
        });
    });
    const frame = document.querySelector(".category-preview-frame");
    if (frame) {
        frame.addEventListener("mouseenter", function () {
            paused = true;
            stop();
            if (progress) progress.classList.remove("running");
        });
        frame.addEventListener("mouseleave", function () {
            paused = false;
            start();
        });
    }
    image.addEventListener("load", function () {
        image.classList.add("is-visible");
    });
    update(0);
    start();
});
