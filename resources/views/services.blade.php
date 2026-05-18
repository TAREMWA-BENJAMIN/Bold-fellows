<!DOCTYPE html>



<head>
	<meta charset="utf-8">
	<title>Services | Bold Fellows</title>
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
				@include('layouts.navbar', ['active' => 'services'])
			</header>
			<!-- header ends-->
			<div id="content">
				<div id="breadcrumb">
					<!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>Our Services</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index" title="Home">Home</a></li>
									<li><a href="services" title="Services">Services</a></li>
								</ul>
							</nav>
							<!--breadcrumb nav ends -->
						</div>
					</div>
				</div>
				<!--breadcrumbs ends -->
				<div class="container">
					<div class="one">
						<div class="one-third">
							<div class="service-item">
								<!--service item starts -->
								<h1>
									<i class="icon-cloud"></i>
								</h1>
								<h4>{{ $content['service_1_title']->value ?? 'Penetration Testing' }}</h4>
								<p>
									{{ $content['service_1_desc']->value ?? 'A penetration test is a simulation of a hacker attack on a network, system, application or website used to discover existing weaknesses before hackers find and exploit them.We determine feasibility of an attack and the amount of business impact of a successful network compromise.' }}
								</p>
								<p>
									<br /><a href="penetration-testing" class="button big round color">Read More</a>
								</p>
							</div>
							<!--service item ends -->
						</div>


						<div class="horizontal-line">
						</div>
					</div>

					<div class="container">
						<div class="one">
							<div class="one-third">
								<div class="service-item">
									<!--service item starts -->
									<h1>
										<i class="icon-dollar"></i>
									</h1>
									<h4>Fraud Investigation</h4>
									<p>
										Bold Fellows team of Forensic and Certified Fraud Examiners conduct
										investigations on Computer fraud, employee embezzlement, kickback schemes and
										financial statement fraud. We use variety of tools and resources to uncover and
										correct illegal activities that can undermine the profitability of...
									</p>
									<p>
										<br /><a href="fraud-investigation-services" class="button big round color">Read
											More</a>
									</p>
								</div>
								<!--service item ends -->
							</div>
							<div class="one-third">
								<div class="service-item">
									<!--service item starts -->
									<h1>
										<i class="icon-mobile-phone "></i>
									</h1>
									<h4>Mobile Phone Forensics </h4>
									<p>
										Bold Fellows Mobile Forensic team are able to extract key evidence from
										cellular phones, Smartphones, PDAâ€™s, GPS units and other mobile devices. Using
										specialized software and equipment designed specifically for advanced cell phone
										forensics, We are able to extract active and deleted data from many...
									</p>
									<p>
										<br /><a href="mobile-phone-forensics" class="button big round color">Read
											More</a>
									</p>
								</div>
								<!--service item ends -->
							</div>
							<div class="one-third">
								<div class="service-item">
									<!--service item starts -->
									<h1>
										<i class="icon-lock"></i>
									</h1>
									<h4>IT Governance</h4>
									<p>
										IT governance is a critical component of corporate governance, it provides a
										useful tool for benchmarking the balance and effectiveness of IT governance
										practices within an organization. It also provides structured guidance on how to
										approach practical assistance and guidance for practitioners in an Organization.
									</p>
									<p>
										<br /><a href="it-governance" class="button big round color">Read More</a>
									</p>
								</div>
								<!--service item ends -->
							</div>
							<div class="horizontal-line">
							</div>
						</div>
					</div>
					<div class="one">
						<div class=" one-third">
							<h4>Our Services</h4>
							<p>
								We provide a wide range of services through a unique approach built on specialization,
								efficiency and sustainability. We have delivered consulting services for over a decade
								and our professional record speaks for itself. Other services we offer include the
								following:
							</p>
							<ul class="simple-list">
								<li><i class="icon-check-sign"></i>Network Security Assesment</li>

								<li><i class="icon-check-sign"></i>IT Governance</li>


							</ul>

						</div>
						<div class="one-third">
							<p>
								<img src="{{ asset($content['services_team_img_1']->value ?? 'images/team/network-security-assessment.jpg') }}"
									alt=" " />
							</p>

						</div>
						<div class="one-third">
							<p>
								<img src="{{ asset($content['services_team_img_2']->value ?? 'images/team/web-app-security.jpg') }}"
									alt=" " />
							</p>

						</div>
					</div>
				</div>
				<div class="intro-features"><!-- intro features panel starts -->
					<div class="container">
						<h4>Popular Services</h4>
						<div class="slidewrap">
							<!--project carousel starts-->
							<ul class="slider" id="sliderName">
								<li class="slide"><!-- carousel item starts -->
									<div class="one-fourth">
										<div class="item-wrapp">
											<div class="portfolio-item">
												<a href="network-security-assessment" class="item-permalink"><i
														class="icon-link"></i></a>

												<img src="{{ asset($content['services_portfolio_pentest']->value ?? 'images/portfolio/pen-test.jpg') }}"
													alt="" />
											</div>
											<div class="portfolio-item-title">
												<a href="penetration-testing">Penetration Testing</a>
												<p>
													Security / Services
												</p>
											</div>
										</div>
									</div>





									<div class="one-fourth">
										<div class="item-wrapp">
											<div class="portfolio-item">
												<a href="fraud-investigation-services" class="item-permalink"><i
														class="icon-link"></i></a>

												<img src="{{ asset($content['services_portfolio_fraud']->value ?? 'images/portfolio/fraud.jpg') }}"
													alt="" />
											</div>
											<div class="portfolio-item-title">
												<a href="fraud-investigation-services">Fraud Investigation Services</a>
												<p>
													Security / Services
												</p>
											</div>
										</div>
									</div>
								</li>

							</ul><!-- carousel items UL ends -->

						</div>
					</div>
				</div><!-- intro features panel ends -->
			</div>

			@include('layouts.footer')
</body>

</html>