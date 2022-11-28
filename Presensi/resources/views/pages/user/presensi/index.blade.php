@extends('layout.admin')

@section('konten')
<div class="pagetitle">
    <h1>Presensi</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Default Table -->
                <table class="table">
                    {{-- <thead>
                      <tr>
                        <th scope="col">Id OPD</th>
                        <th scope="col">Nama OPD</th>
                        <th scope="col">Wilayah</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($opd as $item)
                            <tr>
                                <td>{{$item->id_opd}}</td>
                                <td>{{$item->nama_opd}}</td>
                                <td>{{$item->Wilayah->nama}}</td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                  </table>
                  <!-- End Default Table Example -->
            </div>
        </div><!-- End Left side columns -->
    </div>
</section>
@endsection