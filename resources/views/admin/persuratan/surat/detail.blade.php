@extends('admin.persuratan.surat.dashboard')

@section('table')


<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
        <!--begin::Left-->
        <div class="d-flex align-items-center my-2">
            <a href="/persuratan/surat" class="btn btn-clean btn-icon btn-sm mr-6" >
                <i class="flaticon2-left-arrow-1"></i>
            </a>
            <a href="javascript:;" class="btn btn-default btn-icon btn-sm mr-2" data-toggle="modal" data-toggle="tooltip" title="Proses" onclick="onActionClick(this, 'Process')"  data-target="#confirmModal" data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}"  >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Warning-1-circle.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <rect fill="#000000" opacity="0.3" transform="translate(8.984240, 12.127098) rotate(-45.000000) translate(-8.984240, -12.127098) " x="7.41281179" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                            <rect fill="#000000" opacity="0.3" transform="translate(15.269955, 12.127098) rotate(-45.000000) translate(-15.269955, -12.127098) " x="13.6985261" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                            <rect fill="#000000" transform="translate(12.127098, 15.269955) rotate(-45.000000) translate(-12.127098, -15.269955) " x="10.5556689" y="13.6985261" width="3.14285714" height="3.14285714" rx="0.75"/>
                            <rect fill="#000000" transform="translate(12.127098, 8.984240) rotate(-45.000000) translate(-12.127098, -8.984240) " x="10.5556689" y="7.41281179" width="3.14285714" height="3.14285714" rx="0.75"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
            <a href="javascript:;" class="btn btn-default btn-icon btn-sm mr-2" data-toggle="modal" data-toggle="tooltip" title="Tolak" onclick="onActionClick(this, 'Rejected')"  data-target="#confirmModal" data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M10.5857864,13 L9.17157288,11.5857864 C8.78104858,11.1952621 8.78104858,10.5620972 9.17157288,10.1715729 C9.56209717,9.78104858 10.1952621,9.78104858 10.5857864,10.1715729 L12,11.5857864 L13.4142136,10.1715729 C13.8047379,9.78104858 14.4379028,9.78104858 14.8284271,10.1715729 C15.2189514,10.5620972 15.2189514,11.1952621 14.8284271,11.5857864 L13.4142136,13 L14.8284271,14.4142136 C15.2189514,14.8047379 15.2189514,15.4379028 14.8284271,15.8284271 C14.4379028,16.2189514 13.8047379,16.2189514 13.4142136,15.8284271 L12,14.4142136 L10.5857864,15.8284271 C10.1952621,16.2189514 9.56209717,16.2189514 9.17157288,15.8284271 C8.78104858,15.4379028 8.78104858,14.8047379 9.17157288,14.4142136 L10.5857864,13 Z" fill="#000000"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
            <a href="javascript:;" onclick="onActionClick(this, 'Done')" data-toggle="modal" data-target="#confirmModal" class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Setujui"  data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class="d-flex align-items-center justify-content-end text-right my-2">
            <span class="btn btn-default btn-sm btn-icon mr-2">
                <i class="flaticon2-sort"></i>
            </span>
            <a href='/persuratan/surat/print/1' class="btn btn-default btn-sm btn-icon mr-2" data-dismiss="modal">
                <i class="flaticon2-fax"></i>
            </a>
            <div class="dropdown" data-toggle="tooltip" title="Settings">
                <span class="btn btn-default btn-icon btn-sm" data-toggle="dropdown">
                    <i class="ki ki-bold-more-hor icon-1x"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-md">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-drop"></i>
                                </span>
                                <span class="navi-text">New Group</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-list-3"></i>
                                </span>
                                <span class="navi-text">Contacts</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-rocket-1"></i>
                                </span>
                                <span class="navi-text">Groups</span>
                                <span class="navi-link-badge">
                                    <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Calls</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-gear"></i>
                                </span>
                                <span class="navi-text">Settings</span>
                            </a>
                        </li>
                        <li class="navi-separator my-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-magnifier-tool"></i>
                                </span>
                                <span class="navi-text">Help</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-link-badge">
                                    <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
        </div>
        <!--end::Right-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <div class="mb-3 pt-8 ">
            <div class="cursor-pointer shadow-xs toggle-on pt-10 message-container mx-auto">
                @livewire('mail-detail', ['mailId' => $data->id])
            </div>
        </div>
        <!--end::Messages-->

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title">Pemberitahuan</h5>
                    </div>
                    <div class="modal-body">
                        <span>yakin ingin <span class="mail-type"></span> surat dengan nomor <span class="mail-num" ></span> ?</span>
                    </div>
                    <div class="modal-footer py-2 border-0">
                        <button type="button" class="btn btn-text font-weight-bold" data-dismiss="modal">Batal</button>
                        <button type="button" onclick="handleSubmit(this)" data-dismiss="modal" class="btn btn-primary font-weight-bold approve-btn">Ya, Setujui</button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!--end::Body-->
</div>
    
@endsection

@push('script')

<script>
    function onActionClick(btn, type){
        const mailId = btn.getAttribute('data-mail-id')        
        const mailNum = btn.getAttribute('data-mail-num')
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
        document.querySelector('.mail-num').innerHTML = mailNum

        approveBtn.setAttribute('data-href', `/persuratan/surat/changeStatus/${mailId}/${type}`)

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

                $.notify({
                    message: res.message,
                }, opt)

                if(res.success){
                    Livewire.emit('refreshMailDetail')
                }
            })

    }
</script>
    
@endpush