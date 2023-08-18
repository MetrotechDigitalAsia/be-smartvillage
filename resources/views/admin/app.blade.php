
<!DOCTYPE html>
<html lang="en">

	<head><base href="">
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>Desa Getasan: CMS</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="https://fonts.cdnfonts.com/css/bookman-old-style" rel="stylesheet">
                
		<!--Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/be/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/be/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/be/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/be/plugins/custom/datatables/datatables.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />

		<!--Mail Style-->
		@stack('mail-styles')

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="https://unpkg.com/@glidejs/glide/dist/css/glide.core.min.css">

		<link rel="shortcut icon" href="{{ asset('assets/be/media/desa.png') }}" />

		@livewireStyles
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		
	</head>

	<body id="kt_body" style="background-image: url({{ asset('assets/be/media/bg/CMS-header.jpg') }})" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--Main-->

		<!--Header Mobile-->
		@include('partials.mobileHeader')

		<div class="d-flex flex-column flex-root">
			<!--Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--Header-->
					@include('partials.header')

					<!--Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--Subheader-->
						@include('partials.subHeader')

						<!--Entry-->
						<div class="d-flex flex-column-fluid">
							<!--Container-->
							<div class="container">
								<!--Dashboard-->
								@yield('content')
							</div>
						</div>
					</div>

					<!--Footer-->
					@include('partials.footer')

				</div>
			</div>
		</div>

		<!--Scrolltop-->
		@include('partials.scrollTop')


		@livewireScripts
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>

		<!--Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>

		<!--Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/be/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/be/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/be/js/scripts.bundle.js?v=7.0.5') }}"></script>

		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://unpkg.com/@glidejs/glide/dist/glide.min.js"></script>

		@if (!empty($useMap))
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
		@endif

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCem_6fvhccSrm6U1cEUQLPEJfEeuxcNY&libraries=places"></script>

		<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
		
		<script>

			// Enable pusher logging - don't include this in production
			Pusher.logToConsole = true;

			var pusher = new Pusher('4bd4cfa546049d622247', {
				cluster: 'ap1'
			});

			var channel = pusher.subscribe('public-channel');

			var audio = new Audio("{{ asset('assets/be/notif_sound/ip_wa.mp3') }}")

			const spanPulse = document.querySelector('span.ring')
			const notifIcon = document.querySelector('.notif-icon')

			console.log(spanPulse)
			console.log(notifIcon)

			channel.bind('notification-event', function(data) {
				Livewire.emit('notifAdded')
				audio.currentTime = 0
				if(data.data === 'mail'){
					Livewire.emit('refreshMailTable')
					audio.play()
				}
				notifIcon.classList.add('svg-icon-warning')
				spanPulse.classList.add('pulse-ring')
			});

			const notifBtn = document.querySelector('.notif-btn')

			notifBtn.addEventListener('click', () => {
				notifIcon.classList.remove('svg-icon-warning')
				spanPulse.classList.remove('pulse-ring')
			})

		</script>

		<script>


			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			const a = document.querySelector('form')

			function logout(){
				window.location.href = '/logout'
			}

			const deleteData = (e) => {
				let action = $(e).data('href')
				let data = {_method: 'delete'}

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
						confirmButtonText: 'Yes, delete it!',
						cancelButtonText: 'No, cancel!',
						reverseButtons: true
					}).then((result) => {
						if (result.isConfirmed) {
							$.post(action,data)
								.done(function(res){
									console.log(res)
									if (res.message=="successfully") {
										swalWithBootstrapButtons.fire({
											title: 'deleted',
											text: 'Your data has been deleted.',
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

			const previewImage = () => {
				const image = document.querySelector('#image')
				const imgPrev = document.querySelector('.img-preview')
				const imgOld = document.querySelector('#img-old') ?? null
				if(imgOld != null){
					imgOld.classList.add('d-none')
				}

				imgPrev.style.display = 'block !important'
				imgPrev.classList.remove('d-none')
					
				const oFReader = new FileReader()
				oFReader.readAsDataURL(image.files[0])
				
				oFReader.onload = function(oFREvent) {
					imgPrev.src = oFREvent.target.result
				}
			}

			const previewImages = (input) => {

				$('[id="img-preview"]').css('display', 'none')

				if(input.files) {
					var filesAmount = input.files.length;
					console.log(input.files)
					for (i = 0; i < filesAmount; i++) {
						var reader = new FileReader();
						reader.onload = function(event) {
							$($.parseHTML('<img class="img-fluid col-6 my-2" id="img-preview" >')).attr('src', event.target.result).appendTo('div.images-preview-div.row');
						}
						reader.readAsDataURL(input.files[i]);
					}
				}

				$('[id="img-old"]').css('display', 'none')

			}

			var _asideEl = _asideEl = KTUtil.getById('menu_aside');

			var _asideOffcanvas = new KTOffcanvas(_asideEl, {
                overlay: true,
                baseClass: 'offcanvas-mobile',
                //closeBy: 'kt_todo_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });

            // View list
            KTUtil.on(_asideEl, '.list-item[data-action="list"]', 'click', function(e) {
                var type = KTUtil.attr(this, 'data-type');
                var listItemsEl = KTUtil.find(_listEl, '.kt-inbox__items');
                var navItemEl = this.closest('.kt-nav__item');
                var navItemActiveEl = KTUtil.find(_asideEl, '.kt-nav__item.kt-nav__item--active');

                // demo loading
                var loading = new KTDialog({
                    'type': 'loader',
                    'placement': 'top center',
                    'message': 'Loading ...'
                });
                loading.show();

                setTimeout(function() {
                    loading.hide();

                    KTUtil.css(_listEl, 'display', 'flex'); // show list
                    KTUtil.css(_viewEl, 'display', 'none'); // hide view

                    KTUtil.addClass(navItemEl, 'kt-nav__item--active');
                    KTUtil.removeClass(navItemActiveEl, 'kt-nav__item--active');

                    KTUtil.attr(listItemsEl, 'data-type', type);
                }, 600);
            });

			var geocoder; 
			var map;
			var marker;

			function initialize() {
				console.log('init')
				var initialLat = $('.search_lat').val();
				var initialLong = $('.search_long').val();
				initialLat = initialLat?initialLat:36.169648;
				initialLong = initialLong?initialLong:-115.141000;
				var latlng = new google.maps.LatLng(initialLat, initialLong);
				var options = {
					zoom: 16,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("geomap"), options);
				geocoder = new google.maps.Geocoder();
				let pin = "{{asset('pin.jpeg')}}"
				var icon = {
					url: pin, // url
					scaledSize: new google.maps.Size(30, 30), // size
				};
				marker = new google.maps.Marker({
					map: map,
					draggable: true,
					position: latlng,
					icon :icon
				});
				google.maps.event.addListener(marker, "dragend", function () {
					var point = marker.getPosition();
					map.panTo(point);
					geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							map.setCenter(results[0].geometry.location);
							marker.setPosition(results[0].geometry.location);
							$('.search_addr').val(results[0].formatted_address);
							$('.search_lat').val(marker.getPosition().lat());
							$('.search_long').val(marker.getPosition().lng());
						}
					});
				});
			}
			//load google map
			initialize();
			/** autocomplete location search*/
			var PostCodeid = '#search_location';
			$(function () {
				$(PostCodeid).autocomplete({
					source: function (request, response) {
						geocoder.geocode({
							'address': request.term
						}, function (results, status) {
							console.log(status)
							response($.map(results, function (item) {
								return {
									label: item.formatted_address,
									value: item.formatted_address,
									lat: item.geometry.location.lat(),
									lon: item.geometry.location.lng()
								};
							}));
						});
					},
					select: function (event, ui) {
						$('.search_addr').val(ui.item.value);
						$('.search_lat').val(ui.item.lat);
						$('.search_long').val(ui.item.lon);
						var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
						marker.setPosition(latlng);
						initialize();
					}
				});
			});
			
			/** Point location on google map*/
			$('.get_map').click(function (e) {
				var address = $(PostCodeid).val();
				geocoder.geocode({'address': address}, function (results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						marker.setPosition(results[0].geometry.location);
						$('.search_addr').val(results[0].formatted_address);
						$('.search_lat').val(marker.getPosition().lat());
						$('.search_long').val(marker.getPosition().lng());
					} else {
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
				e.preventDefault();
			});
			//Add listener to marker for reverse geocoding
			google.maps.event.addListener(marker, 'drag', function () {
				geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (results[0]) {
							$('.search_addr').val(results[0].formatted_address);
							$('.search_lat').val(marker.getPosition().lat());
							$('.search_long').val(marker.getPosition().lng());
						}
					}
				});
			});


		</script>

		@stack('script')

	</body>

</html>