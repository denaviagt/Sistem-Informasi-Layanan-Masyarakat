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
                                        @foreach($genders as $key => $gender)
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="gender{{ ucfirst($key) }}" name="gender" class="custom-control-input @error('gender') is-invalid @enderror"
                                                value="{{ $key }}" aria-describedby="genderFeedback" @if(old('gender') == $key) checked @endif>
                                            <label class="custom-control-label" for="gender{{ ucfirst($key) }}">{{ $gender }}</label>
                                        </div>
                                        @endforeach
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
                                        @foreach($bloodTypes as $bloodType)
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="blood{{ $bloodType }}" name="blood_type" class="custom-control-input @error('blood_type') is-invalid @enderror"
                                                value="{{ $bloodType }}" @if(old('blood_type') == $bloodType) checked @endif>
                                            <label class="custom-control-label" for="blood{{ $bloodType }}">{{ $bloodType }}</label>
                                        </div>
                                        @endforeach
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
                                            @foreach($religions as $religion)
                                            <option value="{{ $religion }}" @if(old('religion') == $religion) selected @endif>
                                                {{ $religion }}</option>
                                            @endforeach
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
                                            @foreach($marriedStatuses as $marriedStatus)
                                            <option value="{{ $marriedStatus }}" @if(old('married_status') == $marriedStatus) selected @endif>
                                                {{ $marriedStatus }}</option>
                                            @endforeach
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
                                            @foreach($lastEducations as $lastEducation)
                                            <option value="{{ $lastEducation }}" @if(old('last_education') == $lastEducation) selected @endif>
                                                {{ $lastEducation }}</option>
                                            @endforeach
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
                                            @foreach($dusuns as $dusun)
                                                <option value="{{ $dusun->id }}" @if(old('dusun_id') == $dusun->id) selected @endif>{{ $dusun->dusun_name }}</option>
                                            @endforeach
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
