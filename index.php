<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 11.11.15
 * Time: 15:55
 */
require("php/setup.php")
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html class="no-js lt-ie9"><![endif]-->
<!--[if (IE 9)]>
<html class="no-js ie9""><![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title><?php echo gettext("TITLE")?></title>
        <meta name="description" content="Insert Your Site Description"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>
        <!--[if IEMobile]>
        <meta http-equiv="cleartype" content="on">  <![endif]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/supersized.css" rel="stylesheet">
        <link href="css/supersized.shutter.css" rel="stylesheet">
        <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/shortcodes.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/supersized.css" rel="stylesheet">
        <link href="css/supersized.shutter.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900'
              rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="#">
        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">
        <script src="js/modernizr.js"></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7031361-4']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script src="js/jquery-1.11.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/supersized.3.2.7.min.js"></script>
        <script src="js/waypoints.js"></script>
        <script src="js/waypoints-sticky.js"></script>
        <script src="js/jquery.isotope.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/jquery.tweet.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/form.validation.js"></script>
        <script src="js/jquery.masked.input.js"></script>
        <script src="js/jquery.cookie.js"></script>
    </head>
    <body>
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
<!--        <div id="home-slider">-->
<!--            <div class="overlay"></div>-->
<!--            <div class="slider-text">-->
<!--                <div id="slidecaption"></div>-->
<!--            </div>-->
<!--            <div class="control-nav">-->
<!--                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>-->
<!--                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>-->
<!--                <ul id="slide-list"></ul>-->
<!--                <a id="nextsection" href="#invite_main"><i class="font-icon-arrow-simple-down"></i></a>-->
<!--            </div>-->
<!--        </div>-->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
                <div id="logo">
                    <a id="goUp" href="#home-slider" title=<?php echo gettext("STICKY_NAV_GO_UP_LINK_TITLE")?>><?php echo gettext("STICKY_NAV_GO_UP")?></a>
                </div>
                <div id="language">
                    <?php echo gettext("STICKY_NAV_LANGUAGE")?>:
                    <a id="en_US" class="language"><?php echo gettext("STICKY_NAV_LANGUAGE_ENGLISH")?></a>
                    <a id="ru_RU" class="language"><?php echo gettext("STICKY_NAV_LANGUAGE_RUSSIAN")?></a>
                    <a id="es_ES" class="language"><?php echo gettext("STICKY_NAV_LANGUAGE_SPANISH")?></a>
                </div>
                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider"><?php echo gettext("MENU_HOME")?></a></li>
                        <li><a href="#invite_main"><?php echo gettext("MENU_INVITE")?></a></li>
                        <li><a href="#registration"><?php echo gettext("MENU_REGISTRATION")?></a></li>
                        <li><a href="#about"><?php echo gettext("MENU_ABOUT")?></a></li>
                        <li><a href="#contact"><?php echo gettext("MENU_CONTACT")?></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="invite_main" class="page">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2 class="title"><?php echo gettext("INVITE_MAIN_TITLE")?></h2>
                        <h3 class="title-description"><?php echo gettext("INVITE_MAIN_TITLE_DESCRIPTION ")?></h3>
                        <input type="text" id="invite-main" class="invite-main" placeholder="<?php echo gettext("INVITE_MAIN_PLACEHOLDER_INVITE")?>">
                        <div class="row">
                            <div class="span12">
                                <p class="invite-button">
                                    <a id="invite-button" class="submit" href="#registration"><?php echo gettext("INVITE_MAIN_INVITE_BUTTON")?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="registration" class="page">
            <div class="container">
                <form id="registration-form" class="registration-form" action="#">
                    <div class="row">
                        <div class="span6">
                            <p class="registration-name">
                                <label for="registration_name"><?php echo gettext("REGISTRATION_LABEL_NAME")?></label>
                                <input id="registration_name" name="registration_name" type="text" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_NAME")?>">
                            </p>
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
                        <div class="span6">
                            <p class="registration-address-line-1">
                                <label for="registration_address"><?php echo gettext("REGISTRATION_LABEL_ADDRESS_LINE_1")?></label>
                                <input id="registration_address_line_1" name="registration_address_line_1" placeholder="<?php echo gettext("REGISTRATION_PLACEHOLDER_ADDRESS_LINE_1")?>">
                            </p>
                            <p class="registration-address-line-2">
                                <label for="registration_address"><?php echo gettext("REGISTRATION_LABEL_ADDRESS_LINE_2")?></label>
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
                        <div class="span12">
                            <p class="registration-submit">
                                <a id="registration-submit" class="submit" href="#registration"><?php echo gettext("REGISTRATION_SUBMIT")?></a>
                            </p>
                            <div id="response"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="about" class="page-alternate">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title"><?php echo gettext("ABOUT_TITLE")?></h2>
                            <h3 class="title-description"><?php echo gettext("ABOUT_TITLE_DESCRIPTION")?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb"><?php echo gettext("ABOUT_FIRST_OVERLAY_THUMB")?></span>
                            </div>
                            <img src="img/profile/profile-01.jpg" alt=<?php echo gettext("ABOUT_FIRST_IMG_ALT")?>>
                        </div>
                        <h3 class="profile-name"><?php echo gettext("ABOUT_FIRST_PROFILE_NAME")?></h3>
                        <p class="profile-description"><?php echo gettext("ABOUT_FIRST_PROFILE_DESCRIPTION")?></p>
                    </div>
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb"><?php echo gettext("ABOUT_SECOND_OVERLAY_THUMB")?></span>
                            </div>
                            <img src="img/profile/profile-02.jpg" alt=<?php echo gettext("ABOUT_SECOND_IMG_ALT")?>>
                        </div>
                        <h3 class="profile-name"><?php echo gettext("ABOUT_SECOND_PROFILE_NAME")?></h3>
                        <p class="profile-description"><?php echo gettext("ABOUT_SECOND_PROFILE_DESCRIPTION")?></p>
                    </div>
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb"><?php echo gettext("ABOUT_THIRD_OVERLAY_THUMB")?></span>
                            </div>
                            <img src="img/profile/profile-03.jpg" alt=<?php echo gettext("ABOUT_THIRD_IMG_ALT")?>>
                        </div>
                        <h3 class="profile-name"><?php echo gettext("ABOUT_THIRD_PROFILE_NAME")?></h3>
                        <p class="profile-description"><?php echo gettext("ABOUT_THIRD_PROFILE_DESCRIPTION")?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="page">
            <div class="container">
                <!-- Title Page -->
                <div class="row">
                    <div class="span12">
                        <div class="title-page">
                            <h2 class="title"><?php echo gettext("CONTACT_TITLE")?></h2>
                            <h3 class="title-description"><?php echo gettext("CONTACT_TITLE_DESCRIPTION")?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <div class="contact-details">
                            <h3>Contact Details</h3>
                            <ul>
                                <li><a href="#"><?php echo gettext("CONTACT_DETAIL_EMAIL")?></a></li>
                                <li><?php echo gettext("CONTACT_DETAIL_PHONE")?></li>
                                <li>
                                    <?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_1")?>
                                    <br>
                                    <?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_2")?>
                                    <br>
                                    <?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_3")?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p class="credits"><?php echo gettext("FOOTER_FIRST")?> <a href="http://themes.alessioatzeni.com/html/brushed/"
                                                      title=<?php echo gettext("FOOTER_FIRST_LINK_TITLE")?>><?php echo gettext("FOOTER_SECOND")?> </a><?php echo gettext("FOOTER_THIRD")?> <a
                    href="http://www.alessioatzeni.com/" title=<?php echo gettext("FOOTER_SECOND_LINK_TITLE")?> ><?php echo gettext("FOOTER_FORTH")?></a></p>
        </footer>
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
    </body>
</html>
