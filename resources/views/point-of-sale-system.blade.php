<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Point of Sale System | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Point of Sale System — fast, reliable POS for retail, restaurants, and service businesses.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.gif" />
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
						<div class="one-half"><h4>Point of Sale System</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Point of Sale System</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/point-of-sale.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Point of Sale System" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="point-of-sale-system">Point of Sale System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Accelerate your sales operations with Bold Fellows\' Point of Sale System — a fast, reliable platform built for retail stores, restaurants, supermarkets, and service outlets. Process transactions in seconds and deliver exceptional customer experiences every day.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our POS system integrates seamlessly with inventory management, accounting, and customer relationship tools, giving you a unified real-time view of your business. Whether operating a single outlet or a multi-branch chain, our system scales with your growth and keeps operations running — even offline.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Our Point of Sale System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Lightning-fast checkout with touch-screen and barcode scanner support' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Multiple payment methods: cash, mobile money, card, and credit' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Real-time sales reporting and end-of-day reconciliation' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Customer loyalty programs, discounts, and promotions management' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Offline mode to keep selling even without internet connectivity' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Contact Bold Fellows today and let us show you how our Point of Sale System can power your business growth.')) !!}
									</p>
								</div>
							</div>
						</div>
						<!-- Sidebar -->
						<div class="one-fourth sidebar right">
							<div class="widget">
								<h4 class="widget-title">Our Products</h4>
								<ul class="sidebar-nav">
									<li><a href="personal-budgeting-planning-system"><i class="icon-angle-right"></i>Personal Budgeting &amp; Planning System</a></li>
									<li><a href="lending-saving-system"><i class="icon-angle-right"></i>Lending &amp; Saving System</a></li>
									<li><a href="inventory-management-system"><i class="icon-angle-right"></i>Inventory Management System</a></li>
									<li><a href="e-learning-system"><i class="icon-angle-right"></i>E-Learning System</a></li>
									<li class="active"><a href="point-of-sale-system"><i class="icon-angle-right"></i>Point of Sale System</a></li>
									<li><a href="payment-processing-system"><i class="icon-angle-right"></i>Payment Processing System</a></li>
									<li><a href="hospital-clinic-management-system"><i class="icon-angle-right"></i>Hospital/Clinic Management System</a></li>
									<li><a href="endpointsecurity"><i class="icon-angle-right"></i>Endpoint Security</a></li>
									<li><a href="vulnerabilitymanagement"><i class="icon-angle-right"></i>Vulnerability Management</a></li>
									<li><a href="datasecurity"><i class="icon-angle-right"></i>Data Security Assessment</a></li>
									<li><a href="products"><i class="icon-angle-right"></i>All Products</a></li>
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
