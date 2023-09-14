<div class="d-flex align-items-center font-weight-bold my-2">
    <!--begin::Item-->
    <a href="#" class="opacity-75 hover-opacity-100">
        <i class="flaticon2-shelter text-white icon-1x"></i>
    </a>
    <!--end::Item-->

    @foreach ($breadcrumbs as $breadcrumb)
    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
    <a 
        href="{{ $breadcrumb->url }}" 
        style="text-transform: capitalize;" 
        class="text-white text-hover-white opacity-75 hover-opacity-100"
    >
        {{ $breadcrumb->title }}
    </a>
    @endforeach
    <!--begin::Item-->
    <!--end::Item-->

</div>