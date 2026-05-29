<!DOCTYPE html>


<!-- Mirrored from www.cybersecurityafrica.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2026 09:24:17 GMT -->

<head>
	<meta charset="utf-8">
	<title>Bold Fellows- Internet Security, Information Security, Consulting, Training, Certified Ethical Hacking,
		Computer Forensic, Banking</title>
	<meta name="Keywords" content="Bold Fellows, Source code Security tool, Vulnerability Assessment, Vulnerability scan, Vulnerability tools,
Security Consultant, IT Security Consultants, IT Security Training, Security Training, Cyber Security training, Cyber Crime, Cyber Security Analysis,
Fraud Investigation, Fraud analysis" />
	<meta name="Description"
		content="We are a full-service Information Security Consulting firm offering a comprehensive range of Services and Products to help organizations protect their valuable assets. " />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.gif" /><!-- MAIN STYLE CSS FILE -->
	@include('layouts.assets')
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<style type="text/css">
		.new {
			color: #FFF;
		}

		body,
		td,
		th {
			font-family: 'Inter', 'Century Gothic', Arial, Verdana;
		}

		body {
			background-color: #FFFFFF;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Inter', 'Century Gothic', Roboto, arial, helvetica, sans-serif;
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
				@include('layouts.navbar', ['active' => 'home'])
			</header>
			<!-- header ends-->
			<div id="layerslider">
				<!--layer slider starts-->
				<div class="slider-shadow-top">
				</div>
				<div class="slider-shadow-bottom">
				</div>
				<div class="ls-layer"
					style="slidedirection: top; slidedelay: 6000; durationin: 1500; durationout: 1500; delayout: 500;">
					<img src="{{ asset($content['slider_1_bg']->value ?? 'images/slider/layer/1/slide1-bg.jpg') }}"
						class="ls-bg" alt="">
					<img src="{{ asset($content['slider_1_fg']->value ?? 'images/slider/layer/1/6thEthiopia.png') }}" class="ls-s6" alt=""
						style="top: 10px; left: -15px; slidedirection : bottom; slideoutdirection : bottom; durationin : 1500; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600;">
					<h1 class="ls-s3 ls_large_text_01"
						style="position: absolute; top:100px; left: 490px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000;">
						{!! $content['slider_1_title']->value ?? 'The 6th Ethiopia, Banking & <br>ICT Summit 2019' !!}
					</h1>


					<p align="left" class="ls-s3 l1-s1 ls_large_text_07"
						style="position: absolute; top:200px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000;">
						{!! nl2br(e($content['slider_1_desc']->value ?? 'The 6th Ethiopia Banking and ICT Summit 2019 is a must-attend event dedicated to enhancing digital operational excellence and overcoming the challenges surrounding Banking and ICT transformation and the impact of technological development.')) !!}
					</p>

					<br>
					<br>

					<a class="button huge color round ls-s8"
						href="{{ $content['slider_1_btn_url']->value ?? 'personal-budgeting-planning-system' }}"
						style="position: absolute; top:320px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;">{{ $content['slider_1_btn_text']->value ?? 'Cresta Plan' }}</a>
				</div>

				<div class="ls-layer"
					style="slidedirection: top; slidedelay: 6000; durationin: 1500; durationout: 1500; delayout: 500;">
					<img src="{{ asset($content['slider_2_bg']->value ?? 'images/slider/layer/1/slide2-bg.jpg') }}"
						class="ls-bg" alt="">
					<img src="{{ asset($content['slider_2_fg']->value ?? 'images/slider/layer/1/slide0-5.png') }}" class="ls-s6" alt=""
						style="top: 10px; left: -15px; slidedirection : bottom; slideoutdirection : bottom; durationin : 1500; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600;">
					<h1 class="ls-s3 ls_large_text_01"
						style="position: absolute; top:100px; left: 490px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000; font-family: 'Century Gothic', Arial, Verdana;">
						{!! $content['slider_2_title']->value ?? 'Advanced Cyber Security<br>Threat Protection' !!}
					</h1>


					<p align="left" class="ls-s3 l1-s1 ls_large_text_07"
						style="color: #FFF; position: absolute; top:200px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 1000;">
						{!! $content['slider_2_desc']->value ?? 'Bold Fellows provides unrivaled technical services, trusted advice <br>to its client-base,  
            a role that allows us to fully understand and help our clients<br> to achieve their organization and security objectives.  <br><strong>Cyber Security Consultancy & Training Services </strong>' !!}
					</p>

					<br>
					<br>

					<a href="{{ $content['slider_2_btn_url']->value ?? 'lending-saving-system' }}" title="financePRO"
						class="button huge color round ls-s8"
						style="position: absolute; top:280px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;">{{ $content['slider_2_btn_text']->value ?? 'financePRO' }}</a>
				</div>

				<div class="ls-layer"
					style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
					<img src="{{ asset($content['slider_3_bg']->value ?? 'images/slider/layer/2/slide3-bg.jpg') }}"
						class="ls-bg" alt="">
					<img src="{{ asset($content['slider_3_fg']->value ?? 'images/slider/layer/2/item-01.png') }}" class="ls-s6" alt=""
						style="top: 15px; left: 480px; slidedirection : bottom; slideoutdirection : bottom; durationin : 1500; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600;">
					<h1 class="ls-s3 ls_large_text_01"
						style="position: absolute; font-family:'Century Gothic', Arial, Verdana; top:100px; left: 0px; slidedirection : right; slideoutdirection : left; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 400;">
						{!! $content['slider_3_title']->value ?? 'Network Management <br>and Security Training' !!}
					</h1>
					<p align="left" class="ls-s3 l1-s1 ls_large_text_07"
						style="color: #FFF; width: 600px; position: absolute; top:190px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 500;">
						{!! nl2br(e($content['slider_3_desc']->value ?? 'Bold Fellows provides interactive and comprehensive e-learning solutions, professional network management, and security training programs designed to equip your team with cutting-edge skills.')) !!}
					</p>
					<a class="button huge color round ls-s8"
						href="{{ $content['slider_3_btn_url']->value ?? 'point-of-sale-system' }}"
						style="position: absolute; top:310px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600;">{{ $content['slider_3_btn_text']->value ?? 'BoldPos' }}</a>
				</div>
				<div class="ls-layer"
					style="slidedirection: right; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;">
					<img src="{{ asset($content['slider_4_bg']->value ?? 'images/slider/layer/3/slide4-bg.jpg') }}"
						class="ls-bg" alt="">
					<img src="{{ asset($content['slider_4_fg']->value ?? 'images/slider/layer/3/slide3-pic1.png') }}" class="ls-s6" alt=""
						style="top: 25px; left: 0px; slidedirection : fade; slideoutdirection : fade; durationin : 1500; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 500;">
					<h1 class="ls-s3 ls_large_text_01"
						style="position: absolute; top:100px; left: 400px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600;">
						{!! $content['slider_4_title']->value ?? 'We advice, consult, install <br> and customize solutions' !!}
					</h1>
					<p align="left" class="ls-s3 l1-s1 ls_large_text_07"
						style="color: #FFF; position: absolute; top:190px; left: 400px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 700;">
						{!! nl2br(e($content['slider_4_desc']->value ?? 'Maximize your business efficiency with BoldPos, our state-of-the-art Point of Sale system. We consult, install, and customize solutions tailored to your retail operations.')) !!}
					</p>
					<a class="button huge color round ls-s8"
						href="{{ $content['slider_4_btn_url']->value ?? 'hospital-clinic-management-system' }}"
						style="position: absolute; top:310px; left: 400px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 800;">{{ $content['slider_4_btn_text']->value ?? 'Hospital System' }}</a>
				</div>
				<div class="ls-layer"
					style="slidedirection: top; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;">
					<img src="{{ asset($content['slider_5_bg']->value ?? 'images/slider/layer/4/slide4-bg.jpg') }}"
						class="ls-bg" alt="">
					<img src="{{ asset($content['slider_5_fg']->value ?? 'images/slider/layer/4/slider_4_man.png') }}" class="ls-s6" alt=""
						style="top: 10px; left:550px; slidedirection : bottom; slideoutdirection : bottom; durationin : 1500; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 300;">
					<h1 class="ls-s3 ls_large_text_01"
						style="position: absolute; top:100px; left: 0px; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 500;">
						{!! $content['slider_5_title']->value ?? 'We test across full spectrum <br> of potential vulnerability' !!}
					</h1>
					<p align="left" class="ls-s3 l1-s1 ls_large_text_07"
						style="color: #FFF; width: 600px; position: absolute; top:190px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600;">
						{!! nl2br(e($content['slider_5_desc']->value ?? 'Improve healthcare delivery with our Hospital/Clinic Management System, streamlining patient records, clinical workflows, and medical billing securely.')) !!}
					</p>
					<a class="button huge color round ls-s8"
						href="{{ $content['slider_5_btn_url']->value ?? 'e-learning-system' }}"
						style="position: absolute; top:310px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 700;">{{ $content['slider_5_btn_text']->value ?? 'e-Learning System' }}</a>
				</div>
			</div>
			<!--layer slider ends-->
			<div id="content">
			<!-- ═══════════════════════════════════════════════════════════
			     STATS COUNTERS BAR
			═══════════════════════════════════════════════════════════ -->
			<style>
				/* ── Trust Bar ─────────────────────────────── */
				.bf-trust-bar {
					background: #f4f6f9;
					border-bottom: 1px solid #edf0f7;
					padding: 28px 0;
				}
				.bf-trust-grid {
					display: flex;
					justify-content: center;
					align-items: stretch;
					gap: 20px;
					max-width: 1080px;
					margin: 0 auto;
					padding: 0 20px;
				}
				.bf-trust-card {
					flex: 1;
					display: flex;
					align-items: center;
					gap: 16px;
					padding: 16px 20px;
					background: #ffffff;
					border: 1px solid #e2e8f0;
					border-radius: 8px;
					box-shadow: 0 1px 3px rgba(0,0,0,0.02);
					transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
				}
				.bf-trust-card:hover {
					transform: translateY(-3px);
					box-shadow: 0 10px 20px rgba(79, 110, 247, 0.08);
					border-color: #cbd5e1;
				}
				.bf-trust-icon-container {
					width: 42px;
					height: 42px;
					border-radius: 50%;
					background: #4f6ef7;
					display: flex;
					align-items: center;
					justify-content: center;
					flex-shrink: 0;
					color: #ffffff;
					transition: transform 0.3s ease;
				}
				.bf-trust-card:hover .bf-trust-icon-container {
					transform: scale(1.08);
				}
				.bf-trust-text {
					font-size: 14px;
					font-weight: 600;
					color: #1a2340;
					line-height: 1.45;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					text-align: left;
				}

				/* ── Solutions Section ─────────────────────── */
				.bf-solutions-section {
					padding: 32px 0 40px;
					background: #fff;
				}
				.bf-solutions-header {
					text-align: center;
					margin-bottom: 24px;
				}
				.bf-solutions-subtitle {
					font-size: 13px;
					font-weight: 600;
					letter-spacing: 3.5px;
					text-transform: uppercase;
					color: #169fe6;
					margin-bottom: 8px;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
				}
				.bf-solutions-title {
					font-size: 30px;
					font-weight: 700;
					color: #1a2340;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					margin: 0;
					line-height: 1.3;
					letter-spacing: -0.3px;
				}
				.bf-solutions-divider {
					width: 52px;
					height: 3px;
					background: #169fe6;
					border-radius: 4px;
					margin: 14px auto 0;
				}
				.bf-solutions-grid {
					display: flex;
					gap: 24px;
					max-width: 1080px;
					margin: 0 auto;
					padding: 0 24px;
					flex-wrap: nowrap;
					justify-content: center;
				}
				.bf-solution-card {
					flex: 1;
					max-width: 260px;
					background-color: #ffffff;
					background-size: cover;
					background-position: center;
					background-repeat: no-repeat;
					border: 1px solid #e2e8f0;
					border-radius: 14px;
					padding: 28px 24px 24px;
					transition: all 0.4s cubic-bezier(.25,.8,.25,1);
					position: relative;
					overflow: hidden;
					display: flex;
					flex-direction: column;
					box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03), 0 2px 7px rgba(0, 0, 0, 0.01);
				}
				.bf-solution-card.card-1 {
					background-image: linear-gradient(rgba(255, 255, 255, 0.94), rgba(255, 255, 255, 0.94)), url('{{ asset("images/app_card_bg.png") }}');
				}
				.bf-solution-card.card-1:hover {
					background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('{{ asset("images/app_card_bg.png") }}');
				}
				.bf-solution-card.card-2 {
					background-image: linear-gradient(rgba(255, 255, 255, 0.94), rgba(255, 255, 255, 0.94)), url('{{ asset("images/custom_card_bg.png") }}');
				}
				.bf-solution-card.card-2:hover {
					background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('{{ asset("images/custom_card_bg.png") }}');
				}
				.bf-solution-card.card-3 {
					background-image: linear-gradient(rgba(255, 255, 255, 0.94), rgba(255, 255, 255, 0.94)), url('{{ asset("images/ai_card_bg.png") }}');
				}
				.bf-solution-card.card-3:hover {
					background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('{{ asset("images/ai_card_bg.png") }}');
				}
				.bf-solution-card.card-4 {
					background-image: linear-gradient(rgba(255, 255, 255, 0.94), rgba(255, 255, 255, 0.94)), url('{{ asset("images/consultancy_card_bg.png") }}');
				}
				.bf-solution-card.card-4:hover {
					background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('{{ asset("images/consultancy_card_bg.png") }}');
				}
				.bf-solution-card:hover {
					transform: translateY(-8px);
					box-shadow: 0 20px 40px rgba(22, 159, 230, 0.12), 0 8px 16px rgba(0, 0, 0, 0.05);
					border-color: rgba(22, 159, 230, 0.2);
				}
				.bf-card-icon {
					width: 44px;
					height: 44px;
					border-radius: 10px;
					background: rgba(22, 159, 230, 0.15);
					display: flex;
					align-items: center;
					justify-content: center;
					margin-bottom: 18px;
					transition: transform 0.3s ease, background-color 0.3s ease;
				}
				.bf-solution-card:hover .bf-card-icon {
					transform: scale(1.08);
					background-color: rgba(22, 159, 230, 0.25);
				}
				.bf-card-icon i {
					font-size: 18px;
					color: #169fe6;
					transition: color 0.3s ease;
				}
				.bf-card-title {
					font-size: 16px;
					font-weight: 700;
					color: #1a2340;
					margin-bottom: 10px;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					letter-spacing: -0.2px;
				}
				.bf-card-desc {
					font-size: 13.5px;
					line-height: 1.6;
					color: #4a5568;
					margin-bottom: 20px;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
				}
				.bf-card-link {
					display: inline-flex;
					align-items: center;
					justify-content: center;
					width: 36px;
					height: 36px;
					border-radius: 50%;
					background: #169fe6;
					color: #fff !important;
					text-decoration: none;
					transition: all 0.3s ease;
					margin-top: auto;
					align-self: flex-start;
				}
				.bf-card-link:hover {
					background: #0084c9;
					transform: scale(1.1);
				}
				.bf-card-link i {
					font-size: 14px;
					color: #fff;
					transition: transform 0.3s ease;
				}
				.bf-card-link:hover i {
					transform: translateX(2px);
				}
				.bf-card-number {
					position: absolute;
					top: 8px;
					right: 16px;
					font-size: 48px;
					font-weight: 800;
					color: rgba(26, 35, 64, 0.05);
					line-height: 1;
					user-select: none;
					pointer-events: none;
					font-family: 'Inter', sans-serif;
					transition: color 0.3s ease, transform 0.3s ease;
				}
				.bf-solution-card:hover .bf-card-number {
					color: rgba(26, 35, 64, 0.1);
					transform: translateY(-2px);
				}
				.bf-solutions-desc {
					font-size: 14.5px;
					line-height: 1.65;
					color: #5c6c84;
					max-width: 820px;
					margin: 14px auto 0;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
				}

				/* ── Why Choose Us Section ─────────────────── */
				.bf-why-section {
					padding: 65px 0;
					background: linear-gradient(135deg, #f0f4ff 0%, #f8faff 50%, #faf5ff 100%);
					position: relative;
					overflow: hidden;
				}
				.bf-why-section::before {
					content: '';
					position: absolute;
					top: -50%;
					right: -20%;
					width: 500px;
					height: 500px;
					border-radius: 50%;
					background: radial-gradient(circle, rgba(79,110,247,0.06) 0%, transparent 70%);
					pointer-events: none;
				}
				.bf-why-container {
					max-width: 1080px;
					margin: 0 auto;
					padding: 0 24px;
				}
				.bf-why-header {
					text-align: center;
					margin-bottom: 45px;
				}
				.bf-why-grid {
					display: grid;
					grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
					gap: 24px;
				}
				.bf-why-card {
					background: rgba(255,255,255,0.85);
					backdrop-filter: blur(12px);
					-webkit-backdrop-filter: blur(12px);
					border: 1px solid rgba(255,255,255,0.7);
					border-radius: 16px;
					padding: 30px 26px;
					display: flex;
					align-items: flex-start;
					gap: 18px;
					transition: all 0.35s ease;
				}
				.bf-why-card:hover {
					transform: translateY(-4px);
					box-shadow: 0 12px 32px rgba(79,110,247,0.1);
					background: rgba(255,255,255,0.95);
				}
				.bf-why-icon {
					width: 44px;
					height: 44px;
					border-radius: 12px;
					background: linear-gradient(135deg, #4f6ef7 0%, #7c3aed 100%);
					display: flex;
					align-items: center;
					justify-content: center;
					flex-shrink: 0;
				}
				.bf-why-icon i {
					font-size: 18px;
					color: #fff;
				}
				.bf-why-title {
					font-size: 16px;
					font-weight: 700;
					color: #1a2340;
					margin-bottom: 6px;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
				}
				.bf-why-desc {
					font-size: 13.5px;
					line-height: 1.6;
					color: #6b7b99;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					margin: 0;
				}

				/* ── CTA Banner ─────────────────────────────── */
				.bf-cta-banner {
					background: linear-gradient(135deg, #1a2340 0%, #2d3a6e 50%, #1a2340 100%);
					padding: 60px 0;
					text-align: center;
					position: relative;
					overflow: hidden;
				}
				.bf-cta-banner::before {
					content: '';
					position: absolute;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background: radial-gradient(ellipse at 30% 50%, rgba(79,110,247,0.15) 0%, transparent 60%),
					            radial-gradient(ellipse at 70% 50%, rgba(124,58,237,0.1) 0%, transparent 60%);
					pointer-events: none;
				}
				.bf-cta-content {
					position: relative;
					z-index: 1;
					max-width: 700px;
					margin: 0 auto;
					padding: 0 24px;
				}
				.bf-cta-title {
					font-size: 28px;
					font-weight: 700;
					color: #fff;
					margin-bottom: 14px;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					letter-spacing: -0.3px;
					line-height: 1.3;
				}
				.bf-cta-desc {
					font-size: 15px;
					color: rgba(255,255,255,0.7);
					margin-bottom: 28px;
					line-height: 1.6;
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
				}
				.bf-cta-btn {
					display: inline-flex;
					align-items: center;
					gap: 10px;
					padding: 14px 34px;
					background: linear-gradient(135deg, #4f6ef7 0%, #7c3aed 100%);
					color: #fff;
					font-size: 15px;
					font-weight: 600;
					border-radius: 50px;
					text-decoration: none;
					transition: all 0.35s ease;
					box-shadow: 0 4px 20px rgba(79,110,247,0.3);
					font-family: 'Inter', 'Century Gothic', Roboto, Arial, sans-serif;
					letter-spacing: 0.3px;
				}
				.bf-cta-btn:hover {
					transform: translateY(-2px);
					box-shadow: 0 8px 30px rgba(79,110,247,0.45);
					color: #fff;
				}

				/* ── Responsive ────────────────────────────── */
				@media (max-width: 768px) {
					.bf-trust-grid {
						flex-direction: column;
						gap: 12px;
					}
					.bf-trust-card {
						width: 100%;
					}
					.bf-solutions-grid {
						flex-direction: column;
						align-items: center;
						flex-wrap: wrap;
					}
					.bf-solution-card {
						max-width: 100%;
					}
					.bf-why-grid {
						grid-template-columns: 1fr;
					}
					.bf-cta-title {
						font-size: 22px;
					}
				}
			</style>

			<section class="bf-trust-bar">
				<div class="bf-trust-grid">
					<div class="bf-trust-card">
						<div class="bf-trust-icon-container">
							<!-- Starburst/Certificate Icon -->
							<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
								<path d="M12 1L14.07 3.32L17.11 2.76L18.23 5.64L21.2 6.22L20.89 9.27L23 11.45L21.46 14.1L22.18 17.09L19.34 18.27L18.73 21.28L15.79 20.86L14 23.36L12 21.5L10 23.36L8.21 20.86L5.27 21.28L4.66 18.27L1.82 17.09L2.54 14.1L1 11.45L3.11 9.27L2.8 6.22L5.77 5.64L6.89 2.76L9.93 3.32L12 1Z" />
							</svg>
						</div>
						<div class="bf-trust-text">
							{{ $content['trust_card_1_text']->value ?? 'Certified by NITA-Uganda' }}
						</div>
					</div>

					<div class="bf-trust-card">
						<div class="bf-trust-icon-container">
							<!-- Briefcase Icon -->
							<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
								<path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
							</svg>
						</div>
						<div class="bf-trust-text">
							{{ $content['trust_card_2_text']->value ?? '10+ years of experience in ICT solutions' }}
						</div>
					</div>

					<div class="bf-trust-card">
						<div class="bf-trust-icon-container">
							<!-- Handshake Icon -->
							<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
								<path d="M12.5 10.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm7.12-3.34l-1.92-1.92c-.78-.78-2.05-.78-2.83 0l-5.32 5.32c-.39.39-.39 1.02 0 1.41l1.41 1.41c.39.39 1.02.39 1.41 0l5.25-5.25.99.99c.78.78.78 2.05 0 2.83l-4.24 4.24c-.39.39-.39 1.02 0 1.41l1.41 1.41c.39.39 1.02.39 1.41 0l4.24-4.24c1.56-1.56 1.56-4.09 0-5.66zM7.34 11.22c.78-.78 2.05-.78 2.83 0l2.83 2.83c.78.78.78 2.05 0 2.83l-4.24 4.24c-.78.78-2.05.78-2.83 0L3.1 18.29c-.78-.78-.78-2.05 0-2.83l4.24-4.24z" />
							</svg>
						</div>
						<div class="bf-trust-text">
							{{ $content['trust_card_3_text']->value ?? 'Trusted by Organizations, schools, hospitals, SACCOs, and businesses' }}
						</div>
					</div>
				</div>
			</section>

			<!-- ═══════════════════════════════════════════════════════════
			     OUR SOLUTIONS SECTION
			═══════════════════════════════════════════════════════════ -->
			<section class="bf-solutions-section">
				<div class="bf-solutions-header">
					<h2 class="bf-solutions-title">{{ $content['solutions_title']->value ?? 'What We Do Best' }}</h2>
					<p class="bf-solutions-desc">
						{{ $content['solutions_desc']->value ?? 'At Nugsoft Technologies, we build affordable, reliable software solutions designed for schools, clinics, shops, and businesses across East Africa. Each product is built with simplicity and power in mind — so you spend less time on admin and more time growing your business.' }}
					</p>
				</div>

				<div class="bf-solutions-grid">
					@php
						$featureIcons = ['icon-rocket', 'icon-laptop', 'icon-cog', 'icon-lightbulb'];
						$featureDefaults = [
							[
								'title' => 'App Development',
								'desc' => 'We build purpose-driven mobile experiences for startups, SMEs, and...',
								'link' => 'services'
							],
							[
								'title' => 'Custom Software Development',
								'desc' => 'Tailored software that solves your real business challenges.',
								'link' => 'services'
							],
							[
								'title' => 'AI & API Integrations',
								'desc' => 'Connect your systems and automate workflows seamlessly.',
								'link' => 'services'
							],
							[
								'title' => 'ICT Consultancy',
								'desc' => 'Expert guidance to choose the right tech for your goals.',
								'link' => 'services'
							],
						];
					@endphp

					@for($i = 0; $i < 4; $i++)
						@php
							$num = $i + 1;
							$title = $content["feature_{$num}_title"]->value ?? $featureDefaults[$i]['title'];
							$desc  = $content["feature_{$num}_desc"]->value ?? $featureDefaults[$i]['desc'];
							$link  = $content["feature_{$num}_link"]->value ?? $featureDefaults[$i]['link'];
						@endphp
						<div class="bf-solution-card card-{{ $num }}">
							<div class="bf-card-number">0{{ $num }}</div>
							<div class="bf-card-icon">
								<i class="{{ $featureIcons[$i] }}"></i>
							</div>
							<div class="bf-card-title">{{ $title }}</div>
							<div class="bf-card-desc">{{ $desc }}</div>
							<a href="{{ $link }}" class="bf-card-link" aria-label="Learn More">
								<i class="icon-arrow-right"></i>
							</a>
						</div>
					@endfor
				</div>
			</section>

				@include('layouts.footer')
</body>

</html>