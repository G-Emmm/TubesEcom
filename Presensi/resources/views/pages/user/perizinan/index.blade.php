@extends('layout.user')

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
                        <th scope="col">Jenis Izin</th>
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
                                <td>{{$item->jenis_izin}}</td>
                                <td>{{$item->start_izin}}</td>
                                <td>{{$item->end_izin}}</td>
                                <td>
                                    @if ($item->status == 1 )
                                        <p style="background-color: grey; width:60%; text-align:center; border-radius: 3px"> Dalam Proses </p>
                                    @elseif($item->status ==2)
                                    <p style="background-color: green; width:60%; text-align:center; border-radius: 3px"> Diterima </p>
                                    @else
                                    <p style="background-color: red; width:60%; text-align:center; border-radius: 3px"> Ditolak </p>
                                    @endif
                                
                                </td>
                                <td>
                                    @if($item->status == 1)
                                        <div class="icon" style="display: flex;">
                                            <form action="{{route('perizinan.destroy', $item->id_perizinan)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bi bi-trash" type="submit" style="border: none; background:none;"></button>
                                            </form>
                                            <form action="{{route('perizinan.edit', $item->id_perizinan)}}" method="GET">
                                                @csrf
                                                @method('GET')
                                                <button class="ri-edit-2-line" type="submit" style="border: none; background:none;"></button>
                                            </form>
                                        @else
                                        @endif
                                        <form action="{{route('perizinan.show', $item->id_perizinan)}}" method="GET">
                                            @csrf
                                            @method('GET')
                                            <button class="bi bi-eye-fill" type="submit" style="border: none; background:none;"></button>
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
        <div class="col-sm-12">
            <form action="{{route('perizinan.create')}}" method="GET">
            <button type="submit" class="btn btn-primary" style="float: right;">Ajukan Izin</button>
            </form>
        </div>
    </div>
</section>
@endsection