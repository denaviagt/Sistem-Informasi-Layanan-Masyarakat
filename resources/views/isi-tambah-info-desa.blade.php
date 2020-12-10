@extends('layouts.app')

@section('title', 'Isi Tambah Info Desa')

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
        <form action="{{url("tambah-info-desa")}}">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Isi</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <textarea name="textarea" id="" cols="80" rows="15"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group text-right mr-5">
                <button type="submit" class="btn btn-danger btn-sm mb-6">Kembali</button>
                <button type="button" class="btn btn-danger btn-sm mb-6">Tambah</button>
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
