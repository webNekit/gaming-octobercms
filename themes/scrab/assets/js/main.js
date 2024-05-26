
const swiper = new Swiper(".header-swiper", {
    slidesPerView: 1,
    autoplay: {
        delay: 1000,
    },
    loop: true,
});

const swiper2 = new Swiper(".portfolio-swiper", {
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

AOS.init();