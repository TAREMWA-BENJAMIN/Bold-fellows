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
								<div class="service-image" style="margin-bottom: 20px;"><img
										src="{{ asset($content['service_1_img']->value ?? 'images/blog/app-software-development.jpg') }}"
										alt=""
										style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
								</div>
								<h4>{{ $content['service_1_title']->value ?? 'App & Software Development' }}</h4>
								<p>
									{{ $content['service_1_desc']->value ?? 'We build custom software solutions ranging from mobile apps to robust enterprise applications, ensuring scalability, security, and high performance to meet your business needs.' }}
								</p>
								<p>
									<br /><a href="app-software-development" class="button big round color">Read
										More</a>
								</p>
							</div>
							<!--service item ends -->
						</div>
						<div class="one-third">
							<div class="service-item">
								<!--service item starts -->
								<div class="service-image" style="margin-bottom: 20px;"><img
										src="{{ asset($content['service_2_img']->value ?? 'images/portfolio/csa-services.jpg') }}"
										alt=""
										style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
								</div>
								<h4>{{ $content['service_2_title']->value ?? 'Software Supplies & Maintenance' }}</h4>
								<p>
									{{ $content['service_2_desc']->value ?? 'We provide licensed software supplies and offer ongoing maintenance, updates, and support to ensure your systems remain reliable and secure.' }}
								</p>
								<p>
									<br /><a href="software-supplies-maintenance" class="button big round color">Read
										More</a>
								</p>
							</div>
							<!--service item ends -->
						</div>
						<div class="one-third">
							<div class="service-item">
								<!--service item starts -->
								<div class="service-image" style="margin-bottom: 20px;"><img
										src="{{ asset($content['service_3_img']->value ?? 'images/portfolio/csa-products.jpg') }}"
										alt=""
										style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
								</div>
								<h4>{{ $content['service_3_title']->value ?? 'Web Hosting' }}</h4>
								<p>
									{{ $content['service_3_desc']->value ?? 'Reliable, fast, and secure web hosting solutions tailored for businesses of all sizes. Enjoy maximum uptime, automated backups, and 24/7 technical support.' }}
								</p>
								<p>
									<br /><a href="web-hosting" class="button big round color">Read More</a>
								</p>
							</div>
							<!--service item ends -->
						</div>
						<div class="horizontal-line"></div>
					</div>

					<div class="container">
						<div class="one">
							<div class="one-third">
								<div class="service-item">
									<!--service item starts -->
									<div class="service-image" style="margin-bottom: 20px;"><img
											src="{{ asset($content['service_4_img']->value ?? 'images/blog/security-consulting.jpg') }}"
											alt=""
											style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
									</div>
									<h4>{{ $content['service_4_title']->value ?? 'IT Consultancy & Advisory' }}</h4>
									<p>
										{{ $content['service_4_desc']->value ?? 'Expert IT guidance to help you navigate digital transformation. We align technology strategies with business objectives to maximize efficiency and ROI.' }}
									</p>
									<p>
										<br /><a href="it-consultancy-advisory" class="button big round color">Read
											More</a>
									</p>
								</div>
								<!--service item ends -->
							</div>
							<div class="one-third">
								<div class="service-item">
									<!--service item starts -->
									<div class="service-image" style="margin-bottom: 20px;"><img
											src="{{ asset($content['service_5_img']->value ?? 'images/portfolio/why-cyber-sec-africa.jpg') }}"
											alt=""
											style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
									</div>
									<h4>{{ $content['service_5_title']->value ?? 'Cybersecurity Services' }}</h4>
									<p>
										{{ $content['service_5_desc']->value ?? 'Protect your digital assets with our comprehensive cybersecurity services, including penetration testing, threat monitoring, and vulnerability assessments.' }}
									</p>
									<p>
										<br /><a href="cybersecurity-services" class="button big round color">Read
											More</a>
									</p>
								</div>
								<!--service item ends -->
							</div>
							<div class="horizontal-line"></div>
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
								<li><i class="icon-check-sign"></i>App & Software Development</li>
								<li><i class="icon-check-sign"></i>Software Supplies & Maintenance</li>
								<li><i class="icon-check-sign"></i>Web Hosting</li>
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

			</div>

			@include('layouts.footer')
</body>

</html>