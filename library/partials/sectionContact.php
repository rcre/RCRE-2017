<?php // SECTION Contact Form ?>

<section id="contactUs" class="m-padding proposal-contact cf">
	<!-- Contact Form -->
	<div class="pull-r-1of12 pull-l-1of12 cf">
		<form id="contact-home" class="t-1of2 d-1of2 cf" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

		<input type=hidden name='captcha_settings' value='{"keyname":"rcre_website_2017","theme":"dark","fallback":"true","orgId":"00D15000000NClj","ts":""}'>
		<input type=hidden name="oid" value="00D15000000NClj">
		<input type=hidden name="retURL" value="http://">

		<h2>Let's Get Started!</h2>
			<div class="m-all t-1of2 d-1of2">
				<label for="first_name">First Name</label>
				<input  id="first_name" name="first_name" tabindex="1" type="text" required="required" />
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="last_name">Last Name</label>
				<input  id="last_name" name="last_name" tabindex="2" type="text" required="required"/>
			</div>
			<div class="m-all t-1of2 d-1of2">
				<label for="email">Email</label>
				<input  id="email" name="email" tabindex="3" type="email" required="required"/>
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="phone">Phone</label>
				<input  id="phone" name="phone" tabindex="4" type="tel" />
			</div>
			<div class="m-all t-all d-all">
				<label for="company">Company</label>
				<input  id="company" name="company" tabindex="5" type="text" />
			</div>
			
			<select id="lead_source" name="lead_source">
			<option value="Web"></option>
			</select>
	

			<div class="m-all t-all d-all">
				<label for="description">How Can We Help?</label>
				<textarea name="description" tabindex="6"></textarea>
			</div>
			
			<div class="m-all t-all d-all">
				<div class="g-recaptcha" data-sitekey="6LcbpyQUAAAAAKAjUdQypF-uVsjGbdR7VLD09QiK" callback="recaptcha_callback"></div>
			</div>

			<input disabled="disabled" id="contact_submit" class="cta-border-green" type="submit" name="submit" value="Let's Get Things Done!">
		</form>
		
		<!-- Search Properties -->
		
		<form id="footer-property-search" class="t-1of3 pull-r-1of12 d-1of3 cf" action="https://" method="POST">
			<h2>Find a Property</h2>
			<label for="search">Address or Area of Interest</label>
			<input name="search" type="text" tabindex="7"/>
			<input id="cta-border-green" type="submit" name="submit" value="Search Properties">
		</form>

		<!-- Recent Case Studies -->
		<div class="t-1of3 pull-r-1of12 d-1of3 cf">
			<h2>Recent Case Studies</h2>
		</div>
		
	</div>
</section>