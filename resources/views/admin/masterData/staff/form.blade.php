@extends('admin.app')

@section('content')

<form action="{{ empty($staff) ? route('storeStaff') : '/master-data/staff/update/'.$staff->id }}" enctype="multipart/form-data" method="POST"  >

<div class="card card-custom gutter-b">


    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($staff) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>

    <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="images-preview-div row my-2"></div>
                        @if (!empty($staff))
                            <input type="hidden" name="oldImg" value="{{ $staff->image }}">
                            <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$staff->image) }}" >
                        @else
                            <img class="img-preview img-fluid my-2">
                        @endif
                        <img class="img-preview img-fluid my-2">
                        <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($staff)) required @endif >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="fullname" value="{{$staff['fullname'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-xl-3 col-lg-3">Posisi</label>
                    <div class="col-xl-9 col-lg-9">
                        <select class="form-control form-control-lg form-control-solid" name="id_position" required >
                            <option value="">Pilih Kategori...</option>
                            @foreach ($positions as $item)
                            <option value="{{ $item->id }}" {{ !empty($staff) ? $staff['id_position'] == $item->id ? 'selected' : '' : ''}}  >
                                {{ $item->position_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Tangal Lahir</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="date" name="date_of_birth" value="{{$staff['date_of_birth'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Telepon</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="phone" value="{{$staff['phone'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="email" name="email" value="{{$staff['email'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="address" value="{{$staff['address'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                    <div class="col-lg-9 col-xl-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="status" value="{{$staff['status'] ?? '' }}" required />
                    </div>
                </div>

                <div class="form-group row align-items-center">
                    <label class="col-xl-3 col-lg-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-lg-9 col-xl-9">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-success">
                                <input type="radio" name="gender" value="Laki-laki" {{!empty($staff) ? $staff['gender']== 'Laki-laki' ? 'checked' : '' : ''}} required >
                                <span></span>
                                Laki Laki
                            </label>
                            <label class="radio radio-outline radio-danger">
                                <input type="radio" name="gender" value="Perempuan" {{!empty($staff) ? $staff['gender']== 'Perempuan' ? 'checked' : '' : ''}} required />
                                <span></span>
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!--end::Body-->
    <div class="card-footer">
        <div class="row">
            <div class="col text-lg-right">
                <a href="/master-data/staff" class="btn btn-secondary mr-2">Batal</a>
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