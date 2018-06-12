<?php
	$broker_id = wpcf_pr_post_get_belongs( get_the_ID(), 'employee' );
	$broker_post = get_post( $broker_id );
	$broker_name = $broker_post->post_title;

	$profile_title = types_render_field( "profile-title", array( 'post_id' => $broker_id, 'raw' => true ) );
	$profile_link = esc_url( get_permalink( $broker_id ) );
	$profile_picture = types_render_field( "profile-picture", array( 'post_id' => $broker_id, 'raw' => true ) );
	$page_link = get_page_link();
?>

<img class="broker-profile-picture left" src="<?php echo $profile_picture; ?>" itemprop="image" alt="<?php echo $broker_name; ?>">

<div class="broker-info left">
	<h6 >
		<a href="<?php echo $profile_link; ?>">
			<span itemprop="name"><?php echo $broker_name; ?></span>
		</a>
	</h6>	

	<h5>
		<?php echo $profile_title; ?>		
	</h5>
</div>

<div class="cf">
</div>

<div id="ContactListing">
	<?php echo do_shortcode('[contact-form-7 id="5394" title="Listing Pages"]'); ?>
</div>	


