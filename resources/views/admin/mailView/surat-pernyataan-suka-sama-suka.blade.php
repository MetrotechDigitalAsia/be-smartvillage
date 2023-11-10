<p style="text-align: center; margin-bottom: 50px;" ><u>SURAT PERNYATAAN SUKA SAMA SUKA</u></p>
<p style="margin-bottom: 5px;" >Yang bertanda tangan dibawah ini:</p>
<ol type="I" >
    <li  >
        <p style="margin-bottom: 5px;" ><u>CALON MEMPELAI LAKI - LAKI:</u></p>
        <table>
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
                <td>: {{ $field->subject_1->birthplace ?? '' }},{{ !empty($field->subject_1->birthdate) ? Carbon\Carbon::parse($field->subject_1->birthdate)->translatedFormat('d F Y') : '' }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: {{ $field->subject_1->religion ?? '' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ !empty($field->subject_1->citizenship) ? $field->subject_1->citizenship == 'WNI' ? 'Warga Negara Indonesia (WNI)' : 'Warga Negara Asing (WNA)' : '' }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $field->subject_1->job ?? '' }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>: {{ $field->subject_1->nik ?? '' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $field->subject_1->address ?? '' }}</td>
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
                <td>: {{ $field->subject_2->birthplace ?? '' }}, {{ !empty($field->subject_2->birthdate) ? Carbon\Carbon::parse($field->subject_2->birthdate)->translatedFormat('d F Y') : '' }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: {{ $field->subject_2->religion ?? '' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ !empty($field->subject_2->citizenship) ? $field->subject_2->citizenship == 'WNI' ? 'Warga Negara Indonesia (WNI)' : 'Warga Negara Asing (WNA)' : '' }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $field->subject_2->job ?? '' }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>: {{ $field->subject_2->nik ?? '' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $field->subject_2->address ?? '' }}</td>
            </tr>
        </table>
    </li>
</ol>
<p>Dengan ini menyatakan bahwa Tata Cara serta Pencatatan Perkawinan, kami lakukan berdasarkan atas suka sama suka, saling mencintai tanpa ada unsur paksaan dari pihak manapun juga.</p>
<p>Demikian surat pernyataan ini dibuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>
<p style="text-align: center; margin-bottom: 0; margin-top: 60px;" >Mangupura, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
<p style="text-align: center;" >Yang Membuat Pernyataan,</p>
<table style="margin: 0 auto; width: 100%; text-align: center;" >
    <tr>
        <td style="padding-bottom: 60px;" >Mempelai Perempuan,</td>
        <td style="width: 10%;" >
        </td>
        <td style="padding-bottom: 60px;" >Mempelai Laki - Laki,</td>
    </tr>
    <tr>
        <td><u>{{ $field->subject_2->name  ?? ''}}</u></td>
        <td style="width: 10%; position: relative;" >
            <div style="border: 1px solid #000; position: absolute; top: -50px; left: -30px; width: 100px; padding: 5px 0;" >
                Materai
                <br>
                Rp. 10.000
            </div>
        </td>
        <td><u>{{ $field->subject_1->name ?? '' }}</u></td>
    </tr>
</table>
<div style="height: 200px;" ></div>