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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,800,800italic,300,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="#">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">
    <script src="js/modernizr.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-7031361-4', 'auto');
        ga('send', 'pageview');
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
    <script src="js/jquery.validate.js"></script>
    <script src="<?php echo $localized_validation?>"></script>
    <script type="text/javascript" src="<?php echo $localized_recaptcha?>"></script>
    <script src="js/jquery.masked.input.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="ole">
    <section id="jSplash">
        <div id="circle"></div>
    </section>
</div>
<header id="header">
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        <div id="logo">
            <a id="home" href="./index.php" title="<?php echo gettext("STICKY_NAV_GO_UP_LINK_TITLE")?>"><?php echo gettext("STICKY_NAV_GO_UP")?></a>
        </div>
        <div class="select">
            <input type="checkbox" id="toggle" class="toggle">
            <label for="toggle"><?php echo gettext("STICKY_NAV_LANGUAGE")?></label>
            <ul>
                <li class="select-option">
                    <input type="radio" id="en_US" class="language">
                    <label for="en_US"><?php echo gettext("STICKY_NAV_LANGUAGE_ENGLISH")?></label>
                </li>
                <li class="select-option">
                    <input type="radio" id="ru_RU" class="language">
                    <label for="ru_RU"><?php echo gettext("STICKY_NAV_LANGUAGE_RUSSIAN")?></label>
                </li>
                <li class="select-option">
                    <input type="radio" id="es_ES" class="language">
                    <label for="es_ES"><?php echo gettext("STICKY_NAV_LANGUAGE_SPANISH")?></label>
                </li>
            </ul>
        </div>
        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="#invite_main"><?php echo gettext("MENU_THANK_YOU")?></a></li>
                <li><a href="#about"><?php echo gettext("MENU_ABOUT")?></a></li>
                <li><a href="#contact"><?php echo gettext("MENU_CONTACT")?></a></li>
            </ul>
        </nav>
    </div>
    <div id="invite_main" class="page">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h2 class="title"><?php echo gettext("THANK_YOU_MAIN_TITLE")?></h2>
                    <h3 class="title-description"><?php echo gettext("THANK_YOU_MAIN_TITLE_DESCRIPTION ")?></h3>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="about" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 id="title-h2" class="title"><?php echo gettext("ABOUT_TITLE")?></h2>
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
                    <img src="<?php echo gettext("ABOUT_FIRST_IMG")?>" alt="<?php echo gettext("ABOUT_FIRST_IMG_ALT")?>">
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
                    <img src="<?php echo gettext("ABOUT_SECOND_IMG")?>" alt="<?php echo gettext("ABOUT_SECOND_IMG_ALT")?>">
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
                    <img src="<?php echo gettext("ABOUT_THIRD_IMG")?>" alt="<?php echo gettext("ABOUT_THIRD_IMG_ALT")?>">
                </div>
                <h3 class="profile-name"><?php echo gettext("ABOUT_THIRD_PROFILE_NAME")?></h3>
                <p class="profile-description"><?php echo gettext("ABOUT_THIRD_PROFILE_DESCRIPTION")?></p>
            </div>
        </div>
        <div class="row">
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb"><?php echo gettext("ABOUT_FORTH_OVERLAY_THUMB")?></span>
                    </div>
                    <img src="<?php echo gettext("ABOUT_FORTH_IMG")?>" alt="<?php echo gettext("ABOUT_FORTH_IMG_ALT")?>">
                </div>
                <h3 class="profile-name"><?php echo gettext("ABOUT_FORTH_PROFILE_NAME")?></h3>
                <p class="profile-description"><?php echo gettext("ABOUT_FORTH_PROFILE_DESCRIPTION")?></p>
            </div>
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb"><?php echo gettext("ABOUT_FIFTH_OVERLAY_THUMB")?></span>
                    </div>
                    <img src="<?php echo gettext("ABOUT_FIFTH_IMG")?>" alt="<?php echo gettext("ABOUT_FIFTH_IMG_ALT")?>">
                </div>
                <h3 class="profile-name"><?php echo gettext("ABOUT_FIFTH_PROFILE_NAME")?></h3>
                <p class="profile-description"><?php echo gettext("ABOUT_FIFTH_PROFILE_DESCRIPTION")?></p>
            </div>
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb"><?php echo gettext("ABOUT_SIXTH_OVERLAY_THUMB")?></span>
                    </div>
                    <img src="<?php echo gettext("ABOUT_SIXTH_IMG")?>" alt="<?php echo gettext("ABOUT_SIXTH_IMG_ALT")?>">
                </div>
                <h3 class="profile-name"><?php echo gettext("ABOUT_SIXTH_PROFILE_NAME")?></h3>
                <p class="profile-description"><?php echo gettext("ABOUT_SIXTH_PROFILE_DESCRIPTION")?></p>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="page">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="title-page" id="contact-title-page">
                    <h2 class="title" id="contact-title"><?php echo gettext("CONTACT_TITLE")?></h2>
                    <h3 class="title-description" id="contact-title-description"><?php echo gettext("CONTACT_TITLE_DESCRIPTION_1")?></h3>
                    <h3 class="title-description" id="contact-title-description"><?php echo gettext("CONTACT_TITLE_DESCRIPTION_2")?></h3>
                    <a href="#"><?php echo gettext("CONTACT_DETAIL_EMAIL")?></a>
                </div>
                <div class="contact-details">
                    <h3><?php echo gettext("CONTACT_DETAILS")?></h3>
                    <ul>
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
    <p class="credits"><?php echo gettext("FOOTER_FIRST")?>
        <a href="<?php echo gettext("FOOTER_FIRST_LINK")?>"
           title="<?php echo gettext("FOOTER_FIRST_LINK_TITLE")?>" class="color-text">
            <?php echo gettext("FOOTER_SECOND")?></a></p>
</footer>
</body>
</html>
