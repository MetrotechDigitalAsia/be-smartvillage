@extends('admin.app')

@section('content')

<form action="{{ empty($signature) ? route('storeSignature') : '/persuratan/signature/update/'.$signature->id }}" enctype="multipart/form-data" method="POST"  >

    @csrf

    @include('partials.success-alert')
    @include('partials.validation-alert')
    
    <div class="card card-custom gutter-b">
        
        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">{{ empty($siganture) ? 'Tambah Data' : 'Ubah Data' }}</h3>
            </div>
        </div>
        
        <!--begin::Body-->
        <div class="card-body">

            @empty($signature)
                @livewire('search-resident-component')
            @endempty

            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">File Upload</label>
                        <div class="col-lg-9 col-xl-6">
                            @if (!empty($signature))
                                <input type="hidden" name="oldImg" value="{{ $signature->image }}">
                                <img id="img-old" class="img-fluid my-2 col-6" src="{{ asset('storage/'.$signature->image) }}" >
                            @else
                                <img class="img-preview img-fluid my-2 d-none" style="max-height: 320px; object-fit: contain;">
                            @endif
                            {{-- <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  @if(empty($signature)) required @endif > --}}
                            <input type="file" name="image" id="image" onchange="previewImage()" class="form-control-file col-md-9"  >
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg  search_long" type="text" name="name" value="{{$signature['name'] ?? '' }}"/>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">Posisi</label>
                        <div class="col-lg-9 col-xl-9">
                            <div class="radio-inline">
                                <label class="radio radio-outline radio-danger">
                                    <input onchange="handleChangePosition(this)" type="radio" name="position" value="Perbekel" {{!empty($signature) ? $signature['position']== 'Perbekel' ? 'checked' : '' : ''}} >
                                    <span></span>
                                    Perbekel
                                </label>
                                <label class="radio radio-outline radio-danger">
                                    <input onchange="handleChangePosition(this)" type="radio" name="position" value="Kelian Banjar" {{!empty($signature) ? $signature['position']== 'Kelian Banjar' ? 'checked' : '' : ''}}  />
                                    <span></span>
                                    Kelian Banjar
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row banjar-categories {{ !empty($signature) ? $signature['position'] == 'Perbekel' ? 'd-none' : '' : ''}} ">
                        <label class="col-form-label col-xl-3 col-lg-3">Kategori</label>
                        <div class="col-xl-9 col-lg-9">
                            <select class="form-control form-control-lg " name="banjar">
                                <option value="">Pilih Kategori...</option>
                                <option value="Ubud" {{!empty($signature) ? $signature['banjar']== 'Ubud' ? 'selected' : '' : ''}} >Ubud</option>
                                <option value="Buangga" {{!empty($signature) ? $signature['banjar']== 'Buangga' ? 'selected' : '' : ''}} >Buangga</option>
                                <option value="Tengah" {{!empty($signature) ? $signature['banjar']== 'Tengah' ? 'selected' : '' : ''}} >Tengah</option>
                                <option value="Kauh" {{!empty($signature) ? $signature['banjar']== 'Kauh' ? 'selected' : '' : ''}} >Kauh</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">No. NIK</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="nik" value="{{$signature['nik'] ?? '' }}"/>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">No. KK</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg" type="text" name="kk" value="{{$signature['kk'] ?? '' }}"/>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">Umur </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="age" value="{{$signature['age'] ?? '' }}"/>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan </label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="citizenship" value="{{$signature['citizenship'] ?? '' }}"/>
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center mt-7">
                        <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="job" value="{{$signature['job'] ?? '' }}"/>
                        </div>
                    </div>

                    <div class="form-group row align-items-center mt-7">
                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg " type="text" name="address" value="{{$signature['address'] ?? '' }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <div class="col-2">
                    <a href="/persuratan/signature" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>

</form>

@push('script')

<script>

    function handleChangePosition(el){
        const banjar = document.querySelector('.banjar-categories')
        console.log(el.value)
        if(el.value !== 'Perbekel'){
            banjar.classList.remove('d-none')   
            return
        }
        banjar.classList.add('d-none')   
    }

    function handleChangeResident(el){
        Livewire.emit('handleChangeResident', el.value)
    }

    Livewire.on('searchResult', userData => {
        document.querySelector('input[name=name]').value = userData.nama
        document.querySelector('input[name=kk]').value = userData.no_kk
        document.querySelector('input[name=nik]').value = userData.no_nik
        document.querySelector('input[name=nik]').value = userData.no_nik
        document.querySelector('input[name=job]').value = userData.pekerjaan
        document.querySelector('input[name=citizenship]').value = userData.kewarganegaraan
        document.querySelector('input[name=address]').value = userData.alamat

        const currDate = new Date().getFullYear()
        const userDataYear = new Date(userData.tanggal_lahir).getFullYear()
        document.querySelector('input[name=age]').value = currDate - userDataYear


    })   
    
    function formatRepo(res) {
        if (res.loading) return 'mencari...';
        var markup = "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'>" + res.nama + ' (' + res.no_nik + ") </div>";
        return markup;
    }

    function formatRepoSelection(res) {
        if(res?.nama) return res.nama + ' (' + res.no_nik + ')'

        return 'Cari berdasarkan NIK dan Nama'
    }

    $("#resident_select").select2({
        placeholder: "Cari berdasarkan NIK dan Nama",
        allowClear: true,
        ajax: {
            url: "{{ route('userDataForSelectOption') }}",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    query: params.term, // search term
                };
            },
            processResults: function(data, params) {
                return {
                    results: data?.items,
                    // pagination: {
                    //     more: (params.page * 30) < data.total_count
                    // }
                };
            },
            cache: true,
        },
        escapeMarkup: function(markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });

</script>
    
@endpush
    
@endsection