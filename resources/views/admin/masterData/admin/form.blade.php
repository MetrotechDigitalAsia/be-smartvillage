@extends('admin.app')

@section('content')


@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif  

<form action="{{ empty($admin) ? route('storeAdmin') : url('/master-data/admin/update/'.$admin->uuid) }}" method="post">

    @csrf

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($admin) ? 'Tambah Admin' : 'Ubah Admin' }}</h3>
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
            <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="fullname" value="{{$admin['fullname'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
            <div class="col-lg-9 col-xl-6">
                <input class="form-control form-control-lg form-control-solid" type="text" name="email" value="{{$admin['email'] ?? '' }}" />
            </div>
        </div>

        @if (empty($admin) ?? null)
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Kata Sandi</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" name="password" value="{{$admin['password'] ?? '' }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" name="repassword" />
                </div>
            </div>
        @endif

        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9 col-form-label">
                <div class="radio-inline">
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($admin) ? $admin['status']=="Active" ? 'checked' : '' : ''}} type="radio" name="status" value="Active" />
                        <span></span>
                        Active
                    </label>
                    <label class="radio radio-outline radio-success">
                        <input {{!empty($admin) ? $admin['status']=="Deactive" ? 'checked' : '' : ''}}  type="radio" name="status" value="Deactive" />
                        <span></span>
                        Deactive
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-xl-3 col-lg-3">Kategori</label>
            <div class="col-lg-9 col-xl-6">
                <select class="form-control form-control-lg form-control-solid" name="category">
                    <option value="">Pilih Kategori...</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item }}" {{ !empty($admin) ? $admin['type'] == $item ? 'selected' : '' : ''}}  >
                        {{ $item }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>


        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
</div>

</form>
@endsection