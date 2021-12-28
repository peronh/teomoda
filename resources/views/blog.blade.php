@extends('layout')

@section('title', 'Teomoda | Gallery / Style tips')

@section('content')

    <section class="banner_area">
        <div class="banner_inner banner_gallery_tips d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2 class="banner_h2">Gallery/Style tips</h2>
                    <div class="page_link">
                        <a class="banner_a" href="/">Home</a>
                        <a class="banner_a" href="/gellery-and-style-tips">Gallery/Style tips</a>
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
            <div class="gallery d-flex ">
                <a href="assets/Nyar.jpeg" class="gallery-item" style="background-image: url('assets/Nyar.jpeg')"></a>
                <a href="assets/Osz.jpeg" class="gallery-item" style="background-image: url('assets/Osz.jpeg')"></a>
                <a href="assets/contact.jpg" class="gallery-item" style="background-image: url('assets/contact.jpg')"></a>
            </div>
            --}}
        </div>
    </section>
@endsection
