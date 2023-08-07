@extends('website.layouts.website')


{{-- Title of the page --}}
@push('title')
    formations
@endpush


@push('custom-css')
@livewireStyles

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
                                    <li><a href="index.html">Acceuil</a></li>
                                    <li><a href="services.html">Formations</a></li>
                                    <li class="active">{{$formation->name}}</li>
                                </ul>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>{{$formation->name}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Service Details area -->
        <section class="service-details-area">
            <div class="container">
                <div class="row">

                    <!--Start Service Details Sidebar -->
                    <div class="col-xl-4 col-lg-5 order-box-2">
                        <div class="service-details__sidebar">

                            <div class="view-all-service">
                                <ul class="service-pages">
                                    @foreach ($formations as $form)
                                        @if ($form->id != $formation->id)
                                            <li class="">
                                                <a href="{{route('website.formation-details',['slug'=>$form->slug])}}">{{$form->name}}</a>
                                            </li> 
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="service-details-contact-info text-center">
                                <div class="sidebar-info-box-bg"
                                    style="background-image: url({{asset($formation->picture)}});"></div>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <h3>Contact nous pour plus d'informations</h3>
                                <h2><a >+213 (0) 23 27 42 53</a></h2>
                            </div>

                        </div>
                    </div>
                    <!--End Service Details Sidebar -->

                    <!--Start Service Details Content -->
                    @livewire('formation.description', [
                        'formation' => $formation
                    ])
                    <!--End Service Details Content -->

                </div>
            </div>
        </section>
        <!--End Service Details area -->

@endsection


@push('custom-js')
@livewireScripts
   
{{-- JS Files --}}
@vite([
    'resources/js/app.js',
    "resources/js/jquery.js",
    'resources/js/custom.js', 
])
@endpush





