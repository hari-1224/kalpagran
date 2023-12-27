<!DOCTYPE html>
<html lang="en">

@include('layouts.include.header')

<body>
    @include('layouts.include.menu')
    @include('layouts.include.loader')


    <div class="container-section">

        <!-- ======= Hero Section ======= -->
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('layouts.include.footer')
    </footer>

    <!-- Vendor JS Files -->
    @include('layouts.include.footer_links')

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fontawesome/css/font-awesome.min.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/loader.min.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-slider.min.css') }}">
    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">
    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">

{{-- Contact form fonts --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('frontend/js/jquery-1.19.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.owl-filter.js') }}"></script>
    <script src="{{ asset('frontend/js/stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bgscroll.js') }}"></script>
    <script src="{{ asset('frontend/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('frontend/js/switcher.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-slider.min.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{ asset('frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('frontend/js/rev-script-1.js') }}"></script>
    {{-- <script>
        const bars = document.querySelector(".bars");
        const nav = document.querySelector("nav");

        bars.onclick = () => {
            nav.classList.toggle("active");
            
        };
    </script> --}}
    <script>
        const bars = document.querySelector(".bars");
        const nav = document.querySelector("nav");
        const logo = document.querySelector(".logo");

        bars.onclick = () => {
            nav.classList.toggle("active");
            logo.classList.toggle("hidden");
        };
    </script>
</body>

</html>
