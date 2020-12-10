@extends('layouts.app')

@section('title', 'Tambah Info Desa')

@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6">
                <h4 class="card-title">Tambah Info Desa</h4>
            </div>
        </div>
        <form action="{{url("isi-tambah-info-desa")}}">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Thumbnall</label>
                <div class="col-sm-4">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control-file" id="colFormLabelSm" placeholder="col-form-label-sm">
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-danger btn-sm">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">Publish</option>
                            <option value="2">Two</option>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

@endsection
