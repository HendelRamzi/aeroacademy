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
                            <h2><a href="tel:123456789">+213 (0) 23 27 42 53</a></h2>
                            <h3><a href="mailto:yourmail@email.com">contact@agerieaeroacadem.com</a></h3>
                        </div>
                        <div class="middle-box">
                            <p>55, Cité Bouchebouk les grands <br> vents Dély-Brahim</p>
                        </div>
                        <div class="right-box">
                            <div class="thm-social-link1">
                                <ul class="clearfix">
                                    <li>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg>
                                        </a>
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
        @livewire('contact.create')
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
