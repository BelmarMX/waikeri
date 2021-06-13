@extends('layouts.site')
@section('title', 'Reseña')
@section('description', '')
@section('image', assets('img/'))

@section('content')
<!-- Banners Start -->
<section class="banner review" style="background-image: url('{{ assets('img/about-us-bg.png') }}')">
	@include('layouts.navbar')
	<!-- Banner Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 ">
					<div class="banner-content">
						<h2 class="title">Reseña a Power Money</h2>
						<p class="text">
							Our detailed review of powermoney.com — a very well known money transfer company, which
							specialises in sending money overseas online.
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="review-img">
						<img src="{{ assets('img/tanatani.png') }}" alt="" class="review-pic">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->
</section>

<!-- overview Start -->
<div class="overview">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="overview-text">
					<h2 class="title">Descripción General</h2>
					<p class="text">
						When you look online to make an international money transfer do you keep coming across
						powermoney? It's often the cheapest money transfer company, but does this mean it's
						reliable? In this review, we help you figure out if powermoney is the best and the safest
						option for you to use.
					</p>
				</div>
				<div class="powermoney">
					<h4 class="what">¿Quién es Powermoney <br> Money Transfer? </h4>
					<p class="text">
						powermoney Money Transfer is an online money transfer company that offers a cheaper and
						faster way to send money internationally. As a trusted and seasoned name in foreign
						exchange, they could be a good option for your international money transfer.
					</p>
					<div class="list">
						<div class="list-item">
							<i class="far fa-check-circle"></i>
							<p class="text">
								They have <span>millions of customers</span> and handle billions in transactions
								every year.
							</p>
						</div>
						<div class="list-item">
							<i class="far fa-check-circle"></i>
							<p class="text">
								They have millions of customers and handle billions in transactions every year.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="main-box">
					<div class="pic">
						<img src="{{ assets('img/man-right.png') }}" alt="" class="mamu">
					</div>
					<div class="list-box">
						<h3 class="subtitle">Powermoney es bueno en</h3>
						<ul class="power-list">
							<li class="list-item">
								<img src="{{ assets('img/check-icon.png') }}" class="check-icon" alt="">
								<span>Offering the best exchange rate</span>
							</li>
							<li class="list-item">
								<img src="{{ assets('img/check-icon.png') }}" class="check-icon" alt="">
								<span>Very transparent with transfer fees</span>
							</li>
							<li class="list-item">
								<img src="{{ assets('img/check-icon.png') }}" class="check-icon" alt="">
								<span>No minimum money transfer</span>
							</li>
							<li class="list-item">
								<img src="{{ assets('img/check-icon.png') }}" class="check-icon" alt="">
								<span>$1 million maximum money transfer</span>
							</li>
						</ul>
					</div>
					<div class="rating">
						<p class="text">Calificación de Powermoney: 4.8 / 5.0 </p>

						<div class="icon">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							<span>(42,223 Calificaciones)</span>
						</div>

					</div>
				</div>
				<div class="go-site">
					<h3 class="subtitle">Aprenda más</h3>
					<a href="#" class="button button-1">Visitar sitio</a>
					<span>Enviar dinero con powermoney</span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- prosandcoin Start -->
<div class="prosandcoin">
	<div class="shap">
		<img src="{{ assets('img/pros-shap.png') }}" alt="" class="pors-shap">
		<img src="{{ assets('img/tes-right-p.png') }}" alt="" class="right-shap">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="hcontent">
					<h3 class="subtitle">Powermoney Money Transfer</h3>
					<h2 class="title">Pros y contras</h2>
					<p class="text">
						For most international transfer needs, we love PM, but they’re not quite perfect.
						Let’s break it down and explain what PM is great at and where they have a few issues.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="pros">
					<div class="icon">
						<img src="{{ assets('img/pros-icon.png') }}" alt="" class="pors-img">
					</div>
					<ul class="list">
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Money transfer services are very easy to use.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Being a very well known and trusted brand can
								put your mind at ease.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>They have a very informative website that can keep
								you up to date with any currency news.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>No transfer fees, no matter the amount you're
								transferring, and no minimum transfer amount.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Support available for both individuals and businesses.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Good and easily accessible customer support.</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="cons">
					<div class="icon">
						<img src="{{ assets('img/cons-icon.png') }}" alt="" class="cons-img">
					</div>
					<ul class="list">
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Limited currencies available to transfer.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Not the cheapest option for small, regular transfers.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>They do not accept payment by cash or cheque.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>No customer service on weekends.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Powermoney currency calculator doesn't quote the actual rate you get for your
								transfer.</span>
						</li>
						<li class="list-item">
							<i class="fas fa-check"></i>
							<span>Powermoney currency calculator doesn't quote the actual rate you get for your
								transfer.</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- really-easy Start -->
<div class="really-easy">
	<div class="really-shap">
		<img src="{{ assets('img/really-shap.png') }}" alt="" class="shap">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="hcontent">
					<h3 class="subtitle">Cómo usar PM money Transfer</h3>
					<h2 class="title">¡Es bastante sencillo!</h2>
					<p class="text">
						There are three main steps to setting up an account with PM, which we have outlined below.
						You can also watch our video tutorial for a complete guide.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="use-box">
					<div class="img">
						<img src="{{ assets('img/register-1.png') }}" alt="">
						<span>1</span>
					</div>
					<div class="details">
						<h3 class="subtitle">Registrate</h3>
						<p class="text">
							Register with them online, it‘s easy and will take no more than 5 mins
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="use-box">
					<div class="img">
						<img src="{{ assets('img/register-2.png') }}" alt="">
						<span>2</span>
					</div>
					<div class="details">
						<h3 class="subtitle">Transfiere</h3>
						<p class="text">
							Confirm the details of your transfer the recipients details and how you’d like to pay
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="use-box">
					<div class="img">
						<img src="{{ assets('img/register-3.png') }}" alt="">
						<span>3</span>
					</div>
					<div class="details">
						<h3 class="subtitle">Paga</h3>
						<p class="text">
							Pay for your transfer and you’re done!
							PM accept payment via bank transfer.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="button-box">
					<a href="#" class="button button-1">Visitar sitio web</a>
					<div class="video-box">
						<div class="video-img">
							<img src="{{ assets('img/video-play-img.png') }}" alt="">

							<a class="youtube-video mfp-iframe video-play-btn video-icon"
								href="https://www.youtube.com/watch?v=4DCTTrGjGU4">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.testimonial')

<!-- feature-box one Start -->
<div class="feature-box one">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="fcontent-box">
					<h2 class="title">
						¿Es PM Money Transfer seguro?
					</h2>
					<p class="text">
						A question we often get is PM Money Transfer actually legit? The answer is yes.
						PM take their legal responsibilities very seriously. They are regulated in every country
						they operate.
					</p>
					<a href="#" class="button button-1">Visitar sitio web</a>
				</div>
			</div>
			<div class="col-lg-5 order-lg-last order-first">
				<div class="featureimg">
					<img src="{{ assets('img/feature-pic-1.png') }}" alt="" class="pic left">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- feature-box two Start -->
<div class="feature-box two">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="featureimg">
					<img src="{{ assets('img/feature-pic-2.png') }}" alt="" class="pic right">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="fcontent-box">
					<h2 class="title">
						¿Qué tan rápido es PM?
					</h2>
					<p class="text">
						PM says that it sends out most transfers on the same day that they get your money. The
						reason they say “most” is that there are a few areas that will affect the speed of the
						transfer.
					</p>
					<ul class="list">
						<li>
							These include:
						</li>
						<li>
							<i class="far fa-check-circle"></i>
							the currencies you’re moving money between
						</li>
						<li>
							<i class="far fa-check-circle"></i>
							the countries where the money needs to be sent
						</li>
						<li>
							<i class="far fa-check-circle"></i>
							when you’re sending money
						</li>

					</ul>
					<a href="#" class="button button-1">Visitar sitio web</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- feature-box three Start -->
<div class="feature-box three">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="fcontent-box">
					<h2 class="title">
						¿Cuáles son los impuestos de PM?
					</h2>
					<p class="text">
						The one thing you really need to know is how much PM charges to send money overseas. The
						good news is that PM doesn’t charge transfer fees, and you can get competitive rates. Of
						course, that’s not the same thing as saying they are the very cheapest!
						<br> <br>
						Depending on the currency you’re exchanging into, you’ll normally pay between 0.5% and 2%
						more than the base rate, interbank rate when you’re sending money to a popular destination.

					</p>
					<a href="#" class="button button-1">Visitar sitio web</a>
				</div>
			</div>
			<div class="col-lg-5 order-lg-last order-first">
				<div class="featureimg">
					<img src="{{ assets('img/feature-pic-3.png') }}" alt="" class="pic left">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- feature-box four Start -->
<div class="feature-box four">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="featureimg">
					<img src="{{ assets('img/feature-pic-4.png') }}" alt="" class="pic right">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="fcontent-box">
					<h2 class="title">
						¿Tiene PW una app?
					</h2>
					<p class="text">
						When you have an account with PM, you can make transfers through their website, or through
						their <span>iOS</span> and <span>Android apps</span>.
						<br> <br>
						The company has an app to check currency exchange rates and one to make the actual
						transfers. Having this on your phone will make it a lot easier to make transfers on the go
						if you need to.
					</p>
					<a href="#" class="button button-1">Visitar sitio web</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- blog Start -->
<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="hcontent">
					<h3 class="subtitle">Guía de remesas y transferencias de dinero</h3>
					<h2 class="title">Lea nuestras guías sobre cómo enviar dinero al exterior</h2>
					<p class="text">
						Consejos y sugerencias para enviar dinero al extranjero
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="blog-box">
					<div class="imgg">
						<img src="{{ assets('img/blog-1.png') }}" alt="" class="blog-img">
					</div>
					<div class="text-box">
						<a href="#" class="blog-title">
							Encuentre la forma más económica de enviar dinero al extranjero
						</a>
						<span class="date">Jan 28, 2021</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog-box">
					<div class="imgg">
						<img src="{{ assets('img/blog-2.png') }}" alt="" class="blog-img">
					</div>
					<div class="text-box">
						<a href="#" class="blog-title">
							La experiencia del usuario al enviar dinero en línea
						</a>
						<span class="date">Jan 28, 2021</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog-box">
					<div class="imgg">
						<img src="{{ assets('img/blog-3.png') }}" alt="" class="blog-img">
					</div>
					<div class="text-box">
						<a href="#" class="blog-title">
							6 razones para comparar los servicios de transferencia de dinero
						</a>
						<span class="date">Jan 28, 2021</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection