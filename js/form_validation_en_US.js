/**
 * Created by dmitry on 07.11.15.
 */
$(document).ready((function() {
    $("#registration-form").validate({
        rules: {
            registration_name: {
                required: true,
                maxlength: 255
            },
            registration_surname: {
                required: true,
                maxlength: 255
            },
            registration_organization: {
                maxlength: 255
            },
            registration_position: {
                maxlength: 255
            },
            registration_email: {
                required: true,
                email: true,
                maxlength: 255
            },
            registration_state: {
                maxlength: 255
            },
            registration_city: {
                required: true,
                maxlength: 255
            },
            registration_postcode: {
                required: true,
                maxlength: 255
            },
            registration_address_line_1: {
                required: true,
                maxlength: 512
            },
            registration_address_line_2: {
                maxlength: 512
            },
            registration_phone_number: {
                required: true,
                maxlength: 255
            },
            registration_invite: {
                required: true,
                maxlength: 19
            }
        },
        messages: {
            registration_name: {
                required: "Please enter your name",
                maxlength: "Name should not be longer than 255 characters"
            },
            registration_surname: {
                required: "Please enter you second name",
                maxlength: "Surname should not be longer than 255 characters"
            },
            registration_organization: {
                maxlength: "Organization should not be longer than 255 characters"
            },
            registration_position: {
                maxlength: "Position should not be longer than 255 characters"
            },
            registration_email: {
                required: "Please enter your email address",
                email: "Please provide valid email address",
                maxlength: "Email should not be longer than 255 characters"
            },
            registration_state: {
                maxlength: "State should not be longer than 255 characters"
            },
            registration_city: {
                required: "Please enter the city you live in",
                maxlength: "City should not be longer than 255 characters"
            },
            registration_postcode: {
                required: "Please enter you postal code",
                maxlength: "Postal code should not be longer than 255 characters"
            },
            registration_address_line_1: {
                required: "Please enter you address",
                maxlength: "Address line one should not be longer than 512 characters"
            },
            registration_address_line_2: {
                maxlength: "Address line one should not be longer than 512 characters"
            },
            registration_phone_number: {
                required: "Please enter your phone number",
                maxlength: "Phone number should not be longer than 255 characters"
            },
            registration_invite: {
                required: "Please enter your invite",
                maxlength: "Invite should not be longer than 16 characters"
            }
        }
    });
}));