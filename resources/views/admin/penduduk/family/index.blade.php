@extends('admin.menu.pendudukMenu')

@section('table')

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Data Keluarga</h3>
        </div>
        <div class="card-toolbar">

			<div class="input-icon mr-5">
				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
				<span>
					<i class="flaticon2-search-1 text-muted"></i>
				</span>
			</div>

            <!--begin::Button-->
            <a href="/data-penduduk/penduduk/create" class="btn btn-primary font-weight-bolder">
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
		
		{{-- <div class="table-responsive">
		</div> --}}
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
							url: "{{ route('family') }}",
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
					serverPaging: true,
					serverFiltering: true,
					serverSorting: true,
				},
		
				// layout definition
				layout: {
					scroll: {
						x: true,
						y: true
					},
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

				rows: {
					autoHide: false
				},
		
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
				},{
					field: 'no_kk',
					title: 'NO KK'
				},{
					field: 'status',
					title: 'Status'
				},{
					field: 'qr_code',
					title: 'Qr Code',
					template: e => `{!! QrCode::style('round')->generate('${e.qr_code}') !!}`
				}]
		
			});
		
		};

		return {
			// public functions
			init: function() {
				createTable();
				console.log('asdfasdf')
			},
		};
	}();

	jQuery(document).ready(function() {
		Table.init();
	});

</script>
    
@endpush
    
@endsection