@extends('layouts.app')

@section('title', 'Info Desa')

@section('content')

    <div class="page-wrapper">
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
                            <form action="{{ url('isi-tambah-info-desa') }}">
                                <div class="form-group row">
                                    <label for="input-judul-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="input-judul-info">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Thumbnail</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="input-thumbnail">
                                                <label class="custom-file-label" for="input-thumbnail">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-status"
                                        class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="custom-select" id="input-status">
                                                <option selected>Pilih Status...</option>
                                                <option value="1">Publish</option>
                                                <option value="2">Draft</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="button" class="btn btn-danger btn-sm mb-6">Batal</button>
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Selanjutnya</button>
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
