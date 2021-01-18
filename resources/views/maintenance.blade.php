<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.jpg') }}">
    <title>@yield('title') - e-SILAM</title>
    <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/newcss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">

    <style>
        .background {
            z-index: -100;
            position: absolute
        }

        .app-name {
            margin-top: 50px;

            display: block;
            margin-left: auto;
            margin-right: auto
        }

    </style>
</head>

<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}

    <div>
        <div class="background">
            <img src="{{ asset('assets/img/bg-maintenance.svg') }}" alt="Background">
        </div>
        <div class="d-flex justify-content-center app-name text-dark">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo" width="25px" height="30px" class="mr-2">
            <h3><b>E-SILAM</b></h3>
        </div>
        <div class="text text-dark">
            <h1 class="text-center mt-4"><strong>Sistem sedang dalam perbaikan</strong></h1>
            <h5 class="text-center mt-2">Mohon maaf atas gangguan yang ditimbulkan!<br> Perbaikan akan segera selesai.
            </h5>
        </div>
        <div class="d-flex justify-content-center">
            <img class="text-center" src="{{ asset('assets/img/maintenance.svg') }}" alt="Maintenance" height="400px">
        </div>

    </div>

</body>

</html>
