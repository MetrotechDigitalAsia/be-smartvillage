{{-- <div class="cursor-pointer shadow-xs toggle-on pt-10 message-container mx-auto ribbon ribbon-top">
    <div class="ribbon-target bg-primary" style="top: -2px; right: 20px; font-family: Poppins;">
        @php
            switch ($data->status) {
                case 'Done':
                    echo 'Selesai';
                    break;
                case 'Process':
                    echo 'Diproses';
                    break;
                case 'Pending':
                    echo 'Dipending';
                    break;
                case 'Rejected':
                    echo 'Ditolak';
                    break;
            }
        @endphp
    </div>
    <div class="container bg-white message-content ribbon ribbon-top">
        @php
            $field = json_decode($data->field)    
        @endphp
        <div class="mail-header">
            <img src="{{ asset('assets/be/media/desa.png') }}" alt="">
            <h3 class="text-center m-0 goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</h3>
            <h2 class="m-0 my-1 village" >DESA GETASAN</h2>
            <p class="m-0 mb-3 text-center" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : Menyusul</p>
        </div>
        <div class="mail-body pt-8 px-10 text-center d-flex flex-column align-items-center pb-10">
            
            @include('admin.mailView.'.$data->slug)

            <div class="row mt-10" style="width: 100%; margin-bottom: 100px;" >
                <div class="col text-left">
                    <p class="m-0" style="text-indent: 0;" >Mengetahui :</p>
                    <table>
                        <tr>
                            <td>Reg No.</td>
                            <td>:...................</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:...................</td>
                        </tr>
                    </table>
                    <p style="text-indent: 0; margin-bottom: 60px;" >Perbekel Getasan,</p>
                    @if ($data->status == 'Done')
                    <img style="position: absolute; left: -20%; bottom: -20%; width: 100%;" src="{{ asset('assets/be/media/perbekel.png') }}" alt="">
                    @endif
                    <u >I Wayan Suandi, S.Pt</u>
                </div>
                <div class="col text-left" style="position: relative;">
                    <p style="text-indent: 0; margin-top: 40px; margin-bottom: 0;" >Getasan, 7 april 2023,</p>
                    <p  style="text-indent: 0; margin-bottom: 60px;" >Kelian Banjar Dinas Ubud</p>
                    <img style="position: absolute; left: 20%; bottom: -5%; width: 15%;" src="{{ asset('storage/'. $data->signature) }}" alt="">
                    <u>I Putu Antara, S.Pt</u>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
        <!--begin::Left-->
        <div class="d-flex align-items-center my-2">
            <a href="/persuratan/surat" class="btn btn-clean btn-icon btn-sm mr-6" >
                <i class="flaticon2-left-arrow-1"></i>
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
            @if (!is_null($data->mail_number))
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
            @endif

            <a href="javascript:;" data-toggle="modal" data-target="#mailNumberModal" class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Beri Nomor"  data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class="d-flex align-items-center justify-content-end text-right my-2">
            @if ($data->title == 'Surat Keterangan Kelahiran')
            <div class="dropdown mr-2">
                <button class="btn btn-default btn-sm mail-type-title dropdown-toggle text-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surat Keterangan Kelahiran
                </button>
                <div class="dropdown-menu" >
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Keterangan Kelahiran" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_keterangan_tab">Surat Keterangan Kelahiran</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat F2.0-1" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f2_tab">Formulir F-2.01</a>
                </div>
            </div>
            @endif
            @if ($data->status == 'Done')
            <a href='/persuratan/surat/print/{{ $data->id }}' class="btn btn-default btn-sm btn-icon mr-2" data-dismiss="modal">
                <i class="flaticon2-fax"></i>
            </a>
            @endif
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
        <div class="mb-3 py-8 pb-10">
            <div class="cursor-pointer shadow-xs toggle-on pt-10 message-container mx-auto ribbon ribbon-top">
                <div class="ribbon-target bg-primary" style="top: -2px; right: 20px; font-family: Poppins;">
                    @switch($data->status)
                        @case('Done') Selesai @break
                        @case('Process') Diproses @break
                        @case('Pending') Dipending @break
                        @case('Rejected') Ditolak @break
                    @endswitch
                </div>
                <div class="container bg-white @if($data->title == 'Surat Keterangan Kelahiran') f2 @endif message-content ribbon ribbon-top">

                    @php $field = json_decode($data->field) @endphp

                    @if ($data->title != 'Surat Keterangan Kelahiran')
                        @include('admin.mailView.mail')
                    @else
                    <div class="tab-content" >
                        <div class="tab-pane fade " id="surat_keterangan_tab" role="tabpanel" aria-labelledby="surat_keterangan_tab">
                            @include('admin.mailView.mail')
                        </div>
                        <div class="tab-pane fade show active" id="surat_f2_tab" role="tabpanel" aria-labelledby="surat_f2_tab">
                            @include('admin.mailView.f-2')
                        </div>
                    </div>
                    @endif
                </div>
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

        <div class="modal fade" id="mailNumberModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Beri Nomor Surat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group m-0">
                            <input type="text" onkeyup="handleChangeInput(this)" id="mail-number-form" class="form-control"  placeholder="Masukan Nomor"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Tutup</button>
                        <button type="button" disabled onclick="handleSetMailNumber(this)" data-mail-id="{{ $data->id }}" data-dismiss="modal" class="btn btn-primary font-weight-bold submit-mail-number-btn">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!--end::Body-->
    <div class="card-footer d-flex">
        <a href="/persuratan/surat" class="btn btn-outline-secondary font-weight-bold mr-auto">Kembali</a>
        <a href="#" class="btn btn-outline-danger font-weight-bold" data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" onclick="onActionClick(this, 'Rejected')" data-toggle="modal" data-target="#confirmModal" >
            <i class="flaticon-circle"></i>
            Tolak
        </a>
        <a href="#" class="btn btn-outline-warning font-weight-bold mx-3" data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" onclick="onActionClick(this, 'Process')" data-toggle="modal" data-target="#confirmModal" >
            <i class="flaticon2-hourglass-1" ></i>
            Proses
        </a>
        @if (!is_null($data->mail_number))
        <a href="#" class="btn btn-outline-success font-weight-bold" data-mail-id="{{ $data->id }}" data-mail-num="{{ $data->mail_number }}" onclick="onActionClick(this, 'Done')" data-toggle="modal" data-target="#confirmModal" >
            <i class="flaticon2-check-mark" ></i>
            Setujui
        </a>
        @endif
    </div>
</div>