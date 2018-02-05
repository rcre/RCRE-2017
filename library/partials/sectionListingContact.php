<?php
	$broker_id = wpcf_pr_post_get_belongs( get_the_ID(), 'employee' );
	$broker_post = get_post( $broker_id );
	$broker_name = $broker_post->post_title;

	$profile_title = types_render_field( "profile-title", array( 'post_id' => $broker_id, 'raw' => true ) );
	$profile_link = esc_url( get_permalink( $broker_id ) );
	$profile_picture = types_render_field( "profile-picture", array( 'post_id' => $broker_id, 'raw' => true ) );
	$page_link = get_page_link();
?>

<h4>Contact:</h4>
<img class="broker-profile-picture left" src="<?php echo $profile_picture; ?>" itemprop="image" alt="<?php echo $broker_name; ?>">

<div class="broker-info left">
	<h6 >
		<a href="<?php echo $profile_link; ?>">
			<span itemprop="name"><?php echo $broker_name; ?></span>
		</a>
	</h6>	

	<h5>
		<?php echo $profile_title; ?>		
	</h5>
</div>

<div class="cf">
</div>

<form id="ContactListing cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

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

	<div class="m-all t-all d-all">
		<label for="email">Email</label>
		<input  id="email" name="email" tabindex="4" type="email" required/>
	</div>

	<input type="hidden" name="lead_source" value="Web">
	<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo $page_link; ?>" />

	<label for="description">Tell us more about your requirements</label><textarea name="description" tabindex="9" required ></textarea>

	<input id="contact_submit" class="cta-border-green" tabindex="10" type="submit" name="submit" value="Request More Info">
</form>	


