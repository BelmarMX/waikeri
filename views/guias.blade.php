@extends('layouts.site')
@section('title', 'Guías')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<section class="banner guides" style="background-image: url('{{ assets('img/about-us-bg.png') }}')">
	<div class="bubble">
		<img src="{{ assets('img/bubble.png') }}" alt="" class="bubble-img">
	</div>
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ">
					<div class="banner-content">
						<h2 class="title">Otros servicios</h2>
						<p class="text text-justify">
							También brindamos el servicio para fideicomisos públicos y privados, servicio de pagos de factura y servicio a personas morales, asociaciones civiles y demás; al prestar estos servicios, nos esforzamos por brindar la experiencia más eficiente y positiva en dispersar dinero y como agentes pagadores.senectus.
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

<!-- Guides-detail Start -->    
<div class="guides-detail">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content">
					<h2 class="title">Encuentra la manera más económica<br>de transferir dinero</h2>
					<div class="profile">
						<div class="date">
							<p class="text">Última actualización
								<a href="#"> <span>5 de septiembre de 2021</span></a>
							</p>
						</div>
						<div class="name">
							<div class="pic">
								<img src="{{ assets('img/profile-man.png') }}" alt="" class="profile-man">
							</div>
							<p class="text">Escrito por
								<a href="#"> <span>Robin Norris</span> </a>
							</p>
						</div>
					</div>

					<p class="text main">
						Sí, lo sabemos. ¡Las altas tarifas de transferencia duelen! Y trabajaste duro por ese dinero, ¿por qué tirarlo? ¿la ventana? Evite tarifas infladas, tipos de cambio malos y encuentre la forma más barata de enviar dinero, aquí y ahora. Comofer es un sitio de comparación para transferencias internacionales de dinero que comparar cientos de servicios de transferencia de dinero para encontrar la mejor manera de enviar dinero al exterior por tu necesidad. Utilice nuestro widget de comparación diciendo a dónde desea enviar dinero y cuánto y te daremos un ranking de todos los servicios de transferencia de dinero desde el más barato hasta el más caro.
						<br>
						<br>
						Lea nuestra guía a continuación si desea obtener más información sobre cómo encontrar la forma más barata de enviar dinero en el extranjero, por qué es importante comparar y qué es un servicio especializado de transferencia de dinero.
					</p>

					<div class="qanda">
						<div class="single">
							<h3 class="subtitle">¿Cuál es la forma más barata de enviar dinero al extranjero?</h3>
							<p class="text">
								La forma más económica de enviar dinero al extranjero depende del país desde y hacia el que envía el dinero, la cantidad, el método de pago y la opción de recogida.
							</p> 
						</div>
						<div class="single">
							<h3 class="subtitle">¿Cuál es la forma más barata de enviar dinero al extranjero en general?</h3>
							<p class="text">
								La forma más económica de enviar dinero al extranjero depende del país desde y hacia el que envía el dinero, la cantidad, el método de pago y la opción de recogida.
							</p> 
						</div>
						<div class="single">
							<h3 class="subtitle">¿Cuánto puedo ahorrar si encuentro una forma económica de enviar dinero?</h3>
							<p class="text">
								La forma más económica de enviar dinero al extranjero depende del país desde y hacia el que envía el dinero, la cantidad, el método de pago y la opción de recogida.
							</p> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.transfer-stats')

@include('layouts.counter')

@include('layouts.faq')
@endsection