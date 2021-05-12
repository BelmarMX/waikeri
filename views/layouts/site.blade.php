<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>@yield('title') - Waikeri Transmoney</title>
		<meta name="description" content="@yield('description')">
		<meta name="author" content="{{ $_ENV['MIX_COMPANY'] }}">

		<meta property="og:url" content="{{ $_ENV['MIX_PUBLIC_DOMAIN'] }}">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="{{ $_ENV['MIX_COMPANY'] }}">
		<meta property="og:title" content="@yield('title')">
		<meta property="og:description" content="@yield('description')">
		<meta property="og:image" content="@yield('image')">

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ assets('img/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ assets('img/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ assets('img/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ assets('img/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ assets('img/favicon.png') }}">

		<link rel="stylesheet" href="{{ assets('css/normalize.css') }}">
		<link rel="stylesheet" href="{{ assets('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/font-awesome-5.10.2.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/nice-select.css') }}">
		<link rel="stylesheet" href="{{ assets('css/style.css') }}">
		<link rel="stylesheet" href="{{ assets('css/responsive.css') }}">
		@stack('css')
	</head>
	<body>		
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
		
		<script src="{{ assets('js/jquery.min.js') }}"></script>
		<script src="{{ assets('js/proper-min.js') }}"></script>
		<script src="{{ assets('js/bootstrap.min.js') }}"></script>
		<script src="{{ assets('js/plugin/waypoint.min.js') }}"></script>
		<script src="{{ assets('js/plugin/owl.carousel.min.js') }}"></script>
		<script src="{{ assets('js/plugin/jquery.rcounter.js') }}"></script>
		<script src="{{ assets('js/plugin/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ assets('js/plugin/jquery.nice-select.min.js') }}"></script>
		<script src="{{ assets('js/main.js') }}"></script>
		@stack('js')
	</body>
</html>