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
    <table style="width: 100%; margin: 15px 0; margin-left: 16px;" >
        <tr>
            <td class="w-140px" >Nama</td>
            <td style="text-transform: capitalize; !important" >: {{ $data->subject->name }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{ $data->subject->gender ?? '' }}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl.lahir</td>
            <td style="text-transform: capitalize; !important" >: {{ $data->subject->birthplace.', '. Carbon\Carbon::parse($data->subject->birthdate)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>: {{ $data->subject->citizenship == 'WNI' ? "Warga Negara Indonesia (WNI)" : "Warga Negara Asing (WNA)" }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{ $data->subject->religion }}</td>
        </tr>
        <tr>
            <td>No. KTP</td>
            <td>: {{ $data->subject->nik }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{ $data->subject->job }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $data->subject->address }}</td>
        </tr>
    </table>
    <p style="text-align: justify; margin-top: ;" >Orang yang namanya tersebut di atas adalah memang benar telah meninggal pada hari {{  Carbon\Carbon::parse($field->date_of_death)->translatedFormat('l') }}, tanggal {{  Carbon\Carbon::parse($field->date_of_death)->translatedFormat('d F Y') }}, karna {{ $field->cause_of_death }} di {{ $field->place_of_death }}  </p>
    <p style="text-align: justify; margin-top: 17px;" >Demikian Surat Keterangan Meninggal ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Akta Kematian.</p>
    <p style="text-align: center; margin: 20px 0;">Saksi-Saksi :</p>
    <table style="width: 100%;" >
        <tr>
            <td style="width: 50%;" >
                <table style="widows: 100%;" >
                    <tr>
                        <td >1.</td>
                        <td >Nama Saksi</td>
                        <td>: {{ $data->saksi_1->name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $data->saksi_1->age ?? '' }} Tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $data->saksi_1->job ?? '' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $data->saksi_1->address ?? '' }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</u></p></td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%;" >
                <table>
                    <tr>
                        <td>2.</td>
                        <td >Nama Saksi</td>
                        <td>: {{ $data->saksi_2->name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $data->saksi_2->age ?? '' }} Tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $data->saksi_2->job ?? '' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $data->saksi_2->address ?? '' }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center; padding-top: 50px;" ><p><u>{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</u></p></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @include('partials.mailFooter')
</div>

@endsection