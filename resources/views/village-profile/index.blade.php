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
                                            data-target="#addApparatus">Tambah</button>
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
                                            data-target="#addDusuns">Tambah</button>
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
                            {{-- <div class="d-flex justify-content-center">
                                <input type="file" id="upload" hidden />
                                <label
                                    style="background-color: grey; padding: 0.5rem; color: white; border-radius: 0.3rem;
                                                                                                                                                                  cursor: pointer;"
                                    for="upload">Choose
                                    file</label>
                            </div> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal"
                                            data-target="#addRegulation">Tambah</button>
                                        <table id="regulationsTable"
                                            class="table table-striped table-bordered display no-wrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Judul</th>
                                                    <th>File</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($regulations as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->file }}</td>
                                                        <td>
                                                            <a href="{{ url('info-desa/' . $item->id) }}" class="btn"
                                                                data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                                    class="fas fa-eye"></i></a>
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
                                    placeholder="Masukkan visi"></textarea>
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
                                    placeholder="Masukkan misi"></textarea>
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
                        <input type="text" hidden class="form-control" name="type" value="apparatus" id="inputMissionType">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single form-control" name="citizen_id" id="inputName"
                                    style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPosition" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="position" id="inputPosition">
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
                                    placeholder="Masukkan Periode Jabatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" id="inputStatus">
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
                                    placeholder="Masukkan Nama Dusun">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHeadOfDusun" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="head_of_dusun" id="inputHeadOfDusun" type="text"
                                    placeholder="Masukkan Kepala Dukuh">
                                </input>
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
                                    placeholder="Masukkan Judul Produk Hukum">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFileReg" class="col-sm-3 col-form-label">File Produk Hukum</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="file" id="inputFileReg" type="file">
                                </input>
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                theme: "bootstrap",
                placeholder: "Pilih Nama Lengkap",
                // allowClear: true,
                minimumResultsForSearch: 10,
                ajax: {
                    url: "{{ url('citizen-name') }}",
                    delay: 250,
                    data: function(params) {
                        var query = {
                            search: params.term,
                            page: params.page || 1
                        }
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function(data, params) {
                        var items = $.map(data.data, function(obj) {
                            // console.log(obj);
                            obj.id = obj.id;
                            obj.text = obj.full_name;

                            return obj;
                        });
                        params.page = params.page || 1;

                        console.log(data);
                        // Transforms the top-level key of the response object from 'items' to 'results'
                        return {
                            results: items,
                            pagination: {
                                more: params.page < data.last_page
                            }
                        };
                    },
                }
            });
        });
        $('#aparatusTable').DataTable();
        $('#dusunTable').DataTable();
        $('#visionTable').DataTable();
        $('#regulationsTable').DataTable();
        $('#missionTable').DataTable({});

    </script>
@endsection
