@extends('admin.app')

@section('content')

<form action="{{ empty($complaintCategory) ? route('storeComplaintCategory') : '/master-data/kategori-pengaduan/update/'.$complaintCategory->id }}" enctype="multipart/form-data" method="POST"  >

    @csrf
    @include('partials.success-alert')
    @include('partials.validation-alert')

<div class="card card-custom gutter-b">

    
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($complaintCategory) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>

    <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Kategori </label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="complaint_category" value="{{$complaintCategory['complaint_category'] ?? '' }}" />
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
                <a href="/master-data/kategori-artikel" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
        </div>
    </div>
    
</form>
@endsection
