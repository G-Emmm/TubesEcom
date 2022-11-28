@extends('layout.admin')

@section('konten')
<div class="pagetitle">
    <h1>Daftar Izin</h1>
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
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Izin</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Akhir</th>
                        <th scope="col" >Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($perizinan as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->jenis_izin}}</td>
                                <td>{{$item->keperluan}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td>{{$item->start_izin}}</td>
                                <td>{{$item->end_izin}}</td>
                                <td>
                                    @if ($item->status == 1 )
                                        Dalam Proses
                                    @elseif($item->status ==2)
                                        Diterima
                                    @else
                                        Ditolak
                                    @endif
                                
                                </td>
                                <td>
                                    <div class="icon" style="display: flex;">
                                        <form action="{{route('perizinanAdmin.edit', $item->id_perizinan)}}" method="GET">
                                            @csrf
                                            @method('GET')
                                            <button class="ri-edit-2-line" type="submit" style="border: none; background:none;"></button>
                                        </form>
                                      </div>
                                </td>
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