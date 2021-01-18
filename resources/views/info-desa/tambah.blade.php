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
                                    <h4 class="card-title">Tambah Info Kalurahan</h4>
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
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="input-judul-info" placeholder="Masukkan judul" name="title"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Thumbnail</label>
                                    <div class="col-sm-6">
                                        <div id="msg"></div>
                                        <input type="file" name="thumbnail"
                                            class="file @error('thumbnail') is-invalid @enderror" accept="image/*"
                                            style="visibility: hidden; position: absolute">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" disabled placeholder="Upload File"
                                                id="file" value="{{ old('thumbnail') }}">
                                            <div class="input-group-append">
                                                <button type="button" class="browse btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                        @error('thumbnail')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="ml-2 col-sm-6">
                                            <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
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
                                                <option>Pilih Status...</option>
                                                <option value="published"
                                                    {{ old('status') == 'published' ? 'selected' : '' }}>Publish</option>
                                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-isi-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Isi</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="summernote" class="@error('summernote') is-invalid @enderror"
                                                id="summernote" cols="80" rows="15">{{ old('summernote') }}</textarea>
                                            @error('summernote')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="submit" class="btn btn-primary btn-sm mb-6">Tambah</button>
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
@section('script')
    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

    </script>
@endsection
