<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Absensi</title>

    <!-- Favicons -->
    <link href="{{ url('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('template/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/template/assets/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="container">
            <header id="header" class="header fixed-top d-flex align-items-center">

                <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="logo d-flex align-items-center">
                        <img src="{{ url('template/assets/img/logo.png') }}" alt="">
                        <span class="d-none d-lg-block">Absensi</span>
                    </a>
                </div><!-- End Logo -->
                <nav class="header-nav ms-auto">
                    <ul class="d-flex align-items-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item dropdown pe-3">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0"
                                        href="{{ route('login') }}">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        <span class="d-none d-md-block ps-2">Masuk</span>
                                    </a><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item dropdown pe-3">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0"
                                        href="{{ route('register') }}">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        <span class="d-none d-md-block ps-2">Daftar</span>
                                    </a><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->
                            @endif
                        @endguest

                </nav><!-- End Icons Navigation -->
            </header><!-- End Header -->
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ url('template/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('template/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('template/assets/js/main.js') }}"></script>
</body>

</html>
