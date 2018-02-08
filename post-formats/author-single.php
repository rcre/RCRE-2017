<!-- author-single.php -->

<section id="authorSingle" class="m-all t-all d-all" itemprop="author" itemscope itemtype="http://schema.org/Person">
	
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

	<div class="m-all t-1of3 d-1of5 pad-right cf">
		<img class="broker-profile-picture m-1of2 d-all block" src="<?php echo types_render_field( "profile-picture", array( 'post_id' => $broker_id, 'raw' => true ) ); ?>" itemprop="image" alt="<?php echo $broker_name; ?>">
		
		<a class="cta-border-green m-1of2 d-all" href="mailto:<?php echo types_render_field( "profile-email-address", array( 'post_id' => $broker_id, 'raw' => true ) ); ?>" role="button">Contact</a>
	</div> 

	<div class="m-all t-2of3 d-4of5 cf">
		<h3 class="header-dark header-link"><a href="<?php echo esc_url( get_permalink( $broker_id ) ); ?>"><span itemprop="name"><?php echo $broker_name; ?></span></a></h3>
		
		<h5><?php echo types_render_field( "profile-title", array( 'post_id' => $broker_id, 'raw' => true ) ); ?></h5>
		
		<p itempop="description"><?php echo $broker_excerpt; ?></p>

		<?php 
			echo get_the_term_list( $broker_id, 'specialty', '<div class="tag blue">', '</div><div class="tag blue">', '</div>');
			echo get_the_term_list( $broker_id, 'service', '<div class="tag gray">', '</div><div class="tag gray">', '</div>'); ?>
	</div>

</section>