@extends('admin.app')

@section('content')

<form action="{{ empty($bLT) ? route('storeBlt') : url('/master-data/blt/update/'.$bLT->id) }}" method="post">

    @csrf

    <div class="card card-custom">

        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($bLT) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <div class="card-body">

            <!--begin::Heading-->
            <!--begin::Form Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Jenis BLT</label>
                <div class="col-lg-9 col-xl-6">
                    <input class="form-control form-control-lg " type="text" name="type" value="{{ $bLT['type'] ?? '' }}" required />
                </div>
            </div>
            <!--begin::Form Group-->
        </div>
        <!--end::Form-->
        <div class="card-footer">
            <div class="row">
                <div class="col text-lg-right">
                    <a href="/master-data/blt" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection