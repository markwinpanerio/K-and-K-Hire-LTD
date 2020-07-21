const $testimoninalSlider = $('#js-testimonial-slider');

new Swiper($testimoninalSlider[0], {
    loop: true,
    speed: 1000,
    navigation: {
        nextEl: '.testimonial-button-next',
        prevEl: '.testimonial-button-prev',
    }
});