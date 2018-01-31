<script>
 function timestamp() { 
 	var response = document.getElementById("g-recaptcha-response"); 
 	if (response == null || response.value.trim() == "") {
 		var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
 		elems["ts"] = JSON.stringify(new Date().getTime());
 		document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); 
 	} 
 } 
 setInterval(timestamp, 500); 
</script>

<section id="contactUs" class="m-padding proposal-contact cf">

	<div class="pull-r-1of12 pull-l-1of12 cf">

		<div class="contact-copy t-1of2 d-5of12 left cf">
		
				<h2 id="contactTitle" class="text-center">Let's Get Started!</h2>
				
				<div class="contact-pic-container">
					<div class="contact-pic industry--Grocery"></div>
					<div class="contact-pic industry--Restaurant"></div>
					<div class="contact-pic industry--Small-Business"></div>
				</div>

				<p>Tackle your biggest commercial real estate challenges with a team that cares. Want to set up a meeting or simply talk with a professional? Our team is ready to help!</p>
		</div>


		<form id="contact-home" class="t-1of2 d-1of2 right cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

			<input type=hidden name='captcha_settings' value='{"keyname":"rcre_2018","fallback":"true","orgId":"00D15000000NClj","ts":""}'>
			
			<input id="oid" type="hidden" name="oid">
			<input type=hidden name="retURL" value="https://rcre.com/thank-you">

			<div class="m-all t-1of2 d-1of2">
				<label for="first_name">First Name</label>
				<input  id="first_name" name="first_name" tabindex="1" type="text" required />
			</div>

			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="last_name">Last Name</label>
				<input  id="last_name" name="last_name" tabindex="2" type="text" required/>
			</div>

			<div class="m-all t-1of2 d-1of2">
				<label for="email">Email</label>
				<input  id="email" name="email" tabindex="3" type="email" required/>
			</div>

			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="phone">Phone</label>
				<input id="phone" name="phone" tabindex="4" type="tel" required />
			</div>

			<label for="company">Company</label>
			<input  id="company" maxlength="40" tabindex="5" name="company" size="20" type="text" />

			<input type="hidden" name="lead_source" value="Web">
			<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo get_page_link(); ?>" />

			<div class="m-all t-1of2 d-1of2">
				<label for="company">Who are you?</label>
				<select id="00N1500000HgSot" name="00N1500000HgSot" tabindex="6" title="Client_type">
				<option value="">--Select--</option>
				<option value="Landlord">Landlord</option>
				<option value="Occupier">Occupier</option>
				<option value="Investor">Investor</option>
				<option value="Seller">Seller</option>
				<option value="Other">Other</option>
				</select>
			</div>

			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="company">Industry</label>
				<select  id="00N1500000HfSlG" name="00N1500000HfSlG" tabindex="7" title="Commercial Industry">
				<option value="">--Select--</option>
				<option value="Office">Office</option>
				<option value="Industrial">Industrial</option>
				<option value="Land">Land</option>
				<option value="Retail">Retail</option>
				<option value="Property Management">Property Management</option>
				<option value="Investments">Investments</option>
				<option value="General Inquiry">General Inquiry</option>
				</select>
			</div>

			<label for="description">How can we help you?</label>
			<textarea id="description" maxlength="400" name="description" tabindex="8" required ></textarea>

			<div class="g-recaptcha" data-theme="dark" data-sitekey="6LeafEEUAAAAAFhCHxYHK_CIoOVKXS2Fqlp5wkBh" data-callback="onSuccess"></div>
			
			<input id="contact_submit" disabled="disabled" class="cta-border-green" tabindex="9" type="submit" name="submit" value="Submit">

		</form>	

	</div>

</section>
