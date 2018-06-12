<?php 
	$caption = types_render_field( "illustration-caption" , array ( "output" => 'raw' ) );
	$point_1 = types_render_field( "specialty-point-1" , array( 'raw' => true ) );
	$point_2 = types_render_field( "specialty-point-2" , array( 'raw' => true ) );
	$point_3 = types_render_field( "specialty-point-3" , array( 'raw' => true ) );
 ?>


<section id="Panel-1" class="specialty-drawing--<?php the_title(); ?> panel cf">
	<aside class="caption<?php echo $caption; ?> m-all t-1of4 d-1of4 pull-l-1of12 right">
		<h2 class="header-dark"><?php the_title(); ?> Workflow Experience</h2>
		<p><?php echo $point_1; ?></p>
	</aside>
</section>
	
<section id="Panel-2" class="panel cf">
	<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left caption-top">
		<h2 class="header-dark"><?php the_title(); ?> Market Experience</h2>
		<p><?php echo $point_2; ?></p>
	
		<!-- Ideally we would output a recent quarterly report here -->
	</aside>
	<div class="research-chart t-1of2 d-3of5 m-all"><img src="<?php echo get_template_directory_uri(); ?>/library/images/specialties/specialty-panel-2-graph.svg" alt="Graph Lines"></div>
</section>
	
<section id="Panel-3" class="panel cf">
	<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right caption-top">
		<h2 class="header-dark">A Network of Collaboration</h2>
		<p><?php echo $point_3; ?></p>
	</aside>
</section>

<?php get_template_part('template-parts/post-formats/content-serviceDropdown'); ?>
<?php get_template_part('template-parts/sections/sectionTeam'); ?>
<?php get_template_part('template-parts/sections/sectionCaseStudy'); ?>
