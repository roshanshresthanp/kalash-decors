
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		{{-- <title> @if(Auth()->user()->role=='office-staff') Admin Dashboard @elseif (Auth()->user()->role=='property-owner') Owner Dashboard @else Client Dashboard @endif | @yield('title')</title> --}}
		<title> Admin Dashboard | @yield('title')</title>
		<link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/logo-light.png') }}">
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> --}}
		{{-- <script src="{{asset('admin/src/plugins/jquery/jquery.min.js')}}"></script> --}}

		@yield('css')

		<!-- Toastr-->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

		

		<!--Bootstrap -->
	<script src="{{asset('admin/src/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


		<!--begin::Page Vendors Styles(used by this page)-->
		{{-- <link href="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('admin/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />

		{{-- <link href="{{asset('admin/assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendors/line-icon/css/simple-line-icons.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendors/elegant-icon/style.css')}}" rel="stylesheet">
         --}}
		{{-- <!-- Bootstrap -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('admin/assets/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('admin/assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendors/bootstrap-selector/css/bootstrap-select.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet"> --}}
		{{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> --}}

		<!--end::Layout Themes-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="{{url('/')}}">
				<h5>Dream Choice Realty</h5>
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="{{url('/')}}" class="brand-logo">
							<img src="{{asset('frontend/assets/image/Capture.jpg')}}">
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					@include('admin.layouts.sidebar')
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					@include('admin.layouts.header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						@include('admin.layouts.subheader')
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							@yield('content')
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						@include('admin.layouts.footer')
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		{{-- @include('admin.layouts.userpanel') --}}
		<!-- end::User Panel-->
		<!--begin::Quick Cart-->
		
		<!--end::Quick Cart-->
		<!--begin::Quick Panel-->
		
		<!--end::Quick Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		{{-- <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<!--begin::Item-->
			<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
					<i class="flaticon2-drop"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/demo1/builder.html" target="_blank">
					<i class="flaticon2-gear"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
					<i class="flaticon2-telegram-logo"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
					<i class="flaticon2-chat-1"></i>
				</a>
			</li>
			<!--end::Item-->
		</ul> --}}
		<!--end::Sticky Toolbar-->
		@include('admin.layouts.message')
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->

		
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>

		{{-- <script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script> --}}



			{{-- <!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
			<!-- Rev slider js -->
			<script src="{{asset('admin/assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
			<!-- Extra plugin css -->
			<script src="{{asset('admin/assets/vendors/counterup/jquery.waypoints.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/image-dropdown/jquery.dd.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/smoothscroll.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js')}}"></script>
			<script src="{{asset('admin/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
			
			<script src="{{asset('admin/assets/js/theme.js')}}"></script> --}}
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		{{-- <script src="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script> --}}
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		{{-- <script src="{{asset('admin/assets/js/pages/widgets.js')}}"></script> --}}
		<!--end::Page Scripts-->
		@yield('script')
		
	</body>
	<!--end::Body-->
</html>