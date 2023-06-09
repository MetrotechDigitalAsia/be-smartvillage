@extends('admin.app')

@section('content')


@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif  

@include('partials.validation-alert')

<form action="{{ empty($data) ? route('storeUserLogin') : url('/master-data/user-login/update/'.$data->id) }}" method="post">

    @csrf


<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">User Login</h3>
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
                <input class="form-control form-control-lg form-control-solid" type="text" readonly name="NAMA" value="{{$data['name'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Nik</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="TEMPAT_LAHIR" readonly value="{{$data['nik'] ?? '' }}" />
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
        <div class="row justify-content-end">
            <div class="col-2">
                <a href="/master-data/user-login" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

</form>
@endsection