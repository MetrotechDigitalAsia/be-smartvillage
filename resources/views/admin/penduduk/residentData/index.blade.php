@extends('admin.menu.pendudukMenu')

@section('table')

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Data Penduduk</h3>
        </div>
        <div class="card-toolbar justify-content-between ">

			<div class=" d-flex align-items-center mr-5 ">
				<label class="mb-0 d-none d-md-block mr-4">Banjar:</label>
				<select onchange="handleChangeBanjarSelect(this)" id="kt_datatable_search_banjar" class="form-control status-input w-150px" >
					<option value="">Semua</option>
					<option value="Ubud">Ubud</option>
					<option value="Tengah">Tengah</option>
					<option value="Buangga">Buangga</option>
					<option value="Kauh">Kauh</option>
				</select>
			</div>

			<div class="input-icon mr-5">
				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
				<span>
					<i class="flaticon2-search-1 text-muted"></i>
				</span>
			</div>


			<button type="button" class="btn btn-light-primary font-weight-bolder mr-5" data-toggle="modal" data-target="#exportModal" >
				<span class="svg-icon svg-icon-md">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
							<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
						</g>
					</svg>
					<!--end::Svg Icon-->
			</span>Export</button>

            <!--begin::Button-->
            <a href="/data-penduduk/penduduk/create" class="btn btn-primary font-weight-bolder mt-md-5 mt-xl-0">
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

<form action="/data-penduduk/penduduk/download" class="export-form" method="POST" >

	@csrf

	<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Export Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body" style="height: 350px;" >
					<table class="table table-sm table-bordered">
						<thead>
							<tr>
								<td class="text-center" >No</td>
								<td>Field</td>
								<td style="width: 55px; position: relative;" >
									<label class="checkbox" style="position: absolute; right: 17px;" >
										<input type="checkbox" class="checkall" onchange="handleSelectAllFields(this)" />
										<span></span>
									</label>
								</td>
							</tr>
						</thead>
						<tbody>
							@foreach (['Nama', 'No NIK', 'No KK', 'Jenis Kelamin', 'Tempat Lahir', 'Tanggal Lahir', 'Umur', 'Agama', 'Pendidikan', 'Pekerjaan', 'Golongan Darah', 'Status Perkawinan','Tanggal Perkawinan', 'SHDK', 'Kewarganegaraan', 'Ayah', 'Ibu', 'Alamat', 'Status Akta Kelahiran', 'No Akta Kelahiran', 'Status Akta Perkawinan', 'No Akta Perkawinan', 'Telepon', 'Email', 'RT', 'RW', 'Banjar'] as $i => $item)
							<tr>
								<td class="text-center" >{{ $i+1 }}</td>
								<td>{{ $item }}</td>
								<td style="text-align: right; position: relative;" >
									<label class="checkbox" style="position: absolute; right: 17px;" >
										<input type="checkbox" class="field-checkbox" name="{{ str_replace(' ','_',strtolower($item)) }}"/>
										<span></span>
									</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<input type="hidden" name="_banjar">
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
					<button type="submit" onclick="handleSubmitExportData()" data-dismiss="modal" class="btn btn-primary font-weight-bold">Export</button>
				</div>
			</div>
		</div>
	</div>
</form>


@push('script')

<script>

	function handleChangeBanjarSelect(el){
		document.querySelector('input[name=_banjar]').value = el.value
	}

	function handleSelectAllFields(el){
		document.querySelectorAll('.field-checkbox').forEach(e => {
			if(el.checked)
				e.checked = true
			else
				e.checked = false
		})
	}

	function handleSubmitExportData(){
		document.querySelector('.export-form').submit()
		document.querySelector('.checkall').checked = false
		document.querySelectorAll('.field-checkbox').forEach(e => {
			e.checked = false
		})
	}

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
							url: "{{ route('userData') }}",
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
					field: 'nama',
					title: 'Nama',
					width: 180 
				},{
					field: 'no_nik',
					title: 'NIK',
					width: 140
				},{
					field: 'banjar',
					title: 'banjar',
				},{
					field: 'AKUN_MOBILE_APP',
					title: 'Akun Mobile',
					template: (e) => `<span class="label label-light-${e.akun_mobile_app == 1 ? 'success' : 'danger'} label-pill label-inline mr-2">${e.akun_mobile_app == 1 ? 'Tersedia' : 'Tidak Tersedia'}</span>`
				},{   
					field: 'Actions',
					title: 'Aksi',
					sortable: false,
					overflow: 'visible',
					autoHide: false,
					width: 200,
					template: function(e) {
						return `\
							<a data-href="/data-penduduk/penduduk/status/${e.id}" onclick="updateMobileStatus(this)" class="btn btn-sm btn-clean btn-icon mr-2 bg-light " title="Akun Mobile">\
								<span class="svg-icon svg-icon-${e.akun_mobile_app == 1 ? 'success' : 'warning'} svg-icon-lg">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M7.13888889,4 L7.13888889,19 L16.8611111,19 L16.8611111,4 L7.13888889,4 Z M7.83333333,1 L16.1666667,1 C17.5729473,1 18.25,1.98121694 18.25,3.5 L18.25,20.5 C18.25,22.0187831 17.5729473,23 16.1666667,23 L7.83333333,23 C6.42705272,23 5.75,22.0187831 5.75,20.5 L5.75,3.5 C5.75,1.98121694 6.42705272,1 7.83333333,1 Z" fill="#000000" fill-rule="nonzero"/>\
											<polygon fill="#000000" opacity="0.3" points="7 4 7 19 17 19 17 4"/>\
											<circle fill="#000000" cx="12" cy="21" r="1"/>\
										</g>\
									</svg>\
								</span>\
							</a>\
							<a href="/data-penduduk/penduduk/show/${e.id}" class="btn btn-sm btn-clean btn-icon mr-2 bg-light " title="Edit details">\
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
							<a href="javascript:;" data-href="/master-data/data-penduduk/delete/${e.id}" onclick="deleteData(this)" class="btn btn-sm btn-clean btn-icon bg-light" title="Delete">\
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
		
			$('#kt_datatable_search_banjar').on('change', function() {
				datatable.search($(this).val().toLowerCase(), 'banjar');
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

	const updateMobileStatus = (e) => {
		let action = $(e).data('href')
		let data = {_method: 'post'}

		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
			})
			swalWithBootstrapButtons.fire({
				title: 'Are you sure?',
				// text: "You won't be able to revert this!",
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Yes, update it!',
				cancelButtonText: 'No, cancel!',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					$.post(action,data)
						.done(function(res){
							console.log(res)
							if (res.message=="successfully") {
								swalWithBootstrapButtons.fire({
									title: 'updated',
									text: 'status has been updated.',
									icon: 'success'
								})
								.then( res => {
									location.reload()
								})
							} else {
								swalWithBootstrapButtons.fire(
									'',
									res.message,
									'warning'
								)
							}
						})
						.fail(function(res) {
							console.log(res)
						})
				}
			})
	}

</script>
    
@endpush
    
@endsection