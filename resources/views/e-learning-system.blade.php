<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>E-Learning System | Bold Fellows</title>
	<meta name="description"
		content="Bold Fellows E-Learning System — a feature-rich online learning platform for schools, universities, and corporate training programs with interactive content, assessments, and progress tracking.">
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
							<h4>E-Learning System</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>E-Learning System</li>
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
												$bannerUrl = asset($content['banner_img']->value ?? 'images/blog/e-learning.jpg');
											@endphp

											<img src="{{ $bannerUrl }}"
												alt="E-Learning System"
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
									<h4 align="justify"><a href="e-learning-system">E-Learning System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Unlock the power of digital education with our comprehensive E-Learning System. Whether you are a school, university, training institute, or corporate organisation, our platform delivers an engaging, flexible, and scalable learning experience that keeps learners motivated and administrators in full control.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'Our E-Learning System supports a wide range of content formats — video lectures, interactive quizzes, assignments, live virtual classrooms, and downloadable resources. Advanced progress tracking, automated grading, and certification generation make it easy to measure learning outcomes and reward achievement.')) !!}
									</p>

									<p align="justify"><strong>Why Choose Our E-Learning System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Intuitive course builder with drag-and-drop content organisation' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Live virtual classrooms with video conferencing integration' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Automated assessments, grading, and digital certificate issuance' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Mobile-friendly design for learning anytime, anywhere' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Detailed analytics on learner engagement and completion rates' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Modernise your educational delivery and empower your learners with our E-Learning System. Get in touch with Bold Fellows for a demo and discover how we can tailor the platform to your curriculum.')) !!}
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
