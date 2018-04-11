jQuery(function ($) {
    //accordion
    $( "#accordion" ).accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        autoHeight: false
    });
    //tabs faq

    // Hide user info
    $('.user_info_header').click (function() {
        $('.user_info').hide()
    });
    //slick carousel

    $(".variable").slick({
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        variableWidth: true,
        centerMode: true,
    });
});

