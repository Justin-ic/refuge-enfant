<?php  /*hea der(Access-Control-Allow-Origin: *");*/ ?>


<!DOCTYPE html>
<html lang="en">

<!-- register.html  30 Nov 2019 03:29:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONG Refuge</title>
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- nice-select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <title>ONG Refuge</title>
</head>
<body>


@include('layouts.header')



    @yield('contenu')
  

@include('layouts.footer')

<!-- jquery -->
{{-- <script src="{{ asset('assets/js/popper.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- migarate-jquery -->
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- magnific-popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- nice-select js-->
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<!-- swipper js -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- waypoints js link -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- paroller js -->
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<!-- main -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- touchpayv2 -->
<script src=https://touchpay.gutouch.net/touchpayv2/script/touchpaynr/prod_touchpay-0.0.1.js  type="text/javascript"></script>
<script src="{{ asset('assets/js/touchpayv2.js') }}"></script>


</body>

<!-- register.html  30 Nov 2019 03:29:46 GMT -->
</html>




