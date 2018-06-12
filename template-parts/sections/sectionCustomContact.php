<?php 
	$terms = get_the_terms( $post->ID, 'specialty' );
	$term = array_pop($terms);
	$termId = $term->term_id;
	$bannerimg = types_render_termmeta( "specialty-picture", array( "term_id" => $termId, "output" => "raw" ));
	$icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));
?>

<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
		
<section id="contactUs">

	<div class="cf">

		<div class="contact-copy t-1of3 d-1of3 left cf text-center pad">
		
			<h2 id="contactTitle" class="text-center header-dark">
				<?php echo the_title(); ?>
			</h2>
				<?php echo $icon; ?>			
				<p><?php the_content(); ?></p>
		</div>


		<form id="ContactLanding" class="t-1of2 d-1of2 right cf" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

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

			<div class="m-all t-all d-all">
				<label for="phone">Phone</label>
				<input id="phone" name="phone" tabindex="5" type="tel" required />
			</div>

			<input type="hidden" name="lead_source" value="Web">
			<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo get_page_link(); ?>" />

		
			<div class="m-all t-1of2 d-1of2">
				<label for="squareFootage">Square Footage: <span id="sfOutput"></span> SF</label>
				<div class="slidecontainer">
				  <input name="00N1C00000Iz7sn" type="range" min="500" max="1000000" value="10000" class="slider" id="squareFootage" tabindex="7" >
				</div>
			</div>
		
			<div class="m-all t-1of2 d-1of2">
				<label for="dockDoors">Dock Doors: <span id="dockOutput"></span></label>
				<div class="slidecontainer">
				  <input name="00N1C00000Iz7ss" type="range" min="0" max="10" value="0" class="slider" id="dockDoors" tabindex="8" >
				</div>
			</div>

			<label for="contactDescription">Tell us more about your requirements</label>
			<textarea id="contactDescription" name="description" tabindex="9" required ></textarea>

			<div class="g-recaptcha" data-sitekey="6LeafEEUAAAAAFhCHxYHK_CIoOVKXS2Fqlp5wkBh" data-callback="onSuccess"></div>
			
			<input id="contact_submit" disabled="disabled" class="cta-border-green" tabindex="10" type="submit" name="submit" value="Submit">
		</form>	
	</div>
</section>