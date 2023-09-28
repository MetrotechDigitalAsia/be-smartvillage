@extends('admin.app')

@section('content')

    <div class="card card-custom gutter-b">

        <div class="card-header py-3">
            <div class="card-title align-items-center flex-row ">
                <h3 class="card-label font-weight-bolder text-dark">Tambah Data Pindah Keluar</h3>
            </div>
        </div>

        <!--begin::Body-->
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col col-lg-6">
                    
                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Penduduk</h3>

                    @empty($residentMoveMutation)
                    <div class="form-group validated">
                        <label class="mb-2" >Pilih Penduduk</label>
                            <select onchange="handleChangeResident(this)" class="form-control form-control-lg select2" id="resident_select" name="param">
                            <option label="Label"></option>
                        </select>
                        <div class="invalid-feedback invalid-feedback-applicant d-none">Plih penduduk</div>
                    </div>
                    @endempty


                    @livewire('create-mail.applicant-form')

                </div>
                <div class="col col-lg-6">

                    @livewire('mutation.resident-move-form', [
                        'data' => $residentMoveMutation ?? null
                    ])

                </div>

            </div>
        </div>

    </div>

    @push('script')

    <script>

        @if(!empty($residentMoveMutation))
        document.addEventListener("DOMContentLoaded", () => {
            var residentMoveMutation = {{ Js::from($residentMoveMutation) }}
            console.log(residentMoveMutation)
            if(residentMoveMutation){
                Livewire.emit('selectResident', residentMoveMutation.resident_id)
            }
        });
        @endif

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: { confirmButton: 'btn btn-primary' },
            buttonsStyling: false
        })

        Livewire.on('residentNotFound', () => {
            document.querySelector('.invalid-feedback-applicant').classList.remove('d-none')
        })

        Livewire.on('mutationSubmitted', data => {

            swalWithBootstrapButtons.fire({
                title: data.status ? 'Berhasil' : 'Gagal',
                text: data.msg,
                confirmButtonText: 'Ok',
                icon: data.status ? 'success' : 'warning',
            })
            .then(() => {
                if(data.status)
                    window.location.href = '/data-penduduk/penduduk/mutasi/pindah-keluar'
            })
        })


        function handleChangeResident(el){
            Livewire.emit('selectResident', el.value)
            Livewire.emit('selectMoveResident', el.value)
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