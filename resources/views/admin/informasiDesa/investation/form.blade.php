@extends('admin.app')

@section('content')

<form action="{{ empty($investation) ? route('storeInvestation') : '/informasi-desa/investasi/update/'.$investation->uuid }}" enctype="multipart/form-data" method="POST"  >

    @csrf

    @include('partials.success-alert')
    @include('partials.validation-alert')

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($investation) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>

    <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="fullname" value="{{$investation['fullname'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Instansi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="institute_name" value="{{$investation['institute_name'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-xl-3 col-lg-3">Kategori Investasi</label>
                    <div class="col-xl-9 col-lg-9">
                        <select class="form-control form-control-lg " name="investation_category">
                            <option value="">Pilih Kategori...</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item }}" {{ !empty($investation) ? $investation['investation_category'] == $item ? 'selected' : '' : ''}}  >
                                {{ $item }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat Instansi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="institute_address" value="{{$investation['institute_address'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="email" name="institute_email" value="{{$investation['institute_email'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="institute_phone_number" value="{{$investation['institute_phone_number'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input type="hidden" name="institute_description" value="{{$investation['institute_description'] ?? '' }}" >
                        <div id="kt_quil_1" style="height: 325px">
                            {!! $investation['institute_description'] ?? '' !!}
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
                <a href="/informasi-desa/investasi" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
</form>
    
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
						document.querySelector("input[name='institute_description']").value = quill.root.innerHTML;
					});
				}

				var textEditor2 = function() {
					var quill = new Quill('#kt_quil_2', {
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
						document.querySelector("input[name='short_description']").value = quill.root.innerHTML;
					});
				}

				return {
					// public functions
					init: function() {
						textEditor();
						textEditor2();
					}
				};
			}();

			jQuery(document).ready(function() {
				QuillEditor.init();
			});

    </script>


@endpush