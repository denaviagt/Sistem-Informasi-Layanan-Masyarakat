@extends('layouts.app')

@section('title', 'Info Layanan')

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
                            <div class="table-responsive">
                                <h4 class="card-title">Syarat Layanan A</h4>
                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                    data-target="#add-syarat">Tambah</button>
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Syarat</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>01</td>
                                            <td>Foto Copy KK</td>
                                            <td>Membawa Foto Copy Kartu Keluarga</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-syarat"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-syarat"></i></button>
                                            </td>
                                        </tr>
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
    <!--  Modal content for Add Syarat Layanan -->
    <div class="modal fade" id="add-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Syarat Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="input-syarat-layanan" class="col-sm-3 col-form-label">Syarat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-syarat-layanan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="input-deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Edit Syarat Layanan -->
    <div class="modal fade" id="edit-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Syarat Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="edit-syarat-layanan" class="col-sm-3 col-form-label">Syarat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-syarat-layanan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit-deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Delete Syarat Layanan -->
    <div class="modal fade" id="delete-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Syarat Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
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
