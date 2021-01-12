@extends('layouts.app')

@section('title', 'Layanan Kartu Keluarga')

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
                            <li class="nav-item">
                                <a class="nav-link" href="#step-3">
                                    Selesai
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
                                    <span class="col-4">Surat Pengantar RT/RW</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Formulir F-1.01 Legalisir Dukuh</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                                <div class="row m-3">
                                    <span class="col-4">Formulir F-1.06 Susunan Keluarga</span>
                                    <span class="col-4 mr-3 detail-value">Nama File.pdf</span>
                                    <button class="btn btn-primary">Lihat File</button>
                                </div>
                            </div>
                            <div id="step-3" class="tab-pane berkas-layanan" role="tabpanel" aria-labelledby="step-3">
                                <div class="row">
                                    <div class="col-md-5 mx-auto mt-6">
                                        <div class="payment">
                                            <div class="payment_header">
                                                <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="content">
                                                <h1>Berkas Sudah Lengkap, Verifikasi Selesai !</h1>
                                                <a href="http://www.schauhan.in/wp-content/uploads/2020/12/payment_success.html#">Cetak Dokumen</a>
                                                <a href="http://www.schauhan.in/wp-content/uploads/2020/12/payment_success.html#">Kirim Notifikasi</a>

                                            </div>
                                        </div>
                                    </div>
                                    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
                                    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                                    <style type="text/css">
                                        body {
                                            background: #f2f2f2;
                                        }

                                        .payment {
                                            border: 1px solid #f2f2f2;
                                            height: 150px;
                                            border-radius: 20px;
                                            background: #fff;
                                        }
                                        .payment_header {
                                            background: rgb(141, 212, 230);
                                            padding: 8px;
                                            border-radius: 10px 10px 0px 0px;
                                        }
                                        .check {
                                            margin: 0px auto;
                                            width: 30px;
                                            height: 30px;
                                            border-radius: 100%;
                                            background: #fff;
                                            text-align: center;
                                        }
                                        .check i {
                                            vertical-align: middle;
                                            line-height: 30px;
                                            font-size: 30px;
                                        }
                                        .content {
                                            text-align: center;
                                        }
                                        .content h1 {
                                            font-size: 15px;
                                            padding-top: 15px;
                                        }
                                        .content a {
                                            width: 200px;
                                            height: 35px;
                                            color: #fff;
                                            border-radius: 30px;
                                            padding: 5px 10px;
                                            background: rgb(109, 203, 231);
                                            transition: all ease-in-out 0.3s;
                                        }
                                        .content a:hover {
                                            text-decoration: none;
                                            background: #000;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
