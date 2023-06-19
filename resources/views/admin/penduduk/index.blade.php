@extends('admin.menu.pendudukMenu')

@section('table')

 <div class="row">
    <div class="col-6 col-xl-3 ">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body pt-12">
                <span class="font-size-h3 font-weight-bolder text-primary " >Ubud</span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-7 d-block">{{ $banjar['ubud'] }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body pt-12">
                <span class="font-size-h3 font-weight-bolder text-primary " >Kauh</span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-7 d-block">{{ $banjar['kauh'] }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body pt-12">
                <span class="font-size-h3 font-weight-bolder text-primary " >Buangga</span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-7 d-block">{{ $banjar['buangga'] }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body pt-12">
                <span class="font-size-h3 font-weight-bolder text-primary " >Tengah</span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-7 d-block">{{ $banjar['tengah'] }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-5">
        <div class="card card-custom gutter-b" >
            <div class="card-header border-0">
                <div class="card-title">
                    <h3 class="card-label fs-md">Penduduk Menurut Gender</h3>
                </div>
            </div>
            <div class="card-body py-10">
                <!--begin::Chart-->
                <div id="gender_chart"></div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
    <div class="col-xl-7">
        <div class="card card-custom gutter-b">
            <div class="card-header border-0">
                <div class="card-title">
                    <h3 class="card-label">Penduduk Menurut Umur</h3>
                </div>
            </div>
            <div class="card-body py-3">
                <!--begin::Chart-->
                <div id="age_chart"></div>
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


        const gender = {!! json_encode($gender) !!}
        const age = {!! json_encode($age) !!}

        const ChartWidget = function(){

            const genderChart = function(gender){

                const series = Object.values(gender)
                const labels = Object.keys(gender)

                const el = document.querySelector('#gender_chart')
                const opt = {
                    chart: {
                        type: 'donut',
                        height: 365
                    },
                    series: series.length > 0 ? series : [0],
                    labels: labels.length > 0 ? labels : ['Tidak ada data'],
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

            const ageChart = function(age){

                const categories = age.map( item => item['KATEGORI'] )
                const data = age.map( item => ({y: item['jumlah'], x: 'weq'}) )

                console.log({categories, data})

                const el = document.querySelector('#age_chart')
                const opt = {
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    series: [{
                        data
                    }],
                    xaxis: {
                        categories,
                    },
                    yaxis:{
                        title: {
                            text: 'Jumlah'
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '45%',
                            distributed: true
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
                            formatter: function (val, e) {
                                return val + " orang"
                            }
                        },
                        x: {
                            formatter: function (val) {
                                return val
                            },
                        }
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()
            }

            return {
                init: function(){

                    genderChart(gender)
                    ageChart(age)

                }
            }
        }()

        jQuery(document).ready(function () {
            ChartWidget.init();
        });



    </script>
    
@endpush