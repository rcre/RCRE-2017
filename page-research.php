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
					?>

					<?php endwhile; ?>
				</div>
			</section>

			<?php else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

		</main>



		<main id="main" class="m-all t-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/LocalBusinessPosting">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="service-grid cf">
					<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
						<div class="grid cf">
							
						</div>
					</div>
					</section>


				<?php endwhile; endif; ?>
			</article>

			<footer class="cf">
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>
		</main>

		
				
				
	</div>
</div>

<?php get_footer(); ?>