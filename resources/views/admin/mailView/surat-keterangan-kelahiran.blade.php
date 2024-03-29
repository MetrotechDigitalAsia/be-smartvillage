<h3 class="text-center" style="text-transform: uppercase;" >{{ $data->title }}</h3>
    <h6 class="text-center mb-10" >Nomor: {{ $data->mail_number}}</h6>
    <p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas {{ $data->applicant_banjar }}, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
    <table class="align-self-start ml-10" >
        <tr>
            <td class="w-20px" >1.</td>
            <td class="w-140px" >Nama</td>
            <td style="text-transform: capitalize; !important" >: {{ $field->child_name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Jenis Kelamin</td>
            <td>: {{ $field->child_sex ?? '' }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Tempat/Tgl.lahir</td>
            <td style="text-transform: capitalize; !important" >: {{ $field->child_birthplace.', '. Carbon\Carbon::parse($field->child_birth_date)->translatedFormat('d F Y') }}</td>
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
            <td>: {{ $data->applicant_address }}</td>
        </tr>
        <tr>
            <td class="py-2"> </td>
        </tr>
        <tr>
            <td class="w-20px" >2.</td>
            <td class="w-140px" >Nama Ayah</td>
            <td style="text-transform: capitalize;" >: {{ $field->subject_father_name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->subject_father_age }} Tahun</td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>: {{  $field->subject_father_job }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->subject_father_address }}</td>
        </tr>
        <tr>
            <td class="py-2"> </td>
        </tr>
        <tr>
            <td class="w-20px" >3.</td>
            <td class="w-140px" >Nama ibu</td>
            <td style="text-transform: capitalize;" >: {{ $field->subject_mother_name }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Umur</td>
            <td>: {{ $field->subject_mother_age }} Tahun</td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>: {{ $field->subject_mother_job }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: {{ $field->subject_mother_address }}</td>
        </tr>
    </table>
    <p class="text-justify mt-10" >Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Kutipan Akta Kelahiran.</p>
    <p>Saksi Saksi</p>
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