@extends('layouts.app')
@section('title', 'Profil Kalurahan')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a href="#visi-misi" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Visi Misi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#aparaturs" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Struktur Organisasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pedukuhan" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Profil Pedukuhan</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="visi-misi">
                            <div class="visi row p-3">
                                <div class="col-lg-2">
                                    Visi
                                </div>
                                <div class="col-lg-10 ">
                                    <ul class="grid-container">
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, officiis
                                            aspernatur!
                                            Fuga alias minima maiores nisi odio. Porro quae corporis illum ipsam blanditiis.
                                            Minima
                                            dolorem omnis facere ducimus enim asperiores!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, officiis
                                            aspernatur!
                                            Fuga alias minima maiores nisi odio. Porro quae corporis illum ipsam blanditiis.
                                            Minima
                                            dolorem omnis facere ducimus enim asperiores!</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="misi row mt-3">
                                <div class="col-lg-2">
                                    Misi
                                </div>
                                <div class="col-lg-10">
                                    <ul class="grid-container">
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, officiis
                                            aspernatur!
                                            Fuga alias minima maiores nisi odio. Porro quae corporis illum ipsam blanditiis.
                                            Minima
                                            dolorem omnis facere ducimus enim asperiores!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, officiis
                                            aspernatur!
                                            Fuga alias minima maiores nisi odio. Porro quae corporis illum ipsam blanditiis.
                                            Minima
                                            dolorem omnis facere ducimus enim asperiores!</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="aparaturs">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto"
                                                    data-toggle="modal" data-target="#add-aparaturs">Tambah</button>
                                                <table id="default_order"
                                                    class="table table-striped table-bordered display no-wrap"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Periode</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>2020/2021</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
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
                        <div class="tab-pane" id="pedukuhan">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <button type="button" class="btn btn-danger mb-2 d-flex ml-auto"
                                                    data-toggle="modal" data-target="#add-pedukuhan">Tambah</button>
                                                <table id="default_order"
                                                    class="table table-striped table-bordered display no-wrap"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Nama Pedukuhan</th>
                                                            <th>Kepala Dukuh</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>AD01</td>
                                                            <td>Edinburgh</td>
                                                            <td>Edinburgh@gmail.com</td>
                                                            <td>Aktif</td>
                                                            <td>
                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i class="fas fa-edit"
                                                                        data-toggle="modal"
                                                                        data-target="#edit-admin"></i></button>

                                                                <button type="button" class="btn" data-toggle="tooltip"
                                                                    data-placement="top" title="Hapus"><i
                                                                        class="fas fa-trash" data-toggle="modal"
                                                                        data-target="#delete-admin"></i></button>
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
                </div>
            </div>

        </div>
    </div>

@endsection
