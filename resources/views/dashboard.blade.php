@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat datang,
                        {{ auth()->user()->full_name }}!
                    </h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- *************************************************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->
            <div class="card-group card-dashboard">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class="font-weight-normal mb-2 w-100 text-truncate">Jumlah Permohonan Masuk</h6>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $accepteds }}</h2>
                            <h6 class="font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class="font-weight-normal mb-2 w-100 text-truncate">Jumlah Permohonan Diproses</h6>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $proccesses }}</h2>
                            <h6 class="font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class=" font-weight-normal mb-2 w-100 text-truncate">Jumlah Permohonan Selesai</h6>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $completeds }}</h2>
                            <h6 class=" font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class=" font-weight-normal mb-0 w-100 text-truncate">Jumlah Aduan</h6>
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $feedbacks }}</h2>
                            <h6 class=" font-weight-normal mb-0 w-100 text-truncate">Aduan</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *************************************************************** -->
            <!-- End First Cards -->
            <!-- Start Location and Earnings Charts Section -->
            <!-- *************************************************************** -->
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="card shadow" style="background-color: #E9EDF1; border-radius: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <h4 class="card-title mb-0">Statistik Penduduk Kalurahan</h4>
                            </div>
                            <div class="pl-4">
                                <div class="position-relative" style="height: 315px;">
                                    <canvas id="dashboardStatistik"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Aktivitas Terbaru</h4>
                            <div class="mt-4 activity">
                                <div class="d-flex align-items-start border-left-line pb-3">
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                        </a>
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h5 class="text-dark font-weight-medium mb-2">Proses Layanan</h5>
                                        <p class="font-14 mb-2 text-muted">John Musa memproses layanan dengan ID
                                            21.
                                        </p>
                                        <span class="font-weight-light font-14 text-muted">10 Menit yang lalu</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start border-left-line pb-3">
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-circle mb-2 btn-item">
                                        </a>
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h5 class="text-dark font-weight-medium mb-2">Layanan Selesai</h5>
                                        <p class="font-14 mb-2 text-muted">Richardson telah menyelesaikan layanan dengan id
                                            20
                                        </p>
                                        <span class="font-weight-light font-14 text-muted">25 Menit yang lalu</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start border-left-line">
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                        </a>
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h5 class="text-dark font-weight-medium mb-2">Proses Layanan
                                        </h5>
                                        <p class="font-14 mb-2 text-muted">Ryne Doe memproses layanan dengan ID 20</p>
                                        <span class="font-weight-light font-14 mb-1 d-block text-muted">2 jam yang
                                            lalu</span>
                                        <a href="javascript:void(0)" class="font-14 border-bottom pb-1 border-info">Load
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *************************************************************** -->
            <!-- End Location and Earnings Charts Section -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @include('layouts.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->

    {{-- <script>
        $(document).ready(function() {
            console.log(test);
        })

    </script> --}}
@endsection

@section('script')

    <script>
        // $(document).ready(function() {
        //     serviceChart();
        // })

        var array = [];
        $.ajax({
            url: 'service/count',
            type: "GET",
            success: function(response) {
                array = response
                serviceChart(response.labels, response.service, response.feedback)
            }
        });
        console.log(array);

        function serviceChart(labels, service, feedback) {
            var myLine = document.getElementById("dashboardStatistik").getContext("2d");
            var aduan = feedback;
            var layanan = service;
            var bulan = labels;
            var gradientFill = myLine.createLinearGradient(0, 0, 0, 500);
            gradientFill.addColorStop(0, "#9DC1F5");
            gradientFill.addColorStop(1, 'rgba(108, 156, 228, 0)');
            var chart = new Chart(myLine, {
                type: 'bar',
                data: {
                    labels: bulan,
                    datasets: [{
                        type: 'line',
                        label: 'Total Layanan',
                        data: layanan,
                        backgroundColor: '#F0AA57',
                        borderColor: '#F0AA57',
                        fill: false,
                        borderDash: [5, 5],
                        // pointRadius: 15,
                        pointHoverRadius: 10,
                    }, {
                        type: 'line',
                        label: 'Total Aduan',
                        data: aduan,
                        backgroundColor: gradientFill,
                        // fillColor: gradient,
                        borderColor: '#9DC1F5',
                        fill: true,
                        borderDash: [5, 2],
                        // pointRadius: [2, 4, 6, 18, 0, 12, 20],
                        pointHoverRadius: 20,
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false
                            }
                        }]
                    }
                }

            });
        }

    </script>
@endsection
