@php
    $sharedPortfolio = \App\Models\FrontendContent::where('section', 'Home')->get()->keyBy('key');
@endphp
<div class="intro-features"><!-- intro features panel starts -->
	<div class="container">
		<div class="slidewrap">
			<!--project carousel starts-->
			<ul class="slider" id="sliderName">
				<li class="slide"><!-- carousel item starts -->
					<div class="one-fourth">
						<div class="item-wrapp">
							<div class="portfolio-item">
								<a href="about" class="item-permalink"><i class="icon-link"></i></a>
								<img src="{{ asset($sharedPortfolio['home_portfolio_1_img']->value ?? 'images/portfolio/why-cyber-sec-africa.jpg') }}"
									alt="" />
							</div>
							<div class="portfolio-item-title">
								<a href="about" title="Why Bold Fellows">Why Bold Fellows</a>
							</div>
						</div>
					</div>

					<div class="one-fourth">
						<div class="item-wrapp">
							<div class="portfolio-item">
								<a href="services" class="item-permalink"><i class="icon-link"></i></a>
								<img src="{{ asset($sharedPortfolio['home_portfolio_2_img']->value ?? 'images/portfolio/csa-services.jpg') }}"
									alt="" />
							</div>
							<div class="portfolio-item-title">
								<a href="services" title="Our Services">Our Services</a>
							</div>
						</div>
					</div>

					<div class="one-fourth">
						<div class="item-wrapp">
							<div class="portfolio-item">
								<a href="products" class="item-permalink"><i class="icon-link"></i></a>
								<img src="{{ asset($sharedPortfolio['home_portfolio_3_img']->value ?? 'images/portfolio/csa-products.jpg') }}"
									alt="" />
							</div>
							<div class="portfolio-item-title">
								<a href="products" title="Our Products">Our Products</a>
							</div>
						</div>
					</div>

					<div class="one-fourth">
						<div class="item-wrapp">
							<div class="portfolio-item">
								<a href="contact" class="item-permalink"><i class="icon-link"></i></a>
								<img src="{{ asset($sharedPortfolio['home_portfolio_4_img']->value ?? 'images/portfolio/csa-products.jpg') }}"
									alt="" />
							</div>
							<div class="portfolio-item-title">
								<a href="contact" title="Contacts">Contacts</a>
							</div>
						</div>
					</div>
				</li>
			</ul><!-- carousel items UL ends -->
		</div>
	</div>
</div><!-- intro features panel ends -->
