jQuery(function ($) {

    $('.sponsors_slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrow: true,
        nextArrow: '<i aria-hidden="true" class="fa fa-chevron-right text-muted h5"></i>',
        prevArrow: '<i aria-hidden="true" class="fa fa-chevron-left text-muteds h5"></i>',
        adaptiveHeight: true,
    });
});