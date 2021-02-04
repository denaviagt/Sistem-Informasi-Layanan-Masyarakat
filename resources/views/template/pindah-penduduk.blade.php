<!DOCTYPE html>

<head>
    <title>SURAT KETERANGAN PINDAH PENDUDUK</title>
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
            <h5><u>SURAT KETERANGAN PINDAH PENDUDUK</u></h5>
            <P>Nomor: ...............................</P>
        </div>
        <div class="isi">
            <p class="text-justify">Pemerintah Kalurahan Jogotirto, Kepanewon Berbah, Kabupaten Sleman,
                dengan ini menerangkan bahwa:</p>
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
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>{{ $data->citizen->last_education }}</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td>{{ $data->citizen->married_status }}</td>
                </tr>
                <tr>
                    <td>Alamat Asal</td>
                    <td>:</td>
                    <td>{{ $data->citizen->address }}</td>
                </tr>
                <tr>
                    <td>Pindah ke</td>
                    <td>:</td>
                    <td>{{ $extra_fields[0]->value ?? '' }}</td>
                </tr>
                <tr>
                    <td class="">Alasan Pindah</td>
                    <td>:</td>
                    <td>{{ $extra_fields[1]->value ?? '' }}</td>
                </tr>
                <tr>
                    <td class="">Pengikut</td>
                    <td>:</td>
                    <td>{{ $extra_fields[2]->value ?? '' }}</td>
                </tr>
            </table>

            <p class="text-justify">Demikian surat keterangan pindah ini dibuat dengan sebenarnya untuk dapat
                dipergunakan sebagaimana mestinya. Atas kerjasamanya diucapkan terimakasih</p>
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
