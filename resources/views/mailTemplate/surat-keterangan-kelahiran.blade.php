@extends('mailTemplate.mail')

@section('mail-body')
@php
    $field = json_decode($data->field)    
@endphp
<div class="mail-body" style="font-size: 14px;" >
    <p class="mail-type" >
        <b style="text-transform: uppercase;" ><u>{{ $data->title }}</u></b>
    </p>
    <p class="mail-num" >Nomor : {{ $data->mail_number }}</p>
    <p class="long" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
    <table style="margin: 15px 0; margin-left: 30px; line-height: 13px;" >
        <tr>
            <td >1.</td>
            <td style="width: 180px;" >Nama</td>
            <td style="text-transform: capitalize;" >: {{ $field->child_name }}</td>
        </tr>
        <tr>
            <td></td>
            <td >jenis kelamin</td>
            <td>: {{ $field->child_sex }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tempat/Tgl.lahir</td>
            <td style="text-transform: capitalize;" >: {{ $field->child_birthplace }}, {{ Carbon\Carbon::parse($field->child_birth_date)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td></td>
            <td>NIK</td>
            <td>: -</td>
        </tr>
        <tr>
            <td></td>
            <td>Nomor KK</td>
            <td>: {{ $field->NO_KK }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->address }}</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td >2.</td>
            <td >Nama Ayah</td>
            <td>: {{ $field->husband->name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->husband->age }} Tahun</td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>: {{ $field->husband->job }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->address }}</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td  >3.</td>
            <td >Nama ibu</td>
            <td>: {{ $field->wife->name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->wife->age }} Tahun</td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>: {{ $field->wife->job }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->address }}</td>
        </tr>
    </table>
    <p class="long" >Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Kutipan Akta Kelahiran.</p>
    <p style="text-align: center; margin: 20px 0;" >Saksi Saksi</p>
    <table style="width: 100%;" >
        <tr>
            <td style="width: 50%;" >
                <table style="widows: 100%;" >
                    <tr>
                        <td >1.</td>
                        <td >Nama Saksi</td>
                        <td>: {{ $data->saksi_1->name }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $data->saksi_1->age }} Tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $data->saksi_1->job }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $data->saksi_1->address }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_1->name }}</u></p></td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%;" >
                <table>
                    <tr>
                        <td>2.</td>
                        <td >Nama Saksi</td>
                        <td>: {{ $data->saksi_2->name }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $data->saksi_2->age }} Tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $data->saksi_2->job }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $data->saksi_2->address }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_2->name }}</u></p></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @include('partials.mailFooter')
</div>
@endsection