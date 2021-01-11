@extends('layouts.app')

@section('title', 'Data Penduduk Desa Jogotirto')

@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <a href="{{ url('/data-penduduk/create') }}" class="btn btn-danger mb-2 ml-auto" role="button">Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Pedukuhan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citizen as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->dusun->dusun_name }}</td>
                                        <td>
                                            <a class="btn" data-toggle="tooltip" data-placement="top" title="View"><i class="fas fa-eye" onclick="modalDelete(event.target)" data-id="{{ $item->id }}"></i></a>
                                            <a class="btn" href="{{ url('data-penduduk/' . $item->id . '/edit') }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                            
                                            <a class="btn" data-toggle="tooltip"  data-placement="top" title="Delete"><i class="fas fa-trash" onclick="modalDelete(event.target)" data-id="{{ $item->id }}"></i></a>
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
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
</div>
<div class="modal fade" id="delete-citizen" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Hapus Data Penduduk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h4>Apakah Anda yakin akan menghapus?</h4>
                <div class="form-group row">
                    <div class=" d-flex mx-auto">
                        <button type="submit" class="btn btn-danger m-2" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button type="submit" class="btn btn-primary m-2" onclick="deleteData(event.target)" id="confirm-delete-citizen">Hapus</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
<script>
    function modalDelete(event) {
        var id = $(event).data("id");

        $('#confirm-delete-citizen').data('id', id); //setter
        $('#delete-citizen').modal('show');
    }

    function deleteData(event) {
        var id = $(event).data("id");
        let _url = `/data-penduduk-desa/delete/${id}`;
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
                    }else{
                        alert("Gagal Menghapus Data penduduk");
                    }
                }
            }
        });
    }
</script>