@extends('admin.app')

@section('content')

<!--begin::Row-->

<div class="row">

    <div class="col-xl-6">
        <div class="row">
            <div class="col-6">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-4x svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $residentTotal }}</span>
                        <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-6">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-4x svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $umkmTotal }}</span>
                        <span class="font-weight-bold text-muted font-size-sm">Total UMKM Desa</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-6">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-4x svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M14.1124454,7.00625159 C14.0755336,7.00212117 14.0380145,7 14,7 L10,7 C9.96198549,7 9.92446641,7.00212117 9.88755465,7.00625159 L7.34761705,4.55799196 C6.95060373,4.17530866 6.9382927,3.54346816 7.32009765,3.14561006 L8.41948359,2 L15.5805164,2 L16.6799023,3.14561006 C17.0617073,3.54346816 17.0493963,4.17530866 16.6523829,4.55799196 L14.1124454,7.00625159 Z" fill="#000000"/>
                                    <path d="M13.7640285,9 L15.4853424,18.1494183 C15.5450675,18.4668794 15.4477627,18.7936387 15.2240963,19.0267093 L12.7215131,21.6345146 C12.7120098,21.6444174 12.7023037,21.6541236 12.6924008,21.6636269 C12.2939201,22.0460293 11.6608893,22.0329953 11.2784869,21.6345146 L8.77590372,19.0267093 C8.55223728,18.7936387 8.45493249,18.4668794 8.5146576,18.1494183 L10.2359715,9 L13.7640285,9 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $staffTotal }}</span>
                        <span class="font-weight-bold text-muted font-size-sm">Jumlah Staff Desa</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-6">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-4x svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $mailTotal }}</span>
                        <span class="font-weight-bold text-muted font-size-sm">Total Surat Masuk</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 pb-8">
        <div class="card card-custom card-stretch">
            <div class="card-header card-header-tabs-line">
                <div class="card-title">
                    <h3 class="card-label">Pemberitahuan Terbaru</h3>
                </div>
             <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#mail_tab_pane">Surat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#umkm_tab_pane">Umkm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#complaint_tab_pane">Aduan</a>
                    </li>
                </ul>
             </div>
            </div>
            <div class="card-body pt-8 pb-0">
             <div class="tab-content">
                <div class="tab-pane fade show active pt-0" style="max-height: max-content;" id="mail_tab_pane" role="tabpanel" aria-labelledby="mail_tab_pane">
                    @if (count($latestMail) == 0)
                    <div class="d-flex flex-center text-center text-muted min-h-200px">
                        <i class="flaticon2-bell-2 mr-3" ></i>
                        Tidak ada pemberitahuan.
                    </div>    
                    @else
                        @foreach ($latestMail as $item)
                        <div class="d-flex align-items-center">
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{ $item->title }}</a>
                                <span class="text-muted font-weight-normal">Pengaju : {{ $item->name }}</span>
                            </div>
                            <!--end::Text-->
                            <div class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                        </div>
                        <div class="separator separator-dashed separator-border-2 my-4"></div>
                        @endforeach
                        <div class="d-flex">
                            <a href="/persuratan/surat/all" class="text-muted text-hover-primary cursor-pointer mt-3 mx-auto" >Selengkapnya</a>
                        </div>
                    @endif
                </div>
              <div class="tab-pane fade" id="umkm_tab_pane" role="tabpanel" aria-labelledby="umkm_tab_pane">
                @if (count($latestUmkm) == 0)
                <div class="d-flex flex-center text-center text-muted min-h-200px">
                    <i class="flaticon2-bell-2 mr-3" ></i>
                    Tidak ada pemberitahuan.
                </div>
                @else
                    @foreach ($latestUmkm as $item)
                    <div class="d-flex align-items-center">
                        <div class="symbol mr-3">
                            <img alt="Pic" class="w-50px h-50px" style="object-fit: cover;" src="{{ asset('storage/'.$item->image) }}"/>
                        </div>
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1 text-capitalize">
                                {{ $item->item_name }}  
                                <span class="ml-3 text-capitalize font-weight-bold text-{{ ($item->status != 'approve') ? ($item->status == 'pending') ? 'warning' : 'warning' : 'success'  }}" >
                                    <span class="label label-dot label-{{ ($item->status != 'approve') ? ($item->status == 'pending') ? 'warning' : 'warning' : 'success'  }} mr-1"></span>
                                    {{ $item->status }}
                                </span>
                            </a>
                            <span class="text-muted font-weight-normal" >~ {{ $item->name }}</span>
                            {{-- <span class="text-muted font-weight-normal">Pengaju : {{ $item->name }}</span> --}}
                        </div>
                        <!--end::Text-->
                        <div class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                    </div>
                    <div class="separator separator-dashed separator-border-2 my-4"></div>
                    @endforeach
                    <div class="d-flex">
                        <a href="/informasi-desa/umkm/pending" class="text-muted text-hover-primary cursor-pointer mt-3 mx-auto" >Selengkapnya</a>
                    </div>
                @endif
              </div>
              <div class="tab-pane fade" id="complaint_tab_pane" role="tabpanel" aria-labelledby="complain_tab_pane">
                @if (count($latestComplaint) == 0)
                <div class="d-flex flex-center text-center text-muted min-h-200px">
                    <i class="flaticon2-bell-2 mr-3" ></i>
                    Tidak ada pemberitahuan.
                </div>
                @else
                    @foreach ($latestComplaint as $item)
                    <div class="d-flex align-items-center">
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{ Str::limit($item->description, 40, '...') }}</a>
                            <span class="text-muted font-weight-normal">Pengaju : {{ $item->name }}</span>
                        </div>
                        <!--end::Text-->
                        <div class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                    </div>
                    <div class="separator separator-dashed separator-border-2 my-4"></div>
                    @endforeach
                    <div class="d-flex">
                        <a href="/informasi-desa/complaint/" class="text-muted text-hover-primary cursor-pointer mt-3 mx-auto" >Selengkapnya</a>
                    </div>
                @endif
                </div>
                </div>
            </div>
           </div>
    </div>

</div>

<div class="row mb-5">
    <div class="col-xl-5 ">
        <div class="card card-custom gutter-b">
            <div class="card-header border-0">
                <div class="card-title border-0">
                    <h3 class="card-label">Statistik Surat</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin::Chart-->
                <div id="mail_chart" class="d-flex justify-content-center"></div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
    <div class="col-xl-7">
        <div class="card card-custom gutter-b">
            <div class="card-header border-0">
                <div class="card-title">
                    <h3 class="card-label">Statistik Penduduk</h3>
                </div>
            </div>
            <div class="card-body py-3">
                <!--begin::Chart-->
                <div id="resident_chart"></div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

    <script>
        const primary = '#C91022'
        const success = '#F9A11B'
        const info = '#9CCC65'
        const warning = '#9CCC65'
        const danger = '#F64E60'

        const ChartWidget = function(){

            const residentChart = function(){

                const el = document.querySelector('#resident_chart')
                const opt = {
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    series: [
                        {
                            name: 'Anak Anak',
                            data: Array.from({ length: 12 }, () => Math.floor(Math.random() * 150))
                        },
                        {
                            name: 'Dewasa',
                            data: Array.from({ length: 12 }, () => Math.floor(Math.random() * 110))
                        },
                        {
                            name: 'Lansia',
                            data: Array.from({ length: 12 }, () => Math.floor(Math.random() * 90))
                        }
                    ],
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Des', 'Nov']
                    },
                    yaxis:{
                        title: {
                            text: 'Tahun'
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val + " orang"
                            }
                        }
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()

            }

            const mailChart = function(mail){
                const el = document.querySelector('#mail_chart')
                const opt = {
                    chart: {
                        type: 'donut',
                        height: 365
                    },
                    series: mail.series,
                    labels: mail.labels,
                    colors: [success, primary, warning],
                    legend: {
                        position: 'bottom'
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                labels: {
                                    show: true,
                                    total: {
                                        label: 'Total Surat',
                                        show: true,
                                        showAlways: true
                                    }
                                }
                            }
                        }
                    }
                }

                const chart = new ApexCharts(el, opt)
                chart.render()
            }


            return {
                init: function(){

                    let mailObj

                    $.get("{{ route('dashboard') }}")
                    .done(res => {
                        
                        mailObj = {
                            labels: res.mail.map(mail => mail['title']),
                            series: res.mail.map(mail => mail['count']),
                        }

                        mailChart(mailObj)

                    })
                    .fail(err => console.log(err.responseJSON.message))
                    residentChart()
                    
                }
            }

        }()

        jQuery(document).ready(function () {
            ChartWidget.init();
        });



    </script>
    
@endpush