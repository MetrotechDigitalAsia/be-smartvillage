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
                        <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -8px; width: 27px; left: -2px;;" >
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
        <table style="width: 100%; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
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

    <div class="section__saksi" style="border: 1px solid black; margin-top: 15px; padding: 5px; padding-right: 0;" >
        <span class="font-weight-bolder">Data Saksi I</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
                    {{ $saksi['saksi_1']->name }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @php $saksi_1_nik = str_split($saksi['saksi_1']->nik) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_1_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @php $saksi_1_kk = str_split($saksi['saksi_1']->no_kk) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @php $saksi_1_citizenship = str_split($saksi['saksi_1']->citizenship) @endphp
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
        <span class="font-weight-bolder">Data Saksi II</span>
        <table style="width: 100%; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" > Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
                    {{ $saksi['saksi_2']->name }}
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                @php $saksi_2_nik = str_split($saksi['saksi_2']->nik) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $saksi_2_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                @php $saksi_2_kk = str_split($saksi['saksi_2']->no_kk) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $kk[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td> Kewarganegaraan </td>
                <td>:</td>
                @php $saksi_2_citizenship = str_split($saksi['saksi_2']->citizenship) @endphp
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
        <span class="font-weight-bolder">Data Orang Tua</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >Nama Ayah</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
                    {{ $field->husband->name }}
                </td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>:</td>
                @php $ayah_nik = str_split($field->husband->nik) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $ayah_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Tempat Lahir Ayah</td>
                <td>:</td>
                <td colspan="16" style="border: 1px solid black; width: 50px !important;" >
                    {{ $field->husband->birthplace }}
                </td>
            </tr>
            <tr>
                @php
                    $ayah_birthdate = Carbon\Carbon::parse($field->husband->birthdate)->format('d-m-Y');
                    $ayah_birthdate = explode('-', $ayah_birthdate);
                @endphp
                <td>Tanggal Lahir Ayah</td>
                <td>:</td>
                @php $ayah_birthdate_date = str_split($ayah_birthdate[0]) @endphp
                <td colspan="2" style="border: 1px solid black; width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                @foreach ($ayah_birthdate_date as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
                @php $ayah_birthdate_month = str_split($ayah_birthdate[1]) @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                @foreach ($ayah_birthdate_month as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
                @php $ayah_birthdate_year = str_split($ayah_birthdate[2]) @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                @foreach ($ayah_birthdate_year as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Kewarganegaraan </td>
                <td>:</td>
                @php $ayah_citizenship = str_split($field->husband->citizenship) @endphp
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
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
                    {{ $field->wife->name }}
                </td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>:</td>
                @php $ibu_nik = str_split($field->wife->nik) @endphp
                @for ($i = 0; $i < 16; $i++)
                <td style="text-align: center;border: 1px solid black; width: 50px !important; @if($i == 22) border-right: none; @endif" >
                    {{ $ibu_nik[$i] ?? '' }}
                </td>
                @endfor
            </tr>
            <tr>
                <td>Tempat Lahir Ibu</td>
                <td>:</td>
                <td colspan="16" style="border: 1px solid black; width: 50px !important;" >
                    {{ $field->wife->birthplace }}
                </td>
            </tr>
            <tr>
                @php
                    $ibu_birthdate = Carbon\Carbon::parse($field->wife->birthdate)->format('d-m-Y');
                    $ibu_birthdate = explode('-', $ibu_birthdate);
                @endphp
                <td>Tanggal Lahir Ibu</td>
                <td>:</td>
                @php $ibu_birthdate_date = str_split($ibu_birthdate[0]) @endphp
                <td colspan="2" style="border: 1px solid black; width: 50px !important; border-left: none; text-align: center;" >
                    Tgl:
                </td>
                @foreach ($ibu_birthdate_date as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
                @php $ibu_birthdate_month = str_split($ibu_birthdate[1]) @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Bulan: 
                </td>
                @foreach ($ibu_birthdate_month as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
                @php $ibu_birthdate_year = str_split($ibu_birthdate[2]) @endphp
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: right;" >
                    Tahun: 
                </td>
                @foreach ($ibu_birthdate_year as $item)
                    <td style="border: 1px solid black; width: 50px !important; text-align: center;" >{{ $item }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Kewarganegaraan </td>
                <td>:</td>
                @php $ibu_citizenship = str_split($field->wife->citizenship) @endphp
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
        <span class="font-weight-bolder">Data Kelahiran</span>
        <table style="width: 100%; margin-bottom: 10px; table-layout: fixed;" >
            <tr>
                <td style="width: 38%;" >1. Nama</td>
                <td style="width: 2%" >:</td>
                <td colspan="23" style="border: 1px solid black; width: 50px !important; border-right: none;" >
                    {{ $field->child_name }}
                </td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>:</td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_sex == 'Laki - Laki')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" style="width: 50px !important;" >
                    1. Laki Laki
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_sex == 'Perempuan')
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
                    @if ($field->child_birth_of_place == 'RS/RB')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    1. RS/RB
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_birth_of_place == 'Puskesmas')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    2. Puskesmas
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_birth_of_place == 'Polindes')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="6" style="width: 50px !important;" >
                    3. Polindes
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_birth_of_place == 'Rumah')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="4" style="width: 50px !important;" >
                    4. Rumah
                </td>
                <td style="border: 1px solid black; width: 50px !important; position: relative;" >
                    @if ($field->child_birth_of_place == 'Lainnya')
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
                <td colspan="23" >
                    {{ $field->child_birthplace ?? '' }}
                </td>
            </tr>
            <tr>
                <td>5. Hari dan Tanggal Lahir</td>
                <td>:</td>
                @php
                    $child_birthday = str_split($field->child_birthday);
                    $child_birthdate = Carbon\Carbon::parse($field->child_birth_date)->format('d-m-Y');
                    $child_birthdate = explode('-',$child_birthdate);
                @endphp
                @for ($i = 0; $i < 5; $i++)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $child_birthday[$i] ?? '' }}
                </td>
                @endfor
                <td colspan="3" style="text-align: right;" >
                    Tgl : 
                </td>
                @foreach (str_split($child_birthdate[0]) as $item)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{$item}}
                </td>
                @endforeach
                <td colspan="3" style="text-align: right;" >
                    Bulan : 
                </td>
                @foreach (str_split($child_birthdate[1]) as $item)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{$item}}
                </td>
                @endforeach
                <td colspan="4" style="text-align: right;" >
                    Tahun : 
                </td>
                @foreach (str_split($child_birthdate[2]) as $item)
                <td style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{$item}}
                </td>
                @endforeach
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
                    @if ($field->child_birth_type == 'Tunggal')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >1. Tunggal</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->child_birth_type == 'Kembar 2')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >2. Kembar 2</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->child_birth_type == 'Kembar 3')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Kembar 3</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->child_birth_type == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Lainnya</td>
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
                    @if ($field->birth_attendant == 'Dokter')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >1. Dokter</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->birth_attendant == 'Bidan/Perawat')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="8" >2. Bidan/Perawat</td>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->birth_attendant == 'Dukun')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >3. Dukun</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; width: 50px !important; text-align: center; position: relative;" >
                    @if ($field->birth_attendant == 'Lainnya')
                    <img src="{{ asset('assets/be/media/svg/icons/Navigation/Check.svg') }}" alt="" style="position: absolute; top: -3px; width: 25px; left: -2px;" >
                    @endif
                </td>
                <td colspan="5" >5. Lainnya</td>
            </tr>
            <tr>
                <td >10. Berat Bayi</td>
                <td colspan="2" >:</td>
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $field->baby_weight }} Kg
                </td>
                <td colspan="2" style="text-align: right;" >Kg</td>
            </tr>
            <tr>
                <td >11. Panjang Bayi</td>
                <td colspan="2" >:</td>
                <td colspan="3" style="border: 1px solid black; width: 50px !important; text-align: center;" >
                    {{ $field->baby_length }} Cm
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