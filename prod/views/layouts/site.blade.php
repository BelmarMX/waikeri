<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="@yield('description')">
		<meta name="author" content="{{ $_ENV['MIX_COMPANY'] }}">
		<meta property="og:url" content="{{ $_ENV['MIX_PUBLIC_DOMAIN'] }}">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="{{ $_ENV['MIX_COMPANY'] }}">
		<meta property="og:title" content="@yield('title')">
		<meta property="og:description" content="@yield('description')">
		<meta property="og:image" content="@yield('image')">
		<meta name="msapplication-TileColor" content="#e1cf9b">
		<meta name="msapplication-TileImage" content="{{ assets('favicon/ms-icon-144x144.png') }}">
		<meta name="theme-color" content="#e1cf9b">
		<link rel="apple-touch-icon" sizes="57x57" href="{{ assets('favicon/apple-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ assets('favicon/apple-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ assets('favicon/apple-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ assets('favicon/apple-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ assets('favicon/apple-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ assets('favicon/apple-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ assets('favicon/apple-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ assets('favicon/apple-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ assets('favicon/apple-icon-180x180.png') }}">
		<link rel="icon" type="image/png" sizes="192x192" href="{{ assets('favicon/android-icon-192x192.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ assets('favicon/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ assets('favicon/favicon-96x96.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ assets('favicon/favicon-16x16.png') }}">
		<link rel="manifest" href="{{ assets('favicon/manifest.json') }}">
		<link rel="stylesheet" href="{{ assets('css/normalize.css') }}">
		<link rel="stylesheet" href="{{ assets('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/font-awesome-5.10.2.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ assets('css/plugin/nice-select.css') }}">
		<link rel="stylesheet" href="{{ assets('css/style.css') }}">
		<link rel="stylesheet" href="{{ assets('css/responsive.css') }}">
		@stack('css')
		<title>@yield('title') - Waikeri Transmoney</title>
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
		<script src="{{ assets('js/simulator.js') }}"></script>
		@stack('js')
	</body>
</html>