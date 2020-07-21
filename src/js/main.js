const $testimoninalSlider = $('#js-testimonial-slider');

new Swiper($testimoninalSlider[0], {
    loop: true,
    speed: 1000,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.testimonial-button-next',
        prevEl: '.testimonial-button-prev',
    }
});