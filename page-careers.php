<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
					<?php
						get_template_part( 'library/partials/sectionCareers' ); 
					?>

					<section>
						<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
						<h2 class="header-dark text-center">Open Positions</h2>
						<div class="pad-top">
					
					<?php 
						$args = array(
						'post_type' => 'career',
						'post_status' => 'publish',
						'posts_per_page' => 50,
						'orderby' => 'ASC',
						);

					    $custom_team = new WP_Query( $args );
					   //var_dump($custom_team); // debugging only
					    while ( $custom_team->have_posts() ) : $custom_team->the_post(); ?>
						
						<div class="pad-top">
							<div class="header-link">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php echo the_title(); ?>
								</a>
							</div>
						</div>

						<?php // End the loop.
						endwhile; 

						wp_reset_postdata();
					?>
					</div>
					</div>
					</section>


					<?php
						get_template_part( 'post-formats/content-childSection' );
						get_template_part( 'post-formats/content-section' ); 
					?>

				</article>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>
			<?php endwhile; endif; ?>
		</main>			
	</div>
</div>

<?php get_footer(); ?>