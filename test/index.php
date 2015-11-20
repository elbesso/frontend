<?php
/**
 * Created by IntelliJ IDEA.
 * User: raguzin
 * Date: 20.11.15
 * Time: 18:01
 */
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
            <div class="container">
                <div class="row">
                    <div id="invite_main" class="form-group">
                        <div class="col-lg-12 col-md-offset-6"><label for="invite_main_input">Invite Main</label>
                            <input type="text" class="form-control input-lg " id="invite_main_input" placeholder="AAAA-AAAA-AAAA-AAAA"></div>

                    </div>
                </div>
            </div>
        </div>

    </header>

    <div id="registration" class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Full Slider by Start Bootstrap</h1>
                <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>full-slider.css</code>file.</p>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

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
