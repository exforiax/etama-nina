@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Category</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/templates/Admin/src/src/html/index.html">Category</a>
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
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('delete') }}
                    </div>
                @endif
                <form class="mt-1" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h4 class="card-title">Nama Kategori</h4>
                        <input type="text" name="category" class="form-control" id="placeholder"
                            placeholder="Silahkan input nama kategori..." required>
                        <div class="form-actions">
                            <div class="text-right mt-2">
                                <input type="submit" name="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-primary" value="Tambah Kategori">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kategori</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $c)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $c->category_name }}</td>
                                <td>
                                    <form action="{{ url('admin/delete-category', $c->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Are You sure?')"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
