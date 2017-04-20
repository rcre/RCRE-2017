<?php
/*
Proposal Contact Form */
?>

<section class="m-padding proposal-contact cf">
	<!-- Contact Form -->
	<div class="pull-r-1of12 pull-l-1of12 cf">
		<form id="contact-home" class="t-1of2 d-1of2 cf" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
		<h2>Let's Get Started!</h2>
			<input type=hidden name="oid" value="00D15000000NClj">
			<input type=hidden name="retURL" value="http://">
			<div class="m-all t-1of2 d-1of2">
				<label for="first_name">First Name</label>
				<input  id="first_name" name="first_name" tabindex="1" placeholder="First Name*" type="text" required="required" />
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="last_name">Last Name</label>
				<input  id="last_name" name="last_name" tabindex="2" placeholder="Last Name*" type="text" required="required"/>
			</div>
			<div class="m-all t-1of2 d-1of2">
				<label for="email">Email</label>
				<input  id="email" name="email" tabindex="3" placeholder="Email Address*" type="email" required="required"/>
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="phone">Phone</label>
				<input  id="phone" name="phone" tabindex="4" placeholder="Phone" type="tel" />
			</div>
			<div class="m-all t-all d-all">
				<label for="company">Company</label>
				<input  id="company" name="company" tabindex="5" placeholder="Company" type="text" />
			</div>
			
			<select id="lead_source" name="lead_source">
			<option value="Web"></option>
			</select>

			<div class="m-all t-all d-all">
				<label for="description">How Can We Help?</label>
				<textarea name="description" tabindex="6" placeholder="How can we help you today?"></textarea>
			</div>
			
			<input id="cta-border-green" type="submit" name="submit" value="Let's Get Things Done!">
		</form>
		
		<!-- Search Properties -->
		
		<form id="footer-property-search" class="t-1of3 pull-r-1of12 d-1of3 cf" action="https://" method="POST">
			<h2>Find a Property</h2>
			<label for="search">Address or Area of Interest</label>
			<input name="search" type="text" tabindex="7" placeholder="search"/>
			<input id="cta-border-green" type="submit" name="submit" value="Search Properties">
		</form>

		<!-- Recent Case Studies -->
		<div class="t-1of3 pull-r-1of12 d-1of3 cf">
			<h2>Recent Case Studies</h2>
		</div>
		
	</div>
</section>