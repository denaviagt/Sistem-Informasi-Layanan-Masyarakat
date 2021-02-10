<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <title>Send mail</title>
</head>

<body>

    @component('mail::message')
        {{-- Content here --}}

        <h1>Halo {{ $admin->full_name }},</h1>
        <br>
        <p> Selamat anda telah berhasil didaftarkan menjadi admin website E-SILAM(Elektronik Sistem Informasi
            Layanan Masyarakat).</p>
        <p>Untuk memudahkan dalam proses login, maka E-Silam sertakan password dan detail informasi akun
            anda di email ini.</p>
        <div class="m-2" style="font-weight: 600">
            <ul style="list-style-type: none; ">
                <li>Nama : {{ $admin->full_name }}</li>
                <li>Email : {{ $admin->email }}</li>
                <li>Password : {{ $password }}</li>
            </ul>
        </div>
        <p>
            Segera lakukan aktivasi akun Anda dan ubah password untuk keamanan akun Anda pada link dibawah ini:
        </p>
        @component('mail::button', ['url' => "/verifikasi-akun/$code", 'color' => 'primary'])
            Verifikasi Akun
        @endcomponent
        <p>
            Terimakasih telah menggunakan website kami.
        </p>
        {{-- Subcopy --}}
        @slot('subcopy')
            Email ini dikirimkan secara otomatis. Mohon tidak membalas ke email ini.
        @endslot
    @endcomponent

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>

</html>
