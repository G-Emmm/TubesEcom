<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Absensi Pemerintahan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.style')
    
    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    {{-- topbar --}}
    @include('includes.topbar')

    {{-- sidebar --}}
    @include('includes.sidebar')

    {{-- konten --}}
    <main id="main" class="main">
        @yield('konten')
    </main><!-- End #main -->

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @include('includes.script')

</body>

</html>