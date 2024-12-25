<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>@yield('page-title') - {{ settings('app_name') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="@yield('page-title') - {{ settings('app_name') }}">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="/frontend/Default/img/favicon.png">
	<meta property="og:image" content="/frontend/Default/img/vladA.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/frontend/Default/css/slick.css">
	<link rel="stylesheet" href="/frontend/Default/css/simplebar.css">
	<link rel="stylesheet" href="/frontend/Default/css/styles.min.css">

	<link rel="stylesheet" href="/1wrri/css/mobile.08b268ed.css">
	<link rel="stylesheet" href="/1wrri/css/chunk-69e817c7.ae6df068.css">
	<link rel="stylesheet" href="/1wrri/css/chunk-727aef08.597ad927.css">
	<link rel="stylesheet" href="/1wrri/css/chunk-addc556a.9abae963.css">
	<link rel="stylesheet" href="/frontend/Default/preload/style.css">

	<link rel="stylesheet" href="/frontend/Default/css/slider.css">
	<link rel="stylesheet" href="/frontend/Default/css/toastr.css">
	<link rel="stylesheet" href="/frontend/Default/css/sports.css">
	<link rel="stylesheet" href="/frontend/Default/css/main.css">

	<script src="/frontend/Default/js/jquery-3.4.1.min.js"></script>
	<script src="/frontend/Default/js/country.js"></script>
</head>

<body class="@yield('add-body-class')">
	<script type="text/javascript">
		var is_games_page = @if(isset($is_game_page)) true @else false @endif;
		var terms_and_conditions = @if(Auth::check() && auth()->user()->shop && auth()->user()->shop->rules_terms_and_conditions && !auth()->user()->agreed) true @else false @endif;
	</script>

	<!-- MAIN -->
	<main class="main @yield('add-main-class')" style="z-index: 50; padding-bottom: 0px;">
		<div data-v-34ecc166="" id="main-layout" class="has-header">
			<div data-v-34ecc166="" class="safe-area"></div>
			@yield('content')
		</div>
		@yield('footer')
	</main>
	<!-- /.MAIN -->
	
	<!-- LOADING -->
	<div class="preloader">
		<!-- <div class="preloader__img">
			<img src="/frontend/Default/img/_src/preloader_img.png" alt="preloader image">
		</div> -->
		<div class="preloader__progress">
			<div class="mosaic-loader">
				<div class="cell d-1"></div>
				<div class="cell d-2"></div>
				<div class="cell d-4"></div>
				<div class="cell d-6"></div>
			</div>
		</div>
	</div>
	<!-- /.LOADING -->

	<!-- SCRIPTS -->
	<script src="/frontend/Default/js/jquery.inputmask.bundle.min.js"></script>
	<script src="/frontend/Default/js/simplebar.min.js"></script>
	<script src="/frontend/Default/js/slick.min.js"></script>
	<script src="/back/bower_components/moment/min/moment.min.js"></script>
	<script src="/back/bower_components/moment/min/moment-timezone-with-data-1970-2030.min.js"></script>
	<script src="/frontend/Default/js/countdown.min.js"></script>
	<script src="/frontend/Default/js/moment-countdown.min.js"></script>
	<script src="/frontend/Default/js/lazyload.min.js"></script>
	<script src="/frontend/Default/js/sweetalert.min.js"></script>
	<script src="/frontend/Default/js/slider.js"></script>
	<script src="/frontend/Default/js/toastr.js"></script>
	<script src="/frontend/Default/js/custom.js"></script>

	<script type="text/javascript">
		$(function() {
			moment.tz.setDefault("{{ config('app.timezone') }}");
		});
		// $(function() {
		// setInterval(function(){
		// 	$.get('/refresh-csrf').done(function(data){
		// 		$('[name="csrf-token"]').attr('content', data);
		// 		$('[name="_token"]').val(data);
		// 	});
		// }, 5000);
		
		// });
		var lazyLoadInstance = new LazyLoad({
			// Your custom settings go here
		});
	</script>

	@yield('scripts')
</body>

</html>