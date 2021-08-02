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
        <!-- Navigation bar -->
        @include('layouts.dashboard.navigation-dashboard')
        <!-- Side Bar -->
        @include('layouts.dashboard.sidebar-dashboard')

        <section class="content-wrapper">
            @yield('content')
        </section>

        <!-- Modal -->
        @include('layouts.dashboard.create-order-modal')
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

    @stack('onpagescript')

	<!-- Optional JavaScript -->
	<!-- Popper.js first, then CoreUI JS -->{{--
	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>--}} {{--
	<script type="text/javascript">
		google.maps.event.addDomListener(window, 'load', function () {
		        var places = new google.maps.places.Autocomplete(document.getElementById('customerAddress'));
		        google.maps.event.addListener(places, 'place_changed', function () {

		        });
		    });
	</script>--}}
	<script>
		$(function() {
		      $( "#pickupDate" ).datepicker({
		          dateFormat: 'dd-mm-yy',
		          minDate : 0,
		          onSelect: function (date) {
		            var date2 = $('#pickupDate').datepicker('getDate');
		            date2.setDate(date2.getDate() + 1);
		            //sets minDate to pick up date + 1
		            $('#deliveryDate').datepicker('option', 'minDate', date2);

		            // check if current date is today
		            //set timepicker to be later range of time
		            // var current_date = $('#pickupDate').datepicker('getDate');
		            // var today = new Date();
		            // var dd = String(today.getDate()).padStart(2, '0');
		            // var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
		            // var yyyy = today.getFullYear();
		            // //today = dd + '-' + mm + '-' + yyyy;
		            // //console.log(today.toUTCString());
		            // console.log(today);
		            // console.log(current_date);

		            // // if(current_date == today.toUTCString()){
		            // //     console.log('today is the day');
		            // // }

		          }
		        });

		        $( "#deliveryDate" ).datepicker({
		          dateFormat: 'dd-mm-yy',
		          minDate : 0,
		          onClose: function () {
		            var pickupDate = $('#pickupDate').datepicker('getDate');
		            var deliveryDate = $('#deliveryDate').datepicker('getDate');
		            //check to prevent a user from entering a date below date of pickup date
		            if (deliveryDate <= pickupDate) {
		                var minDate = $('#deliveryDate').datepicker('option', 'minDate');
		                $('#deliveryDate').datepicker('setDate', minDate);
		            }
		         }
		        });

		        $('#pickupTime').timepicker({
		            minTime: '9',
		            maxTime: '5:00pm',
			    });

		        function alertme(){
		    alert('ok');
		  }

		});
	// Start of Tawk.to script
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/61079922649e0a0a5ccf0b7c/1fc2qscic';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	//End of Tawk.to Script
		
	</script>


</body>
</html>
