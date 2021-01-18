@extends('layouts.app')

@section('title', 'Detail Data Penduduk ')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h4 class="card-title">Detail Data Penduduk</h4>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>ID</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->id }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>NIK</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->nik }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>KK</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->kk }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Nama Lengkap</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->full_name }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Jenis Kelamin</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->gender }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Agama</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->religion }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Status Pernikahan</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->married_status }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Pendidikan Terakhir</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->last_education }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Golongan Darah</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->blood_type }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Profesi</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->profession }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Tempat Lahir</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->pob }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Tanggal Lahir</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->dob }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Alamat</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->address }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-3 d-flex">
                                    <span>Status</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <span>{{ $detail->status }}</span>
                                </div>
                            </div>

                            <div class="form-group text-right mr-5">
                                <a href="{{ url('data-penduduk/' . $detail->id . '/edit') }}" type="submit"
                                    class="btn btn-primary btn-sm mb-6 text-white">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>


@endsection
