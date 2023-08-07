@extends('website.layouts.website')


{{-- Title of the page --}}
@push('title')
    formations
@endpush


@push('custom-css')
    @vite([
        "resources/css/modules/services.css",
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
                            <li><a href="index.html">accueil</a></li>
                            <li class="active">Formations</li>
                        </ul>
                    </div>
                    <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <h2>Nos Formations</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->



<!--Start Service Page -->
<section class="service-page">
    <div class="container">
        <div class="row">

            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-1.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-creative"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-1.html">Consumer Product</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-1.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->


            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-1.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-creative"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-1.html">Consumer Product</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-1.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->



            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-2.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-business"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-2.html">Banking Advising</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-2.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->
            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-3.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-global"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-3.html">Marketing Rules</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-3.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->

            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-4.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-mobile-analytics"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-4.html">Business Growth</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-4.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->
            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-5.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-analysis"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-5.html">Audit Marketing</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-5.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->
            <!--Start Single Service Style2-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="single-service-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/services/service-v1-6.jpg" alt="">
                        </div>
                        <div class="icon">
                            <span class="icon-creative-1"></span>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="services-single-6.html">Financial Advice</a></h3>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                sed.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="services-single-6.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Service Style2-->

        </div>
    </div>
</section>
<!--End Service Page-->




@endsection


@push('custom-js')
    
    {{-- JS Files --}}
    @vite([
        'resources/js/app.js',
        "resources/js/jquery.js",
        
        




        'resources/js/custom.js', 
    ])

@endpush


