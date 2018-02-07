<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf m-madding' ); ?> role="article">
				
				<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
				<h2 class="header-dark pad-top"><?php the_title(); ?></h2>
				<?php get_template_part('library/partials/sectionTeam'); ?>
			</section>

				<section class="selling-point-grid">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
								
					<?php endwhile; endif; ?>

				</section>

			</article>
		</main>
	
		<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
	</div>

</div>

<?php get_footer(); ?>
