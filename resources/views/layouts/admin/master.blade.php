<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon">
    <!-- Custom Page Stye -->
    @stack('style')
</head>

<body>
    <div id="app">
        <!-- start: SIDEBAR -->
        @include('layouts.admin.partials.sidebar')
        <!-- end: SIDEBAR -->

        <div id="main">
            <!-- start: CONTENT -->
            @yield('content')
            <!-- end: CONTENT -->

            <!-- start: FOOTER -->
            @include('layouts.admin.partials.footer')
            <!-- end: FOOTER -->
        </div>
    </div>

    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Custom Page Script -->
    @stack('script')
</body>

</html>
