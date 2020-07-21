const $testimoninalSlider = $('#js-testimonial-slider');
const $headerMenu = $('.header-menu');
const $headerNav = $('.header-nav');

$headerMenu.on('click', function() {
    const $this = $(this);

    $this.toggleClass('is-active');
    $headerNav.slideToggle();
})

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