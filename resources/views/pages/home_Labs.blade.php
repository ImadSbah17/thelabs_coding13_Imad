@extends('template.template')
@section('content')
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
			<img src="{{asset('img/'.$banner[0]->src)}}" alt="">
				<p>{{$banner[0]->texte}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($bannerimg as $elem)
			<div class="item  hero-item" data-bg="{{asset('img/'.$elem->src)}}"></div>		
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($service as $element)
						
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$element->icon}}"></i>
							</div>
							<h2>{{$element->title}}</h2>
							<p>{{$element->para}}</p>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2><span>the Lab</span>and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$presentation[0]->texte}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentation[0]->textebis}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">{{$presentation[0]->bouton}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="{{$video[0]->liens}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$testimonial[0]->titre}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testimonial as $item)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$element->temoignage}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{asset('img/'.$element->src)}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$element->prenom}} {{$element->nom}}</h2>
										<p>{{$element->fonction}}</p>
									</div>
								</div>
							</div>	
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach ($servicevrai as $elem)
				
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$elem->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$elem->titre}}</h2>
								<p>{{$elem->texte}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			{{  $servicevrai->fragment('service')->links() }}

			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$ready[0]->titre}}</h2>
					<p>{{$ready[0]->texte}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">{{$ready[0]->bouton}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contacthome[0]->titre}}</h2>
					</div>
					<p>{{$contacthome[0]->texte}}</p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">{{$contacthome[0]->contact1}}</p>
					<p class="con-item">{{$contacthome[0]->contact2}}</p>
					<p class="con-item">{{$contacthome[0]->contact3}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
@endsection


