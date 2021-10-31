@extends('layout')

@section('content')
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img src="assets/feher.jpg" alt="teomoda_profil" class="w-100" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h5>About me</h5>
                            <h2>Dora Kery</h2>
                            <p>My motto is:</p>
                            <p>“Styling you to feel radiant, comfortable and confident, all within your budget.”</p>
                            <a class="banner_btn" href="/about">ABOUT MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects_area p_80">
        <div class="container pricing-container">
            <div class="main_title">
                <h2>Personalized services</h2>
            </div>
            <div class="projects_inner row">
                <div class="col-xl-3 col-md-6 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONAL COLOR CONSULTATION</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview (Zoom, Skype, Facetime) followed by a 90 min. in-person /online consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$75</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/personal-color-consultation" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 brand work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONAL STYLE CONSULTATION</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview and preparation session (Zoom, Skype, Facetime) followed by a 120 min. in-person consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$100</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/personal-style-consultation" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">WARDROBE AUDIT</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30min. free online interview (via Zoom, Skype, Facetime) followed by 3hours of consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$150</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/wardrobe-audit" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONAL SHOPPING</p>
                            <p class="mh286"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview and preparation session (Zoom, Skype, Facetime) followed by a 3hour in-person shopping and a 1hour (virtual) follow up.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$250</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/personal-shopping" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials_area p_80">
        <div class="container">
            <div class="main_title">
                <h2>Testimonials</h2>
                <p>Aliquam convallis turpis non ipsum maximus, vitae rhoncus nunc dapibus. Proin id massa eget eros finibus fringilla. Phasellus eu metus sed quam hendrerit placerat id id justo. </p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <p>Aliquam convallis turpis non ipsum maximus, vitae rhoncus nunc dapibus. Proin id massa eget eros finibus fringilla. Phasellus eu metus sed quam hendrerit placerat id id justo. </p>
                            <h4>Lorem Ipsum </h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <p>Aliquam convallis turpis non ipsum maximus, vitae rhoncus nunc dapibus. Proin id massa eget eros finibus fringilla. Phasellus eu metus sed quam hendrerit placerat id id justo. </p>
                            <h4>Lorem Ipsum </h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <p>Aliquam convallis turpis non ipsum maximus, vitae rhoncus nunc dapibus. Proin id massa eget eros finibus fringilla. Phasellus eu metus sed quam hendrerit placerat id id justo. </p>
                            <h4>Lorem Ipsum </h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest_blog_area p_80">
        <div class="container">
            <div class="main_title">
                <h2>Latest Posts from Blog</h2>
                <p>No blogs for available</p>
            </div>
            {{--
            <div class="row latest_blog_inner">
                <div class="col-lg-4">
                    <div class="l_blog_item">
                        <div class="l_blog_img">
                            <img class="img-fluid" src="assets/blog_demo.JPG" alt="">
                        </div>
                        <div class="l_blog_text">
                            <div class="date">
                                <a href="#">25 October, 2017  |  By Dora Kery</a>
                            </div>
                            <a href="#"><h4>Curabitur sodales ligula euismod ipsum ultrices</h4></a>
                            <p>Ut vehicula pellentesque tellus, condimentum dapibus orci sollicitudin quis. Vivamus eget felis justo. Donec a lobortis neque, vel molestie enim. In non urna sit amet mi molestie varius at vel ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="l_blog_item">
                        <div class="l_blog_img">
                            <img class="img-fluid" src="assets/blog_demo.JPG" alt="">
                        </div>
                        <div class="l_blog_text">
                            <div class="date">
                                <a href="#">25 October, 2017  |  By Dora Kery</a>
                            </div>
                            <a href="#"><h4>Curabitur sodales ligula euismod ipsum ultrices</h4></a>
                            <p>Ut vehicula pellentesque tellus, condimentum dapibus orci sollicitudin quis. Vivamus eget felis justo. Donec a lobortis neque, vel molestie enim. In non urna sit amet mi molestie varius at vel ipsum. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="l_blog_item">
                        <div class="l_blog_img">
                            <img class="img-fluid" src="assets/blog_demo.JPG" alt="">
                        </div>
                        <div class="l_blog_text">
                            <div class="date">
                                <a href="#">25 October, 2017  |  By Dora Kery</a>
                            </div>
                            <a href="#"><h4>Curabitur sodales ligula euismod ipsum ultrices</h4></a>
                            <p>Ut vehicula pellentesque tellus, condimentum dapibus orci sollicitudin quis. Vivamus eget felis justo. Donec a lobortis neque, vel molestie enim. In non urna sit amet mi molestie varius at vel ipsum. </p>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </section>
@endsection
