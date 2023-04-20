<h3 class="text-center" style="text-transform: uppercase;" >{{ $data->title }}</h3>
    <h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
    <p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
    <table class="align-self-start ml-10" >
        <tr>
            <td class="w-20px" >1.</td>
            <td class="w-140px" >Nama</td>
            <td>: {{ $field->child_name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>jenis kelamin</td>
            <td>: {{ $field->sex }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tempat/Tgl.lahir</td>
            <td>: {{ $field->birthplace. ', '. $field->birth_date }}</td>
        </tr>
        <tr>
            <td></td>
            <td>NIK</td>
            <td>: -</td>
        </tr>
        <tr>
            <td></td>
            <td>Nomor KK</td>
            <td>: </td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->address }}</td>
        </tr>
        <tr>
            <td class="py-2"> </td>
        </tr>
        <tr>
            <td class="w-20px" >2.</td>
            <td class="w-140px" >Nama Ayah</td>
            <td>: {{ $field->husband->name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->husband->age }} tahun</td>
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
        <tr>
            <td class="py-2"> </td>
        </tr>
        <tr>
            <td class="w-20px" >3.</td>
            <td class="w-140px" >Nama ibu</td>
            <td>: {{ $field->wife->name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->wife->age }} tahun</td>
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
    <p class="text-justify mt-10" >Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Kutipan Akta Kelahiran.</p>
    <p>Saksi Saksi</p>
    <div class="row" style="width: 100%;" >
        <div class="col">
            <table >
                <tr>
                    <td class="w-20px" >1.</td>
                    <td class="w-115px" >Nama Saksi</td>
                    <td>: Rahmat</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Umur</td>
                    <td>: 27 tahun</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pekerjaan</td>
                    <td>: Karyawan Swasta</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat</td>
                    <td>: Ubud Getasan</td>
                </tr>
            </table>
            <div class="d-flex justify-content-center">
                <u class="saksi" style="margin-top: 50px;" >I Wayan Sunarta</u>
            </div>
        </div>
        <div class="col">
            <table >
                <tr>
                    <td class="w-20px" >2.</td>
                    <td class="w-115px" >Nama Saksi</td>
                    <td>: I Putu Antara</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Umur</td>
                    <td>: 27 tahun</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pekerjaan</td>
                    <td>: Karyawan Swasta</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat</td>
                    <td>: Br Ubud Getasan</td>
                </tr>
            </table>
            <div class="d-flex justify-content-center">
                <u class="saksi" style="margin-top: 50px;" >I Putu Subawa</u>
            </div>
        </div>
    </div>