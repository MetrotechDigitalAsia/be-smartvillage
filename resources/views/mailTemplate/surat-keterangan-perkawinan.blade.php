<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keterangan Perkawinan</title>
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
            margin-top: 0;
            margin-bottom: 0;
            font-family: 'Bookman Old Style', sans-serif;
        }

        .mail-header {
            margin: 0 auto;
            margin-top: 40px;
            align-items: center;
            position: relative;
            padding-bottom: 2px;
            width: 650px;
            border-bottom: 3px solid black;
            text-align: center;
        }

        .mail-header::after {
            display: block;
            content:  '';
            height: 1px;
            width: 100%;
            background-color: black;
            /* margin-top: 10px; */
        }

        .mail-header img {
            position: absolute;
            margin-top: 10px;
            /* left: 20px;
            bottom: 20px; */
        }
    </style>
</head>
<body>

    <div class="mail-header">
        <img style="top: -17px; left: -0px; mix-blend-mode: darken;" src="{{ public_path('assets/be/media/pengumuman-perkawinan-logo.png') }}" width="95px" alt="">
        <h3 style="font-weight: bold; text-align: center; line-height: 20px;" >DESA ADAT GETASAN <br>DESA GETASAN KECAMATAN PETANG <br> KABUPATEN BADUNG</h3>
        <p style="font-size: 11px; margin: 0;" >Sekretariat : Kantor Perbekel Getasan Jln. Tukad Penet Nomor : 14 Telp. 081 353 622 066</p>
    </div>
    <div class="mail-body" style="width: 650px; margin: inherit auto;" >
        <p style="font-size: 15px; font-weight: bolder; text-align: center; margin-bottom: 2px;" ><u>SURAT KETERANGAN PERKAWINAN UMAT HINDU</u></p>
        <p style="font-size: 14.5px; text-align: center; margin-bottom: 20px;" >Nomor: .............................................................</p>
        <p style="font-size: 12px;text-align: justify; text-indent: 35px; margin-bottom: 45px;" >Pada hari ini Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') }}, hadir di hadapan saya I Gede Darma, S.Pd, Bendesa Adat Getasan, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali.</p>
        <p style="text-align: justify; font-size: 12px; text-indent: 0;" >Nama Suami : <span style="text-transform: capitalize;" >{{ $field->subject_1->name ?? '' }}</span> Agama Hindu, Tempat/ tanggal lahir : <span style="text-transform: capitalize;" >{{ $field->subject_1->birthplace ?? '' }}</span>, {{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') : '' }}, Pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_1->job ?? '' }}</span>, alamat tempat tinggal di : Banjar/Lingk : {{ $field->subject_1_address ?? '' }}. Anak laki-laki dari: nama (ayah) <span style="text-transform: capitalize;" >{{ $field->subject_1_father_name }}</span> dan nama (ibu) <span style="text-transform: capitalize;" >{{ $field->subject_1_mother_name }}</span>  bertempat tinggal di : Banjar/Lingk : {{ $field->subject_1_father_address ?? '' }}.</p>
        {{-- <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 25px;" >Nama Suami : {{ $field->subject_1->name ?? '' }} agama {{ $field->subject_1->religion ?? '' }}, lahir di {{ $field->subject_2->birthplace ?? '' }}, pada tanggal {{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') : '' }}, pekerjaan {{ $field->subject_1->job ?? '' }}, alamat tempat tinggal di : {{ $field->subject_1->address ?? '' }}. Anak laki-Laki dari : {{ $field->subject_1_father_name }} dan {{ $field->subject_1_mother_name }} Keduanya bertempat tinggal di : {{ $field->subject_1_father_address ?? '' }}.</p> --}}
        <p style="font-size: 12px;text-align: center; margin: 25px 0;" ><b>dengan</b></p>
        <p style="text-align: justify; font-size: 12px; text-indent: 0; margin-bottom: 40px;" >Nama Istri : <span style="text-transform: capitalize;" >{{ $field->subject_2->name ?? '' }}</span> Agama Hindu, Tempat/ tanggal lahir : <span style="text-transform: capitalize;" >{{ $field->subject_2->birthplace ?? '' }}</span>, {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->format('d/m/Y') : '' }}, Pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_2->job ?? '' }}</span>, alamat tempat tinggal di : Banjar/Lingk : {{ $field->subject_2_address ?? '' }}. Anak laki-laki dari: nama (ayah) <span style="text-transform: capitalize;" >{{ $field->subject_2_father_name }}</span> dan nama (ibu) <span style="text-transform: capitalize;" >{{ $field->subject_2_mother_name }}</span>  bertempat tinggal di : Banjar/Lingk : {{ $field->subject_2_father_address ?? '' }}.</p>
        <p style="text-align: justify; font-size: 12px; margin: 0; text-indent: 35px;" >Bahwa Atas dasar suka sama suka mereka telah melangsungkan tata cara perkawinan secara agama Hindu di {{ $field->marriage_location ?? '' }} pada hari {{ !empty($field->marriage_date) ? Carbon\Carbon::parse($field->marriage_date)->translatedFormat('l') : '' }} tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->translatedFormat('d/m/Y') }} , dan berkedudukan sebagai PURUSA, adalah : {{ $field->subject_1->name ?? '' }} .</p>
        {{-- <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 18px" >Atas dasar suka sama suka mereka telah melangsungkan tata cara perkawinan secara Agama Hindu untuk yang pertama kalinya, pada hari : Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') }}, dan yang berkedudukan sebagai PURUSA adalah : {{ $field->subject_1->name ?? '' }}.</p> --}}
        <p style="text-align: justify; font-size: 12px; text-indent: 35px;" >Selanjutnya syarat-syarat dan upacara perkawinan secara Agama Hindu, telah dilaksanakan maka, saya nyatakan bahwa keduanya telah dalam ikatan perkawinan dan menjadi suami istri yang sah.</p>
        <p style="font-size: 12px;text-align: justify; text-indent: 35px;" >Dari hal tersebut diterbitkanlah Surat Keterangan ini yang sesudah dibacakan dan dijelaskan, ditandatangani kedua belah pihak suami dan istri, saksi-saksi dan saya Bendesa Adat Getasan.</p>
    </div>
    <div class="mail-footer" style="padding-bottom: 25px; width: 650px; margin: inherit auto;" >
        <table style="font-size: 12px;width: 100%; margin: 0 auto; margin-top: 40px; text-align: center;" >
            <tr>
                <td style="padding-bottom: 50px; text-align: center; width: 50%;" >Rohaniawan/Pemuput,</td>
                <td style="padding-bottom: 50px; text-align: center;" >Bandesa Adat Getasan,</td>
            </tr>
            <tr>
                <td>(................................................)</td>
                <td style="text-align: center;" ><u>I Gede Darma, S.Pd</u></td>
            </tr>
        </table>
        <p style="text-align: center; font-size: 12px;" >Para Pihak:</p>
        <table style="font-size: 12px; width: 100%; margin: 0 auto; text-align: center;" >
            <tr>
                <td style="padding-bottom: 50px; width: 50%;" >Suami,</td>
                <td style="padding-bottom: 50px;" >Istri,</td>
            </tr>
            <tr>
                <td><u>{{ $field->subject_1->name ?? '' }}</u></td>
                <td><u>{{ $field->subject_2->name ?? '' }}</u></td>
            </tr>
        </table>
        <p style="text-align: center; font-size: 12px;" >Saki Saksi:</p>
        <table style="font-size: 12px; width: 100%; margin: 0 auto; text-align: center;" >
            <tr>
                <td style="padding-bottom: 50px; width: 50%;" >Saksi I,</td>
                <td style="padding-bottom: 50px;" >Saksi II,</td>
            </tr>
            <tr>
                <td><u>{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</u></td>
                <td><u>{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</u></td>
            </tr>
        </table>
        <p style="text-align: center; font-size: 12px;" >Mengetahui:</p>
        <table style="font-size: 12px; width: 100%; margin: 0 auto; text-align: center;" >
            <tr>
                <td style="padding-bottom: 50px; width: 50%;" >Perbekel Getasan,</td>
                <td style="padding-bottom: 50px;" >Camat Petang,</td>
            </tr>
            <tr>
                <td style="" ><u>{{ !empty($perbekel) ? $perbekel->name : 'belum ada data perbekel' }}</u></td>
                <td><u>...................................</u></td>
            </tr>
        </table>
    </div>
    
    
</body>
</html>