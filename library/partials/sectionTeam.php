<?php // SECTION The Team ?>

<?php // I need to make this show team-members based on the page it's on ?>

<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf">
	<h2 class="header-dark">The <?php the_title(); ?> Team</h2>
	
	<div class="grid">

	
	<?php // This will loop through brokers who are a part of this specialty

		$args = array(
				
			'post_type' => 'broker',
			'tax_query' => array(
			        'taxonomy' => 'service',
			        'field' => 'slug'
			     )
			);
			
		$custom_team = new WP_Query( $args );
		
		// Start the Loop.
		while ( $custom_team->have_posts() ) : $custom_team->the_post();
			
			// Put the broker information in the mini-profile template
			get_template_part( 'post-formats/content-miniProfile', get_post_type() );
			
		// End the loop.
		endwhile; ?>

	</div>
</section>


