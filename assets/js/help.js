jQuery(function ($) {

    $( "#accordion" ).accordion({
        collapsible: true,
        active: false
    });
    $('.user_info_header').click (function() {
        $('.user_info').hide()

    });
    //slick carousel
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: 300
    });
});

