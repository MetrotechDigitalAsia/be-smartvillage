<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat F1-01</title>
    <style>
        * {
            font-family: 'sans-serif';
        }
    </style>
</head>
<body>

    <div class="mail_1" style="border: 1px solid black; padding: 0px 30px; padding-bottom: 10px;" >

        <div class="f1-01-header" style="font-family: sans-serif; position: relative;" >
            <img style="position: absolute; width: 100px; left: 270px; top: 10px;" src="{{ public_path('assets/be/media/f1-01.png') }}" alt="">
            <h3 style="text-align: center; font-weight: bolder; margin-bottom: 2px; font-size: 14.5px;" >PEMERINTAH KABUPATEN BADUNG</h3>
            <h4 style="text-align: center; font-weight: bold; margin-bottom: 2px; margin-top: 0; font-size: 14.5px;" >DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</h4>
            <h4 style="text-align: center; font-weight: bold; margin-bottom: 5px; margin-top: 0; font-size: 14.5px;" >PUSAT PEMERINTAHAN MANGUPRAJA MANDALA</h4>
            <p style="text-align: center; margin-bottom: 5px; margin-top: 0; font-size: 10.5px;" >JALAN RAYA SEMPIDI MENGWI - BADUNG BALI TELP. (0361) 8947979</p>
        </div>
        <p style="text-align: center; font-size: 10.5px; margin-bottom: 0;" ><b>FORMULIR BIODATA PENDUDUK</b></p>
        <p style="text-align: center; background-color: #000; color: #fff; font-size: 10.5px; padding: 1px 0; margin: 0;" >cetak dan jelas serta mengikuti 'TATA CARA PENGISIAN FORMULIR'</p>
        <p style="margin-bottom: 8px; font-size: 10.5px; margin-top: 0;" >Pilih salah satu:</p>
        <ul style="list-style-type: none; font-size: 10.5px; margin-top: 0; margin-left: 35px;" >
            <li>Input Data Kepala Keluarga dan Anggota Keluarga WNI</li>
            <li style="margin: 3px 0;" >Input Data Kepala Keluarga dan Anggota Orang Asing</li>
            <li>Input Data Kepala Keluarga dan Anggota WNI Di Luar Negeri</li>
        </ul>
        <p style="margin-bottom:2px; font-size: 10.5px;" >DATA KEPALA KELUARGA:</p>
        <table style="font-size: 10.5px; width: 100%;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >1 Nama Kepala Keluarga/Name of Head of the Family</td>
                <td colspan="5" style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1;" >{{ $field->head_of_family_name ?? '' }}</td>
                <td style="width: 20px;" ></td>
            </tr>            
        </table>
        <table style="font-size: 10.5px; width: 100%; margin: 3px 0;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >2 Alamat/ Address</td>
                <td colspan="5" style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1;" >{{ $field->banjar ?? '' }}</td>
                <td style="width: 20px;" ></td>
            </tr> 
        </table>
        <table style="font-size: 10.5px; width: 100%;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >3 Kode Pos/ Post Code</td>
                @for ($i = 0; $i < 4; $i++)
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >0</td>
                @endfor
                <td style="padding: 2px 1px; text-align: center;" >4.RT</td>
                @for ($i = 0; $i < 3; $i++)
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                @endfor
                <td style=" padding: 2px 1px; text-align: center;" >5.RW</td>
                @for ($i = 0; $i < 3; $i++)
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                @endfor
                <td style=" padding: 2px 2px;" >6. JML ANGGOTA KELUARGA</td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: 20px; " >Org</td>
            </tr>   
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >7 Telepone/Telephone number/Handphone</td>
                <td colspan="5" style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1;" >{{ $field->head_of_family_phone ?? '' }}</td>
                <td style="width: 20px;" ></td>
            </tr>            
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px; margin-bottom: 0;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >8 Email</td>
                <td colspan="5" style="border: 1.5px solid black; font-weight: bold; padding: 2px 1;" >{{ $field->head_of_family_email ?? '' }}</td>
                <td style="width: 20px;" ></td>
            </tr>            
        </table>
        <p style="margin-bottom:3px; font-size: 10.5px; margin-top: 5px;" >Kode Wilayah diisi oleh Petugas Kependudukan dan Pencatatan Sipil</p>
        <p style="margin-bottom:2px; font-size: 10.5px; margin-top: 4px;" >DATA WILAYAH</p>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >9 Kode-Nama Provinsi/<span style="font-style: italic;" >Code-Province</span> </td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >5</td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >1</td>
                <td style="text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: max-content; border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 3px;" >BALI</td>
                <td style="width: 20px;" ></td>
            </tr>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >10 Kode-Nama Kabupaten/Kota/<span style="font-style: italic;" >Code-Regency/Minicipalty</span> </td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >0</td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >3</td>
                <td style="text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: max-content; border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 3px;" >BADUNG</td>
                <td style="width: 20px;" ></td>
            </tr>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >11 Kode-Nama Kecamatan/<span style="font-style: italic;" >Code-Sub District</span> </td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >0</td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" >4</td>
                <td style="text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: max-content; border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 3px;" >PETANG</td>
                <td style="width: 20px;" ></td>
            </tr>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >12 Kode-Nama Kelurahan/Desa/<span style="font-style: italic;" >Code-Village</span> </td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" ></td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" ></td>
                <td style="text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: max-content; border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 3px;" >Getasan</td>
                <td style="width: 20px;" ></td>
            </tr>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <tr>
                <td style="width: 400px; padding-left: 25px;" >13 Nama Dusun/Dukuh/Kampung/<span style="font-style: italic;" >Sub-Village</span> </td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" ></td>
                <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px; text-align: center;" ></td>
                <td style="text-transform: uppercase; font-weight: bold; padding: 2px 1px; width: 35px;" ></td>
                <td style="width: max-content; border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 3px;" >{{ $field->banjar ?? "" }}</td>
                <td style="width: 20px;" ></td>
            </tr>
        </table>
        <p style="margin-bottom:2px; font-size: 10.5px; margin-top: 0;" ><b>Alamat di Luar Negeri (diisi oleh WNI di luar negeri)</b></p>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >1 Alamat</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center;" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >2 Kota</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center;" ></td>
            <td style="padding: 2px 3px; text-align: lefet; width: 170px;" >3 Provinsi/Negara Bagian</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center;" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >4 Negara</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center;" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >5 Kode Pos</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center;" ></td>
            <td style="padding: 2px 3px; text-align: center; width: 210px;" >6 Jumlah Anggota Keluarga</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px;" ></td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px;" ></td>
            <td style="padding: 2px 3px; text-align: left; width: 345px;" >Orang</td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >7 Telepon/Handphone</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            @for ($i = 0; $i < 12; $i++)
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            @endfor
            <td style="" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 175px; padding-left: 25px;" >8 Email</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 458px; height: 10px;" ></td>
            <td style="" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <p style="margin-bottom:2px; font-size: 10.5px; margin-top: 0;" >Diisi oleh petugas</p>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 200px;" >Kode-Nama Negara</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            @for ($i = 0; $i < 3; $i++)
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            @endfor
            <td style=" text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; height: 10px;" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
        <table style="font-size: 10.5px; width: 100%; margin-top: 3px;" cellspacing="0" >
            <td style="width: 200px;" >Kode-Nama Perwakilan RI</td>
            <td style="width: 25px; font-weight: bold;" >:</td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            <td style=" text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            <td style=" text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; width: 35px; height: 10px;" ></td>
            <td style="border: 1.5px solid black; text-transform: uppercase; font-weight: bold; padding: 2px 1px; text-align: center; height: 10px;" ></td>
            <td style="width: 20px; color: #fff; padding: 2px 1px;" >0</td>
        </table>
    </div>

    <div class="mail_2" style="border: 1px solid black; padding: 10px 30px; padding-bottom: 10px;" >
        <table style="font-size: 10px; width: 100%; font-family: sans-serif;" cellspacing="0" >
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_1->name ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_2->name ?? '' }}</td>
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

        <table style="font-size: 10px; width: 100%; font-family: sans-serif; margin: 10px 0;" cellspacing="0" >
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_1->birthplace ?? '' }}</td>
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_2->birthplace ?? '' }}</td>
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

        <table style="font-size: 10px; width: 100%; font-family: sans-serif;" cellspacing="0" >
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_1->birth_certificate ?? '' }}</td>
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-align: center;" >{{ $field->subject_2->birth_certificate ?? '' }}</td>
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

    <div class="mail_3" style="border: 1px solid black; padding: 15px 30px; padding-bottom: 10px;" >

        <table cellspacing="0" style="font-size: 10px; width: 100%; font-family: sans-serif;" >
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
    
        <table cellspacing="0" style="font-size: 10px; width: 100%; font-family: sans-serif; margin-top: 10px;" >
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
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1_mother->nik ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_1_mother->name ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_1_father->nik ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_1_father->name ?? '' }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; height: 15px; text-align: center;" >2</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" ></td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2_mother->nik ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_2_mother->name ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px;" >{{ $field->subject_2_father->nik ?? '' }}</td>
                <td style="font-weight: bold; border: 1px solid black; height: 15px; text-transform: uppercase;" >{{ $field->subject_2_father->name ?? '' }}</td>
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

        <table style="font-family: sans-serif; font-size: 10px; width: 100%; margin-top: 15px;" >
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

        <p style="font-size: 10.5px; margin-bottom: 0;" >PERNYATAAN</p>
        <p style="font-size: 10.5px; margin-bottom: 0; margin-top: 1px;" >Demikian formulir ini saya buat dengan sesungguhnya, apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya</p>
        <p style="font-size: 10.5px; margin-bottom: 0; margin-top: 1px;" >berdasarkan peraturan perundang-undangan yang berlaku, saya bersedia dikenakan sanksi sesuai ketentuan</p>

    </div>
    
</body>
</html>