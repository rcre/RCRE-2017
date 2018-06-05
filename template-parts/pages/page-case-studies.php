<section class="pad-top">
	<div class="uvp">
		<?php echo types_render_field( "excerpt" ); ?>
	</div>
</section>

<section>
	<h2 class="header-dark">Read the Latest Case Studies</h2>
	
	<div class="selling-point-grid">
	
		<?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			// magic here
		
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
	
	</div>
	
</section>

<section>
	<h4>Note</h4>
	<p>We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
</section>