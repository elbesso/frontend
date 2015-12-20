/**
 * Created by raguzin on 20.11.15.
 */
jQuery(function ($) {

    /* Mask */
    function maskInvites() {
        for (var i = 0; i < arguments.length; i++) {
            var options = {
                clearIfNotMatch: true
            };
            arguments[i].mask("AAAA-AAAA-AAAA-AAAA", options);
        }
    }

    maskInvites($("#invite_main_input"), $("#registration_invite"));
    $("#registration_phone_number").mask("+0 000 000 00 00", {clearIfNotMatch: true});

    /* Registration */
    $("#registration_submit").on('click', function () {
        var $registration_form = $('#registration_form');
        var fv = $registration_form.data('formValidation');
        fv.validate();
        if (fv.isValid()) {
            var fields = $registration_form.serialize();
            var refresh_animation = $(this).find("#refresh_animation");
            refresh_animation.show();
            $.ajax({
                type: "POST",
                url: "php/registration.php",
                data: fields,
                dataType: 'json',
                success: function (response) {
                    refresh_animation.hide();
                    $("#response").find("p").hide();
                    ga('send', 'event', 'registration', response.html, response.more);
                    if (response.status) {
                        $(location).attr('href', 'thankyou.php');
                    } else {
                        $("#response_".concat(response.html)).show();
                    }
                }
            });
            grecaptcha.reset();
            return false;
        }
    });

    $(document).ready(function() {
        $("#response").find("p").hide();
        $("#refresh_animation").hide();
    });

    $('#invite_button').click(function () {
            var that = $('#invite_main_input');
            $('#registration_invite').val(that.val());
            $('body, html').animate({scrollTop: $('#registration').offset().top}, 750);
    });

    function sortOptions(select) {
        var opt = select.find("option").sort(function (a,b) {
            return a.text.toUpperCase().localeCompare(b.text.toUpperCase())
        });
        select.append(opt);
        select.val(select.find("option:first").val());
    }

    $(document).ready(function() {
        sortOptions($("#registration_country"));
        sortOptions($("#registration_state"));
        sortOptions($("#registration_province"));
    });

    $(document).ready((function() {
        var state = $(".registration_state");
        var province = $(".registration_province");
        state.hide();
        province.hide();
        $("#registration_country").change(function() {
            var id = $(this).find(":selected").attr("id");
            if (id == 'US') {
                state.show();
                province.hide();
            } else if (id == 'CA') {
                state.hide();
                province.show();
            } else {
                state.hide();
                province.hide();
            }
        });
    }));

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

    /* Validation */
    $(document).ready(function() {
        var form = $('#registration_form');
        form.formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            addOns: {
                i18n: {}
            },
            fields: {
                registration_name: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your name',
                                ru_RU: 'Пожалуйста, введите ваше имя',
                                es_ES: 'Please enter your name'
                            }
                        },
                        stringLength: {
                            max: 255,
                            message:  {
                                en_US: 'Name should not be longer than 255 characters',
                                ru_RU: 'Имя не должно быть длиннее 255 символов',
                                es_ES: 'Name should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_surname: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your second name',
                                ru_RU: 'Пожалуйста, введите вашу фамилию',
                                es_ES: 'Please enter your second name'
                            }
                        },
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'Surname should not be longer than 255 characters',
                                ru_RU: 'Фамилия не должна быть длиннее 255 символов',
                                es_ES: 'Surname should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_organization: {
                    validators: {
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'Organization should not be longer than 255 characters',
                                ru_RU: 'Организация не должна быть длиннее 255 символов',
                                es_ES: 'Organization should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_position: {
                    validators: {
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'Position should not be longer than 255 characters',
                                ru_RU: 'Должность не должна быть длиннее 255 символов',
                                es_ES: 'Position should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_email: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your email address',
                                ru_RU: 'Пожалуйста, введите ваш email',
                                es_ES: 'Please enter your email address'
                            }
                        },
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'Email should not be longer than 255 characters',
                                ru_RU: 'Email не должен быть длиннее 255 символов',
                                es_ES: 'Email should not be longer than 255 characters'
                            }
                        },
                        emailAddress: {
                            message: {
                                en_US: 'Please provide valid email address',
                                ru_RU: 'Пожалуйста, введите корректный email',
                                es_ES: 'Please provide valid email address'
                            }
                        }
                    }
                },
                registration_city: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter the city you live in',
                                ru_RU: 'Пожалуйста, введите название города, в котором вы живете',
                                es_ES: 'Please enter the city you live in'
                            }
                        },
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'City should not be longer than 255 characters',
                                ru_RU: 'Название города должно быть не длиннее 255 символов',
                                es_ES: 'City should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_postcode: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your postal code',
                                ru_RU: 'Пожалуйста, введите ваш почтовый индекс',
                                es_ES: 'Please enter your postal code'
                            }
                        },
                        stringLength: {
                            max: 255,
                            message: {
                                en_US: 'Postal code should not be longer than 255 characters',
                                ru_RU: 'Почтовый индекс должен быть не длиннее 255 символов',
                                es_ES: 'Postal code should not be longer than 255 characters'
                            }
                        }
                    }
                },
                registration_address_line_1: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your address',
                                ru_RU: 'Пожалуйста, введите ваш адрес',
                                es_ES: 'Please enter your address'
                            }
                        },
                        stringLength: {
                            max: 512,
                            message: {
                                en_US: 'Address line one should not be longer than 512 characters',
                                ru_RU: 'Адрес должен быть не длиннее 512 символов',
                                es_ES: 'Address line one should not be longer than 512 characters'
                            }
                        }
                    }
                },
                registration_address_line_2: {
                    validators: {
                        stringLength: {
                            max: 512,
                            message: {
                                en_US: 'Address line two should not be longer than 512 characters',
                                ru_RU: 'Адрес должен быть не длиннее 512 символов',
                                es_ES: 'Address line two should not be longer than 512 characters'
                            }
                        }
                    }
                },
                registration_phone_number: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your phone number',
                                ru_RU: 'Пожалуйста, введите ваш телефон',
                                es_ES: 'Please enter your phone number'
                            }
                        },
                        stringLength: {
                            min: 16,
                            max: 255,
                            message: {
                                en_US: 'Phone number should be 10 characters long',
                                ru_RU: 'Телефонный номер должен состоять из 10 цифр',
                                es_ES: 'Phone number should be 10 characters long'
                            }
                        }
                    }
                },
                registration_invite: {
                    validators: {
                        notEmpty: {
                            message: {
                                en_US: 'Please enter your invite',
                                ru_RU: 'Пожалуйста, введите инвайт',
                                es_ES: 'Please enter your invite'
                            }
                        },
                        stringLength: {
                            min: 19,
                            max: 19,
                            message: {
                                en_US: 'Invite should be 16 characters long',
                                ru_RU: 'Инвайт должен быть 16 символов в длину',
                                es_ES: 'Invite should be 16 characters long'
                            }
                        }
                    }
                }
            }
        });
        var fv = form.data('formValidation');
        fv.setLocale($.cookie("locale"));
    });
});
