<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>nord remodel</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- <link rel="shortcut icon" href="img/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/img/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/img/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/img/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72.png">  -->

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

</head>

<body>

<nav class="nav">
	<div class="container">
		<div class="row align-items-center align-items-lg-end">
			<div class="col-lg-3 col-6">
				<a href="{{ route('home') }}">
					<img src="{{ asset('images/logo.svg') }}" alt="logo" class="nav__logo">
				</a>
			</div>
			<div class="col-6 d-lg-none">
				<button class="nav-mob__btn">
					<img src="{{ asset('images/nav_ico.svg') }}" alt="menu">
				</button>
			</div>
			<div class="col-lg-9 nav-mob">
				<div class="nav__container justify-content-between align-items-center">
					<ul class="nav-list">
						<li class="nav-list__item">
							<a href="#" class="open-additional">Services <i></i></a>
							<ul class="additional-menu d-md-none">
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Bathroom Remodel</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Attic Remodel</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Architectural Design</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Kitchen Remodel</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Home Additions</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Home Remodeling</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Basement Remodel</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Custom Home Building</a></li>
								<li><a href="{{ route('dev') }}" class="additional-menu__link">Commercial Remodeling</a></li>
							</ul>
						</li>
						<li class="nav-list__item"><a href="{{ route('home') }}">Home</a></li>
						<li class="nav-list__item"><a href="{{ route('dev') }}">About us</a></li>
						<li class="nav-list__item"><a href="{{ route('dev') }}">Portfolio</a></li>
						<li class="nav-list__item"><a href="{{ route('dev') }}">Blog</a></li>
					</ul>
					<a href="tel:+2065121152" class="nav-phone">2065121152</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container additional-menu d-none d-md-block">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Bathroom Remodel</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Attic Remodel</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Architectural Design</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Kitchen Remodel</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Home Additions</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Home Remodeling</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Basement Remodel</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Custom Home Building</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('dev') }}" class="additional-menu__link">Commercial Remodeling</a>
			</div>
		</div>
	</div>
</nav>

<header class="head height">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-5 col-md-6">
				<h1 class="head__title">H<span>o</span>me Rem<span>o</span>deling Seattle</h1>
			</div>
			<div class="col-xl-5 col-md-6 d-none d-md-block">
				<h2 class="head__description">All of our services at Nord Remodel are backed by our 100% satisfaction guarantee. We love our craft and are obsessed with delivering the highest quality.</h2>
				<a href="#first" class="head__btn anchor">LEARN MORE</a>
			</div>
		</div>
	</div>
	<img src="{{ asset('images/head_img.jpg') }}" alt="nord" class="head__img">
	<div class="container d-md-none">
		<div class="row">
			<div class="col">
				<h2 class="head__description">All of our services at Nord Remodel are backed by our 100% satisfaction guarantee. We love our craft and are obsessed with delivering the highest quality.</h2>
				<a href="#first" class="head__btn anchor">LEARN MORE</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-md-3 col-3">
				<a href="https://www.houzz.com/professionals/kitchen-and-bath-remodelers/nord-construction-pfvwus-pf~1673721966" target="_blank" class="site-item">
					<div class="site-item__stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="site-item__logo">
						<img src="{{ asset('images/houzz.png') }}" alt="houzz">
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-md-3 col-3">
				<a href="https://www.yelp.com/biz/nord-construction-seattle" target="_blank" class="site-item">
					<div class="site-item__stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="site-item__logo">
						<img src="{{ asset('images/yelp.png') }}" alt="yelp">
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-md-3 col-3">
				<a href="https://www.buildzoom.com/contractor/nord-construction-wa" target="_blank" class="site-item">
					<div class="site-item__stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="site-item__logo">
						<img src="{{ asset('images/buildzoom.png') }}" alt="buildzoom">
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-md-3 col-3">
				<a href="https://porch.com/seattle-wa/remodeling-contractors/nord-construction-165461595/pp" target="_blank" class="site-item">
					<div class="site-item__stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="site-item__logo">
						<img src="{{ asset('images/porch.png') }}" alt="porch">
					</div>
				</a>
			</div>
		</div>
	</div>
</header>

<section id="first" class="achievement">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="row">
					<div class="col-md-4">
						<div class="achievement-item">
							<p class="achievement-item__text">We always immerse ourselves in each project as much as possible and always try to offer the best solution.</p>
							<h4 class="achievement-item__title">Twenty years in business</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="achievement-item">
							<p class="achievement-item__text">All of our residential home remodeling and construction services are custom-tailored to your needs and budget</p>
							<h4 class="achievement-item__title">Optimal cost budgeting</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="achievement-item">
							<p class="achievement-item__text">We make the process easy and fast. There is no hassle with us as we take care of everything.</p>
							<h4 class="achievement-item__title">We give a one year warranty</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-md-6">
				<h3 class="about__title">About us</h3>
				<p class="about__text">Nord Remodel was founded back in 2003 when a family of Ukrainian immigrants decided to move to America. The company since then has grown and incorporated best practices that provide our clients with a seamless process of remodeling their homes. With the use of today's tech and the knowledge of construction, we strive to provide our clients with solutions to their unique needs. We are the one-stop company that guides you through the whole process, describing & communicating every step and making this partnership enjoyable for everyone involved.</p>
			</div>
			<div class="col-md-4 offset-md-1">
				<p class="about__text about__text_mini">We take the time to listen to the vision you have for your home, draw a clear and comprehensive plan, and provide end-to-end construction services in Seattle designed to make your vision a reality.<br><br>The task and solution are to make your space comfortable and beautiful, thus we always give a guarantee for our work.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h4 class="video__ttl d-none d-sm-block">WATCH VIDEO</h4>
				<img src="{{ asset('images/video.jpg') }}" alt="video">
			</div>
		</div>
	</div>
</section>

<section class="services">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="services__title">Services</h3>
			</div>
		</div>
		<div class="row align-items-end justify-content-center">
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service1.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Bathroom Remodel</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service2.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Kitchen Remodel</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service3.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">basement remodel</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service4.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Home Additions</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service5.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Attic Remodel</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service6.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Commercial Remodeling</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service7.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Custom Home Building</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service8.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Architectural Design</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 col-md-6">
				<div class="service-item">
					<img src="{{ asset('images/service9.jpg') }}" alt="service" class="service-item__image">
					<div class="service-item__container">
						<h4 class="service-item__name">Home Remodeling</h4>
						<a href="{{ route('dev') }}" class="service-item__btn">more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="visual">
	<div class="container visual__container">
		<div class="row align-items-center">
			<div class="col-lg-5 offset-lg-1">
				<h3 class="visual__title">Not sure what style or color to choose for your renovation project?</h3>
			</div>
			<div class="col-lg-5 col-10 offset-2 offset-lg-0">
				<h4 class="visual__subtitle">We have a great solution!</h4>
				<p class="visual__text">Free visualizations, help with materials supply, color palettes, layouts, and full support by the architect of your project.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h4 class="visual-form__title">Submit a request for a free visualization of your remodeling or renovation project</h4>
				<p class="visual-form__text">Our designer will contact you with detailed questions for you to like your space as much as possible.</p>
				<div class="clearfix"></div>
				<form class="visual-form form_check row" autocomplete="off">
					<div class="rline col-md-4">
						<input type="text" name="name" class="visual-form__input rfield" placeholder="Name">
					</div>
					<div class="rline col-md-4">
						<input type="text" name="phone" class="visual-form__input rfield" placeholder="Cellphone">
					</div>
					<div class="rline col-md-4">
						<input type="text" name="email" class="visual-form__input" placeholder="Email">
					</div>
					<div class="rline col-12">
						<textarea name="request" rows="2" class="visual-form__area" placeholder="Write to us about which type of space you would like to renovate, how big is it and what needs to be changed or rebuilt."></textarea>
					</div>
					<div class="col">
						<button class="visual-form__btn btnsubmit">send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="reviews">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h3 class="reviews__title">You can read below some of our customer <span>reviews</span></h3>
			</div>
		</div>
		<div class="row justify-content-center reviews__container d-none d-md-flex">
			<div class="col-lg-5 col-md-6">
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">They completely remodeled our bathroom, ahead of schedule. They were extremely hard working, cleaned up everything everyday and did a wonderful job. Would absolutely recommend nord remodel to everyone. Thanks for all of the hard work!!</p>
					<p class="review__name">PATSY ORTIZ</p>
				</div>
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">Nord Remodel completely remodeled my bathroom and did an excellent job! I love it! The crew was professional, considerate, and reliable. I had a great experience and highly recommend them</p>
					<p class="review__name">YESENIA MORSE</p>
				</div>
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">Nord Construction were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
					<p class="review__name">PATSY ORTIZ</p>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">Amazing job from beginning to end! I highly recommend NORD REMODEL if you are thinking about remodeling your kitchen. They took care of every detail thru the entire process of making my dream kitchen!</p>
					<p class="review__name">HOWARD ORR</p>
				</div>
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">Nord Remodel were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
					<p class="review__name">Bald Hamer</p>
				</div>
				<div class="review">
					<span class="review__date">01.08.2021</span>
					<p class="review__text">Nord Construction were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
					<p class="review__name">PATSY ORTIZ</p>
				</div>
			</div>
		</div>
		<div class="reviews-slider d-md-none">
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">They completely remodeled our bathroom, ahead of schedule. They were extremely hard working, cleaned up everything everyday and did a wonderful job. Would absolutely recommend nord remodel to everyone. Thanks for all of the hard work!!</p>
				<p class="review__name">PATSY ORTIZ</p>
			</div>
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">Nord Remodel completely remodeled my bathroom and did an excellent job! I love it! The crew was professional, considerate, and reliable. I had a great experience and highly recommend them</p>
				<p class="review__name">YESENIA MORSE</p>
			</div>
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">Nord Construction were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
				<p class="review__name">PATSY ORTIZ</p>
			</div>
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">Amazing job from beginning to end! I highly recommend NORD REMODEL if you are thinking about remodeling your kitchen. They took care of every detail thru the entire process of making my dream kitchen!</p>
				<p class="review__name">HOWARD ORR</p>
			</div>
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">Nord Remodel were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
				<p class="review__name">Bald Hamer</p>
			</div>
			<div class="review">
				<span class="review__date">01.08.2021</span>
				<p class="review__text">Nord Construction were incredible to work with. The staff were perfectionist and did a quality work, that is remarkable. The ultimate goal of this company is to make sure that you're happy with the end result of your renovation. Highly recommended!</p>
				<p class="review__name">PATSY ORTIZ</p>
			</div>
		</div>
	</div>
</section>

<section class="partners">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="partners__title">Our Partners</h3>
			</div>
		</div>
		<div class="row partners__container">
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner1.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner2.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner3.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner4.png') }}" alt="partner">
				</div>
			</div>
		</div>
		<div class="row partners__container">
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner5.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner6.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner7.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner8.png') }}" alt="partner">
				</div>
			</div>
		</div>
		<div class="row partners__container">
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner9.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner10.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner11.png') }}" alt="partner">
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="partner">
					<img src="{{ asset('images/partner12.png') }}" alt="partner">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="partners__text">We work with trusted and well-known suppliers only</p>
			</div>
		</div>
	</div>
</section>

<section class="request">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<span class="request__note">Order a specialist visit for free</span>
			</div>
			<div class="col-md-6">
				<h3 class="request__title">SUBMIT<br>a request</h3>
			</div>
			<div class="col-md-6">
				<p class="request__text">If you have any questions, please submit a request, and our specialist will come and answer all your questions.</p>
			</div>
		</div>
		<form class="request-form form_check row">
			<div class="rline col-md-4">
				<input type="text" name="name" class="request-form__input rfield" placeholder="Name">
			</div>
			<div class="rline col-md-4">
				<input type="text" name="phone" class="request-form__input rfield" placeholder="Cellphone">
			</div>
			<div class="rline col-md-4">
				<input type="text" name="question" class="request-form__input" placeholder="Question">
			</div>
			<div class="col-12">
				<button class="request-form__btn btnsubmit">Submit a request</button>
			</div>
		</form>
	</div>
</section>

<footer class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="contacts__title">contact</h3>
			</div>
			<div class="col-md-3">
				<h4 class="contacts__subtitle">Address</h4>
				<p class="contacts__addr">8361 18th Ave NW,<br>Seattle,<br>WA 98117</p>
			</div>
			<div class="col-md-3">
				<h4 class="contacts__subtitle">Contacts</h4>
				<a href="tel:2065121152" class="contacts__phone">2065121152</a>
				<a href="mailto:info@nord.construction" class="contacts__email">info@nord.construction</a>
			</div>
			<div class="col-md-3">
				<h4 class="contacts__subtitle">Socials</h4>
				<a href="#" target="_blank" class="contacts__soc">facebook</a>
				<a href="#" target="_blank" class="contacts__soc">instagram</a>
				<a href="#" target="_blank" class="contacts__soc">youtube</a>
			</div>
		</div>
		<div class="row contacts__container align-items-center">
			<div class="col-6">
				<p class="contacts__cprt">© Copyright {{ date('Y') }}</p>
			</div>
			<div class="col-6">
				<a href="https://wamp.com.ua/" target="_blank" class="dev">
					<p class="dev__text">Marketing Agency</p>
					<img src="{{ asset('images/wamp.svg') }}" alt="wamp" class="dev__image">
				</a>
			</div>
		</div>
	</div>
</footer>

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>