<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash</title>
    <link rel="stylesheet" href="/resources/vendors/feather/feather.css">
    <link rel="stylesheet" href="/resources/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/resources/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/resources/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/resources/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/resources/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/resources/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/resources/images/logo-mini.svg"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{route('profile')}}"><img src="/resources/images/logo-mini.svg" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('profile')}}"><img src="/resources/images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2"></ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    @if(\Illuminate\Support\Facades\Auth::user()->file)
                    <a class="nav-link dropdown-toggle" href="{{route('home')}}" data-toggle="dropdown" id="profileDropdown">
                        <img src="/public/images/{{\Illuminate\Support\Facades\Auth::user()->file}}" alt="profile"/>
                    </a>
                    @endif
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Ders İşlemleri</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('class')}}">Ders Kayıt</a></li>
                         </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="icon-head menu-icon"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('dropzone')}}"> File Upload </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('user')}}"> Profile </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('exit')}}">
                        <i class="icon-shuffle menu-icon"></i>
                        <span class="menu-title">Exit</span>
                    </a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </div>
</div>
<script src="/resources/vendors/js/vendor.bundle.base.js"></script>
<script src="/resources/vendors/chart.js/Chart.min.js"></script>
<script src="/resources/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/resources/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/resources/js/dataTables.select.min.js"></script>
<script src="/resources/js/off-canvas.js"></script>
<script src="/resources/js/hoverable-collapse.js"></script>
<script src="/resources/js/template.js"></script>
<script src="/resources/js/settings.js"></script>
<script src="/resources/js/todolist.js"></script>
<script src="/resources/js/dashboard.js"></script>
<script src="/resources/js/Chart.roundedBarCharts.js"></script>
@include('sweetalert::alert')
</body>
</html>
