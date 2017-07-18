<?php // SECTION The Team ?>

<?php // I need to make this show team-members based on the page it's on ?>

<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top">
	<h2 class="header-dark">The <?php the_title(); ?> Team</h2>
	
	<div class="grid">

	
	<?php // This will loop through brokers who are a part of this specialty
		
		$custom_taxterms = wp_get_object_terms( $post->ID, 'specialty', array('fields' => 'slugs'));
		// var_dump($custom_taxterms);
		$args = array(
			'post_type' => 'broker',
			'post_status' => 'publish',
			'posts_per_page' => 10,
			'orderby' => 'ASC',
			'tax_query' => array(
				    array(
				        'taxonomy' => 'specialty',
				        'field' => 'slug',
				        'terms' => $custom_taxterms
				    )
				)
			);

		    $custom_team = new WP_Query( $args );
		   //var_dump($custom_team); // debugging only
		    while ( $custom_team->have_posts() ) : $custom_team->the_post();
			
			// Put the broker information in the mini-profile template
			get_template_part( 'post-formats/content-miniProfile', get_post_type() );
			
			// End the loop.
			endwhile; 

			wp_reset_postdata();

			?>

	</div>
</section>


