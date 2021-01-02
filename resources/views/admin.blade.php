@extends('layouts.app')
@section('title', 'Daftar Admin')
@section('content')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" id="page-wrapper">
    <div class="container-fluid">
        <!-- order table -->
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <button type="button" class="btn btn-danger mb-2 d-flex ml-auto" data-toggle="modal" data-target="#add-admin">Tambah</button>
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        {{-- <th>No Telepon</th>
                                            --}}
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->level }}</td>
                                        @if($item->is_active){
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        }@else{
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        }
                                        @endif
                                        {{-- <td>{{ $item->email }}</td>
                                        --}}

                                        <td>
                                            <a class="btn" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit" data-target="#edit-admin" onclick="editPostModal(event.target)" data-id="{{ $item->id }}"></i></a>
                                            <a class="btn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash" onclick="modalDelete(event.target)" data-id="{{ $item->id }}"></i></a>

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


<!--  Modal content for Add Admin -->
<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body m-2">
                <form method="POST" action="{{ url('admin') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="namaAdmin" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaAdmin" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputUsername" name="username">
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" name="password">
                            </div>
                        </div> --}}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="genderMale" name="gender" class="custom-control-input" value="male">
                                <label class="custom-control-label" for="genderMale">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="genderFemale" name="gender" class="custom-control-input" value="female">
                                <label class="custom-control-label" for="genderFemale">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="selectLevelAdmin" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <select name="levelAdmin" id="selectLevelAdmin" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Super Admin">Super Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2">Batal</button>
                            <button type="submit" class="btn btn-primary m-2">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Modal content for Edit Admin -->
<div class="modal fade" id="edit-admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body m-2">
                <form method="POST" action="/admin/edit">
                    @csrf
                    <input type="text" class="form-control" name="ed_id_admin" hidden id="ed-id-admin">
                    <div class="form-group row">
                        <label for="ed-nama-admin" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ed_name_admin" id="ed-nama-admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ed-inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="ed_email_admin" id="ed-email-admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ed-inputUsername" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ed_username_admin" id="ed-username-admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ed-inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="ed_password_admin" id="ed-password-admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="ed-genderMale-admin" name="ed_gender_admin" class="custom-control-input" value="male">
                                <label class="custom-control-label" for="ed-genderMale-admin">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="ed-genderFemale-admin" name="ed_gender_admin" class="custom-control-input" value="female">
                                <label class="custom-control-label" for="ed-genderFemale-admin">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ed-selectLevelAdmin" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <select name="ed_level_admin" id="ed-level-admin" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="lurah">Kepala Desa</option>
                                <option value="superadmin">Super Admin</option>
                            </select>
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

<div class="modal fade" id="delete-admin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Hapus Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h4>Apakah Anda yakin akan menghapus?</h4>
                <div class="form-group row">
                    <div class=" d-flex mx-auto">
                        <button type="submit" class="btn btn-danger m-2" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" class="btn btn-primary m-2" onclick="deleteData(event.target)" id="confirm-delete-admin">Hapus</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->

<script>
    function editPostModal(event) {
        var id = $(event).data("id");
        let _url = `/admin/${id}/edit`;
        console.log(id);
        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $('#ed-id-admin').val(response.data['id'])
                    $('#ed-nama-admin').val(response.data['full_name'])
                    $('#ed-email-admin').val(response.data['email'])
                    $('#ed-username-admin').val(response.data['username'])
                    if (response.data['gender'] == "male") {
                        $('#ed-genderMale-admin').attr('checked', true)
                    } else if (response.data['gender'] == "female") {
                        $('#ed-genderFemale-admin').attr('checked', true)
                    }
                    $('#ed-level-admin').val(response.data['level'])
                    $('#edit-admin').modal('show');

                }
            }
        });
    }

    function modalDelete(event) {
        var id = $(event).data("id");

        $('#confirm-delete-admin').data('id', id); //setter
        $('#delete-admin').modal('show');

    }

    function deleteData(event) {
        var id = $(event).data("id");
        let _url = `/delete/${id}`;
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
                        location.reload();
                    }
                }
            }
        });
    }
</script>

@endsection