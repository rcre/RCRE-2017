<?php
/*
 Template Name: Listing Template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">
					<div class="m-all t-1of2 d-1of2 cf">
						
						<?php if ( types_render_field( "flyer-headline" ) != null ) { ?>
							<h2 class="header-dark"><?php echo(types_render_field( "flyer-headline", array( 'raw' => true) )); ?></h2>
						<?php } else { ?>
							<h2>Property Description</h2>
						<?php } ?>

						<p><?php echo(types_render_field( "listing-description", array( 'raw' => true) )); ?></p>

						<?php if ( types_render_field( "listing-features" ) != null ) { ?>
							<h2 class="header-dark">Property Details</h2>

							<ul><?php echo(types_render_field( "listing-features", array( 'raw' => false ) )); ?></ul>
						<?php } ?>
					</div>
				
					<div class="m-all t-1of2 d-1of2 cf">
						<!-- <iframe src="https://snazzymaps.com/embed/3893" width="100%" height="400px"></iframe> -->

						<p class="m-1of2 t-1of2 d-1of2"><a href="<?php echo(types_render_field( "property-flyer", array( 'raw' => true) )); ?>" class="cta-border-green" target="_blank">Download Property Flyer</a>
						</p>

						<p class="m-1of2 t-1of2 d-1of2"><a href="<?php echo ( types_render_field( "google-maps-url", array( 'raw' => true) )); ?>" class="cta-border-green" target="_blank">View on Google Maps</a>
						</p>
					</div>
				</div>
			</section>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">

				<h3 class="pad-top">Property Pictures</h3>

				<img class="m-1of2 t-1of2 d-1of2" src="<?php echo(types_render_field( "main-property-picture", array( 'raw' => true) )); ?>" alt="<?php echo(types_render_field( "address", array( 'raw' => true) )); ?>">
			
				<?php // Brokers who are on the listing ?>
					<?php // Call Parent Post (Can I have more than one Parent post?) ?>
				</div>
			</section>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">
				<h3>Listing Broker</h3>
					<?php get_template_part('post-formats/author-single' ) ?>
				</div>
			</section>

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
								<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
						</footer>
				</article>

			<?php endif; ?>

		</main>

		<footer class="article-footer cf">
			<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>

	</div>

</div>

<?php get_footer(); ?>
