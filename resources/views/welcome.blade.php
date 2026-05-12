<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Welcome | Bold Fellows</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.gif" />
	@include('layouts.assets')
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

			<div id="content">
				<div id="breadcrumb"><!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>Welcome to Bold Fellows</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs"><!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index">Home</a></li>
									<li>Welcome</li>
								</ul>
							</nav><!--breadcrumb nav ends -->
						</div>
					</div>
				</div><!--breadcrumbs ends -->

				<div class="container">
					<div class="one">
						<div class="home-intro">
							<h4>Welcome to Bold Fellows</h4>
							<p align="justify">
								Bold Fellows is a full-service Information Security Consulting firm offering a comprehensive range of Services and Products to help organizations protect their valuable assets.
							</p>
							<p align="justify">
								We provide unrivaled technical services, trusted advises to our clients, a role that allows us to fully understand and help our clients to achieve their organization and security objectives.
							</p>
							<a href="about" class="button color round">Learn More About Us</a>
							&nbsp;
							<a href="services" class="button grey round">Our Services</a>
						</div>
					</div>
				</div>
			</div>

			@include('layouts.footer')
		</div>
		<!-- main wrapp ends-->
	</div>
	<!-- main container ends-->
</body>

</html>
