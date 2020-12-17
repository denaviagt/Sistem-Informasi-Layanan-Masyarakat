@extends('layouts.app')

@section('title', 'Info Desa')

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
                            <h4 class="card-title">Statistik Layanan Masyarat</h4>
                            <div>
                                <canvas id="statistik-layanan" height="250"></canvas>
                                <div id="lagend"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Statistik Layanan Per Pedukuhan</h4>
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
