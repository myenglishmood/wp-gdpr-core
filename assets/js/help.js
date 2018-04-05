jQuery(function ($) {
    $( "#accordion" ).accordion({collapsible: true, active: false });
    //slick carousel
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: 300
    });
});

