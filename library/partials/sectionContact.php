
<section id="contactUs" class="m-padding proposal-contact cf">

	<div class="pull-r-1of12 pull-l-1of12 cf">

		<form class="t-1of2 d-1of2 cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

			<input type=hidden name='captcha_settings' value='{"keyname":"rcre_website_2016","fallback":"true","orgId":"00D15000000NClj","ts":""}'>
			<input type=hidden name="oid" value="00D15000000NClj">
			<input type=hidden name="retURL" value="http://rcre.dev">

			<!--  ----------------------------------------------------------------------  -->
			<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
			<!--  these lines if you wish to test in debug mode.                          -->
			 <input type="hidden" name="debug" value=1>                             
			 <input type="hidden" name="debugEmail" value="patrick.hanus@rcre.com">   
			<!--  ----------------------------------------------------------------------  -->

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
				<input id="phone" name="phone" tabindex="4" type="tel" placeholder="xxx-xxx-xxxx" pattern="^\d{3}-\d{3}-\d{4}$" required/>
			</div>

			<label for="company">Company</label>
			<input  id="company" maxlength="40" name="company" size="20" type="text" />

			<input type="hidden" name="lead_source" value="Web">
			<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo get_page_link(); ?>" />

			<div class="m-all t-1of2 d-1of2">
				<label for="company">What do you do?</label>
				<select id="00N1500000HgSot" name="00N1500000HgSot" title="Client_type">
				<option value="">--None--</option>
				<option value="Landlord">Landlord</option>
				<option value="Occupier">Occupier</option>
				<option value="Investor">Investor</option>
				<option value="Seller">Seller</option>
				<option value="Other">Other</option>
				</select><br>
			</div>

			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="company">Industry</label>
				<select  id="00N1500000HfSlG" name="00N1500000HfSlG" title="Commercial Industry">
				<option value="">--None--</option>
				<option value="Office">Office</option>
				<option value="Industrial">Industrial</option>
				<option value="Land">Land</option>
				<option value="Retail">Retail</option>
				<option value="Property Management">Property Management</option>
				<option value="Investments">Investments</option>
				<option value="General Inquiry">General Inquiry</option>
				</select><br>
			</div>

			<label for="description">Description</label><textarea name="description"></textarea><br>

			<div class="g-recaptcha" data-sitekey="6LcbpyQUAAAAAKAjUdQypF-uVsjGbdR7VLD09QiK"></div><br>
			
			<input id="contact_submit" disabled="disabled" class="g-recaptcha cta-border-green" type="submit" name="submit" value="Submit">

		</form>	

	</div>

</section>
