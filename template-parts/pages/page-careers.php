<?php
	get_template_part( 'template-parts/sections/sectionCareers' ); 
?>

<section>
	<h2 class="header-dark text-center">Open Positions</h2>
	<div class="pad-top">
		<?php rcre_get_posts( "career", "all" ); ?>
	</div>
</section>