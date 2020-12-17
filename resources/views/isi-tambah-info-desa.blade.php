@extends('layouts.app')

@section('title', 'Info Desa')

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
                                    <h4 class="card-title">Tambah Info Desa</h4>
                                </div>
                            </div>
                            <form action="{{ url('tambah-info-desa') }}">
                                <div class="form-group row">
                                    <label for="input-isi-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Isi</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="textarea" id="input-isi-info" cols="80" rows="15"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Kembali</button>
                                    <button type="button" class="btn btn-danger btn-sm mb-6">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>

@endsection
