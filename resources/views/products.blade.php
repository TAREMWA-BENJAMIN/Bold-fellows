<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title>Products | Bold Fellows</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
	@include('layouts.assets')
</head>

<body>
	<div id="container">
		<!-- main container starts-->
		<div id="wrapp">
			<!-- main wrapp starts-->
			<header id="header" class="header-3">
				@include('layouts.header_links')
				@include('layouts.navbar', ['active' => 'products'])
			</header>
			<!-- header ends-->
			<div id="content">
				<div id="breadcrumb">
					<!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>Products</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index" title="Home">Home</a></li>
									<li><a href="products" title="Products">Products</a></li>
								</ul>
							</nav>
							<!--breadcrumb nav ends -->
						</div>
					</div>
				</div>
				<!--breadcrumbs ends -->
				<div class="container">
					<div class="one">
						<div class="three-fourth">
								@php
									$productPages = [
										['slug' => 'personal-budgeting-planning-system', 'title' => 'Personal Budgeting & Planning System', 'img_fallback' => 'images/blog/personal-budgeting.jpg', 'desc_fallback' => 'We provide a comprehensive Personal Budgeting & Planning System designed to help individuals and organizations track expenses, manage income, and achieve their financial goals with ease.'],
										['slug' => 'lending-saving-system', 'title' => 'Lending & Saving System', 'img_fallback' => 'images/blog/lending-saving.jpg', 'desc_fallback' => 'Our Lending & Saving System is a robust platform that streamlines loan origination, deposit tracking, and financial reporting, making it ideal for microfinance institutions and SACCOs.'],
										['slug' => 'inventory-management-system', 'title' => 'Inventory Management System', 'img_fallback' => 'images/blog/inventory-management.jpg', 'desc_fallback' => 'Optimize your supply chain with our Inventory Management System. Features include real-time stock tracking, automated reorder alerts, and comprehensive sales reporting.'],
										['slug' => 'e-learning-system', 'title' => 'E-Learning System', 'img_fallback' => 'images/blog/e-learning.jpg', 'desc_fallback' => 'Empower educators and students with our versatile E-Learning System. Support virtual classrooms, course management, assignment tracking, and secure online assessments.'],
										['slug' => 'point-of-sale-system', 'title' => 'Point of Sale System', 'img_fallback' => 'images/blog/point-of-sale.jpg', 'desc_fallback' => 'Accelerate checkout processes and enhance customer experiences with our intuitive Point of Sale (POS) System, fully integrated with inventory and accounting modules.'],
										['slug' => 'payment-processing-system', 'title' => 'Payment Processing System', 'img_fallback' => 'images/blog/payment-processing.jpg', 'desc_fallback' => 'Secure, fast, and reliable Payment Processing System that supports multiple gateways, mobile money integration, and automated reconciliation for your business.'],
										['slug' => 'hospital-clinic-management-system', 'title' => 'Hospital/Clinic Management System', 'img_fallback' => 'images/blog/hospital-management.jpg', 'desc_fallback' => 'Our Hospital and Clinic Management System digitizes patient records, appointment scheduling, billing, and pharmacy management to improve healthcare delivery.'],
									];
								@endphp

								@foreach($productPages as $prod)
									@php
										$prodContent = \App\Models\FrontendContent::where('section', $prod['title'])->get()->keyBy('key');
									@endphp
									<div class="blog-post layout-2">
										<div class="media-holder">
											<div class="item-wrapp">
												<div class="blog-item small">
													<a href="{{ $prod['slug'] }}" class="item-permalink"><i
															class="icon-link"></i></a>
													<img src="{{ asset($prodContent['banner_img']->value ?? $prod['img_fallback']) }}"
														alt="" />
												</div>
											</div>
										</div>
										<div class="permalink">
											<h4><a href="{{ $prod['slug'] }}"
													title="{{ $prod['title'] }}">{{ $prod['title'] }}</a>
											</h4>
											<p align="justify">
												{{ \Illuminate\Support\Str::limit(strip_tags($prodContent['intro_text']->value ?? $prod['desc_fallback']), 250) }}
											</p>
											<p>
												<a href="{{ $prod['slug'] }}" class="button color-alt small round">Read
													More</a>
											</p>
										</div>
									</div>
								@endforeach
							<!-- Pagination -->
							<nav class="pagination">

								<div class="clearfix">
								</div>
							</nav>
							<!-- End pagination -->
						</div>
						<div class="one-fourth sidebar right">
							@include('layouts.products_sidebar')
							<div class="widget">
								<h4 class="widget-title">About the Company</h4>
								<p style="text-align: ;">
									We are a full-service technology company offering a comprehensive range of software,
									digital solutions, and IT services to help organizations build, secure, and scale
									their operations. We specialize in the design, development, licensing, deployment,
									and maintenance of software applications across multiple platforms, including web,
									mobile, and other digital environments.
								</p>
							</div>
							<div class="widget">
								<h4 class="widget-title">Services Quick Links</h4>
								<ul class="sidebar-nav">
									<li><a href="app-software-development" title="App & Software development"><i
												class="icon-angle-right"></i>App & Software development</a></li>
									<li><a href="software-supplies-maintenance" title="software-supplies-maintenance"><i
												class="icon-angle-right"></i>software Supplies & maintenance</a></li>

									<li><a href="web-hosting" title="web-hosting"><i class="icon-angle-right"></i>web
											Hosting</a></li>
									<li><a href="it-consultancy-advisory" title="it-consultancy-advisory"><i
												class="icon-angle-right"></i>IT consultancy</a></li>
									<li><a href="cybersecurity-services" title="cybersecurity-services"><i
												class="icon-angle-right"></i>cybersecurity Services</a></li>


								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
</body>

</html>
