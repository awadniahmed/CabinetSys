<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CabinetSys </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('images/logo.png')}}" />
</head>

<body>
<div>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
            </div>
            <div>
              <a class="navbar-brand brand-logo" href="#">
               <h6>CabinetSys</h6>
              </a>
              <a class="navbar-brand brand-logo-mini" href="#">
              </a>
            </div>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <label>En Ligne</label> <i class="mdi mdi-brightness-1"></i>
                </li>
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class="img-xs rounded-circle"src="{{asset('images/avatar.png')}}"  alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown"  style="widows: 10px">
                      <div class="dropdown-header text-center">

                      </div>
                      <a href="{{ route('logoutDocteur')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>LogOut</a>

                    </div>
                  </li>
            </ul>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:../../partials/_settings-panel.html -->
          <!-- partial -->
          <!-- partial:../../partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('patient')}}">
                    <i class="bi bi-person  text-primary me-2"></i>
                  <span class="menu-title">Patient</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('rdv')}}" >
                    <i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                  <span class="menu-title">  Rendez-vous</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('consultation')}}"  >
                    <i class="bi bi-clipboard-check text-primary me-2"></i>
                  <span class="menu-title">  Consultation</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('lettre')}}" >
                    <i class="bi bi-chat-left text-primary me-2"></i>
                  <span class="menu-title">  Lettre</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('ordonnance')}}"  >

                    <i class="mdi mdi-border-color text-primary me-2"></i>
                  <span class="menu-title">  Ordonnance</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('observation')}}"  >
                    <i class="bi bi-keyboard text-primary me-2"></i>
                  <span class="menu-title">  Observation</span>
                </a>
              </li>
            </ul>
          </nav>
        @yield('content')
 <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <script src="{{asset('js/chart.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
