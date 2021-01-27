@extends('layouts.app')
@section('title', 'Layanan Masyarakat')

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
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="text-right mb-3">
                                <a href="javascript:void(0)" id="createService" type="button"
                                    class="btn waves-effect waves-light btn-rounded btn-primary"
                                    onclick="addService()">Tambah</a>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="service-table table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Pemohon</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr id="row_{{ $item->id }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->full_name }}</td>
                                                <td>{{ $item->date }}</td>
                                                @if ($item->status == 'accepted')
                                                    <td class="table-info"><span class="badge badge-warning">Diterima</span>
                                                    </td>
                                                @elseif($item->status == 'processing')
                                                    <td class="table-info"><span class="badge badge-primary">Proses</span>
                                                    </td>
                                                @elseif($item->status == 'rejected')
                                                    <td class="table-info"><span class="badge badge-danger">Ditolak</span>
                                                    </td>
                                                @elseif($item->status == 'completed')
                                                    <td class="table-info"><span class="badge badge-success">Selesai</span>
                                                    </td>
                                                @else
                                                    <td class="table-info"><span class="badge badge-info">Terkirim</span>
                                                    </td>
                                                @endif
                                                <td>
                                                    {{-- href="{{ url('/detail-layanan/') }}"
                                                    --}}
                                                    <a href="javascript:void(0)" class="btn btn-action text-primary"
                                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                            class="fas fa-eye" onclick="detailLayanan(event.target)"
                                                            data-id="{{ $item->id }}"></i></a>
                                                    {{-- <a href="javascript:void(0)"
                                                        data-id="{{ $item->id }}" onclick="editService(event.target)"
                                                        class="btn btn-action text-success" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                    --}}

                                                    <a class="btn btn-action text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Hapus"><i data-id="{{ $item->id }}"
                                                            class="fas fa-trash"
                                                            onclick="modalDelete(event.target)"></i></a>
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

    <!--  Modal content for Add Layanan -->
    <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <form id="serviceForm" name="serviceForm" method="POST" action="{{ url('service/store') }}">
                        @csrf
                        <input type="hidden" name="service_id" id="service_id">

                        <div class="form-group row">
                            <label for="input-nik" class="col-sm-3 col-form-label">NIK </label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single form-control" name="input_nik" id="inputNik"
                                    style="width: 100%;">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputAddress" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="inputAddress" disabled></textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="input-deskripsi-layanan" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="input-deskripsi-layanan" disabled></textarea>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto KTP</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-1">
                                        <label class="custom-file-label" for="inputBerkas1">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto KK</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-2">
                                        <label class="custom-file-label" for="inputBerkas2">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto pengantar RW</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-3">
                                        <label class="custom-file-label" for="inputBerkas3">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status </label>
                            <div class="col-sm-9">
                                <select id="status" name="status" class="form-control">
                                    <option value="accepted">Diterima</option>
                                    <option value="processing">Diproses</option>
                                    <option value="rejected">Ditolak</option>
                                    <option value="completed">Komplit</option>
                                    {{-- <option value="sent">sent</option>
                                    --}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary m-2" id="saveBtn"
                                    value="create">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteService" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Hapus Layanan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>Apakah Anda yakin akan menghapus?</h4>
                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="submit" class="btn btn-danger m-2" data-dismiss="modal"
                                aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary m-2" onclick="deleteService(event.target)"
                                id="confirmDeleteService">Hapus</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
    <script type="text/javascript">
        $('.service-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ],
            // dom: {
            //     button: {
            //         tag: "button",
            //         className: "btn btn-primary"
            //     },
            // }
        });
        $(document).ready(function() {
            $('.dt-button').addClass('btn btn-primary')
            $('#sidebarService').addClass('selected');
            $('#sidebarService .sidebar-link').addClass('active');
            $('.title').hide();
            var dl =
                ` <form method="GET" action="{{ url('/service/') }}">
                                                                                <div class="form-group pl-0 d-flex">
                                                                                    <select name="category" id="categoryService" class="custom-select mr-sm-2 bg-transparent border-0 text-dark font-weight-bold " onchange='this.form.submit()'
                                                                                        id="inlineFormCustomSelect">
                                                                                        @foreach ($category as $item)
                                                                                            <option {{ request()->category == $item->id ? 'selected' : '' }} value="{{ $item->id }}" >
                                                                                                {{ $item->category }}
                                                                                                <i class="fas fa-chevron-down"></i>
                                                                                            </option>
                                                                                        @endforeach

                                                                                        </select>
                                                                                </div>
                                                                            </form>`
            $('.header-title').append(dl);
            $('.js-example-basic-single').select2({
                theme: "bootstrap",
                placeholder: "Masukan NIK",
                // allowClear: true,
                minimumResultsForSearch: 10,
                ajax: {
                    url: "{{ url('citizen-nik') }}",
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
                            obj.id = obj.id;
                            obj.text = obj.nik;

                            return obj;
                        });
                        params.page = params.page || 1;

                        // console.log(data);
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
            $('#inputNik').on('change', function(e) {
                var id = $('#inputNik').val();
                let _url = `/citizen/${id}`;
                // console.log(id);
                $.ajax({
                    url: _url,
                    type: "GET",
                    success: function(response) {
                        if (response) {
                            // console.log(response);
                            $('#inputName').val(response.data['full_name'])
                            $('#inputAddress').val(response.data['address'])
                        }
                    }
                });
            })

        });

        function detailLayanan(event) {
            var id = $(event).data('id');
            // console.log(id);
            var id_category = $('#categoryService').val();
            window.location.href = `/layanan/${id_category}/${id}`;
            let _url = `/layanan/${id}/status`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        };

        function addService() {
            $('#service_id').val(' ');
            $('#ajaxModal').modal('show');
        };

        function editService(evet) {
            var id = $(event).data('id');
            let _url = `/service/${id}`;

            $.ajax({
                url: _url,
                type: 'GET',
                success: function(response) {
                    if (response) {
                        $('#service_id').val(response.id);
                        $('#status').val(response.status);
                        $('#service_category_id').val(response.service_category_id);
                        $('#citizen_id').val(response.citizen_id);
                        $('#ajaxModal').modal('show');
                    }
                }
            });
        }

        function modalDelete(event) {
            var id = $(event).data("id");
            $('#confirmDeleteService').attr('data-id', id);
            // console.log(id); //setter
            $('#deleteService').modal('show');

        }

        function deleteService(event) {
            var id = $(event).data("id");
            let _url = `/service/${id}`;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: _url,
                type: 'DELETE',
                data: {
                    _token: _token
                },
                success: function(response) {
                    $("#row_" + id).remove();
                    $('#deleteService').modal('hide');

                }
            });
        }

    </script>
@endsection
