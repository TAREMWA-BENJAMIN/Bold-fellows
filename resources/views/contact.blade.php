<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Contacts | Bold Fellows</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/logo.png"/>
@include('layouts.assets')
</head>
<body>
<div id="container">
	<!-- main container starts-->
	<div id="wrapp">
		<!-- main wrapp starts-->
		<header id="header" class="header-3">
		@include('layouts.header_links')
		@include('layouts.navbar', ['active' => 'contact'])
	</header>
		<!-- header ends-->
		<div id="content">
			<div id="breadcrumb"><!-- breadcrumb starts-->
				<div class="container">
					<div class="one-half">
						<h4>Contact Us</h4>
					</div>
					<div class="one-half">
						<nav id="breadcrumbs"><!--breadcrumb nav starts-->
							<ul>
								<li>You are here:</li>
								<li><a href="index">Home</a></li>
								<li>Contact</li>
							</ul>
						</nav><!--breadcrumb nav ends -->
					</div>
				</div>
			</div><!--breadcrumbs ends -->

			<div id="google-map">
				<iframe width="1920" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
					src="{{ $content['map_url']->value ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7251!2d32.5913!3d0.3356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb0b72b8bca9%3A0x1234567890abcdef!2s135%20Kira%20Rd%2C%20Kampala%2C%20Uganda!5e0!3m2!1sen!2sug!4v1715420000000' }}"
					allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="container">
				<section class="three-fourth">
					@if(session('success'))
						<div style="padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6;">
							{{ session('success') }}
						</div>
					@endif
					@if(session('error'))
						<div style="padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; color: #a94442; background-color: #f2dede; border-color: #ebccd1;">
							{{ session('error') }}
						</div>
					@endif
					@if ($errors->any())
						<div style="padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; color: #a94442; background-color: #f2dede; border-color: #ebccd1;">
							<ul style="margin: 0; padding-left: 20px;">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				<form action="{{ route('contact.submit') }}" id="contact-form" class="simple-form" method="post">
					@csrf
							<fieldset class="one-fourth">
								<i class="icon-user"></i><input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" class="text requiredField" required/>
							</fieldset>
							<fieldset class="one-fourth">
								<i class="icon-envelope"></i><input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" class="requiredField email" required/>
							</fieldset>
							<fieldset class="one-fourth">
								<i class="icon-globe"></i><input type="text" name="organization" value="{{ old('organization') }}" placeholder="Your Organization" class="text"/>
							</fieldset>
							<fieldset class="three-fourth">
								<textarea cols="30" rows="12" name="message" placeholder="Your Message" class="text requiredField" required>{{ old('message') }}</textarea>
							</fieldset>
							<div class="three-fourth">
							<div class="g-recaptcha" data-sitekey="6LcQ9xEUAAAAACq0gZmJJD_BMzXFJIdIrZMbLQRJ"></div>
								<input type="submit" value="Send message" class="button small grey round"/>
							</div>
						</form>
					
				</section>
				<section class="one-fourth sidebar right">
				<div class="widget">
					<h4 class="widget-title">Contact Information</h4>
					<ul class="simple-list">
										
						<li>{{ $content['address']->value ?? '135 Kira Rd, Kampala, Uganda' }}</li>
						<li>{!! nl2br(e($content['phone_numbers']->value ?? "Tel: +256 700 000 000")) !!}</li>
                        <li>Email: <a href="mailto:{{ $content['email']->value ?? 'boldfellows4@gmail.com' }}">{{ $content['email']->value ?? 'boldfellows4@gmail.com' }}</a></li>
				  </ul>
					
				</div>
				</section>
			</div>
		</div>
								@include('layouts.footer')
</body>
</html>
