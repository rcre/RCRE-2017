<?php get_header(); ?>
			
	<div id="content">
		<?php if (has_post_thumbnail($post->ID)) { ?>
		<?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
		
		<header class="article-header cf" style="background-image: url('<?php echo $image; ?>');">
			<div class="callout">
				<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

				<a href="#" id="cta-white" class="btn">Search</a>
				<a href="#" id="cta-border" class="btn">Find People</a>
			</div>
		</header>

		<?php } else { ?> <?php	} ?>

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">
					<?php the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <?php // end article section ?>
				
				<footer class="article-footer cf">

				</footer>

			</article>

			<?php endwhile; endif; ?>
		
		<?php get_template_part('library/partials/proposalContact'); ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>
