@extends('layouts.master')
@section('content')
    <style>

    </style>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Berkas</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Beranda</a></li>
                        <li>Berkas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    {{-- Button Input --}}
    <section class="how-works section">
        <div class="container">

            <div class="row align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-12 align-self-center">
                </div>
                <div class="col-lg-6 col-md-6 col-12 align-self-center">
                    <!-- Start Single Work -->
                    <div class="position-relative mb-5">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"
                            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                            style="width: 2rem; height:2rem;">1</button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill"
                            style="width: 2rem; height:2rem;">2</button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                            style="width: 2rem; height:2rem;">3</button>
                    </div>

                    <div class="single-work wow fadeInUp text-start" data-wow-delay=".2s">
                        <div class="card">
                            <div class="card-header bg-dark text-center ">
                                <span>
                                    <h5 class="text-white">SILAHKAN MENGISI FORMULIR DIBAWAH INI</h5>
                                </span>
                            </div>


                            <div class="card-body">
                                <form action="{{ route('store.satu') }}" method="POST" id="signup-form" class="signup-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">
                                        <span class=" mb-3">Informasi Pemohon</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-dark" for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    placeholder="Nama" required>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <label class="form-label text-dark" for="nama">Alamat Lengkap</label>
                                                <input type="address" class="form-control" id="alamat" name="alamat"
                                                    placeholder="Alamat" required>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <label class="form-label text-dark" for="nama">Nomor Telepon</label>
                                                <input type="number" min="0" class="form-control" id="no_telp"
                                                    name="no_telp" placeholder="No Telp" required>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <label class="form-label text-dark" for="nama">Keperluan
                                                    Mendaftar</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    id="category_id" name="category_id" required>
                                                    <option selected>Pilih Disini</option>
                                                    @foreach ($category as $c)
                                                        <option value="{{ $c->id }}">{{ $c->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <footer class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                        </footer>
                                    </fieldset>
                                    <footer class="d-flex justify-content-start">
                                        <span class="mt-3">Step 1 of 3</span>
                                    </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-self-center">
                    </div>
                    <!-- End Single Work -->
                </div>

            </div>
    </section>
    <!-- End How It Works -->

    {{-- Button Input --}}
@endsection
