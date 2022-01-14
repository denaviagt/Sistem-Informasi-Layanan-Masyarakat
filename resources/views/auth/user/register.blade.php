<!doctype html>
<html lang="en">

<head>
    <title>Register User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body class="img js-fullheight" style="background-image: url(../assets/img/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form method="POST" action="{{ route("user.register") }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Email" value="{{ old('email') }}" name="email" id="email"
                                       required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control @error('username') is-invalid @enderror"
                                       placeholder="Username" value="{{ old('username') }}" name="username" id="username"
                                       required>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control @error('nik') is-invalid @enderror"
                                       placeholder="NIK" value="{{ old('nik') }}" name="nik" id="nik"
                                       required>
                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       placeholder="Nomor HP" value="{{ old('phone') }}" name="phone" id="phone"
                                       required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password" required name="password" id="password">
                                <span toggle="#password-field" id="showPassword"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(".preloader ").fadeOut();
        $(document).ready(function() {
            var $password = $('#password');
            $('#showPassword').click(function() {
                if ($password.attr('type') === 'password') {
                    $password.attr('type', 'text')
                    $('#showPassword .fas').removeClass('fa-eye');
                    $('#showPassword .fas').addClass('fa-eye-slash');
                    // $('#showPassword').removeClass('btn-primary');
                    // $('#showPassword').addClass('btn-success');
                } else {
                    $password.attr('type', 'password')
                    $('#showPassword .fas').removeClass('fa-eye-slash');
                    $('#showPassword .fas').addClass('fa-eye');
                    // $('#showPassword').addClass('btn-primary');
                    // $('#showPassword').removeClass('btn-success');
                }
            })
        })
    </script>

</body>

</html>
