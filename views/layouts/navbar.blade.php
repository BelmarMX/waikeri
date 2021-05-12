@php
	$nav_path = $_ENV['MIX_MODE'] == 'development'
		? $_ENV['MIX_LOCALHOST']
		: $_ENV['MIX_PUBLIC_DOMAIN']
	; 
@endphp
<!-- Main-menu Strat -->
<div class="mein-menu">
	<nav class="navbar navbar-expand-lg navbar-light ">
		<div class="container">
			<a class="navbar-brand" href="{{ $nav_path }}">
				<img src="{{ assets('img/logo.png') }}" class="logo" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link @if(url_contains('compara')) active @endif" aria-current="page" href="{{ $nav_path }}compara">Compara</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(url_contains('nosotros')) active @endif" href="{{ $nav_path }}nosotros">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(url_contains('guias')) active @endif" href="{{ $nav_path }}guias">Guías</a>
					</li> 
					<li class="nav-item">
						<a class="nav-link @if(url_contains('resena')) active @endif" href="{{ $nav_path }}resena">Reseña</a>
					</li> 
					<li class="nav-item">
						<a class="nav-link @if(url_contains('contacto')) active @endif" href="{{ $nav_path }}contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<!-- Main-menu End -->