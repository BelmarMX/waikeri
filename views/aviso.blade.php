@extends('layouts.site')
@section('title', 'Aviso de privacidade')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner contact" style="background-image: url('{{ assets('img/about-us-bg.png') }}')">
	<div class="bubble">
		<img src="{{ assets('img/bubble.png') }}" alt="" class="bubble-img">
	</div>
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="banner-content">
						<h2 class="title">¿Tiene alguna duda?</h2>
						<p class="text">Hable con nosotros.</p>
					</div>
					<div class="contact-info">
						<div class="info-box one">
							<div class="icon">
								<img src="{{ assets('img/mail.png') }}" alt="" class="pic">
							</div>
							<p class="text">Correo electrónico</p>
							<span>info@waikeritm.com</span>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="hero-form contact">
						<h3 class="subtitle">Contáctanos</h3>
						<p class="text">Escríbenos y pronto nos pondemos en contacto contigo.</p>
						<form action="#">
							<input type="text" class="form-control" placeholder="Nombre" name="text">
							<input type="email" class="form-control" placeholder="Dirección de correo electrónico" name="email">
							<input type="text" class="form-control" placeholder="Número de teléfono" name="number">
							<textarea class="input-field borderd textarea" rows="3" id="Dudas o comentarios"
								placeholder="Message" required=""></textarea>
							<button type="submit">Enviar mensaje</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

<!-- Aviso -->
<div class="container">
	<h1>Aviso de privacidad</h1>
	<small>Actualizado: 06/06/2021</small>

	<br><br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
	<br>
	<p class="text-justify">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam non quam dolorum reiciendis dolores nesciunt, dicta ad eum incidunt, reprehenderit sint a, id neque molestiae quidem dolor. Explicabo, cupiditate? Aliquid!
	</p>
</div>

@include('layouts.faq')
@endsection