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
            <form>
                <div class="input-group row">
                    <label for="inputGambar" class="col-sm-2 col-form-label">Thumbnall</label>
                    <input type="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append"><a href="{{url("tambah-info-desa")}}" type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Upload</a>
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
        All Rights Reserved by Adminmart. Designed and Developed by <a
            href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

@endsection
