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
    <div class="card-header border-0 pt-5 pb-0">
        <h3 class="card-title align-items-start flex-column">
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
                    <tr class="text-left">
                        <th class="pr-0" style="width: 130px">Banjar</th>
                        <th>Pria</th>
                        <th>Wanita</th>
                        <th>Lansia</th>
                        <th>Dewasa</th>
                        <th>Anak Anak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                    <tr>
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
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>

<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5 pb-0">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Data Pendudk</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <!--begin::Table-->
        {{-- <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                    <tr class="text-uppercase">
                        <th style="min-width: 230px" class="pl-7">
                            <span class="text-dark-75">Banjar</span>
                        </th>
                        <th style="min-width: 100px">Pria</th>
                        <th style="min-width: 100px">Wanita</th>
                        <th style="min-width: 100px">Dewasa</th>
                        <th style="min-width: 100px">Anak Anak </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-7 py-8">
                            <span class="font-weight-bolder font-size-lg" >Ubud</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">120</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">90</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">10</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">15</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
        <!--end::Table-->

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Nick</td>
            <td>Stone</td>
            <td>
                <span class="label label-inline label-light-primary font-weight-bold">
                    Pending
                </span>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Ana</td>
            <td>Jacobs</td>
            <td>
                <span class="label label-inline label-light-success font-weight-bold">
                    Approved
                </span>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>Pettis</td>
            <td>
                <span class="label label-inline label-light-danger font-weight-bold">
                    New
                </span>
            </td>
        </tr>
    </tbody>
</table>
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