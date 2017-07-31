<?php
/*
 * CASE STUDY LAYOUT
*/
?>

<!-- 
client-logo
client-quick-facts
date-completed
downloadable-pdf
1-challenge
2-solution
3-results
numbers-to-rememeber
header-image
before-image
after-image
client-quote
client-quote-person
client-quote-title
-->
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">
			
			<section class="cs-section cf">
				<div class="d-1of3 t-all m-all">
					<h4>Services Included:</h4>
					<div class="profile-info m-1of2 t-all d-all">
						<!-- Services -->
						<?php echo get_the_term_list( $post->ID, 'service', '', '</br>', ''); ?></a>
					</div>
				</div>

				<div class="quick-facts d-2of3 t-all m-all">
					
					<div class="case-study-icon left">
						<?php echo types_render_field( "client-logo", array( "size" => "thumbnail" ));  ?>	
					</div>
					<h3 class="right">Company Quick Facts</h3>
					<p class="right"><?php echo types_render_field( "client-quick-facts", array( "separator" => " | ", 'raw' => true )); ?></p>
				</div>
			</section>

			<section class="cs-section cf">
				<div class="d-1of3 t-1of3 m-all">
					<div class="cs-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-brokerage-contract.svg" alt="Challenge">
					</div>
				</div>
				<aside class="d-2of3 t-2of3 m-all">
					<h3>Challenge</h3>
					<p><?php echo types_render_field( "1-challenge", array( 'raw' => true)); ?></p>
				</aside>
			</section>

			<section class="cs-section cf">
				<div class="d-1of3 t-1of3 m-all">
					<div class="cs-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-computer-research.svg" alt="Challenge">
					</div>
				</div>
				<aside class="d-2of3 t-2of3 m-all">
				
					<h3>Solution</h3>
					<p><?php echo types_render_field( "2-strategy", array( 'raw' => true)); ?></p>
				</aside>
			</section>
				
			<section class="cs-section cf">
				<div class="d-1of3 t-1of3 m-all">
					<div class="cs-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-lightbulb-intelligence.svg" alt="Challenge">
					</div>
				</div>

				<aside class="d-2of3 t-2of3 m-all">
					<h3>Results</h3>
					<p><?php echo types_render_field( "3-results", array( 'raw' => true)); ?></p>
				</aside>
			</section>


			<section class="cs-section cf">
			<!-- ASIDE: Mainly Broker Contact Information -->
				<aside class="m-all t-1of3 d-1of6 cf">
				<!-- PHP: Get the Broker's Picture URL and Industry Name-->
					<?php get_template_part('post-formats/author' , get_post_type() ); ?>
				</aside>

				<div class="client-quote m-all t-2of3 d-3of4 right"><i><?php echo types_render_field( "client-quote", array( 'before' => '<span>&ldquo;</span>', 'raw' => true)); ?></i>
					<div class="client-quote-person">
						<p><strong><?php echo types_render_field( "client-quote-person", array( 'raw' => true)); ?></strong></p>
						<p><?php echo types_render_field( "client-quote-title", array( 'raw' => true)); ?>, <?php the_title(); ?></p>
					</div>
				</div>

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
