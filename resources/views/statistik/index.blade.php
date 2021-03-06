@extends('layouts.app')

@section('title', 'Statistik')

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
                <div class="col-md-6 col-12">
                    <div class="card shadow" style="background-color: #E9EDF1; border-radius: 20px;">
                        <div class="card-body">
                            <div class="card-title row ">
                                <h4 class="col-8">Statistik Layanan Masyarat</h4>
                                <form class="col-4">
                                    <div class="form-group mb-4 text-dark">
                                        <select class="custom-select mr-sm-2" id="monthDropdown">
                                            <option value="" selected disabled>Pilih Bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desamber</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <canvas id="statistik-layanan" height="250"></canvas>
                                <div id="lagend"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card shadow" style="background-color: #E9EDF1; border-radius: 20px;">
                        <div class="card-body">
                            <div class="card-title row">
                                <h4 class="col-8">Statistik Layanan Per Pedukuhan</h4>
                                <form class="col-4">
                                    <div class="form-group mb-4">
                                        <select class="custom-select mr-sm-2" id="monthDropdown2">
                                            <option value='' selected disabled>Pilih Bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desamber</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <canvas id="statistik-layanan-perdusun" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card shadow" style="background-color: #E9EDF1; border-radius: 20px;">
                        <div class="card-body">
                            <div class="card-title row">
                                <h4 class="col-8">Statistik Aduan Per Pedukuhan</h4>
                                <form class="col-4">
                                    <div class="form-group mb-4">
                                        <select class="custom-select mr-sm-2" id="monthDropdown3">
                                            <option value='' selected disabled>Pilih Bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desamber</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <canvas id="statistik-aduan-perdusun" height="250"></canvas>
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
        var array = [];
        var date = new Date();
        var thisMonth = date.getMonth() + 1;
        var selectMonth

        $(document).ready(function() {
            ajaxChartCategory();
            ajaxChartDusun();
            ajaxChartFeedbackDusun();
        });

        $("#monthDropdown").change(function() {
            selectMonth = $(this).children("option:selected").val();
            ajaxChartCategory();
        });

        function ajaxChartCategory() {
            var month = selectMonth ?? thisMonth;
            $.ajax({
                url: `/statistik-layanan/${month}`,
                type: "GET",
                success: function(response) {
                    array = response
                    serviceChart(response[0], response[1])
                }
            });
        }

        function serviceChart(service, labels) {
            var chart = new Chart(document.getElementById("statistik-layanan"), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: labels,
                        fill: true,
                        backgroundColor: ["#7FB6E8", '#74D6CA', '#E4D54E', '#D49953', '#FD5E5E',
                            '#4457FF', '#2E9438', '#D251D4'
                        ],
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "rgba(116, 96, 238,1)",
                        data: service
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        position: "bottom",
                        verticalAlign: "center",
                        labels: {
                            fontColor: "black",
                            boxWidth: 20,
                            padding: 20
                        }
                    },
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
                    },
                    title: {
                        display: false,
                    }
                }
            });
        }

        function ajaxChartDusun() {
            var month = selectMonth ?? thisMonth;
            $.ajax({
                url: `/statistik-layanan-dusun/${month}`,
                type: "GET",
                success: function(response) {
                    array = response
                    serviceChartDusun(response[0], response[1])
                }
            });
        }

        $("#monthDropdown2").change(function() {
            selectMonth = $(this).children("option:selected").val();
            ajaxChartDusun();
        });

        function serviceChartDusun(services, labels) {
            var chart2 = new Chart(document.getElementById("statistik-layanan-perdusun"), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "250",
                        fill: true,
                        backgroundColor: ["#4457FF", '#D49953', '#FD5E5E', '#74D6CA', '#2E9438',
                            '#D251D4', '#7FB6E8', '#E4D54E', '#6FAE64', '#B19A7F'
                        ],
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "rgba(116, 96, 238,1)",
                        data: services
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        position: "bottom",
                        verticalAlign: "center",
                        labels: {
                            fontColor: "black",
                            boxWidth: 20,
                            padding: 20
                        }
                    },
                    title: {
                        display: false,
                    },
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
                    },
                }
            });
        }

        function ajaxChartFeedbackDusun() {
            var month = selectMonth ?? thisMonth;
            $.ajax({
                url: `/statistik-aduan-dusun/${month}`,
                type: "GET",
                success: function(response) {
                    array = response
                    feedbackChartDusun(response[0], response[1])
                }
            });
        }

        $("#monthDropdown3").change(function() {
            selectMonth = $(this).children("option:selected").val();
            ajaxChartFeedbackDusun();
        });

        function feedbackChartDusun(feedbacks, labels) {
            var chart2 = new Chart(document.getElementById("statistik-aduan-perdusun"), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: labels,
                        fill: true,
                        backgroundColor: ["#4457FF", '#D49953', '#FD5E5E', '#74D6CA', '#2E9438',
                            '#D251D4', '#7FB6E8', '#E4D54E', '#6FAE64', '#B19A7F'
                        ],
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "rgba(116, 96, 238,1)",
                        data: feedbacks
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        position: "bottom",
                        verticalAlign: "center",
                        labels: {
                            fontColor: "black",
                            boxWidth: 20,
                            padding: 20
                        }
                    },
                    title: {
                        display: false,
                    },
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
                    },
                }
            });
        }

    </script>
@endsection
