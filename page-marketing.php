<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">
		
			<section class="pad-top">
				<div class="pull-l-1of12 pull-r-1of12 cf">
					<div class="uvp">
					<?php echo types_render_field( "service-main-description" ); ?>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3">
						<h5><?php echo types_render_field( "feature-1-headline" ); ?></h5>
						<p><?php echo types_render_field( "feature-1" ); ?></p>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3">
						<h5><?php echo types_render_field( "feature-2-headline" ); ?></h5>
						<p><?php echo types_render_field( "feature-2" ); ?></p>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3 right">
						<h5><?php echo types_render_field( "feature-3-headline" ); ?></h5>
						<p><?php echo types_render_field( "feature-3" ); ?></p>
					</div>
				</div>
			</section>

			<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
				<h2 class="header-dark pad-top">The Marketing Team</h2>
				<?php get_template_part('library/partials/sectionTeam'); ?>
			</section>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
			
				<?php get_template_part('post-formats/content-section'); ?>

			</article>

		<?php endwhile; endif; ?>

			<footer class="cf">
				<?php get_template_part('library/partials/sectionContact'); ?>
			</footer>
		</main>

		
				
				
	</div>
</div>

<?php get_footer(); ?>