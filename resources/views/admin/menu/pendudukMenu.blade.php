@extends('admin.app')

@section('content')

<div class="d-flex flex-row">

    @if (Route::currentRouteName() != 'residentDashboard')
    <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="menu_aside">
        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <!--begin::Body-->
            <div class="card-body px-5">
                <!--begin:Nav-->
                <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                    <!--begin:Item-->
                    <div class="navi-item my-2">
                        <a href="/data-penduduk" class="navi-link ">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Dashboard</span>
                        </a>
                    </div>
                    <!--end:Item-->
                    <!--begin:Item-->
                    <div class="navi-item my-2">
                        <a href="/data-penduduk/penduduk" class="navi-link  @if(Route::currentRouteName() == 'userData') active @endif ">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Half-star.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Data Penduduk</span>
                        </a>
                    </div>
                    <!--end:Item-->
                    <!--begin:Item-->

                    <div class="navi-item my-2" id="accordionMutasi" >
                        {{-- <a href="/informasi-desa/umkm" class="navi-link @if(Str::contains(Route::current()->uri, 'umkm')) active @endif "> --}}
                        <a href="javascript:;" class="navi-link" data-toggle="collapse" data-target="#umkmCollapse" aria-expanded="true" role="button">
                            <span class="navi-icon mr-4">
                                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Shopping\Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                                </svg><!--end::Svg Icon--></span>
                            </span>
                            <span class="navi-text font-weight-bolder font-size-lg">Mutasi Penduduk</span>
                            <span class="navi-icon" >
                                <span class="svg-icon"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Navigation\Angle-down.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) "/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </span>
                        </a>

                        <div id="umkmCollapse" class="collapse @if(Str::contains(Route::current()->uri, 'mutasi')) show @endif " aria-labelledby="headingOne7" data-parent="#accordionMutasi">
                            <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                                <div class="navi-item my-2 pl-10">
                                    <a href="/data-penduduk/penduduk/mutasi/perkawinan" class="navi-link @if(Str::contains(Route::current()->uri, 'perkawinan')) active @endif " >
                                        <span class="navi-bullet">
                                            <i class="bullet bullet-dot"></i>
                                        </span>
                                        <span class="navi-text font-size-lg">Perkawinan</span>
                                    </a>
                                </div>
                                <div class="navi-item my-2 pl-10">
                                    <a href="/data-penduduk/penduduk/mutasi/pindah-keluar" class="navi-link @if(Str::contains(Route::current()->uri, 'pindah-keluar')) active @endif " >
                                        <span class="navi-bullet">
                                            <i class="bullet bullet-dot"></i>
                                        </span>
                                        <span class="navi-text  font-size-lg">Pindah keluar</span>
                                    </a>
                                </div>
                                <div class="navi-item my-2 pl-10">
                                    <a href="/data-penduduk/penduduk/mutasi/meninggal" class="navi-link @if(Str::contains(Route::current()->uri, 'meninggal')) active @endif " >
                                        <span class="navi-bullet">
                                            <i class="bullet bullet-dot"></i>
                                        </span>
                                        <span class="navi-text  font-size-lg">Meninggal</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--end:Nav-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    @endif

    <!--begin::List-->
    <div class="flex-row-fluid d-flex flex-column ml-lg-8">
        <div class="d-flex flex-column flex-grow-1">
            <!--begin::Card-->
            @yield('table')
            <!--end::Card-->
        </div>
    </div>
    <!--end::List-->
</div>
    
@endsection