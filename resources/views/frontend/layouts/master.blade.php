<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Default || Inbio - Personal Portfolio Bootstrap-5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    @include('frontend.layouts.header')

    @yield('body_content')

    @include('frontend.layouts.footer')

    <!-- End Footer Area -->
    <!-- JS ============================================ -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/particles.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
