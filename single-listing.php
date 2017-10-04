<?php
/*
 Template Name: Listing Template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemtype="http://schema.org/Product">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">
					
					<div class="m-all t-1of2 d-1of2 cf">
						<div class="center">
							<iframe
						  width="100%"
						  height="350"
						  frameborder="0"
						  src="https://www.google.com/maps?key=AIzaSyAVyvyZSwaa7p6T0z0eIYDLeSb2YNauVs8
						    &q=<?php echo(types_render_field( "address", array( 'raw' => true) )); ?>&maptype=satellite&output=embed" allowfullscreen>
							</iframe>
						</div>
						

						<a href="<?php echo(types_render_field( "property-flyer", array( 'raw' => true) )); ?>" class="cta-border-green btn-minify" target="_blank">Download Property Flyer</a>
						

						<a href="<?php echo ( types_render_field( "google-maps-url", array( 'raw' => true) )); ?>" class="cta-border-green btn-minify" target="_blank">View on Google Maps</a>
						
					</div>

					<div class="m-all t-1of2 d-1of2 cf">
						
						<?php if ( types_render_field( "flyer-headline" ) != null ) { ?>
							<h2 class="header-dark"><?php echo(types_render_field( "flyer-headline", array( 'raw' => true) )); ?></h2>
						<?php } else { ?>
							<h2 class="header-dark">Property Description</h2>
						<?php } ?>

						<p itemprop="description"><?php echo(types_render_field( "listing-description", array( 'raw' => true) )); ?></p>

						<?php if ( types_render_field( "listing-features" ) != null ) { ?>
							<h2 class="header-dark">Property Features</h2>

							<ul><?php echo(types_render_field( "listing-features", array( 'raw' => false ) )); ?></ul>
						<?php } ?>
					</div>
				
					
				</div>
			</section>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">

				<h3 class="pad-top">Property Picture</h3>

				<img class="m-1of2 t-1of2 d-1of2" src="<?php echo(types_render_field( "main-property-picture", array( 'raw' => true) )); ?>" itemprop="image" alt="<?php echo(types_render_field( "address", array( 'raw' => true) )); ?>">
				</div>
			</section>

			<section class="topic cf">
				<div class="pull-l-1of12 pull-r-1of12 pad-top cf">
				<h3>Broker</h3>
					<?php get_template_part('post-formats/author-single' ); ?>
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
