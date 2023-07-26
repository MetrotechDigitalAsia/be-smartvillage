<div class="mail_1" style="border: 1px solid black; padding: 7px 5px;" >
    <div class="f1-01-header" style="font-family: sans-serif;" >
        <h3 style="text-align: center; font-weight: bolder; font-size: 12px; margin-bottom: 2px;" >PEMERINTAH KABUPATEN BADUNG</h3>
        <h4 style="text-align: center; font-size: 11px; font-weight: bold; margin-bottom: 2px;" >DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</h4>
        <h4 style="text-align: center; font-size: 10px; font-weight: bold; margin-bottom: 2px;" >PUSAT PEMERINTAHAN MANGUPRAJA MANDALA</h4>
        <p style="text-align: center; font-size: 9px; margin-bottom: 5px;" >JALAN RAYA SEMPIDI MENGWI - BADUNG BALI TELP. (0361) 8947979</p>
    </div>
    <div class="f1-01-body" style="font-family: sans-serif;" >
        <p style="text-align: center; font-size: 8px; margin-bottom: 0;" ><b>FORMULIR BIODATA PENDUDUK</b></p>
        <p style="background-color: black; color: #fff; text-align: center; font-size: 8px;" >cetak dan jelas serta mengikuti 'TATA CARA PENGISIAN FORMULIR'</p>
        <p style="margin-bottom : 2px; font-size: 8.5px;" >Pilih salah satu:</p>
        <ul style="list-style-type: none; font-size: 8.5px;" >
            <li>Input Data Kepala Keluarga dan Anggota Keluarga WNI</li>
            <li>Input Data Kepala Keluarga dan Anggota Orang Asing</li>
            <li>Input Data Kepala Keluarga dan Anggota WNI Di Luar Negeri</li>
        </ul>
        <p style="margin-bottom : 2px; font-size: 8px;" >DATA KEPALA KELUARGA:</p>
        <div class="d-flex" style="font-size: 8.5px;" >
            <span style="width: 240px; padding-left: 5px;" >1 Nama Kepala Keluarga/Name of Head of the Family</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >{{ $field->head_of_family_name ?? '' }}</span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >2 Alamat/ Address</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >{{ $field->banjar ?? '' }}, GETASAN</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px;" >
            <span style="width: 240px; padding-left: 5px;" style="margin-right: 1px;" >3. Kode Pos/ Post Code</span>
            @for ($i = 0; $i < 4; $i++)
                <span style="border: 1px solid black; width: 20px; @if($i != 3) border-right: none; @endif" class="text-center" >{{ $field->postal_code[$i] ?? '' }}</span>
            @endfor
            <span style="margin: 0 2px;" >4 RT</span>
            @for ($i = 0; $i < 3; $i++)
                <span style="border: 1px solid black; width: 20px; @if($i != 2) border-right: none; @endif" class="text-center" >{{ $field->postal_code[$i] ?? '' }}</span>
            @endfor
            <span style="margin: 0 2px;" >5 RW</span>
            @for ($i = 0; $i < 3; $i++)
                <span style="border: 1px solid black; width: 20px; @if($i != 2) border-right: none; @endif" class="text-center" >{{ $field->postal_code[$i] ?? '' }}</span>
            @endfor
            <span style="margin: 0 2px;" class="flex-grow-1" >6 JML ANGGOTA KELUARGA</span>
            <span style="border: 1px solid black; width: 20px; border-right: 0;" class="text-center" >{{ $field->postal_code[$i] ?? '' }}</span>
            <span style="border: 1px solid black; width: 20px;" class="text-center" >{{ $field->postal_code[$i] ?? '' }}</span>
            <span style="width: 20px;" class="text-center" >Org</span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >7 Telepon/ Telephone Number/ Handphone</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >{{ $field->head_of_family_phone ?? '' }}</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >8 Email</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >{{ $field->head_of_family_email ?? '' }}</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <p style="font-size: 8px; margin-bottom: 0;" >Kode wilayah diisi oleh Petugas Kependudukan dan Pencatatan Sipil</p>
        <p style="font-size: 8px; margin-bottom: 0;" >DATA WILAYAH</p>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >9 Kode-Nama Provinsi/<span style="font-style: italic;" >Code-Province</span></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder; border-right: 0;" class="text-center" >5</span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder;" class="text-center" >1</span>
            <span style="width: 20px;" class="text-center" ></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >BALI</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >10 Kode-Nama Kabupaten/Kota/<span style="font-style: italic;" >Code-Regency/Municipalty</span></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder; border-right: 0;" class="text-center" >0</span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder;" class="text-center" >3</span>
            <span style="width: 20px;" class="text-center" ></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >BADUNG</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >11 Kode-Nama Kecamatan/<span style="font-style: italic;" >Code-Sub district</span></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder; border-right: 0;" class="text-center" >0</span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder;" class="text-center" >4</span>
            <span style="width: 20px;" class="text-center" ></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >PETANG</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >12 Kode-Nama Kelurahan/Desa<span style="font-style: italic;" >/Code-Village</span></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder; border-right: 0;" class="text-center" ></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder;" class="text-center" ></span>
            <span style="width: 20px;" class="text-center" ></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >GETASAN</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 1px 0;" >
            <span style="width: 240px; padding-left: 5px;" >13. Nama Dusun/Dukuh/Kampung<span style="font-style: italic;" >/Sub-Village</span></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder; border-right: 0;" class="text-center" ></span>
            <span style="width: 20px; border: 1px solid black; font-weight: bolder;" class="text-center" ></span>
            <span style="width: 20px;" class="text-center" ></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" >BR. UBUD</span><span style="width: 20px;" class="text-center" ></span>
        </div>
        <p style="font-size: 8px; margin-bottom: 0;" ><b>Alamat di Luar Negeri (diisi oleh WNI di Luar Negeri)</b></p>
        <div class="d-flex" style="font-size: 8.5px;" >
            <span style="width: 120px; padding-left: 5px;" >1 Alamat</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" ></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px; padding-left: 5px;" >2 Kota</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" ></span>
            <span style="width: 120px; padding-left: 5px;" >3 Provinsi/Negara Bagian</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" ></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px; padding-left: 5px;" >4 Negara</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px;" class="flex-grow-1" ></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px; padding-left: 5px;" >5 Kode Pos</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 200px; " ></span>
            <span style="width: 150px; text-align: center;" >6 Jumlah Anggota Keluarga</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px; border-right: 0;"></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px;"></span>
            <span style="padding-left: 5px;">Orang</span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px; padding-left: 5px;" >7 Telepon/Handphone</span>
            <span style="width: 10px;" >:</span>
            @for ($i = 0; $i < 12; $i++)
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px; @if($i != 11) border-right: 0; @endif"></span>
            @endfor
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px; padding-left: 5px;" >8 Email</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 240px;"></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <p style="margin-bottom: 0; font-size: 8.5px;" >Diisi Oleh Petugas</p>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px;" >Kode-Nama Negara</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px; border-right: 0;"></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px; border-right: 0;"></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px;"></span>
            <span style="font-weight: bolder; padding-left: 2px; width: 20px;"></span>
            <span class="flex-grow-1" style="border: 1px solid black;" ></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
        <div class="d-flex" style="font-size: 8.5px; margin: 2px 0;" >
            <span style="width: 120px;" >Kode-Nama Perwakilan RI</span>
            <span style="width: 10px;" >:</span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px; border-right: 0;"></span>
            <span style="border: 1px solid black; font-weight: bolder; padding-left: 2px; width: 20px;"></span>
            <span style="font-weight: bolder; padding-left: 2px; width: 40px;"></span>
            <span class="flex-grow-1" style="border: 1px solid black;" ></span>
            <span style="width: 20px;" class="text-center" ></span>
        </div>
    </div>
</div>

<div class="mail_2" style="border: 1px solid black; padding: 7px 10px; margin-top: 20px;" >

    <table style="font-size: 8.5px; width: 100%; font-family: sans-serif;" >
        <tr>
            <td style="border: 1px solid black; text-align: center;" rowspan="2">NO <br> <span style="font-style: italic" >NO</span> </td>
            <td style="border: 1px solid black; text-align: center;" rowspan="2">Nama Lengkap<br> <span style="font-style: italic" >Full Name</span> </td>
            <td style="border: 1px solid black; text-align: center;" colspan="2">Gelar</td>
            <td style="border: 1px solid black; text-align: center;" rowspan="2">Nomor Paspor <br> <span style="font-style: italic" >Passport Number</span> </td>
            <td style="border: 1px solid black; text-align: center;" rowspan="2">Tgl Berakhir Paspor <br> <span style="font-style: italic" >Date of Expire</span> </td>
            <td style="border: 1px solid black; text-align: center;" rowspan="2">Nama Sponsor <br> <span style="font-style: italic" >Sponsor Name</span> </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; text-align: center;" >Depan</th>
            <td style="border: 1px solid black; text-align: center;" >Belakang</th>
        </tr>
        <tr>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >2</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >3</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >4</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >5</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >6</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >7</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->name ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->name ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
        </tr>
        @for ($i = 2; $i < 10; $i++)
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >{{ $i+1 }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
        </tr>
        @endfor
    </table>

    <table style="font-size: 8.5px; width: 100%; font-family: sans-serif; margin: 15px 0;" >
        <tr>
            <td style="border: 1px solid black; text-align: center;">NO <br> <span style="font-style: italic" >NO</span> </td>
            <td style="border: 1px solid black; text-align: center;">Tipe Sponsor<br> <span style="font-style: italic" >Tipe of Sponsor</span> </td>
            <td style="border: 1px solid black; text-align: center;">Alamat Sponsor<br> <span style="font-style: italic" >Sponsor Address</span> </td>
            <td style="border: 1px solid black; text-align: center;">Jenis Kelamin<br> <span style="font-style: italic" >Sex</span> </td>
            <td style="border: 1px solid black; text-align: center;">Tempat Lahir <br> <span style="font-style: italic" >Place of Birth</span> </td>
            <td style="border: 1px solid black; text-align: center;">Tgl, Bln, Thn Lahir <br> <span style="font-style: italic" >Date of Birth</span> </td>
            <td style="border: 1px solid black; text-align: center;">Kewarganegaraan <br> <span style="font-style: italic" >Nationality</span> </td>
            <td style="border: 1px solid black; text-align: center;">No SK <br> <span  >Penetapan WNI</span> </td>
            <td style="border: 1px solid black; text-align: center;">Akte Lahir</td>
        </tr>
        <tr>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >8</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >9</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >10</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >11</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >12</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >13</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >14</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >15</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->gender ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->birthplace ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->format('d/m/Y') : "" }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1->citizenship ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1->birth_certificate ?? '' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->gender ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->birthplace ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->format('d/m/Y') : "" }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2->citizenship ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2->birth_certificate ?? '' }}</td>
        </tr>
        @for ($i = 2; $i < 10; $i++)
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >{{ $i+1 }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
        </tr>
        @endfor
    </table>

    <table style="font-size: 8.5px; width: 100%; font-family: sans-serif;" >
        <tr>
            <td style="border: 1px solid black; text-align: center;">NO <br> <span style="font-style: italic" >NO</span> </td>
            <td style="border: 1px solid black; text-align: center;">Nomor Akte Kelahiran</td>
            <td style="border: 1px solid black; text-align: center;">Gol. Darah<br> <span style="font-style: italic" >Type of Blood</span> </td>
            <td style="border: 1px solid black; text-align: center;">Agama<br> <span style="font-style: italic" >Religion</span> </td>
            <td style="border: 1px solid black; text-align: center;">Nama Organisai Kepercayaan Terhadap<br> TUHAN YANG MAHA ESA </td>
            <td style="border: 1px solid black; text-align: center;">Status<br> <span style="font-style: italic" >Marital Status</span> </td>
            <td style="border: 1px solid black; text-align: center;">Akte <br> Perkawinan</td>
            <td style="border: 1px solid black; text-align: center;">Nomor Akta <br> <span  >Perkawinan</span> </td>
            <td style="border: 1px solid black; text-align: center;">Tanggal <br> <span  >Perkawinan</span> </td>
        </tr>
        <tr>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >16</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >17</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >18</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >19</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >20</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >21</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >22</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >23</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->birth_certificate_number ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->blood_type ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1->religion ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->marriage_status ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >ADA</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ !(empty($field->marriage_date)) ? Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') : '' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->birth_certificate_number ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->blood_type ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2->religion ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->marriage_status ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >ADA</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ !(empty($field->marriage_date)) ? Carbon\Carbon::parse($field->marriage_date)->format('d/m/Y') : '' }}</td>
        </tr>
        @for ($i = 2; $i < 10; $i++)
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >{{ $i+1 }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
        </tr>
        @endfor
    </table>
</div>

<div class="mail_3" style="border: 1px solid black; padding: 7px 10px; margin-top: 20px;" >

    <table style="font-size: 8.5px; width: 100%; font-family: sans-serif;" >
        <tr>
            <td style="border: 1px solid black; text-align: center;">NO <br> <span style="font-style: italic" >NO</span> </td>
            <td style="border: 1px solid black; text-align: center;">Akte Cerai</td>
            <td style="border: 1px solid black; text-align: center;">Nomor Akte Perceraian</td>
            <td style="border: 1px solid black; text-align: center;">Tgl. Perceraian</td>
            <td style="border: 1px solid black; text-align: center;">Status Hubungan Dalam Keluarga</td>
            <td style="border: 1px solid black; text-align: center;">Kel Fisik dan Mental</td>
            <td style="border: 1px solid black; text-align: center;">Penyandang Cacat</td>
            <td style="border: 1px solid black; text-align: center;">Pendidikan Terakhir</td>
            <td style="border: 1px solid black; text-align: center;">Jenis Pekerjaan</td>
            <td style="border: 1px solid black; text-align: center;">Nomor ITAS/ITAP</td>
            <td style="border: 1px solid black; text-align: center;">Tempat Terbit ITAS/ITAP</td>
        </tr>
        <tr>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >24</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >25</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >26</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >27</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >28</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >29</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >30</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >31</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >32</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >33</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >KEPALA KELUARGA</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1->education ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" colspan="2" >{{ $field->subject_1->job ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" >ISTRI</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2->education ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" colspan="2" >{{ $field->subject_2->job ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
        </tr>
        @for ($i = 2; $i < 10; $i++)
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >{{ $i+1 }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
        </tr>
        @endfor
    </table>

    <table style="font-size: 8.5px; width: 100%; font-family: sans-serif; margin-top: 20px;" >
        <tr>
            <td style="border: 1px solid black; text-align: center;">NO <br> <span style="font-style: italic" >NO</span> </td>
            <td style="border: 1px solid black; text-align: center;">Tgl. Terbit <br>ITAS/ITAP</td>
            <td style="border: 1px solid black; text-align: center;">Tgl. Akhir <br>ITAS/ITAP</td>
            <td style="border: 1px solid black; text-align: center;">Tempat Datang <br>Pertama</td>
            <td style="border: 1px solid black; text-align: center;">Tanggal Kedatangan <br>Pertama</td>
            <td style="border: 1px solid black; text-align: center;">NIK Ibu</td>
            <td style="border: 1px solid black; text-align: center;">Nama Ibu</td>
            <td style="border: 1px solid black; text-align: center;">NIK Ayah</td>
            <td style="border: 1px solid black; text-align: center;">Nama Ayah</td>
        </tr>
        <tr>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >34</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >35</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >36</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >37</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >38</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >39</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >40</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center; background-color: rgb(146, 146, 146);" >41</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >1</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1_mother->nik ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1_mother->name ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1_father->nik ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1_father->name ?? '' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2_mother->nik ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2_mother->name ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2_father->nik ?? '' }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2_father->name ?? '' }}</td>
        </tr>
        @for ($i = 2; $i < 10; $i++)
        <tr>
            <td style="border: 1px solid black; height: 15px; text-align: center;" >{{ $i+1 }}</td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
        </tr>
        @endfor
    </table>

    <table style="font-family: sans-serif; font-size: 8px; width: 100%; margin-top: 15px;" >
        <tr>
            <td colspan="2" style="padding: 0;" >Mengetahui</td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 0;" >Kepala Dinas Pendudukan</td>
        </tr>
        <tr>
            <td style="padding: 0; width: 75%;" >dan Pencatatan Sipil Kabupaten Badung</td>
            <td>Kepala Keluarga/Head of Family</td>
        </tr>
        <tr>
            <td colspan="2" style="height: 50px;" ></td>
        </tr>
        <tr>
            <td style="padding: 0; width: 75%;" ><div style="background-color: #000; width: 130px; height: 1px;" ></div></td>
            <td><b><u>{{ $field->subject_1->name ?? '' }}</u></b></td>
        </tr>
        <tr>
            <td style="padding: 0;" colspan="2" >Nip.</td>
        </tr>
    </table>

</div>