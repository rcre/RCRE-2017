<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">


		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<section class="pad-top m-padding">
			<div class="pull-l-1of12 pull-r-1of12 cf">
				<div class="uvp">
				<?php echo types_render_field( "excerpt" ); ?>
				</div>
			</div>
			</section>

			<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>
		

			<section class="pull-l-1of12 pull-r-1of12 m-padding cf">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="header-dark">Read the Latest Case Studies</h2>
			
					<div class="selling-point-grid">

						<?php 
							$args = array(
								'post_type' => 'case-study',
								'post_status' => 'publish',
								'posts_per_page' => 50,
								'orderby' => 'ASC',
								);

						    $custom_team = new WP_Query( $args );
						   //var_dump($custom_team); // debugging only
						    while ( $custom_team->have_posts() ) : $custom_team->the_post(); 
						    	get_template_part( 'post-formats/content-search-result' ); 
							endwhile; 

							wp_reset_postdata();
						?>
					</div>

					<?php endwhile; endif; ?>
			</section>


			<section>
				<p class="pull-l-1of12 pull-r-1of12"><strong>Note:</strong> We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
			</section>

		</main>


			
		<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
		<footer class="cf">
			<?php get_template_part('library/partials/sectionContact'); ?>
		</footer>	
				
	</div>
</div>

<?php get_footer(); ?>