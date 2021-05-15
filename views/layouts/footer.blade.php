@php
	$nav_path = $_ENV['MIX_MODE'] == 'development'
		? $_ENV['MIX_LOCALHOST']
		: $_ENV['MIX_PUBLIC_DOMAIN']
	;
@endphp
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="subcribe-box" style="background: url('{{ assets('img/subscribe-bg.png') }}');">
					<h3 class="subcribe">Para recibir actualizaciones y beneficios exclusivos</h3>
					<div class="form-group">
						<form action="#">
							<input type="email" class="form-control " placeholder="Ingresa tu dirección de email" name="email">
							<button class="button-1">Suscribirme</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="footer-box">
					<a href="#"><img class="logo" src="{{ assets('img/logo.png') }}" alt=""> </a>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="footer-box">
					<ul class="footer-link">
						<li><a href="{{ $nav_path }}">Inicio</a></li>
						<li>|</li>
						<li><a href="{{ $nav_path }}nosotros">Nosotros</a></li>
						<li>|</li>
						<li><a href="{{ $nav_path }}contacto">Contacto</a></li>
						<li>|</li>
						<li><a href="{{ $nav_path }}aviso-privacidad">Aviso de privacidad</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-12">
				<div class="raka"></div>
			</div>
			<div class="col-md-6">
				<div class="footer-bottom">
					<p class="text">Copyright &copy; <a href="#">{{ $_ENV['MIX_COMPANY'] }}</a> | <a href="#">2021</a> </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-bottom">
					<div class="social-style">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-skype"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--====== Scroll To Top Start ======-->
<div id="scrollUp" title="Scroll To Top">
	<i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top End ======-->