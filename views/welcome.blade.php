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
						<h1 class="head">Compare Money Transfers</h1>
						<p class="text">
							Save on fees, obtain the best exchange rates and find <br>
							the cheapest transfer provider with our real-time comparison.
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
					<h3 class="subtitle">We Review and Compare Only the Best</h3>
					<h2 class="title">Why Compare Money Transfer
						Providers With us?</h2>
					<p class="text">
						We use real-time data feeds to compare the leading money transfer providers. We do the hard
						work for you, meaning you can transfer money online with confidence.
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
							<h3 class="subtitle">Compare and Save</h3>
							<p class="text">
								On average you can save over 90% when comparing money transfer providers.
							</p>
						</div>
					</div>
					<div class="compare-box">
						<div class="tumb">
							<img src="{{ assets('img/about-icon-2.png') }}" alt="">
						</div>
						<div class="text-box">
							<h3 class="subtitle">Find a Trusted Provider</h3>
							<p class="text">With so many providers, pick one that is
								trusted by both users and experts.
							</p>
						</div>
					</div>
					<div class="compare-box">
						<div class="tumb">
							<img src="{{ assets('img/about-icon-3.png') }}" alt="">
						</div>
						<div class="text-box">
							<h3 class="subtitle">Get Your Money Quickly</h3>
							<p class="text">
								Some transfers take days, others minutes, compare to find out your options.
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
					<h3 class="subtitle">How We Compare</h3>
					<h2 class="title">Find the best way to transfer money abroad</h2>
					<p class="text">We find and compare the best money transfer providers for your needs, getting
						you the best exchange rate possible, while exposing the hidden fees.</p>
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
						<h3 class="subtitle">Cost</h3>
						<p class="text">
							The cost of a currency transfer is a hugely important factor
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
						<h3 class="subtitle">Speed</h3>
						<p class="text">Deliver money transfers instantly or within a few days.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-3.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Payment Options</h3>
						<p class="text">A wide range of payment options when comparing listed providers.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="feature-box">
					<div class="tumb">
						<img src="{{ assets('img/feature-icon-4.png') }}" alt="">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Currencies Available</h3>
						<p class="text">We prefer providers that offer more currencies for you to transfer. </p>
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
					<h3 class="subtitle">Get Quotes From Multiple Providers</h3>
					<h2 class="title">Some of our partners</h2>
					<p class="text">We find and compare the best money transfer providers for your needs, getting
						you the best exchange rate possible, while exposing the hidden fees.</p>
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
				<a href="#" class="button button-1">View More</a>
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
					<h2 class="title">Stay updated anywhere, anytime!</h2>
					<div class="get-link">
						<a href="#" class="link"><img src="{{ assets('img/apple-icon.png') }}" alt=""></a>
						<a href="#" class="link"><img src="{{ assets('img/google-play.png') }}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 offset-lg-5">
				<div class="alert-box">
					<div class="icon">
						<img src="{{ assets('img/bal-bg.png') }}" alt="">
						<img src="{{ assets('img/bell.png') }}" alt="" class="bell">
					</div>
					<div class="text-box">
						<h3 class="subtitle">Want to find the best time
							to transfer?</h3>
						<p class="text">Simply use our free email alerts to track the rate daily.</p>
						<a href="#" class="button button-1">Get Alerts Now </a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@include('layouts.faq')
@endsection