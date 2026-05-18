<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Web Hosting | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Web Hosting — reliable, fast, and secure hosting solutions for businesses, startups, and enterprises with 99.9% uptime guarantee.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.gif" />
	@include('layouts.assets')
</head>
<body>
	<div id="container">
		<div id="wrapp">
			<header id="header" class="header-3">
				@include('layouts.header_links')
				@include('layouts.navbar', ['active' => 'services'])
			</header>
			<div id="content">
				<div id="breadcrumb">
					<div class="container">
						<div class="one-half"><h4>Web Hosting</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="services">Our Services</a></li>
									<li>Web Hosting</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="one">
						<div class="three-fourth">
							<div class="blog-post">
								<div class="item-wrapp" style="width:100%;">
									<div class="blog-item large" style="overflow:hidden; width:100%; height:280px;">
										<a href="#" class="item-permalink"><i class="icon-link"></i></a>
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/web-hosting.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Web Hosting" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="web-hosting">Web Hosting</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Keep your website online, fast, and secure with Bold Fellows Web Hosting services. We offer a range of hosting plans — from shared hosting for small businesses to dedicated servers and cloud infrastructure for high-traffic enterprise applications — all backed by expert 24/7 technical support.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our hosting infrastructure is powered by enterprise-grade hardware in secure, redundant data centres, ensuring your website and applications remain available around the clock. We include free SSL certificates, daily backups, malware scanning, and one-click installations for popular platforms such as WordPress, Joomla, and Laravel.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Bold Fellows Web Hosting?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? '99.9% uptime guarantee backed by enterprise-grade infrastructure' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Free SSL certificate, domain registration, and daily backups' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'cPanel control panel with one-click app installations' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Scalable plans from shared hosting to VPS and dedicated servers' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? '24/7 technical support via phone, email, and live chat' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Give your website the performance and reliability it deserves. Contact Bold Fellows today to find the hosting plan that fits your business perfectly.')) !!}
									</p>
								</div>
							</div>
						</div>
						<!-- Sidebar -->
						<div class="one-fourth sidebar right">
							<div class="widget">
								<h4 class="widget-title">Our Services</h4>
								<ul class="sidebar-nav">
									<li><a href="app-software-development" title="App &amp; Software Development"><i class="icon-angle-right"></i>App &amp; Software Development</a></li>
									<li><a href="software-supplies-maintenance" title="Software Supplies &amp; Maintenance"><i class="icon-angle-right"></i>Software Supplies &amp; Maintenance</a></li>
									<li class="active"><a href="web-hosting" title="Web Hosting"><i class="icon-angle-right"></i>Web Hosting</a></li>
									<li><a href="penetration-testing" title="Penetration Testing"><i class="icon-angle-right"></i>Penetration Testing</a></li>
									<li><a href="it-consultancy-advisory" title="IT Consultancy &amp; Advisory"><i class="icon-angle-right"></i>IT Consultancy &amp; Advisory</a></li>
									<li><a href="cybersecurity-services" title="Cybersecurity Services"><i class="icon-angle-right"></i>Cybersecurity Services</a></li>
									<li><a href="services" title="All Services"><i class="icon-angle-right"></i>All Services</a></li>
								</ul>
							</div>
						</div>
						<!-- Sidebar end -->
					</div>
				</div>
			</div>
			@include('layouts.footer')
		</div>
	</div>
</body>
</html>
