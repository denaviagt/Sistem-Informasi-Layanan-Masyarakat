@extends('layouts.app')

@section('title', 'Edit Data Penduduk Desa Jogotirto')

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
                                        <input type="text" class="form-control" id="ed-nik" name="nik"
                                            placeholder="Masukkan NIK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edKk" class="col-sm-3 col-form-label">No Kartu Kelurga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="edKk" name="kk"
                                            placeholder="Masukkan Nomor KK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edFullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="edFullName" name="full_name"
                                            placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edPob" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="edPob" name="pob"
                                            placeholder="Masukkan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edDob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="edDob" name="dob">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="edGenderMale" name="gender" class="custom-control-input"
                                                value="male">
                                            <label class="custom-control-label" for="genderMale">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="edGenderFemale" name="gender"
                                                class="custom-control-input" value="female">
                                            <label class="custom-control-label" for="genderFemale">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="religion" class="col-sm-3 col-form-label">Agama/Kepercayaan</label>
                                    <div class="col-sm-9">
                                        <select name="religion" id="edReligion" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Katholik">Khatolik</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Khong Hucu">Khong Hucu</option>
                                            <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                            <option value="Lainnya">lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="edMarried" name="has_married"
                                                class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="married">Kawin</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="edSingle" name="has_married"
                                                class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="single">Belum Kawin</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edProfession" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="edProfession" name="profession"
                                            placeholder="Masukkan Pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edAddress" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="edAddress" name="address"
                                            placeholder="Masukkan Alamat Tinggal"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="edDusunId" class="col-sm-3 col-form-label">Dusun</label>
                                    <div class="col-sm-9">
                                        <select name="dusun_id" id="edDusunId" class="form-control">
                                            <option value="1">Nama Dusun</option>
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
