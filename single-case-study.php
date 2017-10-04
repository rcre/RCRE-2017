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

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">
			

	<section class="cs-aside t-1of3 d-1of4 cf">
		<aside class="cf">
			<?php get_template_part('post-formats/author' , get_post_type() ); ?>
		</aside>
		
		<aside>
			<h4>Services Provided</h4>
			<div class="header-link"><?php echo get_the_term_list( $post->ID, 'service', '', '</br>', ''); ?></a></div>
		</aside>

		<?php if ( types_render_field( "client-quick-facts" ) != null ) { ?>
			<aside>
				<h4>Company Quick Facts</h4>
				<p>+ <?php echo types_render_field( "client-quick-facts", array( "separator" => " </br>+ ", 'raw' => true )); ?></p>
			</aside>
		<?php } ?>



		<?php if ( types_render_field( "numbers-to-remember" ) != null ) { ?>
			<aside>
				<h4>Statistics</h4>
				<p>+ <?php echo types_render_field( "numbers-to-remember", array( "separator" => " </br>+ ", 'raw' => true )); ?></p>
			</aside>
		<?php } ?>
			

		<?php if ( types_render_field( "client-quote" ) != null ) { ?>
			<div class="client-quote"><i><?php echo types_render_field( "client-quote", array( 'before' => '<span>&ldquo;</span>', 'raw' => true)); ?></i>
				<div class="client-quote-person">
					<p><strong><?php echo types_render_field( "client-quote-person", array( 'raw' => true)); ?></strong></p>
					<p><?php echo types_render_field( "client-quote-title", array( 'raw' => true)); ?>, <?php the_title(); ?></p>
				</div>
			</div>
		<?php } ?>
		
	</section>

	<div class="t-2of3 d-3of4">
		<!-- Intro -->
			<section class="cs-section cf">
				<p><div class="cs-logo-on-page">
					<div class="case-study-icon">
						<img src="<?php echo types_render_field( "client-logo", array( 'output' => 'raw' ));  ?>" alt="<?php the_title(); ?> Logo">	
					</div>
				</div><?php echo types_render_field( "1-challenge", array( 'raw' => true)); ?></p>
			</section>

		<!-- Strategy -->
			<section class="cs-section cf">
				<h3>Strategy</h3>
				<p><?php echo types_render_field( "1-challenge", array( 'raw' => true)); ?></p>
			</section>
	
		<!-- Services -->
			<section class="cs-section cf">
				<h3>Services</h3>
				<p><?php echo types_render_field( "2-strategy", array( 'raw' => true)); ?></p>
			</section>
		
		<!-- Results -->	
			<section class="cs-section cf">
				<h3>Results</h3>
				<p><?php echo types_render_field( "3-results", array( 'raw' => true)); ?></p>
			</section>
	</div>


			<section class="cs-section cf">
			<!-- ASIDE: Mainly Broker Contact Information -->
				<p class="d-all m-all t-all"><strong>Note:</strong> We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
			</section>

			</article>

			<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>

			<footer class="cf">

					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>
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
