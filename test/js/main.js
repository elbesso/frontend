/**
 * Created by raguzin on 20.11.15.
 */
jQuery(function ($) {
    $('.dropdown-menu').find('a').click(function() {
        var locale = $(this).attr('id');
        $.cookie("locale", locale);
        location.reload();
    });

    $(document).ready(function() {
        var select = $('#registration_country');
        select.val(function() {
            var locale = $.cookie('locale');
            if (locale == 'en_US') {
                return 'US'
            } else if (locale == 'ru_RU') {
                return 'RU';
            } else {
                return $('#registration_country').find("option:first").attr("id");
            }
        });
        select.trigger('change');
    });
});
