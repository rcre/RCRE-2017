<?php get_header(); ?>
			
	<div id="content">
		<?php if (has_post_thumbnail($post->ID)) { ?>
		<?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
		
		<header class="cf" style="background-image: url('<?php echo $image; ?>');">
			<div class="callout">
				<h1 class="page-title" itemprop="headline">Get things done.</h1>
				<p class="subtitle">Resource helps you buy, lease and sell property, manage your assets and focus on what you love.</br>All without the corporate hoops.</p>

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
			
			<!-- SECTION 2: UVP "Unique Value Proposition" -->
			<section class="cf">
				<div class="uvp m-all t-all d-2of3">
					<p>From landlords and tenants to buyers and sellers, we provide consultative commercial real estate solutions focused on building <strong>long-term relationships</strong> with you and <strong>long-term success</strong>for your business.</p>
				</div>
				<div class="selling-point m-all t-1of3 d-1of3">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-book-knowledge.svg" alt="Real Estate Knowledge">
					<h5>A wealth of knowledge.</h5>
					<p>With over 600 years of combined experience, our team of experts provides you with the latest relevant data, marketing strategies and superior support you deserve.</p>
				</div>
				<div class="selling-point m-all t-1of3 d-1of3">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-book-knowledge.svg" alt="Real Estate Knowledge">
					<h5>Locally-owned.</h5>
					<p>As the largest, locally-owned firm in Indianapolis, our brokers are deeply-connected experts who care about the success of the city we live in. We are proud of our roots!</p>
				</div>
				<div class="selling-point m-all t-1of3 d-1of3">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-book-knowledge.svg" alt="Real Estate Knowledge">
					<h5>Free to focus on you.</h5>
					<p>We don’t answer to stockholders. We aren’t an oversized corporation that only cares about boosting their numbers. We care about your numbers.</p>
				</div>
			</section>
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
