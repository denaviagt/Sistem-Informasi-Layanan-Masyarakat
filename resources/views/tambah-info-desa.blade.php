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
                            <form action="{{ url('tambah-info-desa') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ auth()->user()->id }}" name="admin_id">
                                <div class="form-group row">
                                    <label for="input-judul-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="input-judul-info"
                                                placeholder="Masukkan judul" name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Thumbnail</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="input-thumbnail"
                                                    name="thumbnail">
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
                                            <select class="custom-select" id="input-status" name="status">
                                                <option selected>Pilih Status...</option>
                                                <option value="published">Publish</option>
                                                <option value="draft">Draft</option>
                                                {{-- <option value="3">Three</option>
                                                --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-isi-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Isi</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="summernote" id="summernote" id="input-isi-info" cols="80"
                                                rows="15"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Tambah</button>
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Batal</button>
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
