<h3 class="text-center" style="text-transform: uppercase;" >{{ $data->title }}</h3>
<h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
<p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
<table class="align-self-start ml-10 mb-5 mt-1" style="width: 100%;" >
    <tr>
        <td class="w-150px" >Nama</td>
        <td>: {{ $field->applicant->name }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: {{ $field->applicant->sex }}</td>
    </tr>
    <tr>
        <td>Tempat/Tgl.lahir</td>
        <td>: {{ $field->applicant->birth_place }}, {{ Carbon\Carbon::parse($field->applicant->birth_date)->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>: {{ $field->applicant->citizenship }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>: {{ $field->applicant->religion ?? '' }}</td>
    </tr>
    <tr>
        <td>Nomor KTP</td>
        <td>: {{ $field->applicant->nik }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: {{ $field->applicant->job }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: {{ $field->applicant->address }}</td>
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