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
                            <form method="POST" action="{{ url('data-penduduk/create') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            placeholder="Masukkan NIK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kk" class="col-sm-3 col-form-label">No Kartu Kelurga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kk" name="kk"
                                            placeholder="Masukkan Nomor KK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fullName" name="full_name"
                                            placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pob" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="pob" name="pob"
                                            placeholder="Masukkan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="dob" name="dob">
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
                                    <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodA" name="blood_type" class="custom-control-input"
                                                value="A">
                                            <label class="custom-control-label" for="bloodA">A</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodB" name="blood_type" class="custom-control-input"
                                                value="B">
                                            <label class="custom-control-label" for="bloodB">A</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodO" name="blood_type" class="custom-control-input"
                                                value="O">
                                            <label class="custom-control-label" for="bloodO">O</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodAB" name="blood_type" class="custom-control-input"
                                                value="AB">
                                            <label class="custom-control-label" for="bloodAB">AB</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="religion" class="col-sm-3 col-form-label">Agama/Kepercayaan</label>
                                    <div class="col-sm-9">
                                        <select name="religion" id="religion" class="form-control">
                                            <option disabled selected>Pilih Agama</option>
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
                                        <select name="married_status" id="marriedStatus" class="form-control">
                                            <option disabled selected>Pilih Status</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <select name="last_education" id="lastEducation" class="form-control">
                                            <option disabled selected>Pilih Pendidikan</option>
                                            <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                            <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                            <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                            <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                            <option value="SLTA/Sederjat">SLTA/Sederjat</option>
                                            <option value="Diploma I/II">Diploma I/II</option>
                                            <option value="Akademi/Diploma III/S. Muda">Akademi/Diploma III/S. Muda</option>
                                            <option value="DilpomaIV/Strata I">DilpomaIV/Strata I</option>
                                            <option value="Strata II">Strata II</option>
                                            <option value="Strata III">Strata III</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="profession" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="profession" name="profession"
                                            placeholder="Masukkan Pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="address" name="address"
                                            placeholder="Masukkan Alamat Tinggal"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dusunId" class="col-sm-3 col-form-label">Dusun</label>
                                    <div class="col-sm-9">
                                        <select name="dusun_id" id="dusunId" class="form-control">
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