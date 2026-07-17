<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Cybersecurity Services | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Cybersecurity Services — comprehensive security assessments, threat monitoring, incident response, and compliance solutions to protect your organisation.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
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
						<div class="one-half"><h4>Cybersecurity Services</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="services">Our Services</a></li>
									<li>Cybersecurity Services</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/cybersecurity.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Cybersecurity Services" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="cybersecurity-services">Cybersecurity Services</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Protect your organisation from evolving cyber threats with Bold Fellows\' comprehensive Cybersecurity Services. We provide end-to-end security solutions — from proactive threat assessments and penetration testing to real-time monitoring, incident response, and regulatory compliance — giving your business the resilience to operate with confidence in a connected world.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our certified cybersecurity experts (CISA, CEH, OSCP) work closely with your team to understand your risk profile and design a security framework that safeguards your data, systems, and reputation. We combine human expertise with industry-leading security tools to detect, respond to, and recover from cyber incidents faster than attackers can cause harm.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Bold Fellows for Cybersecurity?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Comprehensive security assessments: vulnerability scanning, pen testing, and audits' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? '24/7 Security Operations Centre (SOC) monitoring and threat intelligence' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Rapid incident response and digital forensics capabilities' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Regulatory compliance support: ISO 27001, PCI-DSS, GDPR, and NIST' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Staff cybersecurity awareness training and phishing simulations' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Cyber threats never sleep — and neither does our security team. Contact Bold Fellows today to schedule a security assessment and take the first step towards a more resilient organisation.')) !!}
									</p>
								</div>
							</div>
						</div>
						<!-- Sidebar -->
						<div class="one-fourth sidebar right">
							@include('layouts.services_sidebar')
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
