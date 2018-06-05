<?php 
types_render_field( "illustration-caption" , array ( "output" => 'raw' ) );
types_render_field( "specialty-point-1" , array( 'raw' => true ) );
types_render_field( "specialty-point-2" , array( 'raw' => true ) );
types_render_field( "specialty-point-3" , array( 'raw' => true ) );

 ?>


<section id="Panel-1" class="specialty-drawing--<?php the_title(); ?> panel cf m-padding">
	<aside class="caption<?php echo $caption; ?> m-all t-1of4 d-1of4 pull-l-1of12 right">
		<h2 class="header-dark"><?php the_title(); ?> Workflow Experience</h2>
		<p><?php echo $point_1; ?></p>
	</aside>
</section>
	
<section id="Panel-2" class="panel cf m-padding">
	<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left caption-top">
		<h2 class="header-dark"><?php the_title(); ?> Market Experience</h2>
		<p><?php echo $pointe_2; ?></p>
		
		<?php if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
		
		// Magic Here
		
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
	

	</aside>
	<div class="research-chart t-1of2 d-3of5 m-all"><img src="<?php echo get_template_directory_uri(); ?>/library/images/specialties/specialty-panel-2-graph.svg" alt="Graph Lines"></div>
</section>
	
<section id="Panel-3" class="panel cf m-padding">
	<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right caption-top">
		<h2 class="header-dark">A Network of Collaboration</h2>
		<p><?php echo $point_3; ?></p>
	</aside>
</section>

<section id="Services">
	<h2 class="header-dark text-center">Everything you need. All in one Place.</h2>

	<div class="pull-r-1of12 pull-l-1of12 cf">
		<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
	</div>
</section>
	
<!-- This is a wp loop for team memebers-->
<section id="SpecialtyTeam" class="cf pad-top">
	<h2 class="header-dark pad-top">The <?php the_title(); ?> Team</h2>
	<?php get_template_part('library/partials/sectionTeam'); ?>
</section>

<!-- This is a wp loop for Case Studies-->
<?php get_template_part('library/partials/sectionCaseStudy'); ?>
