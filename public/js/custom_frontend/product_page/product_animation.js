document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(
            ".product-filter-option,.product-size-option,.product-tags button",
        ),
        results = document.querySelector(".product-results");
    buttons.forEach((button) =>
        button.addEventListener("click", function () {
            buttons.forEach((el) => el.classList.remove("filter-clicked"));
            this.classList.add("filter-clicked");
            setTimeout(() => this.classList.remove("filter-clicked"), 450);
            if (window.innerWidth < 992)
                setTimeout(
                    () =>
                        results.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        }),
                    180,
                );
        }),
    );
    document.querySelectorAll(".product-filter-title").forEach((title) =>
        title.addEventListener("click", function () {
            const section = this.closest(".product-filter-section");
            section.classList.toggle("collapsed");
        }),
    );
    const cards = document.querySelectorAll(".product-card");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("product-visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12 },
    );
    cards.forEach((card) => observer.observe(card));
});
