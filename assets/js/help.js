jQuery(function ($) {
    //accordion
    $("#accordion_core").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        autoHeight: false
    });
    $("#accordion_addons").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        autoHeight: false
    });
    //tabs faq
    $('ul.wp-gdpr_tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.wp-gdpr_tabs li').removeClass('wp-gdpr_current');
        $('.wp-gdpr_tab-content').removeClass('wp-gdpr_current');

        $(this).addClass('wp-gdpr_current');
        $("#" + tab_id).addClass('wp-gdpr_current');
    });

    // Hide user info
    $('.user_info_header').click(function () {
        $('.user_info').hide()
    });
//slick carousel
if ($('.variable').length > 0) {
    $(".variable").slick({
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        variableWidth: true,
        centerMode: true,
    });
}

})
;

