@extends('admin.app')

@section('content')

<form action="{{ empty($user) ? route('storeUserData') : url('/data-penduduk/penduduk/update/'.$user->id) }}" method="post">

    @csrf


@if (!empty($user) )
    <input hidden name="uuid" value="{{ $user->uuid }}" />
    <input hidden name="id" value="{{ $user->id }}" />
@endif     

<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($user) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <div class="card-body pt-0">

        <!--begin::Heading-->
        <!--begin::Form Group-->

        <div class="card card-custom" style="box-shadow: none;" >
            <div class="card-header card-header-tabs-line px-0">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pribadi_tab">
                            <span class="nav-icon"><i class="flaticon2-user-outline-symbol"></i></span>
                            <span class="nav-text">Pribadi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#keluarga_tab">
                            <span class="nav-icon"><i class="flaticon2-group"></i></span>
                            <span class="nav-text">Keluarga</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pernikahan_tab">
                            <span class="nav-icon"><i class="flaticon2-cube-1"></i></span>
                            <span class="nav-text">Pernikahan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#lainnya_tab">
                            <span class="nav-icon"><i class="flaticon2-list-3"></i></span>
                            <span class="nav-text">Lainnya</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body px-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pribadi_tab" role="tabpanel" aria-labelledby="pribadi_tab" >

                        <div class="row ">
                            <div class="col mr-10">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nama <span style="color: red;" >*</span> </label>
                                    <div class="col">
                                        <input required class="form-control @error('nama') is-invalid @enderror form-control-lg " type="text" name="nama" value="{{$user['nama'] ?? '' }}" required />
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('tempat_lahir') is-invalid @enderror form-control-lg " type="text" name="tempat_lahir" value="{{$user['tempat_lahir'] ?? '' }}" required />
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('tanggal_lahir') is-invalid @enderror form-control-lg " type="date" name="tanggal_lahir" value="{{ !empty($user['tanggal_lahir']) ? Carbon\Carbon::createFromFormat('Y-m-d', $user['tanggal_lahir'])->format('Y-m-d')  : '' }}" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('alamat') is-invalid @enderror form-control-lg " type="text" name="alamat" value="{{$user['alamat'] ?? '' }}" required />
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">RT <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('RT') is-invalid @enderror form-control-lg " type="number" name="RT" value="{{$user['RT'] ?? '' }}" required />
                                        @error('RT')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror        
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">RW <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('RW') is-invalid @enderror form-control-lg " type="number" name="RW" value="{{$user['RW'] ?? '' }}" required />
                                        @error('RW')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Banjar <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <select class="form-control form-control-lg " name="banjar" required >
                                            @php
                                                $banjar = ['Buangga', 'Kauh', 'Ubud', 'Tengah']
                                            @endphp
                                            <option value="">Pilih Banjar...</option>
                                            @foreach ($banjar as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['banjar'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('banjar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan<span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['WNA', 'WNI']
                                        @endphp
                                        <select class="form-control form-control-lg " name="kewarganegaraan" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['kewarganegaraan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Agama <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <select class="form-control form-control-lg " name="agama" required >
                                            @php
                                                $banjar = ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu']
                                            @endphp
                                            <option value="">Pilih Agama...</option>
                                            @foreach ($banjar as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['agama'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col">

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Umur</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " readonly name="UMUR" value="{{$user['UMUR'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Golongan Darah</label>
                                    <div class="col">
                                        @php
                                            $status = ['A', 'B', 'O', 'AB', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']
                                        @endphp
                                        <select class="form-control form-control-lg " name="golongan_darah"  >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['golongan_darah'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Jenis Kelamin <span style="color: red;" >*</span></label>
                                    <div class="col-9 col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input required {{!empty($user) ? $user['jenis_kelamin']=="Laki-Laki" ? 'checked' : '' : ''}} type="radio" name="jenis_kelamin" value="Laki-Laki" required/>
                                                <span></span>
                                                Laki Laki
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input required {{!empty($user) ? $user['jenis_kelamin']=="Perempuan" ? 'checked' : '' : ''}}  type="radio" name="jenis_kelamin" value="Perempuan" />
                                                <span></span>
                                                Perempuan
                                            </label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pendidikan Terakhir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $pendidikan = ['TDK/BLM SEKOLAH','PAUD', 'TK', 'TIDAK TAMAT SD','BELUM TAMAT SD', 'SD', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'D I/II', 'D III', 'D IV/S1', 'S2', 'S3']
                                        @endphp
                                        <select class="form-control form-control-lg " name="pendidikan" required >
                                            <option value="">Pilih...</option>
                                            @foreach ($pendidikan as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['pendidikan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="pekerjaan" value="{{$user['pekerjaan'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No KK <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_kk') is-invalid @enderror form-control-lg " type="number" name="no_kk" value="{{$user['no_kk'] ?? '' }}" required />
                                        @error('no_kk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No NIK <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_nik') is-invalid @enderror form-control-lg " type="number" name="no_nik" value="{{$user['no_nik'] ?? '' }}" required />
                                        @error('no_nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">    
                                    <label class="col-xl-3 col-lg-3 col-form-label">Akta Kelahiran</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadioKelahiran(this)" {{!empty($user) ? $user['status_akta_kelahiran']=="1" ? 'checked' : '' : ''}} type="radio" name="status_akta_kelahiran" value="1" />
                                                <span></span>
                                                Ada
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadioKelahiran(this)" {{!empty($user) ? $user['status_akta_kelahiran']=="0" ? 'checked' : '' : ''}}  type="radio" name="status_akta_kelahiran" value="0" />
                                                <span></span>
                                                Belum Ada
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No Akta Kelahiran </label>
                                    <div class="col">
                                        <input class="form-control @error('no_nik') is-invalid @enderror form-control-lg " type="text" name="no_akta_kelahiran" value="{{$user['no_akta_kelahiran'] ?? '' }}" {{!empty($user) ? $user['status_akta_kelahiran']=="0" ? 'disabled' : '' : ''}} />
                                        @error('no_nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="keluarga_tab" role="tabpanel" aria-labelledby="keluarga_tab"   >

                        <div class="row">
                            <div class="col mr-10">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ayah</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="ayah" value="{{$user['ayah'] ?? '' }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ibu</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="ibu" value="{{$user['ibu'] ?? '' }}" />
                                    </div>
                                </div>
                                @if (!empty($couple))
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ $user->shdk != 'ISTRI' ? 'Istri' : 'Suami' }}</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg" disabled type="text" name="ibu" value="{{$couple['nama'] ?? '' }}" />
                                    </div>
                                </div>
                                @endif
                                @if (!empty($children) && count($children) != 0)
                                    @foreach ($children as $key => $child)
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Anak ke- {{ $key+1 }}</label>
                                        <div class="col">
                                            <input class="form-control form-control-lg" disabled type="text" name="ibu" value="{{$child['nama'] ?? '' }}" />
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                @if (!empty($user))
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No KK <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_kk') is-invalid @enderror form-control-lg " type="text" name="no_kk" value="{{$user['no_kk'] ?? '' }}" required />
                                        @error('no_kk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">SHDK</label>
                                    <div class="col">
                                        @php
                                            $banjar = ['KEPALA KELUARGA', 'SUAMI', 'ISTRI', 'ANAK', 'MENANTU', 'CUCU', 'FAMILI LAIN', 'LAINNYA']
                                        @endphp
                                        <select class="form-control form-control-lg " name="shdk" >
                                            <option value="">Pilih...</option>
                                            @foreach ($banjar as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['shdk'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="pernikahan_tab" role="tabpanel" aria-labelledby="pernikahan_tab"  >

                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Status Perkawinan <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['Kawin Tercatat', 'Kawin Belum Tercatat', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati']
                                        @endphp
                                        <select class="form-control form-control-lg " name="status_perkawinan" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($user) ? $user['status_perkawinan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Perkawinan</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="date" name="tanggal_perkawinan" value="{{ !empty($user['tanggal_perkawinan']) ? Carbon\Carbon::createFromFormat('Y-m-d', $user['tanggal_perkawinan'])->format('Y-m-d')  : '' }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row align-items-center">    
                                    <label class="col-xl-3 col-lg-3 col-form-label">Akta Perkawinan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadio(this)" {{!empty($user) ? $user['status_akta_perkawinan']=="1" ? 'checked' : '' : ''}} type="radio" name="status_akta_perkawinan" value="1" />
                                                <span></span>
                                                Ada
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadio(this)" {{!empty($user) ? ($user['status_akta_perkawinan']=="0") || empty($user['status_akta_perkawinan'])  ? 'checked' : '' : ''}}  type="radio" name="status_akta_perkawinan" value="0" />
                                                <span></span>
                                                Belum Ada
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No. Akta Perkawinan </label>
                                    <div class="col">
                                        <input class="form-control form-control-lg" {{!empty($user) ? ($user['status_akta_perkawinan']=="0") || empty($user['status_akta_perkawinan']) ? 'disabled' : '' : ''}} name="no_akta_perkawinan" value="{{ $user['no_akta_perkawinan'] ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="tab-pane"  id="lainnya_tab" role="tabpanel" aria-labelledby="lainnya_tab" >
                        
                        <div class="form-group row align-items-center">    
                            <label class="col-xl-3 col-lg-3 col-form-label">Ketua (RT/RW/Banjar)</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" {{ !empty($user) ? $user['ketua_RT'] == '1' ? 'checked' : '' : '' }} name="ketua_RT"/>
                                        <span></span>
                                        RT
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success ">
                                        <input type="checkbox" {{ !empty($user) ? $user['ketua_RW'] == '1' ? 'checked' : '' : '' }} name="ketua_RW" />
                                        <span></span>
                                        RW
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" {{ !empty($user) ? $user['ketua_banjar'] == '1' ? 'checked' : '' : '' }} name="ketua_banjar" />
                                        <span></span>
                                        Banjar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-xl-3 col-lg-3 col-form-label">Penerima Bantuan</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input onchange="handleChangePenerimaBantuan(this)" type="checkbox" {{ !empty($user) ? $user['penerima_bantuan'] == '1' ? 'checked' : '' : '' }} name="penerima_bantuan"/>
                                        <span></span>
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row penerima-bantuan-input {{ !empty($user) ? $user['penerima_bantuan'] == '0' ? 'd-none' : '' : 'd-none' }} ">
                            <label class="col-xl-3 col-lg-3 col-form-label">Jenis Bantuan</label>
                            <div class="col-6">
                                <select class="form-control form-control-lg" name="jenis_bantuan" >
                                    <option value="">Pilih...</option>
                                    @foreach ($blt as $item)
                                    <option value="{{ $item->type }}" {{ !empty($user) ? $user['jenis_bantuan'] == $item->type ? 'selected' : '' : ''}}  >
                                        {{ $item->type }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-xl-3 col-lg-3 col-form-label">Penyandang Disabilitas</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input onchange="handleChangePenyandangDisabilitas(this)" type="checkbox" {{ !empty($user) ? $user['penyandang_disabilitas'] == '1' ? 'checked' : '' : '' }} name="penyandang_disabilitas"/>
                                        <span></span>
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row penyandang-disabilitas-input {{ !empty($user) ? $user['penyandang_disabilitas'] == '0' ? 'd-none' : '' : 'd-none' }} ">
                            <label class="col-xl-3 col-lg-3 col-form-label">Jenis Disabilitas</label>
                            <div class="col-6">
                                @php
                                    $option = ['Fisik', 'Intelektual', 'Mental', 'Sensorik Wicara', 'Sensorik Rungu', 'Sensorik Netra', 'Disabilitas Ganda']
                                @endphp
                                <select class="form-control form-control-lg" name="jenis_disabilitas" >
                                    <option value="">Pilih...</option>
                                    @foreach ($option as $item)
                                    <option value="{{ $item }}" {{ !empty($user) ? $user['jenis_disabilitas'] == $item ? 'selected' : '' : ''}}  >
                                        {{ $item }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">    
                            <label class="col-xl-3 col-lg-3 col-form-label">Status Mutasi Penduduk</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="radio-inline">
                                    <label class="radio radio-outline radio-success">
                                        <input onchange="handleChangeStatusMutasi(this)" class="mutasi-radio" {{!empty($user) ? $user['status_mutasi']=="Pindah Keluar" ? 'checked' : '' : ''}} type="radio" name="status_mutasi" value="Pindah Keluar" />
                                        <span></span>
                                        Pindah Keluar
                                    </label>
                                    <label class="radio radio-outline radio-success">
                                        <input onchange="handleChangeStatusMutasi(this)" class="mutasi-radio" {{!empty($user) ? $user['status_mutasi']=="Meninggal" ? 'checked' : '' : ''}}  type="radio" name="status_mutasi" value="Meninggal" />
                                        <span></span>
                                        Meninggal
                                    </label>
                                    <label class="radio radio-outline radio-success">
                                        <button type="button" onclick="emptyMutasi()" class="btn btn-text-primary"><u>Atur Ulang</u></button>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row tanggal-kematian-input {{!empty($user) ? $user['status_mutasi'] != "Meninggal" ? 'd-none' : '' : 'd-none'}}">
                            <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Kematian </label>
                            <div class="col col-xl-3 col-lg-3">
                                <input class="form-control @error('waktu_perubahan_mutasi') is-invalid @enderror form-control-lg " type="date" name="tanggal_kematian" value="{{ !empty($user['tanggal_kematian']) ? Carbon\Carbon::createFromFormat('Y-m-d  H:i:s', $user['tanggal_kematian'])->format('Y-m-d')  : '' }}" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Perubahan Mutasi </label>
                            <div class="col col-xl-3 col-lg-3">
                                <input class="form-control @error('waktu_perubahan_mutasi') is-invalid @enderror form-control-lg " type="date" name="waktu_perubahan_mutasi" value="{{ !empty($user['waktu_perubahan_mutasi']) ? Carbon\Carbon::createFromFormat('Y-m-d  H:i:s', $user['waktu_perubahan_mutasi'])->format('Y-m-d')  : '' }}" />
                            </div>
                        </div>


                        @if (empty($user))
                            <div class="form-group row mt-5">
                                <div class="col-lg-9 col-xl-6 offset-3">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-success">
                                            <input type="checkbox" value="1" name="akun_mobile_app"/>
                                            <span></span>
                                            Buat Akun Mobile App
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Centang untuk membuat akun yang di gunakan di siGetasan</span>
                                </div>
                            </div>
                        @else
                            <div class="form-group row align-items-center">
                                <label class="col-xl-3 col-lg-3 col-form-label">Status Akun Mobile App</label>
                                <div class="col">
                                    @if ($user['akun_mobile_app'] == '1')
                                        <span class="label label-xl label-inline label-light-success">Tersedia</span>
                                    @else
                                        <span class="label label-xl label-inline label-light-danger">Tidak Tersedia</span>
                                    @endif
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
        
            </div>
        </div>


        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="col text-right">
                <a href="/data-penduduk/penduduk" class="btn btn-secondary {{ !empty($user) ? $user['akun_mobile_app'] == 0 ? : '' : 'mr-2' }}">Batal</a>
                @if (!empty($user) && $user['akun_mobile_app'] == '0')
                <a href="/master-data/data-penduduk/create-mobile-account/{{ $user['id'] }}" class="btn btn-outline-success mx-3">Buat Akun Mobile</a>
                @endif
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

</form>
@endsection

@push('script')

    <script>

        function handleChangeStatusMutasi(el){
            if(el.value == 'Meninggal')
                document.querySelector('.tanggal-kematian-input').classList.remove('d-none')
            else
                document.querySelector('.tanggal-kematian-input').classList.add('d-none')
        }
        
        function handleChangeRadio(el){
            if(el.value == 1)
                document.querySelector('input[name=no_akta_perkawinan]').removeAttribute('disabled')
            else 
                document.querySelector('input[name=no_akta_perkawinan]').setAttribute('disabled', 'disabled')
        }

        function handleChangeRadioKelahiran(el) {
            if(el.value == 1)
                document.querySelector('input[name=no_akta_kelahiran]').removeAttribute('disabled')
            else 
                document.querySelector('input[name=no_akta_kelahiran]').setAttribute('disabled', 'disabled')
        }

        function emptyMutasi(){
            document.querySelectorAll('.mutasi-radio').forEach( e => e.checked = false )
            document.querySelector('.tanggal-kematian-input').classList.add('d-none')
            // console.log(el)
        }

        function handleChangePenyandangDisabilitas(el){
            if(el.checked)
                document.querySelector('.penyandang-disabilitas-input').classList.remove('d-none')
            else
                document.querySelector('.penyandang-disabilitas-input').classList.add('d-none')
        }

        function handleChangePenerimaBantuan(el){
            console.log(el)
            if(el.checked)
                document.querySelector('.penerima-bantuan-input').classList.remove('d-none')
            else
                document.querySelector('.penerima-bantuan-input').classList.add('d-none')
        }

    </script>
    
@endpush