<?php 
	$terms = get_the_terms( $post->ID, 'specialty' );
	$term = array_pop($terms);
	$termId = $term->term_id;
	$bannerimg = types_render_termmeta( "specialty-picture", array( "term_id" => $termId, "output" => "raw" ));
	$icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));
?>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
<script>document.getElementById('oid').value = '00D15000000NClj';</script>
		

<section id="contactUs" class="pull-r-1of12 pull-l-1of12 m-padding cf">

	<div class="cf">

		<?php get_template_part('library/partials/contentThankYou'); ?>

		<div class="contact-copy t-1of3 d-1of3 left cf text-center pad">
		
				<h2 id="contactTitle" class="text-center header-dark">
					<?php echo the_title(); ?>
				</h2>
					<?php echo $icon; ?>			
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam alias facere magni sequi voluptates perferendis aspernatur porro soluta, similique repudiandae! Soluta at mollitia culpa autem nulla sequi, doloribus voluptatum hic!</p>
					<!-- output the custom landing page description here -->
		</div>


		<form id="ContactLanding" class="t-1of2 d-1of2 right cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

			<input type=hidden name='captcha_settings' value='{"keyname":"rcre_2018","fallback":"true","orgId":"00D15000000NClj","ts":""}'>
			
			<input type=hidden name="oid" value="00D15000000NClj">
			
			<label for="company">What's your challenge?</label>
			<input  id="company" maxlength="40" tabindex="5" name="company" size="20" type="text" />

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
				<label for="square-footage">Square Footage: <span id="sfOutput"></span> SF</label>
				<div class="slidecontainer">
				  <input type="range" min="500" max="1000000" value="10000" class="slider" id="squareFootage">
				  
				</div>
			</div>
		
		
			<div class="m-all t-1of2 d-1of2">
				<label for="dock-doors">Dock Doors: <span id="dockOutput"></span></label>
				<div class="slidecontainer">
				  <input type="range" min="0" max="10" value="0" class="slider" id="dockDoors">
				</div>
			</div>




			<label for="description">Tell us more about your requirements</label><textarea name="description" tabindex="8" required ></textarea>

			<div class="g-recaptcha" data-sitekey="6LeafEEUAAAAAFhCHxYHK_CIoOVKXS2Fqlp5wkBh" data-callback="recaptcha_callback"></div>
			
			<input id="contact_submit" disabled="disabled" class="cta-border-green" tabindex="9" type="submit" name="submit" value="Submit">

		</form>	

	</div>

</section>

