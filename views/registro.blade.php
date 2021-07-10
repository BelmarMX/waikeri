@extends('layouts.site')
@section('title', 'Registro')
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
						<h2 class="title">Regístrate</h2>
						<p class="text">Comienza a usar nuestros servicios.</p>
						
						@if( !isset($_SESSION['logged_in']) )
						<div class="text-end">
							<button id="login__load" class="title btn btn-secondary">
								Ya tengo una cuenta.
							</button>
							<button id="register__load" class="btn btn-secondary d-none">
								Registrarme.
							</button>
						</div>
						@endif
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="hero-form contact">
						@isset( $_SESSION['logged_in'] )
						<h3 class="login__title subtitle">Bienvenido</h3>
						@else
						<h3 class="login__title d-none subtitle">Inicia Sesión</h3>
						<form method="POST" action="login" class="login__form d-none">
							<input type="email" class="form-control" placeholder="Dirección de correo electrónico" name="email">
							<input type="password" class="form-control" placeholder="********" name="password">
							<button type="submit">Iniciar Sesión</button>
						</form>

						<h3 class="register__title subtitle">Registro</h3>
						<form method="POST" action="registro" class="register__form">
							<input type="text" class="form-control" placeholder="Nombre" name="name">
							<input type="email" class="form-control" placeholder="Dirección de correo electrónico" name="email">
							<input type="number" class="form-control" placeholder="Teléfono" min="1000000000" max="9999999999" name="phone">
							<input type="password" class="form-control" placeholder="*********" name="password">
							<button type="submit">Registrarme</button>
						</form>
						@endisset
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

@include('layouts.faq')

@isset($mail_response)
<div id="oversea" class="position-fixed top-0 start-0 d-block w-100" style="z-index: 100">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
	</svg>
	@if( $mail_response['success'] )
	<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		<div>
			{{ $mail_response['message'] }}
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@else
	<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		<div data-error="{{ $mail_response['error'] }}">
			{{ $mail_response['message'] }}
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif
</div>
@endisset
@push('js')
	<script>
		let showLogin = document.querySelector('#login__load')
		showLogin.addEventListener('click', function(e){
			document.querySelector('.login__title').classList.remove('d-none')
			document.querySelector('.login__form').classList.remove('d-none')
			document.querySelector('#register__load').classList.remove('d-none')
			
			document.querySelector('.register__title').classList.add('d-none')
			document.querySelector('.register__form').classList.add('d-none')
			document.querySelector('#login__load').classList.add('d-none')
		})

		let showRegister = document.querySelector('#register__load')
		showRegister.addEventListener('click', function(e){
			document.querySelector('.login__title').classList.add('d-none')
			document.querySelector('.login__form').classList.add('d-none')
			document.querySelector('#register__load').classList.add('d-none')

			document.querySelector('.register__title').classList.remove('d-none')
			document.querySelector('.register__form').classList.remove('d-none')
			document.querySelector('#login__load').classList.remove('d-none')
		})
	</script>
	<script>
		setTimeout(() => {
			$('.btn-close').click()
		}, 5000)
	</script>
@endpush
@endsection