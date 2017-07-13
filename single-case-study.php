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
-->
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="cf m-padding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">

			<section class="challenge cf">
				<div class="d-1of3 t-1of3 m-all">
					<h3>Challenge</h3>
					<p><?php echo types_render_field( "1-challenge", array( 'raw' => true)); ?></p>
				</div>

				<div class="quick-facts d-1of3 right m-all">
					<img class="client-logo" src="<?php echo types_render_field( "client-logo", array( 'raw' => true)); ?>" alt="">
					<h3>Company Quick Facts</h3>
					<p><?php echo types_render_field( "client-quick-facts", array( "separator" => " | ", 'raw' => true )); ?></p>
				</div>
			</section>

			<section class="solution cf">
				<div class="d-1of3 t-1of3 m-all right">
				<h3>Solution</h3>
				<p><?php echo types_render_field( "2-strategy", array( 'raw' => true)); ?></p>
				</div>
			</section>
				
			<section class="results cf">
				<div class="d-1of3 t-1of3 m-all">
				<h3>Results</h3>
				<p><?php echo types_render_field( "3-results", array( 'raw' => true)); ?></p>
				</div>
			</section>
			
			<!-- ASIDE: Mainly Broker Contact Information -->
				<aside class="m-all t-1of3 d-1of7">
				<!-- PHP: Get the Broker's Picture URL and Industry Name-->
					<?php 
						// Get the ID of the parent post, which belongs to the "Broker" post type
							$broker_id = wpcf_pr_post_get_belongs( get_the_ID(), 'broker' );
						// Get all the parent (broker) post data
							$broker_post = get_post( $broker_id );
						// Get the title of the parent (broker) post
							$broker_name = $broker_post->post_title;
						// Get the contents of the parent (broker) post
							$broker_content = $broker_post->post_content;
						?>

					<div class="m-1of2 t-all d-all">
						<!-- Profile Picture -->
						<img src="<?php echo types_render_field( "broker-profile-picture", array( 'post_id' => $broker_id, 'raw' => true, 'size' => 'thumbnail')); ?>" alt="<?php echo $broker_name; ?>">

						<h3><?php echo $broker_name; ?></h3>

						<!-- BUTTON: Contact -> PHP Link to Broker's Email -->
						<a id="cta-border-green" class="green" href="<?php echo(types_render_field( "broker_email", array( $broker_id, 'raw' => true, 'size' => 'thumbnail') )); ?>">Contact</a>
					</div> 
				
				<!-- PHP: Case Study's related broker's contact information -->
					<div class="profile-info m-1of2 t-all d-all">

						<!-- Services -->
						<?php echo get_the_term_list( $post->ID, 'service', '<p id="specialty-button"></strong>', '</br> ', '</p>'); ?></a>
					</div>
				</aside>

				<div class="client-quote m-all t-2of3 d-5of7 pull-r-1of7"><?php echo types_render_field( "client-quote", array( 'before' => '<span>&ldquo;</span>', 'raw' => false)); ?>
					<div class="client-quote-person">
						<p><strong>Patrick Hanus, President</strong></p>
						<p>Coca-cola Company, USA</p>
					</div>
				</div>

			<!-- SECTION: Broker's Bio, Past Work, and Related Case Studies -->
				<div class="entry-content pull-r-1of12 t-all d-all cf">
				<!-- The Content will just be the biography -->
					<?php the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <!-- end article section -->

			</article>

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
