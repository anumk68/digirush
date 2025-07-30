<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="JgGUf8Zekt05bkRfz8v8KfEGcQjGR67efwDu_JuA6Js" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XBHGHYYWWZ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-XBHGHYYWWZ');
	</script>

	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
	<link rel="canonical" href="{{ url()->current() }}" />
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> --}}

	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>

	@yield('heads')

</head>

<body>

	    <!--wrapper-->
	{{-- <div class="wrapper"> --}}
		
        @include('layouts.sidebar')
        
            @include('layouts.header')

	    @yield('content')
	    {{-- @include('layouts.footer') --}}

        @include('layouts.footer')
	{{-- </div> --}}
	<!--end wrapper-->

    <!-- search modal -->
	<div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
			<div class="modal-content">
				<div class="modal-header gap-2">
					<div class="position-relative popup-search w-100">
						<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
					</div>
					<button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
    <!-- end search modal -->

	<!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> 
	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!-- Vector map JavaScript -->
	<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- highcharts js -->
	{{-- <script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/index2.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/js/app.js') }}"></script>
    
	
    @yield('scripts')

</body>
</html>
