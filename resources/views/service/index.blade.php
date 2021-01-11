@extends('layouts.app')

@section('title', 'Nama Layanan')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            {{-- <form>
                <div class="form-group mb-4 col-md-4 pl-0">
                    <select class="custom-select mr-sm-2 bg-white" id="inlineFormCustomSelect">
                        <option value="E-KTP" selected>E-KTP</option>
                        <option value="Kartu Keluarga">Kartu Keluarga</option>
                        <option value="Akta Kelahiran">Akta Kelahiran</option>
                        <option value="Akta kematian">Akta kematian</option>
                        <option value="Pindah penduduk">Pindah penduduk</option>
                        <option value="Nikah">Nikah</option>
                        <option value="SKU">SKU</option>
                    </select>
                </div>
            </form> --}}
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-3">
                                <a href="javascript:void(0)" id="createService" type="button"
                                    class="btn waves-effect waves-light btn-danger" onclick="addService()">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table class="service-table table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            {{-- <th>NIK</th> --}}
                                            <th>Nama Pemohon</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>1</td>
                                                <td><a href="{{ url('detail-layanan') }}">{{ $item->id }}</a></td>
                                                {{-- <td>0129919191919</td>
                                                --}}
                                                <td>{{ $item->citizen_id }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id="{{ $item->id }}"
                                                        onclick="editService(event.target)" class="btn"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fas fa-edit"></i></a>

                                                    <a href="javascript:void(0)" data-id="{{ $item->id }}"
                                                        onclick="deleteService(event.target)" class="btn"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            class="fas fa-trash"></i></a>
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
                            <label for="status" class="col-sm-3 col-form-label">Status </label>
                            <div class="col-sm-9">
                                <select id="status" name="status">
                                    <option value="accepted">accepted</option>
                                    <option value="processing">processing</option>
                                    <option value="rejected">rejected</option>
                                    <option value="completed">completed</option>
                                    <option value="sent">sent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="service_category_id" class="col-sm-3 col-form-label">Kategori </label>
                            <div class="col-sm-9">
                                <input type='text' id="service_category_id" name="service_category_id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="citizen_id" class="col-sm-3 col-form-label">ID User </label>
                            <div class="col-sm-9">
                                <input type='text' id="citizen_id" name="citizen_id">
                            </div>
                        </div>
                        {{--
                        <div class="form-group row">
                            <label for="input-nik" class="col-sm-3 col-form-label">NIK </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-nik">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input-nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="input-alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-deskripsi-layanan" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="input-deskripsi-layanan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Masukan foto KTP</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input-berkas-1">
                                        <label class="custom-file-label" for="input-berkas-1">Pilih Gambar</label>
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
                                        <label class="custom-file-label" for="input-berkas-2">Pilih Gambar</label>
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
                                        <label class="custom-file-label" for="input-berkas-3">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <div class=" d-flex mx-auto">
                                <button type="submit" class="btn btn-danger m-2">Batal</button>
                                <button type="submit" class="btn btn-primary m-2" id="saveBtn" value="create"
                                    onclick="createService()">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@section('script')
    <script type="">
        $('.service-table').DataTable();
            $('.title').hide();
            var dl = ` <form method="GET" action="{{ url('/service/') }}">
                                <div class="form-group pl-0">
                                    <select name="category" class="custom-select mr-sm-2 bg-transparent border-0 text-dark font-weight-bold " onchange='this.form.submit()'
                                        id="inlineFormCustomSelect">
                                        @foreach ($category as $item)
                                            <option {{ request()->category == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                                {{ $item->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>`
            $('.header-title').append(dl);
                                        
                function addService () {
                    $('#service_id').val(' ');
                    $('#ajaxModal').modal('show');
                };
                // $('#createService').on('click', function () {
                //     $('#service_id').val('');
                //     $('#ajaxModal').modal('show');
                // });

                function editService(evet) {
                    var id = $(event).data('id');
                    let _url = `/service/${id}`;

                    $.ajax({
                        url : _url,
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

                function createService() {
                    var status = $('#status').val();
                    var service_category_id = $('#service_category_id').val();
                    var citizen_id = $('#citizen_id').val();
                    var id = $('#service_id').val();
                    var date = Date.now();

                    let _url = '/service/store';
                    let _token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url : _url,
                        type: 'POST',
                        data: {
                            id: id,
                            status: status,
                            service_category_id: service_category_id,
                            date: date,
                            citizen_id: citizen_id,
                            _token: _token
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.code == 200) {
                                if (id != "") {
                                    $("#row_" + id + " td:nth-child(2)").html(response.data.citizen_id);
                                    $("#row_" + id + " td:nth-child(3)").html(response.data.date);
                                    $("#row_" + id + " td:nth-child(4)").html(response.data.status);
                                } else {
                                    $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response
                                        .data.id + '</td><td>' + response.data.citizen_id + '</td><td>' + response
                                        .data.date + '</td><td>' + response.data.status +
                                        '</td><td><a href="javascript:void(0)" data-id="' + response.data.id +
                                        '" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="' +
                                        response.data.id +
                                        '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>'
                                    );
                                }
                                $('#citizen_id').val(' ');
                                $('#category_service_id').val(' ');
                                $('#date').val(' ');
                                $('#status').val(' ');
                                $('#serviceForm').trigger("reset");
                                $('#post-modal').modal('hide');
                            }
                        },
                        error: function(response) {
                            // 
                        }
                    });
                }

                function deletePost(event) {
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
                        }
                    });
                }




                                        
                                    </script>
@endsection
@endsection
