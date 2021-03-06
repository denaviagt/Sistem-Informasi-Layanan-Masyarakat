@extends('front.layout.app')

@section('content')
    <main>
        <div class="container section-padding mt-3">
            <div class="section-tittle text-center mb-5">
                <h3>Layanan {{ $service_category->category }}</h3>
            </div>
            <div>
                <form class="form-contact">

                    <div class="switch-wrap d-flex ">
                        <div class="primary-switch mr-3">
                            <input type="checkbox" id="other">
                            <label for="other"></label>
                        </div>
                        <p for="other">Ajukan untuk orang lain</p>
                    </div>

                    <div id="body-bio">

                    </div>

                    @foreach ($service_category->requirement as $pc)
                        <div>
                            <label for="alamat">{{ $pc->terms }}</label>
                            <div class="custom-file mb-5">
                                <input type="file" class="custom-file-input" id="file_{{ $pc->id }}">
                                <label class="custom-file-label" for="file_{{ $pc->id }}">Unggah File</label>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-primary mx-auto">Ajukan Permohonan</button>
                    </div>
                </form>
            </div>

        </div>


    </main>
@endsection

@section('js')
    <script>
        $('#other').on('change', function() {
            let value = $(this).val();
            let result = ` <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK"
                                class="form-control single-input @error('nik') is-invalid @enderror" id="nik">
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kk">Nomor KK</label>
                            <input type="text" name="kk" placeholder="Masukkan No KK"
                                class="form-control @error('kk') is-invalid @enderror" id="kk">
                            @error('kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" placeholder="Masukkan Nama Lengkap"
                                class="form-control @error('name') is-invalid @enderror" id="nama">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="laki" value="option1">
                                <label class="form-check-label" for="laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="perempuan" value="option2">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="agama">Agama</label>
                            <br>
                            <select id="agama" name="religion" class="form-control w-100">
                                <option selected>Choose Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="profession" placeholder="Masukkan Pekerjaan" class="form-control"
                                id="pekerjaan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="email" name="pob" placeholder="Masukkan Tempat Lahir" class="form-control"
                                id="tempat_lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="dob" class="form-control" id="tanggal_lahir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control w-100" name="alamat" id="alamat" cols="30" rows="4"
                            placeholder="Masukkan Alamat"></textarea>
                    </div>`
            if (value == 'on') {
                $('#body-bio').html(result)
            } else {
                console.log('assd');
                $('#body-bio').empty()
            }
        })
    </script>
@endsection
