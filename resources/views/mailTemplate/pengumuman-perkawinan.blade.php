<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengumuman Perkawinan</title>
</head>
<body style="padding: 0 30px;" >

    <h2 style="text-align: center; font-weight: normal; font-size: 21px; line-height: 28px;" >DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL <br>KABUPATEN BADUNG</h3>
    <div style="height: 2px; background-color: black; margin-bottom: 4px; margin-top: 10px;" ></div>
    <div style="height: 4px; background-color: black;" ></div>
    <p style="text-align: center; font-size: 16px; margin: 25px 0;" ><u>DAFTAR</u><br>UNTUK</p>
    <p style="text-align: center; font-size: 16px; margin-bottom: 5px;" ><u>PENGUMUMAN</u></p>
    <p style="text-align: center; font-size: 16px; margin-bottom: 50px;" >Nomor : ..........................................................................................</p>
    <p style="line-height: 22px; text-align: justify;" >Hari ini {{ Carbon\Carbon::parse($field->marriage_date)->subDays(10)->translatedFormat('l') }}, tanggal {{ Carbon\Carbon::parse($field->marriage_date)->subDays(10)->translatedFormat('d/m/Y') }}, saya I Gede Darma, S.Pd, Pembantu Pegawai Pencatatan Perkawinan Umat Hindu Desa Adat : Getasan, mengumumkan di Kantor</p>
    <p style="margin-bottom: 30px;" >tempat Br. Ubud, bermaksud hendak melangsungkan perkawinan : antara</p>
    <p style="text-align: center; margin-bottom: 5px; text-transform: capitalize;" >"{{ $field->subject_1->name ?? '' }}"</p>
    <p style="text-align: justify; line-height: 22px; margin-top: 0;" >Agama {{ $field->subject_1->religion ?? '' }}, lahir di {{ $field->subject_1->birthplace ??'' }}, Tgl. {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->translatedFormat('d/m/Y') : ''}}, pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_1->job ?? '' }}</span>, bertempat tinggal di Br. {{ $field->subject_1_banjar ?? '' }}, Desa/Kelurahan {{ $field->subject_1_village ?? '' }}, Kecamatan {{ $field->subject_1_district ?? '' }}, Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_1_city }}</span>, Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_1_province }}</span>, dahulu sudah/belum pernah kawin dengan -, anak laki-laki dari : <span style="text-transform: capitalize;" >{{ $field->subject_1_father_name }}</span> umur {{ $field->subject_1_father_age ?? '' }} tahun, pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_1_father_job ?? '' }}</span> dan <span style="text-transform: capitalize;" >{{ $field->subject_1_mother_name }}</span> umur {{ $field->subject_1_mother_age ?? '' }} tahun, pekerjaan {{ $field->subject_1_mother_job ?? '' }}, keduanya bertempat tinggal di Banjar/Lingk : {{ $field->subject_1_banjar ?? '' }}, Desa/Kelurahan {{ $field->subject_1_village ?? '' }}, Kecamatan {{ $field->subject_1_district ?? '' }}, Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_1_city }}</span>, Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_1_province }}</span>.</p>
    <p style="text-align: center; margin-top: 60px; margin-bottom: 35px; font-weight: 500;" >dengan</p>
    <p style="text-align: center; margin-bottom: 5px; text-transform: capitalize" >"{{ $field->subject_2->name }}"</p>
    <p style="margin-top: 0; text-align: justify; line-height: 22px;" >Agama {{ $field->subject_2->religion ?? '' }}, lahir di {{ $field->subject_2->birthplace ??'' }}, Tgl. {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->translatedFormat('d/m/Y') : ''}}, pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_2->job ?? '' }}</span>, bertempat tinggal di Br. {{ $field->subject_2_banjar ?? '' }}, Desa/Kelurahan {{ $field->subject_2_village ?? '' }}, Kecamatan {{ $field->subject_2_district ?? '' }}, Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_2_city }}</span>, Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_2_province }}</span>, dahulu sudah/belum pernah kawin dengan -, anak perempuan dari : <span style="text-transform: capitalize;" >{{ $field->subject_2_father_name }}</span>  umur {{ $field->subject_2_father_age ?? '' }} tahun, pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_2_father_job ?? '' }}</span> dan <span style="text-transform: capitalize;" >{{ $field->subject_2_mother_name }}</span> umur {{ $field->subject_2_mother_age ?? '' }} tahun, pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_2_mother_job ?? '' }}</span>, keduanya bertempat tinggal di Banjar/Lingk : {{ $field->subject_2_banjar ?? '' }}, Desa/Kelurahan {{ $field->subject_2_village ?? '' }}, Kecamatan {{ $field->subject_2_district ?? '' }}, Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_2_city }}</span>, Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_2_province }}</span>.</p>
    <table style="width: 100%; margin-top: 60px;" >
        <tr>
            <td rowspan="2" style="width: 60%;" ></td>
            <td style="padding-bottom: 50px; line-height: 22px;" >Pembantu Pegawai Pencatat <br> Perkawinan Umat Hindu <br> Desa Adat Getasan</td>
        </tr>
        <tr>
            <td><u>I Gede Darma, S.Pd</u></td>
        </tr>
    </table>
    <div style="height: 100px;" ></div>
    
</body>
</html>