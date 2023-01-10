@extends('admin.app')

@section('content')

<div class="card card-custom gutter-b">


    <!--begin::Body-->
    <div class="card-body p-0">

        @if (session()->has('error'))
            <div class="row pt-8 px-8">
                <div class="col-lg-12">
                    <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ session('error') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @foreach ($fields as $field)
            @if ($errors->has($field))
            <div class="row pt-8 px-8">
                <div class="col-lg-12">
                    <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ $errors->first($field)}}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

        @if (session()->has('success'))
            <div class="row pt-8 px-8">
                <div class="col-lg-12">
                    <div class="alert alert-custom alert-notice alert-light-success fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ session('success') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!--begin::Wizard-->
        <form action="{{ empty($userBusinessItem) ? route('storeUmkm') : '/informasi-desa/umkm/update/'.$userBusinessItem->uuid }}" enctype="multipart/form-data" method="POST"  >

            @csrf

            <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard Form-->
                            <!--begin::Form Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">{{ empty($userBusinessItem) ? 'Tambah Data' : 'Ubah Data' }}</h3>
                                <div class="row">
                                    <div class="col-xl-12">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="images-preview-div row my-2"></div>
                                                @if (!empty($userBusinessItem))
                                                    <input type="hidden" name="oldImg" value="{{ $userBusinessItem->item_image }}">
                                                    <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$userBusinessItem->item_image) }}" >
                                                @else
                                                    <img class="img-preview img-fluid my-2">
                                                @endif
                                                <img class="img-preview img-fluid my-2">
                                                <input type="file" name="item_image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($userBusinessItem)) required @endif >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">No NIK</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="no_nik" value="{{$userBusinessItem['no_nik'] ?? '' }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nama Item</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="item_name" value="{{$userBusinessItem['item_name'] ?? '' }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Harga Item</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="item_price" value="{{$userBusinessItem['item_price'] ?? '' }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Link Marketpalce</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="item_marketplace_link" value="{{$userBusinessItem['item_marketplace_link'] ?? '' }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-xl-3 col-lg-3">Kategori UMKM</label>
                                            <div class="col-xl-9 col-lg-9">
                                                <select class="form-control form-control-lg form-control-solid" name="item_category_id">
                                                    <option value="">Pilih Kategori...</option>
                                                    @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}" {{ !empty($userBusinessItem) ? $userBusinessItem['item_category_id'] == $item->id ? 'selected' : '' : ''}}  >
                                                        {{ $item->item_category }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="user_phone_number" value="{{$userBusinessItem['user_phone_number'] ?? '' }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Status</label>
                                            <div class="col-9 col-form-label">
                                                <div class="radio-inline">
                                                    <label class="radio radio-outline radio-success">
                                                        <input {{!empty($userBusinessItem) ? $userBusinessItem['status']=="Active" ? 'checked' : '' : ''}} type="radio" name="status" value="Active" />
                                                        <span></span>
                                                        Active
                                                    </label>
                                                    <label class="radio radio-outline radio-success">
                                                        <input {{!empty($userBusinessItem) ? $userBusinessItem['status']=="Deactive" ? 'checked' : '' : ''}}  type="radio" name="status" value="Deactive" />
                                                        <span></span>
                                                        Deactive
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
                        <!--end::Form Wizard Form-->
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6  text-lg-right">
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="/informasi-desa/umkm" class="btn btn-secondary">Batal</a>
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

@push('script')
    
    <script>
        
        var QuillEditor = function() {
				var textEditor = function() {
					var quill = new Quill('#kt_quil_1', {
						modules: {
							toolbar: [
								[{
									header: [1, 2, false]
								}],
								['bold', 'italic', 'underline'],
							]
						},
						readOnly: '{{ $readonly ?? false }}',
						placeholder: 'Type your text here...',
						theme: 'snow' // or 'bubble'
					});
					quill.on('text-change', function(delta, oldDelta, source) {
						document.querySelector("input[name='item_description']").value = quill.root.innerHTML;
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