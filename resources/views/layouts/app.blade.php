<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') :: {{ config('app.name', 'Fuiyoh Hub') }}</title>

    <!--  Vendor  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/webslidemenu/dropdown-effects/fade-down.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/webslidemenu/webslidemenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/dataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

</head>
<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!--  Vendor  -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/webslidemenu/webslidemenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/dataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/select2/dist/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>

    <!--  Fuiyoh Custom Script  -->
    <script type="text/javascript" src="{{ asset('assets/js/fuiyoh_hub.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6108b9ced6e7610a49ae478a/1fc51bjti';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>
</html>
