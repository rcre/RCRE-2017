<?php
/*
 Template Name: Specialty Template
*/
?>

<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="cf">

			<main id="main" tabindex="-1" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/LocalBusinessPosting">
					
					<section id="Panel-1" class="specialty-drawing--<?php the_title(); ?> panel cf m-padding">
						<aside class="caption<?php echo types_render_field( "illustration-caption" , array ( "output" => 'raw' ) ); ?> m-all t-1of4 d-1of4 pull-l-1of12 right">
							<h2 class="header-dark"><?php the_title(); ?> Workflow Experience</h2>
							<p><?php echo types_render_field( "specialty-point-1" , array( 'raw' => true ) ); ?></p>
						</aside>
					</section>
					
					<section id="Panel-2" class="panel cf m-padding">
						<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left caption-top">
							<h2 class="header-dark"><?php the_title(); ?> Market Experience</h2>
							<p><?php echo types_render_field( "specialty-point-2" , array( 'raw' => true ) ); ?></p>
							
					<?php // This show the latest research report, if it exists.
					
					global $post;
					$post_slug=$post->post_name; // this is for testing, I might use this to grab the page slug

					if ( has_term( '', 'specialty' )) {
						$custom_taxterms = wp_get_object_terms( $post->ID, 'specialty', array('fields' => 'slugs'));
						$tax = 'specialty';
						$custom_field = 'slug';
					}

					$args = array(
						'post_type' => array('research-report'),
						'showposts' => 1,
						'tax_query' => array(
						    array(
						        'taxonomy' => $tax,
						        'field' => $custom_field,
						        'terms' => $custom_taxterms,
						    )
						)						
					);

					$custom_posts = new WP_Query( $args );
				
					// Start the Loop.
					if ($custom_posts->have_posts()) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post(); ?>
					
							<a title="Read the Latest Research Report" class="cta-border-gray" href="<?php echo esc_url( get_permalink() ); ?>">
								Read the Latest Report
							</a>
						
					<?php endwhile; endif;
						wp_reset_postdata();
					?>
				
						</aside>
						<div class="research-chart t-1of2 d-3of5 m-all"><img src="<?php echo get_template_directory_uri(); ?>/library/images/specialties/specialty-panel-2-graph.svg" alt="Graph Lines"></div>
					</section>
					
					<section id="Panel-3" class="panel cf m-padding">
						<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right caption-top">
							<h2 class="header-dark">A Network of Collaboration</h2>
							<p><?php echo types_render_field( "specialty-point-3" , array( 'raw' => true ) ); ?></p>
						</aside>
					</section>

				<!-- This is a PHP partial -->
				<h2 class="header-dark text-center">Everything you need. All in one Place.</h2>
					<section id="Services">
						<div class="pull-r-1of12 pull-l-1of12 cf">
							<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
						</div>
					</section>
					
				<!-- This is a wp loop for team memebers-->
				<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
					<h2 class="header-dark pad-top">The <?php the_title(); ?> Team</h2>
					<?php get_template_part('library/partials/sectionTeam'); ?>
				</section>

				<!-- This is a wp loop for Case Studies-->
					<?php get_template_part('library/partials/sectionCaseStudy'); ?>
					
					<footer class="article-footer cf">
						<?php get_template_part('library/partials/sectionContact'); ?>
					</footer>

				</article>

				<?php endwhile; endif; ?>
			</main>
		</div> <!-- End Inner Content -->
	</div> <!-- End Content -->

<?php get_footer(); ?>

