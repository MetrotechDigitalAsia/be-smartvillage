<div class="mail-header-f2">
    <div class="row justify-content-end">
        <div class="col-2">
            <span class="f2-small-title py-1 px-3 font-weight-bolder" >F-2. 01</span>
        </div>
    </div>
    <table>
        <tr>
            <td class="w-140px" >Provinsi</td>
            <td>: Bali</td>
        </tr>
        <tr>
            <td>Kabupaten</td>
            <td>: Badung</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>: Petang</td>
        </tr>
        <tr>
            <td>Desa/Kelurahan</td>
            <td>: Getasan</td>
        </tr>
        <tr>
            <td>Kode Desa</td>
            <td>: -</td>
        </tr>
    </table>
    <h6 class="text-center mt-10 font-weight-bolder" >FORMULIR PELAPORAN PENCATATAN SIPIL DI DALAM WILAYAH NKRI</h6>
</div>
<div class="mail-body-f2 pt-8 d-flex flex-column pb-10">
    <div class="section__jenis-pelapor">
        <span class="font-weight-bolder">Jenis Pelaporan Pencatatan Sipil (centang)</span>
        <table class="mt-3" style="width: 100%;" >
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Kelahiran
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pengakuan Anak
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Lahir Mati
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pengesahan Anak
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Perkawinan
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Perubahan Nama
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pembatalan Perkawinan
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Perubahan Status Kewarganegaraan
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Perceraian
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pencatatan Peristiwa Penting Lainnya
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pembatalan Perceraian
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pembetulan Akte
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Kematian
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pembatalan Akte
                </td>
            </tr>
            <tr>
                <td style="width: 40%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pengangkatan Anak
                </td>
                <td style="width: 50%;" >
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left;" ></div>  
                    Pelaporan Pencatatan Sipil dari Luar Wilayah NKRI
                </td>
            </tr>
        </table>

    </div>

    <div class="section__data-pelapor" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">Data Pelapor</span>
        <table style="width: 100%;" >
            <tr>
                <td style="width: 50%;" >
                    Nama
                </td>
                <td style="width: 50%; position: relative;" >
                    : {{ $data->applicant_name }}
                </td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>: {{ $data->applicant_nik }}</td>
            </tr>
            <tr>
                <td>Nomor Dokumen Perjalanan *</td>
                <td>: {{ $field->travel_document ?? '' }}</td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>: {{ $data->applicant_no_kk }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $data->applicant_citizenship }}</td>
            </tr>
        </table>
    </div>

    <div class="section__saksi" style="border: 1px solid black; margin-top: 15px; padding: 5px;" >
        <span class="font-weight-bolder">Data Saksi I</span>
        <table style="width: 100%; margin-bottom: 10px;" >
            <tr>
                <td style="width: 50%;" >
                    Nama
                </td>
                <td style="width: 50%;" >
                    : {{ $saksi['saksi_1']->name }}
                </td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>: {{ $saksi['saksi_1']->nik }}</td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>: {{ $saksi['saksi_1']->kk }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $saksi['saksi_1']->citizenship }}</td>
            </tr>
        </table>
        <span class="font-weight-bolder">Data Saksi II</span>
        <table style="width: 100%;" >
            <tr>
                <td style="width: 50%;" >
                    Nama
                </td>
                <td style="width: 50%;" >
                    : {{ $saksi['saksi_2']->name }}
                </td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>: {{ $saksi['saksi_2']->nik }}</td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>: {{ $saksi['saksi_2']->kk }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $saksi['saksi_2']->citizenship }}</td>
            </tr>
        </table>
    </div>

    <div class="section__data-orangtua" style="border: 1px solid black; margin-top: 15px; padding: 5px;" >
        <span class="font-weight-bolder">Data Orang Tua</span>
        <table style="width: 100%; margin-bottom: 10px;" >
            <tr>
                <td style="width: 50%;" >
                    Nama Ayah
                </td>
                <td style="width: 50%;" >
                    : {{ $field->husband->name }}
                </td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>: {{ $field->husband->nik }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir Ayah</td>
                <td>: {{ $field->husband->birthplace }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ayah</td>
                <td>: {{ $field->husband->birthdate }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $field->husband->citizenship }}</td>
            </tr>
            <tr>
                <td style="width: 50%;" >
                    Nama Ibu
                </td>
                <td style="width: 50%;" >
                    : {{ $field->wife->name }}
                </td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td>: {{ $field->wife->nik }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir Ibu</td>
                <td>: {{ $field->wife->birthplace }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir Ibu</td>
                <td>: {{ $field->wife->birthdate }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $field->wife->citizenship }}</td>
            </tr>
        </table>
    </div>

    <div class="section__data-kelahiran" style="border: 1px solid black; margin-top: 15px; padding: 5px;" >
        <span class="font-weight-bolder">Data Kelahiran</span>
        <table style="width: 100%; margin-bottom: 10px;" >
            <tr>
                <td style="width: 50%;" >
                    1. Nama
                </td>
                <td style="width: 50%;" >
                    : {{ $field->child_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>: {{ $field->child_sex ?? '' }}</td>
            </tr>
            <tr>
                <td>3. Tempat Dilahirkan</td>
                <td>: {{ $field->child_birth_of_place ?? '' }}</td>
            </tr>
            <tr>
                <td>4. Tempat Kelahiran</td>
                <td>: {{ $field->child_birthplace ?? '' }}</td>
            </tr>
            <tr>
                <td>5. Hari dan Tanggal Lahir</td>
                <td>: {{ $field->child_birthday ?? '' }}, {{ $field->child_birth_date ?? '' }}</td>
            </tr>
            <tr>
                <td>6. Pukul</td>
                <td>: {{ $field->child_birth_time ?? '' }} WITA</td>
            </tr>
            <tr>
                <td>7. Jenis Kelahiran</td>
                <td>: {{ $field->child_birth_type ?? '' }}</td>
            </tr>
            <tr>
                <td>8. Kelahiran Ke</td>
                <td>: {{ $field->birth_count ?? '' }}</td>
            </tr>
            <tr>
                <td>9. Penolong Kelahiran</td>
                <td>: {{ $field->birth_attendant ?? '' }}</td>
            </tr>
            <tr>
                <td>10. Berat Bayi</td>
                <td>: {{ $field->baby_weight ?? '' }} Kg</td>
            </tr>
            <tr>
                <td>11. Panjang Bayi</td>
                <td>: {{ $field->baby_length ?? '' }} Cm</td>
            </tr>
        </table>
    </div>

    <div class="section__tanda-tangan" style="border: 1px solid black; margin-top: 15px; padding: 5px;" >
        <table style="width: 100%;" >
            <tr>
                <td style="width: 50%;" >Reg. No :</td>
                <td style="text-align: right;" >Getasan, {{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l d F Y') }}</td>
            </tr>
            <table style="width: 100%; text-align: center; margin-top: 30px;" >
                <tr>
                    <td style="width: 50%;" >Mengetahui : </td>
                    <td style="width: 50%;" >Pelapor, </td>
                </tr>
                <tr>
                    <td style="height: 50px; position: relative;" >
                        @if (!empty($perbekel) && $data->status == 'Done')
                        <img style="position: absolute; width: 300px; height: 100px; left: 10px; top: 0px;" src="{{ asset('storage/'. $perbekel->image) }}" alt="">
                        @endif
                    </td>
                    <td style="height: 50px; position: relative;"  >
                        <img style="position: absolute; width: 300px; height: 70px; left: 10px; top: 0px; object-fit: contain;" src="{{ asset('storage/'. $data->signature) }}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <u style="font-size: 16px;" ><b>I Wayan Suandi, S.Pt</b></u>
                    </td>
                    <td>
                        <u style="font-size: 16px;" ><b>{{ $data->applicant_name }}</b></u>
                    </td>
                </tr>
            </table>
        </table>
    </div>
</div>