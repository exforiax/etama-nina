@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Tentang Kami</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Beranda</a></li>
                        <li>Tentang Kami</li>
                        <li>Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section class="about-us section">
        <div class="container">
            <div class="justify-content-center mb-5">
                <div class=" container col-lg-12 col-md-12 col-12">
                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <h2>
                            Struktur Organisasi
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <!-- Heading -->
                        <span class="sub-heading">Struktur Organisasi</span>
                        <h4 class="mb-2">
                            Kementerian Agraria Dan Tata Ruang/ Badan Pertanahan Nasional
                        </h4>
                        <img src="{{ asset('img/WhatsApp Image 2023-09-14 at 13.45.26 (1).jpeg') }}" alt="struktur">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
