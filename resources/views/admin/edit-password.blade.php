@extends('layouts.app')
@section('title', 'Ubah Password Admin')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            <!-- order table -->
            <div class="row">
                <div class="col-12">
                    <div class="card ml-5 mr-5 ">
                        <form action="{{ url('/admin/edit/password') }}" method="post">
                            @csrf
                            <div class="card-body m-3 rounded-lg">
                                <div class="form-group row">
                                    <label for="oldPassword" class="col-sm-3 col-form-label">Password Lama</label>
                                    <div class="col-sm-9">
                                        <input name="old_password" type="password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            id="oldPassword" placeholder="Masukkan Password Lama" required="">
                                        @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="newPassword" class="col-sm-3 col-form-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <input name="new_password" type="password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="newPassword" placeholder="Masukkan Password Baru" required="">
                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="newPassword" class="col-sm-3 col-form-label">Konfirmasi Password
                                        Baru</label>
                                    <div class="col-sm-9">
                                        <input name="new_confirm_password" type="password"
                                            class="form-control @error('new_confirm_password') is-invalid @enderror"
                                            id="newPassword" placeholder="Konfirmasi Password Baru" required="">
                                        @error('new_confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-primary m-2" type="submit">Ubah Password</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
