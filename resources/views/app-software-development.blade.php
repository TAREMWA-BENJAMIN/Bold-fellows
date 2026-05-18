<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>App &amp; Software Development | Bold Fellows</title>
	<meta name="description"
		content="Bold Fellows offers professional App & Software Development services — custom mobile apps, web applications, and enterprise software tailored to your business needs.">
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
						<div class="one-half">
							<h4>App &amp; Software Development</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="services">Our Services</a></li>
									<li>App &amp; Software Development</li>
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
												$bannerUrl = asset($content['banner_img']->value ?? 'images/blog/app-software-development.jpg'); 
											@endphp

											<img src="{{ $bannerUrl }}" 
												alt="App and Software Development"
												style="
													width:100%;
													height:100%;
													object-fit:cover;
													object-position:left center;
													display:block;
												" />
										</div>
									</div>
								<div class="permalink">
									<h4 align="justify"><a href="app-software-development">App &amp; Software
											Development</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'At Bold Fellows, we design and build powerful, scalable, and user-friendly software solutions tailored to meet the unique demands of modern businesses. From mobile applications to complex enterprise systems, our development team delivers innovative products that drive growth and efficiency.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'We follow industry best practices throughout the software development lifecycle — from requirements gathering and UI/UX design through development, testing, and deployment — ensuring that every solution we deliver is robust, secure, and future-ready.')) !!}
									</p>

									<p align="justify"><strong>Why Choose Bold Fellows for Software Development?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Experienced team of certified developers and designers' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Agile methodology for fast, iterative delivery' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'End-to-end project management and transparency' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Security-first approach built into every stage' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Competitive pricing with on-time delivery' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Whether you are a startup looking to build your first app or an established organisation seeking to modernise legacy systems, Bold Fellows is your trusted technology partner. Contact us today to discuss your project.')) !!}
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