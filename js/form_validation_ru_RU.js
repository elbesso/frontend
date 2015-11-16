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
                required: "Пожалуйста, введите ваше имя",
                maxlength: "Имя не должно быть длиннее 255 символов"
            },
            registration_surname: {
                required: "Пожалуйста, введите вашу фамилию",
                maxlength: "Фамилия не должна быть длиннее 255 символов"
            },
            registration_organization: {
                maxlength: "Организация не должна быть длиннее 255 символов"
            },
            registration_position: {
                maxlength: "Должность не должна быть длиннее 255 символов"
            },
            registration_email: {
                required: "Пожалуйста, введите ваш email",
                email: "Пожалуйста, введите корректный email",
                maxlength: "Email не должен быть длиннее 255 символов"
            },
            registration_state: {
                maxlength: "Штат не должен быть длиннее 255 символов"
            },
            registration_city: {
                required: "Пожалуйста, введите название города, в котором вы живете",
                maxlength: "Название города должно быть не длиннее 255 символов"
            },
            registration_postcode: {
                required: "Пожалуйста, введите ваш почтовый индекс",
                maxlength: "Почтовый индекс должен быть не длиннее 255 символов"
            },
            registration_address_line_1: {
                required: "Пожалуйста, введите ваш адрес",
                maxlength: "Адрес должен быть не длиннее 512 символов"
            },
            registration_address_line_2: {
                maxlength: "Адрес должен быть не длиннее 512 символов"
            },
            registration_phone_number: {
                required: "Пожалуйста, введите ваш телефон",
                maxlength: "Телефон должен быть не длиннее 255 символов"
            },
            registration_invite: {
                required: "Пожалуйста, введите инвайт",
                maxlength: "Инвай должен быть не длиннее 16 символов"
            }
        }
    });
}));
