<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
				<h2 class="header-dark pad-top">The RESOURCE Team</h2>
				<?php get_template_part('library/partials/sectionTeam'); ?>
			</section>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/LocalBusinessPosting">
				<?php get_template_part('post-formats/content-childSection'); ?>
			</article>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>

			<?php endwhile; endif; ?>
		</main>	
	</div>
</div>

<?php get_footer(); ?>