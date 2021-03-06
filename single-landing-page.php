<?php
/*
 * Template Name: Landing Page
*/
?>

<?php get_header(); ?>

<?php 
	if ( has_post_thumbnail() ) {
		$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
	} 
?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" itemprop="Department" itemscope itemtype="http://schema.org/Service">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php 
 
			if ( get_post_type() == "landing-page") {
				get_template_part('library/partials/header-none');
				$terms = get_the_terms( $post->ID, 'specialty' );
				$term = array_pop($terms);
				$termId = $term->term_id;
				$bannerimg = types_render_termmeta( "specialty-picture", array( "term_id" => $termId, "output" => "raw" ));
				$icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId, "output" => "raw" ));
			}
			?>


			<article id="post-<?php the_ID(); ?>" <?php post_class('landing-page'); ?> role="article" style="background-image: url('<?php echo $bannerimg; ?>');">
				
				<div class="text-center">
					<a itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow">
						<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo">
					</a>
				</div>
				
				<?php 
					if ( get_post_type() == "landing-page") {
						get_template_part('template-parts/sections/sectionCustomContact'); 
					}

					if ( is_page ("thank-you")) {
						get_template_part('template-parts/partials/contentThankYou');
					}
				?>

			</article>
			
			<?php endwhile; endif; ?>

		</main>
	</div>
</div>

<?php get_footer(); ?>
