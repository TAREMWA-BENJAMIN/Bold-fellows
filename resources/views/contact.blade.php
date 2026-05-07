<!DOCTYPE html>


<!-- Mirrored from www.cybersecurityafrica.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2026 09:25:45 GMT -->
<head>
<meta charset="utf-8">
<title>Contacts | Bold Fellows</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.gif"/>
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
		
			<div id="google-map">
		<iframe width="1920" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://spatialstream.maps.arcgis.com/home/webmap/embedViewer?webmap=ec4aae22d78e4ddca6019bfc844a6cca&amp;extent=36.8016,-1.2647,36.8072,-1.2618"></iframe>
			</div>
			<div class="container">
				<section class="three-fourth">
				<form action="https://www.cybersecurityafrica.com/send_form_email" id="contact-form" class="simple-form " method="post">
							<fieldset class="one-fourth">
								<i class="icon-user"></i><input type="text" name="first_name" value="Your Name" onblur="if(this.value=='')this.value='Your Name';" onfocus="if(this.value=='Your Name')this.value='';" class="text requiredField" name="name"/>
							</fieldset>
							<fieldset class="one-fourth">
								<i class="icon-envelope"></i><input type="text" name="email" value="Your Email" onblur="if(this.value=='')this.value='Your Email';" onfocus="if(this.value=='Your Email')this.value='';" class="requiredField email" name="email"/>
							</fieldset>
							<fieldset class="one-fourth">
								<i class="icon-globe"></i><input type="text" name="website" value="Your Organization" onblur="if(this.value=='')this.value='Your Website';" onfocus="if(this.value=='Your Website')this.value='';" class="url" name="url"/>
							</fieldset>
							<fieldset class="three-fourth">
								<textarea cols="30" rows="12" name="comments" value="Your Message" onblur="if(this.value=='')this.value='Your Message';" onfocus="if(this.value=='Your Message')this.value='';" class="text requiredField" name="message"></textarea>
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
										
						<li>{{ $content['address']->value ?? 'Africa Headquarters: Nairobi, Kenya' }}</li>
						<li>{!! nl2br(e($content['phone_numbers']->value ?? "Tel: + 254 518 007 755\nSafaricom: + 254 722 102 854\nAirtel: + 254 786 629 775\nAirtel: + 254 735 002 040\nFax: + 254 202 149 857")) !!}</li>
                        <li>Email: <a href="mailto:{{ $content['email']->value ?? 'info@cybersecurityafrica.com' }}">{{ $content['email']->value ?? 'info@cybersecurityafrica.com' }}</a></li>
				  </ul>
					
				</div>
				</section>
			</div>
		</div>
								@include('layouts.footer')
</body>
</html>
