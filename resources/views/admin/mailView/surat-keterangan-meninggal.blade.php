<h3 class="text-center" style="text-transform: uppercase;" >{{ $data->title }}</h3>
<h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
<p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas {{ $data->applicant_banjar }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
<table class="align-self-start ml-25" >
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
        <td>: {{ $data->subject->citizenship }}</td>
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
    <tr>
        <td class="py-2"> </td>
    </tr>
</table>
<p class="text-justify mt-10" >Orang yang namanya tersebut di atas adalah memang benar telah meninggal pada hari {{  Carbon\Carbon::parse($data->subject->birthdate)->translatedFormat('l') }}, tanggal {{  Carbon\Carbon::parse($data->subject->date_of_date)->translatedFormat('d F Y') }}, karna sakit di Br. {{ $data->subject->banjar }} </p>
<p class="text-justify mt-2" >Demikian Surat Keterangan Meninggal ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Akta Kematian.</p>
<p class="text-center mt-3" >Saksi-Saksi :</p>
<div class="row mt-5" style="width: 100%;" >
    <div class="col">
        <table >
            <tr>
                <td class="w-20px" >1.</td>
                <td >Nama Saksi</td>
                <td>: {{ $data->saksi_1->name ?? '' }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Umur</td>
                <td>: {{ $data->saksi_1->age ?? '-'}} Tahun</td>
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
        </table>
        <div class="d-flex justify-content-center">
            <u class="saksi" style="margin-top: 50px;" >{{ $data->saksi_1->name ?? 'belum ada data saksi' }}</u>
        </div>
    </div>
    <div class="col">
        <table >
            <tr>
                <td class="w-20px" >2.</td>
                <td>Nama Saksi</td>
                <td>: {{ $data->saksi_2->name ?? '' }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Umur</td>
                <td>: {{ $data->saksi_2->age ?? '-' }} Tahun</td>
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
        </table>
        <div class="d-flex justify-content-center">
            <u class="saksi" style="margin-top: 50px;" >{{ $data->saksi_2->name ?? 'belum ada data saksi' }}</u>
        </div>
    </div>
</div>