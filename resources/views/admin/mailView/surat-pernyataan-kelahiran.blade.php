<div class="mail-header-pernyataan-lahir" style="text-align: center;" >
    <h4><u>Surat Pernyataan</u></h3>
</div>
<div class="mail-body-pernyataan-lahir" style="padding-top: 40px; padding-left: 30px; padding-bottom: 100px;" >
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
        <tr>
            <td>Status</td>
            <td>: {{ $data->applicant_address }}</td>
        </tr>
    </table>
    <p  >Menyatakan dengan sebenarnya bahwa :</p>
    <table style="margin-left: 50px; margin-bottom: 50px;" >
        <tr>
            <td style="width: 170px;" >Nama</td>
            <td>: {{ $field->child_name }}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl. Lahir:</td>
            <td>: {{ $field->child_birthplace }}, {{ $field->child_birth_date  }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{ $field->child_sex }}</td>
        </tr>
        <tr>
            <td>Anak yang ke-</td>
            <td>: {{ $field->birth_count }}</td>
        </tr>
    </table>
    <p style="text-indent: 60px;" >Belum pernah dicatatkan kelahiranya pada Kantor Catatan Sipil ditempat kelahirannya ataupun ditempat lainnya, baik dalam daftar kelahiran yang tidak terlambat, maupun kelahiran terlambat, dan kelahiran terlambat tersebut melebihi 60 hari hingga melebihi 1 (satu) tahun berdasarkan surat keterangan Dokter/Bidan/Rumah Sakit Nomor :__ tanggal __ untuk dapat dicatatkan di Kabupaten Badung. :</p>
    <table style="width: 100%;" >
        <tr>
            <td style="width: 50%;" ></td>
            <td style="width: 50%;" >
                Mangupura, {{ Carbon\Carbon::now()->translatedFormat('l, F d, Y') }}
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
                <img style="position: absolute; width: 200px; height: 70px; left: 0px; top: 0px; object-fit: contain;" src="{{ asset('storage/'. $data->signature) }}" alt="">
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