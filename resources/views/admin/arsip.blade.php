@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Archive</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="/templates/Admin/src/src/html/index.html">Berkas telah
                                    diserahkan oleh petugas
                                </a>
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

    <div class="container-fluid">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#arsip">Unggah Berkas
        </button>
        <div class="card">
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <h4 class="card-title">Berkas</h4>
            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-hover p-2">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Berkas</th>
                            <th scope="col">Tanggal Pengarsipan</th>
                            <th scope="col">Penerima</th>
                            <th scope="col">Keperluan Berkas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Berkas</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arsip as $b)
                            <tr>
                                <th class="align-middle">{{ $loop->iteration }}</th>
                                <td class="align-middle">{{ $b->no_berkas }}</td>
                                @if ($b->tgl_arsip == null)
                                    <td><span class="badge badge-info">{{ $b->created_at->toDateString() }}</span></td>
                                @else
                                    <td><span class="badge badge-info">{{ $b->tgl_arsip }}</span></td>
                                @endif

                                <td class="align-middle">{{ $b->nama }}</td>
                                <td class="align-middle">{{ $b->category->category_name }}</td>
                                <td class="align-middle">{{ $b->keterangan }}</td>
                                <td class="align-middle">
                                    <div class="d-inline-flex">
                                        <a href="{{ route('dokumen.download', $b->id) }}" type="button"
                                            class="btn btn-sm btn-success me-2">Download
                                        </a>


                                        <form action="{{ route('arsip.delete', $b->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Are You sure?')"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Berkas</th>
                            <th scope="col">Tanggal Pengarsipan</th>
                            <th scope="col">Penerima</th>
                            <th scope="col">Keperluan Berkas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Berkas</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    {{-- Modal --}}
    <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="arsip" tabindex="-1" aria-labelledby="arsipLabel" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-lg mx-0 mx-sm-auto">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="arsipLabel">Form Pemasukkan Berkas</h5>
                        <button type="button" onClick="window.location.reload();" class="btn-close text-white"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                            <p>
                                Mohon di isi sesuai dengan <strong>Persyaratan Berkas</strong> yang di Tentukan
                            </p>
                        </div>

                        <hr />
                        <div class="row align-items-center g-4">
                            <div class="col-6">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Nama penerima.." required>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="category_id">Kategori Berkas </label>
                                <select class="form-select" aria-label="Default select example" id="category_id"
                                    name="category_id" required>
                                    <option selected>Pilih Disini</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="tgl_arsip">Tanggal Pengarsipan </label>
                                <input type="date" class="form-control" name="tgl_arsip" id="tgl_arsip" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="file">Lampiran Berkas (Dalam bentuk File :
                                    JPG/JPEG/PDF/Doc)</label>
                                <input type="file" class="form-control" id="file" name="file"
                                    placeholder="#" multiple required>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="col">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" placeholder="Keterangan berkas disini" name="keterangan" id="keterangan"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" onClick="window.location.reload();" class="btn btn-outline-primary"
                            data-bs-dismiss="modal">
                            Keluar
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('footer-js')
@endsection
