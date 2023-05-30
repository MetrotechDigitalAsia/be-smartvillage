<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="/">
                    <img alt="Logo" src="{{ asset('assets/be/media/desa.png') }}" class="logo-default max-h-40px" />
                    <img alt="Logo" src="{{ asset('assets/be/media/desa.png') }}" class="logo-sticky max-h-40px" />
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Route::currentRouteName() == 'dashboard') menu-item-here @endif">
                            <a href="/" class="menu-link ">
                                <span class="menu-text">Dashboard</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                        @if (auth()->user()->type == 'Super' || auth()->user()->type == 'Umum')
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Str::contains(Route::current()->uri, 'informasi-desa')) menu-item-here @endif" >
                            <a href="/informasi-desa/prospek-desa" class="menu-link ">
                                <span class="menu-text">Informasi Desa </span>
                                <span class="menu-desc"></span>
                            </a>
                        </li>
                        @endif

                        @if (auth()->user()->type == 'Super' || auth()->user()->type == 'Pariwisata')
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Str::contains(Route::current()->uri, 'tourism-map')) menu-item-here @endif" >
                            <a href="/tourism-map/point-destinasi" class="menu-link ">
                                <span class="menu-text">Tourism Map</span>
                                <span class="menu-desc"></span>
                            </a>
                        </li>
                        @endif

                        @if (auth()->user()->type == 'Super' || auth()->user()->type == 'Umum')
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Str::contains(Route::current()->uri, 'master-data') && !Str::contains(Route::current()->uri, 'persuratan') ) menu-item-here @endif " >
                            <a href="/master-data/kategori-artikel" class="menu-link ">
                                <span class="menu-text">Master Data</span>
                                <span class="menu-desc"></span>
                            </a>
                        </li>
                        @endif

                        @if (auth()->user()->type == 'Super' || auth()->user()->type == 'Umum')
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Str::contains(Route::current()->uri, 'penduduk')) menu-item-here @endif " >
                            <a href="/data-penduduk" class="menu-link ">
                                <span class="menu-text">Data Penduduk</span>
                                <span class="menu-desc"></span>
                            </a>
                        </li>
                        @endif

                        @if (auth()->user()->type == 'Super' || auth()->user()->type == 'Layanan')
                        <li class="menu-item menu-item-submenu menu-item-rel @if(Str::contains(Route::current()->uri, 'persuratan')) menu-item-here @endif " >
                            <a href="/persuratan/master-data" class="menu-link ">
                                <span class="menu-text">Persuratan</span>
                                <span class="menu-desc"></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">

           {{-- @livewire('notification-items') --}}
           <div class="dropdown">
            <!--begin::Toggle-->
            <div class="topbar-item notif-btn" data-toggle="dropdown" data-offset="10px,0px">
                <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-success">
                    <span class="svg-icon svg-icon-xl notif-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="ring"></span>
                </div>
            </div>
            <!--end::Toggle-->
            <!--begin::Dropdown-->
            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                <!--begin::Header-->
                <form>
                    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{ asset('assets/be/media/bg/notif-bg.jpg') }})">
                        <!--begin::Title-->
                        <h4 class="d-flex flex-center rounded-top">
                            <span class="text-white">Pemberitahuan</span>
                            @livewire('notification-count')
                        </h4>
                        <!--end::Title-->
                        <!--begin::Tabs-->
                        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#mail_notification">Surat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#umkm_notification">Umkm</a>
                            </li>
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    @livewire('notification-items')
                    <!--end::Content-->
                </form>
            </div>
            
            <!--end::Dropdown-->
        </div>
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                        <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{ auth()->user()->fullname }}</span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">S</span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">{{ auth()->user()->fullname }}</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                    <div class="navi navi-spacer-x-0 pt-5">
                        <!--end::Item-->
                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer px-8 py-5">
                            <button type="submit" onclick="logout()" class="btn btn-light-primary font-weight-bold logout">Sign Out</button>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>