@extends('layouts.app')
@section('title', 'Profil Kalurahan')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            @if (session('status-success'))
                <div class="alert alert-success">
                    {{ session('status-success') }}
                </div>
            @endif
            @if (session('status-fail'))
                <div class="alert alert-danger">
                    {{ session('status-fail') }}
                </div>
            @endif
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
                                <span class="d-none d-lg-block">Misi</span>
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
                                        <button type="button" class="btn btn-primary mb-2 d-flex ml-auto"
                                            data-toggle="modal" data-target="#addVision">Tambah</button>
                                        <table id="visionTable" class="table table-striped table-bordered display "
                                            style="width:100%; table-layout: auto;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Visi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($visions as $item)
                                                    <tr id="row_vision_{{ $item->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->vision }}</td>
                                                        <td>
                                                            <button type="button" class="btn text-success btn-action"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fas fa-edit" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalEditVision(event.target)"></i></button>

                                                            <button type="button" class="btn  btn-action text-danger"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                                    class="fas fa-trash" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalDeleteVision(event.target)"></i></button>
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
                                        <button type="button" class="btn btn-primary mb-2 d-flex ml-auto"
                                            data-toggle="modal" data-target="#addMission">Tambah</button>
                                        <table id="missionTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Misi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($missions as $item)
                                                    <tr id="row_msision_{{ $item->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->mission }}</td>
                                                        <td>
                                                            <button type="button" class="btn text-success btn-action"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fas fa-edit" data-id="{{ $item->id }}"
                                                                    onclick="modalEditMission(event.target)"></i></button>

                                                            <button type="button" class="btn btn-action text-danger"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                                    class="fas fa-trash" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalDeleteMission(event.target)"></i></button>
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
                                        <button type="button" class="btn btn-primary d-flex ml-auto" data-toggle="modal"
                                            data-target="#addApparatus" style="margin-bottom: -60px">Tambah</button>
                                        <table id="aparatusTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Periode</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($apparatus as $item)
                                                    <tr id="row_apparatus_{{ $item->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->citizen->full_name }}</td>
                                                        <td>{{ $item->position }}</td>
                                                        <td>{{ $item->period }}</td>
                                                        @if ($item->status == 'active'){
                                                            <td><span class="badge badge-success">Aktif</span></td>
                                                        }@else{
                                                            <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                                            }
                                                        @endif
                                                        <td>
                                                            <button type="button" class="btn text-success btn-action"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fas fa-edit" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalEditApparatus(event.target)"></i></button>

                                                            <button type="button" class="btn btn-action text-danger"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                                    class="fas fa-trash" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalDeleteApparatus(event.target)"></i></button>
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
                                        <button type="button" class="btn btn-primary d-flex ml-auto"
                                            style="margin-bottom: -40px" data-toggle="modal"
                                            data-target="#addDusuns">Tambah</button>
                                        <table id="dusunTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pedukuhan</th>
                                                    <th>Kepala Dukuh</th>
                                                    {{-- <th>Status</th>
                                                    --}}
                                                    <th style="width: 20px !important">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dusuns as $item)
                                                    <tr id="row_dusun_{{ $item->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->dusun_name }}</td>
                                                        <td>{{ $item->head_of_dusun }}</td>
                                                        <td>
                                                            <button type="button" class="btn text-success btn-action"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fas fa-edit" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalEditDusun(event.target)"></i></button>

                                                            {{-- <button type="button"
                                                                class="btn btn-action text-danger" data-toggle="tooltip"
                                                                data-placement="top" title="Hapus"><i class="fas fa-trash"
                                                                    data-toggle="modal" data-id="{{ $item->id }}"
                                                                    onclick="modalDeleteDusun(event.target)"></i></button>
                                                            --}}
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-primary mb-2 d-flex ml-auto"
                                            data-toggle="modal" data-target="#addRegulation">Tambah</button>
                                        <table id="regulationsTable" class="table table-striped table-bordered display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>File</th>
                                                    <th style="width: 5em">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($regulations as $item)
                                                    <tr id="row_regulation_{{ $item->id }}">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->file }}</td>
                                                        <td>
                                                            <a href="{{ asset('uploads/regulationFile/' . $item->file) }}"
                                                                class="btn btn-action text-primary regulation-file-view"
                                                                data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <button type="button" class="btn text-success btn-action"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fas fa-edit" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalEditRegulation(event.target)"></i></button>

                                                            <button type="button" class="btn btn-action text-danger"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                                    class="fas fa-trash" data-toggle="modal"
                                                                    data-id="{{ $item->id }}"
                                                                    onclick="modalDeleteRegulation(event.target)"></i></button>
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
                    <form action="{{ url('/profil-kalurahan/') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="text" hidden class="form-control" name="type" value="vision" id="inputVisionType">
                            <label for="visionAdd" class="col-sm-3 col-form-label">Visi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="visionAdd" id="visionAdd"
                                    placeholder="Masukkan visi" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Edit Visi --}}
    <div class="modal fade" id="editVision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Data Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan/vision') }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="visionId" id="visionId">
                        <div class="form-group row">
                            <label for="visionEdit" class="col-sm-3 col-form-label">Visi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="visionEdit" id="visionEdit"
                                    placeholder="Masukkan visi" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete Visi --}}
    <div class="modal fade" id="deleteVision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmDeleteVision"
                                onclick="confirmDeleteVision(event.target)">Hapus</button>
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
                    <form action="{{ url('/profil-kalurahan') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="text" hidden class="form-control" name="type" value="mission"
                                id="inputMissionType">
                            <label for="missionAdd" class="col-sm-3 col-form-label">Misi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="missionAdd" id="missionnAdd"
                                    placeholder="Masukkan misi" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Edit Misi --}}
    <div class="modal fade" id="editMission" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Data Misi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan/mission') }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="missionId" id="missionId">
                        <div class="form-group row">
                            <label for="missionAdd" class="col-sm-3 col-form-label">Misi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="missionEdit" id="missionEdit"
                                    placeholder="Masukkan misi" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete Visi --}}
    <div class="modal fade" id="deleteMission" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Misi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmDeleteMission"
                                onclick="confirmDeleteMission(event.target)">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Tambah Struktur Organisasi --}}
    <div class="modal fade" id="addApparatus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Tambah Data Aparatur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                        <input type="text" hidden class="form-control" name="type" value="apparatus" id="inputApparatusType"
                            required>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single form-control" name="citizen_id" id="inputName"
                                    style="width: 100%;" required>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPosition" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="position" id="inputPosition" required>
                                    <option disabled selected>Pilih Posisi</option>
                                    <option value="Lurah">Lurah</option>
                                    <option value="Carik">Carik</option>
                                    <option value="Kaur Tatalaksana">Kaur Tatalaksana</option>
                                    <option value="Kaur Danarta">Kaur Danarta</option>
                                    <option value="Kaur Pangripta">Kaur Pangripta</option>
                                    <option value="Jayabaya">Jayabaya</option>
                                    <option value="Ulu-ulu">Ulu-ulu</option>
                                    <option value="Kamituwa">Kamituwa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPeriod" class="col-sm-3 col-form-label">Periode Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" value="" name="period" class="form-control" id="inputPeriod"
                                    placeholder="Masukkan Periode Jabatan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="inputStatus" required>
                                    <option disabled selected>Pilih Status</option>
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Edit Struktur Organisasi --}}
    <div class="modal fade" id="editApparatus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Data Aparatur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan/apparatus') }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                        <input type="text" hidden class="form-control" name="apparatusId" id="apparatusId">
                        <div class="form-group row">
                            <label for="editName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single form-control" name="citizen_id" id="editName"
                                    style="width: 100%;" required>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editPosition" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="position" id="editPosition" required>
                                    <option disabled selected>Pilih Posisi</option>
                                    <option value="Lurah">Lurah</option>
                                    <option value="Carik">Carik</option>
                                    <option value="Kaur Tatalaksana">Kaur Tatalaksana</option>
                                    <option value="Kaur Danarta">Kaur Danarta</option>
                                    <option value="Kaur Pangripta">Kaur Pangripta</option>
                                    <option value="Jayabaya">Jayabaya</option>
                                    <option value="Ulu-ulu">Ulu-ulu</option>
                                    <option value="Kamituwa">Kamituwa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editPeriod" class="col-sm-3 col-form-label">Periode Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" value="" name="period" class="form-control" id="editPeriod"
                                    placeholder="Masukkan Periode Jabatan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editStatus" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="editStatus" required>
                                    <option disabled selected>Pilih Jabatan</option>
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete Struktur Organisasi--}}
    <div class="modal fade" id="deleteApparatus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Aparatur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmDeleteApparatus"
                                onclick="confirmDeleteApparatus(event.target)">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Tambah Profil Pedukuhan --}}
    <div class="modal fade" id="addDusuns" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Tambah Data Dusun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan') }}" method="POST">
                        @csrf
                        <input type="text" hidden class="form-control" name="type" value="dusuns" id="inputDusunsType">
                        <div class="form-group row">
                            <label for="inputDusun" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="dusun_name" id="inputDusun" type="text"
                                    placeholder="Masukkan Nama Dusun" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHeadOfDusun" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="head_of_dusun" id="inputHeadOfDusun" type="text"
                                    placeholder="Masukkan Kepala Dukuh" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Tambah Profil Pedukuhan --}}
    <div class="modal fade" id="editDusun" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Data Dusun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan/dusuns') }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" hidden class="form-control" name="dusunId" value="dusuns" id="dusunId">
                        <div class="form-group row">
                            <label for="editDusunName" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="dusun_name" id="editDusunName" type="text"
                                    placeholder="Masukkan Nama Dusun" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editHeadOfDusun" class="col-sm-3 col-form-label">Nama Kepala Dukuh</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="head_of_dusun" id="editHeadOfDusun" type="text"
                                    placeholder="Masukkan Kepala Dukuh" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete Struktur Organisasi--}}
    <div class="modal fade" id="deleteDusun" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Dusun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmDeleteDusun"
                                onclick="confirmDeleteDusun(event.target)">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Tambah Produk Hukum --}}
    <div class="modal fade" id="addRegulation" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Tambah Data Produk Hukum</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" hidden class="form-control" name="type" value="regulations"
                            id="inputRegulationType">
                        <div class="form-group row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Judul Produk Hukum</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="title" id="inputTitle" type="text"
                                    placeholder="Masukkan Judul Produk Hukum" required>
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFileReg" class="col-sm-3 col-form-label">File Produk Hukum</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="file" id="inputFileReg" type="file" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Edit Produk Hukum --}}
    <div class="modal fade" id="editRegulation" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Data Produk Hukum</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/profil-kalurahan/regulations') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="text" hidden class="form-control" name="regulationId" id="regulationId">
                        <div class="form-group row">
                            <label for="editTitle" class="col-sm-3 col-form-label">Judul Produk Hukum</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="title" id="editTitle" type="text"
                                    placeholder="Masukkan Judul Produk Hukum" required>
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editFileReg" class="col-sm-3 col-form-label">File Produk Hukum</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="file" id="editFileReg" type="file" required>
                                </input>
                                <span id="fileNameEdit"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                    aria-hidden="true">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete Produk Hukum--}}
    <div class="modal fade" id="deleteRegulation" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Produk Hukum</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirmDeleteRegulation"
                                onclick="confirmDeleteRegulation(event.target)">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ asset('dist/js/EZView.js') }}"></script>
    <script src="{{ asset('dist/js/draggable.js') }}"></script>
    <script>
        $('#aparatusTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    filename: 'Data Struktur Organisasi'
                },
                {
                    extend: 'pdf',
                    filename: 'Data Struktur Organisasi'
                },
                {
                    extend: 'print',
                    filename: 'Data Struktur Organisasi'
                },

            ],

        });
        $('#dusunTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    filename: 'Data Padukuhan'
                },
                {
                    extend: 'pdf',
                    filename: 'Data Padukuhan'
                },
                {
                    extend: 'print',
                    filename: 'Data Padukuhan'
                },
                // {
                //     text: 'Tambah',
                //     className: 'btn btn btn-primary ml-auto add-dusun'
                // }

            ],

        });
        $('#visionTable').DataTable();
        $('#regulationsTable').DataTable();
        $('#missionTable').DataTable();

        $(document).ready(function() {
            $('.regulation-file-view').EZView();
            $('.dt-buttons').addClass('d-flex mb-2')
            $('.dt-button').addClass('m-1')
        });
        $('.js-example-basic-single').select2({
            theme: "bootstrap",
            placeholder: "Pilih Nama Lengkap",
            // allowClear: true,
            minimumResultsForSearch: 10,
            ajax: {
                url: "{{ url('citizen-name') }}",
                // type: 'GET',
                delay: 250,
                data: function(params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    // console.log(query);
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function(data, params) {
                    var items = $.map(data.data, function(obj) {
                        console.log(data);
                        obj.id = obj.id;
                        obj.text = obj.full_name;

                    });
                    params.page = params.page || 1;

                    // console.log();
                    // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: data.data,
                        pagination: {
                            more: params.page < data.last_page
                        }
                    };
                },
            }
        });

        function modalEditVision(event) {
            var id = $(event).data("id");
            let _url = `/profil-kalurahan/${id}/vision/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    console.log(response.data);
                    if (response) {
                        $('#visionId').val(response.data['id'])
                        $('#visionEdit').val(response.data['vision'])
                        $('#editVision').modal('show');
                    }
                }
            });

        }

        function modalDeleteVision(event) {
            var id = $(event).data("id");
            $('#confirmDeleteVision').data('id', id);
            $('#deleteVision').modal('show');
        }

        function confirmDeleteVision(event) {
            var id = $(event).data("id");
            let _url = `profil-kalurahan/${id}/vision`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(response) {
                    if (response) {
                        if (response.status) {
                            // location.reload();
                            $("#row_vision_" + id).remove();
                            $('#deleteVision').modal('hide');
                            $('#visionTable').reload()
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

        function modalEditMission(event) {
            var id = $(event).data("id");
            console.log(id);
            let _url = `/profil-kalurahan/${id}/mission/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    console.log(response.data);
                    if (response) {
                        $('#missionId').val(response.data['id'])
                        $('#missionEdit').val(response.data['mission'])
                        $('#editMission').modal('show');
                    }
                }
            });
        }

        function modalDeleteMission(event) {
            var id = $(event).data("id");
            $('#confirmDeleteMission').data('id', id);
            $('#deleteMission').modal('show');
        }

        function confirmDeleteMission(event) {
            var id = $(event).data("id");
            let _url = `profil-kalurahan/${id}/mission`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(response) {
                    if (response) {
                        if (response.status) {
                            // location.reload();
                            $("#row_msision_" + id).remove();
                            $('#deleteMission').modal('hide');
                            $('#missionTable').reload();
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

        function modalEditApparatus(event) {
            var id = $(event).data("id");
            console.log(id);
            let _url = `/profil-kalurahan/${id}/apparatus/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    console.log(response.data);
                    if (response) {
                        $('#apparatusId').val(response.data['id'])
                        $('#editName').val(response.data['citizen_id'])
                        $('#editPosition').val(response.data['position'])
                        $('#editPeriod').val(response.data['period'])
                        $('#editStatus').val(response.data['status'])
                        $('#editApparatus').modal('show');
                    }
                }
            });
        }

        function modalDeleteApparatus(event) {
            var id = $(event).data("id");
            $('#confirmDeleteApparatus').data('id', id);
            $('#deleteApparatus').modal('show');
        }

        function confirmDeleteApparatus(event) {
            var id = $(event).data("id");
            let _url = `profil-kalurahan/${id}/apparatus`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(response) {
                    if (response) {
                        if (response.status) {
                            // location.reload();
                            $("#row_apparatus_" + id).remove();
                            $('#deleteApparatus').modal('hide');
                            $('#aparatusTable').reload();
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

        function modalEditDusun(event) {
            var id = $(event).data("id");
            console.log(id);
            let _url = `/profil-kalurahan/${id}/dusuns/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    console.log(response.data);
                    if (response) {
                        $('#dusunId').val(response.data['id'])
                        $('#editDusunName').val(response.data['dusun_name'])
                        $('#editHeadOfDusun').val(response.data['head_of_dusun'])
                        $('#editDusun').modal('show');
                    }
                }
            });
        }

        function modalDeleteDusun(event) {
            var id = $(event).data("id");
            $('#confirmDeleteDusun').data('id', id);
            $('#deleteDusun').modal('show');
        }

        function confirmDeleteDusun(event) {
            var id = $(event).data("id");
            let _url = `profil-kalurahan/${id}/dusuns`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(response) {
                    if (response) {
                        if (response.status) {
                            // location.reload();
                            $("#row_dusun_" + id).remove();
                            $('#deleteDusun').modal('hide');
                            // $('#dusunTable').reload();
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

        function modalEditRegulation(event) {
            var id = $(event).data("id");
            console.log(id);
            let _url = `/profil-kalurahan/${id}/regulations/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    console.log(response.data);
                    if (response) {
                        $('#regulationId').val(response.data['id'])
                        $('#editTitle').val(response.data['title'])
                        $('#fileNameEdit').append(response.data['file'])
                        $('#editRegulation').modal('show');
                    }
                    // if ($('#editFileReg').val() != '') {
                    //     $('#fileNameEdit').hide();
                    // }
                }
            });
        }

        function modalDeleteRegulation(event) {
            var id = $(event).data("id");
            $('#confirmDeleteRegulation').data('id', id);
            $('#deleteRegulation').modal('show');
        }

        function confirmDeleteRegulation(event) {
            var id = $(event).data("id");
            let _url = `profil-kalurahan/${id}/regulations`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(response) {
                    if (response) {
                        if (response.status) {
                            // location.reload();
                            $("#row_regulation_" + id).remove();
                            $('#deleteRegulation').modal('hide');
                            $('#regulationsTable').reload();
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

    </script>
@endsection
