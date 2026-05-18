<div class="widget">
	<h4 class="widget-title">Our Services</h4>
	<ul class="sidebar-nav">
		<li class="{{ request()->is('app-software-development') ? 'active' : '' }}"><a href="app-software-development" title="App &amp; Software Development"><i class="icon-angle-right"></i>App &amp; Software Development</a></li>
		<li class="{{ request()->is('software-supplies-maintenance') ? 'active' : '' }}"><a href="software-supplies-maintenance" title="Software Supplies &amp; Maintenance"><i class="icon-angle-right"></i>Software Supplies &amp; Maintenance</a></li>
		<li class="{{ request()->is('web-hosting') ? 'active' : '' }}"><a href="web-hosting" title="Web Hosting"><i class="icon-angle-right"></i>Web Hosting</a></li>
		<li class="{{ request()->is('it-consultancy-advisory') ? 'active' : '' }}"><a href="it-consultancy-advisory" title="IT Consultancy &amp; Advisory"><i class="icon-angle-right"></i>IT Consultancy &amp; Advisory</a></li>
		<li class="{{ request()->is('cybersecurity-services') ? 'active' : '' }}"><a href="cybersecurity-services" title="Cybersecurity Assessment"><i class="icon-angle-right"></i>Cybersecurity Assessment</a></li>
	</ul>
</div>
