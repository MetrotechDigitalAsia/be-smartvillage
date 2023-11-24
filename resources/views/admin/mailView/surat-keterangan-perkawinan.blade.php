<div class="mail-header">
    <img style="bottom: 17px; left: 0; mix-blend-mode: darken;" src="{{ asset('assets/be/media/pengumuman-perkawinan-logo.png') }}" width="90px" alt="">
    <h3 style="font-weight: bold; text-align: center; line-height: 28px;" >DESA ADAT GETASAN <br>DESA GETASAN KECAMATAN PETANG <br> KABUPATEN BADUNG</h3>
    <p class="m-0" style="font-size: 12px;" >Sekretariat : Kantor Perbekel Getasan Jln. Tukad Penet Nomor : 14 Telp. 081 353 622 066</p>
</div>
<div class="mail-body" style="padding: 0 42px;" >
    <p style="font-size: 15px; font-weight: bolder; text-align: center; margin-bottom: 2px; margin-top: 20px;" ><u>SURAT KETERANGAN PERKAWINAN UMAT HINDU</u></p>
    <p style="font-size: 14.5px; text-align: center;" >Nomor: .............................................................</p>
    <p style="text-align: justify; font-size: 12px;" >Pada hari ini {{  Carbon\Carbon::now()->translatedFormat('l') }}, tanggal : {{ Carbon\Carbon::now()->translatedFormat('d/m/Y') }} hadir di hadapan saya : I Gede Darma, S.Pd, Bendesa Adat Getasan Desa/Kelurahan Getasan Kecamatan Petang Kabupaten Badung, provinsi Bali.</p>
    {{-- <p style="text-align: justify; font-size: 12px; text-indent: 0;" >Nama Suami : ............................................................................................................Agama Hindu,<br>Tempat/ tanggal lahir : .........................................................., Pekerjaan .......................................,<br>alamat tempat tinggal di : Banjar/Lingk : ........................................................................................, <br>Desa/Kelurahan.................................................Kecamatan............................................................,<br> Kabupaten/Kota ................................................ Provinsi Bali. <br>Anak laki-laki dari: nama (ayah).................................... dan nama (ibu)...........................................<br>bertempat tinggal di Br./Lingk ....................................... Desa ........................................................<br>Kecamatan ................................ Kabupaten/Kota. ..................................................... Provinsi Bali.</p> --}}
    <p style="text-align: justify; font-size: 12px; text-indent: 0;" >Nama Suami : <span style="text-transform: capitalize;" >{{ $field->subject_1->name ?? '' }}</span> Agama Hindu, Tempat/ tanggal lahir : <span style="text-transform: capitalize;" >{{ $field->subject_1->birthplace ?? '' }}</span>, {{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') : '' }}, Pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_1->job ?? '' }}</span>, alamat tempat tinggal di : Banjar/Lingk : {{ $field->subject_1->banjar ?? '' }} Desa/Kelurahan {{ $field->subject_1_village ?? '' }} Kecamatan {{ $field->subject_1_district ?? '' }} Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_1_city }}</span> Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_1_province }}</span>. Anak laki-laki dari: nama (ayah) <span style="text-transform: capitalize;" >{{ $field->subject_1_father_name }}</span> dan nama (ibu) <span style="text-transform: capitalize;" >{{ $field->subject_1_mother_name }}</span>  bertempat tinggal di : Banjar/Lingk : {{ $field->subject_1->banjar ?? '' }} Desa/Kelurahan {{ $field->subject_1_village ?? '' }} Kecamatan {{ $field->subject_1_district ?? '' }} Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_1_city }}</span> Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_1_province }}</span>.</p>
    <p style="text-align: center; margin: 30px 0; font-size: 12px;" >Dengan</p>
    {{-- <p style="text-align: justify; font-size: 12px; text-indent: 0;" >Nama Istri : ................................................................................................................Agama Hindu,<br>Tempat/ tanggal lahir : .........................................................., Pekerjaan .......................................,<br>alamat tempat tinggal di : Banjar/Lingk : ........................................................................................, <br>Desa/Kelurahan.................................................Kecamatan............................................................,<br> Kabupaten/Kota ................................................ Provinsi Bali. <br>Anak laki-laki dari: nama (ayah).................................... dan nama (ibu)...........................................<br>bertempat tinggal di Br./Lingk ....................................... Desa ........................................................<br>Kecamatan ................................ Kabupaten/Kota. ..................................................... Provinsi Bali.</p> --}}
    <p style="text-align: justify; font-size: 12px; text-indent: 0;" >Nama Istri : <span style="text-transform: capitalize;" >{{ $field->subject_2->name ?? '' }}</span> Agama Hindu, Tempat/ tanggal lahir : <span style="text-transform: capitalize;" >{{ $field->subject_2->birthplace ?? '' }}</span>, {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->format('d/m/Y') : '' }}, Pekerjaan <span style="text-transform: capitalize;" >{{ $field->subject_2->job ?? '' }}</span>, alamat tempat tinggal di : Banjar/Lingk : {{ $field->subject_2->banjar ?? '' }} Desa/Kelurahan {{ $field->subject_2_village ?? '' }} Kecamatan {{ $field->subject_2_district ?? '' }} Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_2_city }}</span> Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_2_province }}</span>. Anak Perempuan dari: nama (ayah) <span style="text-transform: capitalize;" >{{ $field->subject_2_father_name }}</span> dan nama (ibu) <span style="text-transform: capitalize;" >{{ $field->subject_2_mother_name }}</span>  bertempat tinggal di : Banjar/Lingk : {{ $field->subject_2->banjar ?? '' }} Desa/Kelurahan {{ $field->subject_2_village ?? '' }} Kecamatan {{ $field->subject_2_district ?? '' }} Kabupaten/Kota <span style="text-transform: capitalize;" >{{ $field->subject_2_city }}</span> Provinsi <span style="text-transform: capitalize;" >{{ $field->subject_2_province }}</span>.</p>
    <p style="text-align: justify; font-size: 12px;margin: 0;" >Bahwa Atas dasar suka sama suka mereka telah melangsungkan <b>tata cara perkawinan</b> secara <br>agama Hindu di {{ $field->marriage_location }}, pada hari {{ !empty($field->marriage_date) ? Carbon\Carbon::parse($field->marriage_date)->translatedFormat('l') : '' }} tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->translatedFormat('d/m/Y') }} , dan berkedudukan sebagai PURUSA, adalah : {{ $field->subject_1->name ?? '' }} .</p>
    <p style="text-align: justify; font-size: 12px;margin: 10px 0;" >Selanjutnya syarat-syarat dan upacara perkawinan secara Agama Hindu, telah dilaksanakan maka, saya nyatakan bahwa keduanya telah dalam ikatan perkawinan dan menjadi suami istri yang sah.</p>
    <p style="text-align: justify; font-size: 12px;margin: 0;" >Dari hal tersebut diterbitkanlah Surat Keterangan ini yang sesudah dibacakan dan di jelaskan, ditandatangani kedua belah pihak suami dan istri, saksi-saksi dan saya Bendesa Adat.</p>
    {{-- <table style="width: 100%; margin-top: 20px; font-size: 12px;" >
        <tr>
            <td style="text-align: center; padding-bottom: 60px;" >Rohaniawan/Pemuput :</td>
            <td style="text-align: center; padding-bottom: 60px;" >Bendesa Adat</td>
        </tr>
        <tr>
            <td style="text-align: center;" >(.................................................)</td>
            <td style="text-align: center;" >(.................................................)</td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px; margin: 20px 0;" >
        <span style="margin-right: 40px;" >Para Pihak</span>
    </p>
    <table style="width: 100%; margin-top: 20px; font-size: 12px;" >
        <tr>
            <td style="text-align: left; padding-left: 55px;" >{{ $field->subject_1->name }} </td>
            <td style="text-align: left; padding-left: 55px;" >{{ $field->subject_2->name }}</td>
        </tr>
        <tr>
            <td style="text-align: center;" >(.................................................)</td>
            <td style="text-align: center;" >(.................................................)</td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px; margin: 20px 0;" >
        <u style="margin-right: 40px;" >Saksi-Saksi</u>
    </p>
    <table style="width: 100%; margin-top: 20px; font-size: 12px;" >
        <tr>
            <td style="text-align: left; padding-left: 55px;" >{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</td>
            <td style="text-align: left; padding-left: 55px;" >{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;" >(.................................................)</td>
            <td style="text-align: center;" >(.................................................)</td>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px; margin: 20px 0;" >
        <u style="margin-right: 40px;" >Mengetahui</u>
    </p>
    <table style="width: 100%; margin-top: 20px; font-size: 12px;" >
        <tr>
            <td style="text-align: left; padding-left: 55px;" >Kepala Desa/Lurah </td>
            <td style="text-align: left; padding-left: 55px;" >Camat</td>
        </tr>
        <tr>
            <td style="text-align: center;" >(.................................................)</td>
            <td style="text-align: center;" >(.................................................)</td>
        </tr>
    </table> --}}
</div>
{{-- <div class="mail-body px-14" >
    <p style="font-size: 15px; font-weight: bolder; text-align: center; margin-bottom: 2px;" ><u>SURAT KETERANGAN PERKAWINAN UMAT HINDU</u></p>
    <p style="font-size: 14.5px; text-align: center;" >Nomor: .............................................................</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 45px;" >Pada hari ini Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') }}, hadir di hadapan saya I Gede Darma, S.Pd, Bendesa Adat Getasan, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 30px;" >Nama Suami : {{ $field->subject_1->name ?? '' }} agama {{ $field->subject_1->religion ?? '' }}, lahir di {{ $field->subject_1->birthplace ?? '' }}, pada tanggal {{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') : '' }}, pekerjaan {{ $field->subject_1->job ?? '' }}, alamat tempat tinggal di : {{ $field->subject_1->address ?? '' }}. Anak laki-Laki dari : {{ $field->subject_1_father_name }} dan {{ $field->subject_1_mother_name }} Keduanya bertempat tinggal di : {{ $field->subject_1_father_address ?? '' }}.</p>
    <p style="font-size: 12px;text-align: center; margin-bottom: 30px;" ><b>dengan</b></p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 45px;" >Nama Istri : {{ $field->subject_2->name ?? '' }}. agama {{ $field->subject_2->religion ?? '' }}, lahir di {{ $field->subject_2->birthplace ?? '' }}, pada tanggal {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->format('d/m/Y') : '' }}, pekerjaan {{  $field->subject_2->job ?? ''  }}, alamat tempat tinggal di : {{ $field->subject_2->address ?? '' }}. Anak Perempuan dari : {{ $field->subject_2_father_name }} dan {{ $field->subject_2_mother_name }}. Keduanya bertempat tinggal di : {{ $field->subject_2_father_address ?? '' }}.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0;" >Atas dasar suka sama suka mereka telah melangsungkan tata cara perkawinan secara Agama Hindu untuk yang pertama kalinya, pada hari : Jumat, tanggal : {{ Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') }}, dan yang berkedudukan sebagai PURUSA adalah : {{ $field->subject_1->name ?? '' }}.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0; margin-bottom: 25px;" >Selanjutnya karena syarat-syarat dan upacara perkawinan secara Agama Hindu, telah dilaksanakan maka, saya nyatakan bahwa keduanya telah dalam ikatan perkawinan dan menjadi suami istri yang sah.</p>
    <p style="font-size: 12px;text-align: justify; text-indent: 0;" >Dari hal tersebut diterbitkanlah Surat Keterangan ini yang sesudah dibacakan dan dijelaskan, ditandatangani kedua belah pihak suami dan istri, saksi-saksi dan saya Bendesa Adat Getasan.</p>
</div> --}}
<div class="mail-footer" style="padding; 0 42px; padding-bottom: 120px;" >
    <table style="font-size: 12px; width: 80%; margin: 0 auto; margin-top: 40px; text-align: center;" >
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
        <tr style="height: 60px" >
            <td colspan="3" style="text-align: center;" >
                Para Pihak
            </td>
        </tr>
        <tr>
            <td style="padding-bottom: 50px; text-align: center;" >Suami,</td>
            <td style="width: 20%;" ></td>
            <td style="padding-bottom: 50px; text-align: center;" >Istri,</td>
        </tr>
        <tr>
            <td style="text-align: center;" ><u>{{ $field->subject_1->name ?? '' }}</u></td>
            <td style="text-align: center;" ></td>
            <td style="text-align: center;" ><u>{{ $field->subject_2->name ?? '' }}</u></td>
        </tr>
        <tr style="height: 60px" >
            <td colspan="3" style="text-align: center;" >
                Saksi Saksi:
            </td>
        </tr>
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
        <tr style="height: 60px" >
            <td colspan="3" style="text-align: center;" >
                Mengetahui
            </td>
        </tr>
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
