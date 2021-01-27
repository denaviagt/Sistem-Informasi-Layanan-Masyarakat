@extends('layouts.app')

@section('title', 'Tambah Potensi Desa')

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
                                    <h4 class="card-title">Tambah Potensi Desa</h4>
                                </div>
                            </div>
                            <form action="{{ url('potensi-desa/add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{ auth()->user()->id }}" name="admin_id">
                                <div class="form-group row">
                                    <label for="input-judul-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="input-judul-info" placeholder="Masukkan judul" name="title">
                                            @error('title')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-status"
                                        class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="custom-select @error('status') is-invalid @enderror"
                                                id="input-status" name="status">
                                                <option selected>Pilih Status...</option>
                                                @foreach ($statuses as $key => $status)
                                                    <option value="{{ $key }}" @if (old('status') == $key || $key == 'draft') selected @endif>
                                                        {{ $status }}
                                                    </option>
                                                @endforeach
                                                {{-- <option value="3">Three</option>
                                                --}}
                                            </select>
                                            @error('status')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Gambar</label>
                                    <div class="col-sm-9">
                                        @error('images')
                                            <span class="text-danger" id="multiple-message">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        <div class="multiple-container">
                                            <input type="file" name="images[]" multiple="multiple" class="file"
                                                accept="image/*" id="multiple-file"
                                                style="visibility: hidden; position: absolute">
                                            <div class="input-group @error('images') is-invalid @enderror my-3">
                                                <input type="text" id="multiple-text"
                                                    class="form-control @error('images') is-invalid @enderror" disabled
                                                    placeholder="Upload File">
                                                <div class="input-group-append">
                                                    <button type="button" id="multiple-button"
                                                        class="btn btn-primary">Upload</button>
                                                </div>
                                            </div>
                                            <div class="row m-1" id="multiple-thumbnail"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-isi-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('description') is-invalid @enderror">
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                name="description" id="summernote" cols="80" rows="15"></textarea>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Batal</button>
                                    <button type="submit" class="btn btn-primary btn-sm mb-6">Simpan</button>
                                </div>
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
@section('script')
    <script>
        $(document).ready(function() {
            $('#multiple-button').click(function() {
                $('#multiple-file').trigger("click");
            });
            $('#multiple-file').change(function(e) {
                const lastPosition = e.target.files.length - 1
                const file = e.target.files[lastPosition];
                $("#multiple-text").val(file.name);
                console.log(e.target.files.length)
                if (window.File || window.FileReader || window.FileList || window.Blob) {
                    const data = $(this)[0].files;
                    let containers = [];
                    $.each(data, function(index, file) {
                        const fRead = new FileReader();
                        fRead.onload = (function(file) {
                            return function(e) {
                                const img = $('<img/>').addClass('img-thumbnail m-1')
                                    .attr('src', e.target.result);
                                containers[index] = $('<div/>').addClass(
                                    'mt-2 col-sm-4').append(img);
                            };
                        })(file);
                        fRead.onloadend = (function(file) {
                            return function(e) {
                                $('#multiple-thumbnail').empty().append(containers);
                            };
                        })(file);
                        fRead.readAsDataURL(file);
                    });

                } else alert("Your browser doesn't support File API!");
            });
        });

    </script>
@endsection
