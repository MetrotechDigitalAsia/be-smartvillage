<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">

            <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                <span></span>
            </button>

            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5" style="text-transform: capitalize" >
                    @if (Route::current()->uri == '/')
                        Dashboard
                    @else
                        {{ str_replace('-', ' ',Request::segments()[0]) }}
                    @endif
                </h2>
                {{  Diglactic\Breadcrumbs\Breadcrumbs::render() }}
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                {{-- <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="#" class="opacity-75 hover-opacity-100">
                        <i class="flaticon2-shelter text-white icon-1x"></i>
                    </a>
                    <!--end::Item-->

                    @if (Route::current()->uri == '/')
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a 
                            href="" 
                            style="text-transform: capitalize;" 
                            class="text-white text-hover-white opacity-75 hover-opacity-100"
                        >
                            Dashboard 
                        </a>
                    @endif

                    @php
                        $segments = Request::segments();
                        $a = count($segments) - 1;
                    @endphp
                    @foreach ($segments as $i => $segment)
                    @php
                        $segmentItems = $segments;
                        array_splice($segmentItems, $a,1);
                        $url = join('/', $segmentItems);
                        $a--;
                    @endphp
                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                    <a 
                        href="/{{ $url }}" 
                        style="text-transform: capitalize;" 
                        class="text-white text-hover-white opacity-75 hover-opacity-100"
                    >
                        {{ str_replace('-', ' ',$segment) }}
                    </a>
                    @endforeach
                    <!--begin::Item-->
                    <!--end::Item-->

                </div> --}}
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Info-->

        @if (Str::contains(Route::current()->uri, 'persuratan/surat') || Str::contains(Route::current()->uri, '/penduduk/'))
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" onclick="history.back()" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Kembali</a>
            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
        @endif
    </div>
</div>