<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
        <!--begin::Left-->
        <div class="d-flex align-items-center my-2">
            <a href="/persuratan/surat" class="btn btn-clean btn-icon btn-sm mr-6" >
                <i class="flaticon2-left-arrow-1"></i>
            </a>
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class="d-flex align-items-center justify-content-end text-right my-2">
            @if ($data->title == 'Surat Keterangan Kelahiran')
            <div class="dropdown mr-2">
                <button class="btn btn-default btn-sm mail-type-title dropdown-toggle text-dark" type="button" data-offset="0,5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surat Keterangan Kelahiran
                </button>
                <div class="dropdown-menu dropdown-menu-anim-up" >
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Keterangan Kelahiran" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_keterangan_tab">Surat Keterangan Kelahiran</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat F-2.01" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f2_tab">Formulir F-2.01</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Pernyataan Lahir" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_pernyataan_lahir_tab">Surat Pernyataan Lahir</a>
                </div>
            </div>
            @endif
            @if ($data->title == 'Surat Keterangan Meninggal')
            <div class="dropdown mr-2">
                <button class="btn btn-default btn-sm mail-type-title dropdown-toggle text-dark" type="button" data-offset="0,5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surat Keterangan Meninggal
                </button>
                <div class="dropdown-menu dropdown-menu-anim-up" >
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Keterangan Kelahiran" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_keterangan_meninggal_tab">Surat Keterangan Meninggal</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat F-2.01" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f2_tab">Formulir F-2.01</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Formulir F-1.02" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f1-02_tab">Formulir F-1.02</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Pernyataan Meninggal" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_pernyataan_meninggal_tab">Surat Pernyataan Meninggal</a>
                </div>
            </div>
            @endif
            @if ($data->title == 'Surat Keterangan Perkawinan')
            <div class="dropdown mr-2">
                <button class="btn btn-default btn-sm mail-type-title dropdown-toggle text-dark" type="button" data-offset="0,5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Surat Keterangan Perkawinan
                </button>
                <div class="dropdown-menu dropdown-menu-anim-up" >
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Keterangan Perkawinan" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_keterangan_perkawinan_tab">Surat Keterangan Perkawinan</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat F-2.01" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f2_tab">Formulir F-2.01</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Formulir F-1.01" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_f1-01_tab">Formulir F-1.01</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Pernyataan Suka Sama Suka" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_pernyataan_suka_sama_suka_tab">Surat Pernyataan Suka Sama Suka</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Surat Pernyataan Belum Pernah Kawin" onclick="handleChangeMail(this)" data-toggle="tab" href="#surat_pernyataan_belum_pernah_kawin_suami_tab">Surat Pernyataan Belum Pernah Kawin</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Pengumuman Perkawinan" onclick="handleChangeMail(this)" data-toggle="tab" href="#pengumuman_perkawinan_tab">Pengumuman Perkawinan</a>
                    <a class="dropdown-item mail-change-btn" data-mail="Tanda Tangan Suami Istri" onclick="handleChangeMail(this)" data-toggle="tab" href="#tanda_tangan_tab">Tanda Tangan Mempelai</a>
                </div>
            </div>
            @endif
            @if ($data->status == 'Done')
            <a 
                class="btn btn-default btn-sm btn-icon mr-2"
                data-toggle="modal"
                href="javascript:;"
                data-target="#downloadModal_{{ str_replace('-','_',$data->slug) }}"
            >
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
                    
                    @if ($data->title == 'Surat Keterangan Tempat Usaha')
                        @include('admin.mailView.mail')
                    @elseif($data->title == 'Surat Keterangan Kelahiran')
                    <div class="tab-content" >
                        <div class="tab-pane fade active show" id="surat_keterangan_tab" role="tabpanel" aria-labelledby="surat_keterangan_tab">
                            @include('admin.mailView.mail')
                        </div>
                        <div class="tab-pane fade" id="surat_f2_tab" role="tabpanel" aria-labelledby="surat_f2_tab">
                            @include('admin.mailView.f-2')
                        </div>
                        <div class="tab-pane fade " id="surat_pernyataan_lahir_tab" role="tabpanel" aria-labelledby="surat_pernyataan_lahir_tab">
                            @include('admin.mailView.surat-pernyataan-kelahiran')
                        </div>
                    </div>
                    @elseif($data->title == 'Surat Keterangan Meninggal')
                    <div class="tab-content" >
                        <div class="tab-pane fade active show" id="surat_keterangan_meninggal_tab" role="tabpanel" aria-labelledby="surat_keterangan_tab">
                            @include('admin.mailView.mail')
                        </div>
                        <div class="tab-pane fade" id="surat_f2_tab" role="tabpanel" aria-labelledby="surat_f2_tab">
                            @include('admin.mailView.f-2')
                        </div>
                        <div class="tab-pane fade" id="surat_f1-02_tab" role="tabpanel" aria-labelledby="surat_f1-02_tab">
                            @include('admin.mailView.f1-02')
                        </div>
                        <div class="tab-pane fade " id="surat_pernyataan_meninggal_tab" role="tabpanel" aria-labelledby="surat_pernyataan_meninggal_tab">
                            @include('admin.mailView.surat-pernyataan-kematian')
                        </div>
                    </div>
                    @elseif($data->title == 'Surat Keterangan Perkawinan')
                    <div class="tab-content" >
                        <div class="tab-pane fade active show" id="surat_keterangan_perkawinan_tab" role="tabpanel" aria-labelledby="surat_keterangan_perkawinan_tab">
                            @include('admin.mailView.surat-keterangan-perkawinan')
                        </div>
                        <div class="tab-pane fade" id="surat_f2_tab" role="tabpanel" aria-labelledby="surat_f2_tab">
                            @include('admin.mailView.f-2')
                        </div>
                        <div class="tab-pane fade" id="surat_f1-01_tab" role="tabpanel" aria-labelledby="surat_f1-01_tab">
                            @include('admin.mailView.f1-01')
                        </div>
                        <div class="tab-pane fade" id="surat_pernyataan_suka_sama_suka_tab" role="tabpanel" aria-labelledby="surat_pernyataan_suka_sama_suka_tab">
                            @include('admin.mailView.surat-pernyataan-suka-sama-suka')
                        </div>
                        <div class="tab-pane fade" id="surat_pernyataan_belum_pernah_kawin_suami_tab" role="tabpanel" aria-labelledby="surat_pernyataan_belum_pernah_kawin_suami_tab">
                            @include('admin.mailView.surat-keterangan-belum-pernah-kawin', ['subject' => $field->subject_1])
                        </div>
                        <div class="tab-pane fade" id="surat_pernyataan_belum_pernah_kawin_istri_tab" role="tabpanel" aria-labelledby="surat_pernyataan_belum_pernah_kawin_istri_tab">
                            @include('admin.mailView.surat-keterangan-belum-pernah-kawin', ['subject' => $field->subject_2])
                        </div>
                        <div class="tab-pane fade " id="pengumuman_perkawinan_tab" role="tabpanel" aria-labelledby="pengumuman_perkawinan_tab">
                            @include('admin.mailView.pengumuman-perkawinan')
                        </div>
                        <div class="tab-pane fade" id="tanda_tangan_tab" role="tabpanel" aria-labelledby="tanda_tangan_tab">
                            @include('admin.mailView.tanda-tangan-suami-istri')
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--end::Messages-->

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

    
    <div class="modal fade" id="downloadModal_surat_keterangan_kelahiran" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 16px;" >Unduh Surat Kelahiran</h5>
                </div>
                <div class="modal-body">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-keterangan-kelahiran"/>
                            <span></span>
                            Surat Keterangan Kelahiran
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="f2-01"/>
                            <span></span>
                            Surat F2-01
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-pernyataan-lahir"/>
                            <span></span>
                            Surat Pernyataan Lahir
                        </label>
                    </div>
                </div>
                <div class="modal-footer d-flex py-2 px-2">
                    <button type="button" style="flex: 1;" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="javascript:;" data-dismiss="modal" onclick="handleDownloadMail()" type="button" style="flex: 1;" class="btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="downloadModal_surat_keterangan_meninggal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 16px;" >Unduh Surat Kematian</h5>
                </div>
                <div class="modal-body">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-keterangan-meninggal"/>
                            <span></span>
                            Surat Keterangan Meninggal
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="f2-01"/>
                            <span></span>
                            Surat F2-01
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="f1-02"/>
                            <span></span>
                            Surat F1-02
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-pernyataan-meninggal"/>
                            <span></span>
                            Surat Pernyataan Meninggal
                        </label>
                    </div>
                </div>
                <div class="modal-footer d-flex py-2 px-2">
                    <button type="button" style="flex: 1;" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="javascript:;" data-dismiss="modal" onclick="handleDownloadMail()" type="button" style="flex: 1;" class="btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="downloadModal_surat_keterangan_perkawinan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 16px;" >Unduh Surat Kematian</h5>
                </div>
                <div class="modal-body">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-keterangan-perkawinan"/>
                            <span></span>
                            Surat Keterangan Perkawinan
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="f2-01"/>
                            <span></span>
                            Surat F2-01
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="f1-01"/>
                            <span></span>
                            Surat F1-01
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-pernyataan-suka-sama-suka"/>
                            <span></span>
                            Surat Pernyataan Suka Sama Suka
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-pernyataan-belum-pernah-kawin_suami"/>
                            <span></span>
                            Surat Pernyataan Belum Pernah Kawin
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="pengumuman-perkawinan"/>
                            <span></span>
                            Pengumuman Perkawinan
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="tanda-tangan-suami-istri"/>
                            <span></span>
                            Tanda Tangan Suami Istri
                        </label>
                    </div>
                </div>
                <div class="modal-footer d-flex py-2 px-2">
                    <button type="button" style="flex: 1;" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="javascript:;" data-dismiss="modal" onclick="handleDownloadMail()" type="button" style="flex: 1;" class="btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="downloadModal_surat_keterangan_tempat_usaha" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 16px;" >Unduh Surat Tempat Usaha</h5>
                </div>
                <div class="modal-body">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" class="mail-checkbox" onclick="handleClickCheckbox(this)" name="surat-keterangan-tempat-usaha"/>
                            <span></span>
                            Surat Keterangan Tempat Usaha
                        </label>
                    </div>
                </div>
                <div class="modal-footer d-flex py-2 px-2">
                    <button type="button" style="flex: 1;" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="javascript:;" data-dismiss="modal" onclick="handleDownloadMail()" type="button" style="flex: 1;" class="btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>

    <form class="download-form" action="/persuratan/surat/print/{{ $data->id }}" >
        <input type="hidden" name="type" value="{{ $data->slug }}" >
    </form>

</div>