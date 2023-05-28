<div class="card card-custom">
    <!--begin::Header-->

    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title flex-grow-1">
            <h3 class="card-label">Surat Masuk</h3>
            <div class="input-icon mr-5 ml-auto">
                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                <span>
                    <i class="flaticon2-search-1 text-muted"></i>
                </span>
            </div>
        </div>
    </div>
	
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0">
        <!--begin: Datatable-->
		@include('partials.success-alert')

        <div class="table-responsive">
            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
        </div>
        <!--end: Datatable-->
    </div>
    <!--end::Body-->

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title">Pemberitahuan</h5>
                </div>
                <div class="modal-body">
                    <span>yakin ingin <span class="mail-type"></span> surat ?</span>
                </div>
                <div class="modal-footer py-2 border-0">
                    <button type="button" class="btn btn-text font-weight-bold" data-dismiss="modal">Batal</button>
                    <button type="button" onclick="handleSubmit(this)" data-dismiss="modal" class="btn btn-primary font-weight-bold approve-btn">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" class="mail-form" >
        @csrf
    </form>
</div>

@push('script')

<script>

    var Widget = function() {
        // Private functions

        var createTable = function() {

            var datatable = $('#kt_datatable').KTDatatable({
                // datasource definition
                data: {
                    type: 'local',
                    pageSize: 10,
                    source: {!! $data !!},
                },
        
                // layout definition
                layout: {
                    scroll: true,
                    height: 500,
                    footer: false,
                },
        
                // column sorting
                sortable: false,
                pagination: true,
        
                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch'
                },

                rows: {
                    autoHide: false
                },
        
                // columns definition
                columns: [
                {
                    field: 'more',
                    width: 10,
                    overflow: 'visible',
                    template: function(e) {
                        return `\
                            <div class="dropdown dropdown-inline dropright">
                                <button data-offset="0,10" type="button" data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon mr-2 bg-light" title="Menu" aria-haspopup="true" aria-expanded="false">\
                                    <span class="svg-icon svg-icon-primary svg-icon-lg">\
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                <rect x="0" y="0" width="24" height="24"/>\
                                                <circle fill="#000000" cx="5" cy="12" r="2"/>\
                                                <circle fill="#000000" cx="12" cy="12" r="2"/>\
                                                <circle fill="#000000" cx="19" cy="12" r="2"/>\
                                            </g>\
                                        </svg>\
                                    </span>\
                                </button>\
                                <div class="dropdown-menu dropdown-menu-sm">\
                                    <ul class="navi navi-hover">
                                        <li class="navi-item">
                                            <a class="navi-link" href="/persuratan/surat/show/${e.id}">
                                                <span class="navi-icon"><i class="flaticon2-paper"></i></span>
                                                <span class="navi-text">Lihat Detail</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a class="navi-link" href="javascript:;" onclick="onActionClick(this, 'Process')" data-toggle="modal" data-target="#confirmModal" data-mail-id="${e.id}" >
                                                <span class="navi-icon"><i class="flaticon2-hourglass-1"></i></span>
                                                <span class="navi-text">Proses</span>
                                            </a>
                                        </li>
                                        <div class="dropdown-divider"></div>\
                                        <li class="navi-item">
                                            <a class="navi-link" href="javascript:;" onclick="onActionClick(this, 'Rejected')" data-toggle="modal" data-target="#confirmModal" data-mail-id="${e.id}">
                                                <span class="navi-icon"><i class="flaticon2-trash"></i></span>
                                                <span class="navi-text">Tolak</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>\
                            </div>
                        `;
                    }
                },
                {
                    field: 'row_index',
                    title: '#',
                    sortable: 'asc',
                    width: 20,
                    type: 'number',
                    selector: false,
                    textAlign: 'right',
                },{
                    field: 'mail_number',
                    title: 'Nomor Surat',
                    width: 120,
                    template: (e) => e.mail_number === null ? 'Menunggu Verifikasi' : e.mail_number
                },{
                    field: 'mail_type',
                    title: 'Jenis Surat',
                    width: 190,
                },{
                    field: 'name',
                    title: 'Nama Pengirim',
                    width: 120
                },{
                    field: 'created_at',
                    title: 'Tanggal Masuk',
                    template: (e) => {
                        const date = new Date(e.created_at)
                        return Intl.DateTimeFormat('id',{
                            month: 'long',
                            day: 'numeric',
                            year: 'numeric',
                            weekday: 'long'
                        }).format(date)
                    },
                    width: 130
                },{
                    field: 'time',
                    title: 'Waktu Masuk',
                    template: (e) => {
                        const date = new Date(e.created_at)
                        return Intl.DateTimeFormat('id',{
                            hour: 'numeric',
                            minute: '2-digit',
                            second: '2-digit',
                        }).format(date).replaceAll('.',':')
                    },
                    width: 130 
                }],
        
            });
        
            $('#kt_datatable_search_status').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Status');
            });
        
            $('#kt_datatable_search_type').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Type');
            });
        
            $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

        };

        return {
            // public functions
            init: function() {
                createTable();
            },
        };
    }();

    jQuery(document).ready(function() {
        Widget.init();
    });

    function submitForm(){
        document.querySelector('.mail-form').submit()
    }

    function onActionClick(btn, type){
        const mailId = btn.getAttribute('data-mail-id')        
        const approveBtn = document.querySelector('.approve-btn')

        let mailType

        switch (type) {
            case 'Done':
                mailType = 'setujui'
                break;
            case 'Process':
                mailType = 'proses'
                break;
            case 'Rejected':
                mailType = 'tolak'
                break;
        }
        
        document.querySelector('.mail-type').innerHTML = mailType

        approveBtn.setAttribute('data-href', `/persuratan/surat/changeStatus/${mailId}/${type}`)

    }

    function handleSubmit(btn){

        const swalWithBootstrapButtons = Swal.mixin({ customClass: { confirmButton: 'btn btn-primary' } })

        const href = btn.getAttribute('data-href')

        $.get(href)
            .done(function(res){

                if(res.success){
                    swalWithBootstrapButtons.fire({
                        title: 'Success',
                        text: 'Status surat berhasil diubah',
                        icon: 'success'
                    })
                    .then( res => {
                        location.reload()
                    })      
                }
            })

    }

</script>

@endpush
