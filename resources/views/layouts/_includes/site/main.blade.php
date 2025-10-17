<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/Business/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Oct 2025 10:21:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>@yield('title')</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('https://themewagon.github.io/assets/images/favicon.svg')}}" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ url('site/assets/css/bootstrap.min.css')}}" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ url('site/assets/css/lineicons.css')}}" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="{{ url('site/assets/css/tiny-slider.css')}}" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="{{ url('site/assets/css/glightbox.min.css')}}" />

    <link rel="stylesheet" href="{{ url('site/assets/css/style.css')}}" />
</head>
<body>

    {{-- icnludes --}}
    @include('layouts._includes.site.header')
    @include('layouts._includes.site.sidebar')
    @include('layouts._includes.site.menu')
    
    {{-- content --}}
    @yield('content')
    
    {{-- footer --}}
    @include('layouts._includes.site.footer')

    <!--====== js ======-->
    <script src="{{ url('site/assets/js/bootstrap.bundle.min.js')}}')}}"></script>
    <script src="{{ url('site/assets/js/glightbox.min.js')}}"></script>
    <script src="{{ url('site/assets/js/main.js')}}"></script>
    <script src="{{ url('site/assets/js/tiny-slider.js')}}"></script>

    <script>
        //===== close navbar-collapse when a  clicked
        let navbarTogglerNine = document.querySelector(
            ".navbar-nine .navbar-toggler"
        );
        navbarTogglerNine.addEventListener("click", function() {
            navbarTogglerNine.classList.toggle("active");
        });

        // ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function() {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function() {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function() {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>


<!-- Mirrored from themewagon.github.io/Business/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Oct 2025 10:21:37 GMT -->

</html>
