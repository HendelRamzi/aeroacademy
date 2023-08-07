@extends('website.layouts.website')


{{-- Title of the page --}}
@push('title')
    contactez-nous
@endpush


@push('custom-css')
    @vite([
        "resources/css/modules/breadcrumb.css",
        "resources/css/modules/contact.css",


        "resources/css/plugins/font-awesome.min.css",
        "resources/css/plugins/flaticon.css",
    ])
@endpush

@section('content')
    
        <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="shape-box"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">

                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Acceuil</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Contactez-nous</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->



        <!--Start Google Map Style2 Area-->
        <section class="google-map-area">
            <div class="auto-container">
                <div class="contact-page-map-outer">
                    <div class="contact-info-box">
                        <div class="left-box">
                            <h2><a href="tel:123456789">+3-(856) 000-9850</a></h2>
                            <h3><a href="mailto:yourmail@email.com">needhelp@company.com</a></h3>
                        </div>
                        <div class="middle-box">
                            <p>60 Broklyn Golden Street<br> New York. USA</p>
                        </div>
                        <div class="right-box">
                            <div class="thm-social-link1">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-facebook-circular-logo"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Google Map Style2 Area-->



        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="border-box"></div>
                        <h3>Contact with us</h3>
                    </div>
                    <h2>Write a Message</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="assets/inc/sendmail.php" method="post">

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_name" id="formName"
                                                    placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="form_email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" id="formPhone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="form_message" id="formMessage"
                                                    placeholder="Write a Message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 text-center">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    send a message
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->



@endsection





@push('custom-js')
    
    {{-- JS Files --}}
    @vite([
        'resources/js/app.js',
        "resources/js/jquery.js",
        
        
        'resources/js/custom.js', 
    ])

@endpush
