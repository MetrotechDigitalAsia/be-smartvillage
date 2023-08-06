@extends('admin.menu.pendudukMenu')

@section('table')

<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Data Penduduk (Meninggal)</h3>
        </div>
        <div class="card-toolbar justify-content-between ">

			{{-- <div class=" d-flex align-items-center mr-5 ">
				<label class="mb-0 d-none d-md-block mr-4">Banjar:</label>
				<select id="kt_datatable_search_banjar" class="form-control status-input w-150px" >
					<option value="">Semua</option>
					<option value="Ubud">Ubud</option>
					<option value="Tengah">Tengah</option>
					<option value="Buangga">Buangga</option>
					<option value="Kauh">Kauh</option>
				</select>
			</div> --}}

			<div class="input-icon mr-5">
				<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
				<span>
					<i class="flaticon2-search-1 text-muted"></i>
				</span>
			</div>


			<a href="/data-penduduk/penduduk/download/meninggal" class="btn btn-light-primary font-weight-bolder mr-5" >
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
			</span>Export</a>

            <!--begin::Button-->
            {{-- <a href="/data-penduduk/penduduk/create" class="btn btn-primary font-weight-bolder mt-md-5 mt-xl-0">
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
            </span>Tambah Data</a> --}}
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

<form action="/data-penduduk/penduduk/download/all" class="export-form" method="POST" >

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
										<input type="checkbox" onchange="handleSelectAllFields(this)" />
										<span></span>
									</label>
								</td>
							</tr>
						</thead>
						<tbody>
							@foreach (['Nama', 'No NIK', 'No KK', 'Jenis Kelamin', 'Tempat Lahir', 'Tanggal Lahir', 'Agama', 'Pendidikan', 'Pekerjaan', 'Golongan Darah', 'Status Perkawinan','Tanggal Perkawinan', 'SHDK', 'Kewarganegaraan', 'Ayah', 'Ibu', 'Alamat', 'Status Akta Kelahiran', 'No Akta Kelahiran', 'Status Akta Perkawinan', 'No Akta Perkawinan', 'Telepon', 'Email', 'RT', 'RW', 'Banjar'] as $i => $item)
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
							url: "{{ route('deathUserData') }}",
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
					field: 'alamat',
					title: 'ALAMAT',
				},{
					field: 'banjar',
					title: 'banjar',
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