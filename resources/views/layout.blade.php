<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.ico" type="image/png">
    <title>@yield('title', 'Teomoda | homepage')</title>
    <meta content="@yield('meta_keywords','some default keywords')" name="keywords">
    <meta property="og:type" content="article" />
    <meta property="og:description" content="@yield('meta_description','Styling you to feel radiant, comfortable and confident, all within your budget.')">
    <meta property="og:url" content="@yield('meta_url','http://teomoda.com/assets/dora-kery-profil.jpg')">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/vendors/linericon/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendors/simplelightbox/dist/simple-lightbox.css">
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="/vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="/css/style.css?v={{time()}}">
    <link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
<div class="page-load" >
    <div class="page-load-logo">
        <img src="/assets/pre-loader.gif" alt="load">
    </div>
</div>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="/assets/icon.png" id="home-logo" alt="teomoda" width="75"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    @foreach(config('app.available_locales') as $locale => $language)
                        <a href="{{ url($locale) }}" class="mr-2" data-toggle="tooltip" title="@lang('layout.lang_'.$locale)"><img src="/assets/flags/{{$locale}}.svg" alt="teomoda flag" width="25" style="border-radius: 50%; border: 2px solid rgb(178,240,255);"></a>
                    @endforeach
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link teomoda_color position-relative {{ Request::path() == '/' ? 'active' : '' }}" href="/{{ app()->getLocale() }}">@lang('layout.home')</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative {{ Request::path() == 'about' ? 'active' : '' }}" href="/{{ app()->getLocale() }}/about">@lang('layout.about')</a></li>
                        <li class="nav-item submenu ">
                            <a id="nav-link-services" href="/{{ app()->getLocale() }}/services" class="nav-link dropdown-toggle teomoda_color position-relative {{ Request::path() == 'services' ? 'active' : '' }}" role="button" aria-haspopup="true" aria-expanded="false" >@lang('layout.services')</a>
                            <ul class="dropdown dropdown-menu">
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/{{ app()->getLocale() }}/personal-color-consultation">@lang('layout.personal_color_consultation')</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/{{ app()->getLocale() }}/personal-style-consultation">@lang('layout.personal_style_consultation')</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/{{ app()->getLocale() }}/wardrobe-audit">@lang('layout.wardrobe_audit')</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/{{ app()->getLocale() }}/personal-shopping">@lang('layout.personal_shopping')</a></li>
                                <li class="nav-item"><a class="dropdown-nav-link nav-link teomoda_color" href="/{{ app()->getLocale() }}/personalized-package">@lang('layout.personalized_package')</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative contact-btn {{ Request::path() == 'gellery-and-style-tips' ? 'active' : '' }}" href="/{{ app()->getLocale() }}/gellery-and-style-tips">@lang('layout.gallery_and_style_tips')</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative contact-btn {{ Request::path() == 'testimonials' ? 'active' : '' }}" href="/{{ app()->getLocale() }}/testimonials">@lang('layout.testimonials')</a></li>
                        <li class="nav-item"><a class="nav-link teomoda_color position-relative contact-btn {{ Request::path() == 'contact' ? 'active' : '' }}" href="/{{ app()->getLocale() }}/contact">@lang('layout.contact')</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer_area p_80">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>@lang('layout.about_me')</h3>
                    </div>
                    <p>Styling you to feel radiant, comfortable and confident, all within your budget.</p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://teomoda.com"  class="teomoda_color" target="_blank">teomoda.com</a>
                    <p></p>
                    Design & solution by <a href="https://webron.hu" target="_blank"><span style="color: rgb(132,155,89)">Web</span><span style="color: rgb(188,237,72)">ron</span></a>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Quick menu</h3>
                    </div>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/">@lang('layout.home')</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/about">@lang('layout.about')</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/services">@lang('layout.services')</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/gellery-and-style-tips">@lang('layout.gallery_and_style_tips')</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/testimonials">@lang('layout.testimonials')</a></li>
                            <li class="nav-item"><a class="nav-link p-0 text-light teomoda_color" href="/{{ app()->getLocale() }}/contact">@lang('layout.contact')</a></li>
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
                        <li><a href="https://www.facebook.com/styleteomoda" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/teomoda_style/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/dóra-teodóra-kéry-71351237/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/stellar.js"></script>
{{--<script src="vendors/simplelightbox/dist/simple-lightbox.min.js"></script>--}}
<script src="/vendors/simplelightbox/dist/simple-lightbox.jquery.js"></script>
<script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/js/jquery.ajaxchimp.min.js"></script>
<script src="/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="/vendors/counter-up/jquery.counterup.min.js"></script>
<script src="/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="/vendors/isotope/isotope.pkgd.js"></script>
<script src="/vendors/isotope/fit-column.js"></script>
{{--<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>--}}
<!-- or -->
@yield('validation')
<script src="/js/theme.js?v={{time()}}"></script>
<script>
    $('.gallery a').simpleLightbox();
</script>
</body>
</html>

