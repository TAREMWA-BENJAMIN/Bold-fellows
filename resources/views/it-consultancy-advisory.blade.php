<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>IT Consultancy &amp; Advisory | Bold Fellows</title>
	<meta name="description" content="Bold Fellows IT Consultancy & Advisory — strategic technology guidance, infrastructure planning, and digital transformation advisory for modern organisations.">
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
						<div class="one-half"><h4>IT Consultancy &amp; Advisory</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="services">Our Services</a></li>
									<li>IT Consultancy &amp; Advisory</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/it-consultancy.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="IT Consultancy and Advisory" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="it-consultancy-advisory">IT Consultancy &amp; Advisory</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Navigate the complex technology landscape with confidence. Bold Fellows provides expert IT Consultancy & Advisory services to help organisations align their technology investments with business strategy. From infrastructure planning and cloud migration to digital transformation roadmaps, our experienced consultants deliver actionable, vendor-neutral advice.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our advisory engagements begin with a thorough assessment of your current IT environment, identifying gaps, risks, and opportunities. We then develop a tailored technology strategy with a clear implementation roadmap, ensuring your IT decisions are cost-effective, scalable, and aligned to your growth objectives.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Bold Fellows for IT Consultancy &amp; Advisory?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Vendor-neutral advice focused entirely on your business outcomes' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Comprehensive IT infrastructure assessment and gap analysis' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Cloud strategy, migration planning, and digital transformation guidance' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'IT governance, risk management, and compliance advisory' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Experienced consultants with cross-industry expertise' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Make smarter technology decisions with Bold Fellows as your trusted IT advisor. Contact us today to arrange a consultation and discover how we can help your organisation thrive in the digital age.')) !!}
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
