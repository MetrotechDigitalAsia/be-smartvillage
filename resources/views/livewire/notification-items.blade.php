<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
    <!--begin::Item-->
    @foreach ($notifications as $notify)
        {{-- <div class="d-flex align-items-center mb-6">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->

            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg target">{{ $notify->data['item_name'] }}</a>
                <span class="text-muted">Marketing campaign planning</span>
            </div>
            
            <!--end::Text-->
        </div> --}}
        <div class="d-flex align-items-center flex-wrap mb-5">
            <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                    <img src="{{ asset('storage/'. $notify->data['data']['item_image']) }}" class="h-50 align-self-center" alt="" />
                </span>
            </div>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">{{ $notify->data['data']['item_name'] }}</a>
                <span class="text-muted font-weight-bold">{{ $notify->created_at->diffForHumans() }}</span>
            </div>
            <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
        </div>
    @endforeach
    <!--end::Item-->
</div>