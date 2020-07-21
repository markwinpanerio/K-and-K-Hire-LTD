'use strict';

var $testimoninalSlider = $('#js-testimonial-slider');
var $headerMenu = $('.header-menu');
var $headerNav = $('.header-nav');

$headerMenu.on('click', function () {
    var $this = $(this);

    $this.toggleClass('is-active');
    $headerNav.slideToggle();
});

$(window).on('resize', function () {
    if ($(window).outerWidth() > 768) {
        $headerMenu.removeClass('is-active');
        $headerNav.slideDown();
    } else {
        $headerNav.hide();
    }
});

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
        prevEl: '.testimonial-button-prev'
    }
});