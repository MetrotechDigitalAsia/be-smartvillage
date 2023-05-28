@extends('admin.app')

@section('content')

<div class="card card-custom gutter-b">


    <!--begin::Body-->
    <div class="card-body p-0">

        @include('partials.success-alert')

        @include('partials.validation-alert')

        <!--begin::Wizard-->
        <form action="{{ empty($itemBusinessCategory) ? route('storeItemBusinessCategory') : '/master-data/kategori-umkm/update/'.$itemBusinessCategory->id }}" enctype="multipart/form-data" method="POST"  >

            @csrf

            <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard Form-->
                            <!--begin::Form Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">{{ empty($itemBusinessCategory) ? 'Tambah Data' : 'Ubah Data' }}</h3>
                                <div class="row">
                                    <div class="col-xl-12">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nama Kategori </label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="item_category" value="{{$itemBusinessCategory['item_category'] ?? '' }}" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <!--end::Form Wizard Form-->
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6  text-lg-right">
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="/master-data/kategori-umkm" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Wizard-->
    </div>
    <!--end::Body-->
</div>
    
@endsection
