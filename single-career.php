<?php
/*
 * CAREER LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" tabindex="-1" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blogposting">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">
			

				<section class="cs-aside t-1of3 d-1of4 cf">
				
					<h3>Job Details</h3>
				
					<aside>
						<h5>Job Status</h5>
						<p><?php echo types_render_field( "job-status") ?></p>
					</aside>

					<aside>
						<h5>Department</h5>
						<p><?php echo types_render_field( "job-department") ?></p>
					</aside>

					<aside>
						<h5>Reports to:</h5>
						<p><?php echo types_render_field( "job-reports-to") ?></p>
					</aside>

				<?php if ( types_render_field( "job-people-who-report-to-you" ) != null ) { ?>
					<aside>
						<h5>People who report to you:</h5>
						<p><?php echo types_render_field( "job-people-who-report-to-you") ?></p>
					</aside>
				<?php } ?>
					
				</section>

				<div class="m-all t-2of3 d-3of4">

						<section class="cs-section cf">
							<h3>Summary</h3>
							<p><?php echo types_render_field( "job-summary", array( 'raw' => true)); ?></p>
						</section>
			
						<section class="cs-section cf">
							<h3>Responsibilities</h3>
							<p><?php echo types_render_field( "job-responsibilities", array( 'raw' => false)); ?></p>
						</section>
					
						<section class="cs-section cf">
							<h3>Requirements</h3>
							<p><?php echo types_render_field( "job-requirements", array( 'raw' => false)); ?></p>
						</section>

						<section class="cs-section cf">
							<h3>Other Details</h3>
							<p><?php echo types_render_field( "job-other-fields", array( 'raw' => false)); ?></p>
						</section>

						<a href="<?php echo types_render_field( "job-typeform-link", array( 'raw' => true)); ?>" class="cta-border-green btn-minify">Apply Now!</a>
				</div>

			</article>

			
			<?php endwhile; ?>


			<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

			<?php endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>
