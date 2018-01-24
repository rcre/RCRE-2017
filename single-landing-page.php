<?php
/*
 * Template: Landing Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" itemprop="Department" itemscope itemtype="http://schema.org/Service">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php 
				$terms = get_the_terms( $post->ID, 'specialty' );
				$term = array_pop($terms);
				$termId = $term->term_id;
				$bannerimg = types_render_termmeta( "specialty-picture", array( "term_id" => $termId, "output" => "raw" ));
				$icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId, "output" => "raw" ));
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" style="background-image: url('<?php echo $bannerimg; ?>');">

				<div class="text-center">
					<a itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow">
						<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo">
					</a>
				</div>

				<?php get_template_part('library/partials/sectionCustomContact'); ?>

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
