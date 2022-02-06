<!DOCTYPE html>
<!-- eTreeks - Education & Courses Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Programmer"/>	
		<meta name="description" content="Online assignment submission system"/>
		<meta name="keywords" content="Online assignment submission system">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>{{ config('app.name')}}</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{ asset('landing/images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{ asset('landing/images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('landing/images/apple-touch-icon-152x152.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('landing/images/apple-touch-icon-120x120.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing/images/apple-touch-icon-76x76.png')}}">
		<link rel="apple-touch-icon" href="{{ asset('landing/images/apple-touch-icon.png')}}">
		<link rel="icon" href="{{ asset('landing/images/apple-touch-icon.png')}}" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('landing/css/bootstrap.min.css')}}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="../../../../../use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
		<link href="{{ asset('landing/css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('landing/css/menu.css')}}" rel="stylesheet">	
		<link id="effect" href="{{ asset('landing/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{ asset('landing/css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{ asset('landing/css/flexslider.css')}}" rel="stylesheet">
		<link href="{{ asset('landing/css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{ asset('landing/css/owl.theme.default.min.css')}}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('landing/css/animate.css')}}" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<link href="{{ asset('landing/css/style.css')}}" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('landing/css/responsive.css')}}" rel="stylesheet"> 
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loading">
				<div id="loading-center">
					<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
				</div>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header white-menu navbar-dark">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
				    	<span class="smllogo smllogo-black"><img src="{{ asset('landing/images/cropped-funai_Logo-1.png')}}" width="172" height="40" alt="mobile-logo"/></span>
				    	<span class="smllogo smllogo-white"><img src="{{ asset('landing/images/logo-white.png')}}" width="172" height="40" alt="mobile-logo"/></span>
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- LOGO IMAGE -->
	    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
	    					<div class="desktoplogo"><a href="#hero-6" class="logo-black"><img src="{{ asset('landing/images/cropped-funai_Logo-1.png')}}" width="172" height="40" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="#hero-6" class="logo-white"><img src="{{ asset('landing/images/logo-white.png')}}" width="172" height="40" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list">

							    	<!-- SIMPLE NAVIGATION LINK -->
							    	<!-- <li class="nl-simple" aria-haspopup="true"><a href="blog-listing.html">Blog</a></li> -->


							    	<!-- SIMPLE NAVIGATION LINK -->
							    	<!-- <li class="nl-simple" aria-haspopup="true"><a href="contacts.html">Contacts</a></li> -->


							    	<!-- DROPDOWN MENU -->
						          	<li aria-haspopup="true">
						          		<a href="#" class="lang-select">
							          		Get Started <span class="wsarrow"></span>
							          	</a>
	            						<ul class="sub-menu last-sub-menu">
						           			<li aria-haspopup="true"><a href="{{ route('login')}}">SignIn</a></li>
						           			<li aria-haspopup="true"><a href="{{ route('register')}}">SignUp</a></li>
						           			
						           		</ul>
								    </li>	<!-- END DROPDOWN MENU -->

								    <!-- DROPDOWN MENU -->
						          	<li aria-haspopup="true">
						          		<a href="#" class="lang-select">
							          		<img src="{{ asset('landing/images/icons/flags/uk.png')}}" alt="flag-icon" /> En <span class="wsarrow"></span>
							          	</a>
	            						<ul class="sub-menu last-sub-menu">
						           			<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/germany.png')}}" alt="flag-icon" /> Deutch</a></li>
						           			<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/spain.png')}}" alt="flag-icon" /> Español</a></li>
						           			<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/france.png')}}" alt="flag-icon" /> Français</a></li>
						              		<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/italy.png')}}" alt="flag-icon" /> Italiano</a></li>
						              		<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/russia.png')}}" alt="flag-icon" /> Русский</a></li>
						              		<li aria-haspopup="true"><a href="#"><img src="{{ asset('landing/images/icons/flags/china.png')}}" alt="flag-icon" /> 简体中文</a></li>
						           		</ul>
								    </li>	<!-- END DROPDOWN MENU -->


								    <!-- HEADER BUTTON 
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="#" class="btn btn-rose tra-black-hover last-link">Get Started</a>
								    </li> -->


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->

	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->




			<!-- HERO-6
			============================================= -->	
			<section id="hero-6" class="bg-scroll hero-section division">
				<div class="container">
					<div class="row">


						<!-- HERO TEXT -->
						<div class="col-md-8 col-lg-6">
							<div class="hero-txt white-color">

								<!-- Title -->
								<h2 class="h2-xs">Learn new creative skills with eTreeks</h2>

								<!-- Text -->
								<p class="p-lg">Feugiat primis ligula risus auctor egestas augue mauri viverra tortor in iaculis 
								   placerat and mauris viverra
								</p>

								<!--Hero Search Form -->
								<form class="hero-form" action="https://jthemes.net/themes/html/etreeks/files/categories-list.html">	
									<div class="input-group">
										<input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="Search">								
										<span class="input-group-btn">
											<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
										</span>
									</div>			
								</form>

							</div>
						</div>


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END HERO-6 -->




			<!-- HERO BOXES-1
			============================================= -->
			<section id="hboxes-1" class="hero-boxes-section division">
				<div class="container">
					<div class="hero-boxes-holder">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-md-12">
								<div class="section-title">

									<!-- Text -->	
									<h4 class="h4-xl">Most Popular Categories</h4>	
									<p>Explore from 2,769 online courses in 20 categories</p>

									<!-- Button -->	
									<div class="title-btn">
										<a href="categories-list.html" class="btn btn-sm btn-rose tra-black-hover">View All Categories</a>
									</div> 
									
								</div>
							</div>
						</div>


						<!-- HERO BOXES HOLDER -->
						<div class="row">


							<!-- CATEGORIE BOX #1 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/browser-3.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">Development</h5>
										<p>36 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #1 -->


							<!-- CATEGORIE BOX #2 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/piggy-bank.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">Finance</h5>
										<p>28 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #2 -->


							<!-- CATEGORIE BOX #3 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/mouse-1.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">IT & Software</h5>
										<p>54 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #3 -->


							<!-- CATEGORIE BOX #4 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/cash.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">Marketing</h5>
										<p>68 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #4 -->


							<!-- CATEGORIE BOX #5 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/lab.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">Sciences</h5>
										<p>78 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #5 -->


							<!-- CATEGORIE BOX #6 -->
							<div class="col-md-4 col-lg-2">
								<a href="category-details.html">
									<div class="c2-box-txt text-center">

										<!-- Icon --> 
										<img class="img-70" src="{{ asset('landing/images/icons/encyclopedia.png')}}" alt="category-icon" />

										<!-- Text --> 
										<h5 class="h5-sm">Languages</h5>
										<p>103 Courses</p>

									</div>
								</a>
							</div>	<!-- END CATEGORIE BOX #6 -->


						</div>    <!-- END HERO BOXES HOLDER -->	


					</div>    <!-- End hero-boxes-holder -->   
				</div>	   <!-- End container --> 	
			</section>	<!-- End HERO BOXES-1 --> 




			<!-- ABOUT-2
			============================================= -->
			<section id="about-2" class="wide-60 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="img-block pc-25 mb-40">
								<img class="img-fluid" src="{{ asset('landing/images/image-01.png')}}" alt="about-image">
					 		</div>
						</div>


						<!-- ABOUT TEXT -->
					 	<div class="col-md-7 col-lg-6">
					 		<div class="txt-block pc-25 mb-40">

					 			<!-- Title -->	
								<h3 class="h3-sm">Transform your life through online education</h3>

								<!-- Text -->
								<p>An enim nullam tempor sapien gravida donec porta and blandit ipsum enim justo integer velna vitae 
									auctor integer congue magna and purus pretium risus ligula rutrum luctus ultrice 
								</p> 

								<!-- List -->	
								<ul class="txt-list mb-15">

									<li>Nullam rutrum eget nunc varius etiam mollis risus undo</li>
													
									<li>Integer congue magna at pretium purus pretium ligula at rutrum risus luctus dolor auctor 
										ipsum blandit purus		
									</li>

									<li>Risus at congue etiam aliquam sapien egestas posuere</li>

								</ul>

								<!-- Button -->
								<a href="categories-list.html" class="btn btn-md btn-tra-grey rose-hover">Start Learning Now</a>

					 		</div>
					 	</div>	  <!-- END ABOUT TEXT -->


					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- End ABOUT-2 --> 




			<!-- SERVICES-2
			============================================= -->
			<section id="services-2" class="bg-lightgrey wide-60 services-section division">
				<div class="container">
					<div class="row">


						<!-- SERVICE BOX #1 -->		
						<div class="col-md-6 col-lg-3">
							<div class="sbox-2">

								<!-- Icon --> 
								<img class="img-75" src="{{ asset('landing/images/icons/trophy.png')}}" alt="service-icon" />

								<!-- Text -->
								<div class="sbox-2-txt">

									<!-- Title -->
									<h5 class="h5-md">Trusted Content</h5>

									<!-- Text -->	
									<p class="grey-color">Augue luctus neque purus ipsum neque dolor primis libero tempus a blandit</p>

								</div>

							</div>
						</div>	<!-- END SERVICE BOX #1 -->	


						<!-- SERVICE BOX #2 -->		
						<div class="col-md-6 col-lg-3">
							<div class="sbox-2">

								<!-- Icon --> 
								<img class="img-75" src="{{ asset('landing/images/icons/classroom.png')}}" alt="service-icon" />

								<!-- Text -->
								<div class="sbox-2-txt">

									<!-- Title -->
									<h5 class="h5-md">Certified Teachers</h5>
									
									<!-- Text -->	
									<p class="grey-color">Augue luctus neque purus ipsum neque dolor primis libero tempus a blandit</p>

								</div>

							</div>
						</div>	<!-- END SERVICE BOX #2 -->	


						<!-- SERVICE BOX #3 -->		
						<div class="col-md-6 col-lg-3">
							<div class="sbox-2">

								<!-- Icon --> 
								<img class="img-75" src="{{ asset('landing/images/icons/mouse-1.png')}}" alt="service-icon" />

								<!-- Text -->
								<div class="sbox-2-txt">

									<!-- Title -->
									<h5 class="h5-md">Lifetime Access</h5>
									
									<!-- Text -->	
									<p class="grey-color">Augue luctus neque purus ipsum neque dolor primis libero tempus a blandit</p>

								</div>

							</div>
						</div>	<!-- END SERVICE BOX #3 -->	


						<!-- SERVICE BOX #4 -->		
						<div class="col-md-6 col-lg-3">
							<div class="sbox-2">

								<!-- Icon --> 
								<img class="img-75" src="{{ asset('landing/images/icons/certificate.png')}}" alt="service-icon" />

								<!-- Text -->
								<div class="sbox-2-txt">

									<!-- Title -->
									<h5 class="h5-md">Sertification</h5>
									
									<!-- Text -->	
									<p class="grey-color">Augue luctus neque purus ipsum neque dolor primis libero tempus a blandit</p>

								</div>

							</div>
						</div>	<!-- END SERVICE BOX #4 -->	


					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	<!-- End SERVICES-2 --> 




			<!-- COURSES-3
			============================================= -->
			<section id="courses-3" class="wide-60 courses-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-12">
							<div class="section-title mb-60">

								<!-- Title 	-->	
								<h4 class="h4-xl">Highest Rated Online Courses</h4>	

								<!-- Text -->	
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
								   tempus, blandit posuere and ligula varius magna a porta
								</p>

								<!-- Button -->	
								<div class="title-btn">
									<a href="courses-list.html" class="btn btn-tra-grey rose-hover">Browse All Courses</a>
								</div> 

							</div>	
						</div>
					</div>


					<!-- COURSES HOLDER -->
					<div class="row courses-grid">


						<!-- COURSE #1 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
									
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-1-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Languages</span>
											<span>English</span>
										</p>	

										<!-- Course Title -->
										<h5 class="h5-xs">Beginner Level English - Foundations</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<span>4.5 (26 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$149.99</span> $138.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #1 -->	


						<!-- COURSE #2 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">

									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-2-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Languages</span>
											<span>English</span>
										</p>	

										<!-- Title -->
										<h5 class="h5-xs">Diploma in Basic English Grammar - Revised 2019</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (118 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$174.99</span> $59.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #2 -->							


						<!-- COURSE #3 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">

									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-3-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Network Security</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">The Complete Cyber Security Course : End Point Protection!</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<span>4.5 (72 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$119.99</span> $34.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #3 -->							


						<!-- COURSE #4 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
								
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-4-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>SEO</span>
											<span>Marketing</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">Google AdWords for Beginners 2020</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (281 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price">Free Course</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #4 -->								


						<!-- COURSE #5 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
								
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-5-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Design</span>
											<span>WordPress</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">Wordpress for Beginners - Master Wordpress Quickly</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>4.15 (58 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$194.99</span> $62.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #5 -->						


						<!-- COURSE #6 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
								
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-6-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Sowtware</span>
											<span>Productivity</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">Excel Essentials: The Complete Excel Series - Level 1 & 2</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (31 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$149.99</span> $45.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #6 -->	


						<!-- COURSE #7 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
								
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-5-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Web Design</span>
											<span>HTML 5</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">Landing Page Design & Conversion Rate Optimization 2020</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<span>4.8 (74 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$109.99</span> $23.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #7 -->						


						<!-- COURSE #8 -->
						<div class="col-md-6 col-lg-4 col-xl-3">
							<div class="cbox-1">
								<a href="course-details.html">
								
									<!-- Image -->
									<img class="img-fluid" src="{{ asset('landing/images/courses/course-8-img.jpg')}}" alt="course-preview" />

									<!-- Text -->
									<div class="cbox-1-txt">

										<!-- Course Tags -->
										<p class="course-tags">
											<span>Internet</span>
											<span>Marketing</span>
										</p>

										<!-- Title -->
										<h5 class="h5-xs">Instagram Marketing 2020: A Step-By-Step to 10,000 Followers</h5>

										<!-- Course Rating -->
										<div class="course-rating clearfix">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5 (374 Ratings)</span>
										</div>

										<!-- Course Price -->
										<span class="course-price"><span class="old-price">$169.99</span> $33.99</span>

									</div>

								</a>
							</div>
						</div>	<!-- END COURSE #8 -->	


					</div>	  <!-- END COURSES HOLDER -->
				</div>     <!-- End container -->
			</section>	<!-- END COURSES-3 -->




			<!-- BANNER-3
			============================================= -->
			<section id="banner-3" class="bg-lightdark bg-map banner-section division">
				<div class="container">
					<div class="banner-3-holder bg-whitesmoke">
						<div class="row d-flex align-items-center">


							<!-- BANNER IMAGE -->
							<div class="col-lg-8">
								<div class="banner-3-img">
									<img class="img-fluid" src="{{ asset('landing/images/banner-3-img.jpg')}}" alt="banner-image" />
								</div>
							</div>	<!-- END BANNER IMAGE -->


							<!-- BANNER TEXT -->
							<div class="col-lg-4">
								<div class="banner-3-txt">

									<!-- Title -->	
									<h4 class="h4-xs">Learn something new every day with <span>eTreeks</span></h4>

									<!-- Button -->	
									<a href="courses-list.html" class="btn btn-rose tra-black-hover">Find Out More</a>

								</div>
							</div>	<!-- END BANNER TEXT -->


						</div>   <!-- End row -->
					</div>    <!-- End banner-3-holder -->
				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-3 -->




			<!-- ABOUT-4
			============================================= -->
			<section id="about-4" class="wide-70 about-section division">
				<div class="container">
					

					<!-- ABOUT TEXT -->
					<div class="row">	
					 	<div class="col-xl-10 offset-xl-1">
					 		<div class="a4-txt">

					 			<!-- Title -->	
								<h5 class="h5-xl text-center">Our goal is to make online education work for everyone</h5>

								<!-- Text -->
								<p>Sagittis congue augue egestas volutpat egestas magna suscipit egestas magna ipsum vitae purus 
								   efficitur ipsum primis and cubilia laoreet augue egestas luctus donec diam. Curabitur ac dapibus 
								   libero mauris donec ociis and neque. Phasellus blandit tristique justo ut aliquam. Aliquam vitae 
								   molestie nunc sapien justo, aliquet non molestie augue tempor sapien
								</p>  

							</div>
						</div>
					</div> 	<!-- END ABOUT TEXT -->


					<!-- ABOUT IMAGE -->
					<div class="row">	
					 	<div class="col-md-12">
							<div class="img-block">
								<img class="img-fluid" src="{{ asset('landing/images/image-03.jpg')}}" alt="about-image">
							</div>
						</div>
					</div>


					<!-- ABOUT BOXES -->
					<div class="a4-boxes">
						<div class="row d-flex align-items-center">

							<!-- BOX #1 -->		
							<div class="col-md-4">
								<div class="abox-4 icon-sm">

									<!-- Icon --> 
									<span class="flaticon-004-computer"></span>

									<!-- Text -->
									<div class="abox-4-txt">
										<h5 class="h5-lg">Trusted Content</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>

								</div>
							</div>	<!-- END BOX #1 -->	


							<!-- BOX #2 -->		
							<div class="col-md-4">
								<div class="abox-4 icon-sm">

									<!-- Icon --> 
									<span class="flaticon-028-learning-1"></span>

									<!-- Text -->
									<div class="abox-4-txt">
										<h5 class="h5-lg">Certified Teachers</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>

								</div>
							</div>	<!-- END BOX #2 -->	


							<!-- BOX #3 -->		
							<div class="col-md-4">
								<div class="abox-4 icon-sm">

									<!-- Icon --> 
									<span class="flaticon-032-tablet"></span>

									<!-- Text -->
									<div class="abox-4-txt">
										<h5 class="h5-lg">Lifetime Access</h5>
										<p>Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
									</div>

								</div>
							</div>	<!-- END BOX #3 -->	


						</div>  <!-- End row --> 
					 </div>	  <!-- END ABOUT BOXES -->


				</div>	   <!-- End container --> 	
			</section>	<!-- End ABOUT-4 --> 




			<!-- BANNER-5
			============================================= -->
			<section id="banner-5" class="bg-whitesmoke wide-60 banner-section division">
				<div class="container">
					<div class="row">


						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">

								<!-- Icon --> 
								<img src="{{ asset('landing/images/image-04.png')}}" alt="banner-icon" />

								<!-- Text --> 
								<div class="b5-txt">

									<!-- Title -->	
									<h4 class="h4-xs">Become a Teacher</h4>

									<!-- Text -->
									<p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an 
									   eugiat viverra
									</p>

									<!-- Button -->	
									<a href="become-a-teacher.html" class="btn btn-rose tra-black-hover">Find Out More</a>

								</div>

							</div>
						</div>	<!-- END BANNER TEXT -->


						<!-- BANNER TEXT -->
						<div class="col-md-6">
							<div class="banner-5-txt">

								<!-- Icon --> 
								<img src="{{ asset('landing/images/image-05.png')}}" alt="banner-icon" />

								<!-- Text --> 
								<div class="b5-txt">

									<!-- Title -->	
									<h4 class="h4-xs">eTreeks for Business</h4>

									<!-- Text -->
									<p>Feugiat primis ligula a risus auctor egestas an augue mauri and viverra tortor iaculis an 
									   eugiat viverra
									</p>

									<!-- Button -->	
									<a href="courses-list.html" class="btn btn-rose tra-black-hover">Find Out More</a>

								</div>

							</div>
						</div>	<!-- END BANNER TEXT -->


					</div>   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-5 -->




			<!-- NEWS-2
			============================================= -->
			<section id="news-2" class="wide-60 news-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-12">
							<div class="section-title mb-70">

								<!-- Title 	-->	
								<h4 class="h4-xl">Our Analysis & Education News</h4>	

								<!-- Text -->	
								<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
								   tempus, blandit posuere and ligula varius magna a porta
								</p>

								<!-- Button -->
								<div class="title-btn">
									<a href="blog-listing.html" class="btn btn-tra-grey rose-hover">Read More Stories</a>
								</div> 	
								
							</div>
						</div>
					</div>
				

					<!-- NEWS GRID -->
					<div class="row d-flex align-items-center">


						<!-- ARTICLE #1 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-1" class="article-2 b-right">	

								<!-- Post Data -->
								<p class="p-sm">March 11, 2020</p>														
								
								<!-- Title -->
								<h5 class="h5-sm"><a href="single-post.html">Integer congue magna at pretium purus pretium</a></h5>	

								<!-- Text -->
								<p>An enim nullam tempor sapien gravida donec enim blandit ipsum porta justo integer odio velna 
								   vitae auctor integer
								</p> 

								<!-- Post Author -->
								<span>By Joel Peterson</span>																																														
							</div>									
						</div>	<!-- END ARTICLE #1 -->


						<!-- ARTICLE #2 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-2" class="article-2 b-right">	

								<!-- Post Data -->
								<p class="p-sm">March 04, 2020</p>														
								
								<!-- Title -->
								<h5 class="h5-sm"><a href="single-post.html">Congue magna eTreeks purus pretium magnis</a></h5>	

								<!-- Text -->
								<p>Donec enim blandit and ipsum porta justo integer odio a velna vitae auctor an integer congue 
								   magna at pretium nulla
								</p> 

								<!-- Post Author -->
								<span>By Jennifer K.</span>																																														
							</div>									
						</div>	<!-- END ARTICLE #2 -->


						<!-- ARTICLE #3 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-3" class="article-2 b-right">	

								<!-- Post Data -->
								<p class="p-sm">February 24, 2020</p>														
								
								<!-- Title -->
								<h5 class="h5-sm"><a href="single-post.html">8 neque dolor primis a libero tempus blandit</a></h5>	

								<!-- Text -->
								<p>Porta justo integer odio velna vitae an auctor integer congue magna at pretium purus ligula 
								   rutrum luctus risus ultrice 
								</p> 

								<!-- Post Author -->
								<span>By Michael Deal</span>																																														
							</div>									
						</div>	<!-- END ARTICLE #3 -->


						<!-- ARTICLE #4 -->
						<div class="col-md-6 col-lg-3">
							<div id="a2-4" class="article-2">	

								<!-- Post Data -->
								<p class="p-sm">February 19, 2020</p>												
								
								<!-- Title -->
								<h5 class="h5-sm"><a href="single-post.html">Ligula varius magna and porta a laoreet pretium</a></h5>	

								<!-- Text -->
								<p>Vitae auctor integer a congue magna undo pretium at purus pretium ligula a rutrum luctus risus 
								   and ultrice blandit
								</p> 

								<!-- Post Author -->
								<span>By Aaron Wall</span>																																														
							</div>									
						</div>	<!-- END ARTICLE #4 -->
						

					</div>	<!-- END NEWS GRID -->


				</div>	   <!-- End container --> 
			</section>	<!-- END NEWS-2 --> 

			


			<!-- NEWSLETTER-1
			============================================= -->
			<section id="newsletter-1" class="newsletter-section division">
				<div class="container">
					<div class="bg-fixed newsletter-holder">
						<div class="row">


							<!-- SECTION TITLE -->	
							<div class="col-md-6 col-lg-5">
								<div class="newsletter-txt white-color">	
									<h3 class="h3-sm">Stay in Touch</h3>	
									<p>Get personalized course recommendations, track subjects and courses with reminders and more</p>	
								</div>								
							</div>


							<!-- NEWSLETTER FORM -->
							<div class="col-md-6 col-lg-7">
								<form class="newsletter-form white-color">
											
									<div class="input-group">
										<input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">								
										<span class="input-group-btn">
											<button type="submit" class="btn btn-md btn-rose tra-white-hover">Subscribe Now</button>
										</span>										
									</div>

									<!-- Newsletter Form Notification -->	
									<label for="s-email" class="form-notification"></label>
												
								</form>							
							</div>	  <!-- END NEWSLETTER FORM -->


						</div>	  <!-- End row -->
					</div>    <!-- End newsletter-holder -->
				</div>	   <!-- End container -->	
			</section>	<!-- END NEWSLETTER-1 -->




			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-12 col-xl-3">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
								<img src="{{ asset('landing/images/cropped-funai_Logo-1.png')}}" width="172" height="40" alt="footer-logo">
							
							</div>	
						</div>	


						<!-- FOOTER PRODUCTS LINKS -->
						<div class="col-md-4 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="about.html">About eTreeks</a></li>
									<li><a href="reviews.html">Our Testimonials</a></li>	
									<li><a href="blog-listing.html">From the Blog</a></li>								
								</ul>

							</div>
						</div>


						<!-- FOOTER COMPANY LINKS -->
						<div class="col-md-4 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Footer Links -->
								<ul class="clearfix">
									<li><a href="categories-list.html">Courses Catalog</a></li>
									<li><a href="categories-list.html">Popular Categories</a></li>
									<li><a href="pricing.html">Premium Learning</a></li>	
								</ul>

							</div>
						</div>


						<!-- FOOTER COMPANY LINKS -->
						<div class="col-md-4 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Footer Links -->
								<ul class="clearfix">
									<li><a href="#">Terms & Privacy</a></li>
									<li><a href="#">Site Map</a></li>			
								</ul>

							</div>
						</div>


					</div>	  <!-- END FOOTER CONTENT -->

		
					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row">


							<!-- FOOTER COPYRIGHT -->
							<div class="col-lg-8">
								<ul class="bottom-footer-list">
									<li><p>&copy; Copyright 2021</p></li>
									<li><p><a href="tel:+2347062682820">+2347062682820</a></p></li>
									<li><p class="last-li"><a href="mailto:charlykso121@gmail.com">hello@domain.com</a></p></li>
								</ul>
							</div>


							<!-- FOOTER SOCIALS LINKS -->
							<div class="col-lg-4 text-right">
								<ul class="foo-socials text-center clearfix">

									<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
									<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>			
																																			
									<!--
									<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
									<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>									
									<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
									<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>								
									<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>										
									<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
									<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
									<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
								    -->	

								</ul>
							</div>


						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-1 -->

			
	

		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{ asset('landing/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{ asset('landing/js/bootstrap.min.js')}}"></script>	
		<script src="{{ asset('landing/js/modernizr.custom.js')}}"></script>
		<script src="{{ asset('landing/js/jquery.easing.js')}}"></script>
		<script src="{{ asset('landing/js/jquery.appear.js')}}"></script>
		<script src="{{ asset('landing/js/menu.js')}}"></script>
		<script src="{{ asset('landing/js/materialize.js')}}"></script>	
		<script src="{{ asset('landing/js/jquery.scrollto.js')}}"></script>
		<script src="{{ asset('landing/js/jquery.countdown.min.js')}}"></script>
		<script src="{{ asset('landing/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{ asset('landing/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{ asset('landing/js/jquery.flexslider.js')}}"></script>
		<script src="{{ asset('landing/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('landing/js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{ asset('landing/js/register-form.js')}}"></script>	
		<script src="{{ asset('landing/js/comment-form.js')}}"></script>	
		<script src="{{ asset('landing/js/jquery.validate.min.js')}}"></script>	
		<script src="{{ asset('landing/js/jquery.ajaxchimp.min.js')}}"></script>	

		<!-- Custom Script -->		
		<script src="{{ asset('landing/js/custom.js')}}"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->

		

	</body>

</html>	