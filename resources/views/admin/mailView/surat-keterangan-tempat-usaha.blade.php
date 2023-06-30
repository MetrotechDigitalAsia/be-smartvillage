<h3 class="text-center" style="text-transform: uppercase;" >{{ $data->title }}</h3>
<h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
<p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas {{ $data->applicant_banjar }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
<table class="align-self-start ml-10 mb-5 mt-1" style="width: 100%;" >
    <tr>
        <td class="w-150px" >Nama</td>
        <td>: {{ $data->applicant_name }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: {{ $data->applicant_sex ?? '' }}</td>
    </tr>
    <tr>
        <td>Tempat/Tgl.lahir</td>
        <td>: {{ $data->applicant_birthplace }}, {{ Carbon\Carbon::parse($data->applicant_birthdate)->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>: {{ $data->applicant_citizenship ?? '' }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>: {{ $data->applicant_religion ?? '' }}</td>
    </tr>
    <tr>
        <td>Nomor KTP</td>
        <td>: {{ $data->applicant_nik }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: {{ $data->applicant_job ?? '' }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: {{ $data->applicant_address ?? '' }}</td>
    </tr>
    <tr>
        <td>Nama Usaha</td>
        <td>: {{ $field->business_name }}</td>
    </tr>
    <tr>
        <td>NPWP</td>
        <td>: {{ $field->npwp }}</td>
    </tr>
    <tr>
        <td>Alamat Usaha</td>
        <td>: {{ $field->business_address }}</td>
    </tr>
</table>
<p class="text-justify" >Adalah salah satu warga desa kami yang bertempat tinggal pada alamat tersebut di atas dan berdasarkan pengetahuan kami hingga surat keterangan ini dikeluarkan memang benar yang bersangkutan memiliki usaha dibidang : “{{ $field->business_name }}”</p>
<p class="text-justify" >Demikian surat keterangan usaha ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>