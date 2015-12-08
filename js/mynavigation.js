/**
 * Created by dmitry on 08.12.15.
 */

jQuery(function ($) {

    /* Navigation */
    $('.navbar-right li a').on('click', function (e) {
        e.preventDefault();
        $('body, html').animate({scrollTop: $($(this).attr('href')).offset().top - 30}, 750);
    });

    $('.navbar-brand').click(function () {
        $('body, html').animate({scrollTop: $('#home').offset().top}, 750);
    });

    /* Locale */
    $('.dropdown-menu').find('a').click(function() {
        var locale = $(this).attr('id');
        $.cookie("locale", locale);
        location.reload();
    });
});