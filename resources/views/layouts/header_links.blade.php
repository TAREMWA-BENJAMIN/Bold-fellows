<div id="header-links">
	<div class="container">
		<div class="one-half">
			<ul class="contact-links">
				<!-- header social links starts-->
				<li><a href="#"><i class="icon-home"></i>{{ $headerContent['header_address']->value ?? 'Headquarter: Kampala, Uganda' }}</a></li>

				<li><a href="mailto:{{ $headerContent['header_email']->value ?? 'boldfellows4@gmail.com' }}"><i class="icon-envelope"></i>{{ $headerContent['header_email']->value ?? 'boldfellows4@gmail.com' }}</a>
				</li>
			</ul>
		</div>
		<div class="one-half">
			<ul class="social-links">
				<!-- header social links starts-->
				<li><a href="{{ $headerContent['social_twitter']->value ?? 'https://twitter.com/cybersecafrica' }}" class="tooltip" title="Twitter"><i
							class="icon-twitter"></i></a></li>
				<li><a href="{{ $headerContent['social_facebook']->value ?? '#' }}" class="tooltip" title="Facebook"><i class="icon-facebook"></i></a></li>
				<li><a href="{{ $headerContent['social_linkedin']->value ?? 'http://www.linkedin.com/company/cyber-security-africa' }}"
						class="tooltip" title="LinkedIn"><i class="icon-linkedin"></i></a></li>


			</ul>
			<!--header social links ends -->
		</div>
	</div>
</div>