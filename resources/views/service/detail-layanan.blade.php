@extends('layouts.app')

@section('title')
    Layanan {{ $service->service_category }}
@endsection
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
                                <input type="hidden" name="service_id" id="service_id" value="{{ $service->id }}">
                                <input type="hidden" name="citizen_id" id="citizen_id" value="{{ $service->citizen_id }}">
                                <input type="hidden" name="service_category_id" id="service_category_id"
                                    value="{{ $service->service_category_id }}">
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
                                        <span class="col-4 mr-3 detail-value" name="file-name"
                                            id="file-name{{ $files[$key]['id'] ?? '' }}">{{ $files[$key]['file_url'] ?? '' }}</span>
                                        <a href="{{ asset('assets/serviceFile/' . $files[$key]['file_url']) }}"
                                            class="btn btn-primary mr-3 service-file-btn">Lihat File</a>
                                        <button type="button" class="btn btn-success mr-3"
                                            id="berkas{{ $files[$key]['id'] ?? '' }}" onclick="statusUpdate(event.target)"
                                            data-id="{{ $files[$key]['id'] ?? '' }}">Verifikasi</button>
                                        <button type="button" class="btn btn-danger"
                                            id="btn-berkas{{ $files[$key]['id'] ?? '' }}" onclick="fileDenied(event.target)"
                                            data-id="{{ $files[$key]['id'] ?? '' }}">Tolak</button>
                                    </div>
                                @endforeach
                            </div>
                            <div id="step-3" class="tab-pane berkas-layanan" role="tabpanel" aria-labelledby="step-3">
                                <div class="row">
                                    <div class="col-md-5 mx-auto mt-6">
                                        <div class="verification">
                                            <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                                            <div class="verification_content">
                                                <h1 class="m-3 "><b>Berkas Sudah Lengkap, Verifikasi Selesai !<b></h1>
                                                <a class="btn btn-primary" href="#">Cetak
                                                    Dokumen</a>
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
    <script src="{{ asset('dist/js/EZView.js') }}"></script>
    <script src="{{ asset('dist/js/draggable.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#sidebarService').addClass('selected');
            $('#sidebarService .sidebar-link').addClass('active');
            $('#zero_config').DataTable();
            $('.service-file-btn').EZView();
            $('#smartwizard').smartWizard({
                theme: 'dots',
                toolbarSettings: {
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false,
                    toolbarExtraButtons: [
                        $('<a></a>').text('Batal')
                        .addClass('btn')
                        .attr('id', 'wizard-btn-cancel')
                        .on('click', function() {
                            window.location.href = "{{ url('/service/') }}";
                        }),
                        $('<button></button>').text('Kembali')
                        .addClass('btn')
                        .attr('id', 'wizard-btn-back')
                        .on('click', function() {
                            $('#smartwizard').smartWizard("prev");
                        }),
                        $('<button></button>').text('Selanjutnya')
                        .addClass('btn')
                        .attr('id', 'wizard-btn-next')
                        .on('click', function() {
                            $('#smartwizard').smartWizard("next");
                        }),
                        $('<button></button>').text('Verfikasi')
                        .addClass('btn')
                        .attr('id', 'wizard-btn-verified'),
                        // .on('click', function() {
                        //     alert('Finish button click');
                        // }),

                    ]
                },
            });

            $('#smartwizard').on("leaveStep", async function(e, anchorObject, currentStepIndex, nextStepIndex,
                stepDirection) {
                var step1 = $("#step-1");
                var status = false;
                // console.log(currentStepIndex);
                var id = $('#citizen_id').val();
                var id_service = $('#service_id').val();
                var id_category = $('#service_category_id').val();
                if (nextStepIndex === 1 && step1) {
                    // console.log(id);
                    let _url = `/citizen/${id}/dataverif`;
                    $.ajax({
                        url: _url,
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    });
                    // status = true
                    return true;
                }
                if (nextStepIndex === 2) {
                    let _url = `/sevice-file/${id_service}/verifFiles/${id_category}`;

                    async function ajaxVerif(ajaxUrl) {
                        var statusAjax = false;
                        $.ajax({
                            url: ajaxUrl,
                            type: "GET",
                            success: function(response) {
                                if (response) {
                                    if (response.status) {
                                        statusAjax = response.status;
                                    } else {
                                        // alert('Data Gagal Verif')
                                        statusAjax = false;
                                    }
                                }
                            }
                        });
                        return status;
                    }
                    await ajaxVerif(_url).then(function(data) {
                        console.log(data);
                    })
                    // return true;
                }
            });

            var stepIndex = $('#smartwizard').smartWizard("getStepIndex");
            if (stepIndex === 0) {
                $('#wizard-btn-back').hide();
                $('#wizard-btn-cancel').show();
                $('#wizard-btn-verified').hide();
            } else if (stepIndex === 2) {
                $('#wizard-btn-next').hide()
                $('#wizard-btn-back').show();
                $('#wizard-btn-verified').show();
                $('#wizard-btn-cancel').hide();
            } else {
                $('#wizard-btn-next').show()
                $('#wizard-btn-back').show();
                $('#wizard-btn-cancel').hide();
                $('#wizard-btn-verified').hide();
            }
            $("#smartwizard").on("stepContent", function(e, anchorObject, stepIndex, stepDirection) {
                if (stepIndex === 0) {
                    $('#wizard-btn-back').hide();
                    $('#wizard-btn-cancel').show();
                } else if (stepIndex === 2) {
                    $('#wizard-btn-next').hide()
                    $('#wizard-btn-back').show();
                    $('#wizard-btn-verified').show();
                } else {
                    $('#wizard-btn-next').show()
                    $('#wizard-btn-back').show();
                    $('#wizard-btn-cancel').hide();
                    $('#wizard-btn-verified').hide();
                }
            });

            $('#wizard-btn-verified').on('click', function() {
                var service_id = $('#service_id').val();
                console.log(service_id);
                let _url = `/service/${service_id}/verified`;
                $.ajax({
                    url: _url,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                        alert('Layanan terverifikasi');

                    }
                })
            })
        })

        function statusUpdate(event) {
            var id = $(event).data('id');
            var fileName = $('#file-name' + id).text();
            fileVerif(id);
            serviceProcessing();
            return alert('Berkas ' + fileName + ' terverifikasi.')
        }

        function fileVerif(id) {
            console.log(id);
            let _url = `/sevice-file/${id}/verifStatus`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        }

        function serviceProcessing() {
            var id_service = $('#service_id').val();
            let _url = `/layanan/${id_service}/status`;
            $.ajax({
                url: _url,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        };

        function fileDenied(event) {
            var id = $(event).data('id');
            var service_id = $('#service_id').val();
            var fileName = $('#file-name' + id).text();
            let _url = `/sevice-file/${id}/deniedStatus/${service_id}`;
            if (confirm("Ingin menolak berkas " + fileName + '?')) {
                $.ajax({
                    url: _url,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });
            } else {
                return false;
            }
        }

    </script>
@endsection
