<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Absensi Pemerintahan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.style')
</head>

<body>
    {{-- topbar --}}
    @include('includes.admin.topbarAdmin')

    {{-- sidebar --}}
    @include('includes.admin.sidebarAdmin')

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