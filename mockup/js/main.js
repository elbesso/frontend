jQuery(function ($) {
    /* ==================================================
     Registration Form
     ================================================== */
    $("#registration-submit").on('click', function () {
        var $registration_form = $('#registration-form');
        if ($registration_form.valid()) {
            var fields = $registration_form.serialize();
            $.ajax({
                type: "POST",
                url: "php/registration.php",
                data: fields,
                dataType: 'json',
                success: function (response) {
                    console.debug(response.status);
                    if (response.status) {
                        $(location).attr('href', 'thankyou.html');
                    }
                    $('#response').empty().html(response.html);
                }
            });
            return false;
        }
    });


    /* ==================================================
     Masks
     ================================================== */
    maskInvites($("#invite-main"), $("#registration_invite"));
    $("#registration_phone_number").mask("+9(999) 999-99-99");


    /* ==================================================
     My scripts
     ================================================== */
    $('#invite-button').click(
        function () {
            var that = $('#invite-main');
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

    function maskInvites() {
        for (var i = 0; i < arguments.length; i++) {
            arguments[i].mask("****-****-****-****");
            arguments[i].focusout(function () {
                $(this).val($(this).val().toUpperCase());
            })
        }
    }
});

