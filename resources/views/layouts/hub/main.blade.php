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

	<title>@yield('page_title') :: {{ config('app.name', 'Fuiyoh_Hub') }}</title>

    <!--  Vendor  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/dataTables/datatables.min.css') }}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--  Fuiyoh Style  -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}

	<!--Google Map Autocomplete -->
	<!---BILLING IS REQUIRED TO USE AUTOCOMPLETE GOOGLE MAP API---->{{--
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGuk0kb5FQ24LflR1C7BtGIE24xaQHfOg&libraries=places"></script>--}}

</head>
<body>

    <div class="wrapper">
        @include('layouts.hub.navigations.topbar')

        @include('layouts.hub.navigations.sidebar')

        <section class="content-wrapper">
            @yield('content')
        </section>
    </div>

    <!--  Vendor  -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/dataTables/datatables.min.js') }}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>

    <!--  Fuiyoh Custom Script  -->
    <script src="{{ asset('assets/js/fuiyoh_hub.js') }}"></script>
    <script src="{{ asset('assets/js/fuiyoh_admin.js') }}"></script>

    <script>
          $('#allCheckHub').on('click', function (e) {
            if($(this).is(':checked',true)) {
                $(".subChkOrderHub").prop('checked', true);
            } else {
                $(".subChkOrderHub").prop('checked',false);
            }
        });

        $('.download_bulk_hub').on('click', function(e) {
            e.preventDefault();
            let allVals = [];
            
            $(".subChkOrderHub:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });
            if( allVals.length <= 1 ) {
                alert("Please select more than 1 row.");
            } else {            
                    //let join_selected_values = allVals.join(",");
                    //const newUrl = "{{route('order.print.bulk')}}?ids=" + allVals.join(",")
                   // window.location = newUrl;
                    $(".subChkOrderHub:checked").each(function() {
                        window.open($(this).attr('data-id'));
            });
                
            }
        });
    </script>


</body>
</html>
