<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php get_template_part('library/partials/sectionUVP'); ?>

			<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>
				
			<section class="pull-l-1of12 pull-r-1of12 m-padding">

				<h2 class="header-dark header-margin">Read the Latest Reports</h2>
				
				<div class="selling-point-grid">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				

					<?php 
						$args = array(
							'post_type' => 'research-report',
							'post_status' => 'publish',
							'posts_per_page' => 50,
							'orderby' => 'ASC',
							);

					    $custom_team = new WP_Query( $args );
					   //var_dump($custom_team); // debugging only
					    while ( $custom_team->have_posts() ) : $custom_team->the_post();
						
						// Put the broker information in the format that is required
						get_template_part( 'post-formats/content-post' );
						
						// End the loop.
						endwhile; 

						wp_reset_postdata();
					
						endwhile; endif; 
					?>
				</div>
			</section>
		</main>
			
		<footer class="cf">
			<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
			<?php get_template_part('library/partials/sectionContact'); ?>
		</footer>

	</div>
</div>

<?php get_footer(); ?>