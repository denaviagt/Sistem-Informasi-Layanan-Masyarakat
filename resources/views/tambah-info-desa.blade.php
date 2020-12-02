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
            <form>
                <div class="form-group row">
                    <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputJudul">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputIsi" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="inputIsi" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputGambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" id="inputGambar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLampiran" class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" id="inputLampiran">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputStatus">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 text-right">
                        <button type="submit" class="btn btn-danger">Tambah</button>
                    </div>
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
