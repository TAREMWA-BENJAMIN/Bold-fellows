<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title>Products | Bold Fellows</title>
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
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="personal-budgeting-planning-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_1_img']->value ?? 'images/blog/personal-budgeting.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="personal-budgeting-planning-system"
											title="Personal Budgeting & Planning System">{{ $content['product_1_title']->value ?? 'Personal Budgeting & Planning System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_1_desc']->value ?? 'We provide a comprehensive Personal Budgeting & Planning System designed to help individuals and organizations track expenses, manage income, and achieve their financial goals with ease.' }}
									</p>
									<p>
										<a href="personal-budgeting-planning-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="lending-saving-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_2_img']->value ?? 'images/blog/lending-saving.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="lending-saving-system"
											title="Lending & Saving System">{{ $content['product_2_title']->value ?? 'Lending & Saving System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_2_desc']->value ?? 'Our Lending & Saving System is a robust platform that streamlines loan origination, deposit tracking, and financial reporting, making it ideal for microfinance institutions and SACCOs.' }}
									</p>
									<p>
										<a href="lending-saving-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="inventory-management-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_3_img']->value ?? 'images/blog/inventory-management.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="inventory-management-system"
											title="Inventory Management System">{{ $content['product_3_title']->value ?? 'Inventory Management System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_3_desc']->value ?? 'Optimize your supply chain with our Inventory Management System. Features include real-time stock tracking, automated reorder alerts, and comprehensive sales reporting.' }}
									</p>
									<p>
										<a href="inventory-management-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="e-learning-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_4_img']->value ?? 'images/blog/e-learning.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="e-learning-system"
											title="E-Learning System">{{ $content['product_4_title']->value ?? 'E-Learning System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_4_desc']->value ?? 'Empower educators and students with our versatile E-Learning System. Support virtual classrooms, course management, assignment tracking, and secure online assessments.' }}
									</p>
									<p>
										<a href="e-learning-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="point-of-sale-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_5_img']->value ?? 'images/blog/point-of-sale.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="point-of-sale-system"
											title="Point of Sale System">{{ $content['product_5_title']->value ?? 'Point of Sale System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_5_desc']->value ?? 'Accelerate checkout processes and enhance customer experiences with our intuitive Point of Sale (POS) System, fully integrated with inventory and accounting modules.' }}
									</p>
									<p>
										<a href="point-of-sale-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="payment-processing-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_6_img']->value ?? 'images/blog/payment-processing.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="payment-processing-system"
											title="Payment Processing System">{{ $content['product_6_title']->value ?? 'Payment Processing System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_6_desc']->value ?? 'Secure, fast, and reliable Payment Processing System that supports multiple gateways, mobile money integration, and automated reconciliation for your business.' }}
									</p>
									<p>
										<a href="payment-processing-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="hospital-clinic-management-system" class="item-permalink"><i
													class="icon-link"></i></a>
											<img src="{{ asset($content['product_7_img']->value ?? 'images/blog/hospital-management.jpg') }}"
												alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="hospital-clinic-management-system"
											title="Hospital/Clinic Management System">{{ $content['product_7_title']->value ?? 'Hospital/Clinic Management System' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_7_desc']->value ?? 'Our Hospital and Clinic Management System digitizes patient records, appointment scheduling, billing, and pharmacy management to improve healthcare delivery.' }}
									</p>
									<p>
										<a href="hospital-clinic-management-system" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<!-- Pagination -->
							<nav class="pagination">

								<div class="clearfix">
								</div>
							</nav>
							<!-- End pagination -->
						</div>
						<div class="one-fourth sidebar right">
							<div class="widget">
								<h4 class="widget-title">Our Products</h4>
								<ul class="sidebar-nav">
									<li><a href="personal-budgeting-planning-system" title="Personal Budgeting & Planning System"><i class="icon-angle-right"></i>Personal Budgeting & Planning System</a></li>
									<li><a href="lending-saving-system" title="Lending & Saving System"><i class="icon-angle-right"></i>Lending & Saving System</a></li>
									<li><a href="inventory-management-system" title="Inventory Management System"><i class="icon-angle-right"></i>Inventory Management System</a></li>
									<li><a href="e-learning-system" title="E-Learning System"><i class="icon-angle-right"></i>E-Learning System</a></li>
									<li><a href="point-of-sale-system" title="Point of Sale System"><i class="icon-angle-right"></i>Point of Sale System</a></li>
									<li><a href="payment-processing-system" title="Payment Processing System"><i class="icon-angle-right"></i>Payment Processing System</a></li>
									<li><a href="hospital-clinic-management-system" title="Hospital/Clinic Management System"><i class="icon-angle-right"></i>Hospital/Clinic Management System</a></li>
								</ul>
							</div>
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