@extends('layout')

@section('title', 'Teomoda | About us')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner banner_about d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center position-relative">
                    <h2 class="banner_h2">@lang('layout.about_me')</h2>
                    <div class="page_link">
                        <a class="banner_a" href="/{{ app()->getLocale() }}/">Home</a>
                        <a class="banner_a" href="/{{ app()->getLocale() }}/about">@lang('layout.about_me')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row d-flex align-items-center pt-5 pb-5">
                    <div class="col-lg-6">
                        <div class="home_left_img p-0">
                            <img src="/assets/about.jpg" alt="teomoda_profil" class="w-100" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h3>Dora Kery</h3>
                            <h4>@lang('about.about_1')</h4>
                            <h4>@lang('about.about_2')</h4>
                            <h4>@lang('about.about_3')</h4>
                            <p class="fon">@lang('about.about_4')</p>
                            <p>@lang('about.about_5')</p>
                            <p>@lang('about.about_6')</p>
                            <p>@lang('about.motto_is')</p>
                            <p>@lang('about.motto_idea')</p>
                            <p>@lang('about.about_9')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
