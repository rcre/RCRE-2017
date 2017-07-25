<?php // SECTION The Team ?>

<?php // I need to make this show team-members based on the page it's on ?>

<div class="grid">


<?php // This will loop through brokers who are a part of this specialty

	global $post;
	$post_slug=$post->post_name; // this is for testing, I might use this to grab the page slug

	if ( has_term( '', 'specialty' )) {
		$custom_taxterms = wp_get_object_terms( $post->ID, 'specialty', array('fields' => 'slugs'));
		$tax = 'specialty';
	
	} elseif ( has_term( '', 'service' ) ) {
		$custom_taxterms = wp_get_object_terms( $post->ID, 'service', array('fields' => 'slugs'));
		$tax = 'service';
	
	} elseif ( has_term( '', 'teams' ) ) {
		$custom_taxterms = wp_get_object_terms( $post->ID, 'teams', array('fields' => 'slugs'));
		$tax = 'teams';
	}

	$args = array(
		'post_type' => 'employee',
		'post_status' => 'publish',
		'posts_per_page' => 50,
		'orderby' => 'ASC',
		'tax_query' => array(
			    array(
			        'taxonomy' => $tax,
			        'field' => 'slug',
			        'terms' => $custom_taxterms
			    )
			)
		);

	    $custom_team = new WP_Query( $args );
	   //var_dump($custom_team); // debugging only
	    while ( $custom_team->have_posts() ) : $custom_team->the_post();
		
		// Put the broker information in the format that is required
		get_template_part( 'post-formats/content', get_post_type() );
		
		// End the loop.
		endwhile; 

		wp_reset_postdata();

		?>

</div>



