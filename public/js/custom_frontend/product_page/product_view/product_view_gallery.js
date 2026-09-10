document.addEventListener("DOMContentLoaded", function () {
    const mainImage = document.getElementById("productViewMainImage");
    const thumbnails = document.querySelectorAll(".product-view-thumb");
    const expandButton = document.getElementById("productViewExpand");
    const modal = document.getElementById("productImageModal");
    const modalImage = document.getElementById("productImageModalImage");
    const modalClose = document.getElementById("productImageModalClose");
    if (!mainImage) return;
    thumbnails.forEach(function (thumbnail) {
        thumbnail.addEventListener("click", function () {
            const image = this.dataset.image;
            if (!image) return;
            thumbnails.forEach(function (item) {
                item.classList.remove("active");
            });
            this.classList.add("active");
            mainImage.style.opacity = "0";
            setTimeout(function () {
                mainImage.src = image;
                mainImage.style.opacity = "1";
            }, 150);
        });
    });
    function openModal() {
        if (!modal || !modalImage) return;
        modalImage.src = mainImage.src;
        modal.classList.add("show");
        document.body.style.overflow = "hidden";
    }
    function closeModal() {
        if (!modal) return;
        modal.classList.remove("show");
        document.body.style.overflow = "";
    }
    if (expandButton) expandButton.addEventListener("click", openModal);
    if (modalClose) modalClose.addEventListener("click", closeModal);
    if (modal) {
        modal.addEventListener("click", function (event) {
            if (event.target === modal) closeModal();
        });
    }
    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") closeModal();
    });
});
