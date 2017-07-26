<?php // Individual Blog Post ?>

<div class="m-all t-1of2 d-1of3">
	<div class="service-box">
		<img src="<?php echo(types_render_field( "post-icon", array( 'raw' => true) )); ?>" alt="Specialty">

		<h4><a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<?php // wp_trim_excerpt( the_excerpt() ); ?>

		<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">Read More...</a>
	</div>
</div>