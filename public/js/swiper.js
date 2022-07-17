const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    loop: true,
    grabCursor: true,
    breakpoints: {
        980: {
            slidesPerView: 5,
        },
    },
    autoplay: {
        delay: 650,
        disableOnInteraction: false,
    },
});