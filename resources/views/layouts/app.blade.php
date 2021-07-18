<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fuiyoh_Hub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
          .background-img {
                background-image: url('images/login_background.png');
                background-repeat: no-repeat;
                background-size: 100%;
            }

          .bg-color-navbar {
              background-color:#2d2d2d;
          }
    
    </style>
</head>
<body class="background-img">
     <!-- Navigation bar -->
    @include('layouts.navbar')
    <div id="app" >
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
