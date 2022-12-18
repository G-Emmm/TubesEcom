@extends('layout.admin')

@section('konten')
<div class="pagetitle">
    <h1>Subscription</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
          <div class="row">
              <!-- Departemen Card -->
              <div class="col-xxl-6 col-md-6">
                  <div class="card info-card sales-card">
                      <div class="card-body">
                          <h5 class="card-title">Presensi</h5>
                          <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <a href="">
                                      <i class="bi bi-pie-chart"></i>
                                  </a>
                              </div>
                              <div class="ps-3">
                                  <a href="">
                                      <span class="text-muted pt-2 ps-1">Rekap Presensi</span>
                                  </a>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="col-xxl-6 col-md-6">
                  <div class="card info-card sales-card">
                      <div class="card-body">
                          <h5 class="card-title">Pengajuan Cuti</h5>
                          <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                  <a href="/admin/perizinanAdmin">
                                      <i class="bi bi-envelope"></i>
                                  </a>
                              </div>
                              <div class="ps-3">
                                  <a href="/admin/perizinanAdmin">
                                      <span class="text-muted pt-2 ps-1">Daftar Pengajuan Cuti</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Sales Card -->
          </div>
      </div><!-- End Left side columns -->
  </div>
</section>
@endsection