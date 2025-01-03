<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/1725615898-66dacf1a20790.png') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/carouselTicker.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>


<body>
    <header>
        @include('layouts.partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.partials.footer')
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Libs JS -->
    <script src="{{ asset('js/vendors/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/aos.js') }}"></script>
    <script src="{{ asset('js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('js/vendors/smart-stick-nav.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendors/gsap.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.carouselTicker.min.j') }}s"></script>
    <script src="{{ asset('js/vendors/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendors/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendors/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/vendors/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/vendors/SplitText.js') }}"></script>
    <script src="{{ asset('js/vendors/aat.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('js/gsap-custom.js') }}"></script>
    <script src="{{ asset('js/gsap-text-animation.js') }}"></script>
    <script src="{{ asset('js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
