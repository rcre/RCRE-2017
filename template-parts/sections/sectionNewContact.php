<?php 
	$contact_form = types_render_field( "contact-form", array( 'raw' => true ));
 ?>
<section id="contactUs" class="proposal-contact">

	<div class="pad-top cf">

		<div class="t-1of2 d-1of2 cf">
		
				<div class="contact-pic-container">
					<div class="contact-pic industry--Grocery"></div>
					<div class="contact-pic industry--Restaurant"></div>
					<div class="contact-pic industry--Small-Business"></div>
				</div>

				<div class="contact-pic-container">
					<h3>Let's Get Started!</h3>

					<p>Tackle your biggest commercial real estate challenges with a team that cares. Our team is ready to help!</p>
					<p>Use our secure form or <a class="drift-open-chat cta-underline-gray" href="#">instant message us!</a></p>
				</div>
		</div>

		<div class="t-1of2 d-1of2 m-all">
			<?php echo do_shortcode( $contact_form ); ?>
		</div>
		
	</div>

</section>
