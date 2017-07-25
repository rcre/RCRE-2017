<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

			<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf m-madding' ); ?> role="article">

					<section class="service-grid">
						<div class="pull-l-1of12 pull-r-1of12 m-padding cf">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
								<?php get_template_part( 'post-formats/content', get_post_type() ); ?>
							
						<?php endwhile; ?>
						</div>
					</section>
							
				</article>


				<?php endif; ?>

			</main>
		<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
	</div>

</div>

<?php get_footer(); ?>
