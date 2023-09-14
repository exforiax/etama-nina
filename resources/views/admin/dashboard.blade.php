@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/templates/Admin/src/src/html/index.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <div class="card-group">
            <div class="card border-right" style="margin-right: 25px;">
                <div class="card-body">
                    <a href="{{ route('berkas.diserahkan') }}">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">{{ $diserahkan }}</h2>

                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Diserahkan</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <a href="{{ route('berkas.pendaftaran') }}">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>{{ $belumdiserahkan }}</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Belum Diserahkan
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-minus"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card border-right" style="margin-left: 25px;">
                <div class="card-body">
                    <a href="{{ route('arsip') }}">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">{{ $arsip }}</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Berkas yang Diarsipkan
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Tanda Terima</h4>
                        <div class="mb-3">
                            <canvas id="doughnut" height="150"></canvas>
                        </div>
                        <ul class="list-style-none mt-1">
                            <li>
                                <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                <span class="text-muted">Diserahkan</span>
                                <span class="text-dark float-right font-weight-medium">{{ $diserahkan }}</span>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                <span class="text-muted">Belum diserahkan</span>
                                <span class="text-dark float-right font-weight-medium">{{ $belumdiserahkan }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Berkas</h4>
                        <div class="mb-3">
                            <canvas style="background-color: white" id="area" height="300%"></canvas>
                        </div>
                        <ul class="list-inline text-center mt-5 mb-2">
                            <li class="list-inline-item text-muted font-italic">Jumlah Berkas Tahun ini</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Peta Wilayah Kota Kotamobagu</h4>
                        <div class="" style="height:375px">
                            <img src="{{ asset('template/Admin/src') }}/assets/images/geografis.png" style="width:110%"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Location and Earnings Charts Section -->
        <!-- *************************************************************** -->

        <footer class="footer text-center text-muted">
            KANTOR PERTANAHAN KOTAMOBAGU <a href="{{ route('home') }}">(E-TAMA APPS)</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
@section('footer-js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('doughnut');
        let data_serahkan = {!! json_encode($data_serahkan) !!};
        let data_belum = {!! json_encode($data_belum) !!};
        new Chart(ctx, {
            type: 'doughnut',
            data: {

                datasets: [{
                    label: 'Berkas',
                    data: [data_serahkan, data_belum],
                    borderWidth: 1
                }]
            },
        });
    </script>
    <script>
        const abc = document.getElementById('area');
        let total_berkas = {!! json_encode($total_berkas) !!};
        let bulan = {!! json_encode($bulan) !!};
        new Chart(abc, {
            type: 'bar',
            data: {
                labels: bulan,
                datasets: [{
                    label: 'Berkas',
                    data: total_berkas,
                    borderWidth: 1


                }]
            },
            options: {
                animation: true,
                scaleOverride: true,
                scaleSteps: 9,
                scaleStartValue: 0,
                scaleStepWidth: 100
            }
        });
    </script>
@endsection
