@extends('layouts.app')

@section('title', 'Info Layanan')

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a href="#alur" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Alur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#syarat" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Syarat</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="alur">
                            <div class="table-responsive">
                                <button type="button" class="btn mb-2 d-flex ml-auto btn-rounded btn-primary"
                                    data-toggle="modal" data-target="#add-alur">Tambah</button>
                                <table id="syarat-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Alur</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($procedure as $item)
                                            <tr id="row_procedure_{{ $item->id }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->procedure }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <button type="button" class="btn text-success btn-action"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fas fa-edit" data-toggle="modal"
                                                            data-id="{{ $item->id }}"
                                                            onclick="editAlurModal(event.target)"></i></button>
                                                    <button type="button" class="btn btn-action text-danger"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            class="fas fa-trash" data-toggle="modal"
                                                            data-id="{{ $item->id }}"
                                                            onclick="modalAlurDelete(event.target)"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane show" id="syarat">
                            <div class="table-responsive">

                                <button type="button" class="btn mb-2 d-flex ml-auto btn-rounded btn-primary"
                                    data-toggle="modal" data-target="#add-syarat">Tambah</button>
                                <table id="alur-table" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Syarat</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($req as $item)
                                            <tr id="row_terms_{{ $item->id }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->terms }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <button type="button" class="btn text-success btn-action"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fas fa-edit" data-toggle="modal"
                                                            data-id="{{ $item->id }}"
                                                            onclick="editSyaratModal(event.target)"></i></button>
                                                    <button type="button" class="btn btn-action text-danger"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            class="fas fa-trash" data-toggle="modal"
                                                            data-id="{{ $item->id }}"
                                                            onclick="modalSyaratDelete(event.target)"></i></button>
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
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>
    <!--  Modal content for Add Alur Layanan -->
    <div class="modal fade" id="add-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form action="{{ url('/info-layanan/') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="text" hidden class="form-control" name="type" value="procedure"
                                id="input-alur-type">
                            <input type="text" hidden class="form-control" name="category" value="{{ request()->category }}"
                                id="input-alur-category">
                            <label for="input-alur-category" class="col-sm-3 col-form-label">Alur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="procedure" id="input-alur-layanan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="description" id="input-deskripsi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Edit Alur Layanan -->
    <div class="modal fade" id="edit-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form method="post" action="{{ url('/info-layanan/procedure') }}">
                        @csrf
                        @method('put')
                        <input type="text" hidden class="form-control" name="edit_alur_id" id="edit-alur-id">
                        <input type="text" hidden class="form-control" name="category" value="{{ request()->category }}">
                        <input type="text" hidden class="form-control" name="type" value="procedure" id="edit-alur-type">
                        <div class="form-group row">
                            <label for="edit-alur-layanan" class="col-sm-3 col-form-label">Alur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="edit_alur_layanan" id="edit-alur-layanan"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit-deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="edit_description_layanan"
                                    id="edit-alur-deskripsi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Delete Alur Layanan -->
    <div class="modal fade" id="delete-alur" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2 data-dismiss=" modal"">Batal</button>
                            <button type="submit" id="confirm-delete-alur" onclick="deleteAlurData(event.target)"
                                class="btn btn-primary m-2">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Add Syarat Layanan -->
    <div class="modal fade" id="add-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Syarat Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form action="{{ url('/info-layanan/') }}" method="POST">
                        @csrf
                        <input type="text" hidden class="form-control" name="type" value="terms" id="input-alur-layanan">
                        <input type="text" hidden class="form-control" name="category" value="{{ request()->category }}"
                            id="input-alur-layanan">
                        <div class="form-group row">
                            <label for="input-syarat-layanan" class="col-sm-3 col-form-label">Syarat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="terms" id="input-syarat-layanan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-deskripsi-syarat" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="description" id="input-deskripsi-syarat"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Edit Syarat Layanan -->
    <div class="modal fade" id="edit-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Syarat Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form method="post" action="{{ url('/info-layanan/terms') }}">
                        @csrf
                        @method('put')
                        <input type="text" hidden class="form-control" name="edit_syarat_id" id="edit-syarat-id">
                        <input type="text" hidden class="form-control" name="category" value="{{ request()->category }}">
                        <input type="text" hidden class="form-control" name="type" value="terms" id="edit-syarat-type">
                        <div class="form-group row">
                            <label for="edit-syarat-layanan" class="col-sm-3 col-form-label">Syarat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-syarat-layanan" name="edit_syarat_layanan"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit-deskripsi-syarat" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-deskripsi-syarat"
                                    name="edit_description_layanan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2">Batal</button>
                                <button type="submit" class="btn btn-primary m-2">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Delete Syarat Layanan -->
    <div class="modal fade" id="delete-syarat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Alur Layanan A</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <h4 class="text-center">Apakah anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" id="confirm-delete-syarat"
                                onclick="deleteSyaratData(event.target)">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script>
        $('#syarat-table').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    className: 'btn-success'
                },
                {
                    extend: 'excelHtml5',
                    className: 'btn-success'
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn-success'
                }
            ]
        });
        $('#alur-table').DataTable();
        $('.title').hide();
        var dl =
            ` <form method="GET" action="{{ url('/info-layanan/') }}">                                                                                                                              <div class="form-group pl-0">
                                <select name="category" class="custom-select mr-sm-2 bg-transparent border-0 text-dark font-weight-bold " onchange='this.form.submit()'id="inlineFormCustomSelect">
                                    @foreach ($category as $item)
                                                                                                                                                                                                <option {{ request()->category == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                                                                                                                                                                                    {{ $item->category }}
                                                                                                                                                                                                </option>
                                                                                                                                                                                            @endforeach
                                                                                                                                                                                        </select>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </form>`
        $('.header-title').append(dl);

        function editAlurModal(event) {
            var id = $(event).data("id");
            var type = $('#edit-alur-type').val();
            let _url = `/info-layanan/${id}/${type}/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    // console.log(response.data);
                    if (response) {
                        $('#edit-alur-id').val(response.data['id'])
                        $('#edit-alur-layanan').val(response.data['procedure'])
                        $('#edit-alur-deskripsi').val(response.data['description'])
                        $('#edit-alur').modal('show');
                    }
                }
            });
        }

        function editSyaratModal(event) {
            var id = $(event).data("id");
            var type = $('#edit-syarat-type').val();
            // console.log(type);
            let _url = `/info-layanan/${id}/${type}/edit`;
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    // console.log(response.data);
                    if (response) {
                        $('#edit-syarat-id').val(response.data['id'])
                        $('#edit-syarat-layanan').val(response.data['terms'])
                        $('#edit-deskripsi-syarat').val(response.data['description'])
                        $('#edit-syarat').modal('show');
                    }
                }
            });
        }

        function modalAlurDelete(event) {
            var id = $(event).data("id");

            $('#confirm-delete-alur').data('id', id); //setter
            $('#delete-alur').modal('show');

        }

        function deleteAlurData(event) {
            var id = $(event).data("id");
            let _url = `info-layanan/${id}/procedure`;
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
                            $("#row_procedure_" + id).remove();
                            $('#delete-alur').modal('hide');
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

        function modalSyaratDelete(event) {
            var id = $(event).data("id");
            $('#confirm-delete-syarat').data('id', id); //setter
            $('#delete-syarat').modal('show');

        }

        function deleteSyaratData(event) {
            var id = $(event).data("id");
            let _url = `info-layanan/${id}/terms`;
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
                            $("#row_terms_" + id).remove();
                            $('#delete-syarat').modal('hide');
                        } else {
                            alert("Gagal hapus data")
                        }
                    }
                }
            });
        }

    </script>

@endsection
