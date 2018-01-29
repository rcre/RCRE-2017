
<?php 
	if ( types_render_field( "post-icon" ) != null ) {
		$icon = types_render_field( "post-icon", array( 'raw' => false ) );
	
	} elseif ( has_term() != null )  {
		$terms = get_the_terms( $post->ID, 'specialty' );
		if ( !empty( $terms ) ){
		    // get the first term
		    $term = array_shift( $terms );
		}
		 	$termId = $term->term_id;
            $icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));

	} else {
		$iconLink = get_stylesheet_directory_uri() . '/library/images/icons/icon-sprouting-plant.svg';
   		$icon = '<img src="'.$iconLink.'" alt="'.the_title().'">'; 
	}


	if ( has_post_thumbnail() ) {
		$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
	}
?>


<div class="search-box">
	<div style="background-image: url('<?php echo $bannerimg; ?>');">
		<div class="search-icon"><?php echo $icon; ?></div>
	</div>
	
	<div>
		<h4><?php the_title(); ?></h3>
	<?php wp_trim_excerpt( the_excerpt() ); ?>
	<hr>

	<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">Read More...</a>

	</div>
	
</div>


