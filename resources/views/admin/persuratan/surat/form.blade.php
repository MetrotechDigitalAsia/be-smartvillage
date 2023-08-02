@extends('admin.app')

@section('content')

    <div class="card card-custom gutter-b">

        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">Buat Surat</h3>
            </div>
        </div>

        <!--begin::Body-->
        <div class="card-body">
            <div class="row justify-content-between">
                    <div class="col col-lg-6">
                        
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Pemohon</h3>

                        <div class="form-group validated">
                            <label class="mb-2" >Pilih Pemohon</label>
                            <select onchange="handleChangeResident(this)" class="form-control form-control-lg select2" id="resident_select" name="param">
                                <option label="Label"></option>
                            </select>
                            <div class="invalid-feedback invalid-feedback-applicant d-none">Plih pemohon surat</div>
                        </div>

                        @livewire('create-mail.applicant-form')

                    </div>
                <div class="col col-lg-6">

                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Surat</h3>

                    @if (request()->query('type') == 'surat-keterangan-meninggal')
                    <div class="form-group validated">
                        <label class="mb-2" >Nama yang Meninggal</label>
                        <select onchange="handleChangeDeathSubject(this)" class="form-control form-control-lg select2" id="death_select_option" name="param">
                            <option label="Label"></option>
                        </select>
                        <div class="invalid-feedback invalid-feedback-subject d-none">Plih nama yang meninggal</div>
                    </div>
                    @endif

                    @if (request()->query('type') == 'surat-keterangan-perkawinan')
                    <div class="form-group validated">
                        <label class="mb-2" >
                            @if (Str::contains(Request::getRequestUri(), 'surat-keterangan-perkawinan'))
                                Nama Calon Suami
                            @endif
                        </label>
                        <select onchange="handleChangeSubject1(this)" class="form-control form-control-lg select2" id="subject_1_select_option" name="param">
                            <option label="Label"></option>
                        </select>
                        <div class="invalid-feedback invalid-feedback-subject-1 d-none">Plih nama subjek pertama</div>
                    </div>
                    <div class="form-group validated">
                        <label class="mb-2" >
                            @if (Str::contains(Request::getRequestUri(), 'surat-keterangan-perkawinan'))
                                Nama Calon Istri
                            @endif
                        </label>
                        <select onchange="handleChangeSubject2(this)" class="form-control form-control-lg select2" id="subject_2_select_option" name="param">
                            <option label="Label"></option>
                        </select>
                        <div class="invalid-feedback invalid-feedback-subject-2 d-none">Plih nama subjek kedua</div>
                    </div>
                    @endif

                    @livewire('create-mail.mail-form')

                    <div class="row justify-content-end">
                        <div class="col-4">
                            <a href="/persuratan/surat" class="btn btn-secondary mr-2">Batal</a>
                            <button type="button" onclick="submitMailForm()" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    @push('script')

    <script>

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: { confirmButton: 'btn btn-primary' },
            buttonsStyling: false
        })

        Livewire.on('applicantNotFound', () => {
            document.querySelector('.invalid-feedback-applicant').classList.remove('d-none')
        })

        Livewire.on('subjectNotFound', () => {
            document.querySelector('.invalid-feedback-subject').classList.remove('d-none')
        })

        Livewire.on('subject1NotFound', () => {
            document.querySelector('.invalid-feedback-subject-1').classList.remove('d-none')
        })

        Livewire.on('subject2NotFound', () => {
            document.querySelector('.invalid-feedback-subject-2').classList.remove('d-none')
        })

        Livewire.on('mailSubmitted', data => {

            swalWithBootstrapButtons.fire({
                title: data.status ? 'Berhasil' : 'Gagal',
                text: data.msg,
                confirmButtonText: 'Ok',
                icon: data.status ? 'success' : 'warning',
            })
            .then(() => {
                if(data.status)
                    window.location.href = '/persuratan/surat'
            })
        })

        function handleChangeResident(el){
            Livewire.emit('selectResident', el.value)
            document.querySelector('.invalid-feedback-applicant').classList.add('d-none')
        }

        function handleChangeDeathSubject(el){
            Livewire.emit('selectDeathSubject', el.value)
            document.querySelector('.invalid-feedback-applicant').classList.add('d-none')
        }

        function handleChangeSubject1(el){
            Livewire.emit('selectSubject1', el.value)
            document.querySelector('.invalid-feedback-applicant').classList.add('d-none')
        }

        function handleChangeSubject2(el){
            Livewire.emit('selectSubject2', el.value)
            document.querySelector('.invalid-feedback-applicant').classList.add('d-none')
        }

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

        function submitMailForm(){
            Livewire.emit('submitCreateMailForm')
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

        $("#death_select_option").select2({
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

        $("#subject_1_select_option").select2({
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

        $("#subject_2_select_option").select2({
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