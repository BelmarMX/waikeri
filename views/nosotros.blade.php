@extends('layouts.site')
@section('title', 'Nosotros')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner about-us" style="background-image: url('{{ assets('img/about-us-bg.png') }}')">
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 ">
					<div class="banner-content">
						<h2 class="title">Acerca de nosostros</h2>
						<p class="text">
							La manera más fácil y segura de hacer transferencias con clientes y provedores
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="phone-coin">
						<img src="{{ assets('img/about-himg.png') }}" alt="" class="phone-lock">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

<!-- mission Start -->
<div class="mission">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="mission-img">
					<img src="{{ assets('img/mission.png') }}" alt="" class="mission-pic">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="content">
					<h3 class="subtitle">Departamento de cumplimiento</h3>
					<h2 class="title">Waikeri TM</h2>
					<p class="text">
						Para nosotros el cumplimiento normativo es muy importante, y nos comprometemos a seguir pautas específicas para que pueda enviar dinero sin preocupaciones.
					</p>
				</div>
				<div class="content mt-3">
					<h3 class="subtitle">Obrar con la debida cautela</h3>
					<p class="text">
						Ejercemos la debida cautela con todos los agentes y corresponsales antes de contratar con ellos. Resultado: Todas las transferencias de dinero procesadas por nosotros pasan por estrictos controles para evitar el lavado de dinero y financiamiento del terrorismo.
					</p>
				</div>
				<div class="content mt-3">
					<h3 class="subtitle">Leyes y reglamentaciones</h3>
					<p class="text">
						Las cumplimos, todas. Las políticas y procedimientos de cumplimiento que exigen las leyes de los Estados Unidos Mexicanos (CNBV) y las de la jurisdicción en la que operamos. Waikeri TM cumple además con las emitidas por Oficina de Control de Activos Extranjeros (OFAC) y se adhiere a todas las sanciones de la Unión Europea y Naciones Unidas.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.transfer-stats')

@include('layouts.counter')

@include('layouts.testimonial')

@endsection