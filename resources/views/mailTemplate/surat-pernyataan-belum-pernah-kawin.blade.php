<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keterangan Belum Pernah Kawin</title>
    <link href="https://fonts.cdnfonts.com/css/bookman-old-style" rel="stylesheet">
    <style>

        @font-face {
            font-family: 'Bookman Old Style';
            font-style: normal;
            font-weight: 400;
            src: url('{{storage_path('fonts/bookman-old-style.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Bookman Old Style';
            font-style: normal;
            font-weight: 700;
            src: url('{{storage_path('fonts/bookman-old-style-bold.ttf') }}') format('truetype');
        }

        * {
            margin: 0;
            font-family: 'Bookman Old Style', sans-serif;
        }

        .mail-header {
            margin-top: 40px;
            align-items: center;
            position: relative;
            padding-bottom: 2px;
            border-bottom: 4px solid black;
            text-align: center;
        }

        .mail-header::after {
            display: block;
            content:  '';
            height: 1px;
            width: 100%;
            background-color: black;
            margin-top: 10px;
        }

        .mail-header img {
            position: absolute;
            top: -10px;
            /* margin-top: 10px; */
            /* left: 20px;
            bottom: 20px; */
        }

        .mail-header .goverment {
            font-size: 18px;
            font-weight: 700;
            line-height: 17px;
        }

        .mail-header .village {
            font-size: 20px;
            font-weight: 700;
            line-height: 18px;
        }

        .mail-header p {
            font-size: 12px;
        }

        .mail-body .mail-type {
            text-indent: 0;
            font-size: 17px;
            text-align: center;
            /* margin-top: 10px; */
        }

        .mail-body .mail-num {
            text-align: center;
            font-size: 17px;
            margin-bottom: 20px;
        }

        .mail-body .long {
            text-align: justify; 
            text-indent: 40px;
        }

    </style>
</head>
<body style="width: 80%; margin: 0 auto;" >
    <div class="mail-header">
        <img src="./assets/be/media/desa.png" alt="">
        <p class="goverment" >PEMERINTAH DESA GETASAN <br>KECAMATAN PETANG</p>
        <p class="village" >KABUPATEN BADUNG</p>
        <p class="" >Jalan Tukad Penet No. 14 Getasan Telp. 081 353 622 066 Kode Pos 80353</p>
    </div>
    <div class="mail-body" style="font-size: 14px;" >
        <p class="mail-type" >
            <b style="text-transform: uppercase; margin-top: 0;" ><u>Surat Keterangan Belum Pernah Kawin/Nikah</u></b>
        </p>
        <p class="mail-num" >Nomor : {{ $data->mail_number }}</p>
        <p class="long" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
        <table style="width: 100%; margin: 15px 0; margin-left: 16px;" >
            <tr>
                <td style="width: 200px; min-width: unset; max-width: unset;" >Nama</td>
                <td style="text-transform: capitalize;" >: {{ $subject->name }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td style="text-transform: capitalize;" >: {{ $subject->gender }}</td>
            </tr>
            <tr>
                <td>Tempat/Tgl.lahir</td>
                <td style="text-transform: capitalize;" >: {{ $subject->birthplace ?? '' }}, {{ Carbon\Carbon::parse($subject->birth_date ?? '')->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $subject->citizenship  == 'WNI' ? 'Warga Negara Indonesia (WNI)' : 'Warga Negara Asing (WNA)' }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td style="text-transform: capitalize;" >: {{ $subject->religion ?? '' }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>: {{ $subject->nik }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $subject->job ?? '' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $subject->address ?? '' }}</td>
            </tr>
        </table>
        <p style="text-align: justify;" >adalah salah satu warga desa kami yang bertempat tinggal pada alamat tersebut diatas dan berdasarkan pengetahuan kami hingga surat keterangan ini dikeluarkan, memang benar orang tersebut diatas belum pernah Kawin/Nikah.</p>
        <p style="text-align: justify; margin-top: 30px;" >Demikian Surat Keterangan Belum Pernah Kawin/Nikah ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan pembuatan Akta Perkawinan.</p>
        <p style="text-align: center; margin-top: 50px; margin-bottom: 20px;" >Saksi-Saksi:</p>
        <table style="width: 100%;" >
            <tr>
                <td style="width: 50%;" >
                    <table style="width: 100%;" >
                        <tr>
                            <td style="width: 20px;" >1.</td>
                            <td style="width: 100px;" >Nama Saksi</td>
                            <td>: {{ $data->saksi_1->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Umur</td>
                            <td>: {{ $data->saksi_1->age ?? '' }} Tahun</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pekerjaan</td>
                            <td>: {{ $data->saksi_1->job ?? '' }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alamat</td>
                            <td>: {{ $data->saksi_1->address ?? '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</u></p></td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%;" >
                    <table style="width: 100%;" >
                        <tr>
                            <td style="width: 20px;" >2.</td>
                            <td style="width: 100px;" >Nama Saksi</td>
                            <td>: {{ $data->saksi_2->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Umur</td>
                            <td>: {{ $data->saksi_2->age ?? '' }} Tahun</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pekerjaan</td>
                            <td>: {{ $data->saksi_2->job ?? '' }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alamat</td>
                            <td>: {{ $data->saksi_2->address ?? '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</u></p></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <table style="width: 100%; margin-top: 40px; font-size: 14px; margin-left: 30px;"  >
        <tr>
            <td span="2" >Mengetahui :</td>
        </tr>
        <tr>
            <td>Reg No. : ...............................</td>
        </tr>
        <tr>
            <td >Tanggal : ...............................</td>
            <td style="text-align: center;" >Getasan, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Perbekel Getasan,</td>
            <td style="text-align: center;" >Kelian Banjar Dinas Ubud</td>
        </tr>
        <tr>
            <td style="width: 100%;" >
                <div style="position: relative; height: 80px; width: 100%;" >
                    @if ($data->status == 'Done' && !empty($perbekel))
                    {{-- <img style="position: absolute; width:320px; height: 120px; left: -25%; bottom: -60%; object-fit: contain;" src="{{ public_path(). '/storage/'. $perbekel->image }}" alt=""> --}}
                    @endif
                </div>
            </td>
            <td style="width: 100%;" >
                <div style="position: relative; height: 80px; width: 100%;" >
                    @if ($data->status == 'Done' && !is_null($kelian))
                    {{-- <img style="position: absolute; height: 120px; width:50%; left: 50px; bottom: -30%; object-fit: contain;" src="{{ public_path(). '/storage/'. $kelian->image }}" alt=""> --}}
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-indent: 0; text-align: left;" >
                    <u>{{ !empty($perbekel) ? $perbekel->name : 'belum ada data perbekel' }}</u>
                </p>
            </td>
            <td>
                <p style="text-indent: 0; text-align: center;" >
                    <u>{{ !empty($kelian) ? $kelian->name : 'belum ada data kelian' }}</u>
                </p>
            </td>
        </tr>
    </table>
    
</body>
</html>
