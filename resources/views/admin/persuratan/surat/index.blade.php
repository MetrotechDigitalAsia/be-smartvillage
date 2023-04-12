@extends('admin.menu.persuratanMenu')

@section('table')

<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">Card Title With Icons</h3>
        </div>
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">
                        <span class="nav-icon">
                            <i class="flaticon2-chat-1"></i>
                        </span>
                        <span class="nav-text">Week</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">
                        <span class="nav-icon">
                            <i class="flaticon2-drop"></i>
                        </span>
                        <span class="nav-text">Month</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="nav-icon">
                            <i class="flaticon2-gear"></i>
                        </span>
                        <span class="nav-text">Year</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Action</a>
                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Another action</a>
                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_3_3">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
            <div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
            <div class="tab-pane fade" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">Aldus PageMaker including versions lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
    </div>
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
							url: "{{ route('usersMail') }}",
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
					serverFiltering: true,
					serverSorting: true,
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
				},{
                    field: 'nik',
					title: 'Nik',
                },{
                    field: 'image',
					title: 'TTD',
                    template: (e) => `<img style="width: 120px; height: 120px; object-fit: cover;" src="{{ asset('storage/${e.image}') }}" alt=''>`
                },{   
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 125,
					overflow: 'visible',
					autoHide: false,
					template: function(e) {
						return `\
							<a href="/persuratan/signature/show/${e.uuid}" class="btn btn-sm btn-clean btn-icon mr-2 bg-light " title="Edit details">\
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
							<a href="javascript:;" data-href="/persuratan/signature/delete/${e.uuid}" onclick="deleteData(this)" class="btn btn-sm btn-clean btn-icon bg-light" title="Delete">\
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