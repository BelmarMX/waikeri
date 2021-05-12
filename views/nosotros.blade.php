@extends('layouts.site')
@section('title', 'Nosotros')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner about-us" style="background-image: url('{{ assets('img/about-us-bg.jpg') }}')">
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
						<img src="assets/img/about-himg.png" alt="" class="phone-lock">
					</div>
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

<!-- How-use Start -->
<div class="how-use">
	<div class="usesape">
		<img src="{{ assets('img/use-bg.png') }}" class="usesape-img" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="photo">
					<img src="{{ assets('img/use-img.png') }}" class="use-img" alt="">
				</div>
				<div class="video-box">
					<div class="video-img">
						<img src="{{ assets('img/video-play-img.png') }}" alt="">

						<a class="youtube-video mfp-iframe video-play-btn video-icon"
							href="https://www.youtube.com/watch?v=4DCTTrGjGU4">
							<i class="fas fa-play"></i>
						</a>
					</div>
					<div class="video-text">
						<p class="text">Watch Video Now</p>
						<span><i class="far fa-clock"></i> 2:32 minutes</span>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="content">
					<h3 class="subtitle">Find the cheapest provider</h3>
					<h2 class="title">It's Really Easy!</h2>
					<p class="text">Simple process to get provider for your transfer money</p>
				</div>
				<div class="use-box">
					<div class="install">
						<div class="tumb">
							<img src="{{ assets('img/use-icon-1.png') }}" alt="">
						</div>
						<div class="text-box">
							<span>Step 1</span>
							<h4>Enter your transfer amount</h4>
						</div>
					</div>
					<div class="install">
						<div class="tumb">
							<img src="{{ assets('img/use-icon-2.png') }}" alt="">
						</div>
						<div class="text-box">
							<span>Step 2</span>
							<h4>Compare your options</h4>
						</div>
					</div>
					<div class="install">
						<div class="tumb">
							<img src="{{ assets('img/use-icon-3.png') }}" alt="">
						</div>
						<div class="text-box">
							<span>Step 3</span>
							<h4>Choose the best option</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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

<!-- Users Start -->
<div class="users">
	<div class="man-pic">
		<img src="{{ assets('img/man-plant.png') }}" class="man-plant" alt="">
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