{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pengisian Berkas</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/images/logo.svg') }}" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('stepper') }}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('stepper') }}/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2 class="mb-2">SILAHKAN MENGISI FORMULIR BERKAS DIBAWAH INI</h2>
            <form action="{{ route('berkas.store') }}" method="POST" id="signup-form" class="signup-form"
                enctype="multipart/form-data">
                @csrf
                <h3>
                    <span class="title_text">Informasi Pemohon</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label class="form-label text-dark" for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                required>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label  text-dark" for="alamat">Alamat
                                Lengkap</label>
                            <input type="address" class="form-control" id="alamat" name="alamat"
                                placeholder="Alamat" required>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group ">
                            <label class="form-label  text-dark" for="no_telp">Nomor Telepon
                                (Yang
                                bisa
                                Dihubungi)</label>
                            <input type="number" min="0" class="form-control" id="no_telp" name="no_telp"
                                placeholder="No Telp" required>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-select">
                            <label class="form-label  text-dark" for="category">Keperluan
                                mendaftar
                            </label>
                            <select class="form-select" aria-label="Default select example" id="category_id"
                                name="category_id" required>
                                <option selected>Pilih Kategori</option>
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
                    <div class="fieldset-footer">
                        <span>Step 1 of 3</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Persyaratan Berkas</span>
                </h3>
                <fieldset>

                        <div class="fieldset-content">
                            <div class="form-group">
                                <label class="form-label" for="file">Lampiran Berkas (Dalam
                                    bentuk
                                    File :
                                    JPG/JPEG/PDF/Doc)</label>
                                <div class="form-file">
                                    <input type="file" class="form-control" id="file" name="file"
                                        placeholder="#" class="custom-file-input" />
                                    <span id='val'></span>
                                    <span id='button'>Select File</span>
                                </div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
          

                    <div class="fieldset-footer">
                        <span>Step 2 of 3</span>
                    </div>

                </fieldset>

                <h3>
                    <span class="title_text">Selesai</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <span class="text-center align-items-center">Silahkan cek email anda untuk mengambil Nomor
                            Antrian</span>
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 3 of 3</span>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('stepper') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('stepper') }}/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="{{ asset('stepper') }}/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="{{ asset('stepper') }}/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="{{ asset('stepper') }}/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="{{ asset('stepper') }}/vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="{{ asset('stepper') }}/js/main.js"></script>
</body>

</html> --}}
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
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"
                            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                            style="width: 2rem; height:2rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                            style="width: 2rem; height:2rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill"
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
                                <form action="{{ route('store.tiga') }}" method="POST" id="signup-form" class="signup-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="text-center">
                                        <span class=" mb-3">Selesai</span>
                                    </h3>
                                    <fieldset>
                                        <div class="fieldset-content">
                                            <div class="list-group mb-4 text-center">
                                                <span class="text-dark">Terima Kasih telah mengisi formulir pendaftaran,
                                                    kami sedang melakukan
                                                    verifikasi untuk berkas pendaftaran anda.
                                                </span>
                                                <span class="text-dark fw-bold">Kami akan mengirimkan nomor berkas ke
                                                    alamat email anda, mohon agar selalu memeriksa alamat email anda.</span>
                                                </span>
                                            </div>
                                            <div class="list-group mb-4 text-center">
                                            </div>

                                        </div>
                                        <footer class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                        </footer>
                                    </fieldset>
                                    <footer class="d-flex justify-content-start">
                                        <span class="mt-3">Step 3 of 3</span>
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
