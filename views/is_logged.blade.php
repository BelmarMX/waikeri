@extends('layouts.site')
@section('title', 'Test loggin')
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
						<h2 class="title">Sesión tester</h2>
						<p class="text messageBox">No has iniciado sesión.</p>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div id="okta-login-container"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

@push('js')
	<script src="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/js/okta-sign-in.min.js" type="text/javascript"></script>
	<link href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/css/okta-sign-in.min.css" type="text/css" rel="stylesheet"/>
	<link href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.16.0/css/okta-theme.css" type="text/css" rel="stylesheet"/>

	<script type="text/javascript">
		var oktaSignIn = new OktaSignIn({
			baseUrl: "{{ $_ENV['ISSUER'] }}",
			clientId: "{{ $_ENV['CLIENT_ID'] }}",
			authParams: {
			issuer: "default",
			responseType: ['token', 'id_token'],
			display: 'page'
			}
		});
		
		if (oktaSignIn.token.hasTokensInUrl()) {
			oktaSignIn.token.parseTokensFromUrl(
			// If we get here, the user just logged in.
			function success(res) {
				var accessToken = res[0];
				var idToken = res[1];
		
				oktaSignIn.tokenManager.add('accessToken', accessToken);
				oktaSignIn.tokenManager.add('idToken', idToken);
		
				window.location.hash='#logged';
				document.getElementById("messageBox").innerHTML = "Hello, " + idToken.claims.email + "! You just logged in! :)";
			},
			function error(err) {
				console.error(err);
			}
			);
		} else {
			oktaSignIn.session.get(function (res) {
			// If we get here, the user is already signed in.
			if (res.status === 'ACTIVE') {
				document.getElementById("messageBox").innerHTML = "Hello, " + res.login + "! You are *still* logged in! :)";
				return;
			}
			oktaSignIn.renderEl(
				{ el: '#okta-login-container' },
				function success(res) {},
				function error(err) {
				console.error(err);
				}
			);
			});
		}
	</script>
@endpush
@endsection