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
						@php
							$servicePages = [
								['slug' => 'app-software-development', 'title' => 'App & Software Development', 'img_fallback' => 'images/blog/app-software-development.jpg', 'desc_fallback' => 'We build custom software solutions ranging from mobile apps to robust enterprise applications, ensuring scalability, security, and high performance to meet your business needs.'],
								['slug' => 'software-supplies-maintenance', 'title' => 'Software Supplies & Maintenance', 'img_fallback' => 'images/portfolio/csa-services.jpg', 'desc_fallback' => 'We provide licensed software supplies and offer ongoing maintenance, updates, and support to ensure your systems remain reliable and secure.'],
								['slug' => 'web-hosting', 'title' => 'Web Hosting', 'img_fallback' => 'images/portfolio/csa-products.jpg', 'desc_fallback' => 'Reliable, fast, and secure web hosting solutions tailored for businesses of all sizes. Enjoy maximum uptime, automated backups, and 24/7 technical support.'],
								['slug' => 'penetration-testing', 'title' => 'Penetration Testing', 'img_fallback' => 'images/blog/penetration-testing.jpg', 'desc_fallback' => 'Comprehensive penetration testing to identify vulnerabilities in your systems before attackers do.'],
								['slug' => 'it-consultancy-advisory', 'title' => 'IT Consultancy & Advisory', 'img_fallback' => 'images/blog/security-consulting.jpg', 'desc_fallback' => 'Expert IT guidance to help you navigate digital transformation. We align technology strategies with business objectives to maximize efficiency and ROI.'],
								['slug' => 'cybersecurity-services', 'title' => 'Cybersecurity Services', 'img_fallback' => 'images/portfolio/why-cyber-sec-africa.jpg', 'desc_fallback' => 'Protect your digital assets with our comprehensive cybersecurity services, including penetration testing, threat monitoring, and vulnerability assessments.'],
							];
						@endphp

						@foreach($servicePages as $index => $srv)
							@php
								$srvContent = \App\Models\FrontendContent::where('section', $srv['title'])->get()->keyBy('key');
							@endphp
							<div class="one-third">
								<div class="service-item">
									<div class="service-image" style="margin-bottom: 20px;">
										<img src="{{ asset($srvContent['banner_img']->value ?? $srv['img_fallback']) }}" alt="" style="width: 90px; height: 90px; object-fit: cover; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
									</div>
									<h4>{{ $srv['title'] }}</h4>
									<p>
										{{ \Illuminate\Support\Str::limit(strip_tags($srvContent['intro_text']->value ?? $srv['desc_fallback']), 150) }}
									</p>
									<p>
										<br /><a href="{{ $srv['slug'] }}" class="button big round color">Read More</a>
									</p>
								</div>
							</div>
							@if(($index + 1) % 3 == 0)
								<div class="horizontal-line"></div>
								</div>
								</div>
								@if(!$loop->last)
									<div class="container">
									<div class="one">
								@endif
							@endif
						@endforeach
						
						@if(count($servicePages) % 3 != 0)
							<div class="horizontal-line"></div>
							</div>
							</div>
						@endif

				</div>

			</div>

			@include('layouts.footer')
</body>

</html>