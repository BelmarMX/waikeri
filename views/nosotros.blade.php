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
						<h2 class="title">About Comofer</h2>
						<p class="text">
							Currency exchanges are everywhere.money transfer providers too. The challenge is finding
							one that you can trust, who offers the best price and is near to where you live or work.
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
					<h3 class="subtitle">Comofer's mission</h3>
					<h2 class="title">To help you save on transfer fees and exchange rates</h2>
					<p class="text">
						We believe that transferring money between countries should be a painless experience for
						everyone involved. For the sender, the receiver and even for your wallet. <br> <br>
						With so many different factors and companies to consider, our aim is to remove the
						difficulty in
						finding and using money transfer providers, guiding you through every single step and making
						sure you’re making the best decision for your specific needs.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.transfer-stats')

@include('layouts.counter')

<!-- testomonial Start -->
<div class="testomonial">
	<div class="phone">
		<img src="{{ assets('img/tes-right-p.png') }}" alt="" class="right-phone">
	</div>
	<div class="sape">
		<img src="{{ assets('img/testomonial-shape.png') }}" alt="" class="test-sape">
	</div>
	<div class="test-girl">
		<img src="{{ assets('img/test-girl.png') }}" alt="" class="girl-pic">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="testo-box owl-carousel owl-theme">
					<div class="item">
						<div class="tumb">
							<img src="{{ assets('img/testo-man.png') }}" alt="">

						</div>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<p class="text">
							Great to deal with and excellent market knowledge. Was able to source exactly
							what I needed in a short time. Will use this service again soon.
						</p>
						<a href="#" class="button button-1">Donnie Neal </a>
					</div>
					<div class="item">
						<div class="tumb">
							<img src="{{ assets('img/testo-man.png') }}" alt="">

						</div>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<p class="text">
							Great to deal with and excellent market knowledge. Was able to source exactly
							what I needed in a short time. Will use this service again soon.
						</p>
						<a href="#" class="button button-1">Donnie Neal </a>
					</div>
					<div class="item">
						<div class="tumb">
							<img src="{{ assets('img/testo-man.png') }}" alt="">

						</div>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<p class="text">
							Great to deal with and excellent market knowledge. Was able to source exactly
							what I needed in a short time. Will use this service again soon.
						</p>
						<a href="#" class="button button-1">Donnie Neal </a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-lg-last order-first">
				<div class="content">
					<h3 class="subtitle">Testimonials</h3>
					<h2 class="title">Trusted from our clients</h2>
					<p class="text">Don’t take our word for it.See what our past clients say.</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection