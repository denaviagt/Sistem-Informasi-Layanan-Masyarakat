@extends('layouts.app')

@section('title', 'Potensi Kalurahan')

@section('content')


<div class="page-wrapper">

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="text-right mb-3">
                            <a href="{{ url('tambah-potensi-desa') }}" type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>ID Admin</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0001</td>
                                        <td>Isi Judul</td>
                                        <td>Tanggal berapa ?</td>
                                        <td>id admin </td>
                                        <td>isi status</td>
                                        <td>
                                            <a class="btn" href="{{ url('detail-potensi-desa/') }}" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-eye"></i></a>

                                            <a class="btn" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>

                                            <button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash" data-toggle="modal" data-target="#delete-info-desa"></i></button>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- order table -->

        <!-- multi-column ordering -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>

    @endsection
