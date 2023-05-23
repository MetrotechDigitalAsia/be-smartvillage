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

           @livewire('notification-items')
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