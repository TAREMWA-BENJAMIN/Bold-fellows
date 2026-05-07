<div class="container">
	<div class="head-wrapp">
		<a href="index" id="logo"><img src="{{ asset('images/logo.png') }}" alt="Bold fellows" width="182"
				height="85" /><span></span></a>
		<!--your logo-->
		<ul class="main-menu alternative">
			<li><a href="index" title="Home" {!! (isset($active) && $active == 'home') ? 'id="current"' : '' !!}>Home</a>
			</li>
			<li><a href="about" title="About Us" {!! (isset($active) && $active == 'about') ? 'id="current"' : '' !!}>
					About Us</a>
			</li>
			<li><a href="services" title="Our Services" {!! (isset($active) && $active == 'services') ? 'id="current"' : '' !!}>Our Services</a>
				<!-- Second Level / Start -->
				<ul>
					<li><a href="app-software-development" title="App & Software Development">App & Software
							Development</a></li>
					<li><a href="software-supplies-maintenance" title="Software Supplies & Maintenance">Software
							Supplies & Maintenance</a></li>
					<li><a href="web-hosting" title="Web Hosting">Web Hosting</a></li>
					<li><a href="penetration-testing" title="Penetration Testing">Penetration Testing</a></li>
					<li><a href="it-consultancy-advisory" title="IT Consultancy & Advisory">IT Consultancy &
							Advisory</a></li>
					<li><a href="cybersecurity-services" title="Cybersecurity Services">Cybersecurity Services</a></li>
					<li><a href="services" title="All Services">All Services</a></li>
				</ul>
				<!-- Second Level / End -->
			</li>
			<li><a href="products" title="Our Products" {!! (isset($active) && $active == 'products') ? 'id="current"' : '' !!}>Products</a>
				<!-- Second Level / Start -->
				<ul>
					<li><a href="endpointsecurity" title="Endpoint Security">Endpoint Security</a></li>
					<li><a href="vulnerabilitymanagement" title="Vulnerability Management">Vulnerability Management</a>
					</li>
					<li><a href="datasecurity" title="Data Security">Data Security</a></li>
					<li><a href="personal-budgeting-planning-system" title="Personal Budgeting & planning system">Personal Budgeting & planning system</a></li>
					<li><a href="lending-saving-system" title="Lending & Saving System">Lending & Saving System</a></li>
					<li><a href="inventory-management-system" title="Inventory Management System">Inventory Management System</a></li>
					<li><a href="e-learning-system" title="E-Learning System">E-Learning System</a></li>
					<li><a href="point-of-sale-system" title="Point of Sale System">Point of Sale System</a></li>
					<li><a href="payment-processing-system" title="Payment Processing System">Payment Processing System</a></li>
					<li><a href="hospital-clinic-management-system" title="Hospital/Clinic Management System">Hospital/Clinic Management System</a></li>
					<li><a href="products" title="All Products">All Products</a></li>
				</ul>
				<!-- Second Level / End -->
			</li>
			<li><a href="contact" title="Contact Us" {!! (isset($active) && $active == 'contact') ? 'id="current"' : '' !!}>Contact</a></li>
		</ul>
		<!-- main navigation ends-->
	</div>
</div>