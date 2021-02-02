<!DOCTYPE html>

<head>
    <title>Elektronik Kartu Tanda Penduduk</title>
    <meta charset="utf-8">
    <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/surat.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <table class="table-kop">
            <tr>
                <td class="logo">
                    <img src="{{ asset('assets/img/surat/logo.png') }}" alt="logo">
                </td>
                <td class="text-center kop">
                    <h6>PEMERINTAH KABUPATEN SLEMAN</h6>
                    <h6>KAPANEWON BERBAH</h6>
                    <h6>LURAH JOGOTIRTO</h6>
                    <img src="{{ asset('assets/img/surat/aksara.png') }}" alt="aksara">
                    <p>Karongan Jogotirto, Berbah, Sleman, 55573. <br>
                        Surel : pemdesjogotirto@gmail.com
                    </p>
                </td>
            </tr>
        </table>
    </header>
    <div id=halaman>
        <div class="text-center judul">
            <h5><u>SURAT PENGANTAR</u></h5>
            <P>Nomor: ...............................</P>
        </div>
        <div class="isi">
            <p class="text-justify">Yang bertanda tangan di bawah ini Lurah Jogotirto Kepanewon Berbah Kabupaten Sleman,
                menerangkan:</p>
            <table class="table-isi">
                <tr>
                    <td style="width:200px">Nama</td>
                    <td>:</td>
                    <td style="width: 400px">{{ $data->citizen->full_name }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ $data->citizen->nik }}</td>
                </tr>
                <tr>
                    <td>Tempat, tanggal lahir</td>
                    <td>:</td>
                    <td>{{ $data->citizen->pob }},
                        {{ \Carbon\Carbon::parse($data->citizen->dob)->isoFormat(' D  MMMM Y ') }}
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    @if ($data->citizen->gender == 'male')
                        <td>Laki-laki</td>
                    @else
                        <td>Perempuan</td>
                    @endif
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $data->citizen->profession }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $data->citizen->religion }}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>:</td>
                    <td>{{ $data->citizen->address }}</td>
                </tr>
            </table>
            <p class="text-justify">Nama tersebut di atas adalah penduduk Kalurahan Jogotirto yang telah memenuhi syarat
                dan ketentuan untuk
                melakukan perekaman E-KTP.</p>
            <p class="text-justify">Demikian surat pengantar ini dibuat dengan sebenarnya untuk dapat dipergunakan
                sebagaimana mestinya. Atas
                kerjasamanya diucapkan terimakasih</p>
        </div>

    </div>

    <div class="d-flex mr-4">
        <table class="ttd ml-auto">
            <tr>
                <td>Jogotirto, {{ \Carbon\Carbon::now()->isoFormat(' D  MMMM Y ') }}</td>
            </tr>
            <tr>
                <td>Lurah,</td>
            </tr>
            <tr>
                <td style="height: 70px"></td>
            </tr>
            <tr>
                <td><u>{{ $village->lurah }}</u></td>
            </tr>
        </table>
    </div>
</body>

</html>
