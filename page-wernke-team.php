<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all cf" role="main" itemscope itemprop="department" itemtype="http://schema.org/LocalBusiness">

			<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf m-padding pad-top">
					<h2 class="header-dark pad-top">The Wernke Team</h2>
					<?php get_template_part('library/partials/sectionTeam'); ?>
				</section>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
			
				<?php get_template_part('post-formats/content-section'); ?>

				 	<section class="pull-r-1of12 pull-l-1of12 m-padding cf">
						
						<h3>Listings</h3>
						<div class="cf">
					
					<?php 
						$args = array(
							'post_type' => 'listing',
							'post_status' => 'publish',
							'posts_per_page' => 25,
							'order' => 'ASC',
							'tax_query' => array(
							    array(
							        'taxonomy' => 'listing-type',
							        'field' => 'slug',
							        'terms' => 'for-sale',
			    				)
							)
						); ?>
					
						<?php $wernke_listings = new WP_Query( $args ); 
								
							while ( $wernke_listings->have_posts() ) : $wernke_listings->the_post(); ?>
								
								<?php get_template_part( 'post-formats/content' , get_post_type() ); ?>
								
							<?php endwhile;  wp_reset_postdata(); ?>
						</div>
				 	</section>

				 	<section class="pull-r-1of12 pull-l-1of12 m-padding cf">
						
						<h3>Pending</h3>
						<div class="cf">
					
					<?php 
						$args = array(
							'post_type' => 'listing',
							'post_status' => 'publish',
							'posts_per_page' => 25,
							'order' => 'ASC',
							'tax_query' => array(
							    array(
							        'taxonomy' => 'listing-type',
							        'field' => 'slug',
							        'terms' => 'under-contract',
			    				)
							)
						); ?>
					
						<?php $pending_listings  = new WP_Query( $args ); 
								
							while ( $pending_listings->have_posts() ) : $pending_listings->the_post(); ?>
								
								<?php get_template_part( 'post-formats/content' , get_post_type() ); ?>
								
							<?php endwhile;  wp_reset_postdata(); ?>
						</div>
				 	</section>

				<!-- New closed Experiment-->
				 	<section class="pull-r-1of12 pull-l-1of12 m-padding cf">
			    		<h3>Closed</h3>

				 		<div class="cf">
							
							<?php 
								$args = array(
									'post_type' => 'listing',
									'post_status' => 'publish',
									'posts_per_page' => 200,
									'order' => 'DESC',
									'orderby' => 'meta_value',
									'meta_key'  => 'wpcf-closed-date',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'listing-type',
									        'field' => 'slug',
									        'terms' => 'closed',
					    				)
									)
								); 
						    
						    	$closed_listings = new WP_Query( $args ); 
						   		$year_variable = '';
								
							while ( $closed_listings ->have_posts() ) : $closed_listings ->the_post();
								echo '<div class="cf">';
								// Load the custom_date meta field
					    		$custom_date = get_post_meta( get_the_ID(), 'wpcf-closed-date', true );
					    		
							    // Turn it into a string that only displays the year
							    $post_year = date('Y', $custom_date);
					   
							    /** 
							     * Compare the current post's date with our $year_variable and
							     * display the year value if the two dates differs
							     */
							    if ( $year_variable !== $post_year ) {
							    	// If the year is different than the post year output the closing div to the year
							    	// Also output the new year title and a horizontal line
							        echo '</div><h4>' . $post_year . '</h4><hr>';

							        // Output the listing as a post
							    	get_template_part( 'post-formats/content-listing-closed' );

								    // Update the $year_variable value
								    $year_variable = $post_year;

								} else {
									// If year does equal post year, just output the listing as a post
									get_template_part( 'post-formats/content-listing-closed' );
								}
					
									wp_reset_postdata();
								?>

							<?php endwhile;   ?>
							</div> <?php // This is the closing div for the last year section ?>
						</div>
				 	</section>

				 	<section class="cs-section cf">
					<p class="d-all m-all t-all"><strong>Note:</strong> Additional past projects are available upon request.</p>
				</section>
				
			</article>

		<?php endwhile; endif; ?>
			
		</main>

		<footer class="cf">
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>
				
				
	</div>
</div>

<?php get_footer(); ?>