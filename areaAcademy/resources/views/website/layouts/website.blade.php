<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aeroAcademy - @stack('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    @stack('custom-css')
    {{-- Css Files --}}
    @vite([
        "resources/sass/app.scss",
        'resources/css/style.css',
        "resources/css/responsive.css",

        "resources/css/modules/header.css",
        "resources/css/modules/footer.css"

    ])


</head>
<body>

    <div class="boxed_wrapper">
    
        @include('website.layouts.header')
        
        @yield('content')
    
    </div>

    

    <div class="">
        @include('website.layouts.footer')
    </div>



    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>





    @vite([
        "resources/js/plugins/parallax.min.js",
        
    ])
    @stack('custom-js')


</body>
</html>