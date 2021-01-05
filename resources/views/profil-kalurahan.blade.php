@extends('layouts.app')
@section('title', 'Profil Kalurahan')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a href="#visi-misi" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Visi Misi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#aparaturs" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Struktur Organisasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pedukuhan" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Profil Pedukuhan</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="visi-misi">
                            <div class="visi row p-3">
                                <div class="col-lg-2">
                                    Visi
                                </div>
                                <div class="col-lg-10 ">
                                    <ul class="grid-container">
                                        @foreach ($visions as $item)
                                            <li>{{ $item->vision }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                            <div class="misi row mt-3">
                                <div class="col-lg-2">
                                    Misi
                                </div>
                                <div class="col-lg-10">
                                    <ul class="grid-container">
                                        @foreach ($missions as $item)
                                            <li>{{ $item->mission }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                                <button class="btn btn-primary ml-auto">Edit</button>
                            </div>
                        </div>
                        <div class="tab-pane " id="aparaturs">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto"
                                                    data-toggle="modal" data-target="#add-aparaturs">Tambah</button>
                                                <table id="aparatusTable"
                                                    class="table table-striped table-bordered display no-wrap"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Periode</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($apparatus as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->position }}</td>
                                                                <td>{{ $item->period }}</td>
                                                                <td>{{ $item->status }}</td>
                                                                <td>
                                                                    <button type="button" class="btn" data-toggle="tooltip"
                                                                        data-placement="top" title="Edit"><i
                                                                            class="fas fa-edit" data-toggle="modal"
                                                                            data-target="#edit-admin"></i></button>

                                                                    <button type="button" class="btn" data-toggle="tooltip"
                                                                        data-placement="top" title="Hapus"><i
                                                                            class="fas fa-trash" data-toggle="modal"
                                                                            data-target="#delete-admin"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pedukuhan">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto"
                                                    data-toggle="modal" data-target="#add-pedukuhan">Tambah</button>
                                                <table id="dusunTable"
                                                    class="table table-striped table-bordered display no-wrap"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Nama Pedukuhan</th>
                                                            <th>Kepala Dukuh</th>
                                                            {{-- <th>Status</th>
                                                            --}}
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dusuns as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->dusun_name }}</td>
                                                                <td>{{ $item->head_of_dusun }}</td>
                                                                {{-- <td>Aktif</td>
                                                                --}}
                                                                <td>
                                                                    <button type="button" class="btn" data-toggle="tooltip"
                                                                        data-placement="top" title="Edit"><i
                                                                            class="fas fa-edit" data-toggle="modal"
                                                                            data-target="#edit-admin"></i></button>

                                                                    <button type="button" class="btn" data-toggle="tooltip"
                                                                        data-placement="top" title="Hapus"><i
                                                                            class="fas fa-trash" data-toggle="modal"
                                                                            data-target="#delete-admin"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#aparatusTable').DataTable();
        $('#dusunTable').DataTable();

    </script>
@endsection
