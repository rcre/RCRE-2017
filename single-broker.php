<?php
/*
 * BROKER PROFILE LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">

			<!-- HEADER: Broker Name, Title and Industry --> 
				<header class="profile-header d-all cf">
				
					<!-- Broker's Name is the Title -->
						<h1><?php the_title(); ?>
						</h1>

					<!-- PHP Get the Broker's Title and Industry-->
						<p class="broker-title">
							<?php echo types_render_field( "broker-title", array( 'raw' => false) ); ?> // <a id="cta-underline-gray" href="<?php get_term_link( $term ); ?>"> <?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?></a> 
						</p>
				
				</header>

			<!-- ASIDE: Mainly Broker Contact Information -->
				<aside class="m-all t-1of3 d-1of6 cf">
				<!-- PHP: Get the Broker's Picture URL and Industry Name-->
				
					<div class="m-1of2 t-all d-all">
				
						<!-- Profile Picture -->
						<img src="<?php echo types_render_field( "broker-profile-picture", array( 'raw' => true)); ?>" alt=" <?php the_title(); ?><?php get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?> ">

						<!-- BUTTON: Contact -> PHP Link to Broker's Email -->
						<a id="cta-border-green" class="green" href="<?php echo(types_render_field( "broker_email", array( 'raw' => true) )); ?>">Contact Broker</a>
					
					</div> 
				
					<!-- PHP: Broker Contact information -->
					<div class="m-1of2 t-all d-all">

						<!-- Contact information -->
						<div class="email"><a href="<?php echo types_render_field( "broker-email-address", array( 'raw' => true) ); ?>"><?php echo types_render_field( "broker-email-address", array( 'raw' => false) ); ?></a></div>
						<div class="broker-office-phone"><strong>Phone:</strong> <?php echo types_render_field( "broker-office-phone", array( 'raw' => false) ); ?></div>
						<div class="broker-mobile-phone"><strong>Mobile:</strong> <?php echo types_render_field( "broker-cell-phone", array( 'raw' => false) ); ?></div>
						<div class="license-number"><strong>License :</strong> <?php echo types_render_field( "license-number", array( 'raw' => true) ); ?></div>
						
						<!-- Link to vcard -->
						<div class="v-card"><a href="<?php echo(types_render_field( "broker_vcard", array( 'raw' => true) )); ?>">Download vCard</a> <i class="fa fa-download"></i></div>

						<!-- Services -->
						<?php echo get_the_term_list( $post->ID, 'service', '<p id="specialty-button"></strong>', '</br> ', '</p>'); ?></a>
					</div>
				
				</aside>
			
			<!-- SECTION: Broker's Bio, Past Work, and Related Case Studies -->
				<section class="entry-content pull-r-1of12 t-2of3 d-2of3 cf">
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
