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
			
			<section class="service-grid">

				<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2 class="header-dark">Read the Latest Case Studies</h2>
				
				<section class="case-study-grid">

				<?php 
					$args = array(
						'post_type' => 'case-study',
						'post_status' => 'publish',
						'posts_per_page' => 50,
						'orderby' => 'ASC',
						);

					    $custom_team = new WP_Query( $args );
					   //var_dump($custom_team); // debugging only
					    while ( $custom_team->have_posts() ) : $custom_team->the_post(); ?>
						
						
							<div class="pad-top">
								
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<div class="case-study-icon">
									<img src="<?php echo types_render_field( "client-logo", array( 'output' => 'raw' ));  ?>" alt="Client Logo">	
									</div>
								</a>

								<div class="tag gray pad-top">
									<?php echo get_the_term_list( '', 'service', '', '', ''); ?>
								</div>

								<div class="tag blue pad-top">
									<?php echo get_the_term_list( '', 'specialty', '', '', ''); ?>
								</div>
							</div>
						

						<?php // End the loop.
						endwhile; 

						wp_reset_postdata();
					?>
				</section>

					<?php endwhile; ?>
				</div>


			</section>

			<section>
				<p class="pull-l-1of12 pull-r-1of12"><strong>Note:</strong> We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
			</section>

			<?php else : ?>

					<article id="post-not-found" class="cf">
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