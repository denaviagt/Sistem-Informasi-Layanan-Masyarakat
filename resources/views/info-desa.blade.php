@extends('layouts.app')

@section('title', 'Info Desa')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" style="display:none">
                        {{ Session::get('success') }}
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-3">
                                <a href="{{ url('tambah-info-desa') }}" type="button"
                                    class="btn waves-effect waves-light btn-rounded btn-danger">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>ID Admin</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($infoDesa as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->admin_id }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ url('info-desa/' . $item->id) }}" class="btn"
                                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                            class="fas fa-eye"></i></a>

                                                    <a href="{{ url('/edit-info-desa/' . $item->id . '/edit') }}"
                                                        class="btn" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fas fa-edit"></i></a>

                                                    <a class="btn" data-toggle="tooltip" data-placement="top"
                                                        title="Hapus"><i class="fas fa-trash" id="DeleteInfo"
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
            <!-- ============================================================== -->
            <!-- End PAge Content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!--  Modal content for Delete Info desa-->
    <div class="modal fade" id="deleteInfoDesa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hapus Info Desa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    {{-- <input type="hidden" name="id"> --}}
                    <h4 class="text-center">Apakah anda yakin akan menghapus info desa?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="button" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                            <button type="button" id="modalConfirmDelete" onclick="deleteData(event.target)"
                                class="btn btn-primary m-2">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

@section('script')
    <script>
        // $(document).ready(function() {
        function modalDelete(event) {
            var id = $(event).data("id");

            // $('#confirm-delete-admin').data('id', id); //setter
            // $('#delete-admin').modal('show');
            $('#modalConfirmDelete').data('id', id);
            $('#deleteInfoDesa').modal('show');
        }

        function deleteData(event) {
            var id = $(event).data("id");
            let _url = `/info-desa/${id}`;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: _url,
                type: "DELETE",
                success: function(data) {
                    location.reload();
                    $('#deleteInfoDesa').modal('hide');
                },
                // success: function(response) {
                //     if (response) {
                //         if (response.status) {

                //             $('#deleteInfoDesa').modal('hide');
                //             // $(".alert-success").css("display", "block");
                //             // $(".alert-success").append("<P>This is a message");

                //         }
                // }
                // }
            });
        }
        // });
        //     $.ajax({
        //         url: `{{ url('info-desa') }}/` + id,
        //         type: 'post',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         data: {
        //             '_method': 'delete',
        //         },
        //         success: function(data) {
        //             $('#deleteInfoDesa').modal('hide');
        //         },
        //         error: function(error) {
        //             //
        //         }

        //     })
        // }

    </script>
@endsection
