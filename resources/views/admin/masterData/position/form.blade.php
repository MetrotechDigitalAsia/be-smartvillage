@extends('admin.app')

@section('content')

<form action="{{ empty($position) ? route('storePosition') : '/master-data/position/update/'.$position->id }}" enctype="multipart/form-data" method="POST"  >

    @csrf
    @include('partials.success-alert')
    @include('partials.validation-alert')

    <div class="card card-custom gutter-b">

        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($position) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>


        <!--begin::Body-->
        <div class="card-body">

            <div class="row">
                <div class="col-xl-12">

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Nama Posisi </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg form-control-solid" type="text" name="position_name" value="{{ $position['position_name'] ?? '' }}" />
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
                    <a href="/master-data/position" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
    
@endsection
