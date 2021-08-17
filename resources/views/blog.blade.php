@extends('layout')

@section('title', 'Blogs')

@section('content')

    <section class="banner_area">
        <div class="banner_inner banner_blog d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Blogs</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/blog">BLOGS</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="latest_blog_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Latest Posts from Blog</h2>
                <p>Aliquam convallis turpis non ipsum maximus, vitae rhoncus nunc dapibus. Proin id massa eget eros finibus fringilla. Phasellus eu metus sed quam hendrerit placerat id id justo. </p>
            </div>
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
            </div>
        </div>
    </section>
@endsection
