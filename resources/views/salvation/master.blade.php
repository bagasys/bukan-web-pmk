<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salvation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/salvation/css/animate.css')}} ">

    <link rel="stylesheet" href="{{ asset('/salvation/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('/salvation/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/salvation/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{ asset('/salvation/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('/salvation/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('/salvation/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('/salvation/css/style.css')}}">
</head>

<body>
    <!-- nav -->
    @include('salvation.partials.nav')
    <!-- END nav -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    @include('salvation.partials.footer')
    <!-- END footer -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{asset ('salvation/js/jquery.min.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset ('salvation/js/popper.min.js')}}"></script>
    <script src="{{asset ('salvation/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset ('salvation/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset ('salvation/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset ('salvation/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset ('salvation/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset ('salvation/js/google-map.js')}}"></script>
    <script src="{{asset ('salvation/js/main.js')}}"></script>

    @stack('scripts')

</body>