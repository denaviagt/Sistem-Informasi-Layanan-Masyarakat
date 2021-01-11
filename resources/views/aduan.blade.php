@extends('layouts.app')
@section('title', 'Aduan Masyarat')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            <!-- order table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="aduanTable" class="table table-striped table-bordered display"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Penting</th>
                                            <th>No</th>
                                            <th>Nama Pengirim</th>
                                            <th>Aduan
                                            </th>
                                            <th>Tanggal</th>
                                            <th>Daerah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $item)
                                            <tr>
                                                <td class="">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="importantCheckbox">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                @if ($item->is_anonim == 1){
                                                    <td>Anonim</td>
                                                }@else{
                                                    <td>{{ $item->user->citizen->full_name }}</td>
                                                    }
                                                @endif
                                                <td>{{ $fedd_val }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->dusun->dusun_name }}</td>
                                                @if ($item->status == 'active'){
                                                    <td><span class="badge badge-success">Aktif</span></td>
                                                }@else{
                                                    <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                                    }
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-action text-info"
                                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                            class="fas fa-eye" data-id="{{ $item->id }}"
                                                            onclick="detailFeedback(event.target)"></i></button>

                                                    <button type="button" class="btn btn-action text-danger"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            class="fas fa-trash" data-toggle="modal"
                                                            data-target="#delete-aduan"></i></button>
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

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!--  Modal content for Detail Aduan -->
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="detail-aduan-title"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="detail-aduan-title">Detail Aduan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form action="" method="post">
                        @csrf
                        <input type="hidden" name="feedback_id" id="feedback_id">
                    </form>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Nama Pengirim</div>
                        <div class="col-8 p-2 detail-aduan-val" name="user_name" id="user_name"></div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Aduan</div>
                        <div class="col-8 p-2 detail-aduan-val" name="feedback" id="feedback"></div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Tanggal</div>
                        <div class="col-8 p-2 detail-aduan-val" name="date" id="date"></div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Daerah</div>
                        <div class="col-8 p-2 detail-aduan-val" name="dusun_name" id="dusun_name"></div>
                    </div>

                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <a href="" id="importantBtn" class="btn btn-primary m-2"
                                onclick="isImportant(event.target)">Penting</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Delete --}}
    <div class="modal fade" id="delete-aduan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Aduan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>Apakah Anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" onclick="deleteData(event.target)"
                                id="confirm-delete-aduan">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
    <script>
        $('#aduanTable').DataTable();

        function detailFeedback(event) {
            var id = $(event).data("id");
            let _url = `/aduan/${id}`;
            // console.log(id);
            $.ajax({
                url: _url,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // console.log(response);
                        $('#feedback_id').val(response.data['id'])

                        $('#feedback').append(response.data['feedback'])
                        $('#date').append(response.data['date'])
                        $('#dusun_name').append(response.dusun)
                        if (response.data['is_anonim'] === 1) {
                            $('#user_name').append('Anonim')
                        } else {
                            $('#user_name').append(response.full_name)
                        }
                        $('#modalDetail').modal('show');
                    }
                }
            });
        }

        function isImportant(event) {
            var id = $('#feedback_id').val();
            console.log(id);
            let _url = `/aduan/${id}/importantUpdate`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // if (response) {
                    // console.log(response);
                    $('#importantCheckbox').attr('checked', 'checked');
                    $('#modalDetail').modal('hide');
                    // }
                }
            });

        }

    </script>
@endsection
