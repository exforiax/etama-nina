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
                        <li><a href="/">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-12 col-12  mb-4">
                    <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qaUGFmlvM3c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="row w-100">
                        <div class="col-lg-6 my-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.488063317815!2d124.33101979999999!3d0.7372080999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327e23d4820f6f51%3A0xbdb1d43ddeeb7a23!2sAtr%20Bpn%20Kota%20Kotamobagu!5e0!3m2!1sid!2sid!4v1667480277344!5m2!1sid!2sid"
                                class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                        <div class="col-lg-6 my-4 d-flex align-items-center">
                            <div>
                                <h6>Alamat</h6>
                                <p>Jl. Kol. Soegiono No. 125, Kel. Kotobangon, Kec. Kotamobagu Timur – Kota Kotamobagu
                                    95712</p>
                                <br>
                                <h6>Kontak</h6>
                                <p>Telp. 0822 6610 5236</p>
                                <p>Email: bpn_kk@yahoo.co.id / kot-kotamobagu@bpn.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
