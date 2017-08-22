<?php // SECTION Contact Form ?>

<section id="contactUs" class="m-padding proposal-contact cf">
	<!-- Contact Form -->
	<div class="pull-r-2of12 pull-l-2of12 cf">
		

		<div class="t-1of2 d-1of2 cf">
			<img src="" alt="">
			<p>
				RESOURCE handles transactions, manages your assets and helps you secure a better cash flow. It’s like having your own personal real estate team in your briefcase.
			</p>
			<p>
				Send us a property search and we will get back to you with all your options on and off the market!
				We never share your information with third parties.
			</p>
		</div>
		

		<form id="contact-home" class="t-1of2 d-1of2 cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

		<input type=hidden name='captcha_settings' value='{"theme":"dark","fallback":"true","ts":""}'>
		<input type=hidden name="oid" value="00D15000000NClj">
		<input type=hidden name="retURL" value="<?php echo site_url().'/thank-you'; ?>">

		<h2>Find an Industrial Property</h2>
			
			<div class="m-all t-1of2 d-1of2">
				<select id="property_type" name="property_type">
					<option value="Flex"></option>
					<option value="Office"></option>
					<option value="Manufacturing"></option>
					<option value="Warehouse"></option>
					<option value="Land"></option>
				</select>
			</div>

			<div class="m-all t-1of2 d-1of2">
				<label for="full_name">City</label>
				<input  id="full_name" name="full_name" tabindex="1" type="text" required="required" />
			</div>

			<div class="m-all t-1of2 d-1of2">
				<label for="full_name">Square Feet</label>
				<input  id="full_name" name="full_name" tabindex="2" type="text" required="required" />
			</div>

			<div class="m-all t-1of2 d-1of2">
				<label for="full_name">Clear Height</label>
				<input  id="full_name" name="full_name" tabindex="3" type="text" required="required" />
			</div>

			<div class="m-all t-all d-all">
				<label for="full_name">Dock Doors</label>
				<input  id="full_name" name="full_name" tabindex="4" type="text" required="required" />
			</div>

			<div class="m-all t-all d-all">
				<label for="full_name">Drive-in Doors</label>
				<input  id="full_name" name="full_name" tabindex="5" type="text" required="required" />
			</div>


			<div class="m-all t-1of2 d-1of2">
				<label for="full_name">Your Name</label>
				<input  id="full_name" name="full_name" tabindex="6" type="text" required="required" />
			</div>
			<div class="m-all t-1of2 d-1of2">
				<label for="email">Email</label>
				<input  id="email" name="email" tabindex="7" type="email" required="required"/>
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="phone">Phone</label>
				<input  id="phone" name="phone" tabindex="8" type="tel" />
			</div>

			<select id="lead_source" name="lead_source">
			<option value="Web"></option>
			</select>

			<div class="m-all t-all d-all">
				<div class="g-recaptcha" data-sitekey="6LcbpyQUAAAAAKAjUdQypF-uVsjGbdR7VLD09QiK" data-callback="recaptcha_callback"></div>
			</div>

			<input id="contact_submit" disabled="disabled" class="g-recaptcha cta-border-green" type="submit" name="submit" value="Let's Get Things Done!">
			
		</form>
	</div>
</section>

<img src="" alt="RESOURCE Commercial Real Estate Logo">