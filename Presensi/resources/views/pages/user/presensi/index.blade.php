@extends('layout.admin')

@section('konten')
    <div class="pagetitle">
        <h1>Presensi</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        {{-- show a button only if $presensi not present --}}
        @if (!isset($presensi))
            <form id="form-presensi" action="{{ route('presensi.store') }}" method="POST">
                @csrf
                @method('POST')
                {{-- hidden input form for longitude latitude --}}
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <button id="submit-button" type="submit" class="btn btn-primary">Presensi</button>
            </form>
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
                                Anda telah {{ $presensi->keterangan }} pada tanggal {{ $presensi->tanggal }} jam
                                {{ $presensi->jam_datang }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section>
@endsection
