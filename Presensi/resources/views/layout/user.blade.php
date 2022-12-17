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
    @include('includes.user.topbarUser')

    {{-- sidebar --}}
    @include('includes.sidebar')

    {{-- konten --}}
    <main id="main" class="main">
        {{-- show success or error toast --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('konten')
    </main><!-- End #main -->

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @include('includes.script')

</body>

</html>
