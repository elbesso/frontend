<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 20.11.15
 * Time: 18:01
 */

require("php/setup.php")
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
    <title><?php echo gettext("TITLE")?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,800,800italic,300,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet"/>
    <link href="css/formValidation.min.css" rel="stylesheet"/>
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
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false"><?php echo gettext("STICKY_NAV_LANGUAGE")?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="en_US" href="#"><?php echo gettext("STICKY_NAV_LANGUAGE_ENGLISH")?></a></li>
                            <li><a id="ru_RU" href="#"><?php echo gettext("STICKY_NAV_LANGUAGE_RUSSIAN")?></a></li>
                            <li><a id="es_ES" href="#"><?php echo gettext("STICKY_NAV_LANGUAGE_SPANISH")?></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home"><?php echo gettext("MENU_THANK_YOU")?></span></a></li>
                    <li><a href="#about"><?php echo gettext("MENU_ABOUT")?></a></li>
                    <li><a href="#contact"><?php echo gettext("MENU_CONTACT")?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home">
        <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div id="slider_first" class="item active"></div>
                <div id="slider_second" class="item"></div>
                <div id="slider_third" class="item"></div>
            </div>
        </div>
        <div id="invite_main" class="container">
            <div class="row text-center">
                <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 class="title"><?php echo gettext("THANK_YOU_MAIN_TITLE")?></h2>
                        <h3 class="title-description"><?php echo gettext("THANK_YOU_MAIN_TITLE_DESCRIPTION ")?></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center"><?php echo gettext("ABOUT_TITLE")?></h2>
                    <h3 class="text-center"><?php echo gettext("ABOUT_TITLE_DESCRIPTION")?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo gettext("ABOUT_FIRST_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_FIRST_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_FIRST_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_FIRST_PROFILE_DESCRIPTION")?></p>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo gettext("ABOUT_SECOND_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_SECOND_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_SECOND_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_SECOND_PROFILE_DESCRIPTION")?></p>
                </div>
                <div class="col-lg-4">
                        <img src="<?php echo gettext("ABOUT_THIRD_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_THIRD_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_THIRD_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_THIRD_PROFILE_DESCRIPTION")?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo gettext("ABOUT_FORTH_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_FORTH_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_FORTH_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_FORTH_PROFILE_DESCRIPTION")?></p>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo gettext("ABOUT_FIFTH_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_FIFTH_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_FIFTH_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_FIFTH_PROFILE_DESCRIPTION")?></p>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo gettext("ABOUT_SIXTH_IMG")?>" class="img-responsive" alt="<?php echo gettext("ABOUT_SIXTH_IMG_ALT")?>">
                    <h3><?php echo gettext("ABOUT_SIXTH_PROFILE_NAME")?></h3>
                    <p><?php echo gettext("ABOUT_SIXTH_PROFILE_DESCRIPTION")?></p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo gettext("CONTACT_TITLE")?></h2>
                    <p><?php echo gettext("CONTACT_TITLE_DESCRIPTION_1")?></p>
                    <p><?php echo gettext("CONTACT_TITLE_DESCRIPTION_2")?></p>
                    <p>
                        <a href="#"><?php echo gettext("CONTACT_DETAIL_EMAIL")?></a>
                    </p>
                    <h3><?php echo gettext("CONTACT_DETAILS")?></h3>
                    <p><?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_1")?></p>
                    <p><?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_2")?></p>
                    <p><?php echo gettext("CONTACT_DETAIL_ADDRESS_LINE_3")?></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="credits text-center"><?php echo gettext("FOOTER_FIRST")?>
                        <a href="<?php echo gettext("FOOTER_FIRST_LINK")?>"
                           title="<?php echo gettext("FOOTER_FIRST_LINK_TITLE")?>" class="color-text">
                            <?php echo gettext("FOOTER_SECOND")?></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 10000
        })
    </script>
    <script type="text/javascript" src="<?php echo $localized_recaptcha?>"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-7031361-4', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/mynavigation.js"></script>
</body>
</html>
