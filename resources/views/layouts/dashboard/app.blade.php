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
     @include('layouts.dashboard.navigation-dashboard')
    <div id="app">  
        <!---Side Bar---->
        @include('layouts.dashboard.sidebar-dashboard')
        <main class="py-4 sidenav-margin-left">
            @yield('content')
        </main>
    </div>

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 {{-- <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script> --}}

 {{-- <script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('customerAddress'));
        google.maps.event.addListener(places, 'place_changed', function () {

        });
    });
</script> --}}

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
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

</body>
</html>
