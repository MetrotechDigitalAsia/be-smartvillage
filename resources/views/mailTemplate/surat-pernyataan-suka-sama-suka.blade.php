<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pernyataan Suka Sama Suka</title>
</head>
<body style="padding-left: 35px; padding-right: 35px;" >
    <p style="text-align: center; margin-bottom: 50px;" ><u>SURAT PERNYATAAN SUKA SAMA SUKA</u></p>
    <p style="margin-bottom: 10px;" >Yang bertanda tangan dibawah ini:</p>
    <ol type="I" style="padding: 0; padding-left: 20px; margin: 0;" >
        <li style="padding: 0;" >
            <p style="margin:0; margin-bottom: 5px;" ><u>CALON MEMPELAI LAKI - LAKI:</u></p>
            <table >
                <tr>
                    <td style="width: 150px;" >Nama</td>
                    <td>: {{ $field->subject_1->name ?? '' }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{ $field->subject_1->gender ?? '' }}</td>
                </tr>
                <tr>
                    <td>Tempat/Tgl. Lahir</td>
                    <td>: {{ $field->subject_1->banjar ?? '' }},{{ $field->subject_1->birthplace ?? '' }},{{ Carbon\Carbon::parse($field->subject_1->birthdate)->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: {{ $field->subject_1->religion ?? '' }}</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>: {{ $field->subject_1->citizenship == 'WNI' ? 'Warga Negara Indonesia (WNI)' : 'Warga Negara Asing (WNA)' }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $field->subject_1->job }}</td>
                </tr>
                <tr>
                    <td>Nomor KTP</td>
                    <td>: {{ $field->subject_1->nik }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $field->subject_1->address }}</td>
                </tr>
            </table>
        </li>
        <li>
            <p style="margin-bottom: 5px; margin-top: 20px;" ><u>CALON MEMPELAI PEREMPUAN:</u></p>
            <table>
                <tr>
                    <td style="width: 150px;" >Nama</td>
                    <td>: {{ $field->subject_2->name ?? '' }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{ $field->subject_2->gender ?? '' }}</td>
                </tr>
                <tr>
                    <td>Tempat/Tgl. Lahir</td>
                    <td>: {{ $field->subject_2->banjar ?? '' }},{{ $field->subject_2->birthplace ?? '' }},{{ Carbon\Carbon::parse($field->subject_2->birthdate)->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: {{ $field->subject_2->religion ?? '' }}</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>: {{ $field->subject_2->citizenship == 'WNI' ? 'Warga Negara Indonesia (WNI)' : 'Warga Negara Asing (WNA)' }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{ $field->subject_2->job }}</td>
                </tr>
                <tr>
                    <td>Nomor KTP</td>
                    <td>: {{ $field->subject_2->nik }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $field->subject_2->address }}</td>
                </tr>
            </table>
        </li>
    </ol>
    <p style="line-height: 23px;" >Dengan ini menyatakan bahwa Tata Cara serta Pencatatan Perkawinan, kami lakukan berdasarkan atas suka sama suka, saling mencintai tanpa ada unsur paksaan dari pihak manapun juga.</p>
    <p style="margin-top:25px; margin-bottom: 35px;" >Demikian surat pernyataan ini dibuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>
    <p style="text-align: center; margin-bottom: 0;" >Mangupura, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
    <p style="text-align: center; margin-top: 5px;" >Yang Membuat Pernyataan,</p>
    <table style="margin: 0 auto; width: 100%; text-align: center;" >
        <tr>
            <td style="padding-bottom: 70px;" >Mempelai Perempuan,</td>
            <td style="width: 10%;" >
            </td>
            <td style="padding-bottom: 70px;" >Mempelai Laki - Laki,</td>
        </tr>
        <tr>
            <td><u>{{ $field->subject_2->name }}</u></td>
            <td style="width: 10%; position: relative;" >
                <div style="border: 1px solid #000; position: absolute; top: -50px; left: -30px; width: 100px; padding: 5px 0;" >
                    Materai
                    <br>
                    Rp. 10.000
                </div>
            </td>
            <td><u>{{ $field->subject_1->name }}</u></td>
        </tr>
    </table>
    <div style="height: 200px;" ></div>

</body>
</html>

