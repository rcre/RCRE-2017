<?php
/*
 * BROKER PROFILE LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-5of7 d-5of8 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

			<!-- HEADER: Broker Name, Title and Industry --> 
				<header class="profile-header">
					
				<!-- Broker's Name is the Title -->
					<h1><?php the_title(); ?>
					</h1>

				<!-- PHP Get the Broker's Title and Industry-->
					<p class="broker-title">
						<?php echo types_render_field( "broker-title", array( 'raw' => false) ); ?> // <a id="cta-underline-gray" href="<?php get_term_link( $term ); ?>"> <?php echo get_terms('specialty', array( count(1) ) ); ?></a> 
					</p>

				</header>

			
			<!-- ASIDE: Mainly Broker Contact Information -->
				<aside class="m-all t-1of3 d-2of7 cf">
				<!-- PHP: Get the Broker's Picture URL and Industry Name-->
					<img class="m-1of2 t-all d-all" src="<?php echo types_render_field( "broker-profile-picture", array( 'raw' => true)); ?>" alt="<?php the_title(); ?>, get(broker_industry)">
				
					<div class="m-1of2 t-all d-all center">
				<!-- BUTTON: Contact  -->
					<!-- PHP Link to Broker's Email -->
					<a id="cta-border-green" href="<?php echo(types_render_field( "broker_email", array( 'raw' => true) )); ?>" class="contact">Contact Broker</a>
				
				<!-- BUTTON: View Broker's Listings Button -->
					<!-- PHP: Link to Broker's Specific Listings -->
				<!-- 	<a id="cta-border-gray" href="get(broker_listings)">View Listings</a>
					</div> -->

				<!-- PHP: Broker Contact information -->
					<div class="m-1of2 service-links">
						<div class="email"><a href="mailto:get(broker_email)"></a></div>
						<div class="office-phone"><?php echo(types_render_field( "office_phone", array( 'raw' => true) )); ?></div>
						<div class="mobile-phone"><?php echo(types_render_field( "mobile_phone", array( 'raw' => true) )); ?></div>
						<div class="license-number"><?php echo(types_render_field( "license_number", array( 'raw' => true) )); ?></div>
						<div class="v-card"><i class="download"></i><a href="<?php echo(types_render_field( "broker_vcard", array( 'raw' => true) )); ?>">Download vCard</a></div>
					</div>
				
				<!-- BUTTON: Services the Broker Offers -->
					<div class="m-1of2 service-links">
					<!-- PHP: "WHILE" has service, show button for each service -->
						<!-- BUTTON: Service -->
							<!-- PHP Link to Broker's Specific Listings -->
							<?php 
								$terms = get_terms( $post->ID, 'service' );
						 
								echo '<ul>';
						 
								foreach ( $terms as $term ) {
						 
						    	// The $term is an object, so we don't need to specify the $taxonomy.
						    	$term_link = get_term_link( $term );
						    
						    	// If there was an error, continue to the next term.
						    	if ( is_wp_error( $term_link ) ) {
						        	continue;
						    	}
						 
						    // We successfully got a link. Print it out.
						    echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
						}
						 
						echo '</ul>';

						?>
					<!-- PHP End "WHILE" -->
					</div>
				</aside>
			
			<!-- SECTION: Broker's Bio, Past Work, and Related Case Studies -->
				<section class="m-all t-2of3 d-5of7 entry-content cf">

				<!-- The Content will just be the biography -->
					<?php the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <!-- end article section -->

				<footer class="article-footer">
					<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>
				</footer>

			</article>

			<?php endwhile; ?>

			<?php else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

		</main>
	</div>
</div>

<?php get_footer(); ?>
