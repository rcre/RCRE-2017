<!-- content-post.php -->

<?php 
	if ( types_render_field( "post-icon", array( 'raw' => true) ) != null ) {
		$icon = types_render_field( "post-icon", array( 'raw' => false ) );
	} else  {
		$terms = get_the_terms( $post->ID, 'specialty' );
		if ( !empty( $terms ) ){
		    // get the first term
		    $term = array_shift( $terms );
		}
		 	$termId = $term->term_id;
            $icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));
	}	?>

	<div class="service-box">
		<?php // echo out the icon as an image tag
			echo $icon; ?>

		<h4><?php the_title(); ?></h3>
		<?php // wp_trim_excerpt( the_excerpt() ); ?>

		<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">Read More...</a>
	</div>