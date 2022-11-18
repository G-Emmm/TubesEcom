@extends('layout.admin')

@section('konten')
<div class="pagetitle">
    <h1>Daftar Tenant</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Default Table -->
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID Tenant</th>
                        <th scope="col">ID Wilayah</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tenant as $item)
                            <tr>
                                <td>{{$item->id_tenant}}</td>
                                <td>{{$item->id_wilayah}}</td>
                                <td>{{$item->alamat_tenant}}</td>
                                <td>{{$item->no_telptent}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <!-- End Default Table Example -->
            </div>
        </div><!-- End Left side columns -->
    </div>
</section>
@endsection