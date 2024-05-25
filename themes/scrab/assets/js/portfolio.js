AOS.init();

const swiper = new Swiper(".portfolio-swiper", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 50,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});