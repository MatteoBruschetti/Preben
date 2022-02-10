jQuery(document).ready(function () {

    jQuery(window).on("scroll", function() {
        //add navbar shadow
        if(jQuery(this).scrollTop() > 50) {
            jQuery("#navigation").addClass("scrolled");
        } else {
           jQuery("#navigation").removeClass("scrolled");
        }
        //add single course fixed bar
        if(jQuery(this).scrollTop() > 350) {
            jQuery(".fixed-bar").addClass("scrolled");
        } else {
           jQuery(".fixed-bar").removeClass("scrolled");
        }
    });

    //Hamburger menu
    jQuery('.hamburger').click(function () {
        jQuery('.hamburger').toggleClass('is-active');
        jQuery(this).parent().parent().children('.header__menu').toggleClass('open');
    });


    //FAQs section
    jQuery('.faq-container').click(function () {
        jQuery(this).toggleClass('faq-active');
    });

});