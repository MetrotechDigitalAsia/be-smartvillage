@extends('admin.menu.pendudukMenu')

@section('table')

 <div class="row">
    @foreach ($residentCount as $item)
    <div class="col-6 col-xl-3 ">
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('assets/be/media/svg/shapes/abstract-3.svg') }})">
            <!--begin::Body-->
            <div class="card-body pt-12">
                <span class="font-size-h3 font-weight-bolder text-primary " >{{ $item->banjar }}</span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-7 d-block">{{ $item->jumlah }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Total Data Penduduk</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
    @endforeach
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


<div class="row">
    <div class="col">
        <div class="card card-custom gutter-b" >
            <div class="card-header border-0">
                <div class="card-title">
                    <h3 class="card-label fs-md">Penduduk Menurut Pekerjaan </h3>
                </div>
            </div>
            <div class="card-body pb-10 pt-0">
                <!--begin::Chart-->
                <div id="">
                    <div class="job-glide">
                        <div class="glide__track" data-glide-el="track">
                          <ul class="glide__slides">
                            @foreach ($residentJobs as $key => $residentJob)
                            <li class="glide__slide">
                                <div id="work_chart_{{ $key+1 }}"></div>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end py-2 mr-3">
                            <button onclick="jobGlide.go(`<<`)" class="btn btn-icon btn-sm btn-hover-primary btn-light mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></button>
                            <button onclick="jobGlide.go(`<`)" class="btn btn-icon btn-sm btn-hover-primary btn-light mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></button>
                            @foreach ($residentJobs as $key => $item)
                            <button onclick="jobGlide.go('={{{ $key }}}')" class="btn btn-icon btn-sm btn-hover-primary border-0 mr-2 my-1 caro-btn caro-btn-{{ $key }}">{{ $key+1 }}</button>
                            @endforeach
                            <button onclick="jobGlide.go('>')" class="btn btn-icon btn-sm btn-light btn-hover-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></button>
                            <button onclick="jobGlide.go('>>')" class="btn btn-icon btn-sm btn-light btn-hover-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></button>
                        </div>
                    </div>
                </div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-custom gutter-b" >
            <div class="card-header border-0 pb-0">
                <div class="card-title">
                    <h3 class="card-label fs-md">Penduduk Menurut Pendidikan</h3>
                </div>
            </div>
            <div class="card-body px-10 pb-10 pt-0">
                <!--begin::Chart-->
                <div class="education-glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        @foreach ($educations as $key => $residentJob)
                        <li class="glide__slide">
                            <div id="education_chart_{{ $key+1 }}"></div>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end py-2 mr-3">
                        <button onclick="educationGlide.go(`<<`)" class="btn btn-icon btn-sm btn-hover-primary btn-light mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></button>
                        <button onclick="educationGlide.go(`<`)" class="btn btn-icon btn-sm btn-hover-primary btn-light mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></button>
                        @foreach ($educations as $key => $item)
                        <button onclick="educationGlide.go('={{{ $key }}}')" class="btn btn-icon btn-sm btn-hover-primary border-0 mr-2 my-1 education-caro-btn education-caro-btn-{{ $key }}">{{ $key+1 }}</button>
                        @endforeach
                        <button onclick="educationGlide.go('>')" class="btn btn-icon btn-sm btn-light btn-hover-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></button>
                        <button onclick="educationGlide.go('>>')" class="btn btn-icon btn-sm btn-light btn-hover-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></button>
                    </div>
                </div>
                
                <!--end::Chart-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-custom gutter-b" >
            <div class="card-header border-0 pb-0">
                <div class="card-title">
                    <h3 class="card-label fs-md">Penduduk Penerima Bantuan</h3>
                </div>
            </div>
            <div class="card-body px-10 pb-10 pt-0">
                <!--begin::Chart-->
                <div id="blt_chart"></div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-custom gutter-b" >
            <div class="card-header border-0 pb-0">
                <div class="card-title">
                    <h3 class="card-label fs-md">Penduduk Penyandang Disabilitas</h3>
                </div>
            </div>
            <div class="card-body px-10 pb-10 pt-0">
                <!--begin::Chart-->
                <div id="disability_chart"></div>
                <!--end::Chart-->
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

    <script>
        const primary = '#337660'
        const success = '#F9A11B'
        const info = '#9CCC65'
        const warning = '#9CCC65'
        const danger = '#F64E60'

        const gender = {!! json_encode($gender) !!}
        const age = {!! json_encode($age) !!}
        const residentJobs = {!! json_encode($residentJobs) !!}
        const educations = {!! json_encode($educations) !!}
        const disabilities = {!! json_encode($disabilityPeople) !!}
        const bltReciever = {!! json_encode($blt) !!}

        console.log(bltReciever)

        const jobGlide = new Glide('.job-glide')

        jobGlide.mount()

        jobGlide.on(['mount.after', 'run'], function(){
            document.querySelectorAll(`.caro-btn`).forEach(el => el.classList.remove('btn-primary'))
            const index = jobGlide.index
            document.querySelector(`.caro-btn-${index}`).classList.add('btn-primary')
        })

        const educationGlide = new Glide('.education-glide')

        educationGlide.mount()

        educationGlide.on(['mount.after', 'run'], function(){
            document.querySelectorAll(`.education-caro-btn`).forEach(el => el.classList.remove('btn-primary'))
            const index = educationGlide.index
            document.querySelector(`.education-caro-btn-${index}`).classList.add('btn-primary')
        })

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
                            formatter: function (val, e) {
                                switch (val) {
                                    case 'Anak Anak':
                                        return 'Anak Anak Umur 0-10 Tahun'
                                        break;

                                    case 'Remaja':
                                        return 'Remaja Umur 11-19 Tahun'
                                        break;

                                    case 'Dewasa':
                                        return 'Dewasa Umur 20-59 Tahun'
                                        break;

                                    case 'Lansia':
                                        return 'Lansia Umur 60 tahun keatas'
                                        break;
                                
                                    default:
                                        break;
                                }
                            },
                        }
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()
            }

            const workChart = function(data, elem){

                const dataset = data.map(e => ({ x: e.pekerjaan, y: e.jumlah }))

                const el = document.querySelector(elem)
                const opt = {
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            columnWidth: '45%',
                            distributed: true
                            // endingShape: 'rounded'
                        },
                    },
                    series: [{
                        data: dataset
                    }],
                    legend: {
                        show: false,
                        position: 'bottom',
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()

            }

            const educationChart = function(data, elem){

                const dataset = data.map(e => ({ x: e.pendidikan, y: e.jumlah }))

                const el = document.querySelector(elem)
                const opt = {
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            columnWidth: '45%',
                            distributed: true
                            // endingShape: 'rounded'
                        },
                    },
                    series: [{
                        data: dataset
                    }],
                    legend: {
                        show: false,
                        position: 'bottom',
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()

            }

            const disabilityChart = function(data){

                const dataset = data.map(e => ({ x: e.jenis_disabilitas, y: e.jumlah }))

                const el = document.querySelector('#disability_chart')
                const opt = {
                    chart: {
                        type: 'bar',
                        height: 350,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            columnWidth: '45%',
                            distributed: true
                            // endingShape: 'rounded'
                        },
                    },
                    series: [{
                        data: dataset
                    }],
                    legend: {
                        show: false,
                        position: 'bottom',
                    },
                    colors: [primary, success, warning]
                }

                const chart = new ApexCharts(el, opt)
                chart.render()

            }

            const bltChart = function(age){

                // const categories = age.map( item => item['jenis_bantuan'] )
                const data = age.map( item => ({y: item['total'], x: item['nama']}) )

                const el = document.querySelector('#blt_chart')
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
                    disabilityChart(disabilities)
                    bltChart(bltReciever)
                    residentJobs.forEach( (data, i) => workChart(data, `#work_chart_${i+1}`))
                    educations.forEach( (data, i) => educationChart(data, `#education_chart_${i+1}`))
                }
            }
        }()

        jQuery(document).ready(function () {
            ChartWidget.init();
        });

        document.querySelector('.caro-btn').classList.add('btn-primary')
        document.querySelector('.education-caro-btn').classList.add('btn-primary')


    </script>
    
@endpush