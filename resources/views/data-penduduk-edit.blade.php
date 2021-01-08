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
                        <form method="POST" action="{{ url('/data-penduduk/'.$citizen->id.'/update') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$citizen->nik}}" id="ed-nik" name="nik" placeholder="Masukkan NIK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edKk" class="col-sm-3 col-form-label">No Kartu Kelurga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$citizen->kk}}" id="edKk" name="kk" placeholder="Masukkan Nomor KK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edFullName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edFullName" value="{{$citizen->full_name}}" name="full_name" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edPob" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$citizen->pob}}" id="edPob" name="pob" placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edDob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="edDob" value="{{$citizen->dob}}" name="dob">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edGenderMale" {{$citizen->gender == 'male'? 'checked':''}} name="gender" class="custom-control-input" value="male">
                                        <label class="custom-control-label" for="edGenderMale">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edGenderFemale" {{$citizen->gender == 'female'? 'checked':''}} name="gender" class="custom-control-input" value="female">
                                        <label class="custom-control-label" for="edGenderFemale">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edBloodA" {{$citizen->blood_type == 'A'? 'checked':''}} name="blood_type" class="custom-control-input" value="A">
                                        <label class="custom-control-label" for="edBloodA">A</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edBloodB" name="blood_type" {{$citizen->blood_type == 'B'? 'checked':''}} class="custom-control-input" value="B">
                                        <label class="custom-control-label" for="edBloodB">B</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edBloodO" name="blood_type" {{$citizen->blood_type == 'O'? 'checked':''}} class="custom-control-input" value="O">
                                        <label class="custom-control-label" for="edBloodO">O</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="edBloodAB" {{$citizen->blood_type == 'AB'? 'checked':''}} name="blood_type" class="custom-control-input" value="AB">
                                        <label class="custom-control-label" for="edBloodAB">AB</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="religion" class="col-sm-3 col-form-label">Agama/Kepercayaan</label>
                                <div class="col-sm-9">
                                    <select name="religion" id="edReligion" class="form-control">
                                        <option value="Islam" {{$citizen->religion == 'Islam'? 'selected':''}}>Islam</option>
                                        <option value="Katholik" {{$citizen->religion == 'Katholik'? 'selected':''}}>Khatolik</option>
                                        <option value="Kristen" {{$citizen->religion == 'Kristen'? 'selected':''}}>Kristen</option>
                                        <option value="Budha" {{$citizen->religion == 'Budha'? 'selected':''}}>Budha</option>
                                        <option value="Hindu" {{$citizen->religion == 'Hindu'? 'selected':''}}>Hindu</option>
                                        <option value="Khong Hucu" {{$citizen->religion == 'Khong Hucu'? 'selected':''}}>Khong Hucu</option>
                                        <option value="Penghayat Kepercayaan" {{$citizen->religion == 'Penghayat Kepercayaan'? 'selected':''}}>Penghayat Kepercayaan</option>
                                        <option value="Lainnya" {{$citizen->religion == 'Islam'? 'selected':''}}>lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-9">
                                    <select name="married_status" id="edMarriedStatus" class="form-control">
                                        <option disabled selected>Pilih Status</option>
                                        <option value="Kawin" {{$citizen->married_status == 'Kawin'? 'selected':''}}>Kawin</option>
                                        <option value="Belum Kawin" {{$citizen->married_status == 'Belum Kawin'? 'selected':''}}>Belum Kawin</option>
                                        <option value="Cerai Hidup" {{$citizen->married_status == 'Cerai Hidup'? 'selected':''}}>Cerai Hidup</option>
                                        <option value="Cerai Mati" {{$citizen->married_status == 'Cerai Mati'? 'selected':''}}>Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-9">
                                    <select name="last_education" id="edLastEducation" class="form-control">
                                        <option disabled selected>Pilih Pendidikan</option>
                                        <option value="Tidak/Belum Sekolah" {{$citizen->last_education == 'Tidak/Belum Sekolah'? 'selected':''}}>Tidak/Belum Sekolah</option>
                                        <option value="Tidak Tamat SD/Sederajat" {{$citizen->last_education == 'Tidak Tamat SD/Sederajat'? 'selected':''}}>Tidak Tamat SD/Sederajat</option>
                                        <option value="Tamat SD/Sederajat" {{$citizen->last_education == 'Tamat SD/Sederajat'? 'selected':''}}>Tamat SD/Sederajat</option>
                                        <option value="SLTP/Sederajat" {{$citizen->last_education == 'SLTP/Sederajat'? 'selected':''}}>SLTP/Sederajat</option>
                                        <option value="SLTA/Sederjat" {{$citizen->last_education == 'SLTA/Sederjat'? 'selected':''}}>SLTA/Sederjat</option>
                                        <option value="Diploma I/II" {{$citizen->last_education == 'Diploma I/II'? 'selected':''}}>Diploma I/II</option>
                                        <option value="Akademi/Diploma III/S. Muda" {{$citizen->last_education == 'Akademi/Diploma III/S. Muda'? 'selected':''}}>Akademi/Diploma III/S. Muda</option>
                                        <option value="Diploma IV/Strata I" {{$citizen->last_education == 'Diploma IV/Strata I'? 'selected':''}}>Diploma IV/Strata I</option>
                                        <option value="Strata II" {{$citizen->last_education == 'Strata II'? 'selected':''}}>Strata II</option>
                                        <option value="Strata III" {{$citizen->last_education == 'Strata III'? 'selected':''}}>Strata III</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edProfession" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edProfession" value="{{$citizen->profession}}" name="profession" placeholder="Masukkan Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edAddress" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="edAddress" name="address" placeholder="Masukkan Alamat Tinggal">{{$citizen->address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edDusunId" class="col-sm-3 col-form-label">Dusun</label>
                                <div class="col-sm-9">
                                    <select name="dusun_id" id="edDusunId" class="form-control">
                                    @foreach ($dusun as $item)
                                        <option value="{{$item->id}}" {{$citizen->dusun_id == $item->id? 'selected':''}}>{{$item->dusun_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=" d-flex mx-auto">
                                   <a href="{{ url()->previous() }}"><button  class="btn btn-danger m-2">Batal</button></a>
                                    <button type="submit" class="btn btn-primary m-2">Simpan</button>
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