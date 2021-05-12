@extends('layouts.site')
@section('title', 'Contacto')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner contact" style="background-image: url('{{ assets('img/about-us-bg.jpg') }}')">
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
						<h2 class="title">Get in touch</h2>
						<p class="text">We are here to answer any questions you may have about the Comofer
							experience.Reach out to us and we will respond as soon as we can.</p>
					</div>
					<div class="contact-info">
						<div class="info-box one">
							<div class="icon">
								<img src="{{ assets('img/mail.png') }}" alt="" class="pic">
							</div>
							<p class="text">mail</p>
							<span>info@yoursite.com</span>
						</div>
						<div class="info-box two">
							<div class="icon">
								<img src="{{ assets('img/phone.png') }}" alt="" class="pic">
							</div>
							<p class="text">Phone</p>
							<span>+1 (987) 654-32-10</span>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="hero-form contact">
						<h3 class="subtitle">Send us a message</h3>
						<p class="text">Drop us a quick line and we’ll get back to you asap.</p>
						<form action="#">
							<input type="text" class="form-control" placeholder="Name" name="text">
							<input type="email" class="form-control" placeholder="Email address" name="email">
							<input type="text" class="form-control" placeholder="Phone number" name="number">
							<textarea class="input-field borderd textarea" rows="3" id="message"
								placeholder="Message" required=""></textarea>
							<button type="submit">Submit Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

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