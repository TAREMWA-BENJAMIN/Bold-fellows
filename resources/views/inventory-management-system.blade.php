<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Inventory Management System | Bold Fellows</title>
	<meta name="description"
		content="Bold Fellows Inventory Management System — track stock levels, manage suppliers, automate reorder points, and gain full visibility over your warehouse and retail operations.">
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
						<div class="one-half">
							<h4>Inventory Management System</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Inventory Management System</li>
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
												$bannerUrl = asset($content['banner_img']->value ?? 'images/blog/inventory-management.jpg');
											@endphp

											<img src="{{ $bannerUrl }}"
												alt="Inventory Management System"
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
									<h4 align="justify"><a href="inventory-management-system">Inventory Management System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Stay ahead of demand with our powerful Inventory Management System. Designed for businesses of all sizes — from retail shops to large distribution warehouses — our platform gives you complete, real-time control over your stock, helping you reduce waste, prevent stockouts, and maximise profitability.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our system covers the full inventory lifecycle: goods receipt, storage allocation, stock transfers, and order fulfilment. Advanced analytics and reporting help you identify fast-moving items, seasonal trends, and supplier performance, so you can make data-driven purchasing decisions with confidence.')) !!}
									</p>

									<p align="justify"><strong>Why Choose Our Inventory Management System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Real-time stock tracking across multiple locations and warehouses' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Automated reorder alerts and purchase order generation' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Barcode and QR code scanning for fast goods receipt and dispatch' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Supplier management and procurement workflow integration' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Detailed reports on stock valuation, turnover, and shrinkage' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Eliminate inventory guesswork and operate with precision. Contact Bold Fellows today to schedule a live demo of our Inventory Management System tailored to your business needs.')) !!}
									</p>
								</div>
							</div>
						</div>

						<!-- Sidebar -->
						<div class="one-fourth sidebar right">
							<div class="widget">
								<h4 class="widget-title">Our Products</h4>
								<ul class="sidebar-nav">
									<li><a href="personal-budgeting-planning-system" title="Personal Budgeting &amp; Planning System"><i class="icon-angle-right"></i>Personal Budgeting &amp; Planning System</a></li>
									<li><a href="lending-saving-system" title="Lending &amp; Saving System"><i class="icon-angle-right"></i>Lending &amp; Saving System</a></li>
									<li class="active"><a href="inventory-management-system" title="Inventory Management System"><i class="icon-angle-right"></i>Inventory Management System</a></li>
									<li><a href="e-learning-system" title="E-Learning System"><i class="icon-angle-right"></i>E-Learning System</a></li>
									<li><a href="point-of-sale-system" title="Point of Sale System"><i class="icon-angle-right"></i>Point of Sale System</a></li>
									<li><a href="payment-processing-system" title="Payment Processing System"><i class="icon-angle-right"></i>Payment Processing System</a></li>
									<li><a href="hospital-clinic-management-system" title="Hospital/Clinic Management System"><i class="icon-angle-right"></i>Hospital/Clinic Management System</a></li>
									<li><a href="endpointsecurity" title="Endpoint Security"><i class="icon-angle-right"></i>Endpoint Security</a></li>
									<li><a href="vulnerabilitymanagement" title="Vulnerability Management"><i class="icon-angle-right"></i>Vulnerability Management</a></li>
									<li><a href="datasecurity" title="Data Security"><i class="icon-angle-right"></i>Data Security Assessment</a></li>
									<li><a href="products" title="All Products"><i class="icon-angle-right"></i>All Products</a></li>
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
