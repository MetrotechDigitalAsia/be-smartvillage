@extends('admin.menu.informationSystemMenu')

@section('table')

<div class="card card-custom">
    <!--begin::Header-->
	
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Pengaduan</h3>
        </div>
        <div class="card-toolbar">

			<div class="input-icon mr-5">
				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
				<span>
					<i class="flaticon2-search-1 text-muted"></i>
				</span>
			</div>
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
							url: "{{ route('complaint') }}",
							method: 'GET',
							// sample custom headers
							// headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
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
					field: 'name',
					title: 'Nama',
				}, {
					field: 'phone',
					title: 'Telepon',
				},{
					field: 'email',
					title: 'Email',
				},{   
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 125,
					overflow: 'visible',
					autoHide: false,
					template: function(e) {
						return `\
							<a href="/informasi-desa/complaint/show/${e.uuid}" class="btn btn-sm btn-clean btn-icon mr-2 bg-light " title="View details">\
								<span class="svg-icon svg-icon-success svg-icon-lg">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>\
											<path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>\
										</g>\
									</svg>\
								</span>\
							</a>\
							<a href="javascript:;" data-href="/informasi-desa/complaint/delete/${e.uuid}" onclick="deleteData(this)" class="btn btn-sm btn-clean btn-icon bg-light" title="Delete">\
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