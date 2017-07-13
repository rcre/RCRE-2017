<?php // Individual Blog Post ?>

<div class="m-all t-1of2 d-1of3">
	<div class="service-box">
		<?php echo(types_render_field( "report-type", array( 'raw' => true) )); ?>

		<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

		<p><?php echo(types_render_field( "report-description", array( 'raw' => true) )); ?></p>

		<a class="blue-link" href="<?php the_permalink() ?>">Read More...</a>
	</div>
</div>