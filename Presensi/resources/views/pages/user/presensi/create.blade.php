@extends('layout.admin')

@section('konten')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Presensi</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('presensi.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                                <label for="id_profil" class="col-sm-2 col-form-label">id_profil</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="id_profil" id="id_profil">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jam_datang" class="col-sm-2 col-form-label">Jam Datang</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="jam_datang" id="jam_datang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jam_pulang" class="col-sm-2 col-form-label">Jam Pulang</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="jam_pulang" id="jam_pulang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="logitude" class="col-sm-2 col-form-label">logitude</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="logitude" id="logitude">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="latitude" class="col-sm-2 col-form-label">latitude</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="latitude" id="latitude">
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
