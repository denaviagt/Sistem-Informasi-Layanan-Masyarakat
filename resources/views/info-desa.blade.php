@extends('layouts.app')

@section('title', 'Info Desa')

@section('content')
    <div class="page-wrapper">
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
                            <div class="text-right mb-3">
                                <a href="{{ url('tambah-info-desa') }}" type="button"
                                    class="btn waves-effect waves-light btn-rounded btn-danger">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>ID Admin</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($infoDesa as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->admin_id }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ url('info-desa/' . $item->id) }}" class="btn"
                                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                            class="fas fa-eye"></i></a>

                                                    <a href="{{ url('/edit-info-desa') }}" class="btn" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                                    <button type="button" class="btn" data-toggle="tooltip"
                                                        data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                            data-toggle="modal"
                                                            data-target="#delete-info-desa"></i></button>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!--  Modal content for Delete Info desa-->
    <div class="modal fade" id="delete-info-desa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Info Desa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <h4 class="text-center">Apakah anda yakin akan menghapus info desa?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2">Batal</button>
                            <button type="submit" class="btn btn-primary m-2">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
