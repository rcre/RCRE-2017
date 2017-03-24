<?php get_header(); ?>
			
	<div id="content">
		<?php if (has_post_thumbnail($post->ID)) { ?>
		<?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
		
		<header class="cf" style="background-image: url('<?php echo $image; ?>');">
			<div class="callout">
				<h1 class="page-title" itemprop="headline">RESOURCE</h1>
				<p class="subtitle">Commercial Real Estate</p>

				<a href="#" id="cta-border-green">Contact Us</a>
				<a href="#" id="cta-border">Search Properties</a>
			</div>

			<div class="our-clients cf">
				<div class="wrap cf">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/Coca-Cola.png" alt="Coca-Cola">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/eli-lilly.png" alt="eli-lilly">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/indiana-members.png" alt="indiana-members">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/omnisource.png" alt="omnisource">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/pnc.png" alt="pnc">
				</div>
			</div>
		</header>
	
		<?php } else { ?> <?php	} ?>

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
				<h3>Hello, How Can We Help?</h3>

			<!-- SECTION 1: Service Grid -->
				<?php get_template_part('library/partials/serviceGrid'); ?>
			<!-- SECTION 2: See our Services -->
				<?php get_template_part('library/partials/sectionTopic'); ?>
			<!-- SECTION 3: See our Specialties and Industries -->

				<section class="entry-content cf" itemprop="articleBody">
					<?php 

					the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <?php // end article section ?>
				
				<footer class="article-footer cf">
					<?php get_template_part('library/partials/proposalContact'); ?>
				</footer>

			</article>

			<?php endwhile; endif; ?>
		
		

		</main>

	</div>

</div>

<?php get_footer(); ?>
