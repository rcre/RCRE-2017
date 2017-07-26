<?php get_header(); ?>
			
	<div id="content">
		
	<?php // Bar that shows the past clients we have worked with ?>
		<div class="our-clients cf">
			<h2 class="text-center">We've worked with some of the best in the business.</h2>
			<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/Coca-Cola.png" alt="Coca-Cola">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/eli-lilly.png" alt="eli-lilly">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/indiana-members.png" alt="indiana-members">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/omnisource.png" alt="omnisource">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/PNC.png" alt="pnc">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/client-logos/Coca-Cola.png" alt="Coca-Cola">
			</div>
		</div>

		<div id="inner-content" class="cf">

			<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				
					
			<?php // Company UVP and introduction o why we are different ?>
				<section class="pad-top">
					<div class="pull-l-1of12 pull-r-1of12 cf">
						<div class="uvp">
							<p>From landlords and tenants to buyers and sellers, we provide consultative commercial real estate solutions focused on building <strong>long-term relationships</strong> with you and <strong>long-term success</strong> for your business.</p>
						</div>
						<div class="selling-point m-all t-1of3 d-1of3">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-book-knowledge.svg" alt="Real Estate Knowledge">
							<h5>A wealth of knowledge.</h5>
							<p>With over 600 years of combined experience, our team of experts provides you with the latest relevant data, marketing strategies and support you deserve.</p>
						</div>
						<div class="selling-point m-all t-1of3 d-1of3">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-us-map-love-indy.svg" alt="Real Estate Knowledge">
							<h5>Locally-owned.</h5>
							<p>As the largest, locally-owned firm in Indianapolis, we are deeply-connected experts who care about the success of our city. We are proud of our roots!</p>
						</div>
						<div class="selling-point m-all t-1of3 d-1of3 right">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icons-focused-on-you.svg" alt="Real Estate Knowledge">
							<h5>Free to focus on you.</h5>
							<p>We don&#39;t answer to stockholders. We aren&#39;t an oversized corporation that only cares about boosting their numbers. We care about your numbers.</p>
						</div>
					</div>
				</section>


	<?php 
		get_template_part('library/partials/sectionServiceGrid');
		get_template_part('post-formats/content-section');
		get_template_part('library/partials/sectionCaseStudy');
	?>
				<section id="need-help">
					<div class="wrap">
						<h2>Can&#39;t find what you&#39;re looking for?</h2>
						<p>We want to ensure we make your life as easy as possible. </br>The best way we can serve you is <a id="cta-underline-white" href="https://www.getfeedback.com/r/TXPTw5oV">sending us a message</a> or <a id="cta-underline-white" href="tel:317-663-6000" role="telephone">giving us a call.</a> No hoops.</p>
						<p>We <i class="fa fa-heart" aria-hidden="true"></i> feedback! Let us know how we can make our site better!</p>
					</div>
				</section>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>

				</article>

				<?php endwhile; endif; ?>
			
			</main>
		</div><?php // End inner-content ?>
	</div><?php // End content ?>

<?php get_footer(); ?>
