/**
 * Created by dmitry on 07.11.15.
 */
$(document).ready((function() {
    $("#registration-form").validate({
        rules: {
            registration_name: {
                required: true,
                minlength: 2
            }
        },
        messages: {
            registration_name: {
                required: "Please enter your name",
                minlength: "Name length should be at least 2 characters long"
            }
        }
    });
}));