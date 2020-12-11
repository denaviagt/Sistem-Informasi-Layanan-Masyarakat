@extends('layouts.app')
@section('title', 'Aduan Masyarat')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            <!-- order table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="aduan-table" class="table table-striped table-bordered display no-wrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Pengirim</th>
                                            <th>Aduan</th>
                                            <th>Tanggal</th>
                                            <th>Daerah</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal content for Detail Aduan -->
    <div class="modal fade" id="detail-aduan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Detail Aduan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="detail-nama-aduan" class="col-sm-3 col-form-label">Nama Pengirim</label>
                            <div class="col-sm-9 bg-secondary">
                                <p>Edinburgh</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="ed-inputEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputUsername" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ed-inputUsername">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="ed-inputPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputNomorHp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ed-inputNomorHp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-selectLevelAdmin" class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <select name="ed-selectLevelAdmin" id="ed-selectLevelAdmin" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Kepala Desa">Kepala Desa</option>
                                    <option value="Super Admin">Super Admin</option>
                                </select>
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

    <div class="modal fade" id="delete-admin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>Apakah Anda yakin akan menghapus?</h4>
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
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
@endsection
