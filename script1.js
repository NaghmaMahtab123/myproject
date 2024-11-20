var swiper = new Swiper('.sliding', {
    pagination: '.swiper-pagination',
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflow: {
 rotate: 20,
 stretch: 0,
 depth: 200,
 modifier: 1,
 slideShadows: true,
    },
    loop: true,
 }) ;