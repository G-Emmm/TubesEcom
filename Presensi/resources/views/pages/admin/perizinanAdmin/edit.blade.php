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
            <form action="{{route('perizinanAdmin.update', $perizinan->id_perizinan)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="start_izin" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{$perizinan->name}}" disabled>
                      </div>
                  </div>
              <div class="row mb-3">
                <label for="start_izin" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="start_izin" id="start_izin" value="{{$perizinan->start_izin}}" disabled>
                  </div>
              </div>
              <div class="row mb-3">
                <label for="end_izin" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="end_izin" id="end_izin" value="{{$perizinan->end_izin}}" disabled>
                  </div>
              </div>
              <div class="row mb-3">
                <label for="jenis_izin" class="col-sm-2 col-form-label">Jenis Izin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jenis_izin" id="jenis_izin" value="{{$perizinan->jenis_izin}}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keperluan" id="keperluan" value="{{$perizinan->keperluan}}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="keterangan" id="keterangan" disabled>{{$perizinan->keterangan}}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="file" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="file" id="file" value="{{$perizinan->file}}" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Select</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="status" id="status">
                    <option selected disabled>                        
                          @if ($perizinan->status == 1 )
                              Dalam Proses
                          @elseif($perizinan->status == 2)
                              Diterima
                          @else
                              Ditolak
                          @endif
                    </option>
                    <option value="2" @selected($perizinan->status == 2)>Terima</option>
                    <option value="3" @selected($perizinan->status == 3)>Tolak</option>
                  </select>
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label> --}}
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary" style="float: right;">Kirim</button>
                </div>
              </div>


            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </section>
@endsection