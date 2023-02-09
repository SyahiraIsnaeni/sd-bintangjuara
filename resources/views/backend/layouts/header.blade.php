<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no, mt-5' name='viewport' />
	<link rel="icon" href="{{asset('back/img/icon.ico')}}" type="image/x-icon"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">

	<!-- Fonts and icons -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	
	<script src="{{ asset('back/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [{{asset('back/css/fonts.min.css')}}]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('back/css/atlantis.min.css')}}"> -->
	<link rel="stylesheet" href="{{asset('back/css/style.css')}}">
	
	

	<!-- CSS Just for demo purpose, don't include it in your project
	<link rel="stylesheet" href="{{asset('back/css/demo.css')}}"> -->
	
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header " data-background-color="blue">
			
				<a class="logo" >
				<h2 class="text-white mt-2 fw-bold">
					<img src="{{asset('back/img/logo.png')}}" width="50" height="50" >   Admin SD
				</h2>
					</a>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
	
	</div>
	<div class="main-panel">
		<div class="content">
				@yield('content')
		</div>
	</div>
	<footer class="footer">
				<div class="container-fluid">
					</nav>
					<div class="copyright ml-auto">
						Copyright © 2023 psbbintangjuara.com. All rights reserved
					</div>				
				</div>
			</footer>
	<!--   Core JS Files   -->
@include('backend.includes.js')
</body>
</html>