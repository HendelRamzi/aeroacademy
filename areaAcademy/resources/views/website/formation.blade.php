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


            @foreach ($formations as $formation)
                <!--Start Single Service Style2-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="single-service-style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{asset($formation->picture)}}" alt="">
                            </div>

                        </div>
                        <div class="title-holder">
                            <h3><a href="{{route('website.formation-details', ['slug' => $formation->slug])}}">{{$formation->name}}</a></h3>
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit don amet tristique ante vel dictum is not rhoncus elit
                                    sed.
                                </p>
                            </div>
                            <div class="btn-box">
                                <a href="{{route('website.formation-details', ['slug' => $formation->slug])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                                </a>                            
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style2-->               
            @endforeach



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


