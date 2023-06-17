@extends('admin.app')

@section('content')

<form action="{{ empty($userBusinessItem) ? route('storeUmkm') : '/informasi-desa/umkm/update/'.$userBusinessItem->id }}" enctype="multipart/form-data" method="POST"  >

    @include('partials.success-alert')
    @include('partials.validation-alert')
    @csrf

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($userBusinessItem) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>


    <!--begin::Body-->
    <div class="card-body ">
        <div class="row">
            <div class="col-xl-12">

                <div class="form-group row align-items-center">
                    <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                    <div class="col-lg-9 col-xl-6">
                        <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$userBusinessItem->item_image) }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Item</label>
                    <div class="col-lg-9 col-xl-9">
                        <input readonly class="form-control form-control-lg " type="text" name="item_name" value="{{$userBusinessItem['item_name'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Harga Item</label>
                    <div class="col-lg-9 col-xl-9">
                        <input readonly class="form-control form-control-lg " type="text" name="item_price" value="Rp {{ number_format($userBusinessItem['item_price']) ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Link Marketpalce</label>
                    <div class="col-lg-9 col-xl-9">
                        <input readonly class="form-control form-control-lg " type="text" name="item_marketplace_link" value="{{$userBusinessItem['item_marketplace_link'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Kategori UMKM</label>
                    <div class="col-lg-9 col-xl-9">
                        <input readonly class="form-control form-control-lg " type="text" name="item_marketplace_link" value="{{$userBusinessItem->itemBusinessCategory->item_category ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                    <div class="col-lg-9 col-xl-9">
                        <input readonly class="form-control form-control-lg " type="text" name="user_phone_number" value="{{$userBusinessItem['user_phone_number'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label">Status</label>
                    <div class="col-9 col-form-label">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-success">
                                <input {{!empty($userBusinessItem) ? $userBusinessItem['status']=="rejected" ? 'checked' : '' : ''}} type="radio" name="status" value="rejected" />
                                <span></span>
                                Tolak
                            </label>
                            <label class="radio radio-outline radio-success">
                                <input {{!empty($userBusinessItem) ? $userBusinessItem['status']=="pending" ? 'checked' : '' : ''}}  type="radio" name="status" value="pending" />
                                <span></span>
                                Pending
                            </label>
                            <label class="radio radio-outline radio-success">
                                <input {{!empty($userBusinessItem) ? $userBusinessItem['status']=="approve" ? 'checked' : '' : ''}}  type="radio" name="status" value="approve" />
                                <span></span>
                                Terima
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input type="hidden" name="item_description" value="{{$userBusinessItem['item_description'] ?? '' }}" >
                        <div id="kt_quil_1" style="height: 325px">
                            {!! $userBusinessItem['item_description'] ?? '' !!}
                        </div>
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
                <a href="/informasi-desa/umkm/approve" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>
    
@endsection

@push('script')
    
    <script>
        
        var QuillEditor = function() {
				var textEditor = function() {
					var quill = new Quill('#kt_quil_1', {
                        readOnly: true,
						modules: {
							toolbar: [
								[{
									header: [1, 2, false]
								}],
								['bold', 'italic', 'underline'],
							]
						},
						placeholder: 'Type your text here...',
						theme: 'snow' // or 'bubble'
					});
				}

				return {
					// public functions
					init: function() {
						textEditor();
					}
				};
			}();

			jQuery(document).ready(function() {
				QuillEditor.init();
			});

    </script>


@endpush