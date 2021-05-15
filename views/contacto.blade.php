@extends('layouts.site')
@section('title', 'Contacto')
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

@include('layouts.faq')
@endsection