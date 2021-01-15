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
                                    <span>Thumbnail</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    {{-- <img src="{{ $infoDesaDetail->thumbnail }}" alt=""
                                        width="200px"> --}}
                                    <img src="{{ url('thumbnail/' . $detail->thumbnail) }}" alt="" width="400px">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>ID Admin</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    <span>
                                        {{ $detail->admin_id }}
                                    </span>
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
                            <div class="row m-2">
                                <div class="col-sm-2 d-flex">
                                    <span>Isi</span>
                                    <span class="ml-auto">:</span>
                                </div>
                                <div class="col-sm-10">
                                    {!! $detail->content !!}
                                </div>
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
