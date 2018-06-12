<section id="Specialties" class="cf">
	<?php
		$terms = get_terms( 'specialty' );



		foreach ( $terms as $term ) {

		    // The $term is an object, so we don't need to specify the $taxonomy.
		    $term_link = get_term_link( $term );
		    $parent = $term->parent;
		    $term_picture = types_render_termmeta( "specialty-picture", array( "term_id" => $term->term_id, "raw" => true ));

		    // If there was an error, continue to the next term.
		    if ( is_wp_error( $term_link ) ) {
		        continue;
		    }

		    if ( $parent == '0' ) {
		    	// We successfully got a link. Print it out.
		    	echo '<a href="' . esc_url( $term_link ) . '"><div class="d-1of5 t-1of2 m-all" style="background-image: url(' . $term_picture . ')">' . $term->name . '</div></a>';
		    	echo  term_description($post->ID,$term);
		    }
		}
	?>
</section>