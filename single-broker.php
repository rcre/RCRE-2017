<?php
/*
 * BROKER PROFILE LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="cf m-padding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">

			<!-- HEADER: Broker Name, Title and Industry --> 
				<header class="profile-header m-all t-all d-all cf">
				
					<!-- Broker's Name is the Title -->
						<h1 class="h1-profile"><?php the_title(); ?>
						</h1>

					<!-- PHP Get the Broker's Title and Industry-->
						<div class="text-left">
							<?php echo types_render_field( "broker-title", array( 'raw' => false) ); ?> // <div class="header-link"> <?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?></div> 
						</div>
				
				</header>

			<!-- ASIDE: Mainly Broker Contact Information -->
				<aside class="m-all t-1of3 d-1of5 cf">
				<!-- PHP: Get the Broker's Picture URL and Industry Name-->
				
					<div class="m-1of2 t-all d-all">
				
						<!-- Profile Picture -->
						<img class="broker-profile-picture" src="<?php echo types_render_field( "broker-profile-picture", array( 'raw' => true)); ?>" alt=" <?php the_title(); ?><?php get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?> ">

						<!-- BUTTON: Contact -> PHP Link to Broker's Email -->
						<a id="cta-border-green" class="green" href="mailto:<?php echo(types_render_field( "broker-email-address", array( 'raw' => true) )); ?>">Contact</a>
					
					</div> 
				
					<!-- PHP: Broker Contact information -->
					<div class="profile-info m-1of2 t-all d-all">

						<!-- Contact information -->
						<div class="header-link email"><?php echo types_render_field( "broker-email-address", array( 'raw' => false) ); ?></div>
						
						<div class="broker-office-phone">
							<a href="tel:<?php echo types_render_field( "broker-office-phone", array( 'raw' => false) ); ?>" role="telephone"><strong>Phone:</strong> <?php echo types_render_field( "broker-office-phone", array( 'raw' => false) ); ?>
							</a>
						</div>
						
						<div class="broker-cell-phone">
							<a href="tel:<?php echo types_render_field( "broker-office-phone", array( 'raw' => false) ); ?>" role="telephone"><strong>Cell:</strong> <?php echo types_render_field( "broker-cell-phone", array( 'raw' => false) ); ?>
							</a>
						</div>
						
						<div class="license-number"><strong>License:</strong> <?php echo types_render_field( "license-number", array( 'raw' => true) ); ?></div>
						
						<!-- Link to vcard -->
						<div class="header-link download-icon-dark v-card">
							<a href="<?php echo(types_render_field( "broker_vcard", array( 'raw' => true) )); ?>">Download vCard</a>
						</div>

						<!-- Services -->
						<?php echo get_the_term_list( $post->ID, 'service', '<p id="specialty-button"></strong>', '</br> ', '</p>'); ?></a>
					</div>
				
				</aside>
			
			<!-- SECTION: Broker's Bio, Past Work, and Related Case Studies -->
				<div class="entry-content pull-r-1of12 t-7of12 d-2of3 cf">
				<!-- The Content will just be the biography -->
					<h3>Quick Look</h3>
					<p><?php echo types_render_field( "broker-quick-description", array( 'raw' => true) ); ?></p>

					<h3>History</h3>
					<p><?php echo types_render_field( "broker-history", array( 'raw' => true) ); ?></p>
					
					<h3>Past Clients</h3>
					<p><?php echo types_render_field( "past-client", array( "separator" => " | ") ); ?></p>

					<?php the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <!-- end article section -->

			<!-- SECTION: Related Case Studies -->
				<section id="case-study">
					<h3>Case Studies</h3>
					
					<div class="grid">

					<?php 
						$child_posts = types_child_posts("case-study"); 
					foreach ($child_posts as $child_post) { ?>
					
					<?php // Grab the link to the case study ?>
					<a href="<?php echo $child_post->post_title; ?>">
					<?php // Grab the image to the case study ?>
					<div class="case-study-icon">
						<?php echo types_render_field( "client-logo", array( "id"=> "$child_post->ID", "size" => "thumbnail" ));  ?>	
					</div>
					</a>

					<?php } ?>
					</div>
				</section>

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
