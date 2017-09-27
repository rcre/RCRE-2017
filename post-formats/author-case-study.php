
<?php 
	// Get the ID of the parent post, which belongs to the "Broker" post type
		$parent_id = wpcf_pr_post_get_belongs( get_the_ID(), 'employee' );
	// Get all the parent (broker) post data
		$parent_post = get_post( $parent_id );
	// Get the title of the parent (broker) post
		$parent_name = $parent_post->post_title;
	// Get the contents of the parent (broker) post
		$parent_content = $parent_post->post_content;
	?>

<div class="m-1of2 t-all d-all">
	<!-- Profile Picture -->
	<img class="cs-broker-pic" src="<?php echo types_render_field( "profile-picture", array( 'post_id' => $parent_id, 'raw' => true )); ?>" alt="<?php echo $parent_name; ?>">

	<h4 class="header-dark header-link"><a href="<?php echo esc_url( get_permalink( $parent_id ) ); ?>"><span itemprop="name"><?php echo $parent_name; ?></span></a></h4>

	<p><?php echo types_render_field( "profile-title", array( 'post_id' => $parent_id , 'raw' => true ) ); ?></p>
</div> 
