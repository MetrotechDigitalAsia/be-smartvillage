@extends('admin.app')

@section('content')

<form action="{{ empty($userData) ? route('storeUserData') : url('/data-penduduk/penduduk/update/'.$userData->id) }}" method="post">

    @csrf


@if (!empty($userData) )
    <input hidden name="uuid" value="{{ $userData->uuid }}" />
    <input hidden name="id" value="{{ $userData->id }}" />
@endif     

<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($userData) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <div class="card-body">

        <!--begin::Heading-->
        <!--begin::Form Group-->

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('NAMA') is-invalid @enderror form-control-lg form-control-solid" type="text" name="NAMA" value="{{$userData['NAMA'] ?? '' }}" required />
                @error('NAMA')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('TEMPAT_LAHIR') is-invalid @enderror form-control-lg form-control-solid" type="text" name="TEMPAT_LAHIR" value="{{$userData['TEMPAT_LAHIR'] ?? '' }}" required />
                @error('TEMPAT_LAHIR')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir </label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('TANGGAL_LAHIR') is-invalid @enderror form-control-lg form-control-solid" type="date" name="TANGGAL_LAHIR" value="{{ !empty($userData['TANGGAL_LAHIR']) ? Carbon\Carbon::createFromFormat('Y-m-d', $userData['TANGGAL_LAHIR'])->format('Y-m-d')  : '' }}" required />
                @error('TANGGAL_LAHIR')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Umur</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="number" name="UMUR" value="{{$userData['UMUR'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Golongan Darah</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="GOLONGAN_DARAH" value="{{$userData['GOLONGAN_DARAH'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('ALAMAT') is-invalid @enderror form-control-lg form-control-solid" type="text" name="ALAMAT" value="{{$userData['ALAMAT'] ?? '' }}" required />
                @error('ALAMAT')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">RT</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('RT') is-invalid @enderror form-control-lg form-control-solid" type="text" name="RT" value="{{$userData['RT'] ?? '' }}" required />
                @error('RT')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror        
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">RW</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('RW') is-invalid @enderror form-control-lg form-control-solid" type="text" name="RW" value="{{$userData['RW'] ?? '' }}" required />
                @error('RW')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Banjar</label>
            <div class="col-lg-9 col-xl-6">
                <select class="form-control form-control-lg form-control-solid" name="BANJAR">
                    @php
                        $banjar = ['Buangga', 'Kauh', 'Ubud', 'Tengah']
                    @endphp
                    <option value="">Pilih Banjar...</option>
                    @foreach ($banjar as $item)
                    <option value="{{ $item }}" {{ !empty($userData) ? $userData['BANJAR'] == $item ? 'selected' : '' : ''}}  >
                        {{ $item }}
                    </option>
                    @endforeach
                </select>
                @error('BANJAR')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No KK</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('NO_KK') is-invalid @enderror form-control-lg form-control-solid" type="text" name="NO_KK" value="{{$userData['NO_KK'] ?? '' }}" required />
                @error('NO_KK')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No NIK</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('NIK') is-invalid @enderror form-control-lg form-control-solid" type="text" name="NIK" value="{{$userData['NIK'] ?? '' }}" required />
                @error('NIK')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Status Perkawinan</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="STATUS_PERKAWINAN" value="{{$userData['STATUS_PERKAWINAN'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">SHDK</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="SHDK" value="{{$userData['SHDK'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3 col-form-label">Jenis Kelamin</label>
            <div class="col-9 col-form-label">
                <div class="radio-inline">
                    <label class="radio radio-outline radio-success">
                        <input required {{!empty($userData) ? $userData['JENIS_KELAMIN']=="Laki Laki" ? 'checked' : '' : ''}} type="radio" name="JENIS_KELAMIN" value="Laki Laki" />
                        <span></span>
                        Laki Laki
                    </label>
                    <label class="radio radio-outline radio-success">
                        <input required {{!empty($userData) ? $userData['JENIS_KELAMIN']=="Perempuan" ? 'checked' : '' : ''}}  type="radio" name="JENIS_KELAMIN" value="Perempuan" />
                        <span></span>
                        Perempuan
                    </label>
                </div>
                @error('JENIS_KELAMIN')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Pendidikan</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="PENDIDIKAN" value="{{$userData['PENDIDIKAN'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="PEKERJAAN" value="{{$userData['PEKERJAAN'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="KEWARGANEGARAAN" value="{{$userData['KEWARGANEGARAAN'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row align-items-center">    
            <label class="col-xl-3 col-lg-3 col-form-label">Ketua (RT/RW/Banjar)</label>
            <div class="col-lg-9 col-xl-6">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline checkbox-success">
                        <input type="checkbox" {{ !empty($userData) ? $userData['KETUA_RT'] == '1' ? 'checked' : '' : '' }} name="KETUA_RT"/>
                        <span></span>
                        RT
                    </label>
                    <label class="checkbox checkbox-outline checkbox-success ">
                        <input type="checkbox" {{ !empty($userData) ? $userData['KETUA_RW'] == '1' ? 'checked' : '' : '' }} name="KETUA_RW" />
                        <span></span>
                        RW
                    </label>
                    <label class="checkbox checkbox-outline checkbox-success">
                        <input type="checkbox" {{ !empty($userData) ? $userData['KETUA_BANJAR'] == '1' ? 'checked' : '' : '' }} name="KETUA_BANJAR" />
                        <span></span>
                        Banjar
                    </label>
                </div>
            </div>
        </div>

        @if (empty($userData))
            <div class="form-group row mt-5">
                <div class="col-lg-9 col-xl-6 offset-3">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-success">
                            <input type="checkbox" value="1" name="AKUN_MOBILE_APP"/>
                            <span></span>
                            Buat Akun Mobile App
                        </label>
                    </div>
                    <span class="form-text text-muted">Centang untuk membuat akun yang di gunakan di SiGetasan</span>
                </div>
            </div>
        @else
            <div class="form-group row align-items-center">
                <label class="col-xl-3 col-lg-3 col-form-label">Status Akun Mobile App</label>
                <div class="col-lg-9 col-xl-6">
                    @if ($userData['AKUN_MOBILE_APP'] == '1')
                        <span class="label label-xl label-inline label-light-success">Tersedia</span>
                    @else
                        <span class="label label-xl label-inline label-light-danger">Tidak Tersedia</span>
                    @endif
                </div>
            </div>
        @endif

        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
    <div class="card-footer">
        <div class="row">
            <div class="col offset-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/data-penduduk/penduduk" class="btn btn-secondary mx-2">Batal</a>
                @if (!empty($userData) && $userData['AKUN_MOBILE_APP'] == '0')
                <a href="/master-data/data-penduduk/create-mobile-account/{{ $userData['id'] }}" class="btn btn-outline-success">Buat Akun Mobile</a>
                @endif
            </div>
        </div>
    </div>
</div>

</form>
@endsection