@extends('layout')

@section('title', 'Teomoda | Services')

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
@endsection
