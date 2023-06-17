@extends('admin.app')

@section('content')

<form action="{{ empty($destinationPoint) ? route('storeDestinationPoint') : '/tourism-map/point-destinasi/update/'.$destinationPoint->slug }}" enctype="multipart/form-data" method="POST"  >

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($complaint) ? 'Detail' : 'Detail' }}</h3>
        </div>
    </div>


    <!--begin::Body-->
    <div class="card-body ">
        <div class="row">
                <div class="col-xl-12">

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Nama </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="name" value="{{$complaint['name'] ?? '' }}" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Telepon </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="phone" value="{{$complaint['phone'] ?? '' }}" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Email </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="email" value="{{$complaint['email'] ?? '' }}" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Kategori Aduan </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="email" value="{{$complaint->complaintCategory->complaint_category ?? '' }}" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Aduan</label>
                        <div class="col-lg-9 col-xl-9">
                            <input type="hidden" name="description" value="{{$complaint['description'] ?? '' }}" >
                            <div id="kt_quil_1" class="readonly" style="height: 325px">
                                {!! $complaint['description'] ?? '' !!}
                            </div>
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
                {{-- <button type="submit" class="btn btn-primary mr-2">Simpan</button> --}}
                <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
            </div>
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
