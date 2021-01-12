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
                                    <h4 class="card-title">Edit Info Desa</h4>
                                </div>
                            </div>
                            <form action="{{ url('edit-info-desa/' . $infoDesaDetail->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <input type="hidden" value="{{ auth()->user()->id }}" name="admin_id">
                                <div class="form-group row">
                                    <label for="ed-judul-info"
                                        class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="ed-judul-info"
                                                placeholder="Masukkan judul" value="{{ $infoDesaDetail->title }}"
                                                name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Thumbnail</label>
                                    {{-- <div class="col-sm-6">
                                        <div class="ed-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="ed-thumbnail">
                                                <label class="custom-file-label" for="input-thumbnail">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-6">
                                        <div id="msg"></div>
                                        <input type="file" name="thumbnail" class="file" accept="image/*"
                                            style="visibility: hidden; position: absolute">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" disabled placeholder="Upload File"
                                                id="file">
                                            <div class="input-group-append">
                                                <button type="button" class="browse btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                        <div class="ml-2 col-sm-6">
                                            <img src="{{ url('thumbnail/' . $infoDesaDetail->thumbnail) }}" id="preview"
                                                class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ed-status" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="custom-select" id="ed-status" name="status">
                                                <option selected>Pilih Status...</option>
                                                <option value="published"
                                                    {{ $infoDesaDetail->status == 'published' ? 'selected' : '' }}>Publish
                                                </option>
                                                <option value="draft"
                                                    {{ $infoDesaDetail->status == 'draft' ? 'selected' : '' }}>Draft
                                                </option>
                                                {{-- <option value="3">Three</option>
                                                --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ed-isi-info" class="col-sm-2 col-form-label col-form-label-sm">Isi</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="summernote" id="summernote" id="ed-isi-info" cols="80"
                                                rows="15">{{ $infoDesaDetail->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mr-5">
                                    <button type="submit" class="btn btn-danger btn-sm mb-6">Simpan</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm mb-6">Batal</a>
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
