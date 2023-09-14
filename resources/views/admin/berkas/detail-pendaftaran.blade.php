@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">

        <div class="d-flex justify-content-between">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Detail Berkas</h3>
            <div c>
                <a href="{{ route('berkas.pendaftaran') }}" type="button" class="btn btn-sm btn-primary">Kembali</a>
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
                @foreach ($berkas as $item)
                    <h4 class="card-title"><span class="text-secondary">No Berkas :</span> {{ $item->no_berkas }}</h4>
                    <h4 class="card-title"><span class="text-secondary">Nama Pemohon :</span> {{ $item->nama }}</h4>
                    <h4 class="card-title"><span class="text-secondary">Keperluan Mendaftar :</span>
                        {{ $item->category->category_name }}</h4>
                    <h4 class="card-title"><span class="text-secondary">Status Berkas :</span>
                        {{ $item->status->nama }}</h4>
                @endforeach
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lampiran Berkas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkas as $b)
                            @php $images = json_decode($b->file,true); @endphp
                            @foreach ($images as $image)
                                <tr>

                                    <td class="bg-secondary mb-3">
                                        <img src="{{ asset('storage/berkas/' . $image) }}" alt=""
                                            style="width:20cm">
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
