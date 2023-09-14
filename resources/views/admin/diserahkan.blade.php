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
                            <li class="breadcrumb-item"><a href="/templates/Admin/src/src/html/index.html">Berkas telah
                                    diserahkan oleh petugas</a>
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
                <h4 class="card-title">Berkas</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>


                            <th scope="col">No Berkas</th>
                            <th scope="col">Keperluan Berkas</th>
                            <th scope="col">User</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkas as $b)
                            <tr>
                                @if ($b->status_id == 3)
                                    <th scope="row">{{ $b->no_berkas }}</th>
                                    <td>{{ $b->category->category_name }}</td>
                                    <td>{{ $b->user->name }}</td>
                                    <td><span class="badge badge-info">{{ $b->status->nama }} </span></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
