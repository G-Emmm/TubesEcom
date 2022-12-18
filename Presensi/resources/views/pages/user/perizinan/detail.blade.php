@extends('layout.user')

@section('konten')
{{-- <div class="pagetitle">
    <h1>Mengajukan Perizinan</h1>
</div><!-- End Page Title --> --}}

<section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Detail Pengajuan Perizinan</h5>
          </div>
    <div style="padding: 2%">
      <div class="row mb-3">
        <label for="start_izin" class="col-sm-2 col-form-label">Tanggal Mulai</label>
        <div class="col-sm-10">
            <h6>{{$perizinan->start_izin}}</h6>
          </div>
      </div>
      <div class="row mb-3">
        <label for="end_izin" class="col-sm-2 col-form-label">Tanggal Selesai</label>
        <div class="col-sm-10">
            <h6>{{$perizinan->end_izin}}</h6>
          </div>
      </div>
      <div class="row mb-3">
        <label for="jenis_izin" class="col-sm-2 col-form-label">Jenis Izin</label>
        <div class="col-sm-10">
            <h6>{{$perizinan->jenis_izin}}</h6>
        </div>
      </div>
      <div class="row mb-3">
        <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
        <div class="col-sm-10">
            <h6>{{$perizinan->keperluan}}</h6>
        </div>
      </div>
      <div class="row mb-3">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
            <h6>{{$perizinan->keterangan}}</h6>
        </div>
      </div>
      <div class="row mb-3">
        <label for="file" class="col-sm-2 col-form-label">File</label>
        <div class="col-sm-10">
            {{$perizinan->file}}
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            @if ($perizinan->status == 1 )
            <h6 style="background-color: grey; width:20%; text-align:center; border-radius: 3px; font-weight:bold"> Dalam Proses </h6>
            @elseif($perizinan->status ==2)
            <h6 style="background-color: green; width:20%; text-align:center; border-radius: 3px ; font-weight:bold"> Diterima </h6>
            @else
            <h6 style="background-color: red; width:20%; text-align:center; border-radius: 3px; font-weight:bold"> Ditolak </h6>
            @endif
        </div>
      </div>
              <form action="{{route('perizinan.index')}}" method="">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary" style="float: right;">Kembali</button>
                </div>
                </form>
            


          </div>
        </div>

      </div>
    </div>
    </section>
@endsection