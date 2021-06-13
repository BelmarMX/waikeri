@extends('layouts.site')
@section('title', 'Transferencias de dinero internacionales')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner" style="background-image: url('{{ assets('img/banner-bg.png') }}')">
	<div class="laptop">
		<img src="{{ assets('img/laptop-man.png') }}" class="man-lap" alt="">
	</div>
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 ">
					<div class="banner-content">
						<h1 class="head">Haz transacciones seguras</h1>
						<p class="text">
							En <strong>Waikeri Transmoney</strong> te ayudamos a hacer tus transacciones
							de manera segura. Si requieres hacer envíos de dinero al extranjero,
							te ofrecemos la mayor seguridad y menor comisión del mercado.
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					@include('layouts.hero-form')
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

<!-- About Us Start -->
<section class="about">
	<div class="sape">
		<img src="{{ assets('img/about-bg.png') }}" class="about-sape" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<div class="upper-content text-center">
					<h3 class="subtitle">Comparamos y calificamos sólo a los mejores</h3>
					<h2 class="title">
						¿Por qué comparar proveedores con nosotros?
					</h2>
					<p class="text">
						Utilizamos fuentes de datos en tiempo real para comparar los principales proveedores de transferencias de dinero. Hacemos lo difícil funcionan para usted, lo que significa que puede transferir dinero en línea con confianza.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="about-photo">
					<img src="{{ assets('img/about-img.png') }}" alt="" class="about-img">
				</div>
			</div>
			<div class="col-lg-7 offset-lg-1">
				<div class="content">
					<div class="compare-box">
						<div class="tumb">
							<img src="{{ assets('img/about-icon-1.png') }}" alt="">
						</div>
						<div class="text-box">
							<h3 class="subtitle">Compara y ahorra</h3>
							<p class="text">
								En promedio puedes ahorrar hasta un 90% cuando comparas proveedores de tranferencias.
							</p>
						</div>
					</div>
					<div class="compare-box">
						<div class="tumb">
							<img src="{{ assets('img/about-icon-2.png') }}" alt="">
						</div>
						<div class="text-box">
							<h3 class="subtitle">Encuentra un proveedor de confianza</h3>
							<p class="text">
								Con tantos proveedores, elija uno que sea confiable para usuarios como para los expertos.
							</p>
						</div>
					</div>
					<div class="compare-box">
						<div class="tumb">
							<img src="{{ assets('img/about-icon-3.png') }}" alt="">
						</div>
						<div class="text-box">
							<h3 class="subtitle">Obtenga su dinero rapidament</h3>
							<p class="text">
								Algunas transferncias tardan días, otras mínutos. Compara y encuentra tus opciones.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Feature Start -->
<div class="feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<div class="upper-content text-center">
					<h3 class="subtitle">¿Cómo comparamos?</h3>
					<h2 class="title">Encuentra la mejor manera de transferir dinero al extranjero</h2>
					<p class="text">
						Buscamos y comparamos los mejores proveedores de transferncias para tus necesidad, oteniendo
						las mejores tasas de cambio posibles, mientras mostramos los impuestos ocultos.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-1.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Costo</h3>
						<p class="text">
							El costo de la transferencia de divisas es un factor muy importante
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-2.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Velocidad</h3>
						<p class="text">
							Entregue transferencias de dinero al instante o en pocos días.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-3.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Opciones de pago</h3>
						<p class="text">
							Un amplio rango de opciones de pago cuando comparas proveedores.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-4.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Divisas disponibles</h3>
						<p class="text">
							Preferimos provedores que pueden ofrecer más divisas para sus transferencias.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.how-use')

<!-- Partners Start -->
<div class="partners">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 m-auto">
				<div class="upper-content text-center">
					<h3 class="subtitle">Obtenga cotizaciones de multiples proveedores</h3>
					<h2 class="title">Algunos de nuestros socios</h2>
					<p class="text">
						Buscamos y comparamos los mejores proveedores de transferncias para tus necesidad, oteniendo
						las mejores tasas de cambio posibles, mientras mostramos los impuestos ocultos.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-1.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-2.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-3.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-4.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-5.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href="" class="partner-box">
					<img src="{{ assets('img/partner-bg.png') }}" alt="" class="bg">
					<div class="logo">
						<img src="{{ assets('img/partner-6.png') }}" alt="">
					</div>
				</a>
			</div>
			<div class="col-12">
				<a href="#" class="button button-1">Ver más</a>
			</div>
		</div>
	</div>
</div>

@include('layouts.transfer-stats')

@include('layouts.counter')

<!-- Update Start -->
<div class="update">
	<div class="sape">
		<img src="{{ assets('img/update-bg.png') }}" alt="" class="update-bg">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="phone">
					<img src="{{ assets('img/alert-phone.png') }}" alt="" class="phone-img">
				</div>
			</div>
			<div class="col-lg-7 order-lg-last order-first">
				<div class="content">
					<h2 class="title">Mantente actualizado en cualquier lugar a cualquier hora</h2>
					<div class="get-link">
						<a href="#" class="link"><img src="{{ assets('img/apple-icon.png') }}" alt=""></a>
						<a href="#" class="link"><img src="{{ assets('img/google-play.png') }}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 offset-lg-5">
				@include('layouts.alert-box')
			</div>

		</div>
	</div>
</div>

@include('layouts.faq')
@endsection