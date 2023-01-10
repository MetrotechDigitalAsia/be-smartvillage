@extends('admin.app')

@section('content')


@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif  

<form action="{{ empty($userLogin) ? route('storeUserLogin') : url('/master-data/user-login/update/'.$userLogin->uuid) }}" method="post">

    @csrf

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($userLogin) ? 'Tambah Admin' : 'Ubah Admin' }}</h3>
        </div>
        <div class="card-toolbar">
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <a href="/master-data/admin" class="btn btn-secondary">Batal</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <div class="card-body">

        <!--begin::Heading-->
        <!--begin::Form Group-->

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No NIK</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="no_nik" value="{{$userLogin['no_nik'] ?? '' }}" />
            </div>
        </div>

        @if (empty($userLogin) ?? null)
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Kata Sandi</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" name="password" value="{{$userLogin['password'] ?? '' }}" />
                </div>
            </div>
        @endif

        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9 col-form-label">
                <div class="radio-inline">
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($userLogin) ? $userLogin['status']=="Active" ? 'checked' : '' : ''}} type="radio" name="status" value="Active" />
                        <span></span>
                        Active
                    </label>
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($userLogin) ? $userLogin['status']=="Deactive" ? 'checked' : '' : ''}}  type="radio" name="status" value="Deactive" />
                        <span></span>
                        Deactive
                    </label>
                </div>
            </div>
        </div>


        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
</div>

</form>
@endsection