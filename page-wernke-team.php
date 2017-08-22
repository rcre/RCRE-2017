<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
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

				 	<section class="pull-r-1of12 pull-l-1of12 m-padding cf">
						
						<h3>Closed</h3>

					<!-- Closed 2017 -->
						<div class="cf">
							
							<?php 
								$args = array(
									'post_type' => 'listing',
									'post_status' => 'publish',
									'posts_per_page' => 25,
									'meta_key'=>'wpcf-closed-date', 
									'orderby' => 'meta_value', 
									'order'=>'DESC'
									'tax_query' => array(
									    array(
									        'taxonomy' => 'listing-type',
									        'field' => 'slug',
									        'terms' => 'closed',
					    				)
									)
								); ?>
							
								<?php $closed_listings = new WP_Query( $args ); 
										
									while ( $closed_listings ->have_posts() ) : $closed_listings ->the_post(); ?>
										
										<?php get_template_part( 'post-formats/content-listing-closed' ); ?>
										
									<?php endwhile;  wp_reset_postdata(); ?>
						</div>
	

					<!-- Closed 2016 -->
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
									        'terms' => 'closed',
					    				)
									)
								); ?>
							
								<?php $closed_listings = new WP_Query( $args ); 
										
									while ( $closed_listings ->have_posts() ) : $closed_listings ->the_post(); ?>
										
										<?php get_template_part( 'post-formats/content-listing-closed' ); ?>
										
									<?php endwhile;  wp_reset_postdata(); ?>
						</div>

					<!-- Closed 2015 -->
						<div class="cf">
							
							<?php 
								$args = array(
									'post_type' => 'listing',
									'post_status' => 'publish',
									'posts_per_page' => 25,
									'meta_key'=>'wpcf-closed-date', 
									'orderby' => 'meta_value', 
									'order'=>'DESC',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'listing-type',
									        'field' => 'slug',
									        'terms' => 'closed',
					    				)
									)
								); ?>
							
								<?php $closed_listings = new WP_Query( $args ); 
										
									while ( $closed_listings ->have_posts() ) : $closed_listings ->the_post(); ?>
										
										<?php get_template_part( 'post-formats/content-listing-closed' ); ?>
										
									<?php endwhile;  wp_reset_postdata(); ?>
						</div>
					
					<!-- Closed 2014 -->
						
						<div class="cf">
							
							<?php 
								$args = array(
									'post_type' => 'listing',
									'post_status' => 'publish',
									'posts_per_page' => 25,
									'meta_key'=>'wpcf-closed-date', 
									'orderby' => 'meta_value', 
									'order'=>'DESC',
									'tax_query' => array(
									    array(
									        'taxonomy' => 'listing-type',
									        'field' => 'slug',
									        'terms' => 'closed',
					    				)
									)
								); ?>
							
								<?php $closed_listings = new WP_Query( $args ); 
										
									while ( $closed_listings ->have_posts() ) : $closed_listings ->the_post(); ?>
										
										<?php get_template_part( 'post-formats/content-listing-closed' ); ?>
										
									<?php endwhile;  wp_reset_postdata(); ?>
						</div>

				 	</section>
				
			</article>

		<?php endwhile; endif; ?>

			<footer class="cf">
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>
		</main>		
	</div>
</div>

<?php get_footer(); ?>




<?php 



for each $years as $year
	Display “Closed $year”
	for each $years-properties as $year-pro
















 ?>