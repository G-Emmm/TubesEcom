<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/admin" class="logo d-flex align-items-center">
            <img src="{{url('template/assets/img/logo.png')}}" alt="">
            <span class="d-none d-lg-block">Absensi</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->      
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown">
          <li class="nav-item dropdown">            
    <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
        </a>
        <!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <form action="{{url('logout')}}" method="POST">
                @csrf
                <button class="bi bi-box-arrow-right dropdown-item d-flex align-items-center btn btn-light" type="submit">Keluar</button>
            </form>
        </ul>
        <!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->
    </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
