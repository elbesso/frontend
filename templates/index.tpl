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

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Brushed | Responsive One Page Template</title>

    <meta name="description" content="Insert Your Site Description"/>

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>
    <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="css/supersized.css" rel="stylesheet">
    <link href="css/supersized.shutter.css" rel="stylesheet">

    <!-- FancyBox -->
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">

    <!-- Font Icons -->
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="css/shortcodes.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="css/supersized.css" rel="stylesheet">
    <link href="css/supersized.shutter.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900'
          rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- Analytics -->
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
    <!-- End Analytics -->
    <!-- Js -->
    <script src="js/jquery-1.11.1.js"></script>
    <!-- jQuery Core -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/supersized.3.2.7.min.js"></script>
    <!-- Slider -->
    <script src="js/waypoints.js"></script>
    <!-- WayPoints -->
    <script src="js/waypoints-sticky.js"></script>
    <!-- Waypoints for Header -->
    <script src="js/jquery.isotope.js"></script>
    <!-- Isotope Filter -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- Fancybox -->
    <script src="js/jquery.fancybox-media.js"></script>
    <!-- Fancybox for Media -->
    <script src="js/jquery.tweet.js"></script>
    <!-- Tweet -->
    <script src="js/plugins.js"></script>
    <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
    <script src="js/main.js"></script>
    <!-- Default JS -->

    <script src="js/jquery.validate.js"></script>
    <script src="js/form.validation.js"></script>
    <script src="js/jquery.masked.input.js"></script>
    <script src="js/jquery.cookie.js"></script>

</head>

<body>

<!-- This section is for Splash Screen -->
<div class="ole">
    <section id="jSplash">
        <div id="circle"></div>
    </section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">
    <div class="overlay"></div>

    <div class="slider-text">
        <div id="slidecaption"></div>
    </div>


    <div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>

        <a id="nextsection" href="#invite_main"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
            <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        <div>
            <p class="credits">
                Language: <a id="en" class="language">English</a> <a id="ru" class="language">Russian</a>
            </p>
        </div>
        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#invite_main">Invite</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#registration">Register</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>
<!--End Header -->

<!-- Invite Main Section -->
<div id="invite_main" class="page">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h2 class="title">{t}INVITE_MAIN_TITLE{/t}</h2>
                <h3 class="title-description">To start</h3>
                <input type="text" id="invite-main" class="invite-main" placeholder="AAAA-AAAA-AAAA-AAAA">
                <div class="row">
                    <div class="span12">
                        <p class="invite-button">
                            <a id="invite-button" class="submit" href="#registration">Start</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Invite Main Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">About Us</h2>

                    <h3 class="title-description">Learn About our Team &amp; Culture.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- People -->
        <div class="row">

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">CTO/Founder</span>
                    </div>
                    <img src="img/profile/profile-01.jpg" alt="John Doe">
                </div>
                <h3 class="profile-name">John Doe</h3>

                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                    augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam
                    vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Creative Director</span>
                    </div>
                    <img src="img/profile/profile-02.jpg" alt="Jane Helf">
                </div>
                <h3 class="profile-name">Jane Helf</h3>

                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                    augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam
                    vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Lead Designer</span>
                    </div>
                    <img src="img/profile/profile-03.jpg" alt="Joshua Insanus">
                </div>
                <h3 class="profile-name">Joshua Insanus</h3>

                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                    augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam
                    vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

        </div>
        <!-- End People -->
    </div>
</div>
<!-- End About Section -->

<!-- Registration Section -->
<div id="registration" class="page">
    <div class="container">
        <form id="registration-form" class="registration-form" action="#">
            <div class="row">
                <div class="span6">
                    <p class="registration-name">
                        <label for="registration_name">Name</label>
                        <input id="registration_name" name="registration_name" type="text" placeholder="Your name">
                    </p>
                    <p class="registration-surname">
                        <label for="registration_surname">Surname</label>
                        <input id="registration_surname" name="registration_surname" type="text" placeholder="Your second name">
                    </p>
                    <p class="registration-organization">
                        <label for="registration_organization">Organization</label>
                        <input id="registration_organization" name="registration_organization" type="text" placeholder="Your organization">
                    </p>
                    <p class="registration-position">
                        <label for="registration_position">Position</label>
                        <input id="registration_position" name="registration_position" type="text" placeholder="Your job position">
                    </p>
                    <p class="registration-email">
                        <label for="registration_email">Email</label>
                        <input id="registration_email" name="registration_email" type="email" placeholder="someone@something.com">
                    </p>
                    <p class="registration-phone-number">
                        <label for="registration_phone_number">Phone Number</label>
                        <input id="registration_phone_number" name="registration_phone_number" type="text" placeholder="+9(999) 999-99-99">
                    </p>
                </div>
                <div class="span6">
                    <p class="registration-address">
                        <label for="registration_address">Address</label>
                        <textarea id="registration_address" name="registration_address" placeholder="Address"></textarea>
                    </p>
                    <p class="registration-city">
                        <label for="registration_city">City</label>
                        <input id="registration_city" name="registration_city" type="text" placeholder="The city you live in">
                    </p>
                    <p class="registration-postcode">
                        <label for="registration_postcode">Postcode</label>
                        <input id="registration_postcode" name="registration_postcode" type="text" placeholder="Postal code">
                    </p>
                    <p class="registration-country">
                        <label for="registration_country">Country</label>
                        <select id="registration_country" name="registration_country">
                            <option>Russian Federation</option>
                            <option>United States</option>
                        </select>
                    </p>
                    <p class="registration-state">
                        <label for="registration_state">State</label>
                        <input id="registration_state" name="registration_state" type="text" placeholder="Which state you live in?">
                    </p>

                    <p class="registration-invite">
                        <label for="registration_invite">Invite</label>
                        <input id="registration_invite" name="registration_invite" type="text" placeholder="AAAA-AAAA-AAAA-AAAA">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <p class="registration-submit">
                        <a id="registration-submit" class="submit" href="#registration">Submit</a>
                    </p>
                    <div id="response"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Registration Section -->

<!-- Contact Section -->
<div id="contact" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Contact us</h2>
                    <h3 class="title-description">If you have anything to talk about</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Contact Form -->
        <div class="row">
            <div class="span12">
                <div class="contact-details">
                    <h3>Contact Details</h3>
                    <ul>
                        <li><a href="#">hello@brushed.com</a></li>
                        <li>(916) 375-2525</li>
                        <li>
                            Brushed Studio
                            <br>
                            5240 Vanish Island. 105
                            <br>
                            Unknow
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</div>
<!-- End Contact Section -->

<!-- Footer -->
<footer>
    <p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/"
                                              title="Brushed | Responsive One Page Template">Brushed Template</a> by <a
                href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio
            Atzeni</a></p>

</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
    <i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->




<!-- End Js -->

</body>
</html>