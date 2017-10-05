<?php 
	if ( types_render_field( "post-icon", array( 'raw' => true) ) != null ) {
		$icon = types_render_field( "post-icon", array( 'raw' => true) );
	} else {
		$icon = types_render_field( "report-icon", array( 'raw' => true) );
	} ?>

	<div class="service-box">
		<img src="<?php echo $icon; ?>" alt="Specialty">

		<h4><?php the_title(); ?></h3>
		<?php // wp_trim_excerpt( the_excerpt() ); ?>

		<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">Read More...</a>
	</div>