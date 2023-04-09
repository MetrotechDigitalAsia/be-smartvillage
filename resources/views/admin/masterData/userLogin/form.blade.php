@extends('admin.app')

@section('content')


@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif  

@include('partials.validation-alert')

<form action="{{ empty($data) ? route('storeUserLogin') : url('/master-data/user-login/update/'.$data->uuid) }}" method="post">

    @csrf


    @if (!empty($data) )
        <input hidden name="uuid" value="{{ $data->uuid }}" />
        <input hidden name="id" value="{{ $data->id }}" />
    @endif     

<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($data) ? 'Tambah Admin' : 'Ubah Admin' }}</h3>
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
                <input class="form-control form-control-lg form-control-solid" type="text" name="NAMA" value="{{$data['NAMA'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="TEMPAT_LAHIR" value="{{$data['TEMPAT_LAHIR'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir </label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="date" name="TANGGAL_LAHIR" value="{{ !empty($data['TEMPAT_LAHIR']) ? Carbon\Carbon::createFromFormat('Y-m-d', $data['TANGGAL_LAHIR'])->format('Y-m-d')  : '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">SHDK</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="SHDK" value="{{$data['SHDK'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="ALAMAT" value="{{$data['ALAMAT'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No KK</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="NO_KK" value="{{$data['NO_KK'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No NIK</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="NO_NIK" value="{{$data['NO_NIK'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9 col-form-label">
                <div class="radio-inline">
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($data) ? $data['status']=="Active" ? 'checked' : '' : ''}} type="radio" name="status" value="Active" />
                        <span></span>
                        Active
                    </label>
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($data) ? $data['status']=="Deactive" ? 'checked' : '' : ''}}  type="radio" name="status" value="Deactive" />
                        <span></span>
                        Deactive
                    </label>
                </div>
            </div>
        </div>

        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
    <div class="card-footer">
        <div class="row">
            <div class="col offset-3">
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <a href="/master-data/user-login" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </div>
</div>

</form>
@endsection