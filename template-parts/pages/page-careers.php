<?php
	get_template_part( 'library/partials/sectionCareers' ); 
?>

<section>
	<h2 class="header-dark text-center">Open Positions</h2>
		
	<div class="pad-top">



		<?php rcre_get_posts( 'careers', 50 ) ?>
		<?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); 

			echo '<div class="pad-top"><div class="header-link"><a href="'.' echo esc_url( get_permalink() );">'. the_title() .'</a></div></div>';

		wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
			
	</div>
</section>

<?php
	get_template_part( 'post-formats/content-childSection' );
	get_template_part( 'post-formats/content-section' ); 
?>