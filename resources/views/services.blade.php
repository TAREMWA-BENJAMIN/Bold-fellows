<!DOCTYPE html>



<head>
	<meta charset="utf-8">
	<title>Services | Bold Fellows</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
	@include('layouts.assets')
	<style>
		/* Grid container */
		.services-grid {
			display: flex;
			flex-wrap: wrap;
			gap: 30px;
			justify-content: center;
			margin-bottom: 50px;
			width: 100%;
		}

		/* Grid item wrapper */
		.service-card-wrapper {
			flex: 0 0 calc(33.333% - 20px);
			box-sizing: border-box;
			display: flex;
		}

		/* Service Card styling */
		.service-card-wrapper .service-item {
			background: #ffffff;
			border: 1px solid #e6e9ee;
			border-radius: 12px;
			padding: 30px 24px;
			text-align: center;
			width: 100%;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
			transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
			box-sizing: border-box;
		}

		/* Hover effect */
		.service-card-wrapper .service-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 12px 24px rgba(22, 159, 230, 0.08);
			border-color: #169fe6;
		}

		/* Image container */
		.service-image {
			width: 90px;
			height: 90px;
			border-radius: 50%;
			overflow: hidden;
			margin: 0 auto 20px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
			transition: transform 0.3s ease;
		}

		.service-card-wrapper .service-item:hover .service-image {
			transform: scale(1.08);
		}

		.service-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		/* Card Title */
		.service-card-wrapper h4 {
			font-size: 18px;
			font-weight: 700;
			color: #1a2340;
			margin: 0 0 12px 0;
			line-height: 1.4;
			font-family: 'Century Gothic', Arial, sans-serif;
		}

		/* Card Description */
		.service-desc {
			font-size: 13.5px;
			line-height: 1.6;
			color: #4a5568;
			margin: 0 0 20px 0;
			flex-grow: 1;
		}

		/* Button container */
		.service-btn-container {
			margin-top: auto;
			width: 100%;
		}

		.service-btn-container a.button {
			display: inline-block;
			width: auto;
			padding: 11px 24px;
			font-size: 13px;
			font-weight: 600;
			text-transform: capitalize;
			transition: all 0.3s ease;
		}

		/* Media queries for responsiveness */
		@media (max-width: 991px) {
			.service-card-wrapper {
				flex: 0 0 calc(50% - 15px);
			}
		}

		@media (max-width: 600px) {
			.services-grid {
				gap: 20px;
			}
			.service-card-wrapper {
				flex: 0 0 100%;
			}
			.service-card-wrapper .service-item {
				padding: 24px 20px;
			}
		}
	</style>
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
					@if(isset($content['services_intro']->value) && !empty(trim($content['services_intro']->value)))
						<div class="one" style="margin-bottom: 40px; text-align: center;">
							<p style="font-size: 16px; line-height: 1.6; color: #555; max-width: 800px; margin: 0 auto;">
								{!! nl2br(e($content['services_intro']->value)) !!}
							</p>
							<div class="horizontal-line"></div>
						</div>
					@endif
					<div class="services-grid">
						@php
							$servicePages = [
								['slug' => 'app-software-development', 'title' => 'App & Software Development', 'img_fallback' => 'images/blog/app-software-development.jpg', 'desc_fallback' => 'We build custom software solutions ranging from mobile apps to robust enterprise applications, ensuring scalability, security, and high performance to meet your business needs.'],
								['slug' => 'software-supplies-maintenance', 'title' => 'Software Supplies & Maintenance', 'img_fallback' => 'images/portfolio/csa-services.jpg', 'desc_fallback' => 'We provide licensed software supplies and offer ongoing maintenance, updates, and support to ensure your systems remain reliable and secure.'],
								['slug' => 'web-hosting', 'title' => 'Web Hosting', 'img_fallback' => 'images/portfolio/csa-products.jpg', 'desc_fallback' => 'Reliable, fast, and secure web hosting solutions tailored for businesses of all sizes. Enjoy maximum uptime, automated backups, and 24/7 technical support.'],
								['slug' => 'it-consultancy-advisory', 'title' => 'IT Consultancy & Advisory', 'img_fallback' => 'images/blog/security-consulting.jpg', 'desc_fallback' => 'Expert IT guidance to help you navigate digital transformation. We align technology strategies with business objectives to maximize efficiency and ROI.'],
								['slug' => 'cybersecurity-services', 'title' => 'Cybersecurity Services', 'img_fallback' => 'images/portfolio/why-cyber-sec-africa.jpg', 'desc_fallback' => 'Protect your digital assets with our comprehensive cybersecurity services, including penetration testing, threat monitoring, and vulnerability assessments.'],
							];
						@endphp

						@foreach($servicePages as $index => $srv)
							@php
								$num = $index + 1;
								$titleKey = "service_{$num}_title";
								$descKey = "service_{$num}_desc";

								// Fetch individual service subpage settings (section corresponds to $srv['title'])
								$srvContent = \App\Models\FrontendContent::where('section', $srv['title'])->get()->keyBy('key');

								$title = (isset($content[$titleKey]->value) && !empty(trim($content[$titleKey]->value))) ? $content[$titleKey]->value : $srv['title'];
								$desc = (isset($content[$descKey]->value) && !empty(trim($content[$descKey]->value))) ? $content[$descKey]->value : $srv['desc_fallback'];
								$img = (isset($srvContent['banner_img']->value) && !empty(trim($srvContent['banner_img']->value))) ? asset($srvContent['banner_img']->value) : asset($srv['img_fallback']);
							@endphp
							<div class="service-card-wrapper">
								<div class="service-item">
									<div class="service-image">
										<img src="{{ $img }}" alt="{{ $title }}" loading="lazy" />
									</div>
									<h4>{{ $title }}</h4>
									<p class="service-desc">
										{{ \Illuminate\Support\Str::limit(strip_tags($desc), 150) }}
									</p>
									<div class="service-btn-container">
										<a href="{{ $srv['slug'] }}" class="button big round color">Read More</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>

				</div>

			</div>

			@include('layouts.footer')
</body>

</html>
