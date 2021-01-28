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
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn-add btn d-flex ml-auto" data-toggle="modal"
                                data-target="#add-admin" style="margin-bottom: -60px"><i
                                    class="fas fa-plus mt-1 mr-1"></i>Tambah</button>
                            <div class="table-responsive">
                                <table id="adminTable" class="table table-bordered display" style="width:100%">
                                    <thead class="">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $item)
                                            <tr>
                                                <td class="table-info">{{ $loop->iteration }}</td>
                                                <td class="table-info">{{ $item->full_name }}</td>
                                                <td class="table-info">{{ $item->email }}</td>
                                                <td class="table-info">{{ $item->username }}</td>
                                                <td class="table-info">{{ $item->level }}</td>
                                                @if ($item->is_active){
                                                    <td class="table-info"><span class="badge badge-success">Aktif</span>
                                                    </td>
                                                }@else{
                                                    <td class="table-info"><span class="badge badge-danger">Tidak
                                                            Aktif</span></td>
                                                    }
                                                @endif
                                                <td class="table-info">
                                                    <a class="btn text-success btn-action" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i class="fa fa-edit"
                                                            data-target="#edit-admin" onclick="editPostModal(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>
                                                    <a class="btn btn-action text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"><i class="fas fa-trash"
                                                            onclick="modalDelete(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>

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
    <div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form method="POST" action="{{ url('/admin') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="namaAdmin" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaAdmin"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    id="inputEmail" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUsername" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control  @error('username') is-invalid @enderror"
                                    id="inputUsername" name="username" value="{{ old('username') }}">
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9  @error('gender') is-invalid @enderror">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="genderMale" name="gender" class="custom-control-input"
                                        value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="genderMale">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="genderFemale" name="gender" class="custom-control-input"
                                        value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="genderFemale">Perempuan</label>
                                </div>
                            </div>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="selectLevelAdmin" class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9  @error('levelAdmin') is-invalid @enderror">
                                <select name="levelAdmin" id="selectLevelAdmin" class="form-control">
                                    <option value="Admin" {{ old('levelAdmin') == 'Admin' ? 'selected' : '' }}>Admin
                                    </option>
                                    <option value="Lurah" {{ old('levelAdmin') == 'Lurah' ? 'selected' : '' }}>
                                        Lurah</option>
                                    <option value="Super Admin" {{ old('levelAdmin') == 'Super Admin' ? 'selected' : '' }}>
                                        Super Admin</option>
                                </select>
                            </div>
                            @error('levelAdmin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2">Batal</button>
                                <button type="submit" class="btn btn-primary m-2" id="addSubmit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for Edit Admin -->
    <div class="modal fade" id="edit-admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
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
                                <input type="text" class="form-control" name="ed_name_admin" id="ed-nama-admin" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="ed_email_admin" id="ed-email-admin" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-inputUsername" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ed_username_admin" id="ed-username-admin"
                                    required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class=" custom-control custom-radio custom-control-inline" required>
                                    <input type="radio" id="ed-genderMale-admin" name="ed_gender_admin"
                                        class="custom-control-input" value="male">
                                    <label class="custom-control-label" for="ed-genderMale-admin">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ed-genderFemale-admin" name="ed_gender_admin"
                                        class="custom-control-input" value="female">
                                    <label class="custom-control-label" for="ed-genderFemale-admin">Perempuan</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ed-selectLevelAdmin" class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <select name=" ed_level_admin" id="ed-level-admin" class="form-control" required>
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
    {{-- Modal Delete --}}
    <div class="modal fade" id="delete-admin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
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
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" onclick="deleteData(event.target)"
                                id="confirm-delete-admin">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->

@section('script')
    <script>
        @error('name')
            $('#add-admin').modal('show')
        @enderror
        @error('email')
            $('#add-admin').modal('show')
        @enderror
        @error('username')
            $('#add-admin').modal('show')
        @enderror
        @error('gender')
            $('#add-admin').modal('show')
        @enderror
        @error('levelAdmin')
            $('#add-admin').modal('show')
        @enderror
        // @error('ed-name-admin')
            //     $('#edit-admin').modal('show')
        // @enderror
        // @error('ed-email-admin')
            //     $('#edit-admin').modal('show')
        // @enderror
        // @error('ed-username-admin')
            //     $('#edit-admin').modal('show')
        // @enderror
        // @error('ed-gender-admin')
            //     $('#edit-admin').modal('show')
        // @enderror
        // @error('ed-level-admin')
            //     $('#edit-admin').modal('show')
        // @enderror

        $(document).ready(function() {
            $('#adminTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Excel'

                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> PDF'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Print'
                    },
                ]
            });
        })
        // $('#addSubmit').click(function(e) {
        //     e.preventDefault();
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         url: "{{ url('/admin') }}",
        //         method: 'POST',
        //         data: {
        //             name: $('#namaAdmin').val(),
        //             email: $('#inputEmail').val(),
        //             username: $('#inputUsername').val(),
        //             gender: $('input[name="gender"]:checked').val(),
        //             levelAdmin: $('#selectLevelAdmin').val(),
        //         },
        //         success: function(result) {
        //             if (result.errors) {
        //                 $('.is-invalid').show();
        //                 $('.alert-danger').show();
        //             } else {
        //                 $('#add-admin').modal('hide');
        //             }
        //         }
        //     })
        // })

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
            let _url = `admin/delete/${id}`;
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

@endsection
