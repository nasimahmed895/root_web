<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Next Hrm">
	<meta name="description" content="Next Hrm (SaaA)">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Icon -->
	<link rel="icon" type="image/png" href="{{ asset('public/default/default-tab-icon.png') }}" />
	<!-- CSRF Token -->
	<title>Install</title>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('public/install/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/install/css/app.css') }}">
	@yield('css-stylesheet')
</head>
<body>
	<div id="app">
		<main class="py-4">
			@yield('content')
		</main>
	</div>
</body>
<!-- Scripts -->
<script src="{{ asset('public/install/js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('public/install/js/popper.min.js') }}"></script>
<script src="{{ asset('public/install/js/bootstrap.min.js') }}"></script>
@yield('js-script')
</html>
