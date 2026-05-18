<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Software Supplies &amp; Maintenance | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Software Supplies & Maintenance — licensed software procurement, installation, upgrades, and ongoing support for businesses of all sizes.">
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
						<div class="one-half"><h4>Software Supplies &amp; Maintenance</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="services">Our Services</a></li>
									<li>Software Supplies &amp; Maintenance</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/software-supplies.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Software Supplies and Maintenance" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="software-supplies-maintenance">Software Supplies &amp; Maintenance</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Bold Fellows is your trusted partner for sourcing, supplying, and maintaining software solutions for businesses of all sizes. We procure genuine, licensed software from leading global vendors and provide expert installation, configuration, and ongoing support to keep your systems running at peak performance.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Software environments require continuous care — patches, version upgrades, licence renewals, and performance tuning. Our maintenance contracts give you peace of mind with scheduled health checks, priority support, and rapid response to any software issues, minimising downtime and protecting your investment.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Bold Fellows for Software Supplies &amp; Maintenance?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Genuine, licensed software from Microsoft, Adobe, Oracle, and more' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Professional installation, configuration, and user training' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Proactive patch management and version upgrade support' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Flexible maintenance contracts tailored to your budget' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Fast-response helpdesk support for all software issues' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Ensure your software ecosystem is always up to date, secure, and fully supported. Contact Bold Fellows today for a software supply and maintenance package tailored to your needs.')) !!}
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
