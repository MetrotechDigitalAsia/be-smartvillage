<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pernyataan Meninggal</title>
</head>
<body>

    <div class="mail-header-pernyataan-lahir" style="text-align: center;" >
        <h4 style="font-size: 18px; font-weight: normal;" ><u>SURAT PERNYATAAN</u></h3>
    </div>

    <div class="mail-body-pernyataan-lahir" style="padding-top: 40px; padding-left: 30px; padding-bottom: 100px; padding-right: 0px;" >
        <p>Yang bertanda tangan di bawah ini :</p>
        <table style="margin-left: 50px; margin-bottom: 30px;" >
            <tr>
                <td style="width: 170px;" >Nama</td>
                <td>: {{ $data->applicant_name }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>: {{ $data->applicant_age }} Tahun</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $data->applicant_job }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $data->applicant_address }}</td>
            </tr>
        </table>
        <p  >Menyatakan dengan sebenarnya bahwa :</p>
        <table style="margin-left: 50px; margin-bottom: 50px;" >
            <tr>
                <td style="width: 170px;" >Nama</td>
                <td style="text-transform: capitalize;" >: {{ $data->subject->name }}</td>
            </tr>
            <tr>
                <td>Tempat/Tgl. Lahir: </td>
                <td style="text-transform: capitalize;" >: {{ $data->subject->birthplace }}, {{ Carbon\Carbon::parse($data->subject->birthdate)->translatedFormat('d-m-Y')  }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $data->subject->gender }}</td>
            </tr>
            <tr>
                <td>Anak yang ke-</td>
                <td>: {{ $field->child_to ?? '' }}</td>
            </tr>
        </table>
        <p style="text-indent: 0px; text-align: justify;" >Belum pernah dicatatkan kematiannya pada Kantor Pencatatan Sipil ditempat kejadian ataupun ditempat lainnya, baik dalam daftar kematian  tidak terlambat, maupun kematian terlambat.</p>
        <p style="text-indent: 0px; text-align: justify;" >Demikian surat pernyataan ini dibuat apabila dikemudian hari ternyata tidak benar sesuai pelaporan kejadian, dapat dan siap dihadapkan didepan pengadilan sesuai dengan hukum yang berlaku.</p>
        <table style="width: 100%; margin-top: 50px;" >
            <tr>
                <td style="width: 50%;" ></td>
                <td style="width: 50%;" >
                    Mangupura, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 50%;" ></td>
                <td style="width: 50%;" >
                    Yang membuat pernyataan,
                </td>
            </tr>
            <tr>
                <td style="width: 50%;" ></td>
                <td style="width: 50%; position: relative; height: 60px;" >
                    @if (!is_null($data->user_id))
                    <img style="position: absolute; width: 200px; height: 70px; left: 0px; top: 0px; object-fit: contain;" src="{{ public_path(). '/storage/'. $data->signature }}" alt="">
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;" ></td>
                <td style="width: 50%;" >
                    <u>{{ $data->applicant_name }}</u>
                </td>
            </tr>
        </table>
    </div>

    
</body>
</html>