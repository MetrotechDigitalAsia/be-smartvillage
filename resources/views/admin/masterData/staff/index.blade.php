@extends('admin.menu.masterDataMenu')

@section('table')

<div class="row">
	<div class="col-xl-4">
		<!--begin::Stats Widget 16-->
		<a href="#" class="card card-custom card-stretch gutter-b">
			<!--begin::Body-->
			<div class="card-body">
				<span class="svg-icon svg-icon-primary svg-icon-3x ml-n1">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M6.182345,4.09500888 C6.73256296,3.42637697 7.56648864,3 8.5,3 L15.5,3 C16.4330994,3 17.266701,3.42600075 17.8169264,4.09412386 C17.8385143,4.10460774 17.8598828,4.11593789 17.8809917,4.1281251 L22.5900048,6.8468751 C23.0682974,7.12301748 23.2321726,7.73460788 22.9560302,8.21290051 L21.2997802,11.0816097 C21.0236378,11.5599023 20.4120474,11.7237774 19.9337548,11.4476351 L18.5,10.6198563 L18.5,19 C18.5,19.5522847 18.0522847,20 17.5,20 L6.5,20 C5.94771525,20 5.5,19.5522847 5.5,19 L5.5,10.6204852 L4.0673344,11.4476351 C3.58904177,11.7237774 2.97745137,11.5599023 2.70130899,11.0816097 L1.04505899,8.21290051 C0.768916618,7.73460788 0.932791773,7.12301748 1.4110844,6.8468751 L6.12009753,4.1281251 C6.14061376,4.11628005 6.16137525,4.10524462 6.182345,4.09500888 Z" fill="#000000" opacity="0.3"/>
							<path d="M9.85156673,3.2226499 L9.26236944,4.10644584 C9.11517039,4.32724441 9.1661011,4.62457583 9.37839459,4.78379594 L11,6 L10.0353553,12.7525126 C10.0130986,12.9083095 10.0654932,13.0654932 10.1767767,13.1767767 L11.6464466,14.6464466 C11.8417088,14.8417088 12.1582912,14.8417088 12.3535534,14.6464466 L13.8232233,13.1767767 C13.9345068,13.0654932 13.9869014,12.9083095 13.9646447,12.7525126 L13,6 L14.6216054,4.78379594 C14.8338989,4.62457583 14.8848296,4.32724441 14.7376306,4.10644584 L14.1484333,3.2226499 C14.0557004,3.08355057 13.8995847,3 13.7324081,3 L10.2675919,3 C10.1004153,3 9.94429962,3.08355057 9.85156673,3.2226499 Z" fill="#000000"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">Staff Pria : {{ $staffPria }}</div>
			</div>
			<!--end::Body-->
		</a>
		<!--end::Stats Widget 16-->
	</div>
	<div class="col-xl-4">
		<!--begin::Stats Widget 16-->
		<a href="#" class="card card-custom card-stretch gutter-b">
			<!--begin::Body-->
			<div class="card-body">
				<span class="svg-icon svg-icon-primary svg-icon-3x ml-n1">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M8.04050792,3 C8.31778201,4.50768629 9.98487319,5.66666667 12,5.66666667 C14.0151268,5.66666667 15.682218,4.50768629 15.9594921,3 L18.381966,3 C18.9342508,3 19.381966,3.44771525 19.381966,4 C19.381966,4.1552451 19.3458209,4.30835816 19.2763932,4.4472136 L16.2763932,10.4472136 C16.1070012,10.7859976 15.7607381,11 15.381966,11 L8.61803399,11 C8.23926193,11 7.89299881,10.7859976 7.7236068,10.4472136 L4.7236068,4.4472136 C4.47661755,3.9532351 4.6768419,3.35256206 5.17082039,3.10557281 C5.30967583,3.03614509 5.46278889,3 5.61803399,3 L8.04050792,3 Z" fill="#000000" opacity="0.3"/>
							<path d="M9.35406592,12 L14.6459341,12 C15.4637433,12 16.1991608,12.4979019 16.5028875,13.2572186 L19.4514437,20.6286093 C19.6565571,21.1413928 19.4071412,21.7233633 18.8943577,21.9284767 C18.7762374,21.9757248 18.6501865,22 18.522967,22 L5.47703296,22 C4.92474821,22 4.47703296,21.5522847 4.47703296,21 C4.47703296,20.8727806 4.50130816,20.7467296 4.54855627,20.6286093 L7.49711254,13.2572186 C7.80083924,12.4979019 8.53625675,12 9.35406592,12 Z" fill="#000000"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">Staff Wanita : {{ $staffWanita }}</div>
				{{-- <div class="font-weight-bold text-inverse-white font-size-sm">Lands, Houses, Ranchos, Farms</div> --}}
			</div>
			<!--end::Body-->
		</a>
		<!--end::Stats Widget 16-->
	</div>
	<div class="col-xl-4">
		<!--begin::Stats Widget 16-->
		<a href="#" class="card card-custom card-stretch gutter-b">
			<!--begin::Body-->
			<div class="card-body">
				<span class="svg-icon svg-icon-primary svg-icon-3x ml-n1">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"/>
							<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">Total Staff : {{ $total }} </div>
				{{-- <div class="font-weight-bold text-inverse-white font-size-sm">Lands, Houses, Ranchos, Farms</div> --}}
			</div>
			<!--end::Body-->
		</a>
		<!--end::Stats Widget 16-->
	</div>
</div>

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Staff Management</h3>
            </h3>
        </div>
        <div class="card-toolbar">

			<div class="input-icon mr-5">
				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
				<span>
					<i class="flaticon2-search-1 text-muted"></i>
				</span>
			</div>

            <!--begin::Button-->
            <a href="/master-data/staff/create" class="btn btn-primary font-weight-bolder">
            <span class="svg-icon svg-icon-md">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" cx="9" cy="15" r="6" />
                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>Tambah Data</a>
            <!--end::Button-->
        </div>
    </div>
	
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">
        <!--begin: Datatable-->

		@include('partials.success-alert')
		
        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
        <!--end: Datatable-->
    </div>
    <!--end::Body-->
</div>


@push('script')

<script>

	var Table = function() {
		// Private functions

		// basic demo
		var createTable = function() {

			var datatable = $('#kt_datatable').KTDatatable({
				// datasource definition
				data: {
					type: 'remote',
					source: {
						read: {
							url: "{{ route('staff') }}",
							method: 'GET',
							map: function(raw) {
								// sample data mapping
								var dataSet = raw;
								if (typeof raw.data !== 'undefined') {
									dataSet = raw.data;
								}
								return dataSet;
							},
						},
					},
					pageSize: 10,
					// serverPaging: true,
					// serverFiltering: true,
					// serverSorting: true,
				},
		
				// layout definition
				layout: {
					scroll: true,
					height: 500,
					footer: false,
				},
		
				// column sorting
				sortable: false,
				pagination: true,
		
				search: {
					input: $('#kt_datatable_search_query'),
                	key: 'generalSearch'
				},

				// rows: {
				// 	beforeTemplate: (row,data,index) => console.log(row,data,index)
				// },
		
				// columns definition
				columns: [
				{
					field: 'DT_RowIndex',
					title: '#',
					sortable: 'asc',
					width: 30,
					type: 'number',
					selector: false,
					textAlign: 'center',
				}, {
					field: 'fullname',
					title: 'Nama',
				}, {
                    field: 'image',
					title: 'Foto',
					template: (e) => {
						return `\<div class="symbol symbol-90 mr-3">
									\<img alt="Pic" src="{{ asset('storage/'. '${e.image}') }}" style="object-fit: cover;"/>
								\</div>`
					}
                }, {
                    field: 'email',
					title: 'Email',
                }, {   
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 125,
					overflow: 'visible',
					autoHide: false,
					template: function(e) {
						return `\
							<a href="/master-data/staff/show/${e.id}" class="btn btn-sm btn-clean btn-icon mr-2 bg-light " title="Edit details">\
								<span class="svg-icon svg-icon-success svg-icon-lg">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
											<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
										</g>\
									</svg>\
								</span>\
							</a>\
							<a href="javascript:;" data-href="/master-data/staff/delete/${e.id}" onclick="deleteData(this)" class="btn btn-sm btn-clean btn-icon bg-light" title="Delete">\
								<span class="svg-icon svg-icon-danger svg-icon-lg">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
											<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
										</g>\
									</svg>\
								</span>\
							</a>\
						`;
					},
				}],
		
			});
		
			$('#kt_datatable_search_status').on('change', function() {
				datatable.search($(this).val().toLowerCase(), 'Status');
			});
		
			$('#kt_datatable_search_type').on('change', function() {
				datatable.search($(this).val().toLowerCase(), 'Type');
			});
		
			$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

		};

		return {
			// public functions
			init: function() {
				createTable();
			},
		};
	}();

	jQuery(document).ready(function() {
		Table.init();
	});

</script>
    
@endpush
    
@endsection