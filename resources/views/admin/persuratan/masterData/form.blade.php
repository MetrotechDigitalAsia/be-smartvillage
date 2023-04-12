@extends('admin.app')

@section('content')

<div class="card card-custom gutter-b">


    <!--begin::Body-->
    <div class="card-body p-0">

        @include('partials.success-alert')

        @include('partials.validation-alert')

        <!--begin::Wizard-->
        <form action="{{ empty($mail) ? route('storeMail') : '/persuratan/master-data/update/'.$mail->id }}" enctype="multipart/form-data" method="POST"  >

            @csrf

            <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard Form-->
                            <!--begin::Form Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">{{ empty($mail) ? 'Tambah Data' : 'Ubah Data' }}</h3>
                                <div class="row">
                                    <div class="col-xl-12">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                                            <div class="col-lg-9 col-xl-6">
                                                @if (!empty($mail))
                                                    <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$mail->image) }}" >
                                                @else
                                                    <img class="img-preview img-fluid my-2">
                                                @endif
                                                <img class="img-preview img-fluid my-2">
                                                <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($mail)) required @endif >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nama Surat</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control required form-control-lg form-control-solid" type="text" name="title" value="{{$mail['title'] ?? '' }}" />
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="form-group row">
                                            <label class="col-3 col-form-label">Status</label>
                                            <div class="col-9 col-form-label">
                                                <div class="radio-inline">
                                                    <label class="radio radio-outline radio-success">
                                                        <input {{!empty($mail) ? $mail['status']=="rejected" ? 'checked' : '' : ''}} type="radio" name="status" value="rejected" />
                                                        <span></span>
                                                        Tolak
                                                    </label>
                                                    <label class="radio radio-outline radio-success">
                                                        <input {{!empty($mail) ? $mail['status']=="pending" ? 'checked' : '' : ''}}  type="radio" name="status" value="pending" />
                                                        <span></span>
                                                        Pending
                                                    </label>
                                                    <label class="radio radio-outline radio-success">
                                                        <input {{!empty($mail) ? $mail['status']=="approve" ? 'checked' : '' : ''}}  type="radio" name="status" value="approve" />
                                                        <span></span>
                                                        Terima
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input type="hidden" required name="description" value="{{$mail['description'] ?? '' }}" >
                                                <div id="kt_quil_1" style="height: 325px">
                                                    {!! $mail['description'] ?? '' !!}
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
                            <a href="/persuratan/master-data" class="btn btn-secondary">Batal</a>
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
						document.querySelector("input[name='description']").value = quill.root.innerHTML;
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