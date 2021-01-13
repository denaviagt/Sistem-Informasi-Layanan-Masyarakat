@extends('layouts.app')

@section('title', 'E-KTP')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div id="smartwizard">

                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#step-1">
                                    Data Pemohon
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-2">
                                    Berkas Permohonan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-3">
                                    Selesai
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="step-1" class="tab-pane detail-data-pemohon" role="tabpanel" aria-labelledby="step-1">
                                <input type="hidden" name="citizen_id" id="citizen_id" value="{{ $service->citizen_id }}">
                                <div class="row m-3">
                                    <span class="col-3">NIK</span>
                                    <span class="col-5 detail-value detail-value">{{ $service->nik }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Nomor KK</span>
                                    <span class="col-5 detail-value">{{ $service->kk }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Nama</span>
                                    <span class="col-5 detail-value">{{ $service->full_name }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Jenis Kelamin</span>
                                    @if ($service->gender == 'male')
                                        <span class="col-3 mr-3 detail-value">Laki-laki</span>
                                    @else
                                        <span class="col-3 mr-3 detail-value">Perempuan</span>

                                    @endif
                                    <span class="col-2">Golongan Darah</span>
                                    <span class="col-3 detail-value">{{ $service->blood_type }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Agama</span>
                                    <span class="col-3 mr-3 detail-value">{{ $service->religion }}</span>
                                    <span class="col-2">Status</span>
                                    <span class="col-3 detail-value">{{ $service->married_status }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Pendidikan Terakhir</span>
                                    <span class="col-3 mr-3 detail-value">{{ $service->last_education }}</span>
                                    <span class="col-2">Pekerjaan</span>
                                    <span class="col-3 detail-value">{{ $service->profession }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Tempat lahir</span>
                                    <span class="col-3 mr-3 detail-value">{{ $service->pob }}</span>
                                    <span class="col-2">Tanggal lahir</span>
                                    <span class="col-3 detail-value">{{ $service->dob }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Alamat</span>
                                    <span class="col-5 detail-value">{{ $service->address }}</span>
                                </div>
                                <div class="row m-3">
                                    <span class="col-3">Dusun</span>
                                    <span class="col-5 detail-value">{{ $service->dusun_name }}</span>
                                </div>
                            </div>
                            <div id="step-2" class="tab-pane berkas-layanan" role="tabpanel" aria-labelledby="step-2">
                                @foreach ($requirement as $key => $req)
                                    <div class="row m-3">
                                        <span class="col-4">{{ $req->terms }}</span>
                                        <span class="col-4 mr-3 detail-value">{{ $files[$key]['file_url'] ?? '' }}</span>
                                        <button type="button" class="btn btn-primary mr-3">Lihat File</button>
                                        <button type="button" class="btn btn-success"
                                            id="berkas{{ $files[$key]['id'] ?? '' }}" onclick="fileVerif(event.target)"
                                            data-id="{{ $files[$key]['id'] ?? '' }}">Verifikasi</button>
                                    </div>
                                @endforeach
                            </div>
                            <div id="step-3" class="tab-pane berkas-layanan" role="tabpanel" aria-labelledby="step-3">
                                <div class="row">
                                    <div class="col-md-5 mx-auto mt-6">
                                        <div class="verification">
                                            <div class="verification_header">
                                                <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="verification_content">
                                                <h1>Berkas Sudah Lengkap, Verifikasi Selesai !</h1>
                                                <a href="#">Cetak
                                                    Dokumen</a>
                                                <a href="#">Kirim
                                                    Notifikasi</a>

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
@section('script')
    <script>
        $(document).ready(function() {
            $('#zero_config').DataTable();
            $('#smartwizard').smartWizard({
                theme: 'dots',
                lang: { // Language variables for button
                    next: 'Selanjutnya',
                    previous: 'Sebelumnya'
                },
                toolbarSettings: {
                    toolbarExtraButtons: [
                        $('<button></button>').text('Finish')
                        .addClass('btn btn-info')
                        .on('click', function() {
                            alert('Finish button click');
                        }),
                        $('<button></button>').text('Cancel')
                        .addClass('btn btn-danger')
                        .on('click', function() {
                            alert('Cancel button click');
                        })
                    ]
                },
            });
            $('#smartwizard').on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var step1 = $("#step-1");
                if (stepDirection === 1 && step1) {
                    var id = $('#citizen_id').val();
                    console.log(id);
                    let _url = `/citizen/${id}/dataverif`;
                    $.ajax({
                        url: _url,
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    });
                }
                return true;
            });

        })

        function fileVerif(event) {
            var id = $(event).data('id');
            let _url = `/sevice-file/${id}/status`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        }

    </script>
@endsection
