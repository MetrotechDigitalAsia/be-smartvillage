@extends('admin.app')

@section('content')

<form action="{{ empty($destinationPoint) ? route('storeDestinationPoint') : '/tourism-map/point-destinasi/update/'.$destinationPoint->slug }}" enctype="multipart/form-data" method="POST"  >

    @csrf

    @include('partials.success-alert')
    @include('partials.validation-alert')

<div class="card card-custom gutter-b">

    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($destinationPoint) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>


    <!--begin::Body-->
    <div class="card-body ">

        <div class="row">
            <div class="col-xl-12">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Multiple File Upload</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="images-preview-div row my-2"></div>
                        @if (!empty($destinationPoint) && !is_null($destinationPoint->image))

                            <input type="hidden" name="oldImg" value="{{ $destinationPoint->image }}">

                            <div class="row">
                                @foreach ( json_decode($destinationPoint->image) as $item)
                                    <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$item) }}" >
                                @endforeach
                            </div>

                        @else
                            {{-- <img class="img-preview img-fluid my-2"> --}}
                        @endif
                        <input type="file" name="image[]" id="multiple-image" onchange="previewImages(this)" class="form-control-file col-md-9"  @if(empty($destinationPoint)) required @endif multiple >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Destinasi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="name" value="{{$destinationPoint['name'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-xl-3 col-lg-3">Kategori</label>
                    <div class="col-xl-9 col-lg-9">
                        <select class="form-control form-control-lg " name="category">
                            <option value="">Pilih Kategori...</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item }}" {{ !empty($destinationPoint) ? $destinationPoint['category'] == $item ? 'selected' : '' : ''}}  >
                                {{ $item }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-lg-9 col-xl-9">
                        <div class="input-group input-group-lg input-group-solid pr-2" >
                            <input type="text" class="form-control form-control-lg " id="search_location"  />
                            <div class="btn btn-icon btn-sm btn-success get_map">
                                <i class="fab fa-sistrix "></i>
                            </div>
                        </div>
                        <div id="geomap" class="mt-5" style="width: 100%; height: 300px;" ></div>
                        <input class="form-control form-control-lg  mt-5 search_addr" type="text" name="address" value="{{$destinationPoint['address'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Latitude</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg  search_lat" type="text" name="lat" value="{{$destinationPoint['lat'] ?? '' }}" readonly/>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Longtitude</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg  search_long" type="text" name="long" value="{{$destinationPoint['long'] ?? '' }}" readonly/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="number" name="phone" value="{{$destinationPoint['phone'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Website</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg " type="text" name="website" value="{{$destinationPoint['website'] ?? '' }}" />
                    </div>
                </div>

                <div class="form-group row align-items-center">
                    <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                    <div class="col-lg-9 col-xl-9">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-success">
                                <input type="radio" name="status" value="1" {{!empty($destinationPoint) ? $destinationPoint['status']== 1 ? 'checked' : '' : ''}} >
                                <span></span>
                                Active
                            </label>
                            <label class="radio radio-outline radio-danger">
                                <input type="radio" name="status" value="0" {{!empty($destinationPoint) ? $destinationPoint['status']== 0 ? 'checked' : '' : ''}} />
                                <span></span>
                                Deactive
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row align-items-center">
                    <label class="col-xl-3 col-lg-3 col-form-label">Prioritas</label>
                    <div class="col-lg-9 col-xl-9">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-success">
                                <input type="radio" name="priority" value="1" {{!empty($destinationPoint) ? $destinationPoint['priority']== 1 ? 'checked' : '' : ''}} >
                                <span></span>
                                Ya
                            </label>
                            <label class="radio radio-outline radio-danger">
                                <input type="radio" name="priority" value="0" {{!empty($destinationPoint) ? $destinationPoint['priority']== 0 ? 'checked' : '' : ''}} />
                                <span></span>
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                    <div class="col-lg-9 col-xl-9">
                        <input type="hidden" name="description" value="{{$destinationPoint['description'] ?? '' }}" >
                        <div id="kt_quil_1" style="height: 325px">
                            {!! $destinationPoint['description'] ?? '' !!}
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
                <a href="javascript:history.back()" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary ">Simpan</button>
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