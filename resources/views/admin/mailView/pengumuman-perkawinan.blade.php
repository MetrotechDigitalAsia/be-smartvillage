<div style="padding: 0 30px;" >
    <h4 style="text-align: center;" >DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL <br>KABUPATEN BADUNG</h4>
    <div style="height: 2px; background-color: black; margin-bottom: 4px; margin-top: 10px;" ></div>
    <div style="height: 4px; background-color: black;" ></div>
    <p style="text-align: center; font-size: 16px; margin: 25px 0;" ><u>DAFTAR</u><br>UNTUK</p>
    <p style="text-align: center; font-size: 16px; margin-bottom: 5px;" ><u>PENGUMUMAN</u></p>
    <p style="text-align: center; font-size: 14px;" >Nomor: .....................................................</p>
    <p style="text-align: justify;" >Hari ini Kamis, tanggal {{ Carbon\Carbon::parse($field->marriage_date)->subDays(10)->translatedFormat('d/m/Y') }}, saya I Gede Darma, S.Pd, Pembantu Pegawai Pencatatan Perkawinan Umat Hindu Desa Adat : Getasan, mengumumkan di Kantor</p>
    <p>tempat Br. Ubud, bermaksud hendak melangsungkan perkawinan : antara</p>
    <p style="text-align: center;" >"{{ $field->subject_1->name }}"</p>
    <p style="text-align: justify;" >Agama {{ $field->subject_1->religion }}, lahir di Br.{{ $field->subject_1->banjar  ?? ''}}, {{ $field->subject_1->birthplace }}, Tgl. {{ Carbon\Carbon::parse($field->subject_1->birthdate)->translatedFormat('d/m/Y')}}, pekerjaan {{ $field->subject_1->job }}, bertempat tinggal di Br. {{ $field->subject_1->banjar  ?? ''}}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, dahulu sudah/belum pernah kawin dengan - , anak laki-laki dari : {{ $field->subject_1_father->name }} umur {{ $field->subject_1_father->age ?? '' }} tahun, pekerjaan {{ $field->subject_1_father->job ?? '' }} dan {{ $field->subject_1_mother->name }} umur {{ $field->subject_1_mother->age ?? '' }} tahun, pekerjaan {{ $field->subject_1_mother->job ?? '' }}, keduanya bertempat tinggal di Br. {{ $field->subject_1_mother->banjar ?? '' }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung.</p>
    <p style="text-align: center; margin-top: 40px;" ><b>dengan</b></p>
    <p style="text-align: center;" >"{{ $field->subject_2->name }}"</p>
    <p style="text-align: justify;" >Agama {{ $field->subject_2->religion }}, lahir di Br.{{ $field->subject_2->banjar  ?? ''}}, {{ $field->subject_2->birthplace }}, Tgl. {{ Carbon\Carbon::parse($field->subject_2->birthdate)->translatedFormat('d/m/Y')}}, pekerjaan {{ $field->subject_2->job }}, bertempat tinggal di Br. {{ $field->subject_2->banjar  ?? ''}}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, dahulu sudah/belum pernah kawin dengan - , anak laki-laki dari : {{ $field->subject_2_father->name }} umur {{ $field->subject_2_father->age ?? '' }} tahun, pekerjaan {{ $field->subject_2_father->job ?? '' }} dan {{ $field->subject_2_mother->name }} umur {{ $field->subject_2_mother->age ?? '' }} tahun, pekerjaan {{ $field->subject_2_mother->job ?? '' }}, keduanya bertempat tinggal di Br. {{ $field->subject_2_mother->banjar ?? '' }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung.</p>
    <table style="width: 100%; margin-top: 60px;" >
        <tr>
            <td rowspan="2" style="width: 60%;" ></td>
            <td style="padding-bottom: 50px;" >Pembantu Pegawai Pencatat <br> Perkawinan Umat Hindu <br> Desa Adat Getasan</td>
        </tr>
        <tr>
            <td><u>I Gede Darma, S.Pd</u></td>
        </tr>
    </table>
    <div style="height: 100px;" ></div>
</div>
