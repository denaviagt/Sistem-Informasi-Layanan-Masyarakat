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
                            <a href="#vision" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Visi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#missions" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Mission</span>
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
                        <li class="nav-item">
                            <a href="#produkHukum" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Produk Hukum</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="vision">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                            data-target="#addVision">Tambah</button>
                                        <table id="visionTable" class="table table-striped table-bordered display "
                                            style="width:100%; table-layout: auto;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Visi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($visions as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->vision }}</td>
                                                        <td>
                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                    data-toggle="modal"
                                                                    data-target="#editVision"></i></button>

                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteVision"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="missions">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                            data-target="#addMission">Tambah</button>
                                        <table id="missionTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Misi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($missions as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->mission }}</td>
                                                        <td>
                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                    data-toggle="modal"
                                                                    data-target="#editMisi"></i></button>

                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteMisi"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="aparaturs">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                            data-target="#add-aparaturs">Tambah</button>
                                        <table id="aparatusTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Periode</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
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
                                                                data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                    data-toggle="modal"
                                                                    data-target="#editAparatur"></i></button>

                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteAparatur"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pedukuhan">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                            data-target="#add-pedukuhan">Tambah</button>
                                        <table id="dusunTable" class="table table-striped table-bordered display no-wrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Nama Pedukuhan</th>
                                                    <th>Kepala Dukuh</th>
                                                    {{-- <th>Status</th>
                                                    --}}
                                                    <th>Aksi</th>
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
                                                                data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                    data-toggle="modal"
                                                                    data-target="#editDusun"></i></button>

                                                            <button type="button" class="btn" data-toggle="tooltip"
                                                                data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteDusun"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="produkHukum">
                            <div class="d-flex justify-content-center">
                                {{-- <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-thumbnail" hidden>
                                        <label class="custom-file-label" for="input-thumbnail">Pilih Gambar</label>
                                    </div>
                                </div> --}}
                                <input type="file" id="upload" hidden />
                                <label style="background-color: grey; padding: 0.5rem; color: white; border-radius: 0.3rem;
                                                                                                  cursor: pointer;"
                                    for="upload">Choose
                                    file</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Modal Tambah Visi --}}
    <div class="modal fade" id="addVision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Tambah Data Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-group row">
                            <label for="visionAdd" class="col-sm-3 col-form-label">Visi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="visionAdd" id="visionAdd"
                                    placeholder="Masukkan visi"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmAddVision">Tambah</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Tambah Misi --}}
    <div class="modal fade" id="addMission" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Tambah Data Misi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-group row">
                            <label for="missionAdd" class="col-sm-3 col-form-label">Misi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="missionAdd" id="missionnAdd"
                                    placeholder="Masukkan misi"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmAddVision">Tambah</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script>
        $('#aparatusTable').DataTable();
        $('#dusunTable').DataTable();
        $('#visionTable').DataTable();
        $('#missionTable').DataTable({

        });

    </script>
@endsection
