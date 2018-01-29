<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
					<?php
						get_template_part( 'post-formats/content-childSection' );

						if ( is_page() == "about") {
							get_template_part( 'library/partials/sectionValues' );
						}
						
						get_template_part( 'post-formats/content-section' ); 
					?>
		
				</article>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>
			<?php endwhile; endif; ?>
		</main>			
	</div>
</div>

<?php get_footer(); ?>