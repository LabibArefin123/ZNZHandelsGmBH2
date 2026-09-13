document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.querySelector(".header-toggler");
    const navbar = document.querySelector("#navbarNav");
    const navLinks = document.querySelectorAll(".header-nav-list .nav-link");

    if (!toggler || !navbar) {
        return;
    }

    navLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            navLinks.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");

            if (
                window.innerWidth <= 991.98 &&
                navbar.classList.contains("show")
            ) {
                if (window.bootstrap) {
                    const collapse =
                        bootstrap.Collapse.getOrCreateInstance(navbar);
                    collapse.hide();
                }
            }
        });
    });

    navbar.addEventListener("show.bs.collapse", function () {
        toggler.classList.add("is-open");
        toggler.setAttribute("aria-expanded", "true");
    });

    navbar.addEventListener("hide.bs.collapse", function () {
        toggler.classList.remove("is-open");
        toggler.setAttribute("aria-expanded", "false");
    });
});
