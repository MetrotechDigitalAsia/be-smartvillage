@extends('admin.app')

@section('content')

<form action="{{ empty($article) ? route('storeArticle') : '/informasi-desa/artikel/update/'.$article->slug }}" enctype="multipart/form-data" method="POST"  >
    @csrf
    
    @include('partials.success-alert')
    @include('partials.validation-alert')
    
    <div class="card card-custom gutter-b">
    
        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($article) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>
    
        <!--begin::Body-->
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                        <div class="col-lg-9 col-xl-6">
                            @if (!empty($article))
                                <input type="hidden" name="oldImg" value="{{ $article->image }}">
                                <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$article->image) }}" >
                            @else
                                <img class="img-preview img-fluid my-2">
                            @endif
                            <img class="img-preview img-fluid my-2">
                            <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($article)) required @endif >
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Judul</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="title" value="{{$article['title'] ?? '' }}" />
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Author</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="updated_by" value="{{$article['updated_by'] ?? '' }}" />
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-xl-3 col-lg-3">Kategori</label>
                        <div class="col-xl-9 col-lg-9">
                            <select class="form-control form-control-lg " name="article_category">
                                <option value="">Pilih Kategori...</option>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ !empty($article) ? $article['article_category'] == $item->id ? 'selected' : '' : ''}}  >
                                    {{ $item->article_category }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Jam</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="time" name="time" value="{{$article['time'] ?? '' }}" />
                        </div>
                    </div>
    
    
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tanggal</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="date" name="date" value="{{$article['date'] ?? '' }}" />
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                        <div class="col-lg-9 col-xl-9">
                            <input type="hidden" name="description" value="{{$article['description'] ?? '' }}" >
                            <div id="kt_quil_1" style="height: 325px">
                                {!! $article['description'] ?? '' !!}
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
                    <a href="javascript:history.back()" class="btn btn-secondary mr-2">Batal</a>
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