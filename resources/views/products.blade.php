<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title>Products | Bold Fellows</title>
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
				@include('layouts.navbar', ['active' => 'products'])
			</header>
			<!-- header ends-->
			<div id="content">
				<div id="breadcrumb">
					<!-- breadcrumb starts-->
					<div class="container">
						<div class="one-half">
							<h4>Products</h4>
						</div>
						<div class="one-half">
							<nav id="breadcrumbs">
								<!--breadcrumb nav starts-->
								<ul>
									<li>You are here:</li>
									<li><a href="index" title="Home">Home</a></li>
									<li><a href="products" title="Products">Products</a></li>
								</ul>
							</nav>
							<!--breadcrumb nav ends -->
						</div>
					</div>
				</div>
				<!--breadcrumbs ends -->
				<div class="container">
					<div class="one">
						<div class="three-fourth">
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="endpointsecurity" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_1_img']->value ?? 'images/blog/endpoint.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="endpointsecurity"
											title="End Point Security">{{ $content['product_1_title']->value ?? 'End Point Security' }}</a>
									</h4>

									<p align="justify">
										{{ $content['product_1_desc']->value ?? 'Bold Fellows through our partners provides intrusion prevention systems that identify possible intrusions to your network and stops them, preventing further risk. Features include: blocks dangerous communications can protect against dangerous peer-to-peer and instant messaging communications; - easy-to-use browser-based interface. - inspect incoming emails for a variety of threats, including email viruses,spam, spyware, and phishing attacks.' }}
									</p>
									<p>
										<a href="endpointsecurity" class="button color-alt small round">Read More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="intrusion-prevention" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_2_img']->value ?? 'images/blog/intrusion-prevention.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a
											href="intrusion-prevention">{{ $content['product_2_title']->value ?? 'Intrusion Prevention Systems' }}</a>
									</h4>

									<p align="justify">
										{{ $content['product_2_desc']->value ?? 'Bold Fellows through our partners provides intrusion prevention systems that identify possible intrusions to your network and stops them, preventing further risk. Features of the IPS include: blocks dangerous communications can protect against dangerous peer-to-peer and instant messaging communications easy-to-use browser-based interface. inspect incoming emails for a variety of threats, including email viruses,spam, spyware, and phishing attacks.' }}
									</p>
									<p>
										<a href="intrusion-prevention" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="flexslider portfolio-items-slider slide">
											<ul class="slides">
												<li><img src="{{ asset($content['product_3_img']->value ?? 'images/blog/vulnerability-assessment.jpg') }}" alt="" /></li>
												<li><img src="{{ asset($content['product_2_img']->value ?? 'images/blog/intrusion-prevention.jpg') }}" alt="" /></li>
												<li><img src="{{ asset($content['product_3_img']->value ?? 'images/blog/vulnerability-assessment.jpg') }}" alt="" /></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="vulnerabilitymanagement"
											title="Vulnerability Management">{{ $content['product_3_title']->value ?? 'Vulnerability Management' }}</a>
									</h4>
									<p align="justify">
										{{ $content['product_3_desc']->value ?? 'Network security breaches are most commonly caused by missing network patches.Patch management is vital to your business. Bold Fellows through our partners provide appliances that scans and detects network vulnerabilities before they are exposed, reducing the time required to patch machines on your network.' }}
									</p>
									<p>
										<a href="vulnerabilitymanagement" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="full-disk-encryption" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_4_img']->value ?? 'images/blog/full-disk.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="full-disk-encryption" title="Full Disk Encryption">Full disk
											encryption</a></h4>

									<p align="justify">
										We ensure data privacy by encrypting data stored on your endpoints especially
										laptops,Mobile Phones, IPads, tablets, DVDs, and USB drives, which can easily be
										lost or stolen. Endpoint Encryption provides the data security you need with
										full disk encryption, folder and file encryption, and removable media
										encryption.
									</p>
									<p>
										<a href="full-disk-encryption" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>

							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="source-code-analysis" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_5_img']->value ?? 'images/blog/source-code.jpg') }}" alt="" />
										</div>
									</div>

								</div>
								<div class="permalink">
									<h4><a href="source-code-analysis">Source Code Analysis</a></h4>
									<p align="justify">Static code analysis delivers security and the requirement of
										incorporating security into the software development lifecycle . It is the only
										proven method to cover the entire code base and identify all the vulnerable
										patterns using static code analysis tools. In static code analysis the entire
										code base is abstracted and all code properties and code flows are exposed. We
										goe beyond all other static code analysis tools and store all these code... </p>

									<p>
										<a href="source-code-analysis" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="network-access-control" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_6_img']->value ?? 'images/blog/network-access-control.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="network-access-control">Network Access Control Systems</a></h4>

									<p align="justify">
										NAC is ideal for corporations and agencies where the user environment can be
										rigidly controlled. It is also called network admission control, a method of
										bolstering the security of a proprietary network by restricting the availability
										of network resources to endpoint devices that comply with a defined security
										policy.

									</p>
									<p>
										<a href="network-access-control" class="button color-alt small round">Read
											More</a>
									</p>
								</div>

							</div>

							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="media-holder">
											<div class="item-wrapp">
												<div class="blog-item small">
													<a href="siem-management" class="item-permalink"><i
															class="icon-link"></i></a>

													<img src="{{ asset($content['product_7_img']->value ?? 'images/blog/siem-management.jpg') }}" alt="" />
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="siem-management">SIEM Management</a></h4>
									<p align="justify">
										SIEM consolidates log source event data from thousands of devices endpoints and
										applications distributed throughout a network. It performs immediate
										normalization and correlation activities on raw data to distinguish real threats
										from false positives. As an option, this software supplies a list of potentially
										malicious IP addresses including malware hosts, spam sources and other threats.
									</p>
									<p>
										<a href="siem-management" class="button color-alt small round">Read More</a>
									</p>
								</div>
							</div>
							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="computer-forensics" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_8_img']->value ?? 'images/blog/computer-forensic-equipment.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="computer-forensics">Computer Forensics Equipment</a></h4>

									<p align="justify">
										Designed for Field Application, this Computer Forensic Portable Lab is used by
										Law Enforcement Agencies as well as Corporate Security to acquire data and
										analyze data in the field. It can be used to image hard drives of any kind as
										well as capturing data from other media and unopened computers, and supports
										different copy formats and hashing methods.
									</p>
									<p>
										<a href="computer-forensics" class="button color-alt small round">Read More</a>
									</p>
								</div>
							</div>

							<div class="blog-post layout-2">
								<div class="media-holder">
									<div class="item-wrapp">
										<div class="blog-item small">
											<a href="computer-forensics" class="item-permalink"><i
													class="icon-link"></i></a>

											<img src="{{ asset($content['product_9_img']->value ?? 'images/blog/mobile-forensics.jpg') }}" alt="" />
										</div>
									</div>
								</div>
								<div class="permalink">
									<h4><a href="computer-forensics">Mobile Forensics Equipment</a></h4>

									<p align="justify">
										Bold Fellows Mobile Forensic team are able to extract key evidence from cellular
										phones, Smartphones, PDAâ€™s, GPS units and other mobile devices. Using
										specialized software and equipment designed specifically for advanced cell phone
										forensics, We are able to extract active and deleted data from many cell phones
										on the market today.
									</p>
									<p>
										<a href="mobile-phone-forensics" class="button color-alt small round">Read
											More</a>
									</p>
								</div>
							</div>


							<!-- Pagination -->
							<nav class="pagination">

								<div class="clearfix">
								</div>
							</nav>
							<!-- End pagination -->
						</div>
						<div class="one-fourth sidebar right">
							<div class="widget">
								<h4 class="widget-title">Our Products</h4>
								<ul class="sidebar-nav">
									<li><a href="endpointsecurity" title="End Point Security"><i
												class="icon-angle-right"></i>End Point Security</a></li>
									<li><a href="vulnerabilitymanagement" title="Vulnerability Management"><i
												class="icon-angle-right"></i>Vulnerability Management</a></li>

									<li><a href="intrusion-prevention" title="Intrusion Prevention Systems"><i
												class="icon-angle-right"></i>Intrusion Prevention Systems</a></li>

									<li><a href="full-disk-encryption" title="Full Disk Encryption"><i
												class="icon-angle-right"></i>Full Disk Encryption</a></li>
									<li><a href="source-code-analysis" title="Source Code Analysis"><i
												class="icon-angle-right"></i>Source Code Analysis</a></li>
									<li><a href="network-access-control" title="Network Access Control Systems"><i
												class="icon-angle-right"></i>Network Access Control Systems</a></li>
									<li><a href="computer-forensics" title="Computer Forensics Equipment"><i
												class="icon-angle-right"></i>Computer Forensics Equipment</a></li>
									<li><a href="mobile-forensics" title="Mobile Forensics Equipment"><i
												class="icon-angle-right"></i>Mobile Forensics Equipment</a></li>
									<li><a href="siem-management" title="SIEM Management"><i
												class="icon-angle-right"></i>SIEM Management</a></li>
								</ul>
							</div>
							<div class="widget">
								<h4 class="widget-title">About the Company</h4>
								<p>
									We provide unrivaled technical services, trusted advises to our clients, a role that
									allows us to fully understand and help our clients to achieve their organization and
									security objectives. The nature and scope of the Information Security field has
									evolved over the past several years, no longer are we just concerned with protecting
									the technical edifice.
								</p>
							</div>
							<div class="widget">
								<h4 class="widget-title">Services Quick Links</h4>
								<ul class="sidebar-nav">
									<li><a href="penetration-testing" title="Penetration Testing"><i
												class="icon-angle-right"></i>Penetration Testing</a></li>
									<li><a href="web-app-penetration-testing" title="Web App Penetration Testing"><i
												class="icon-angle-right"></i>Web App Penetration Testing</a></li>

									<li><a href="network-security-assessment" title="Network Security Assesment"><i
												class="icon-angle-right"></i>Network Security Assesment</a></li>
									<li><a href="fraud-investigation-services" title="Fraud Investigation Services"><i
												class="icon-angle-right"></i>Fraud Investigation Services</a></li>
									<li><a href="mobile-phone-forensics" title="Mobile Phone Forensics Services"><i
												class="icon-angle-right"></i>Mobile Phone Forensics Services</a></li>
									<li><a href="computer-forensics-services" title="Computer Forensics Services"><i
												class="icon-angle-right"></i>Computer Forensics Services</a></li>
									<li><a href="it-governance" title="IT Governance"><i class="icon-angle-right"></i>IT
											Governance</a></li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
</body>

</html>