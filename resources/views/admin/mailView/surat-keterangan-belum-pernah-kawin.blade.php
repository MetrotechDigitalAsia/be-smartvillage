@include('admin.mailView.mail-header')
<div class="mail-body pt-8 px-8 text-center d-flex flex-column align-items-center pb-10">

    <h3 class="text-center" style="text-transform: uppercase;" >SURAT KETERANGAN BELUM PERNAH KAWIN/NIKAH</h3>
    <h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
    <p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas {{ $data->applicant_banjar }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
    <table class="align-self-start ml-10 mb-5 mt-1" style="width: 100%;" >
        <tr>
            <td class="w-150px" >Nama</td>
            <td style="text-transform: capitalize;" >: {{ $subject->name }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td style="text-transform: capitalize;" >: {{ $subject->gender }}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl.lahir</td>
            <td style="text-transform: capitalize;" >: {{ $subject->birthplace ?? '' }}, {{ Carbon\Carbon::parse($subject->birth_date ?? '')->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>: {{ $subject->citizenship ?? '' }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td style="text-transform: capitalize;" >: {{ $subject->religion ?? '' }}</td>
        </tr>
        <tr>
            <td>Nomor KTP</td>
            <td>: {{ $subject->nik }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{ $subject->job ?? '' }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td style="text-transform: capitalize;" >: {{ $subject->address ?? '' }}</td>
        </tr>
    </table>

    <p class="text-justify mt-3" style="text-indent: 0;" >adalah salah satu warga desa kami yang bertempat tinggal pada alamat tersebut diatas dan berdasarkan pengetahuan kami hingga surat keterangan ini dikeluarkan, memang benar orang tersebut diatas belum pernah Kawin/Nikah.</p>
    <p class="text-justify mt-4" style="text-indent: 0;" >Demikian Surat Keterangan Belum Pernah Kawin/Nikah ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan pembuatan Akta Perkawinan.</p>

    <p class="mt-10" >Saksi Saksi</p>
    <div class="row" style="width: 100%;" >
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

    @include('admin.mailView.mail-footer')
</div>