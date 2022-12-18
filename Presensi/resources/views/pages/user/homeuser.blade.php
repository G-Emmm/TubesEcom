@extends('layout.user')

@section('konten')
    <div class="pagetitle">
        <h1>Home</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Departemen Card -->
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Presensi</h5>
                                <div class="d-flex align-items-center">
                                    <div class="ps-3 col text-center">
                                        {{-- show button only if $jadwal is present --}}
                                        @if (isset($jadwal))
                                            {{-- show a button only if $presensi not present --}}
                                            @if (!isset($presensi))
                                                <br>
                                                <form id="form-presensi" action="{{ route('storePresensi') }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    {{-- hidden input form for longitude latitude --}}
                                                    <input type="hidden" name="latitude" id="latitude">
                                                    <input type="hidden" name="longitude" id="longitude">
                                                    <button id="submit-button" type="submit"
                                                        class="btn btn-primary">Presensi</button>
                                                </form>
                                                <br>
                                                <script>
                                                    // disable submit button if geolocation is disabled
                                                    if (!navigator.geolocation) {
                                                        let button = document.getElementById('submit-button')
                                                        button.disabled = true;
                                                        button.innerText = 'Geolocation tidak didukung oleh browser anda'
                                                    }
                                                    // get user location before submitting form
                                                    document.getElementById('form-presensi').addEventListener('submit', function(e) {
                                                        e.preventDefault();
                                                        navigator.geolocation.getCurrentPosition(function(position) {
                                                            document.getElementById('latitude').value = position.coords.latitude;
                                                            document.getElementById('longitude').value = position.coords.longitude;
                                                            e.target.submit();
                                                        });
                                                    });
                                                </script>
                                            @else
                                                {{-- Tampilkan jam presensi --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    Anda {{ $presensi->keterangan }} pada tanggal
                                                                    {{ $presensi->tanggal }}
                                                                    {{-- jam {{ $presensi->jam_datang }} --}}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                Anda tidak bisa presensi hari ini
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- <div class="ps-3"> --}}
                                    {{-- show a button only if $presensi not present --}}
                                    {{-- @if (!isset($presensi))
                                            <form id="form-presensi" action="{{ route('storeSakit') }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button id="submit-button" type="submit"
                                                    class="btn btn-primary">Sakit</button>
                                            </form>
                                        @endif --}}
                                    {{-- </div> --}}
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <a href="/user/rekap">
                                            <i class="bi bi-pie-chart"></i>
                                        </a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="/user/rekap">
                                            <span class="text-muted pt-2 ps-1">Rekap Presensi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Cuti</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                        <a href="/perizinan/create">
                                            <i class="bi bi-envelope-paper"></i>
                                        </a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="/perizinan/create">
                                            <span class="text-muted pt-2 ps-1">Ajukan Cuti</span>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                        <a href="/perizinan">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="/perizinan">
                                            <span class="text-muted pt-2 ps-1">Daftar Pengajuan Cuti</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sales Card -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
@endsection
