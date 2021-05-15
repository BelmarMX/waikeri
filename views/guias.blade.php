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
						<h2 class="title">Guides</h2>
						<p class="text">Everything You Need To Know When Sending Money Abroad</p>
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
					<h2 class="title"> Find the Cheapest Way <br> to Send Money Abroad</h2>
					<div class="profile">
						<div class="date">
							<p class="text">Last updated
								<a href="#"> <span>September 5,0 2021</span></a>
							</p>
						</div>
						<div class="name">
							<div class="pic">
								<img src="{{ assets('img/profile-man.png') }}" alt="" class="profile-man">
							</div>
							<p class="text">Written by
								<a href="#"> <span>Robin Norris</span> </a>
							</p>
						</div>
					</div>

					<p class="text main">
						Yeah, we know. High transfer fees hurt! And you worked hard for that money--why throw it out
						the window? Avoid inflated fees, bad exchange rates and find the cheapest way to send money,
						right here, right now. Comofer is a comparison site for international money transfer that
						compare hundreds of money transfer services to find the best way to send money abroad for
						your need. Use our comparison widget by saying where your want to send money to and how much
						and we'll give you a ranking of all the money transfer services from the cheapest to the
						most expensive.
						<br>
						<br>
						Read our guide below if you want to learn more how to find the cheapest way to send money
						overseas, why it's important to compare and what specialist money transfer service is.
					</p>

					<div class="qanda">
						<div class="single">
							<h3 class="subtitle">What’s the cheapest way to send money abroad?</h3>
							<p class="text">
								The cheapest way to send money abroad depends on the country you're sending money from and to, the amount, payment method and pick-up option.
							</p> 
						</div>
						<div class="single">
							<h3 class="subtitle">What’s are the cheapest way to send money overseas generally?</h3>
							<p class="text">
								The cheapest way to send money abroad depends on the country you're sending money from and to, the amount, payment method and pick-up option.
							</p> 
						</div>
						<div class="single">
							<h3 class="subtitle">How much can I save by finding a cheap way to send money?</h3>
							<p class="text">
								The cheapest way to send money abroad depends on the country you're sending money from and to, the amount, payment method and pick-up option.
							</p> 
						</div>
						<div class="single">
							<h3 class="subtitle">How much can I save by finding a cheap way to send money?</h3>
							<p class="text">
								The cheapest way to send money abroad depends on the country you're sending money from and to, the amount, payment method and pick-up option.
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