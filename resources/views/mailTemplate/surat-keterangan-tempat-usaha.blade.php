<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/bookman-old-style" rel="stylesheet">
    <title>Surat Akta Kematian</title>
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

        /* p, h1, h2, h3, h4, h5, h6 {
            font-family: 'Bookman Old Style', sans-serif;
        } */

        * {
            margin: 0;
            font-family: 'Bookman Old Style', sans-serif;
        }

        .message-container {
            font-family: 'Bookman Old Style', sans-serif, ;
            color: black;
            width: 730px;
        }

        .message-content {
            max-width: 2480px !important;
            max-height: 3508px !important;
        }

        .mail-header {
            margin-top: 40px;
            align-items: center;
            position: relative;
            padding-bottom: 2px;
            border-bottom: 1.5px solid black;
            text-align: center;
        }

        .mail-header::after {
            display: block;
            content:  '';
            height: 4px;
            width: 100%;
            background-color: black;
            margin-top: 10px;
        }

        .mail-header img {
            position: absolute;
            margin-top: 10px;
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

        .mail-body table p:last-child {
            text-align: center;
        }

        .mail-body .mail-type {
            text-indent: 0;
            font-size: 17px;
            text-align: center;
            margin-top: 10px;
        }

        .mail-body .mail-num {
            text-align: center;
            font-size: 17px;
            margin-bottom: 20px;
        }

        .mail-body .long {
            font-size: 16px;
            text-indent: 40px;
            text-align: justify;
        }

        /* .mail-body table {
            margin: 10px 0;
            width: fit-content;
            text-align: left;
        }

        .mail-body table:first-child {
            width: fit-content;
            text-align: left;
        } */

        .mail-body .saksi-table {
            width: 100%;
        }

        .mail-body .saksi-table tr td p {
            margin-top: 30px;
            text-align: center
        }

        .mail-body .saksi .col {
            /* flex: 1; */
            width: 10px;
            background-color: green;
        }

        .mail-body u.saksi {
            -webkit-text-stroke: 0.5px black;
            width: fit-content;
            text-indent: 0;
        }
        
        .mail-body .sign-table {
            margin-top: 20px;
            width: 100%;
        }

        .mail-body .sign-table  tr td:last-child{
            text-align: center;
        }

    </style>
</head>
<body >
    
    @php
        $field = json_decode($data->field)    
    @endphp

    <div style="width: 80%; margin: 0 auto;" >
        <div class="container bg-white message-content">
            <div class="mail-header">
                <img src="./assets/be/media/desa.png" alt="">
                <p class="goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</p>
                <p class="village" >DESA GETASAN</p>
                <p class="" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : menyssusul</p>
            </div>
            <div class="mail-body">
                <p class="mail-type" >
                    <b style="text-transform: uppercase;" ><u>{{ $data->title }}</u></b>
                </p>
                <p class="mail-num" >Nomor : {{ $data->mail_number }}</p>
                <p class="long" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
                <table style="width: 100%; margin: 15px 0; margin-left: 16px;" >
                    <tr>
                        <td style="width: 200px; min-width: unset; max-width: unset;" >Nama</td>
                        <td>: {{ $field->applicant->name }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: {{ $field->applicant->sex }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl.lahir</td>
                        <td>: {{ $field->applicant->birth_place }}, {{ Carbon\Carbon::parse($field->applicant->birth_date)->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>: {{ $field->applicant->citizenship }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: {{ $field->applicant->religion ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>Nomor KTP</td>
                        <td>: {{ $field->applicant->nik }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: {{ $field->applicant->job }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $field->applicant->address }}</td>
                    </tr>
                    <tr>
                        <td>Nama Usaha</td>
                        <td>: {{ $field->business_name }}</td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>: {{ $field->npwp }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Usaha</td>
                        <td>: {{ $field->business_address }}</td>
                    </tr>
                </table>
                <p style="text-align: justify; text-indent: 40px;" >Adalah salah satu warga desa kami yang bertempat tinggal pada alamat tersebut di atas dan berdasarkan pengetahuan kami hingga surat keterangan ini dikeluarkan memang benar yang bersangkutan memiliki usaha dibidang : “{{ $field->business_name }}”</p>
                <p style="text-align: justify; text-indent: 40px; margin-top: 15px;" >Demikian surat keterangan usaha ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
                <table style="width: 100%; margin-top: 15px;"  >
                    <tr>
                        <td span="2" >Mengetahui :</td>
                    </tr>
                    <tr>
                        <td>Reg No. : ...............</td>
                    </tr>
                    <tr>
                        <td >Tanggal : ...............</td>
                        <td>Getasan, {{ Carbon\Carbon::now()->format('d F Y') }},</td>
                    </tr>
                    <tr>
                        <td>Perbekel Getasan,</td>
                        <td>Kelian Banjar Dinas Ubud</td>
                    </tr>
                    <tr>
                        <td style="width: 100%;" >
                            <div style="position: relative; height: 80px; width: 100%;" >
                                @if ($data->status == 'Done')
                                <img style="position: absolute; bottom: -60%; left: -15%;" width="290" src="{{ public_path().'/assets/be/media/perbekel.png' }}" alt="">
                                @endif
                            </div>
                        </td>
                        <td>
                            <div style="position: relative; height: 80px; width: 100%;" >
                                <img style="position: absolute; bottom: -60%; left: -25%;" width="290" src="{{ public_path().'/storage/'. $data->image }}" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-indent: 0; text-align: left;" ><u >I Wayan Suandi, S.Pt</u></p>
                        </td>
                        <td>
                            <p style="text-indent: 0; text-align: left;" ><u >I Putu Antara</u></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</bodu>
</html>