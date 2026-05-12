<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title>About | Bold Fellows</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.gif" />
	@include('layouts.assets')
</head>

<body>
	<div id="container">
		<!-- main container starts-->
		<div id="wrapp">
			<!-- main wrapp starts-->
			<header id="header" class="header-3">
				@include('layouts.header_links')
				@include('layouts.navbar', ['active' => 'about'])
			</header>
			<!-- header ends-->

			<div id="content">
				<div id="breadcrumb"><!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>About Us</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs"><!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index">Home</a></li>
									<li>About</li>
								</ul>
							</nav><!--breadcrumb nav ends -->
						</div>
					</div>
				</div><!--breadcrumbs ends -->
				<div class="container">
					<div class="one">
						<section class="flex-container">
							<div class="flexslider single-portfolio-item-slider bottom-margin">
								<ul class="slides round">
									<li><img src="{{ asset($content['about_slider_1_img']->value ?? 'images/slider/cyber-security.jpg') }}" alt=" " /></li>
									<li><img src="{{ asset($content['about_slider_2_img']->value ?? 'images/slider/about-csa.jpg') }}" alt=" " /></li>
									<li><img src="{{ asset($content['about_slider_3_img']->value ?? 'images/slider/about-csa-1.jpg') }}" alt=" " /></li>
								</ul>
							</div>

						</section>
					</div>

					<div class="one-third">
						<h4>Company Brief</h4>


						<p align="justify">
							{!! nl2br(e($content['company_brief']->value ?? 'Our dedicated consultancy team has extensive experience, and is fully up to date with the latest technology and scientific developments.')) !!}
						</p>


						<ul class="simple-list">
							<li><i
									class="icon-check-sign"></i>{{ $content['our_mission']->value ?? 'Our Mission: To build a community of information security for Africa.' }}
							</li>

							<li><i
									class="icon-check-sign"></i>{{ $content['our_vision']->value ?? 'Our Vision: To set new standard in Information Communication Technology and Security.' }}
							</li>
							<li><i
									class="icon-check-sign"></i>{{ $content['our_values']->value ?? 'Our Values: Integrity, Customer Centric, Innovation, Teamwork, Collaboration, Efficiency and Effectiveness.' }}
							</li>
							<p>
							<h4>Our Skills level</h4>
							</p>

							<ul class="bar_graph">
								<!-- skill graph starts -->

								<li>
									<p>
										<i class="icon-pencil"></i>{{ $content['skill_1_name']->value ?? 'Penetration Testing' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_1_level']->value ?? '80' }}"></span>
									</div>
								</li>
								<li>
									<p>
										<i class="icon-cog"></i>{{ $content['skill_2_name']->value ?? 'Security Solutions' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_2_level']->value ?? '100' }}"></span>
									</div>
								</li>
								<li>
									<p>
										<i class="icon-magic"></i>{{ $content['skill_3_name']->value ?? 'Security Training' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_3_level']->value ?? '90' }}"></span>
									</div>
								</li>

							</ul>
						</ul> <!--skill graph ends -->
					</div>
					<div class="two-third">
						<h4>About the Company</h4>



						<p align="justify">
							{{ $content['about_company_desc_1']->value ?? 'Bold Fellows is a full-service Information Security Consulting firm offering a comprehensive range of Services and Products to help organizations protect their valuable assets.' }}
						</p>
						<p align="justify">
							{{ $content['about_company_desc_2']->value ?? 'We provide unrivaled technical services, trusted advises to our clients, a role that allows us to fully understand and help our clients to achieve their organization and security objectives. The nature and scope of the Information Security field has evolved over the past several years, no longer are we just concerned with protecting the technical edifice. Our emphasis has become more holistic and we tend to consider all aspects of information protection as central to the field of security.' }}
						</p>
						<p align="justify">
							{{ $content['about_company_desc_3']->value ?? 'We have a team and partners in information Security industry who are veterans. Bold Fellows is well on the way to establishing an enduring reputation as the company to partner with for value-optimized, cost efficient services and thought leadership opportunities.' }}
						</p>

						<p align="justify">
							<strong>Our Philosophy:</strong>
							{{ $content['our_philosophy']->value ?? 'We aim to create enduring partnerships, which enhance your capacity , capability and enables effective, efficient and smooth operations in your Organization. While reliability and results remain core principles, we pride ourselves on our integrity, transparency and cultural sensitivity, which we regard as critical to maintaining our own reputation and safeguarding yours.' }}
						</p>
						<p align="justify">
							<strong>Our Unique, Proven Approach:</strong>
							{{ $content['our_approach']->value ?? 'Our success stems from our hands-on, flexibility, transfer of skills and knowledge and teamwork approach. This means we give our clients the opportunity to learn in real-life situations - an approach that offers far-reaching benefits.' }}
						</p>
					</div>

				</div>
				<div class="intro-features"><!-- intro features panel starts -->
					<div class="container">
						<h4>Bold Fellows</h4>
						<div class="slidewrap">
							<!--project carousel starts-->
							<ul class="slider" id="sliderName">
								<li class="slide"><!-- carousel item starts -->
									<div class="one-fourth">
										<div class="item-wrapp">
											<div class="portfolio-item">
												<a href="about" class="item-permalink"><i class="icon-link"></i></a>

												<img src="{{ asset($content['about_portfolio_1_img']->value ?? 'images/portfolio/why-cyber-sec-africa.jpg') }}" alt="" />
											</div>
											<div class="portfolio-item-title">
												<a href="about" title="Why Bold Fellows">Why Cyber Security
													Africa</a>
												<p>
													Security / Services
												</p>
											</div>
										</div>
									</div>

									<div class="one-fourth">
										<div class="item-wrapp">
											<div class="portfolio-item">
												<a href="services" class="item-permalink"><i class="icon-link"></i></a>

												<img src="{{ asset($content['about_portfolio_2_img']->value ?? 'images/portfolio/csa-services.jpg') }}" alt="" />
											</div>
											<div class="portfolio-item-title">
												<a href="services" title="Our Services">Our Services</a>
												<p>
													Security / Services
												</p>
											</div>
										</div>
									</div>

									<div class="one-fourth">
										<div class="item-wrapp">
											<div class="portfolio-item">
												<a href="products" class="item-permalink"><i class="icon-link"></i></a>

												<img src="{{ asset($content['about_portfolio_3_img']->value ?? 'images/portfolio/csa-products.jpg') }}" alt="" />
											</div>
											<div class="portfolio-item-title">
												<a href="products" title="Our Services">Our Products</a>
												<p>
													Security / Services
												</p>
											</div>
										</div>
									</div>
								</li>
								<li class="slide"><!-- carousel item starts -->
								</li>
							</ul><!-- carousel items UL ends -->


							</ul>
						</div>
					</div>
				</div><!-- intro features panel ends -->
			</div>

			@include('layouts.footer')
</body>

</html>