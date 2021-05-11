<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	@stack('css')
</head>
<body>
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')
	
	@stack('js')
	<script src="{{ assets('js/app.js') }}"></script>
</body>
</html>