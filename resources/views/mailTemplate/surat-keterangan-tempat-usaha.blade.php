@extends('mailTemplate.mail')
@section('mail-body')
@php
    $field = json_decode($data->field)    
@endphp
<div class="mail-body" style="font-size: 14px;">
    <p class="mail-type" >
        <b style="text-transform: uppercase;" ><u>{{ $data->title }}</u></b>
    </p>
    <p class="mail-num" >Nomor : {{ $data->mail_number }}</p>
    <p class="long" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
    <table style="width: 100%; margin: 15px 0; margin-left: 16px;" >
        <tr>
            <td style="width: 200px; min-width: unset; max-width: unset;" >Nama</td>
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
    <p class="long" >Adalah salah satu warga desa kami yang bertempat tinggal pada alamat tersebut di atas dan berdasarkan pengetahuan kami hingga surat keterangan ini dikeluarkan memang benar yang bersangkutan memiliki usaha dibidang : “{{ $field->business_name }}”</p>
    <p style="text-align: justify; text-indent: 40px; margin-top: 15px;" >Demikian surat keterangan usaha ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
    @include('partials.mailFooter')
</div>
@endsection