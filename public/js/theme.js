;(function($){
    "use strict"

    $(window).on("load", function() {
        $('.page-load').fadeOut(500);
    });

    var nav_offset_top = $('header').height() + 50;
    /*-------------------------------------------------------------------------------
	  Navbar
	-------------------------------------------------------------------------------*/

    //* Navbar Fixed
    function navbarFixed(){
        if ( $('.header_area').length ){
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                    $("#home-logo").addClass("home-logo-w");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                    $("#home-logo").removeClass("home-logo-w");
                }
            });
        };
    };
    navbarFixed();


    /*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
    function parallaxEffect() {
        $('.bg-parallax').parallax();
    }
    parallaxEffect();

    /*----------------------------------------------------*/
    /*  MailChimp Slider
    /*-------------------
    function mailChimp(){
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();

	$('select').niceSelect();
---------------------------------*/
    /*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
    $('.imageGallery1 .light').simpleLightbox();
    /*
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    */
    $(".skill_main").each(function() {
        $(this).waypoint(function() {
            var progressBar = $(".progress-bar");
            progressBar.each(function(indx){
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view'

        });
    });


    /*----------------------------------------------------*/
    /*  Isotope Fillter js
    /*----------------------------------------------------*/
    /*
        function projects_isotope(){
            if ( $('.projects_area').length ){
                // Activate isotope in container
                $(".projects_inner").imagesLoaded( function() {
                    $(".projects_inner").isotope({
                        layoutMode: 'fitRows',
                        animationOptions: {
                            duration: 750,
                            easing: 'linear'
                        }
                    });
                });

                // Add isotope click function
                $(".filter li").on('click',function(){
                    $(".filter li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $(".projects_inner").isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 450,
                            easing: "linear",
                            queue: false,
                        }
                    });
                    return false;
                });
            }
        }
        projects_isotope();

    */
    /*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider(){
        if ( $('.testi_slider').length ){
            $('.testi_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav: false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    1200: {
                        items: 3,
                    },
                }
            })
        }
    }
    testimonials_slider();

    if (window.innerWidth < 980)
    {
        $('#nav-link-services').attr('data-toggle', 'dropdown');
    }

    $('.alert').delay(5000).fadeOut(600);

    $("#personal-color-consultation").click(function ()  {
        sessionStorage.param = "personal-color-consultation";
        sessionStorage.setItem("price", "personal-color-consultation");
    });
    $("#personal-style-consultation").click(function ()  {
        sessionStorage.param = "personal-style-consultation";
        sessionStorage.setItem("price", "personal-style-consultation");
    });
    $("#wardrobe-audit").click(function ()  {
        sessionStorage.param = "wardrobe-audit";
        sessionStorage.setItem("price", "wardrobe-audit");
    });
    $("#personal-shopping").click(function ()  {
        sessionStorage.param = "personal-shopping";
        sessionStorage.setItem("price", "personal-shopping");
    });
    $("#personalized-package").click(function ()  {
        sessionStorage.param = "personalized-package";
        sessionStorage.setItem("price", "personalized-package");
    });

    $(".contact-btn").click(function ()  {
        sessionStorage.clear();
    });

    var param = sessionStorage.getItem("price");

    if (param == "personal-color-consultation")
    {
        $("#contactForm").find("#subject").val("Personal color consultation");
    }
    if (param == "personal-style-consultation")
    {
        $("#contactForm").find("#subject").val("Personal style consultation");
    }
    if (param == "wardrobe-audit")
    {
        $("#contactForm").find("#subject").val("Wardrobe audit");
    }
    if (param == "personal-shopping")
    {
        $("#contactForm").find("#subject").val("Personal shopping");
    }
    if (param == "personalized-package")
    {
        $("#contactForm").find("#subject").val("Personalized package");
    }

})(jQuery)
