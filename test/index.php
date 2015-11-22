<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 20.11.15
 * Time: 18:01
 */

require("../php/setup.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oxygen Forensic Invite Site</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,800,800italic,300,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <div id="my_navigation" class="container-fluid brown-background">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Invite</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle yellow-background" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Russian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</span></a></li>
                    <li><a href="#registration">Registration</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contacts">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="my_carousel" class="carousel slide" data-ride="carousel" style="position: relative">
        <div class="carousel-inner">
            <div class="item active">
                <div id="slider_first" class="fill gridded-slider">

                </div>
            </div>
            <div class="item">
                <div id="slider_second" class="fill gridded-slider"></div>
            </div>
            <div class="item">
                <div id="slider_third" class="fill gridded-slider"></div>
            </div>
            <div id="invite_main" class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center"><?php echo gettext("INVITE_MAIN_TITLE") ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center"><?php echo gettext("INVITE_MAIN_TITLE_DESCRIPTION ") ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control input-lg " id="invite_main_input"
                                   placeholder="<?php echo gettext("INVITE_MAIN_PLACEHOLDER_INVITE") ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="registration" class="container">
            <form id="registration_form" class="registration-form" action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group registration-name">
                            <label for="registration_name"><?php echo gettext("REGISTRATION_LABEL_NAME")?></label>
                            <input id="registration_name" name="registration_name" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_NAME")?>">
                        </div>
                        <p class="registration-surname">
                            <label for="registration_surname"><?php echo gettext("REGISTRATION_LABEL_SURNAME")?></label>
                            <input id="registration_surname" name="registration_surname" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_SURNAME")?>">
                        </p>
                        <p class="registration-organization">
                            <label for="registration_organization"><?php echo gettext("REGISTRATION_LABEL_ORGANIZATION")?></label>
                            <input id="registration_organization" name="registration_organization" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_ORGANIZATION")?>">
                        </p>
                        <p class="registration-position">
                            <label for="registration_position"><?php echo gettext("REGISTRATION_LABEL_POSITION")?></label>
                            <input id="registration_position" name="registration_position" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_POSITION")?>">
                        </p>
                        <p class="registration-email">
                            <label for="registration_email"><?php echo gettext("REGISTRATION_LABEL_EMAIL")?></label>
                            <input id="registration_email" name="registration_email" type="email" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_EMAIL")?>">
                        </p>
                        <p class="registration-phone-number">
                            <label for="registration_phone_number"><?php echo gettext("REGISTRATION_LABEL_PHONE")?></label>
                            <input id="registration_phone_number" name="registration_phone_number" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_PHONE")?>">
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="registration-address-line-1">
                            <label for="registration_address_line_1"><?php echo gettext("REGISTRATION_LABEL_ADDRESS_LINE_1")?></label>
                            <input id="registration_address_line_1" name="registration_address_line_1" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_ADDRESS_LINE_1")?>">
                        </p>
                        <p class="registration-address-line-2">
                            <label for="registration_address_line_2"><?php echo gettext("REGISTRATION_LABEL_ADDRESS_LINE_2")?></label>
                            <input id="registration_address_line_2" name="registration_address_line_2" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_ADDRESS_LINE_2")?>">
                        </p>
                        <p class="registration-city">
                            <label for="registration_city"><?php echo gettext("REGISTRATION_LABEL_CITY")?></label>
                            <input id="registration_city" name="registration_city" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_CITY")?>">
                        </p>
                        <p class="registration-postcode">
                            <label for="registration_postcode"><?php echo gettext("REGISTRATION_LABEL_POSTCODE")?></label>
                            <input id="registration_postcode" name="registration_postcode" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_POSTCODE")?>">
                        </p>
                        <p class="registration-country">
                            <label for="registration_country"><?php echo gettext("REGISTRATION_LABEL_COUNTRY")?></label>
                            <select id="registration_country" name="registration_country">
                                <?php include("php/country.php"); ?>
                            </select>
                        </p>
                        <p class="registration-state">
                            <label for="registration_state"><?php echo gettext("REGISTRATION_LABEL_STATE")?></label>
                            <select id="registration_state" name="registration_state">
                                <?php include("php/state.php"); ?>
                            </select>
                        </p>
                        <p class="registration-province">
                            <label for="registration_province"><?php echo gettext("REGISTRATION_LABEL_PROVINCE")?></label>
                            <select id="registration_province" name="registration_province">
                                <?php include("php/province.php"); ?>
                            </select>
                        </p>
                        <p class="registration-invite">
                            <label for="registration_invite"><?php echo gettext("REGISTRATION_LABEL_INVITE")?></label>
                            <input id="registration_invite" name="registration_invite" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_INVITE")?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="span6">
                        <p class="registration-submit">
                            <a id="registration-submit" class="submit" href="#registration"><?php echo gettext("REGISTRATION_SUBMIT")?></a>
                        </p>
                        <div id="response">
                            <p id="response_internal_error"><?php echo gettext("INTERNAL_ERROR")?></p>
                            <p id="response_locked"><?php echo gettext("YOU_ARE_LOCKED_OUT")?></p>
                            <p id="response_invite_incorrect"><?php echo gettext("INVITE_INCORRECT")?></p>
                            <p id="response_invite_used"><?php echo gettext("INVITE_USED")?></p>
                            <p id="response_invite_expired"><?php echo gettext("INVITE_EXPIRED")?></p>
                            <p id="response_bad_captcha"><?php echo gettext("BAD_CAPTCHA")?></p>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="g-recaptcha" data-sitekey="6LfbOxETAAAAAC6QqIcCWyV9oz6TF48_cm1DYmCB" data-theme="dark"></div>
                    </div>
                </div>
            </form>
    </div>

    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>
</body>
</html>
