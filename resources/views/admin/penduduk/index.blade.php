@extends('admin.menu.pendudukMenu')

@section('table')

<div class="row">
    <div class="col">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body">
                <a href="#" class="card-title font-weight-bold text-hover-primary font-size-h5">Ubud</a>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-1 d-block">
                    142 <span class="text-muted font-size-sm font-weight-bold" >Penduduk</span>
                </span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body">
                <a href="#" class="card-title font-weight-bold text-hover-primary font-size-h5">Kauh</a>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-1 d-block">
                    190 <span class="text-muted font-size-sm font-weight-bold" >Penduduk</span>
                </span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body">
                <a href="#" class="card-title font-weight-bold text-hover-primary font-size-h5">Tengah</a>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-1 d-block">
                    125 <span class="text-muted font-size-sm font-weight-bold" >Penduduk</span>
                </span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body">
                <a href="#" class="card-title font-weight-bold text-hover-primary font-size-h5">Buangga</a>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-1 d-block">
                    30 <span class="text-muted font-size-sm font-weight-bold" >Penduduk</span>
                </span>
                {{-- <span class="font-weight-bold text-muted font-size-sm">Anak Anak</span> --}}
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
{{-- <div class="card card-custom">
    <div class="card-body">
    </div>
</div> --}}
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-0">
        <h3 class="card-title">
            <span class="card-label font-weight-bolder text-dark">Tabel Penduduk</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                <thead>
                    <tr class="text-left ">
                        <th class="pr-0" style="width: 130px">Banjar</th>
                        <th>Pria</th>
                        <th>Wanita</th>
                        <th>Lansia</th>
                        <th>Dewasa</th>
                        <th>Anak Anak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active" >
                        <td>Ubud</td>
                        <td>10</td>
                        <td>99</td>
                        <td>99</td>
                        <td>99</td>
                        <td>99</td>
                    </tr>
                    <tr>
                        <td>Kauh</td>
                        <td>120</td>
                        <td>99</td>
                        <td>10</td>
                        <td>10</td>
                        <td>99</td>
                    </tr>
                    <tr class="table-active" >
                        <td>Buangga</td>
                        <td>120</td>
                        <td>99</td>
                        <td>10</td>
                        <td>99</td>
                        <td>99</td>
                    </tr>
                    <tr>
                        <td>Tengah</td>
                        <td>10</td>
                        <td>99</td>
                        <td>99</td>
                        <td>99</td>
                        <td>99</td>
                    </tr>
                    <tr class="table-active" >
                        <td colspan="6" class="border-0" >Total</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
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
                            data: [
                                {
                                    x: 'ciciw',
                                    y: 20,
                                    fillColor: primary,
                                },
                                {
                                    x: 'ciciw',
                                    y: 13,
                                    fillColor: success,
                                },
                                {
                                    x: 'ciciw',
                                    y: 13,
                                    fillColor: info,
                                },
                            ]
                        }
                    ],
                    xaxis: {
                        categories: ['Laki Laki', 'Perempuan', 'hehe']
                    },
                    yaxis:{
                        title: {
                            text: 'Tahun'
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '45%',
                            // endingShape: 'rounded'
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

            const mailChart = function(){
                const el = document.querySelector('#pie_chart')
                const opt = {
                    chart: {
                        type: 'donut',
                        height: 290
                    },
                    series: Array.from({ length: 2 }, () => Math.floor(Math.random() * 150)),
                    labels: ['Pria', 'Perempuan'],
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
                                        label: 'Total Penduduk',
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
                    residentChart()
                    mailChart()
                    umkmChart()
                }
            }

        }()

        jQuery(document).ready(function () {
            ChartWidget.init();
        });



    </script>
    
@endpush