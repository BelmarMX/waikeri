@extends('layouts.site')
@section('title', 'Compara transferencias de dinero')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner compare" style="background-image: url('{{ assets('img/compare-bg.png') }}')">
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area compare">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 m-lg-auto">
					<div class="banner-content">
						<h2 class="title">Compare Money Transfers</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>


<!-- Provaider Start -->
<div class="provaider">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="secure">
					<img src="{{ assets('img/secure-icon.png') }}" alt="" class="sucure-icon">
					<p class="text">We only compare secure providers which we have researched, tested and approved.
						<a href="#">Learn more</a> </p>
				</div>
				<div class="provaider-match">
					<p class="text one">5 Providers Matched </p>
					<p class="text two">Rates updated less than 11 mins ago</p>
				</div>
				<div class="provaider-box">
					<div class="ribbon">
						<img src="{{ assets('img/ribbon.png') }}" class="ribbon-img" alt="">
					</div>
					<div class="rating" style="background: url('{{ assets('img/partner-bg.png') }}');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-2.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
				<div class="provaider-box"> 
					<div class="rating" style="background: url('assets/img/partner-bg.png');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-1.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
				<div class="provaider-box"> 
					<div class="rating" style="background: url('assets/img/partner-bg.png');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-3.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
				<div class="provaider-box"> 
					<div class="rating" style="background: url('assets/img/partner-bg.png');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-4.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
				<div class="provaider-box"> 
					<div class="rating" style="background: url('assets/img/partner-bg.png');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-5.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
				<div class="provaider-box"> 
					<div class="rating" style="background: url('assets/img/partner-bg.png');">
						<div class="partner-img">
							<img src="{{ assets('img/partner-5.png') }}" alt="">
						</div>
						<p class="text">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							(42,223 Reviews)
						</p>
						<a href="review.html" class="link">Learn more >></a>
					</div>
					<div class="content">
						<div class="pament-box">
							<div class="pament">
								<p class="text">Payment Options</p>
								<div class="cradit-card">
									<p class="text"><img src="{{ assets('img/card.png') }}" alt=""> <span>Debit /Credit Card</span></p>
									<p class="text"><img src="{{ assets('img/bank.png') }}" alt=""> <span>Debit /Credit Card</span></p>
								</div>
							</div> 
							<div class="exchange">
								<p class="text">Exchange rate: <span>0.7145</span></p>
								<p class="text">Transfer fees: <span>$0.00 USD</span></p>
								<p class="text">Transfer time: <span>$0.00 USD</span></p>
							</div>
						</div>
					
						<div class="free-transfer">
							<img src="{{ assets('img/free-trns.png') }}" alt="" class="free-icon">
							<p class="text">New customers get first 3 transfers fee FREE</p>
						</div>
					</div>
					<div class="total">
						<p class="text">Total:</p>
						<h4 class="amount">£1,786.23 GBP</h4>
						<p class="text">Included fees</p>
						<a href="#" class="button button-1">Go to site</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- update compare Start -->
<div class="update compare">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="girl">
					<img src="{{ assets('img/alert-girl.png') }}" alt="" class="alert-girl">
				</div>
			</div>
			<div class="col-lg-7">
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

@include('layouts.how-use')

@include('layouts.faq')
@endsection