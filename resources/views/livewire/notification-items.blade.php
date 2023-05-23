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
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{ asset('assets/be/media/bg/notif-bg.jpg') }})">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top">
                    <span class="text-white">Pemberitahuan</span>
                    <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">{{ count(auth()->user()->unreadnotifications) }} baru</span>
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
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane active show" id="mail_notification" role="tabpanel">
                    @if (count($mails) == 0)
                        <div class="d-flex flex-center text-center text-muted min-h-200px">
                            <i class="flaticon2-bell-2 mr-3" ></i>
                            Tidak ada pemberitahuan.
                        </div>    
                    @else
                        <div class="navi scroll my-4 max-h-300px" data-scroll="true" data-height="300" data-mobile-height="200">
                            <!--begin::Item-->
                            @foreach ($mails as $item)
                            <a href="#" class="navi-item">
                                <div class="navi-link">
                                    <span class="symbol symbol-40 mr-3">
                                        <span class="symbol-label"><i class="flaticon2-mail text-success"></i></span>
                                    </span>
                                    <div class="navi-text">
                                        <div class="font-weight-bold">{{ $item->data['data']['title'] }}</div>
                                        <div class="text-muted"> ~<span style="font-size: 12px;" >{{ $item->data['data']['sender'] }}</span> <br> {{ $item->created_at->diffForHumans() }}</div>
                                    </div>
                                    <div class="navi-label">
                                        <i wire:click="deleteNotif('{{ $item->id }}')" class="flaticon-close text-hover-primary" ></i>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <!--end::Item-->
                        </div>
                    @endif
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane" id="umkm_notification" role="tabpanel">
                    <!--begin::Scroll-->
                    @if (count($umkm) == 0)
                        <div class="d-flex flex-center text-center text-muted min-h-200px">
                            <i class="flaticon2-bell-2 mr-3" ></i>
                            Tidak ada pemberitahuan.
                        </div>
                    @else
                    <div class="navi navi-hover my-4 px-6 scroll max-h-300px" style="overflow-y: auto;" data-height="300" data-mobile-height="200">
                        {{-- <div class="scroll pr-7 mr-4 p-4" data-scroll="true" data-height="300" data-mobile-height="200"> --}}
                        @foreach ($umkm as $notify)
                            <div class="d-flex align-items-center flex-wrap mb-5">
                                <div class="symbol symbol-50 symbol-light mr-5">
                                    <span class="symbol-label">
                                        <img src="{{ asset('storage/'. $notify->data['data']['item_image']) }}" class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="/informasi-desa/umkm/show/{{ $notify->data['data']['item_name']  }}" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">{{ $notify->data['data']['item_name'] }}</a>
                                    <span class="text-muted font-weight-bold">{{ $notify->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="navi-label">
                                    <i wire:click="deleteNotif('{{ $notify->id }}')" class="flaticon-close text-hover-primary" ></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                    <!--end::Scroll-->
                </div>
                <!--end::Tabpane-->
            </div>
            <!--end::Content-->
    </div>
    <!--end::Dropdown-->
</div>