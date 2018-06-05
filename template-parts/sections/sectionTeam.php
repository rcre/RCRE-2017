<div class="team-grid">

<?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

	// magic here

<?php wp_reset_postdata(); ?>
<?php endwhile; endif; ?>

</div>



