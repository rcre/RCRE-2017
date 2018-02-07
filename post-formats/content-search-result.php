<!-- Search-result -->
<?php 
	$listing_closed = types_render_field( "closed-date", array( 'raw' => true) );
 ?>

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
		<div class="left tag"><?php echo $postTag; ?></div>
	</div>
	
	<div class="content">
		<?php // Get all the tags
			echo get_the_term_list( $post->ID, 'specialty', '<div class="tag blue">', '</div><div class="tag blue">', '</div>');
			echo get_the_term_list( $post->ID, 'service', '<div class="tag gray">', '</div><div class="tag gray">', '</div>');
			echo get_the_term_list( $post->ID, 'listing-type', '<div class="tag green">', '</div><div class="tag green">', '</div>'); 
		?>

		<?php // If the listing is closed, show the close date
			if ( $listing_closed != null ) { ?>
				<div class="left red tag">
					CLOSED: <?php echo date('m/d/Y', $listing_closed ); ?>
				</div>
		<?php } ?>

		<div class="cf"></div>
		<h4><?php the_title(); ?></h3>

		<?php //wp_trim_excerpt( the_excerpt() ); ?>
		<hr>
		
		<div class="text-center">
			<a class="cta-underline-blue" href="<?php esc_url( the_permalink() ); ?>">Read More</a>
		</div>
	</div>
	
</div>


