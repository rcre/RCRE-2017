<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf m-madding' ); ?> role="article">
				
				<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
					<section class="selling-point-grid">
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
							<?php get_template_part( 'post-formats/content-search-result' ); ?>
									
						<?php endwhile; endif; ?>

					</section>
				</div>
			</article>
		</main>
	
		<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
	</div>

</div>

<?php get_footer(); ?>
