jQuery(document).ready(function () {

    jQuery('.nav-hamburger').click(function () {
        jQuery('.nav-hamburger').toggleClass('active');
        jQuery(this).parent().parent().children('.header__menu').toggleClass('open');
    });

});