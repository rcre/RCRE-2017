<?php // Individual Blog Post ?>

<div class="m-all t-1of2 d-1of3">
	<div class="service-box">
		<img src="<?php echo get_template_directory_uri(); ?><?php echo(types_render_field( "report-icon", array( 'raw' => true) )); ?>" alt="Specialty">

		<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

		<p><?php echo(types_render_field( "report-description", array( 'raw' => true) )); ?></p>

		<a class="blue-link" href="<?php the_permalink() ?>">Read More...</a>
	</div>
</div>