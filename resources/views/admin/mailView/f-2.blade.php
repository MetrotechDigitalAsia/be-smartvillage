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
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left; position: relative;" >
                        @if ($data->slug == 'surat-keterangan-kelahiran')
                            <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -8px; width: 27px; left: -2px;;" >
                        @endif
                    </div>  
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
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left; position: relative;" >
                        @if ($data->slug == 'surat-keterangan-perkawinan')
                            <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -8px; width: 27px; left: -2px;;" >
                        @endif
                    </div>  
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
                    <div style="width: 20px; height: 20px; margin-right: 5px; border: 1px solid black; float: left; position: relative;" >
                        @if ($data->slug == 'surat-keterangan-meninggal')
                            <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -8px; width: 27px; left: -2px;;" >
                        @endif
                    </div>  
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
        <span class="font-weight-bolder">DATA PELAPOR</span>
        <table style="width: 100%; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $data->applicant_name }}
                </td>
            </tr>
            <tr>
                <td>Nik</td>
                <td>:</td>
                @php $nik = str_split($data->applicant_nik) @endphp
                @for ($i = 0; $i < 16; $i++)
                    <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                        {{ $nik[$i] ?? '' }}
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Dokumen Perjalanan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                    <td style="border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @php $kk = str_split($data->applicant_no_kk) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @php $citizenship = str_split($data->applicant_citizenship) @endphp
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-subjek-akta-satu" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" style="text-transform: uppercase;" >Data Subjek Akta Satu</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $field->subject_1->name ?? '' }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_1->nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Dokumen Perjalanan *</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_1->kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_1->citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-subjek-akta-dua" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" style="text-transform: uppercase;">Data Subjek Akta Kedua (Jika Ada)</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $field->subject_2->name ?? '' }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_2->nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Dokumen Perjalanan *</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_2->kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $field->subject_2->citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__saksi" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" style="text-transform: uppercase;">Data Saksi I</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $data->saksi_1->name ?? 'belum ada data saksi' }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @php $saksi_1_nik = str_split($data->saksi_1->nik ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_1_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @php $saksi_1_kk = str_split($data->saksi_1->kk ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_1_kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @php $saksi_1_citizenship = str_split($data->saksi_1->citizenship ?? '' ) @endphp
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_1_citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
        <span class="font-weight-bolder" style="text-transform: uppercase;">Data Saksi II</span>
        <table style="width: 100%; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $data->saksi_2->name ?? 'belum ada data saksi' }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @php $saksi_2_nik = str_split($data->saksi_2->nik ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_2_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @php $saksi_2_kk = str_split($data->saksi_2->kk ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_2_kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @php $saksi_2_citizenship = str_split($data->saksi_2->citizenship ?? '') @endphp
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_2_citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-orangtua" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" >DATA ORANG TUA** (hanya diisi untuk keperluan pencatatan kelahiran, lahir mati dan kematian )</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >Nama Ayah</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $field->subject_father_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>:</td>
                @php $ayah_nik = str_split($field->subject_father_nik ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ !empty($field->date_of_death) ? ($i == 0) && ($ayah_nik == '-') ? '-' : $ayah_nik[$i] ?? '' : $ayah_nik[$i] ?? ''  }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Tempat Lahir Ayah</td>
                <td>:</td>
                <td colspan="16" style="border: 1px solid black; width: 50px !important; text-transform: uppercase;" >
                    {{ $field->subject_father_birthplace ?? ''  }}
                </td>
            </tr>
            <tr>
                @php
                    $ayah_birthdate = (!empty($field->subject_father_birthdate) && $field->subject_father_birthdate !== '-') ? Carbon\Carbon::parse($field->subject_father_birthdate)->format('d-m-Y') : '';
                    $ayah_birthdate = explode('-', $ayah_birthdate);
                @endphp
                <td>Tanggal Lahir Ayah</td>
                <td>:</td>
                @php $ayah_birthdate_date = str_split($ayah_birthdate[1] ?? '') @endphp
                <td colspan="2" style="border: 1px solid black; width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_date[0] ?? '-' :  $ayah_birthdate_date[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_date[1] ?? '-' :  $ayah_birthdate_date[1] ?? '' }}</td>
                @php $ayah_birthdate_month = str_split($ayah_birthdate[1] ?? '') @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_month[0] ?? '-' :  $ayah_birthdate_month[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_month[1] ?? '-' :  $ayah_birthdate_month[1] ?? '' }}</td>
                @php $ayah_birthdate_year = str_split($ayah_birthdate[2] ?? '') @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_year[0] ?? '-' :  $ayah_birthdate_year[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_year[1] ?? '-' :  $ayah_birthdate_year[1] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_year[2] ?? '-' :  $ayah_birthdate_year[2] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ayah_birthdate_year[3] ?? '-' :  $ayah_birthdate_year[3] ?? '' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan </td>
                <td>:</td>
                @php $ayah_citizenship = str_split($field->subject_father_citizenship ?? '') @endphp
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $ayah_citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td style="width: 50%;" >
                    Nama Ibu
                </td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ $field->subject_mother_name ?? "" }}
                </td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td>:</td>
                @php $ibu_nik = str_split($field->subject_mother_nik ?? '') @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ !empty($field->date_of_death) ? ($i == 0) && ($ibu_nik == '-') ? '-' : $ibu_nik[$i] ?? '' : $ibu_nik[$i] ?? ''  }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Tempat Lahir Ibu</td>
                <td>:</td>
                <td colspan="16" style="border: 1px solid black; width: 50px !important; text-transform: uppercase;" >
                    {{ $field->subject_mother_birthplace ?? ''  }}
                </td>
            </tr>
            <tr>
                @php
                    $ibu_birthdate = (!empty($field->subject_mother_birthdate) && $field->subject_father_birthdate !== '-' ) ? Carbon\Carbon::parse($field->subject_mother_birthdate)->format('d-m-Y') : '';
                    $ibu_birthdate = explode('-', $ibu_birthdate);
                @endphp
                <td>Tanggal Lahir Ibu</td>
                <td>:</td>
                @php $ibu_birthdate_date = str_split($ibu_birthdate[0] ?? '') @endphp
                <td colspan="2" style="border: 1px solid black; width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ? $ibu_birthdate_date[0] ?? '-' :  $ibu_birthdate_date[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ? $ibu_birthdate_date[1] ?? '-' :  $ibu_birthdate_date[1] ?? '' }}</td>
                @php $ibu_birthdate_month = str_split($ibu_birthdate[1] ?? '') @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ? $ibu_birthdate_month[0] ?? '-' : $ibu_birthdate_month[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ? $ibu_birthdate_month[1] ?? '-' : $ibu_birthdate_month[1] ?? '' }}</td>
                @php $ibu_birthdate_year = str_split($ibu_birthdate[2] ?? '') @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ibu_birthdate_year[0] ?? '-' :  $ibu_birthdate_year[0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ibu_birthdate_year[1] ?? '-' :  $ibu_birthdate_year[1] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ibu_birthdate_year[2] ?? '-' :  $ibu_birthdate_year[2] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ !empty($field->date_of_death) ?  $ibu_birthdate_year[3] ?? '-' :  $ibu_birthdate_year[3] ?? '' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan </td>
                <td>:</td>
                @php $ibu_citizenship = str_split($field->subject_mother_citizenship ?? "") @endphp
                @for ($i = 0; $i < 23; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $ibu_citizenship[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-kelahiran" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" style="text-transform: uppercase;" >Data Kelahiran</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >1. Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none; text-transform: uppercase;" >
                    {{ !empty($field->child_name) ? $field->child_name : '' }}
                </td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>:</td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_sex) && $field->child_sex == 'Laki - Laki')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" style="width: 50px !important;" >
                    1. Laki Laki
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_sex) && $field->child_sex == 'Perempuan')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="13" >
                    2. Perempuan
                </td>
            </tr>
            <tr >
                <td rowspan="2"  >3. Tempat Dilahirkan</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_birth_of_place) && $field->child_birth_of_place == 'RS/RB')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px; text-transform: uppercase;" >
                    @endif
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    1. RS/RB
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_birth_of_place) && $field->child_birth_of_place == 'Puskesmas')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    2. Puskesmas
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_birth_of_place) && $field->child_birth_of_place == 'Polindes')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    3. Polindes
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_birth_of_place) && $field->child_birth_of_place == 'Rumah')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    4. Rumah
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if (!empty($field->child_birth_of_place) && $field->child_birth_of_place == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    5. Lainnya
                </td>
            </tr>
            <tr>
                <td>4. Tempat Kelahiran</td>
                <td>:</td>
                <td colspan="23" style="text-transform: uppercase;" >
                    {{ $field->child_birthplace ?? '' }}
                </td>
            </tr>
            <tr>
                <td>5. Hari dan Tanggal Lahir</td>
                <td>:</td>
                @php
                    $child_birthday = str_split($field->child_birthday ?? '');
                    $child_birthdate = !empty($field->child_birth_date) ? Carbon\Carbon::parse($field->child_birth_date)->format('d-m-Y') : '';
                    $child_birthdate = explode('-',$child_birthdate);
                @endphp
                @for ($i = 0; $i < 6; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center; text-transform: uppercase" >
                    {{ !(empty($child_birthday)) ? $child_birthday[$i] ?? '#' : ''}}
                </td>
                @endfor
                <td colspan="2" style="text-align: right;" >
                    Tgl : 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[0][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[0][1] ?? '' }}
                </td>
                <td colspan="3" style="text-align: right;" >
                    Bulan : 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[1][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[1][1] ?? '' }}
                </td>
                <td colspan="4" style="text-align: right;" >
                    Tahun : 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[2][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[2][1] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[2][2] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthdate[2][3] ?? '' }}
                </td>
            </tr>
            <tr>
                <td>6. Pukul</td>
                <td>:</td>
                <td colspan="23" > {{ $field->child_birth_time ?? '' }} WITA </td>
            </tr>
            <tr>
                <td rowspan="2" >7. Jenis Kelahiran</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->child_birth_type) && $field->child_birth_type == 'Tunggal')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >1. Tunggal</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->child_birth_type) && $field->child_birth_type == 'Kembar 2')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >2. Kembar 2</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->child_birth_type) && $field->child_birth_type == 'Kembar 3')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Kembar 3</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->child_birth_type) && $field->child_birth_type == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >4. Lainnya</td>
            </tr>
            <tr>
                <td>8. Kelahiran Ke</td>
                <td>:</td>
                <td colspan="23" >{{ $field->birth_count ?? '' }}</td>
            </tr>
            <tr>
                <td rowspan="2" >9. Penolong Kelahiran</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->birth_attendant) && $field->birth_attendant == 'Dokter')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >1. Dokter</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->birth_attendant) && $field->birth_attendant == 'Bidan/Perawat')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >2. Bidan/Perawat</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->birth_attendant) && $field->birth_attendant == 'Dukun')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Dukun</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->birth_attendant) && $field->birth_attendant == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >4. Lainnya</td>
            </tr>
            <tr>
                <td >10. Berat Bayi</td>
                <td colspan="2" >:</td>
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $field->baby_weight ?? '' }}
                </td>
                <td colspan="2" style="text-align: right;" >Kg</td>
            </tr>
            <tr>
                <td >11. Panjang Bayi</td>
                <td colspan="2" >:</td>
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $field->baby_length ?? '' }}
                </td>
                <td colspan="2" style="text-align: right;" >Cm</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-yang-lahir-mati" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder" style="text-transform: uppercase;" >Yang Lahir Mati</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >1. Lamanya dalam kandungan</td>
                <td style="width: 2%" >:</td>
                <td style="border: 1px solid black; !important;" >

                </td>
                <td style="border: 1px solid black; !important;" >

                </td>
                <td style="border:none; padding-left: 5px;" colspan="21" >
                    Bulan
                </td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>:</td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="8" style="width: 50px !important;" >
                    1. Laki Laki
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="13" >
                    2. Perempuan
                </td>
            </tr>
            <tr>
                <td>3. Tanggal Lahir Mati</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" >4. Jenis Kelahiran</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    
                </td>
                <td colspan="5" >1. Tunggal</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >2. Kembar 2</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >3. Kembar 3</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >3. Lainnya</td>
            </tr>
            <tr>
                <td>5. Anak Ke</td>
                <td>:</td>
                <td colspan="23" ></td>
            </tr>
            <tr >
                <td rowspan="2"  >6. Tempat Dilahirkan</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    1. RS/RB
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    2. Puskesmas
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    3. Polindes
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    4. Rumah
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    5. Lainnya
                </td>
            </tr>
            <tr>
                <td rowspan="2" >7. Penolong Kelahiran</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >1. Dokter</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="8" >2. Bidan/Perawat</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >3. Dukun</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >5. Lainnya</td>
            </tr>
            <tr>
                <td>8. Sebab Lahir Mati </td>
                <td>:</td>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="2" >9. Yang Menentukan</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >1. Dokter</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="8" >2. Bidan/Perawat</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >3. Dukun</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                </td>
                <td colspan="5" >5. Lainnya</td>
            </tr>
            <tr>
                <td>10. Tempat Kelahiran</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="border: 1px solid black; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__data-perkawinan-atau-pembatalan-perkawinan" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PERKAWINAN ATAU PEMBATALAN PERKAWINAN</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >1. NIK Ayah dari Suami</td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center;" >
                    {{ $field->subject_1_father_nik[$i] ?? '' }}
                </td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >2. Nama Ayah dari Suami</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-transform: uppercase;" >
                    {{ $field->subject_1_father_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td style="width: 38%;" >3. NIK Ibu dari Suami</td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center;" >
                    {{ $field->subject_1_mother_nik[$i] ?? '' }}
                </td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >4. Nama Ibu dari Suami</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-transform: uppercase;" >
                    {{ $field->subject_1_mother_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td style="width: 38%;" >5. NIK Ayah dari Istri</td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center;" >
                    {{ $field->subject_2_father_nik[$i] ?? '' }}
                </td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >6. Nama Ayah dari Istri</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-transform: uppercase;" >
                    {{ $field->subject_2_father_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td style="width: 38%;" >7. NIK Ibu dari Istri</td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center;" >
                    {{ $field->subject_2_mother_nik[$i] ?? '' }}
                </td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >8. Nama Ibu dari Istri</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-transform: uppercase;" >
                    {{ $field->subject_2_mother_name ?? '' }}
                </td>
            </tr>
            <tr>
                <td rowspan="2" >9. Status Perkawinan Sebelum Kawin</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; text-align: center; position: relative;" >
                    @if (!empty($field->marriage_status) && $field->marriage_status == 'Kawin')
                        <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >1. Kawin</td>
                <td style="border: 1px solid black; text-align: center; position: relative;" >
                    @if (!empty($field->marriage_status) && $field->marriage_status == 'Belum Kawin')
                        <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="7" >2. Belum Kawin</td>
                <td style="border: 1px solid black; text-align: center; position: relative;" >
                    @if (!empty($field->marriage_status) && $field->marriage_status == 'Cerai Hidup')
                        <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" >3. Cerai Hidup</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align: center; position: relative;" >
                    @if (!empty($field->marriage_status) && $field->marriage_status == 'Cerai Mati')
                        <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" >4. Cerai Mati</td>
            </tr>
            <tr>
                <td>10. Perkawinan Yang Ke-</td>
                <td>:</td>
                <td colspan="4" style="border: 1px solid black; text-transform: uppercase;" >{{ $field->marriage_to ?? '' }}</td>
                <td colspan="20" ></td>
            </tr>
            <tr>
                <td>11. Istri yang Ke- (bagi yang poligami)</td>
                <td>:</td>
                <td colspan="3" style="border: 1px solid black; text-align: center;" ></td>
                <td colspan="20" ></td>
            </tr>
            <tr>
                @php
                    $marriage_date = !empty($field->marriage_date) ? Carbon\Carbon::parse($field->marriage_date)->format('d-m-Y') : '';
                    $marriage_date = explode('-',$marriage_date);
                @endphp
                <td>12. Tanggal Pemberkatan Perkawinan</td>
                <td>:</td>
                <td colspan="3" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[0][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[0][1] ?? '' }}
                </td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[1][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[1][1] ?? '' }}
                </td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[2][0] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[2][1] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[2][2] ?? '' }}
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $marriage_date[2][3] ?? '' }}
                </td>
            </tr>
            <tr>
                <td>13. Tanggal melapor</td>
                <td>:</td>
                <td colspan="3" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>14. Jam Pelaporan</td>
                <td>:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border-top: 1px solid black; text-align: center;" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="6" >WITA</td>
            </tr>
            <tr>
                <td rowspan="2" >15. Agama</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="4" >1. Islam</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="4" >2. Katolik</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="4" >3. Kristen</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="4" >4. Hindu</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="4" >5. Budha</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="6" >6. Konghucu</td>
            </tr>
            <tr>
                <td>16. Kepercayaan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>17. Nama Organisasi Kepercayaan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>18. Nama Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>19. No Penetapan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>20. Tanggal Pemberkatan Perkawinan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" >21. Nama Pemuka  <span style="margin-left: 25px" >Agama/Kepercayaan</span></td>
                <td rowspan="2" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>22. Nomor Surat Izin dari Perwakilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>23. Nomor Passport</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2" >24. Perjanjian Perkawinan Dibuat oleh  <span style="margin-left: 25px;" >Notaris</span> </td>
                <td rowspan="2" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>25. Nomor Akte Notaris</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>26. Tanggal Akte Notaris</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="3" >27. Jumlah Anak ( jika ada agar  <span style="margin-left: 25px;" >mengisi form formulir nama anak</span> <span style="margin-left: 25px;" >dan akte kelahiran anak)</span></td>
                <td rowspan="3" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td colspan="25" style="font-weight: bold;" >Bagi Pemohon Pembatalan Perkawinan harap mengisi Data di bawah ini :</td>
            </tr>
            <tr>
                <td>1. Tanggal Perkawinan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td  >2. Nomor Akte Perkawinan</td>
                <td  >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>3. Tanggal Akte Perkawinan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>4. Nama Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>5. Nomor Putusan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>6. Tanggal Putusan Pengadilan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" >7. Tanggal Pelaporan Perkawinan di <span style="margin-left: 20px;" >luar Negeri</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" ></td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
            </trs>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__perceraian-atau-pembatalan-perceraian" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PERCERAIAN ATAU PEMBATALAN PERCERAIAN</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" ></td>
                <td style="width: 2%" ></td>
                <td colspan="23"  >
                </td>
            </tr>
            <tr>
                <td colspan="25" style="font-weight: bold;" >Yang mengajukan Perceraian/Pembatalan Perceraian ***</td>
            </tr>
            <tr>
                <td>1. Nomor Akte Perkawinan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                </td>
                @endfor
            </tr>
            <tr>
                <td>2. Tanggal Akte Perkawinan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>3. Tempat Pencatatan Perkawinan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>4. Nama Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>5. Tanggal Putusan Pengadilan</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>6. Nomor Putusan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                </td>
                @endfor
            </tr>
            <tr>
                <td>7. No surat ket Panitera Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2" >8. Tanggal Putusan Pengadilan <span style="margin-left: 20px;" >Panitera Pengadilan</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
            </tr>
            <tr>
                <td >9. Tanggal Melapor </td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td colspan="25"  style="font-weight: bold; padding-top: 20px;" >Bagi Pemohon Pembatalan Perceraian harap mengisi Data di bawah ini :</td>
            </tr>
            <tr>
                <td>1. Nomor Akte Perceraian</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                @endfor
            </tr>
            <tr>
                <td>2. Tanggal Akte Perceraian</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" >3. Tanggal Pelaporan Perceraian <span style="margin-left: 20px;" >dari Luar Negeri</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td  ></td>
                <td  ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
                <td  ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                @for ($i = 0; $i < 23; $i++)
                    <td style="width: 50px !important;" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section_kematian" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">KEMATIAN</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. NIK
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center;" >{{ $data->subject->nik[$i] ?? '' }}</td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    2. Nama Lengkap
                </td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-align: left; border-right: none; text-transform: uppercase;" >{{ $data->subject->name ?? '' }}</td>
            </tr>
            <tr>
                @php
                    $date_of_death = !empty($field->date_of_death) ? Carbon\Carbon::parse($field->date_of_death)->format('d-m-Y')  : '';
                    $date_of_death = explode('-',$date_of_death);
                @endphp
                <td>3. Tanggal Kematian</td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[0][0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[0][1] ?? '' }}</td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[1][0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[1][1] ?? '' }}</td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[2][0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[2][1] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[2][2] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $date_of_death[2][3] ?? '' }}</td>
            </tr>
            <tr>
                @php
                    $time_of_death = $field->time_of_death ?? '';
                    $time_of_death = explode(':',$time_of_death);
                @endphp
                <td>4. Pukul</td>
                <td>:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $time_of_death[0][0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{  $time_of_death[0][1]  ?? '' }}</td>
                <td style="text-align: center;" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $time_of_death[1][0] ?? '' }}</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{  $time_of_death[1][1]  ?? '' }}</td>
                <td colspan="3" >WITA</td>
            </tr>
            <tr>
                <td rowspan="3" >5. Sebab Kematian </td>
                <td rowspan="3" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Sakit Biasa/Tua')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >1. Sakit Biasa/Tua</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Wabah Penyakit')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >2. Wabah Penyakit</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Bunuh Diri')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >3. Bunuh Diri</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Kriminalitas')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >4. Kriminalitas</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Kecelakaan')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >5. Kecelakaan</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->cause_of_death) && $field->cause_of_death == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >6. Lainnya</td>
            </tr>
            <tr>
                <td>6. Tempat Kematian</td>
                <td>:</td>
                <td colspan="23" style="border: 1px solid black; text-align: left; border-right: none; text-transform: uppercase;" >{{ $field->place_of_death ?? '' }}</td>
            </tr>
            <tr>
                <td rowspan="2" >7. Yang Menerangkan</td>
                <td rowspan="2" >:</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->annotator) && $field->annotator == 'Dokter')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="4" >1. Dokter</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->annotator) && $field->annotator == 'Tenaga Kesehatan')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >2. Tenaga Kesehatan</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->annotator) && $field->annotator == 'Kepolisian')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Kepolisian</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if (!empty($field->annotator) && $field->annotator == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >4. Lainnya</td>
            </tr>
        </table>
    </div>

    <div class="section_pengangkatan-anak" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PENGANGKATAN ANAK</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Nama Anak Angkat
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    2. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2" >3. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Penerbitan Akte Kelahiran</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    4. Dinas Kabupaten/Kota yang  <span style="margin-left: 20px;" >menerbitkan Akte Kelahiran</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr><td colspan="23" > </td></tr>
            <tr>
                <td>5. Nama Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>6. NIK Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>7. Kewarganegaraan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>8. Nama Ayah</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>9. NIK Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>10. Kewarganegaraan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>11. Nama Ibu Angkat</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>12. NIK Ibu Angkat</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>13. Nomor Passport</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>14. Nama Ayah Angkat</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>15. NIK Ayah Angkat</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>16. Nomor Passport</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>17. Nama Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>18. Tanggal Penetapan Pengadilan </td>
                <td>:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>19. No Penetapan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2" >20. Nama Lembaga Penetapan <span style="margin-left: 20px;" >Pengadilan</span></td>
                <td rowspan="2" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="2" >21. Tempat Lembaga Penetapan <span style="margin-left: 20px;" >Pengadilan</span></td>
                <td rowspan="2" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
        </table>
    </div>

    <div class="section_pengakuan-anak" style="border: 1px solid black; margin-top: 10px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PENGAKUAN ANAK</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td rowspan="2" >2. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Penerbitan Akte Kelahiran</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    3. Dinas Kabupaten/Kota yang  <br><span style="margin-left: 10px;" >menerbitkan Akte Kelahiran</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr><td colspan="23" > </td></tr>
            <tr>
                <td rowspan="2" >4. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Kelahiran Anak</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" >5. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Perkawinan Agama</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6. Nama Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>7. NIK Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>8. Kewarganegaraan Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>9. Nama Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>10. NIK Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>11. Kewarganegaraan Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td >12. Tanggal Penetapan Pengadilan</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td>13. No Penetapan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>14. Nama Lembaga Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section_pengesahan-anak" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PENGESAHAN ANAK</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td rowspan="2" >2. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Penerbitan Akte Kelahiran</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    3. Dinas Kabupaten/Kota yang  <span style="margin-left: 20px;" >menerbitkan Akte Kelahiran</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr><td colspan="23" > </td></tr>
            <tr>
                <td rowspan="2" >4. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Kelahiran Anak</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" >5. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Perkawinan Agama</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" >6. Tanggal/Bulan/Tahun <br> <span style="margin-left: 20px;" >Akte Perkawinan/Buku Nikah</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7. Nama Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>8. NIK Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>9. Kewarganegaraan Ibu Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>10. Nama Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>11. NIK Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>12. Kewarganegaraan Ayah Kandung</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td>13. No Penetapan Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td >14. Tanggal Penetapan Pengadilan</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td>15. Nama Lembaga Pengadilan</td>
                <td>:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__perubahan-nama" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PERUBAHAN NAMA</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Nama Lama
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    2. Nama Baru
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    3. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td rowspan="2"  style="width: 38%;" >
                    4. Nama Ayah/Ibu/Wali  <br> <span style="margin-left: 20px;" >(bagi yang di bawah umur)</span> 
                </td>
                <td rowspan="2"  style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    5. NIK Ayah/Ibu/Wali
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    6. Kewarganegaraan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    7. Nomor Penetapan Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td >8. Tanggal Penetapan Pengadilan</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    9. Nama Lembaga Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__perubahan-status-kewarganegaraan" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PERUBAHAN STATUS KEWARGANEGARAAN</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Kewarganegaraan Baru
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    2. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    3. Nomor Akte Perkawinan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    4. Nama Suami atau Istri
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    5. NIK Suami atau Istri
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    6. Nomor Passport
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    7. Nomor Avidafit
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    8. Nomor Keputusan Presiden
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td >9. Tanggal/Bulan/Tahun</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    10. No Berita Acara Sumpah/Janji  <span style="margin-left: 20px;" >Setia</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    11. Nama Jabatan yang menerbitkan  <span style="margin-left: 20px;" >BAS/Jani setia</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr><td colspan="23" ></td></tr>
            <tr>
                <td >12. Tanggal/Bulan/Tahun</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    13. Nomor Keputusan Menteri <span style="margin-left: 20px;" >(Bidang Kewarganegaraan)</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr><td colspan="23" ></td></tr>
            <tr>
                <td >14. Tanggal/Bulan/Tahun</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
        </table>
    </div>

    <div class="section__perubahan-peristiwa-lainnya" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PERUBAHAN PERISTIWA LAINNYA</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    1. Nomor Akte Kelahiran
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin Lama</td>
                <td>:</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="6" >1. Laki Laki</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="7" >2. Perempuan</td>
            </tr>
            <tr>
                <td>3. Jenis Kelamin Baru</td>
                <td>:</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="6" >1. Laki Laki</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="7" >2. Perempuan</td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    4. Nomor Penetapan Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td >5. Tanggal Penetapan Pengadilan</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    6. Nama Lembaga Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__pembetulan-dan-pembatalan-akte" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PEMBETULAN AKTE</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    1. Nomor Akte Kelahiran yang akan<br><span style="margin-left: 20px;" >(dibetulkan/ditarik)</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr><td colspan="23" ></td></tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    2. Nama Ayah/Ibu<br><span style="margin-left: 20px;" >bagi yang dibawah umur)</span>
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
            </tr>
            <tr><td colspan="23" ></td></tr>
            <tr>
                <td style="width: 38%;" >
                    3. NIK Ayah/Ibu/Wali
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td colspan="25" style="font-weight: bold; padding-top: 15px;" >PEMBATALAN AKTE</td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    1. Akte Yang dibatalkan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td style="width: 38%;" >
                    2. Nomor Akte Yang dibatalkan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    3. Nomor Putusan Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr>
                <td >4. Tanggal Putusan Pengadilan</td>
                <td >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr>
                <td style="width: 38%;" >
                    5. Nama Lembaga Pengadilan
                </td>
                <td style="width: 2%" >:</td>
                @for ($i = 0; $i < 23; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
        </table>
    </div>

    <div class="section__pelaporan-pencatatan-sipil" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">PELAPORAN PENCATATAN SIPIL DARI LUAR WILAYAH NKRI</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >
                    
                </td>
                <td style="width: 2%" ></td>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 38%;" >
                    1. Jenis Peristiwa Penting
                </td>
                <td rowspan="3" style="width: 2%" >:</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="6" >1. Kelahiran</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="7" >2. Perkawinan</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="5" >3. Perceraian</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="6" >4. Kematian</td>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="9" >5. Pengangkatan Anak</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                <td colspan="15" >6. Pelepasan Kewarganegaraan RI</td>
            </tr>
            <tr>
                <td rowspan="3" style="width: 38%;" >
                    2. Nomor Surat Keterangan Pelaporan <br><span style="margin-left: 10px;" >Pencatatan sipil dari </span><br> <span style="margin-left: 10px;" >Perwakilan RI</span>
                </td>
                <td rowspan="3" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
                <td colspan="7" ></td>
            </tr>
            <tr><td colspan="23" ></td></tr>
            <tr><td colspan="23" ></td></tr>
            <tr>
                <td rowspan="3" >3. Tanggal Surat Keterangan <br><span style="margin-left: 10px;" >Pencatatan sipil dari </span><br> <span style="margin-left: 10px;" >Perwakilan RI</span>
                <td rowspan="3" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun:
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun:
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    4. Kantor Perwakilan Yang <br> <span style="margin-left: 10px;" >menentukan Pencatatan</span> 
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="2" style="width: 38%;" >
                    5. Nomor Bukti Pencatatan Sipil <br> <span style="margin-left: 10px;" >dari Negara setempat</span> 
                </td>
                <td rowspan="2" style="width: 2%" >:</td>
                @for ($i = 0; $i < 16; $i++)
                <td style="border: 1px solid black; text-align: center; @if($i == 22) border-right: none; @endif" ></td>
                @endfor
            </tr>
            <tr>
                <td colspan="23" ></td>
            </tr>
            <tr>
                <td rowspan="2" >6. Tanggal Penerbitan <br> <span style="margin-left: 10px;" >dari Negara setempat</span> </td>
                <td rowspan="2" >:</td>
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" ></td>
            </tr>
            <tr style="visibility: hidden;" >
                <td colspan="2" style=" width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Bulan:
                </td>
                <td></td>
                <td></td>
                <td colspan="3" style="width: 50px !important; text-align: right;" >
                    Tahun:
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <div class="section__tanda-tangan" style="border: 1px solid black; margin-top: 15px; padding: 5px;" >
        <table style="width: 100%;" >
            <tr>
                <td style="width: 50%;" >Reg. No :</td>
                <td style="text-align: right;" >Getasan, {{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('d F Y') }}</td>
            </tr>
            <table style="width: 100%; text-align: center; margin-top: 30px;" >
                <tr>
                    <td style="width: 50%;" >Mengetahui :<br> Perbekel Getasan  </td>
                    <td style="width: 50%;" >Pelapor, </td>
                </tr>
                <tr>
                    <td style="height: 50px; position: relative;" >
                        @if (!empty($perbekel) && $data->status == 'Done')
                        {{-- <img style="position: absolute; width: 300px; height: 100px; left: 10px; top: 0px;" src="{{ asset('storage/'. $perbekel->image) }}" alt=""> --}}
                        @endif
                    </td>
                    <td style="height: 50px; position: relative;"  >
                        @if (!is_null($data->user_id))
                        {{-- <img style="position: absolute; width: 300px; height: 70px; left: 10px; top: 0px; object-fit: contain;" src="{{ asset('storage/'. $data->signature) }}" alt=""> --}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <u style="font-size: 16px;" ><b>{{ $perbekel->name ?? 'Belum ada data perbekel' }}</b></u>
                    </td>
                    <td>
                        <u style="font-size: 16px;" ><b>{{ $data->applicant_name }}</b></u>
                    </td>
                </tr>
            </table>
        </table>
    </div>
</div>