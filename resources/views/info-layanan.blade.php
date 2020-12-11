@extends('layouts.app')

@section('title', 'Info Layanan')

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <form>
                <div class="form-group mb-4 col-md-4 pl-0">
                    <select class="custom-select mr-sm-2 bg-white" id="inlineFormCustomSelect">
                        <option value="E-KTP" selected>E-KTP</option>
                        <option value="Kartu Keluarga">Kartu Keluarga</option>
                        <option value="Akta Kelahiran">Akta Kelahiran</option>
                        <option value="Akta kematian">Akta kematian</option>
                        <option value="Pindah penduduk">Pindah penduduk</option>
                        <option value="Nikah">Nikah</option>
                        <option value="SKU">SKU</option>
                    </select>
                </div>
            </form>
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a href="#alur" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Alur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#syarat" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Syarat</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="alur">
                            <div class="table-responsive">
                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                    data-target="#add-alur">Tambah</button>
                                <table id="syarat-table" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Alur</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>01</td>
                                            <td>Pengantar RT/RW</td>
                                            <td>Meminta pengantar dari Ketua RT dan Ketua RW</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-alur"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-alur"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane show" id="syarat">
                            <div class="table-responsive">

                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                    data-target="#add-syarat">Tambah</button>
                                <table id="alur-table" class="table table-striped table-bordered no-wrap">
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
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>
    <!--  Modal content for Add Alur Layanan -->
    <div class="modal fade" id="add-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="input-alur-layanan" class="col-sm-3 col-form-label">Alur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-alur-layanan">
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

    <!--  Modal content for Edit Alur Layanan -->
    <div class="modal fade" id="edit-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="edit-alur-layanan" class="col-sm-3 col-form-label">Alur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-alur-layanan">
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

    <!--  Modal content for Delete Alur Layanan -->
    <div class="modal fade" id="delete-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Alur Layanan A</h4>
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
                            <label for="input-deskripsi-syarat" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="input-deskripsi-syarat">
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
                            <label for="edit-deskripsi-syarat" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-deskripsi-syarat">
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
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Alur Layanan A</h4>
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