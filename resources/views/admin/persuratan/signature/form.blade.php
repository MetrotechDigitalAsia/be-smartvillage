@extends('admin.app')

@section('content')

<div class="card card-custom gutter-b">


    <!--begin::Body-->
    <div class="card-body p-0">

        @include('partials.success-alert')

        @include('partials.validation-alert')

        <!--begin::Wizard-->
        <form action="{{ empty($signature) ? route('storeSignature') : '/persuratan/signature/update/'.$signature->uuid }}" enctype="multipart/form-data" method="POST"  >

            @csrf

            <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard Form-->
                            <!--begin::Form Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">{{ empty($signature) ? 'Tambah Data' : 'Ubah Data' }}</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                                            <div class="col-lg-9 col-xl-6">
                                                @if (!empty($signature))
                                                    <input type="hidden" name="oldImg" value="{{ $signature->image }}">
                                                    <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$signature->image) }}" >
                                                @else
                                                    <img class="img-preview img-fluid my-2 d-none" style="max-height: 320px; object-fit: contain;">
                                                @endif
                                                <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($signature)) required @endif >
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
                        <div class="col">
                            <a href="/persuratan/signature" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary ml-2">Simpan</button>
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