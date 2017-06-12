<?php
/*
 Template Name: Service Template
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


		<?php // This is the main description of the service and what it provides ?>
			<section class="m-padding">
				<div class="pull-l-1of12 pull-r-1of12 cf">
					<div class="uvp pull-l-1of12 pull-r-1of12">
						<p><?php echo(types_render_field( "service-main-description", array( 'raw' => true) )); ?></p>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3">
						<h5><?php echo(types_render_field( "feature-1-headline", array( 'raw' => true) )); ?></h5>
						<p><?php echo(types_render_field( "feature-1", array( 'raw' => true) )); ?></p>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3">
						<h5><?php echo(types_render_field( "feature-2-headline", array( 'raw' => true) )); ?></h5>
						<p><?php echo(types_render_field( "feature-2", array( 'raw' => true) )); ?></p>
					</div>
					<div class="selling-point m-all t-1of3 d-1of3 right">
						<h5><?php echo(types_render_field( "feature-3-headline", array( 'raw' => true) )); ?></h5>
						<p><?php echo(types_render_field( "feature-3", array( 'raw' => true) )); ?></p>
					</div>
				</div>
			</section>


		<?php // Service that come with using RESOURCE ?>
			<h2 class="header-dark text-center">Everything you need. All in one Place.</h2>
			<!-- This is a PHP partial -->
			<section class="cf">
				<div class="pull-r-1of12 pull-l-1of12 cf">
					<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
				</div>
			</section>

		<!-- This is a wp loop for team memebers-->
			<section id="SpecialtyTeam cf">
			<h2 class="header-dark">The <?php the_title(); ?> Team</h2>
				
				<div class="pull-r-1of12 pull-l-1of12 grid">

				
					<?php // This will loop through brokers who are a part of this specialty
					$args = array(
						'post_type' => array('broker') ,
						'service' => 'owner-representation',
						'orderby' => 'DESC',							
					);

					$custom_posts = new WP_Query( $args );
					
					// Start the Loop.
					while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
						
						// Put the broker information in the mini-profile template
						get_template_part( 'post-formats/content-miniProfile', get_post_type() );
						
					// End the loop.
					endwhile; ?>

				</div>
			</section>

		<?php // Related Case Studies (In a partial) ?>
			<?php get_template_part('library/partials/sectionCaseStudy'); ?>

				
			<footer class="article-footer cf">

				<?php // Salesforce Contact Form (In a partial) ?>
					<?php get_template_part('library/partials/proposalContact'); ?>

			</footer>

			</article>

			<?php endwhile; endif; ?>
		
		</main>

	</div>

</div>

<?php get_footer(); ?>
