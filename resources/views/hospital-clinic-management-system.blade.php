<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Hospital/Clinic Management System | Bold Fellows</title>
	<meta name="description" content="Bold Fellows Hospital/Clinic Management System — an all-in-one platform to manage patient records, appointments, billing, pharmacy, and lab results for healthcare facilities.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{ isset($headerContent['logo']->value) && !empty(trim($headerContent['logo']->value)) ? asset($headerContent['logo']->value) : asset('images/logo.png') }}" />
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
						<div class="one-half"><h4>Hospital/Clinic Management System</h4></div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<ul>
									<li>You are here:</li>
									<li><a href="products">Our Products</a></li>
									<li>Hospital/Clinic Management System</li>
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
										@php $bannerUrl = asset($content['banner_img']->value ?? 'images/blog/hospital-management.jpg'); @endphp
										<img src="{{ $bannerUrl }}" alt="Hospital and Clinic Management System" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;" />
									</div>
								</div>
								<div class="permalink">
									<h4 align="justify"><a href="hospital-clinic-management-system">Hospital/Clinic Management System</a></h4>
								</div>
								<div class="post-intro">
									<p align="justify">
										{!! nl2br(e($content['intro_text']->value ?? 'Deliver better patient care with Bold Fellows\' Hospital/Clinic Management System. Our comprehensive healthcare platform is designed for hospitals, clinics, and medical centres of all sizes — digitising patient records, streamlining clinical workflows, and improving operational efficiency so your medical staff can focus on what matters most: the patient.')) !!}
									</p>
									<p align="justify">
										{!! nl2br(e($content['details_text']->value ?? 'From patient registration and appointment scheduling to diagnosis recording, pharmacy management, laboratory results, and billing — our system covers every touchpoint of the healthcare journey. Role-based access ensures that doctors, nurses, pharmacists, and administrators each see the information relevant to their work, keeping data secure and workflows efficient.')) !!}
									</p>
									<p align="justify"><strong>Why Choose Our Hospital/Clinic Management System?</strong></p>
									<ul class="simple-list">
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_1']->value ?? 'Electronic Medical Records (EMR) with full patient history and clinical notes' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_2']->value ?? 'Appointment scheduling with SMS/email reminders for patients' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_3']->value ?? 'Integrated pharmacy, laboratory, and radiology management modules' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_4']->value ?? 'Automated billing, insurance claims, and payment tracking' }}</li>
										<li><i class="icon-check-sign"></i> {{ $content['why_choose_5']->value ?? 'Secure, role-based access for all clinical and administrative staff' }}</li>
									</ul>
									<p align="justify">
										{!! nl2br(e($content['conclusion_text']->value ?? 'Transform your healthcare facility with a modern, integrated management system. Contact Bold Fellows today for a demonstration tailored to your clinic or hospital environment.')) !!}
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
