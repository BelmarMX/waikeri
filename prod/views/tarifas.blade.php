@extends('layouts.site')
@section('title', 'Tarifas')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<!-- Banners Start -->
<section class="banner rate" style="background-image: url('{{ assets('img/rate-bg.png') }}')">
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 ">
					<div class="banner-content">
						<h2 class="title">Rate Tracker Alerts</h2>
						<p class="text">
							Currency exchanges are everywhere.money transfer providers too. The challenge is finding
							one that you can trust, who offers the best price and is near to where you live or work.
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="alert-pic">
						<img src="{{ assets('img/alert-pic.png') }}" alt="" class="alertphoto">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

<!-- Rate-tracker Start -->    
<div class="rate-tracker">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="content">
					<h2 class="title">Subscribe to Rate Tracker Alerts</h2>
					<p class="text">
						Simply choose your currencies, how often you want to be updated and subscribe.
					</p>
				</div>
			</div>
			<div class="col-12">
				<div class="rate-details">
					<div class="rate-box one">
						<p class="text">Choose Currency</p>
						<div class="country usa">
							<img src="{{ assets('img/usa-flag.png') }}" alt="">
							<div class="language-select">
								<select class="select-bar">
									<option value="">USA(USD)</option>
									<option value="">USE(USD)</option>
									<option value="">USA(USD)</option>
								</select>
							</div>
						</div>
						<div class="country uk">
							<img src="{{ assets('img/uk-flag.png') }}" alt="">
							<div class="language-select">
								<select class="select-bar">
									<option value="">U.K(GBP)</option>
									<option value="">U.K(GBP)</option>
									<option value="">U.K(GBP)</option>
								</select>
							</div>
						</div>
						<p class="text value">1 USD = 0.7168 GBP</p>
					</div>
					<div class="rate-box two">
						<form action="#">
							<input name="update" id="update" type="checkbox">
							<label for="update"> Send me weekday updates on the USD -> GBP exchange rate</label>
						</form>
					</div>
					<div class="rate-box three">
						<form action="#">
							<div class="form-box">
								<div class="form-group one">
									<input name="alert" id="alert" type="checkbox">
									<label for="alert">Alert me if the rate goes above</label>
								</div>

								<div class="form-group two">
									<input class="textnum" type="text" placeholder="0.7311">
								</div>
							</div>
						</form>
					</div>
					<div class="rate-box four">
						<h4 class="alert-expairy">Alert expiry date?</h4>
						<div class="box">
							<form action="#">
								<div class="form-box">
									<div class="form-group">
										<input name="expiry" id="expiry" type="checkbox">
										<label for="expiry"> No expiry date</label>
									</div>
									<div class="form-group">
										<input class="textnum date"  type="date" placeholder="Date">
									</div> 
									<p class="text">
										You won't receive alerts after the expiry date
									</p>
								</div> 
							</form> 
						</div>
						
					</div>
					<div class="rate-box five">
						<a href="#" class="button button-1"> <i class="fas fa-plus"></i> Add Another</a>
					</div>

					<div class="subscribe-box">
						<h4 class="yourmail">Your email address</h4>
						<form action="#">
							<input type="email" class="form-control" placeholder="Enter Your Email" name="email">
						</form>
						<form action="#">
							<button class="button-1">Subscribe</button> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection