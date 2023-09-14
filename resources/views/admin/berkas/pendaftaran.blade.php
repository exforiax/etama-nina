@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Berkas</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#">Berkas Diterima,
                                    Menunggu proses Verifikasi dari Petugas</a>
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
        <div class="card">
            <div class="card-body">
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('status') }}
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('delete') }}
                    </div>
                @endif
                <h4 class="card-title">Berkas</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No Berkas</th>
                            <th scope="col">Keperluan Berkas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Berkas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkas as $b)
                            <tr>
                                @if ($b->status_id == 1 || $b->status_id == 2)
                                    <th scope="row">{{ $b->no_berkas }}</th>
                                    <td>{{ $b->category->category_name }}</td>
                                    <td>
                                        @if ($b->status_id == 1)
                                            <span class="badge badge-warning">{{ $b->status->nama }}</span>
                                        @elseif($b->status_id == 2)
                                            <span class="badge badge-success">{{ $b->status->nama }}</span>
                                        @elseif($b->status_id == 4)
                                            <span class="badge badge-danger">{{ $b->status->nama }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a type="button" href="{{ route('berkas.detail', $b->id) }}"
                                            class="badge badge-info">
                                            <span>Detail Berkas</span>
                                        </a>
                                    </td>
                                    <td>{{ $b->keterangan }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('update.status', $b->id) }}" method="post"
                                                class="form d-flex">
                                                @csrf
                                                @method('PUT')
                                                <select class="btn btn-sm btn-secondary" aria-label="Default select example"
                                                    id="status_id" name="status_id" onchange="getOption()">
                                                    <option selected>Pilih Disini</option>
                                                    @foreach ($status as $s)
                                                        <option value="{{ $s->id }}">
                                                            {{ $s->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input type="submit" value="Update" class="btn btn-success ms-4">
                                            </form>
                                        </div>
                                        {{-- <form action="{{ route('update.status', $b->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" onclick="return confirm('Are You sure?')"
                                        class="btn btn-sm btn-success mr-1">Verifikasi
                                    </button>
                                </form>
                                    <form action="{{ route('update.status', $b->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" onclick="return confirm('Are You sure?')"
                                            class="btn btn-sm btn-danger mr-1">Tolak
                                        </button>
                                    </form> --}}
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('footer-js')
    <script>
        function getOption() {
            console.log(document.getElementById('status_id').value);
        }
    </script>
@endsection
