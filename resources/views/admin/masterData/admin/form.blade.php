@extends('admin.app')

@section('content')

<form action="{{ empty($admin) ? route('storeAdmin') : url('/master-data/admin/update/'.$admin->id) }}" method="post">

    @csrf

    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($admin) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <div class="card-body pb-0">

            <!--begin::Heading-->
            <!--begin::Form Group-->

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                <div class="col-lg-9 col-xl-9">
                    <input required class="form-control form-control-lg " type="text" name="fullname" value="{{$admin['fullname'] ?? '' }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                <div class="col-lg-9 col-xl-9">
                    <input required class="form-control form-control-lg " type="email" name="email" value="{{$admin['email'] ?? '' }}" />
                </div>
            </div>

            @if (empty($admin) ?? null)
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Kata Sandi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input required class="form-control form-control-lg " type="text" name="password" value="{{$admin['password'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input required class="form-control form-control-lg " type="text" name="repassword" />
                    </div>
                </div>
            @endif

            <div class="form-group row">
                <label class="col-3 col-form-label">Status</label>
                <div class="col-9 col-form-label">
                    <div class="radio-inline">
                        <label class="radio radio-outline radio-success">
                            <input required {{!empty($admin) ? $admin['status']=="Active" ? 'checked' : '' : ''}} type="radio" name="status" value="Active" />
                            <span></span>
                            Active
                        </label>
                        <label class="radio radio-outline radio-success">
                            <input required {{!empty($admin) ? $admin['status']=="Deactive" ? 'checked' : '' : ''}}  type="radio" name="status" value="Deactive" />
                            <span></span>
                            Deactive
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-xl-3 col-lg-3">Kategori</label>
                <div class="col-lg-9 col-xl-9">
                    <select required class="form-control form-control-lg " name="type">
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
        <div class="card-footer">
            <div class="row">
                <div class="col text-lg-right">
                    <a href="/master-data/admin" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
        <!--end::Form-->
    </div>

</form>
@endsection