<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="cf" role="article" itemscope itemtype="http://schema.org/WebPage">
					<?php
						$page = basename(get_permalink());
						$parentID = wp_get_post_parent_id( $post->ID );
						
						if ( $parentID == 101 ) {
							get_template_part( 'template-parts/pages/page-specialty' );
						} elseif ( $parentID == 82 ) {
							get_template_part( 'template-parts/pages/page-service' );
						} else {
							if ( types_render_field( "feature-1-icon", array( 'raw' => false) ) != null ) {
								get_template_part('template-parts/sections/sectionUVP');
							}

							if ( $page == "about" ) {
								get_template_part( 'template-parts/sections/sectionValues' );
							}
							
							//get_template_part('template-parts/sections/sectionTeam');
							get_template_part( 'template-parts/pages/page', $page );
							get_template_part( 'template-parts/post-formats/content-childSection' );
							get_template_part( 'template-parts/post-formats/content-section' ); 
						}
					?>
		
				</article>

				<?php get_template_part('template-parts/sections/sectionNewContact'); ?>
				
			<?php endwhile; endif; ?>
		
		</main>			
	</div>

	<?php get_template_part('template-parts/sections/sectionMailChimpSmall'); ?>
</div>

<?php get_footer(); ?>