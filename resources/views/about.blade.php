<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title>About | Bold Fellows</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
	@include('layouts.assets')
	<style>
		.single-portfolio-item-slider .slides li img {
			width: 100%;
			height: 400px;
			object-fit: cover;
			object-position: center;
			display: block;
		}
	</style>
</head>

<body>
	<div id="container">
		<!-- main container starts-->
		<div id="wrapp">
			<!-- main wrapp starts-->
			<header id="header" class="header-3">
				@include('layouts.header_links')
				@include('layouts.navbar', ['active' => 'about'])
			</header>
			<!-- header ends-->

			<div id="content">
				<div id="breadcrumb"><!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>About Us</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs"><!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index">Home</a></li>
									<li>About</li>
								</ul>
							</nav><!--breadcrumb nav ends -->
						</div>
					</div>
				</div><!--breadcrumbs ends -->
				<div class="container">


					<div class="one-third">

						<div style="margin-bottom: 20px;">
							<h5 style="border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-bottom: 10px; color: #000; font-weight: bold;">Mission</h5>
							<p style="text-align: justify;">
								{{ preg_replace('/^(Our\s*)?Mission:\s*/i', '', $content['our_mission']->value ?? 'Our Mission: To build a community of information security for Africa.') }}
							</p>
						</div>

						<div style="margin-bottom: 20px;">
							<h5 style="border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-bottom: 10px; color: #000; font-weight: bold;">Vision</h5>
							<p style="text-align: justify;">
								{{ preg_replace('/^(Our\s*)?Vision:\s*/i', '', $content['our_vision']->value ?? 'Our Vision: To set new standard in Information Communication Technology and Security.') }}
							</p>
						</div>

						<div style="margin-bottom: 20px;">
							<h5 style="border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-bottom: 10px; color: #000; font-weight: bold;">Values</h5>
							<ul class="simple-list" style="margin-left: 0; padding-left: 0; list-style: none;">
								<li style="margin-bottom: 8px;"><i class="icon-check-sign" style="color: #5a4bfa; margin-right: 8px;"></i> {{ (isset($content['our_value_1']->value) && !empty(trim($content['our_value_1']->value))) ? $content['our_value_1']->value : 'Integrity & Transparency' }}</li>
								<li style="margin-bottom: 8px;"><i class="icon-check-sign" style="color: #5a4bfa; margin-right: 8px;"></i> {{ (isset($content['our_value_2']->value) && !empty(trim($content['our_value_2']->value))) ? $content['our_value_2']->value : 'Innovation & Continuous Learning' }}</li>
								<li style="margin-bottom: 8px;"><i class="icon-check-sign" style="color: #5a4bfa; margin-right: 8px;"></i> {{ (isset($content['our_value_3']->value) && !empty(trim($content['our_value_3']->value))) ? $content['our_value_3']->value : 'Efficiency, Effectiveness & Customer Centricity' }}</li>
							</ul>
						</div>

						<div style="margin-top: 30px;">
							<h4 style="color: #000; font-weight: bold;">Our Skills level</h4>
						</div>

							<ul class="bar_graph">
								<!-- skill graph starts -->

								<li>
									<p>
										<i
											class="icon-pencil"></i>{{ $content['skill_1_name']->value ?? 'Penetration Testing' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_1_level']->value ?? '80' }}"></span>
									</div>
								</li>
								<li>
									<p>
										<i
											class="icon-cog"></i>{{ $content['skill_2_name']->value ?? 'Security Solutions' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_2_level']->value ?? '100' }}"></span>
									</div>
								</li>
								<li>
									<p>
										<i
											class="icon-magic"></i>{{ $content['skill_3_name']->value ?? 'Security Training' }}
									</p>
									<div class="bar-wrap">
										<span data-width="{{ $content['skill_3_level']->value ?? '90' }}"></span>
									</div>
								</li>

							</ul>
					</div>
					<div class="two-third">
						<h4 style="color: #000; font-weight: bold;">About the Company</h4>



						<p align="justify">
							{{ $content['about_company_desc_1']->value ?? 'Bold Fellows is a full-service Information Security Consulting firm offering a comprehensive range of Services and Products to help organizations protect their valuable assets.' }}
						</p>
						<p align="justify">
							{{ $content['about_company_desc_2']->value ?? 'We provide unrivaled technical services, trusted advises to our clients, a role that allows us to fully understand and help our clients to achieve their organization and security objectives. The nature and scope of the Information Security field has evolved over the past several years, no longer are we just concerned with protecting the technical edifice. Our emphasis has become more holistic and we tend to consider all aspects of information protection as central to the field of security.' }}
						</p>
						<p align="justify">
							{{ $content['about_company_desc_3']->value ?? 'We have a team and partners in information Security industry who are veterans. Bold Fellows is well on the way to establishing an enduring reputation as the company to partner with for value-optimized, cost efficient services and thought leadership opportunities.' }}
						</p>

						<p align="justify">
							<strong>Our Philosophy:</strong>
							{{ $content['our_philosophy']->value ?? 'We aim to create enduring partnerships, which enhance your capacity , capability and enables effective, efficient and smooth operations in your Organization. While reliability and results remain core principles, we pride ourselves on our integrity, transparency and cultural sensitivity, which we regard as critical to maintaining our own reputation and safeguarding yours.' }}
						</p>
						<p align="justify">
							<strong>Our Unique, Proven Approach:</strong>
							{{ $content['our_approach']->value ?? 'Our success stems from our hands-on, flexibility, transfer of skills and knowledge and teamwork approach. This means we give our clients the opportunity to learn in real-life situations - an approach that offers far-reaching benefits.' }}
						</p>
					</div>

				</div>
			</div>

			@include('layouts.footer')
</body>

</html>
