<?php
/*
 * CASE STUDY LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blogposting">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12 pad-top'); ?> role="article">
			
				<aside class="m-all t-1of3 d-1of4 cf">
					<?php get_template_part('post-formats/author' , get_post_type() ); ?>
		
					<?php if ( types_render_field( "client-quick-facts" ) != null ) { ?>
						<h4>Company Quick Facts</h4>
						<p>+ <?php echo types_render_field( "client-quick-facts", array( "separator" => " </br>+ ", 'raw' => true )); ?>
						</p>
					<?php } ?>

					<?php if ( types_render_field( "numbers-to-remember" ) != null ) { ?>
						<h4>Statistics</h4>
						<p>+ <?php echo types_render_field( "numbers-to-remember", array( "separator" => " </br>+ ", 'raw' => true )); ?>
						</p>
					<?php } ?>
					
				</aside>

				<div class="m-all t-2of3 d-3of4">
					<section class="cf">
						
						<div class="cs-logo-on-page">
							<div class="case-study-icon">
								<img src="<?php echo types_render_field( "client-logo", array( 'output' => 'raw' ));  ?>" alt="<?php the_title(); ?> Logo">	
							</div>
						</div>

						<p>
							<?php echo types_render_field( "1-challenge", array( 'raw' => true)); ?>
						</p>

						<?php if ( types_render_field( "client-quote" ) != null ) { ?>
							<blockquote>
								<?php echo types_render_field( "client-quote", array( 'before' => '<span>&ldquo;</span>', 'raw' => true)); ?>
								<p><strong>- <?php echo types_render_field( "client-quote-person", array( 'raw' => true)); ?></strong>, <?php echo types_render_field( "client-quote-title", array( 'raw' => true)); ?>, <?php the_title(); ?></p>
							</blockquote>
						<?php } ?>
					</section>
			
				<!-- Services -->
					<section class="cf">
						<h3>Services</h3>
						<p><?php echo types_render_field( "2-strategy", array( 'raw' => true)); ?></p>
					</section>
				
				<!-- Results -->	
					<section class="cf">
						<h3>Results</h3>
						<p><?php echo types_render_field( "3-results", array( 'raw' => true)); ?></p>
					</section>
				</div>


				<section class="cs-section cf">
					<p class="d-all m-all t-all"><strong>Note:</strong> We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
				</section>

			</article>

			
			<?php endwhile; endif; ?>
		</main>

		<footer class="cf">
			<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
			<?php get_template_part('library/partials/sectionContact'); ?>
		</footer>
	</div>
</div>

<?php get_footer(); ?>
