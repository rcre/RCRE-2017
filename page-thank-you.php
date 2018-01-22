<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section id="ThankYou">
					
					<div class="pad">
						<div class="m-1of3 t-1of3 d-1of3">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-sprouting-plant.svg" alt="" />
						</div>
						<div class="m-1of3 t-1of3 d-1of3">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-property-mgmt-truck.svg" alt="" />
						</div>
						<div class="m-1of3 t-1of3 d-1of3">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-plane.svg" alt="" />
						</div>
					</div>
					
					<div class="pad">
						<h2 class="header-dark">Follow the latest industry news on social media, updated daily.</h2>

						<?php get_template_part('library/partials/outputButtons-social'); ?>
					</div>
				</section>
				
			<?php endwhile; endif; ?>
		</main>			
	</div>
</div>

<?php get_footer(); ?>