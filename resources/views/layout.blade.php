<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico" type="image/png">
    <title>@yield('title', 'Teomoda | homepage')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="assets/TeoModa_t.png" id="home-logo" alt="teomoda" width="300"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link teomoda_color position-relative {{ Request::path() == '/' ? 'active' : '' }}" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative {{ Request::path() == 'about' ? 'active' : '' }}" href="/about">About</a></li>
                        <li class="nav-item submenu ">
                            <a id="nav-link-services" href="/services" class="nav-link dropdown-toggle teomoda_color position-relative {{ Request::path() == 'services' ? 'active' : '' }}" role="button" aria-haspopup="true" aria-expanded="false" >Services</a>
                            <ul class="dropdown dropdown-menu">
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/personal-color-consultation">PERSONAL COLOR CONSULTATION</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/personal-style-consultation">PERSONAL STYLE CONSULTATION</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/wardrobe-audit">WARDROBE AUDIT</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/personal-shopping">PERSONAL SHOPPING</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative {{ Request::path() == 'blog' ? 'active' : '' }}" href="/blog">Blogs</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative {{ Request::path() == 'testimonials' ? 'active' : '' }}" href="/testimonials">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Me</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed urna malesuada purus elementum accumsan. </p>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://teomoda.com" target="_blank">teomoda.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Newsletter</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link p-0 text-light teomoda_color" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/about">About</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/services">Services</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/blog">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/testimonials">Testimonials</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/contact">Contact</a></li>
                        </ul>
                </aside>
            </div>
            <div class="col-lg-2">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Follow Me</h3>
                    </div>
                    <p>Let us be social</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
{{--<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>--}}
{{--<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>--}}
{{--<script src="vendors/isotope/isotope-min.js"></script>--}}
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>

{{--<script src="js/jquery.ajaxchimp.min.js"></script>--}}
{{--<script src="vendors/counter-up/jquery.waypoints.min.js"></script>--}}
{{--<script src="vendors/counter-up/jquery.counterup.min.js"></script>--}}
{{--<script src="js/mail-script.js"></script>--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>--}}
{{--<script src="js/gmaps.min.js"></script>--}}
{{--<script src="js/theme.js"></script>--}}
</body>
</html>

