@extends('layouts.site')
@section('title', 'Guías')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<section class="banner guides" style="background-image: url('{{ assets('img/about-us-bg.jpg') }}')">
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
					<div class="hero-form">
						<p class="text">I'd like to exchange</p>
						<div class="courrency-select">
							<form action="#!" id="faq_form">
								<div class="form-group">

									<input type="text" name="number" placeholder="00.00" class="form-control">
								</div>
							</form>

							<div class="language-select">
								<select class="select-bar">
									<option value="">INR</option>
									<option value="">USD</option>
									<option value="">USD</option>
								</select>
							</div>
						</div>
						<p class="text">Country From</p>
						<div class="country">
							<img src="./assets/img/usa-flag.png') }}" alt="">
							<div class="language-select">
								<select class="select-bar">
									<option value="">USA(USD)</option>
									<option value="">USE(USD)</option>
									<option value="">USA(USD)</option>
								</select>
							</div>
						</div>

						<p class="text">Country To</p>
						<div class="country">
							<img src="./assets/img/india-flag.png') }}" alt="">
							<div class="language-select">
								<select class="select-bar">
									<option value="">INR</option>
									<option value="">USD</option>
									<option value="">USD</option>
								</select>
							</div>
						</div>
						<a href="#" class="button button-1">Compare Providers</a>
					</div>
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

<!-- Users Start -->
<div class="users">
	<div class="man-pic">
		<img src="{{ assets('img/man-plant.png ') }}" class="man-plant" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="total-content">
					<div class="content">
						<h3 class="subtitle">+100 money transfer providers reviewed</h3>
						<h2 class="title">Join other users
							Sending money around
							the world</h2>
						<p class="text">Compare money transfer to these destinations and Start Saving On Money
							Transfers Abroad!</p>
					</div>
					<div class="country owl-carousel owl-theme">
						<a href="#" class="item">
							<img src="{{ assets('img/flag-1.png') }}" alt="">
						</a>
						<a href="#" class="item">
							<img src="{{ assets('img/flag-2.png') }}" alt="">
						</a>
						<a href="#" class="item">
							<img src="{{ assets('img/flag-3.png') }}" alt="">
						</a>
						<a href="#" class="item">
							<img src="{{ assets('img/flag-4.png') }}" alt="">
						</a>
						<a href="#" class="item">
							<img src="{{ assets('img/flag-5.png') }}" alt="">
						</a>

					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="user-photo">
					<img src="{{ assets('img/users.png') }}" alt="" class="right-pic">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Counter Start -->
<div class="counter">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="page-counter">
					<div class="icon">
						<img src="{{ assets('img/counter-bg.png') }}" alt="" class="bg">
						<img src="{{ assets('img/counter-icon-1.png') }}" alt="" class="pic-icon">
					</div>
					<div class="counter-item">
						<h2 class="title"><span class="count-num">33</span></h2>
						<p class="text">Providers compared</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="page-counter">
					<div class="icon">
						<img src="{{ assets('img/counter-bg.png') }}" alt="" class="bg">
						<img src="{{ assets('img/counter-icon-2.png') }}" alt="" class="pic-icon">
					</div>
					<div class="counter-item">
						<h2 class="title"><span class="count-num">70</span></h2>
						<p class="text">Countries Supported</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="page-counter">
					<div class="icon">
						<img src="{{ assets('img/counter-bg.png') }}" alt="" class="bg">
						<img src="{{ assets('img/counter-icon-3.png') }}" alt="" class="pic-icon">
					</div>
					<div class="counter-item">
						<h2 class="title"><span class="count-num">68</span>k</h2>
						<p class="text">Quotes provided</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Faq Start -->
<div class="faq">
	<div class="sape">
		<img src="{{ assets('img/question-bg.png') }}" alt="" class="faq-bg">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content">
					<h3 class="subtitle">How Can We Help?</h3>
					<h2 class="title"> Frequently Asked Questions</h2>
					<p class="text">Everything you need to know about Comofer</p>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<img src="./assets/img/faq-icon.png') }}" alt="" class="icon">
								How can I use Comofer to find the best ways to send money?
							</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Comofer is currently serviced in Belgium, Canada, Denmark, Finland, France, Germany,
								Ireland, Italy, Netherlands, Norway, Spain,
								Sweden, United Kingdom and the United States. We will update you when we expand the
								list. CPP for AppTig console only allows players from other consoles to play
								together in the same matchmaking pools.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="question">
					<img src="{{ assets('img/question-man.png') }}" alt="" class="question-man">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection