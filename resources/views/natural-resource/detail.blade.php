@extends('layouts.app')

@section('title', 'Detail Potensi Desa')

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
                                    <h4 class="card-title">Detail Potensi Desa</h4>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>ID</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    <span>{{ $detail->id }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>Judul</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    <span>{{ $detail->title }}</span>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>Deskripsi</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    {!! $detail->description !!}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>Status</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    <span>{{ $detail->status }}</span>
                                </div>
                            </div>
                            <div class="row ml-2 mt-4">
                                <div class="col-sm-2 d-flex">
                                    <span>Gambar</span>
                                    <span class="ml-auto">:</span>
                                </div>
                            </div>
                            <div class="row m-1">
                                @foreach($detail->images as $image)
                                    <div class="ml-2 col-sm-4">
                                        <img src="{{ asset('uploads/images/natural_resource/' . $image->image) }}" id="preview" class="img-thumbnail">
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group text-right mr-5">
                                <a href="{{ url('potensi-desa/' . $detail->id . '/edit') }}" type="submit"
                                    class="btn btn-primary btn-sm mb-6 text-white">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>


@endsection
