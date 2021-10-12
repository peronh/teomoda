@extends('layout')

@section('title', 'About us')

@section('content')
    <section class="banner_area">
        <div class="banner_inner banner_services d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2 class="banner_h2">Services</h2>
                    <div class="page_link">
                        <a class="banner_a" href="/">Home</a>
                        <a class="banner_a" href="/services">Services</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Projects Area =================-->
    <section class="projects_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Our Recent Completed Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
            </div>
            <div class="projects_fillter">
                <ul class="filter list">
                    <li class="active" data-filter="*"><a href="#">All Categories</a></li>
                    <li data-filter=".brand"><a href="#">Branding</a></li>
                    <li data-filter=".work"><a href="#">Creative Work </a></li>
                    <li data-filter=".web"><a href="#">Web Design</a></li>
                </ul>
            </div>
            <div class="projects_inner row">
                <div class="col-lg-3 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <p class="text-uppercase">PERSONAL COLOR CONSULTATION</p>
                            <p>“The best color in the whole world is the one that looks good on you”</p>
                            <img class="img-fluid" src="img/projects/projects-1.jpg" alt="">
                            <div class="projects_text">
                            </div>
                        </div>
                        <a href="portfolio-details.html" class="btn btn-danger pull-right service-btn mr-5 position-relative">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 brand work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <p class="text-uppercase">PERSONAL STYLE CONSULTATION</p>
                            <p>“Style is a way to say who you are without having to speak”</p>
                            <img class="img-fluid" src="img/projects/projects-2.jpg" alt="">
                            <div class="projects_text">
                            </div>
                        </div>
                        <a href="portfolio-details.html" class="btn btn-danger pull-right service-btn mr-5 position-relative">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <p class="text-uppercase">WARDROBE AUDIT</p>
                            <p>“Buy less, choose well and make it last!”</p>
                            <img class="img-fluid" src="img/projects/projects-3.jpg" alt="">
                            <div class="projects_text">
                            </div>
                        </div>
                        <a href="portfolio-details.html" class="btn btn-danger pull-right service-btn mr-5 position-relative">read more</a>
                    </div>
                </div>
                <div class="col-lg-3 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <p class="text-uppercase">PERSONAL SHOPPING</p>
                            <p>“Be your own personal shopper”</p>
                            <img class="img-fluid" src="img/projects/projects-4.jpg" alt="">
                            <div class="projects_text">
                            </div>
                        </div>
                        <a href="portfolio-details.html" class="btn btn-danger pull-right service-btn mr-5 position-relative">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
