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
	<style type="text/css">
		.new {
			color: #FFF;
		}

		body,
		td,
		th {
			font-family: "Century Gothic", Arial, Verdana;
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
			font-family: "Century Gothic", Roboto, arial, helvetica, sans-serif;
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
						href="{{ $content['slider_1_btn_url']->value ?? '6th-Ethiopia-Banking-ICT-Summit' }}"
						style="position: absolute; top:320px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;">{{ $content['slider_1_btn_text']->value ?? 'View Event Details' }}</a>
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

					<a href="{{ $content['slider_2_btn_url']->value ?? 'services' }}" title="Services"
						class="button huge color round ls-s8"
						style="position: absolute; top:280px; left: 490px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 1100;">{{ $content['slider_2_btn_text']->value ?? 'View Our Services' }}</a>
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
						href="{{ $content['slider_3_btn_url']->value ?? 'training' }}"
						style="position: absolute; top:310px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600;">{{ $content['slider_3_btn_text']->value ?? 'Training Courses' }}</a>
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
						href="{{ $content['slider_4_btn_url']->value ?? 'products' }}"
						style="position: absolute; top:310px; left: 400px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 800;">{{ $content['slider_4_btn_text']->value ?? 'Products Overview' }}</a>
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
						href="{{ $content['slider_5_btn_url']->value ?? 'contact' }}"
						style="position: absolute; top:310px; left: 0px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 700;">{{ $content['slider_5_btn_text']->value ?? 'Contact Us' }}</a>
				</div>
			</div>
			<!--layer slider ends-->
			<div id="content">
				<div class="home-intro"><!-- home intro starts-->
					<div class="container">
						<div class="one" style="text-align: center;">
							<h4><b>{{ $content['intro_title']->value ?? 'Cyber Security Consultancy and Training' }}</b>
							</h4>
						</div>
					</div>
				</div>
				<!--home intro ends-->
				<div class="container">
					<div class="one-third">
						<div class="feature-block"><!-- features blocks starts -->
							<div class="feature-block-title">
								<div class="feature-block-icon">
									<i class="icon-lightbulb"></i><span></span>
								</div>
								<h4>{{ $content['feature_1_title']->value ?? 'Security Consultancy' }}</h4>
								<h6>We advice, consult &amp; install</h6>
							</div>
							<p align="justify">
								{{ $content['feature_1_desc']->value ?? 'We offer a comprehensive approach to assessing the security of network systems, firewall systems, users systems and web applications against security threats.' }}
							</p>
						</div>
					</div>
					<div class="one-third">
						<div class="feature-block">
							<div class="feature-block-title">
								<div class="feature-block-icon">
									<i class="icon-desktop"></i><span></span>
								</div>
								<h4>{{ $content['feature_2_title']->value ?? 'Security Training' }}</h4>
								<h6>IT Security, Revenue Assurance</h6>
							</div>
							<p align="justify">
								{{ $content['feature_2_desc']->value ?? 'We offer practical training hands-on approach. We give our clients the   opportunity to learn in real-life situations - an approach that offers   far-reaching benefits' }}
							</p>
						</div>
					</div>
					<div class="one-third">
						<div class="feature-block">
							<div class="feature-block-title">
								<div class="feature-block-icon">
									<i class="icon-briefcase"></i><span></span>
								</div>
								<h4>{{ $content['feature_3_title']->value ?? 'Upcoming Event' }}</h4>
								<h6>IT Security, Revenue Assurance</h6>

							</div>
							<p>{{ $content['feature_3_desc']->value ?? 'This annual summit brings together retail banking industryâ€™s high profile CIOs, CTOs and COOs to explore how they can utilize...' }}
							</p>

						</div>
					</div><!--features block ends-->
				</div>
				@include('layouts.portfolio_carousel')

				@include('layouts.footer')
</body>

</html>