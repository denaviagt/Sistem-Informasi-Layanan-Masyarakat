<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.jpg') }}">
    <title>Login - e-SILAM</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/customlogin.css') }}">

    {{-- Datatable --}}
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="row" style="max-width: 600px">
                <div class="col-12 text-center text-dark">
                    <h1><b>E-SILAM</b></h1>
                    <p><b>Sistem Informasi Layanan Masyarakat Jogotirto</b></p>
                </div>
                <div class="col-lg-12 col-md-12 login-box shadow">
                    <div class="p-5">
                        <h2 class="mt-3 text-center text-dark font-weight-bold">{{ __('Login') }}</h2>
                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="username">Username/ Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('username') }}" name="username" id="username" type="text"
                                            placeholder="Masukkan Username atau Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="password">Password</label>
                                        <div class="input-group">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" type="password"
                                                placeholder="Masukkan password" autocomplete="current-password">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button" id="showPassword"><i
                                                        class="fas fa-eye"></i></button>
                                            </span>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex m-2 mb-4">
                                    <div class="form-check col-6">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rememberMe">
                                            {{ __('Ingat Saya?') }}
                                        </label>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="#">Lupa Password? </a>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-primary">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    --}}
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script>
        $(".preloader ").fadeOut();
        $(document).ready(function() {
            var $password = $('#password');
            $('#showPassword').click(function() {
                if ($password.attr('type') === 'password') {
                    $password.attr('type', 'text')
                    $('#showPassword .fas').removeClass('fa-eye');
                    $('#showPassword .fas').addClass('fa-eye-slash');
                    $('#showPassword').removeClass('btn-primary');
                    $('#showPassword').addClass('btn-success');
                } else {
                    $password.attr('type', 'password')
                    $('#showPassword .fas').removeClass('fa-eye-slash');
                    $('#showPassword .fas').addClass('fa-eye');
                    $('#showPassword').addClass('btn-primary');
                    $('#showPassword').removeClass('btn-success');
                }
            })
        })

    </script>
</body>

</html>
