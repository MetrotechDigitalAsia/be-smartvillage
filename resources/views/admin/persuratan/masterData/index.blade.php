@extends('admin.menu.persuratanMenu')

@section('table')

<!--begin::Head-->
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
        <!--begin::Info-->
        <div class="d-flex align-items-center mr-2 py-2 flex-grow-1">
            <!--begin::Title-->
            <h3 class="font-weight-bold mb-0 mr-auto">Daftar Surat</h3>
            <!--end::Title-->
            <!--begin::Navigation-->
            {{-- <div class="d-flex justify-content-end mr-3">
                <!--begin::Button-->
                <a href="/persuratan/master-data/create" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Tambah Surat</a>
                <!--end::Button-->
            </div> --}}
            <!--end::Navigation-->
        </div>

        <!--end::Info-->
    </div>
    <!--end::Body-->
</div>
<!--end::Head-->

@include('partials.success-alert')

<!--begin::Row-->
<div class="row">
    @foreach ($mails as $mail)
    <!--begin::Col-->
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
            <div class="card-header border-0">
                <h3 class="card-title"></h3>
                {{-- <div class="card-toolbar">
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Menu" data-placement="left">
                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-bold-more-hor"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                    <a href="/persuratan/master-data/show/{{ $mail->id }}" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-eye"></i>
                                        </span>
                                        <span class="navi-text">Lihat</span>
                                    </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                    <a href="javascript:;" data-href="/persuratan/master-data/delete/{{ $mail->id }}" onclick="deleteData(this)" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-trash"></i>
                                        </span>
                                        <span class="navi-text">Hapus</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <!--begin: Icon-->
                    <img alt="" class="max-h-65px" src="{{ asset('storage/'.$mail->image) }}" />
                    <!--end: Icon-->
                    <!--begin: Tite-->
                    <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">{{ $mail->title }}</a>
                    <!--end: Tite-->
                </div>
            </div>
        </div>
        <!--end:: Card-->
    </div>
    <!--end::Col-->
    @endforeach
</div>
<!--end::Row-->
    
@endsection