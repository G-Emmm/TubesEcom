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
            <h5 class="card-title">Mengajukan Perizinan</h5>

            <!-- General Form Elements -->
            <form action="{{route('perizinan.store')}}" method="POST">
                @csrf
                @method('POST')
              <div class="row mb-3">
                <label for="start_izin" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="start_izin" id="start_izin">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="end_izin" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="end_izin" id="end_izin">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="jenis_izin" class="col-sm-2 col-form-label">Jenis Izin</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="jenis_izin" id="jenis_izin">
                  <option value="Izin">Izin</option>
                  <option value="Sakit">Sakit</option>
                  <option value="Cuti">Cuti</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="keperluan" id="keperluan">
                </div>
              </div>
              <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="keterangan" id="keterangan"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="file" class="col-sm-2 col-form-label">Upload file</label>
                <div class="col-sm-10">
                  <input type="file" name="file" id="file" class="form-control">
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