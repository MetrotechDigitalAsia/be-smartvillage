@extends('admin.app')

@section('content')

<form action="{{ empty($family) ? '' : url('/data-penduduk/keluarga/update/'.$family->id) }}" method="post">

    @csrf


<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($family) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <div class="card-body">

        <!--begin::Heading-->
        <!--begin::Form Group-->

        <div class="form-group row align-items-center">
            <label class="col-xl-3 col-lg-3 col-form-label">Qr Code</label>
            <div class="col-lg-9 col-xl-6">
                <div class="images-preview-div row my-2"></div>
                @if (!empty($family))
                    <input type="hidden" name="oldImg" value="{{ $family->qr_code }}">
                    {!! QrCode::size(170)->style('round')->generate( env('APP_URL'). '/api/keluarga/'. $family->id ) !!}
                @else
                    <img class="img-preview img-fluid my-2">
                @endif
                <img class="img-preview img-fluid my-2">
                {{-- <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($family)) required @endif > --}}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">No KK</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('NAMA') is-invalid @enderror form-control-lg " type="text" name="no_kk" value="{{$family['no_kk'] ?? '' }}" readonly />
                @error('NAMA')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
            <div class="col-lg-9 col-xl-6">
                <input required class="form-control @error('status') is-invalid @enderror form-control-lg " type="text" name="status" value="{{$family['status'] ?? '' }}" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">Jenis BLT</label>
            <div class="col-lg-9 col-xl-6">
                <select class="form-control form-control-lg " name="blt_id">
                    <option value="">Pilih Kategori...</option>
                    @foreach ($blt as $item)
                    <option value="{{ $item->id }}" {{ !empty($item) ? $family['blt_id'] == $item->id ? 'selected' : '' : ''}}  >
                        {{ $item->type }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
    <div class="card-footer">
        <div class="row">
            <div class="col text-lg-right">
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <a href="/data-penduduk/keluarga" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </div>
</div>

</form>
@endsection