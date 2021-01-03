@extends('layouts.app')

@section('title', 'Data Penduduk Desa Jogotirto')

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <a href="{{ url('/data-penduduk/create') }}" class="btn btn-danger mb-2 ml-auto"
                                    role="button">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Pedukuhan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($citizen as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->full_name }}</td>
                                                <td>{{ $item->dusun->dusun_name }}</td>
                                                <td>
                                                    <a class="btn" data-toggle="tooltip" data-placement="top"
                                                        title="View"><i class="fas fa-eye"
                                                            onclick="modalDelete(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>
                                                    <a class="btn" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fas fa-edit" data-target="#edit-admin"
                                                            onclick="editPostModal(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>
                                                    <a class="btn" data-toggle="tooltip" data-placement="top"
                                                        title="Delete"><i class="fas fa-trash"
                                                            onclick="modalDelete(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>
@endsection
