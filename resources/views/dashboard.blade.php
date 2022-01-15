@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <style>
        .log-title {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden !important;
            text-overflow: ellipsis;
        }

    </style>
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
                            <h6 class="font-weight-normal mb-2 w-100 text-truncate">Permohonan Masuk</h6>
                            <h2 class="text-dark mb-1 font-weight-medium count">{{ $accepteds }}</h2>
                            <h6 class="font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class="font-weight-normal mb-2 w-100 text-truncate">Permohonan Diproses</h6>
                            <h2 class="text-dark mb-1 font-weight-medium count">{{ $proccesses }}</h2>
                            <h6 class="font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class=" font-weight-normal mb-2 w-100 text-truncate">Permohonan Selesai</h6>
                            <h2 class="text-dark mb-1 font-weight-medium count ">{{ $completeds }}</h2>
                            <h6 class=" font-weight-normal mb-0 w-100 text-truncate">Permohonan</h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="align-items-center text-center">
                            <h6 class=" font-weight-normal mb-0 w-100 text-truncate">Jumlah Aduan</h6>
                            <h2 class="text-dark mb-1 font-weight-medium count">{{ $feedbacks }}</h2>
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
                <div class="col-md-6 col-lg-12">
                    <div class="card shadow" style="background-color: #E9EDF1; border-radius: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <h4 class="card-title mb-0">Statistik Layanan dan Aduan Kalurahan Jogotirto</h4>
                            </div>
                            <div class="pl-4">
                                <div class="position-relative">
                                    <canvas id="dashboardStatistik"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="card" style="background-color: #58A5F0; border-radius: 20px; ">
                        <div class="card-body">
                            <h4 class="card-title" style="color: white">Aktivitas Terbaru</h4>
                            <div class="mt-4 activity">
                            </div>
                        </div>
                    </div>
                </div> --}}
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

@endsection

@section('script')

    <script>
        $(document).ready(function() {
            getLog();
        })
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        var array = [];
        $.ajax({
            url: 'service/count',
            type: "GET",
            success: function(response) {
                array = response
                serviceChart(response.labels, response.service, response.feedback)
            }
        });
        // console.log(array);

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

        // function getLog() {
        //     $.ajax({
        //         url: 'logactivity',
        //         type: "GET",
        //         success: function(response) {
        //             for (let index = 0; index < response.data.length; index++) {
        //                 $(".activity").append(`<div class="d-flex align-items-start border-left-line pb-3">
    //                                                                 <div>
    //                                                                     <a href="javascript:void(0)" class="activity-icon btn btn-light btn-circle mb-2 btn-item">
    //                                                                         ${
    //                                                                             (() =>{
    //                                                                             if (response.data[index].event == "create") {
    //                                                                                 return ('<i class="fas fa-plus text-info"></i>');
    //                                                                             } else if (response.data[index].event == 'update') {
    //                                                                                 return('<i class="fas fa-edit text-warning"></i>');
    //                                                                             } else if(response.data[index].event == 'delete') {
    //                                                                                 return('<i class="fas fa-trash-alt text-danger"></i>');
    //                                                                             } else if(response.data[index].event == 'mark') {
    //                                                                                 return('<i class="fas fa-tag text-primary"></i>');
    //                                                                             } else if(response.data[index].event == 'process') {
    //                                                                                 return('<i class="fas fa-retweet text-primary"></i>');
    //                                                                             } else if(response.data[index].event == 'reject') {
    //                                                                                 return('<i class="fas fa-exclamation text-danger"></i>');
    //                                                                             } else{return('<i class="fas fa-check text-success"></i>');
    //                                                                             }
    //                                                                         })()
    //                                                                     }
    //                                                                     </a>
    //                                                                 </div>
    //                                                                 <div class="ml-3 ">
    //                                                                     <p class="font-14 mb-0 text-white log-title">${response.data[index].description}</p>
    //                                                                     <span class="font-weight-light font-12 text-white">${response.data[index].time}</span>                                                       
    //                                                                 </div>
    //                                                             </div>`)
        //             }
        //         }
        //     });
        // }
    </script>
@endsection
