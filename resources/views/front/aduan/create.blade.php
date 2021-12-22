@extends('front.layout.app')

@section('content')
    <main>
        <div class="container section-padding mt-3">
            <div class="section-tittle text-center mb-5">
                <h3>Laporkan Keluhan Anda</h3>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body m-2">
                    <form class="form-contact">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="nama">Nama Pengirim</label>
                                <input type="text" name="name" placeholder="Masukkan Nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group col-md-4 mt-5">
                                <div class="switch-wrap d-flex justify-content-between">
                                    <div>
                                        <input type="checkbox" id="anonim" name="anonim">
                                        <label for="anonim">Anonim</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="agama">Daerah</label>
                                <br>
                                <select id="agama" name="religion" class="form-control w-100">
                                    <option selected>Choose Daerah</option>
                                    @foreach ($dusun as $ds)
                                        <option value="{{ $ds->id }}">{{ $ds->dusun_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="date" class="form-control" id="tanggal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aduan">Aduan</label>
                            <textarea class="form-control w-100" name="aduan" id="aduan" cols="30" rows="4"
                                placeholder="Masukkan aduan"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">

                            <button type="submit" class="btn btn-primary mx-auto">Ajukan Keluhan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </main>
@endsection
