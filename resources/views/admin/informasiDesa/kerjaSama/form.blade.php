@extends('admin.app')

@section('content')

<form action="{{ empty($kerjaSama) ? route('storeKerjaSama') : '/informasi-desa/kerja-sama-desa/update/'.$kerjaSama->id }}" enctype="multipart/form-data" method="POST"  >

    @include('partials.success-alert')
    @include('partials.validation-alert')
    @csrf

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($kerjaSama) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>

    <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="images-preview-div row my-2"></div>
                        @if (!empty($kerjaSama))
                            <input type="hidden" name="oldImg" value="{{ $kerjaSama->image }}">
                            <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$kerjaSama->image) }}" >
                        @else
                            <img class="img-preview img-fluid my-2">
                        @endif
                        <img class="img-preview img-fluid my-2">
                        <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($kerjaSama)) required @endif >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Judul</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="description" value="{{$kerjaSama['description'] ?? '' }}" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6  text-lg-right">
                <a href="/informasi-desa/kerja-sama-desa" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
    
@endsection