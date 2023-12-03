@extends('layout')

@section('title', 'Teomoda | Contatct us')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner contact_us d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2 class="banner_h2">Contact us</h2>
                    <div class="page_link">
                        <a class="banner_a" href="/">Home</a>
                        <a class="banner_a" href="/contact">CONTACT</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_80">
        <div class="container">
            <div class="main_title">
                <h2>Thank you for your interest in TeoModa!</h2>
                <p>I’m looking forward to working with you.</p>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img src="/assets/contact.jpg" class="w-100" alt="">
                </div>
                <div class="col-lg-6 pt-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Wiesbaden, Germany</h6>
                            <p></p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="tel:+4915153341134">+49 151 533 411 34</a></h6>
                            <p>If you have any questions, feel free to give me a call</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="mailto:dora@teomoda.com">dora@teomoda.com</a></h6>
                            <p>send me an e-mail</p>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="row contact_form" {{ route('contactPost') }} method="POST"  id="contactForm">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Your name">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                       placeholder="Enter your email">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message"></textarea>
                                <span class="text-danger">{{ $errors->first('comment') }}</span>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="g-recaptcha btn submit_btn" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}" data-callback='onSubmit' data-action='submit'>Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection

@section('validation')
    <script src="/js/validate.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>

        $(function() {
            $("form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    comment: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    name: {
                        required: "The name field is required!",
                        minlength: "The name must be at least 5 characters long!"
                    },
                    comment: {
                        required: "The message field is required!",
                        minlength: "The message must be at least 5 characters long!"
                    },
                    email: {
                        required: "The email field is required!",
                        email: "Make sure the email format is correct!"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                    sessionStorage.clear();
                }
            });
        });

        function onSubmit(token)
        {
            document.getElementById("contactForm").submit();
        }
        let date  = new Date();
        console.log(date.getHours() +':'+date.getMinutes());
    </script>
@endsection
