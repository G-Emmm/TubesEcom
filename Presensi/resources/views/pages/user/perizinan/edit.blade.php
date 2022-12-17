@extends('layout.admin')

@section('konten')
{{-- <div class="pagetitle">
    <h1>Mengajukan Perizinan</h1>
</div><!-- End Page Title --> --}}

<section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mengedit Perizinan</h5>

            <!-- General Form Elements -->
            <form action="{{route('perizinan.update', $perizinan->id_perizinan)}}" method="POST">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label for="start_izin" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="start_izin" id="start_izin" value="{{$perizinan->start_izin}}">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="end_izin" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="end_izin" id="end_izin" value="{{$perizinan->end_izin}}">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="jenis_izin" class="col-sm-2 col-form-label">Jenis Izin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jenis_izin" id="jenis_izin" value="{{$perizinan->jenis_izin}}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keperluan" id="keperluan" value="{{$perizinan->keperluan}}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="keterangan" id="keterangan" >{{$perizinan->keterangan}}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="file" class="col-sm-2 col-form-label">Upload file</label>
                <div class="col-sm-10">
                  <input type="file" name="file" id="file" class="form-control" value="{{$perizinan->file}}">
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label> --}}
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </section>
@endsection