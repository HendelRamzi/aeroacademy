<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration - @stack('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    {{-- font awsome link --}}
    @vite([
        "resources/css/admin/plugins/fontAwsome.css",
        "resources/css/admin/adminLte.css",
        
    ])

    @stack('custom-css')
</head>
<body class="hold-transition sidebar-mini" >
    <div class="wrapper">

        {{-- header import --}}
        @include('admin.layouts.header')

        {{-- Sidebar import --}}
        @include('admin.layouts.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>


    </div>


    @stack('custom-js')

</body>
</html>