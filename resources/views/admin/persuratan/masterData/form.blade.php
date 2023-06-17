@extends('admin.app')

@section('content')

<form action="{{ empty($mail) ? route('storeMail') : '/persuratan/master-data/update/'.$mail->id }}" enctype="multipart/form-data" method="POST" >

    @csrf

    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">Detail Surat</h3>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <div class="card-body pb-0">

            <!--begin::Heading-->
            <!--begin::Form Group-->

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                <div class="col-lg-9 col-xl-9">
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
                    <input readonly class="form-control required form-control-lg " type="text" name="title" value="{{$mail['title'] ?? '' }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                <div class="col-lg-9 col-xl-9">
                    <input type="hidden" required name="description" value="{{$mail['description'] ?? '' }}" >
                    <div id="kt_quil_1" style="height: 325px">
                        {!! $mail['description'] ?? '' !!}
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col text-lg-right">
                        <a href="/persuratan/master-data" class="btn btn-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>

            <!--begin::Form Group-->
        </div>
        <!--end::Form-->
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