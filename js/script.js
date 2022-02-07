jQuery(document).ready(function () {

    jQuery(window).on("scroll", function() {
        if(jQuery(this).scrollTop() > 50) {
            jQuery("#navigation").addClass("scrolled");
        } else {
           jQuery("#navigation").removeClass("scrolled");
        }
    });

    jQuery('.hamburger').click(function () {
        jQuery('.hamburger').toggleClass('is-active');
        jQuery(this).parent().parent().children('.header__menu').toggleClass('open');
    });

});