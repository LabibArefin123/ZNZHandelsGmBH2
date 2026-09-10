document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("productQuantity");
    const minus = document.getElementById("quantityMinus");
    const plus = document.getElementById("quantityPlus");
    if (!input) return;
    const getValue = function () {
        const value = parseInt(input.value, 10);
        return Number.isFinite(value) ? value : 1;
    };
    const animate = function () {
        input.style.transform = "scale(1.08)";
        setTimeout(function () {
            input.style.transform = "scale(1)";
        }, 150);
    };
    if (minus) {
        minus.addEventListener("click", function () {
            const min = parseInt(input.min, 10) || 1;
            const value = Math.max(min, getValue() - 1);
            input.value = value;
            animate();
        });
    }
    if (plus) {
        plus.addEventListener("click", function () {
            const min = parseInt(input.min, 10) || 1;
            const max = parseInt(input.max, 10) || 99;
            const value = Math.min(max, Math.max(min, getValue() + 1));
            input.value = value;
            animate();
        });
    }
    input.addEventListener("change", function () {
        const min = parseInt(input.min, 10) || 1;
        const max = parseInt(input.max, 10) || 99;
        let value = getValue();
        value = Math.max(min, Math.min(max, value));
        input.value = value;
    });
});
