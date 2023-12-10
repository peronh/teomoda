@extends('layout')

@section('title', 'Teomoda | Gallery / Style tips')

@section('content')

    <section class="banner_area">
        <div class="banner_inner banner_gallery_tips d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2 class="banner_h2">Gallery/Style tips</h2>
                    <div class="page_link">
                        <a class="banner_a" href="/{{ app()->getLocale() }}/">Home</a>
                        <a class="banner_a" href="/{{ app()->getLocale() }}/gellery-and-style-tips">Gallery/Style tips</a>
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

            <div class="projects_fillter">
                <ul class="filter list button-group">
                    <li data-filter="*"><button class=" btn is-checked banner_btn">All Categories</button></li>
                    <li data-filter=".our_best_colors"><button class="btn banner_btn">Our best colors</button></li>
                    <li data-filter=".styling_ideas"><button class="btn banner_btn">Styling ideas</button></li>
                    <li data-filter=".using_accessories"><button class="btn banner_btn">Using accessories</button></li>
{{--                    <li data-filter=".web"><a href="#">Web Design</a></li>--}}
                </ul>
            </div>

            <div id="gallery" class="grid gallery d-flex flex-wrap justify-content-center projects_inner">
                <a href="/assets/gallery_and_tips/gallery_26.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/gallery_26.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_1420.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_1420.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_2169.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_2169.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_3311.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_3311.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_5248.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_5248.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_8215.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_8215.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_8306.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_8306.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_8309.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_8309.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_9856.JPG" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/IMG_9856.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/scottish scarf.jpg" class="gallery-item our_best_colors" style="background-image: url('/assets/gallery_and_tips/scottish scarf.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/black pants1.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/black pants1.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/black pants2.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/black pants2.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/black pants5.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/black pants5.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo1.JPG" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo1.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo2.JPG" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo2.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo3.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo3.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo4.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo4.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo5.JPG" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo5.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/combo6.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/combo6.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/dress.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/dress.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_22.JPG" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/gallery_22.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_24.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/gallery_24.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_34.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/gallery_34.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/grey dress1.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/grey dress1.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/grey dress2.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/grey dress2.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/grey dress2.jpg" class="gallery-item styling_ideas" style="background-image: url('/assets/gallery_and_tips/grey dress2.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_1.JPG" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_1.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_27.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_27.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_28.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_28.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_29.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_29.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_31.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_31.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/gallery_32.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/gallery_32.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_2118.JPG" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_2118.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_3187.JPG" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_3187.JPG');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_3191.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_3191.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_5328.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_5328.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_5339.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_5339.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_5344.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_5344.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_6985.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_6985.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_9417.jpg" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_9417.jpg');background-position: center top"></a>
                <a href="/assets/gallery_and_tips/IMG_9837.JPG" class="gallery-item using_accessories" style="background-image: url('/assets/gallery_and_tips/IMG_9837.JPG');background-position: center top"></a>
            </div>

        </div>
    </section>

@endsection
@section('validation')
    <script>
        let grid = $(".grid").isotope({
            itemSelector: ".gallery-item",
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                columnWidth: 20
            },

            animationOptions: {
                duration: 750,
                easing: 'linear'
            }
        });

        $('.projects_fillter').on( 'click', 'li', function() {
            let filterValue = $( this ).attr('data-filter');
            grid.isotope({ filter: filterValue });
        });

        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });

        grid.imagesLoaded().progress(function() {
            $grid.isotope('layout');
        });

    </script>

@endsection
