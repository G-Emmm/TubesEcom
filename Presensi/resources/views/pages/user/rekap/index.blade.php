@extends('layout.user')

@section('konten')
    <div class="pagetitle">
        <h1>Daftar Izin</h1>
    </div><!-- End Page Title -->
    @if (isset($presensi))
        @if ($jadwal_presensi > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title col text-center">
                            Kehadiran mencapai {{ round(($total_presensi / $jadwal_presensi) * 100, 2) }}%
                        </h5>
                    </div>
                </div>
            </div>
        @endif
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Default Table -->
                        <table class="table col text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Jumlah Hadir</th>
                                    <th scope="col">Jumlah Alpha</th>
                                    <th scope="col">Jumlah Izin</th>
                                    <th scope="col">Jumlah Sakit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $hadir }}</td>
                                    <td>{{ $alpha }}</td>
                                    <td>{{ $izin }}</td>
                                    <td>{{ $sakit }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>
    @else
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Belum ada data presensi
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
