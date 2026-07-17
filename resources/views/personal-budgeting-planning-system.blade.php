<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Personal Budgeting &amp; Planning System | Bold Fellows</title>
	<meta name="description"
		content="Master Your Financial Future. A web dashboard and companion app for individuals and teams who want a calmer view of their money, with budgets, plans, goals, and day-to-day financial activity and behavior in one place.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
	@include('layouts.assets')
</head>

<body>
	<div id="container">
		<div id="wrapp">
			<header id="header" class="header-3">
				@include('layouts.header_links')
				@include('layouts.navbar', ['active' => 'products'])
			</header>
			<div id="content">
				<div id="breadcrumb">
					<div class="container">
						<div class="one-half">
							<h4>Personal Budgeting &amp; Planning System</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Personal Budgeting &amp; Planning System</li>
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
										<div class="blog-item large" 
											style="overflow:hidden; width:100%; height:280px;">

											<a href="#" class="item-permalink">
												<i class="icon-link"></i>
											</a>

											@php 
												$bannerUrl = asset($content['banner_img']->value ?? 'images/blog/personal-budgeting.jpg'); 
											@endphp

											<img src="{{ $bannerUrl }}" 
												alt="Personal Budgeting and Planning System"
												style="
													width:100%;
													height:100%;
													object-fit:cover;
													object-position:center;
													display:block;
												" />
										</div>
									</div>
								<div class="permalink">
									<h4 align="justify"><a href="personal-budgeting-planning-system">Personal Budgeting &amp; Planning System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Master Your Financial Future. A web dashboard and companion app for individuals and teams who want a calmer view of their money, with budgets, plans, goals, and day-to-day financial activity and behavior in one place.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'We understand that managing finances can be stressful. Our comprehensive budgeting tool allows you to track expenses, set saving goals, and forecast future financial scenarios seamlessly. With bank-grade security, your financial data remains private and protected.')) !!}
									</p>

									<p align="justify"><strong>Why Choose Our Budgeting System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Intuitive web and mobile dashboard for easy access on the go' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Automated expense tracking and categorization' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Customizable budgets and long-term financial goal planning' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Advanced data encryption and secure bank syncing' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Comprehensive reporting and actionable financial insights' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Take control of your finances today with our robust Personal Budgeting & Planning System. Contact our team to request a demo or get started right away.')) !!}
									</p>
								</div>
							</div>
						</div>

						<!-- Sidebar -->
						<div class="one-fourth sidebar right">
							@include('layouts.products_sidebar')
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
