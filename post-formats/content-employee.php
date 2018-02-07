<?php // This is the template for a broker's picture, name, title and link to profile only ?>
	<?php // the div ID is the broker's name with dashes were needed ?>
	<div id="<?php echo sanitize_title_with_dashes( get_the_title() ); ?>" class="employee-post">
		
		<?php // Get the link to broker's picture and get alt text ?>
		<img class="broker-profile-picture" src="<?php echo types_render_field( "profile-picture", array( 'raw' => true)); ?>" alt="<?php echo the_title(); ?>">

		<h4><?php echo the_title(); ?></h4>
		<h5><?php echo types_render_field( "profile-title", array( 'raw' => true) ); ?></h5>
		<a id="cta-underline-gray" href="<?php echo esc_url( get_post_permalink() ); ?>" role="button">View Profile</a>
	</div>
