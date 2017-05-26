<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="wrap cf">

			<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
					<section id="Panel-1" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right">
							<h2 class="header-dark">Office Workflow Experience</h2>
							<p>
								Local insights of the commercial real estate landscape not only throughout the greater Indianapolis area, but the entire State of Indiana. 
							</p>
						</aside>
					</section>
					
					<section id="Panel-2" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left aside-top">
							<h2 class="header-dark"><?php the_title(); ?> Market Experience</h2>
							<p>Every market is different. Our team-based service model and extensive research, uncovers all options in the office marketplace.</p>

							<a href="<?php // Most Recent Report ?>" id="cta-underline-gray">Read the 2016 <?php the_title(); ?> Research Report</a>

						</aside>
						<div class="research-chart t-1of2 d-4of5 m-all"><img src="<?php echo get_template_directory_uri(); ?>/library/images/specialties/office/bg-office-panel-2-graph.svg" alt=""></div>
					</section>
					
					<section id="Panel-3" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right aside-top">
							<h2 class="header-dark">A Network of Collaboration</h2>
							<p>
								Need something extra for your business? No problem. At RESOURCE, You get small business personalization with corporate reach.
							</p>
						</aside>
					</section>

				<!-- This is a PHP partial -->
					<section id="Services">
						<div class="pull-r-1of12 pull-l-1of12 cf">
							<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
						</div>
					</section>
					
				<!-- This is a wp loop for team memebers-->
					<section id="SpecialtyTeam cf">
						<div class="pull-r-1of12 pull-l-1of12 cf">

							<h2 class="header-dark">The <?php the_title(); ?> Team</h2>
							
							<?php // This will loop through brokers who are a part of this specialty
							$args = array(
								'post_type' => array('broker') ,
								'Specialty' => 'office',
								'orderby' => 'DESC',							
							);

							$custom_posts = new WP_Query( $args );
							
							// Start the Loop.
							while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
								
								// Put the broker information in the mini-profile template
								get_template_part( 'post-formats/content-miniProfile', get_post_type() );
								
							// End the loop.
							endwhile; ?>

						</div>
					</section>

				<!-- This is a wp loop for Case Studies-->
					<section id="CaseStudies">
						
					</section>
					
				<!-- This should be a PHP partial -->
					<section id="RelatedServices" class="pull-r-1of12 pull-l-1of12 cf">
						<h2 class="header-dark">Related Services</h2>

						<?php // This will loop through service-pages
							$args = array(
								'post_type' => 'page' , // posts are pages only
								'service' => get_queried_object_id(), // I don't know
								'showposts' => 4, // only show 4 buttons
								'orderby' => 'rand', // randomize the services
								'tax_query' => array(
							        array(
							            'taxonomy' => 'service', // pages with the taxonomy of "service"
							            'field' => 'slug'
							        )
							    )
							);

							$custom_posts = new WP_Query( $args );
							
							// Start the Loop.
							while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
								
								// put the service information in the service-button template
								get_template_part( 'post-formats/content-serviceButton', get_post_type() );
								
							// End the loop.
							endwhile; ?>
			
					</section>

					<footer class="article-footer cf">
						<?php get_template_part('library/partials/proposalContact'); ?>
					</footer>

				</article>

				<?php endwhile; endif; ?>
			</main>
		</div> <!-- End Inner Content -->
	</div> <!-- End Content -->

<?php get_footer(); ?>

