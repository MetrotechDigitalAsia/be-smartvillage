<div class="mail-header">
    <img style="bottom: 17px; left: 0; mix-blend-mode: darken;" src="{{ asset('assets/be/media/pengumuman-perkawinan-logo.png') }}" width="90px" alt="">
    <h3 style="font-weight: bold; text-align: center; line-height: 28px;" >DESA ADAT GETASAN <br>DESA GETASAN KECAMATAN PETANG <br> KABUPATEN BADUNG</h3>
    <p class="m-0" style="font-size: 12px;" >Sekretariat : Kantor Perbekel Getasan Jln. Tukad Penet Nomor : 14 Telp. 081 353 622 066</p>
</div>
<div class="mail-body px-14" >
    <p style="font-size: 15px; font-weight: bolder; text-align: center; margin-bottom: 2px;" ><u>SURAT KETERANGAN PERKAWINAN UMAT HINDU</u></p>
    <p style="font-size: 14.5px; text-align: center;" >Nomor: .............................................................</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 45px;" >Pada hari ini Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->subDays(10)->format('d/m/Y') }}, hadir di hadapan saya I Gede Darma, S.Pd, Bendesa Adat Getasan, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 30px;" >Nama Suami : {{ $field->subject_1->name ?? '' }} agama {{ $field->subject_1->religion ?? '' }}, lahir di {{ $field->subject_1->birthplace ?? '' }}, pada tanggal {{ Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') }}, pekerjaan {{ $field->subject_1->job }}, alamat tempat tinggal di : {{ $field->subject_1->address ?? '' }}. Anak laki-Laki dari : {{ $field->subject_1_father_name }} dan {{ $field->subject_1_mother_name }} Keduanya bertempat tinggal di : {{ $field->subject_1_father_address ?? '' }}.</p>
    <p style="font-size: 12px;text-align: center; margin-bottom: 30px;" ><b>dengan</b></p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 45px;" >Nama Istri : {{ $field->subject_2->name ?? '' }}. agama {{ $field->subject_2->religion ?? '' }}, lahir di {{ $field->subject_2->birthplace ?? '' }}, pada tanggal {{ Carbon\Carbon::parse($field->subject_2->birthdate)->format('d/m/Y') }}, pekerjaan {{  $field->subject_2->job  }}, alamat tempat tinggal di : {{ $field->subject_2->address ?? '' }}. Anak Perempuan dari : {{ $field->subject_2_father_name }} dan {{ $field->subject_2_mother_name }}. Keduanya bertempat tinggal di : {{ $field->subject_2_father_address ?? '' }}.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0;" >Atas dasar suka sama suka mereka telah melangsungkan tata cara perkawinan secara Agama Hindu untuk yang pertama kalinya, pada hari : Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') }}, dan yang berkedudukan sebagai PURUSA adalah : I Made Yoga Astawa, S.E.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 25px;" >Selanjutnya karena syarat-syarat dan upacara perkawinan secara Agama Hindu, telah dilaksanakan maka, saya nyatakan bahwa keduanya telah dalam ikatan perkawinan dan menjadi suami istri yang sah.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0;" >Dari hal tersebut diterbitkanlah Surat Keterangan ini yang sesudah dibacakan dan dijelaskan, ditandatangani kedua belah pihak suami dan istri, saksi-saksi dan saya Bendesa Adat Getasan.</p>
</div>
<div class="mail-footer pb-20" >
    <table style="font-size: 12px;width: 80%; margin: 0 auto; margin-top: 40px; text-align: center;" >
        <tr>
            <td style="padding-bottom: 50px; text-align: center;" >Rohaniawan/Pemuput,</td>
            <td style="width: 20%;" ></td>
            <td style="padding-bottom: 50px; text-align: center;" >Bandesa Adat Getasan,</td>
        </tr>
        <tr>
            <td><u>...................................</u></td>
            <td></td>
            <td style="text-align: center;" ><u>I Gede Darma, S.Pd</u></td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px;" >Para Pihak:</p>
    <table style="font-size: 12px;width: 80%; margin: 0 auto; text-align: center;" >
        <tr>
            <td style="padding-bottom: 50px;" >Suami,</td>
            <td style="width: 20%;" ></td>
            <td style="padding-bottom: 50px;" >Istri,</td>
        </tr>
        <tr>
            <td><u>{{ $field->subject_1->name ?? '' }}</u></td>
            <td></td>
            <td><u>{{ $field->subject_2->name ?? '' }}</u></td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px;" >Saki Saksi:</p>
    <table style="font-size: 12px; width: 80%; margin: 0 auto; text-align: center;" >
        <tr>
            <td style="padding-bottom: 50px;" >Saksi I,</td>
            <td style="width: 20%;" ></td>
            <td style="padding-bottom: 50px;" >Saksi II,</td>
        </tr>
        <tr>
            <td><u>{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</u></td>
            <td></td>
            <td><u>{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</u></td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px;" >Mengetahui:</p>
    <table style="font-size: 12px; width: 80%; margin: 0 auto; text-align: center;" >
        <tr>
            <td style="padding-bottom: 50px;" >Perbekel Getasan,</td>
            <td style="width: 20%;" ></td>
            <td style="padding-bottom: 50px;" >Camat Petang,</td>
        </tr>
        <tr>
            <td ><u>I Wayan Suandi, S.Pt</u></td>
            <td></td>
            <td><u>...................................</u></td>
        </tr>
    </table>
</div>
