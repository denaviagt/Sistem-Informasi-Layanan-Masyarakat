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
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                                            placeholder="Masukkan NIK" value="{{ old('nik') }}">
                                        @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kk" class="col-sm-3 col-form-label">No Kartu Kelurga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('kk') is-invalid @enderror" id="kk" name="kk"
                                            placeholder="Masukkan Nomor KK" value="{{ old('kk') }}">
                                        @error('kk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="fullName" name="full_name"
                                            placeholder="Masukkan Nama Lengkap" value="{{ old('full_name') }}">
                                        @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pob" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('pob') is-invalid @enderror" id="pob" name="pob"
                                            placeholder="Masukkan Tempat Lahir" value="{{ old('pob') }}">
                                        @error('pob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}">
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group @error('gender') is-invalid @enderror row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="genderMale" name="gender" class="custom-control-input @error('gender') is-invalid @enderror"
                                                value="male" aria-describedby="genderFeedback" @if(old('gender')) checked @endif>
                                            <label class="custom-control-label" for="genderMale">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="genderFemale" name="gender" class="custom-control-input @error('gender') is-invalid @enderror"
                                                value="female" aria-describedby="genderFeedback" @if(old('gender')) checked @endif>
                                            <label class="custom-control-label" for="genderFemale">Perempuan</label>
                                        </div>
                                    </div>
                                    @error('gender')
                                    <span class="invalid-feedback" id="genderFeedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodA" name="blood_type" class="custom-control-input @error('blood_type') is-invalid @enderror"
                                                value="A" @if(old('blood_type')) checked @endif>
                                            <label class="custom-control-label" for="bloodA">A</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodB" name="blood_type" class="custom-control-input @error('blood_type') is-invalid @enderror"
                                                value="B" @if(old('blood_type')) checked @endif>
                                            <label class="custom-control-label" for="bloodB">A</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodO" name="blood_type" class="custom-control-input @error('blood_type') is-invalid @enderror"
                                                value="O" @if(old('blood_type')) checked @endif>
                                            <label class="custom-control-label" for="bloodO">O</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="bloodAB" name="blood_type" class="custom-control-input @error('blood_type') is-invalid @enderror"
                                                value="AB" @if(old('blood_type')) checked @endif>
                                            <label class="custom-control-label" for="bloodAB">AB</label>
                                        </div>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="religion" class="col-sm-3 col-form-label">Agama/Kepercayaan</label>
                                    <div class="col-sm-9">
                                        <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam" @if(old('religion') == 'Islam') selected @endif>Islam</option>
                                            <option value="Katholik" @if(old('religion') == 'Katholik') selected @endif>Khatolik</option>
                                            <option value="Kristen" @if(old('religion') == 'Kristen') selected @endif>Kristen</option>
                                            <option value="Budha" @if(old('religion') == 'Budha') selected @endif>Budha</option>
                                            <option value="Hindu" @if(old('religion') == 'Hindu') selected @endif>Hindu</option>
                                            <option value="Khong Hucu" @if(old('religion') == 'Khong Hucu') selected @endif>Khong Hucu</option>
                                            <option value="Penghayat Kepercayaan" @if(old('religion') == 'Penghayat Kepercayaan') selected @endif>Penghayat Kepercayaan</option>
                                            <option value="Lainnya" @if(old('religion') == 'Lainnya') selected @endif>lainnya</option>
                                        </select>
                                        @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <select name="married_status" id="marriedStatus" class="form-control @error('married_status') is-invalid @enderror">
                                            <option disabled selected>Pilih Status</option>
                                            <option value="Kawin" @if(old('married_status') == 'Kawin') selected @endif>Kawin</option>
                                            <option value="Belum Kawin" @if(old('married_status') == 'Belum Kawin') selected @endif>Belum Kawin</option>
                                            <option value="Cerai Hidup" @if(old('married_status') == 'Cerai Hidup') selected @endif>Cerai Hidup</option>
                                            <option value="Cerai Mati" @if(old('married_status') == 'Cerai Mati') selected @endif>Cerai Mati</option>
                                        </select>
                                        @error('married_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <select name="last_education" id="lastEducation" class="form-control @error('last_education') is-invalid @enderror">
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
                                        @error('last_education')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="profession" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('profession') is-invalid @enderror" id="profession" name="profession"
                                            placeholder="Masukkan Pekerjaan">
                                        @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                                            placeholder="Masukkan Alamat Tinggal">{{ old('address') }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dusunId" class="col-sm-3 col-form-label">Dusun</label>
                                    <div class="col-sm-9">
                                        <select name="dusun_id" id="dusunId" class="form-control @error('dusun_id') is-invalid @enderror">
                                            <option value="1">Nama Dusun</option>
                                        </select>
                                        @error('dusun_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
