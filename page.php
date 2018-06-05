<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="cf" role="article" itemscope itemtype="http://schema.org/WebPage">
					<?php

						$page = basename(get_permalink());
						get_template_part( 'template-parts/pages/page-', $page );

						if ( is_page('about')) {
								get_template_part( 'template-parts/sections/sectionValues' );
							}
							
						get_template_part( 'template-parts/post-formats/content-childSection' );
						get_template_part( 'template-parts/post-formats/content-section' ); 
					?>
		
				</article>

				<?php get_template_part('template-parts/sections/sectionContact'); ?>
				
			<?php endwhile; endif; ?>
		
		</main>			
	</div>

	<?php get_template_part('template-parts/sections/sectionMailChimpSmall'); ?>
</div>

<?php get_footer(); ?>