@extends('website.layouts.website')


{{-- Title of the page --}}
@push('title')
    Vous-inscrire
@endpush


@push('custom-css')
@livewireStyles

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
                                <li><a href="{{route('website.home')}}">Acceuil</a></li>
                                <li class="active">Inscription</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>FORMULAIRE DE DEMANDE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Main Contact Form Area-->
        @livewire('contact.inscription')
    <!--End Main Contact Form Area-->





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
