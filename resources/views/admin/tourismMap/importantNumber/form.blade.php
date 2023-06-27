@extends('admin.app')

@section('content')

<form action="{{ empty($importantNumber) ? route('storeImportantNumber') : '/tourism-map/important-number/update/'.$importantNumber->uuid }}" enctype="multipart/form-data" method="POST"  >

    @csrf

    @include('partials.success-alert')
    @include('partials.validation-alert')

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($importantNumber) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>

    <!--begin::Body-->
    <div class="card-body ">
        <div class="row">
            <div class="col-xl-12">

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama </label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="name" value="{{$importantNumber['name'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Telepon </label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="number" name="phone" value="{{$importantNumber['phone'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-xl-3 col-lg-3">Banjar</label>
                    <div class="col-xl-9 col-lg-9">
                        <select class="form-control form-control-lg " name="regency">
                            <option value="">Pilih Banjar...</option>
                            @foreach ($regency as $item)
                            <option value="{{ $item }}" {{ !empty($importantNumber) ? $importantNumber['regency'] == $item ? 'selected' : '' : ''}}  >
                                {{ $item }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat </label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="address" value="{{$importantNumber['address'] ?? '' }}" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end::Body-->
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6  text-lg-right">
                <a href="javascript:history.back()" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

</form>
    
@endsection
