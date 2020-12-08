@extends('layouts.app')

@section('title', 'Nama Layanan')

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
                        <option value="Layanan A" selected>Layanan A</option>
                        <option value="Layanan B">Layanan B</option>
                        <option value="Layanan C">Layanan C</option>
                        <option value="Layanan D">Layanan D</option>
                    </select>
                </div>
            </form>
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-3">
                                <a href="#" type="button" class="btn waves-effect waves-light btn-danger"
                                    data-toggle="modal" data-target="#add-layanan">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>NIK</th>
                                            <th>Nama Pemohon</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>01</td>
                                            <td>0129919191919</td>
                                            <td>Sri Wahyuni</td>
                                            <td>06/12/2020</td>
                                            <td>Diproses</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-admin"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-admin"></i></button>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>

    <!--  Modal content for Add Layanan -->
    <div class="modal fade" id="add-layanan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Layanan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form>
                        <div class="form-group row">
                            <label for="input-nik" class="col-sm-3 col-form-label">NIK </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-nik">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="input-alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-deskripsi-layanan" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="input-deskripsi-layanan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto KTP</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-1">
                                        <label class="custom-file-label" for="input-berkas-1">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto KK</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-2">
                                        <label class="custom-file-label" for="input-berkas-2">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto pengantar RW</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-3">
                                        <label class="custom-file-label" for="input-berkas-3">Pilih Gambar</label>
                                    </div>
                                </div>
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
@endsection
