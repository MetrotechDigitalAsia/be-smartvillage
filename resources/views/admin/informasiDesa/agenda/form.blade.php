@extends('admin.app')

@section('content')

<form class="f" action="{{ empty($agenda) ? route('storeAgenda') : '/informasi-desa/agenda/update/'.$agenda->slug }}" enctype="multipart/form-data" method="POST"  >

    @csrf

    <div class="card card-custom gutter-b">

        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($agenda) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>

        <!--begin::Body-->
        <div class="card-body">
            <div class="row">
                    <div class="col-xl-12">

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Judul</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control form-control-lg @error('title') is-invalid @enderror " type="text" name="title" value="{{$agenda['title'] ?? '' }}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Author</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control @error('author') is-invalid @enderror form-control-lg " type="text" name="author" value="{{$agenda['author'] ?? '' }}" />
                                @error('author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Tanggal</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control @error('date') is-invalid @enderror form-control-lg " type="date" name="date" value="{{$agenda['date'] ?? '' }}" />
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="hidden" name="description" value="{{$agenda['description'] ?? '' }}" >
                                <div id="kt_quil_1" style="height: 325px">
                                    {!! $agenda['description'] ?? '' !!}
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row justify-content-end">
                <div class="col-2 d-flex">
                    <a href="/informasi-desa/agenda" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
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