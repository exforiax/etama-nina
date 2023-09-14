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

            {{-- Table --}}
            <div class="row align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-12 align-self-center">
                </div>
                <div class="col-lg-6 col-md-6 col-12 align-self-center">
                    <!-- Start Single Work -->
                    <div class="single-work wow fadeInUp text-start" data-wow-delay=".2s">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm ">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Berkas</th>
                                        <th scope="col">Jenis Sertifikat</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berkas as $b)
                                        <tr class="text-center">
                                            <th class="align-middle">{{ $loop->iteration }}</th>
                                            <td class="align-middle">{{ $b->no_berkas }}</td>
                                            <td class="align-middle">{{ $b->category->category_name }}</td>
                                            <td class="align-middle">{{ $b->status->nama }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('lacak.show', $b->id) }}"
                                                    class="btn btn-outline-info btn-sm px-1">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Single Work -->
                </div>
                <div class="col-lg-3 col-md-3 col-12 align-self-center">
                </div>
            </div>
            {{-- End Table --}}

        </div>
    </section>
    <!-- End How Works Area -->
@endsection
