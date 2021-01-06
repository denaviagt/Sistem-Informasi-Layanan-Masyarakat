@extends('layouts.app')

@section('title', 'Pengurusan Nikah')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard">

                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#step-1">
                                    Data Pemohon
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-2">
                                    Berkas Permohonan
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="step-1" class="tab-pane detail-data-pemohon" role="tabpanel" aria-labelledby="step-1">
                                <div class="row m-3">
                                    <span class="col-3">NIK</span>
                                    <span class="col-5 detail-value detail-value">3244465774736</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Nomor KK</span>
                                    <span class="col-5 detail-value">234626251626553</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Nama</span>
                                    <span class="col-5 detail-value">Dzawin Nur</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Jenis Kelamin</span>
                                    <span class="col-5 detail-value">Laki-laki</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Agama</span>
                                    <span class="col-5 detail-value">Islam</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Status</span>
                                    <span class="col-5 detail-value">Kawim</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Pekerjaan</span>
                                    <span class="col-5 detail-value">Wiraswasta</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Tempat lahir</span>
                                    <span class="col-3 mr-3 detail-value">Sleman</span>
                                    <span class="col-2">Tanggal lahir</span>
                                    <span class="col-3 detail-value">03/09/1990</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Alamat</span>
                                    <span class="col-5 detail-value">Alamatnya dimana aja bebas</span>
                                </div>
                            </div>
                            <div id="step-2" class="tab-pane berkas-layanan" role="tabpanel" aria-labelledby="step-2">
                                <div class="row m-3">
                                    <span class="col-4">Surat Pengantar RT/RW/Dukuh Setempat</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi KK</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi KTP</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi Akta Kelahiran</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi Ijazah Terakhir</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Foto Berwarna Background Biru</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi KTP Calon Istri*</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Fotokopi Akta Kelahiran Calon Istri*</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Akta Cerai</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Akta Kematian</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
