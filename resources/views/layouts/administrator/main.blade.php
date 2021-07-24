<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fuiyoh_Hub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CoreUI CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- jQuery library-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--Validate fields plugin --->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

   
    
     <!--Google Map Autocomplete -->
     <!---BILLING IS REQUIRED TO USE AUTOCOMPLETE GOOGLE MAP API---->
     {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGuk0kb5FQ24LflR1C7BtGIE24xaQHfOg&libraries=places"></script> --}}
    

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
<body>
     <!-- Navigation bar -->
     @include('layouts.administrator.navigations.topbar')
    <div id="app">  
        <!---Side Bar---->
        @include('layouts.administrator.navigations.sidebar')
        <main class="py-4 sidenav-margin-left">
            @yield('content')
        </main>
    </div>




</body>
</html>
