<?php get_template_part('library/partials/sectionUVP'); ?>
	
<section>

	<h2 class="header-dark header-margin">Read the Latest Reports</h2>
	
	<div class="selling-point-grid">

		<?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
		
		// Magic Here
		
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>

	</div>
	
</section>