<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Corona Laravel' }} | {{ config('app.name') }}</title>

    <link href="{{ asset('theme/vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('theme/vendors/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/flag-icon-css/css/flag-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/owl-carousel-2/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/owl-carousel-2/owl.theme.default.min.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/RonaldCodesLogo.png') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/assets/css/style.css'])

</head>

<body>

    <div class="container-scroller">
        <livewire:navigation.side-navigation />

        <div class="container-fluid page-body-wrapper">
            <livewire:navigation.top-navigation />

            <div class="main-panel">
                {{ $slot }}

                <livewire:navigation.footer />
            </div>
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{ asset('theme/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('theme/vendors/chart.js/chart.umd.js') }}"></script>
    {{-- <script src="{{ asset('theme/vendors/progressbar.js/progressbar.min.js') }}"></script> --}}
    <script src="{{ asset('theme/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('theme/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('theme/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/misc.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/settings.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/todolist.js') }}" type="text/javascript"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/proBanner.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>

</body>

</html>
