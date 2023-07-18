@extends('admin.persuratan.surat.dashboard')

@push('mail-styles')
    <link href="{{ asset('assets/be/css/mail/mail.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/be/css/mail/f-2.css') }}" rel="stylesheet" type="text/css" /> --}}
@endpush

@section('table')

    @livewire('mail-detail', ['mailId' => $data->id, 'perbekel' => $perbekel ])

    <!--begin::Sticky Toolbar-->
    <ul class="sticky-toolbar nav flex-column pl-2 pr-13 pt-3 pb-3 mt-4">
        <!--begin::Item-->
        <li class="nav-item mb-2" id="mail_setting_panel_toggle" data-toggle="tooltip" title="Beri nomor & atur saksi surat" data-mail-id="{{ $data->id }}" data-placement="right">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="javascript:;">
                <i class="flaticon2-gear"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Tolak Surat" data-placement="left">
            <a onclick="onActionClick(this, 'Rejected')" data-toggle="modal" data-target="#confirmModal" data-mail-id="{{ $data->id }}" class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="javascript:;">
                <i class="flaticon-cancel"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Proses Surat" data-placement="left">
            <a onclick="onActionClick(this, 'Process')" data-toggle="modal" data-target="#confirmModal" data-mail-id="{{ $data->id }}" class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="javascript:;">
                <i class="flaticon2-hourglass"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Setujui Surat" data-placement="left">
            <a onclick="onActionClick(this, 'Done')" data-toggle="modal" data-target="#confirmModal" data-mail-id="{{ $data->id }}" class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="javascript:;">
                <i class="flaticon2-check-mark"></i>
            </a>
        </li>
        <!--end::Item-->
    </ul>
    <!--end::Sticky Toolbar-->

    <div id="mail-setting-panel" class="offcanvas offcanvas-right px-6 pt-10 pb-3">
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Isi Data Surat</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="mail_setting_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
    
        @livewire('mail-setting-panel', ['mailId' => $data->id])

    </div>

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
                    <button type="button" onclick="handleSubmit(this)" data-dismiss="modal" class="btn btn-primary font-weight-bold approve-btn">Ya, Setujui</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('script')

<script>

    var downloadLink = '/persuratan/surat/print'

    function handleChangeInput(e){
        const btn = document.querySelector('.submit-mail-number-btn')
        if(e.value === '' || e.value === undefined ){
            btn.setAttribute('disabled', 'disabled')
        } else {
            btn.removeAttribute('disabled')
        }
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

    function handleClickCheckbox(el){

        const form = document.querySelector('.download-form')

        if(el.checked){
            const name = el.name
            let input = document.createElement('input')
            input.name = name
            input.value = name
            input.type = 'hidden'
            input.classList.add(name)
            form.appendChild(input)
        } else {
            const name = el.name
            const input = document.querySelector(`.${name}`)
            input.remove()
        }

        console.log(form)

    }

    function handleDownloadMail(){
        document.querySelector('.download-form').submit()
    }

    function handleSubmit(btn){

        const href = btn.getAttribute('data-href')

        const opt = {
            type: 'success',
            placement: {
                from:'top',
                align: 'center'
            },
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeOutUp'
            }
        }
        
        $.get(href)
            .done(function(res){

                console.log(res)

                $.notify({
                    message: res.message,
                }, opt)

                if(res.success){
                    Livewire.emit('refreshMailDetail')
                }
            })
            .fail(res => console.log(res.responseText))

    }

    const handleChangeMail = (btn) => {
        const el = document.querySelectorAll('.mail-change-btn')
        const btnText = document.querySelector('.mail-type-title')
        el.forEach(e => {
            e.classList.remove('active')
        })

        btnText.innerHTML = btn.dataset.mail
        
    }

    var _offcanvasObject;
    var MailSettingPanel = function() {
        // Private properties
        var _element;

        var _init = function() {
            _offcanvasObject = new KTOffcanvas(_element, {
                overlay: true,
                baseClass: 'offcanvas',
                placement: 'right',
                closeBy: 'mail_setting_panel_close',
                toggleBy: 'mail_setting_panel_toggle'
            });

            if (typeof offcanvas !== 'undefined' && offcanvas.length === 0) {
                offcanvas.on('hide', function() {
                    var expires = new Date(new Date().getTime() + 60 * 60 * 1000); // expire in 60 minutes from now
                    KTCookie.setCookie('kt_demo_panel_shown', 1, {expires: expires});
                });
            }
        }

        // Public methods
        return {
            init: function(id) {
                _element = KTUtil.getById(id);

                if (!_element) {
                    return;
                }

                _init();

            }
        };
    }();

    $('.kt-selectpicker').selectpicker();

    MailSettingPanel.init('mail-setting-panel')

    Livewire.on('mailChanges', data => {

        const opt = {
            type: data.status ? 'success' : 'warning',
            placement: {
                from:'top',
                align: 'center'
            },
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeOutUp'
            }
        }

        $.notify({
            message: data.msg,
        }, opt)

        _offcanvasObject.hide()

    })


</script>
    
@endpush