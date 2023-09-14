@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Lacak Berkas</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Beranda</a></li>
                        <li>Lacak Berkas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start How Works Area -->
    <section class="how-works section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-3 col-md-3 col-12 justify-content-center">
                </div>
                <div class="col-lg-10 col-md-10 col-12 justify-content-center">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                        @foreach ($berkas as $item)
                            <div class="d-flex justify-content-start mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-send" viewBox="0 0 16 16">
                                    <path
                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                </svg>
                                <span class="text-dark ms-2 h4">{{ $item->no_berkas }}</span>
                            </div>

                            <div class="d-flex justify-content-start mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-archive" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <div>
                                    <span class=" ms-3 h4">Kategori Berkas </span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->category->category_name }}</span>
                                    </div>
                                </div>


                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-fill ms-5" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                                <div>
                                    <span class=" ms-3 h4">Nama Pemohon</span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->user->name }}</span>
                                    </div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-geo-alt-fill ms-5" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <div>
                                    <span class=" ms-3 h4">Alamat</span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->alamat }}</span>
                                    </div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-telephone ms-5" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <div>
                                    <span class="  h4">No Telepon</span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->no_telp }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <div>
                                    <span class=" ms-3 h4">Tanggal Pemasukkan Berkas</span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->created_at }}</span>
                                    </div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-hourglass-split ms-5" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                </svg>
                                <div>
                                    <span class=" ms-3 h4">Status</span>
                                    <div class="d-flex justify-content-start">
                                        <span class="text-dark fw-bold ms-3 h5">{{ $item->status->nama }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-3 col-md-3 col-12 justify-content-center">
                </div>
                <div class="col-lg-10 col-md-10 col-12 justify-content-center">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp" data-wow-delay=".2s">

                        <div class="d-flex justify-content-start mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path
                                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                <path
                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="text-dark ms-2 h3">Riwayat Status Berkas</span>
                        </div>
                        @foreach ($berkaslog as $bl)
                            @if ($bl->status_id == 1)
                                <div class="d-flex justify-content-start mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8" />
                                    </svg>
                                    <div>
                                        <span class="text-dark fw-bold ms-3 h6">BERKAS TELAH BERHASIL DIMASUKKAN, MENUNGGU
                                            BERKAS DIVERIFIKASI OLEH PETUGAS
                                        </span>
                                        <div class="d-flex justify-content-start">
                                            <span class=" ms-3 ">{{ $bl->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            @elseif($bl->status_id == 2)
                                <div class="d-flex justify-content-start mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8" />
                                    </svg>
                                    <div>
                                        <span class="text-dark fw-bold ms-3 h6">BERKAS TELAH DIVERFIKASI OLEH PETUGAS,
                                            NOMOR BERKAS AKAN DIKIRIMKAN KE ALAMAT EMAIL ANDA
                                        </span>
                                        <div class="d-flex justify-content-start">
                                            <span class=" ms-3 ">{{ $bl->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            @elseif($bl->status_id == 3)
                                <div class="d-flex justify-content-start mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8" />
                                    </svg>
                                    <div>
                                        <span class="text-dark fw-bold ms-3 h6">BERKAS TELAH DISERAHKAN KE PEMOHON</span>
                                        <div class="d-flex justify-content-start">
                                            <span class=" ms-3 ">{{ $bl->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('cetak.lacak', $bl->berkas->id) }}" type="button"
                                        class="btn btn-sm btn-success">Cetak Berkas
                                    </a>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Work -->
        </div>
        <div class="col-lg-3 col-md-3 col-12 align-self-center"></div>
        </div>

        </div>
    </section>
    <br>
    <!-- End How Works Area -->
@endsection
