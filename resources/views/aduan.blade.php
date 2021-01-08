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
                                            <th>ID</th>
                                            <th>Nama Pengirim</th>
                                            <th>Aduan</th>
                                            <th>Tanggal</th>
                                            <th>Daerah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh
                                            </td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Detail"><i class="fas fa-eye" data-toggle="modal"
                                                        data-target="#detail-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-2">
                                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-3">
                                                    <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-4">
                                                    <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-5">
                                                    <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-6">
                                                    <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>DN01</td>
                                            <td>Edinburgh</td>
                                            <td>Lampu jalan mati</td>
                                            <td>09/12/2020</td>
                                            <td>Rejosari</td>
                                            <td>Aktif</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Edit"><i class="fas fa-edit" data-toggle="modal"
                                                        data-target="#edit-aduan"></i></button>

                                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Hapus"><i class="fas fa-trash" data-toggle="modal"
                                                        data-target="#delete-aduan"></i></button>
                                            </td>
                                        </tr>
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
    <div class="modal fade" id="detail-aduan" tabindex="-1" role="dialog" aria-labelledby="detail-aduan-title"
        aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="detail-aduan-title">Detail Aduan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body m-2">
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Nama Pengirim</div>
                        <div class="col-8 p-2 detail-aduan-val">Nama Pengirim</div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Aduan</div>
                        <div class="col-8 p-2 detail-aduan-val">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Omnis
                            maiores, velit
                            dolore nulla veritatis fuga beatae perferendis ex quibusdam sit tempora architecto rerum
                            aspernatur voluptate sapiente error neque aperiam? Eligendi.</div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Tanggal</div>
                        <div class="col-8 p-2 detail-aduan-val">11 Desember 2020</div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-3 p-2">Daerah</div>
                        <div class="col-8 p-2 detail-aduan-val">Rejosari</div>
                    </div>

                    <div class="form-group row">
                        <div class=" d-flex mx-auto">
                            <button type="button" class="btn btn-danger m-2">Penting</button>
                            {{-- <button type="button" class="btn btn-primary m-2"></button>
                            --}}
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

    </script>
@endsection
