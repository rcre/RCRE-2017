
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
   		$icon = '<img src="'.$iconLink.'">'; 
	}

	$postTag = get_post_type();
		if ( $postTag == 'research-report' ) {
			$postTag = "Research Report";
		} elseif ( $postTag == 'employee') {
			$postTag = "Employee";
		} elseif ( $postTag == 'case-study') {
			$postTag = "Case Study";
		} elseif ( $postTag == 'post') {
			$postTag = "Blog Post";
		}
?>

<div class="search-box">
	<div class="picture" style="background-image: url('<?php echo rcre_header_image($post); ?>');">
		<div class="left tag-no-link pad pad-top"><?php echo $postTag; ?></div>
		<div class="search-icon"><?php echo $icon; ?></div>
	</div>
	
	<div class="content">
		<h4><?php the_title(); ?></h3>
		<?php wp_trim_excerpt( the_excerpt() ); ?>
		<hr>

		<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">Read More...</a>
	</div>
	
</div>


