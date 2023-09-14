@extends('layouts.master')
@section('content')
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
                    <div class="single-work wow fadeInUp text-start" data-wow-delay=".2s">
                        <h4 class="text-dark text-center mb-2">Unggah Berkas</h4>
                        <p>Silahkan mengisi form dibawah ini untuk pengambilan Sertifikat</p>
                        <div class="text-center mt-4">

                            <a href="{{ route('upload.satu') }}" type="button" class="btn btn-primary"><i
                                    class="lni lni-search-alt"></i> Unggah Berkas</a>
                        </div>
                    </div>
                    <!-- End Single Work -->
                </div>
                <div class="col-lg-3 col-md-3 col-12 align-self-center">
                </div>
            </div>
    </section>
    {{-- End Button Input --}}
    {{-- <form action="{{ route('berkas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="berkas" tabindex="-1" aria-labelledby="berkasLabel" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="berkasLabel">Form Pemasukkan Berkas</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="msform">
                            <div class="text-center">
                                <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                <p class="mb-3">
                                    Mohon di isi sesuai dengan <strong>Persyaratan Berkas</strong> yang di Tentukan
                                </p>

                                <hr>

                                <ul id="progressbar">
                                    <li class="active">Informasi Pemohon</li>
                                    <li>Unggah Berkas</li>
                                    <li>Selesai</li>
                                </ul>

                                <hr>

                                <fieldset>
                                    <div class="col mb-4">
                                        <label class="form-label text-dark" for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Nama">
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col mb-4">
                                        <label class="form-label  text-dark" for="alamat">Alamat
                                            Lengkap</label>
                                        <input type="address" class="form-control" id="alamat" name="alamat"
                                            placeholder="Alamat" multiple>
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col mb-4">
                                        <label class="form-label  text-dark" for="no_telp">Nomor Telepon
                                            (Yang
                                            bisa
                                            Dihubungi)</label>
                                        <input type="number" min="0" class="form-control" id="no_telp"
                                            name="no_telp" placeholder="No Telp">
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label class="form-label  text-dark" for="category">Keperluan
                                            mendaftar
                                        </label>
                                        <select class="form-select" aria-label="Default select example" id="category_id"
                                            name="category_id">
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

                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>

                                <fieldset>
                                    <div class="col mb-4">
                                        <label class="form-label" for="file">Lampiran Berkas (Dalam
                                            bentuk
                                            File :
                                            JPG/JPEG/PDF/Doc)</label>
                                        <input type="file" class="form-control" id="file" name="file"
                                            placeholder="#" multiple>
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col mb-4">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control" placeholder="Keterangan berkas disini" name="keterangan" id="keterangan"></textarea>
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Keluar
                        </button>
                        <button type="button" class="btn btn-primary next">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
    {{-- Modal --}}
@endsection
