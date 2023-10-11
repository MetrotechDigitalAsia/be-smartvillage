@extends('admin.app')

@section('content')

<!--begin::Inbox-->
<div class="d-flex flex-row">
    <!--begin::Aside-->
    <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="menu_aside">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <!--begin::Body-->
            <div class="card-body px-5">
                <!--begin::Compose-->
                <div class="px-3 mt-4 mb-5 dropright">
                    <a href="#" class="btn btn-block btn-primary font-weight-bold text-uppercase py-4 px-6 text-center" data-offset="0,10" data-toggle="dropdown" >Buat Surat</a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-anim-up">
                        <ul class="navi">
                            <li class="navi-item">
                                <a href="/persuratan/surat/create?type=surat-keterangan-tempat-usaha" class="navi-link">
                                    <span class="navi-bullet">
                                        <i class="bullet bullet-dot"></i>
                                    </span>
                                    <span class="navi-text">SKTU</span> 
                                </a>
                            </li>
                            {{-- <li class="navi-separator"></li> --}}
                            <li class="navi-item">
                                <a href="/persuratan/surat/create?type=surat-keterangan-kelahiran" class="navi-link">
                                    <span class="navi-bullet">
                                        <i class="bullet bullet-dot"></i>
                                    </span>
                                    <span class="navi-text">Surat Kelahiran</span> 
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="/persuratan/surat/create?type=surat-keterangan-meninggal" class="navi-link">
                                    <span class="navi-bullet">
                                        <i class="bullet bullet-dot"></i>
                                    </span>
                                    <span class="navi-text">Surat Akta Kematian</span> 
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="/persuratan/surat/create?type=surat-keterangan-perkawinan" class="navi-link">
                                    <span class="navi-bullet">
                                        <i class="bullet bullet-dot"></i>
                                    </span>
                                    <span class="navi-text">Surat Akta Pernikahan</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Compose-->
                <!--begin::Navigations-->
                <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                    <!--begin::Item-->
                    <div class="navi-item my-2">
                        <a href="/persuratan/surat" class="navi-link @if(Route::currentRouteName() == 'inbox') active @endif ">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3" />
                                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Inbox</span>
                        </a>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="navi-item my-2">
                        @livewire('finish-mail-menu-btn')
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="navi-item my-2">
                        @livewire('process-mail-menu-btn')
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="navi-item my-2">
                        <a href="/persuratan/surat/rejected" class="navi-link @if(Str::contains(Request::url(), '/surat/rejected')) active @endif">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Ditolak</span>
                        </a>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="navi-item my-2">
                        <a href="/persuratan/surat/all" class="navi-link @if(Str::contains(Route::current()->uri, '/surat/all')) active @endif">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Semua Surat</span>
                        </a>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Navigations-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Aside-->
    <div class="flex-row-fluid d-flex flex-column ml-lg-8">
        <!--begin::Card-->
        @yield('table')
        <!--end::Card-->
    </div>
</div>
<!--end::Inbox-->
    
@endsection