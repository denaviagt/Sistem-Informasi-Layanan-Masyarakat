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
                <div class="alert alert-success" style="display:none">
                    {{ Session::get('success') }}
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-3">
                            <a href="{{ url('potensi-desa/add') }}" type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($naturalResources as $naturalResource)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $naturalResource->title }}</td>
                                        <td>{!! $naturalResource->description !!}</td>
                                        <td>{{ $naturalResource->timestamps }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ url('potensi-desa', $naturalResource->id) }}" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-warning" href="{{ url('potensi-desa/'.$naturalResource->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-placement="center" data-target="#modalDelete{{ $naturalResource->id }}" title="Hapus"><i class="fas fa-trash" data-toggle="modal" data-target="#delete-info-desa"></i></button>

                                            <!--  Modal content for the above example -->
                                            <div class="modal fade" id="modalDelete{{ $naturalResource->id }}" tabindex="-1" role="dialog"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                                            <a href="{{ url('potensi-desa/'.$naturalResource->id.'/destroy') }}" class="btn btn-danger">Hapus <strong>{{ $naturalResource->title }}</strong></a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </td>
                                @endforeach
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
