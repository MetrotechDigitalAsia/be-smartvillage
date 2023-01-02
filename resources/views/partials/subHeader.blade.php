<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
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
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="#" class="opacity-75 hover-opacity-100">
                        <i class="flaticon2-shelter text-white icon-1x"></i>
                    </a>
                    <!--end::Item-->

                    @foreach (Request::segments() as $segment)
                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                    <a 
                        href="" 
                        style="text-transform: capitalize;" 
                        class="text-white text-hover-white opacity-75 hover-opacity-100"
                    >
                        {{ str_replace('-', ' ',$segment) }}
                    </a>
                    @endforeach
                    <!--begin::Item-->
                    <!--end::Item-->

                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>