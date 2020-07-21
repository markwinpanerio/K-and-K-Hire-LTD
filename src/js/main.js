const $testimoninalSlider = $('#js-testimonial-slider');
const $headerMenu = $('.header-menu');
const $headerNav = $('.header-nav');

$headerMenu.on('click', function() {
    const $this = $(this);

    $this.toggleClass('is-active');
    $headerNav.slideToggle();
})

$(window).on('resize', function() {
    if($(window).outerWidth() > 768) {
        $headerMenu.removeClass('is-active');
        $headerNav.slideDown();
    } else {
        $headerNav.hide();
    }
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