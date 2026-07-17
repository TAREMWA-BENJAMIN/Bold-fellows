<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Payment Processing System | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Payment Processing System — secure, fast, and flexible payment gateway integration for businesses accepting mobile money, cards, and online payments.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/logo.png" />
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
						<div class="one-half"><h4>Payment Processing System</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Payment Processing System</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/payment-processing.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Payment Processing System" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="payment-processing-system">Payment Processing System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Enable seamless, secure, and fast transactions with Bold Fellows\' Payment Processing System. Our platform is built to handle high transaction volumes across multiple payment channels — mobile money, debit/credit cards, bank transfers, and QR code payments — giving your customers the flexibility to pay the way they prefer.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our payment gateway integrates effortlessly with your existing e-commerce platforms, ERPs, and POS systems. With PCI-DSS compliance, end-to-end encryption, and real-time fraud detection, every transaction is protected. Merchants gain access to a rich dashboard for tracking settlements, reconciliations, and chargebacks in real time.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Our Payment Processing System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Multi-channel payments: mobile money, cards, USSD, and QR codes' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'PCI-DSS compliant with real-time fraud detection and prevention' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Instant payment notifications and automated reconciliation reports' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Easy API integration with any platform or business system' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Competitive transaction fees with transparent pricing and no hidden costs' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Power your business with a payment infrastructure built for reliability and growth. Contact Bold Fellows today to integrate our Payment Processing System into your operations.')) !!}
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
