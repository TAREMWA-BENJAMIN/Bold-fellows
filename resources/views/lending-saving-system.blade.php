<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Lending &amp; Saving System | Bold Fellows</title>
	<meta name="description"
		content="Bold Fellows Lending & Saving System — a powerful platform for SACCOs, microfinance institutions, and cooperatives to manage loans, savings, and member accounts seamlessly.">
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
							<h4>Lending &amp; Saving System</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Lending &amp; Saving System</li>
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
												$bannerUrl = asset($content['banner_img']->value ?? 'images/blog/lending-saving.jpg');
											@endphp

											<img src="{{ $bannerUrl }}"
												alt="Lending and Saving System"
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
									<h4 align="justify"><a href="lending-saving-system">Lending &amp; Saving System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Empower your financial institution with our comprehensive Lending & Saving System. Purpose-built for SACCOs, microfinance organisations, and cooperatives, our platform streamlines member management, loan origination, repayment tracking, and savings mobilisation — all from a single, intuitive interface.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our system supports the full lending lifecycle: from member onboarding and credit scoring to disbursement, instalment scheduling, and automatic penalty calculation. Savings modules cover fixed deposits, demand deposits, and share contributions — with real-time ledger updates and audit trails ensuring complete financial integrity.')) !!}
									</p>

									<p align="justify"><strong>Why Choose Our Lending &amp; Saving System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Automated loan processing, approval workflows, and disbursement' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Flexible savings products: fixed, demand, and share accounts' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Real-time member statements and SMS/email notifications' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Built-in compliance reporting for regulators and auditors' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Scalable architecture supporting thousands of concurrent members' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Transform your lending and savings operations with a system trusted by financial cooperatives across the region. Contact Bold Fellows today for a personalised demo.')) !!}
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
									<li class="active"><a href="lending-saving-system" title="Lending &amp; Saving System"><i class="icon-angle-right"></i>Lending &amp; Saving System</a></li>
									<li><a href="inventory-management-system" title="Inventory Management System"><i class="icon-angle-right"></i>Inventory Management System</a></li>
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
