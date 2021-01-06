@extends('layouts.app')

@section('title', 'Statistik Aduan')

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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Statistik Aduan</h4>
                            <div>
                                <canvas id="statistik-aduan" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Statistik Aduan Per Pedukuhan</h4>
                            <div>
                                <canvas id="statistik-layanan-perdusun" height="250"></canvas>
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
    var chart = new Chart(document.getElementById("statistik-aduan"), {
            type: 'pie',
            data: {
                labels: ["Kartu Tanda Penduduk Elektronik", "Kartu Keluarga", "Akta Kelahiran", "Akta kematian",
                    "Pindah penduduk", "Pengurusan Masuk Penduduk", "Pengurusan Nikah",
                    "SKU",
                ],
                datasets: [{
                    label: "250",
                    fill: true,
                    backgroundColor: ["rgba(116, 96, 238,0.2)", 'red', 'blue', 'green', 'yellow',
                        'grey', 'lightblue', 'orange'
                    ],
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(116, 96, 238,1)",
                    data: [10, 20, 30, 40, 50, 40, 30, 25, ]
                }]
            },
            options: {
                legend: {
                    display: true,
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
                }
            }
        });

        var chart2 = new Chart(document.getElementById("statistik-layanan-perdusun"), {
            type: 'pie',
            data: {
                labels: ["Jragung", "Blambangan", "Morobangun", "Karongan", "Rejosari", "Krasaan", "Jlatren",
                    "Bulu", "Kranggan 1", "Kranggan 2"
                ],
                datasets: [{
                    label: "250",
                    fill: true,
                    backgroundColor: ["rgba(116, 96, 238,0.2)", 'red', 'blue', 'green', 'yellow',
                        'grey', 'lightblue', 'orange', 'black', 'cream'
                    ],
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(116, 96, 238,1)",
                    data: [10, 20, 30, 40, 50, 40, 30, 25, 15, 5]
                }]
            },
            options: {
                legend: {
                    display: true,
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
                }
            }
        });
</script>
@endsection
