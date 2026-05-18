<section class="footer-call-to-action"><!-- footer call to action starts -->
	<section class="container">
		<div class="three-fourth">
			<h4>If interested in our services or products, feel free to contact us via contact form.</h4>
		</div>
		<div class="one-fourth">
			<a href="contact" class="button grey huge round">Contact Us</a>
		</div>
	</section>
</section><!-- footer call to action ends -->
<footer id="footer" class="style-01"><!--footer starts -->
	<section class="container">
		<section class="one-third">
			<h4>About Bold Fellows</h4>

			<p>
				{{ $footerContent['about_us_text']->value ?? 'Bold Fellows is a full-service Information Security Consulting firm offering a comprehensive range of Services and Products to help organizations protect their valuable assets. We provide unrivaled technical services, trusted advises to our clients, a role that allows us to fully understand and help our clients to achieve their organization and security objectives.' }}
			</p>
		</section>
		<section class="one-third">
			<h4>Our Products</h4>
			<ul>
				<!-- latest posts widget starts-->
				<li><a href="personal-budgeting-planning-system">Cresta Plan - Planning & Budgeting system </a></li>
				<li><a href="lending-saving-system">FinancePro - Saving & loan System</a></li>
				<li><a href="point-of-sale-system">BoldPos - point of sale system</a></li>
				<li><a href="hospital-clinic-management-system">Hospital/Clinic Management System</a></li>
			</ul>
			<!-- lastest posts widget ends-->
		</section>
		<section class="one-third">
			<h4>Contact Details</h4>

			<p>Headquarter: {{ $footerContent['contact_address']->value ?? 'Africa Headquarter: Nairobi, Kenya.' }}</p>
			<p>Tel: {{ $footerContent['contact_tel']->value ?? '+ 254 518 007 755' }}</p>
			<p>MTN: {{ $footerContent['contact_safaricom']->value ?? '+ 254 722 102 854' }}</p>
			<p>Airtel: {{ $footerContent['contact_airtel']->value ?? '+ 254 786 629 775' }}</p>
			<p>Fax: {{ $footerContent['contact_fax']->value ?? '+ 254 202 149 857' }}</p>
			<p> Email: <a
					href="mailto:{{ $footerContent['contact_email']->value ?? 'info@cybersecurityafrica.com' }}">{{
					$footerContent['contact_email']->value ?? 'info@cybersecurityafrica.com' }}</a></p>
		</section>
	</section>
</footer>
<section id="copyrights">
	<section class="container">
		<div class="one-half">
			<p>
				{{ $footerContent['copyright_text']->value ?? 'Copyright Â© 2017 Bold Fellows. All Rights Reserved.' }}
			</p>
		</div>
		<div class="one-half">
			<ul class="copyright_links">
				<li><a href="index" title="Home">Home</a></li>
				<li><a href="about" title="About">About</a></li>
				<li><a href="services" title="Services">Services</a></li>
				<li><a href="products" title="Products">Products</a></li>
				<li><a href="contact" title="Contact Us">Contact</a></li>
			</ul>
		</div>
	</section>
</section>
</div>
<!-- main wrapp starts-->
</div>
<!-- main container ends-->