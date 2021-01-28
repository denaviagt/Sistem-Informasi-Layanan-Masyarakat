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
                                            <th>Aduan</th>
                                            <th>Tanggal</th>
                                            <th>Daerah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $item)
                                            <tr id="row_feedback_{{ $item->id }}">
                                                <td class="importantValue">
                                                    @if ($item->is_important == 1)
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="importantCheckbox{{ $item->id }}" checked
                                                                onclick="isImportantCheck(event.target)"
                                                                data-id="{{ $item->id }}">
                                                            <label class="custom-control-label"
                                                                for="importantCheckbox{{ $item->id }}">&nbsp;</label>
                                                        </div>
                                                    @else
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="importantCheckbox{{ $item->id }}"
                                                                onclick="isImportantCheck(event.target)"
                                                                data-id="{{ $item->id }}">
                                                            <label class="custom-control-label"
                                                                for="importantCheckbox{{ $item->id }}">&nbsp;</label>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                @if ($item->is_anonim == 1){
                                                    <td>Anonim</td>
                                                }@else{
                                                    <td>{{ $item->user->citizen->full_name }}</td>
                                                    }
                                                @endif
                                                <td>{{ $item->feedback }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->dusun->dusun_name }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-action text-info"
                                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                            class="fas fa-eye" data-id="{{ $item->id }}"
                                                            onclick="detailFeedback(event.target)"></i></button>

                                                    <button type="button" class="btn btn-action text-danger"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            data-id="{{ $item->id }}"
                                                            onclick="deleteModalFeedback(event.target)"
                                                            class="fas fa-trash"></i></button>
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
    <div class="modal fade" id="deleteFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
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
                                id="confirmDeleteFeedback">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
    <script>
        $('#aduanTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                }
            ]
        });

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
                        $.ajax({
                            url: `/aduan/${id}/readUpdate`,
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        });
                    }
                }
            });

        }

        function isImportant(event) {
            var id = $('#feedback_id').val();
            // console.log(id);
            let _url = `/aduan/${id}/importantUpdate/true`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#modalDetail').modal('hide');
                    $('#importantCheckbox' + id).prop('checked', true)
                }
            });
        }

        function isImportantCheck(event) {
            var id = $(event).data("id");
            var checkbox = $('#importantCheckbox' + id)
            let _url = `/aduan/${id}/importantUpdate/${checkbox.prop('checked')}`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            }).fail(function() {
                alert("Gagal ubah data");
            });
            // console.log(id);

        }

        function deleteModalFeedback(event) {
            var id = $(event).data("id");
            console.log(id);

            $('#confirmDeleteFeedback').data('id', id); //setter
            $('#deleteFeedbackModal').modal('show');
        }

        function deleteData(event) {
            var id = $(event).data("id");
            let _url = `aduan/${id}`;
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
                            $("#row_feedback_" + id).remove();
                            $('#deleteFeedbackModal').modal('hide');
                        }
                    }
                }
            });
        }

    </script>
@endsection
