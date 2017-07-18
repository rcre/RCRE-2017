<?php
/*
 Template Name: Listing Template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all pull-l-1of12 pull-r-1of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
					/*
					 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
					 *
					 * So this function will bring in the needed template file depending on what the post
					 * format is. The different post formats are located in the post-formats folder.
					 *
					 *
					 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T A SPECIFIC POST FORMAT.
					 *
					 * If you want to remove post formats, just delete the post-formats folder and
					 * replace the function below with the contents of the "format.php" file.
					*/
					get_template_part( 'post-formats/format', get_post_format() );
				?>


				<img class="d-1of2" src="<?php echo(types_render_field( "main-property-picture", array( 'raw' => true) )); ?>" alt="<?php echo(types_render_field( "address", array( 'raw' => true) )); ?>">

				<div class="d-1of2">
					<h3><?php echo(types_render_field( "flyer-headline", array( 'raw' => true) )); ?></h3>

			<?php // Listing Address linked to Google maps ?>
					<a href="<?php echo(types_render_field( "google-maps-url", array( 'raw' => true) )); ?>" id="cta-underline-gray"><?php echo(types_render_field( "address", array( 'raw' => true) )); ?></a>

			<?php // Download Property Flyer Icon ?>
					<p>
						<a href="<?php echo(types_render_field( "property-flyer", array( 'raw' => true) )); ?>" class="cta-border-green">Download Property Flyer</a>
					</p>

			<?php // Description of Listing ?>
					<p><?php echo(types_render_field( "listing-description", array( 'raw' => true) )); ?></p>
				</div>
			
			<?php // Google Maps Url ?>
				<p><?php echo(types_render_field( "google-maps-url", array( 'raw' => true) )); ?></p>
			
			<?php // Google Maps Embed Code ?>
				<div class="d-1of2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12299.971397709642!2d-86.0427619234867!3d39.82147580676871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe195d89557631425!2sKingston+Square+Apartments!5e0!3m2!1sen!2sus!4v1500325373394" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<p><?php echo(types_render_field( "listing-features", array( 'raw' => true) )); ?></p>
			
			<?php // Brokers who are on the listing ?>
				<?php // Call Parent Post (Can I have more than one Parent post?) ?>

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
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>

	</div>

</div>

<?php get_footer(); ?>
