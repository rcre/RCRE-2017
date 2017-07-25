<aside class="m-all t-all d-all">
<!-- PHP: Get the Broker's Picture URL and Industry Name-->
	<?php 
		// Get the ID of the parent post, which belongs to the "Employee" post type
			$broker_id = wpcf_pr_post_get_belongs( get_the_ID(), 'employee' );
		// Get all the parent (broker) post data
			$broker_post = get_post( $broker_id );
		// Get the title of the parent (broker) post
			$broker_name = $broker_post->post_title;
		// Get the contents of the parent (broker) post
			$broker_content = $broker_post->post_content;

			$broker_excerpt = $broker_post->post_excerpt;
		?>

	<div class="m-1of2 t-1of3 d-1of5">
		<!-- Profile Picture -->
		<img class="broker-profile-picture" src="<?php echo types_render_field( "profile-picture", array( 'post_id' => $broker_id, 'raw' => true ) ); ?>" alt="<?php echo $broker_name; ?>">
		<a id="cta-border-green" class="green" href="mailto:<?php echo types_render_field( "profile-email-address", array( 'post_id' => $broker_id, 'raw' => true ) ); ?>">Contact</a>

		<!-- BUTTON: Contact -> PHP Link to Broker's Email -->
		
	</div> 

	<div class="m-all t-2of3 d-4of5 cf">
		<h2 class="header-dark header-link"><a href="<?php echo esc_url( get_permalink( $broker_id ) ); ?>"><?php echo $broker_name; ?></a></h2>
		<h5><?php echo types_render_field( "role-title", array( 'post_id' => $broker_id, 'raw' => true ) ); ?></h5>
		<p><?php echo $broker_excerpt; ?></p>

		

		<div class="tag gray">
			<?php echo get_the_term_list( $broker_id, 'service', '', '', ''); ?>
		</div>

		<div class="tag blue">
			<?php echo get_the_term_list( $broker_id, 'specialty', '', '', ''); ?>
		</div>
		

<!-- PHP: Case Study's related broker's contact information -->
			
</aside>