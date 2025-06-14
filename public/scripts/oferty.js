document.addEventListener("DOMContentLoaded", () => {
    const offers = document.querySelectorAll(".offer");

    offers.forEach((offer, index) => {
        offer.style.opacity = 0;
        offer.style.transition = "opacity 0.6s ease";
        setTimeout(() => {
            offer.style.opacity = 1;
        }, index * 100); // efekt fali
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".pagination button");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            buttons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
        });
    });
});
