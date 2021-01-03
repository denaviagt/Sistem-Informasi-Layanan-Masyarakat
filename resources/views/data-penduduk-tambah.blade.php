@extends('layouts.app')

@section('title', 'Tambah Data Penduduk Desa Jogotirto')

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
                            <form method="POST" action="{{ url('admin') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nik" name="nik">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kk" class="col-sm-3 col-form-label">No Kartu Kelurga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kk" name="kk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="full_name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="full_name" name="full_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="genderMale" name="gender" class="custom-control-input"
                                                value="male">
                                            <label class="custom-control-label" for="genderMale">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="genderFemale" name="gender" class="custom-control-input"
                                                value="female">
                                            <label class="custom-control-label" for="genderFemale">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="religion" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select name="religion" id="religion" class="form-control">
                                            <option value="islam">Islam</option>
                                            <option value="katholik">Khatolik</option>
                                            <option value="kristen">kristen</option>
                                            <option value="budha">budha</option>
                                            <option value="hindu">hindu</option>
                                            <option value="lainnya">lainnya</option>
                                        </select>
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
