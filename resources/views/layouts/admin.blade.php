<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/images/logo.svg') }}">
    <title>Aplikasi Tanda Terima Produk Layanan Pertanahan</title>
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('template/Admin/src') }}/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="{{ asset('template/Admin/src') }}/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('template/Admin/src') }}/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css"
        rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('template/Admin/src') }}/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('template/Admin/src') }}/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
        rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{ route('home') }}">

                            <!-- Dark Logo icon -->
                            <img src="{{ asset('template/images/logo.svg') }}" alt="homepage" class="dark-logo w-100" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('template/images/logo.svg') }}" alt="homepage"
                                class="light-logo w-100" />

                            <!--End Logo icon -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin/src</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        Admin/src!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my Admin/src!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('template/Admin/src') }}/assets/images/users/profile-pic.jpg"
                                    alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Halo,</span> <span
                                        class="text-dark">{{ Auth::user()->name }}</span> <i
                                        data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{ route('admin.home') }}" aria-expanded="false"><i data-feather="home"
                                    class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Berkas</span></li>

                        {{-- Kategori --}}
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow"
                                href="{{ route('admin.category') }}" aria-expanded="false"><i data-feather="grid"
                                    class="feather-icon"></i><span class="hide-menu">Kategori </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('admin.category') }}"
                                        class="sidebar-link"><span class="hide-menu"> List Kategori
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        {{-- End Kategori --}}

                        {{-- Berkas --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('berkas.pendaftaran') }}"
                                aria-expanded="false">
                                <i data-feather="clipboard" class="feather-icon"></i>
                                <span class="open-menu">Berkas Pendaftaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('berkas.ditolak') }}"
                                aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="open-menu">Berkas Ditolak</span>
                            </a>
                        </li>
                        {{-- End Berkas --}}

                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Tanda Terima</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('berkas.diserahkan') }}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Diserahkan
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('arsip') }}"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Arsip</span></a></li>

                        <li class="list-divider"></li>


                        {{-- <li class="nav-small-cap"><span class="hide-menu">Report</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="/templates/Admin/src/src/html/authentication-login1.html"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Masuk
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="/templates/Admin/src/src/html/authentication-register1.html"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Daftar
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="/templates/Admin/src/src/html/authentication-login1.html"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Keluar</span></a></li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script src="{{ asset('template/Admin/src') }}/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="{{ asset('template/Admin/src') }}/dist/js/app-style-switcher.js"></script>
        <script src="{{ asset('template/Admin/src') }}/dist/js/feather.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js">
        </script>
        <script src="{{ asset('template/Admin/src') }}/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('template/Admin/src') }}/dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="{{ asset('template/Admin/src') }}/assets/extra-libs/c3/d3.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/extra-libs/c3/c3.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/libs/chartist/dist/chartist.min.js"></script>
        <script
            src="{{ asset('template/Admin/src') }}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js">
        </script>
        <script src="{{ asset('template/Admin/src') }}/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{ asset('template/Admin/src') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('template/Admin/src') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>

        @yield('footer-js')
        @yield('chart-js')
</body>

</html>
