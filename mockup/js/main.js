jQuery(function ($) {
    /* ==================================================
     Registration Form
     ================================================== */

    $("#registration-submit").on('click', function () {
        $registration_form = $('#registration-form');

        var fields = $registration_form.serialize();

        $.ajax({
            type: "POST",
            url: "php/registration.php",
            data: fields,
            dataType: 'json',
            success: function (response) {

                if (response.status) {
                    $('#registration-form input').val('');
                }

                $('#response').empty().html(response.html);
            }
        });
        return false;
    });

    /* ==================================================
     My scripts
     ================================================== */
    $("#registration_phone_number").mask("+9(999) 999-99-99");

    $('#invite-button').click(
        function () {
            var that = $('#invite');
            $('#registration_invite').val(that.val());
        });


    $(document).ready((function() {
        $(".registration-state").hide();
        $("#registration_country").change(function() {
            if ($(this).val() == 'United States') {
                $(".registration-state").show();
            } else {
                $(".registration-state").hide();
            }
        });
    }));
});