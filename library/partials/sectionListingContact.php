
	<form id="ContactLanding" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

	<input type=hidden name='captcha_settings' value='{"keyname":"rcre_2018","fallback":"true","orgId":"00D15000000NClj","ts":""}'>
	
	<input id="oid" type="hidden" name="oid">
	<input type=hidden name="retURL" value="https://rcre.com/thank-you">
	
	<div class="m-all t-1of2 d-1of2">
		<label for="first_name">First Name</label>
		<input  id="first_name" name="first_name" tabindex="2" type="text" required />
	</div>

	<div class="m-all t-1of2 d-1of2 last-col">
		<label for="last_name">Last Name</label>
		<input  id="last_name" name="last_name" tabindex="3" type="text" required/>
	</div>

	<div class="m-all t-1of2 d-1of2">
		<label for="email">Email</label>
		<input  id="email" name="email" tabindex="4" type="email" required/>
	</div>

	<input type="hidden" name="lead_source" value="Web">
	<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo get_page_link(); ?>" />

	<label for="description">Tell us more about your requirements</label><textarea name="description" tabindex="9" required ></textarea>

	<input id="contact_submit" class="cta-border-green" tabindex="10" type="submit" name="submit" value="Request More Info">
</form>	


