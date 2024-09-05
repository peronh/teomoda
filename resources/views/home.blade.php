@extends('layout')

@section('content')

    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img src="/assets/dora-kery.jpg" alt="teomoda_profil" class="w-100" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h5>@lang('layout.about_me')</h5>
                            <h3>Dora Kery</h3>
                            <p>My motto is:</p>
                            <h4 class="font-italic font-weight-normal">“Styling you to feel radiant, comfortable and confident, all within your budget.”</h4>
                            <a class="banner_btn mt-3" href="/{{ app()->getLocale() }}/about">ABOUT MORE</a>
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
                <div class="col-xl-4 col-md-6 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONAL COLOR CONSULTATION</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview (Zoom, Skype, Facetime) followed by a 90 min. consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$75</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/{{ app()->getLocale() }}/personal-color-consultation" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 brand work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONAL STYLE CONSULTATION</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview and preparation session (Zoom, Skype, Facetime) followed by a 120 min. consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$100</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/{{ app()->getLocale() }}/personal-style-consultation" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 work">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">WARDROBE AUDIT</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30min. free online interview (via Zoom, Skype, Facetime) followed by 3hours consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$150</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/{{ app()->getLocale() }}/wardrobe-audit" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 brand web">
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
                            <a href="/{{ app()->getLocale() }}/personal-shopping" class="btn btn-danger service-btn position-relative">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 brand web">
                    <div class="projects_item p-3 bg-teomoda">
                        <div class="project_box p-3 pb-4 text-center">
                            <div class="tb-border"></div>
                            <div class="lr-border"></div>
                            <p class="text-uppercase mh60">PERSONALIZED PACKAGE</p>
                            <p class="mh60"><strong>Available: </strong> <br/>In-person or Online</p>
                            <p class="mh210"><strong>Length: </strong> <br/>This service includes a 15-30 min. free online interview and preparation session (Zoom, Skype, Facetime) followed by a 120 min. consultation.</p>
                            <p><strong>Fee: </strong></p>
                            <h4 class="fee">$120</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/{{ app()->getLocale() }}/personalized-package" class="btn btn-danger service-btn position-relative">read more</a>
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
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">Dora goes beyond just advising:  she teaches.   I learned how my clothing items can be combined in many different ways, and got on the road to dressing myself in a way that reflects my personality.  The outfits Dora put together from my wardrobe were a real revelation!  I can hardly wait to try all the possible combinations.  Thank you Dora!</p>
                            <small><i>/Mary, Budapest, Hungary/</i> </small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">Before consulting with Dora, I had the usual difficulties when getting dressed, feeling: "I have nothing to wear, although my closet is full of clothes".<br/>
                                However, having had a personal style and body analysis, followed by a wardrobe editing consultation, now the time for getting dressed is reduced dramatically. I was given guidance as to how I should re-organize my wardrobe, how to create sets and outfits easily. During this process I also learnt how to revive some pieces that I have not really used before.</p>
                            <small><i>/Orsolya, Hungary/</i> </small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">I had a color consultation with Dora, and I must say I never realized which are the colors that suited me the best and which ones are the no-goes for me. But learning about my basic, neutral and statement colors make all the difference! Knowing my best colors, reduces the time I spend in clothes shops as by recognizing them I can focus really on the ones that suit me well and simply ignore the rest.</p>
                            <small><i>/Barbara - Texas, US/</i> </small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">As a man I was skeptical about having the need of a wardrobe consultant, but now I do not only know what to wear but also how to wear my clothes to be stylish and up-to-date even without having the need to buy new clothes.</p>
                            <small><i>/Peter, Hungary/</i> </small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">It is wonderful to learn which colors suit me best not to mention the ability to shop efficiently. Instead of searching and looking around aimlessly trying to find something which at time I wasn’t even sure about and yet purchased! Now, I am more of a savvy shopper when I enter a store and know exactly how to sort through the items. Thanks to Dora, I don’t have to buy a whole new pricey wardrobe and can utilize apparel I already have by simply being knowledgeable how to mix and match to wear them.</p>
                            <small><i>/Kimberly – Texas, US/</i> </small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item d-flex align-items-center flex-nowrap flex-column justify-content-center">
                            <p class="mh400">I have long wanted to consult somebody about what type of clothing items were really matching my figure. Dora made me feel comfortable right from the beginning through the whole process. I learned about things like silhouettes, cuts, and fabrics that are best suitable specifically for me. I feel like a whole new person with more confidence. I am very thankful to her professional insight and highly recommend anyone who felt the way I did, to reach out to Dora for a consultation.</p>
                            <small><i>/Kristin – Texas, US/</i> </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest_blog_area p_80">
        <div class="container">
            <div class="main_title">
                <h2>Gallery/Style tips</h2>
                <p>No Gallery/Style tips for available</p>
            </div>
            {{--
            <div class="row latest_blog_inner">
                <div class="col-lg-4">
                    <div class="l_blog_item">
                        <div class="l_blog_img">
                            <img class="img-fluid" src="/assets/blog_demo.JPG" alt="">
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
                            <img class="img-fluid" src="/assets/blog_demo.JPG" alt="">
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
                            <img class="img-fluid" src="/assets/blog_demo.JPG" alt="">
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
