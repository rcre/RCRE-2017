<?php get_header(); ?>
			
	<div id="content">
		
	<?php // Bar that shows the past clients we have worked with ?>

	<div class="section-pllx">
		<div class="layer-pllx pllx-base">
		<div class="our-clients cf">
			<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
				<ul>
					<li class="Coca-Cola"><span>Coca-Cola</span></li>
					<li class="eli-lilly"><span>PNC Bank</span></li>
					<li class="indiana-members"><span>Omnisource</span></li>
					<li class="omnisource"><span>Hylant</span></li>
					<li class="PNC"><span>Indiana Members</span></li>
					<li class="progressive"><span>Lilly</span></li>
				</ul>
			</div>
		</div>

		<div id="inner-content" class="cf">

			<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

				
				<section class="pad-top">
					<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
						<div class="uvp">
							<p>From landlords and tenants to buyers and sellers, we provide consultative commercial real estate solutions focused on building <strong>long-term relationships</strong> with you and <strong>long-term success</strong> for your business.</p>
						</div>

						<div class="selling-point-grid">
							<div class="selling-point">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-book-knowledge.svg" alt="Real Estate Knowledge">
								<h5>A wealth of knowledge.</h5>
								<p>With over 600 years of combined experience, our team of experts provides you with the latest data, marketing strategies and support you deserve.</p>
							</div>
							<div class="selling-point">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-us-map-love-indy.svg" alt="Real Estate Knowledge">
								<h5>Locally-owned.</h5>
								<p>As the largest, locally-owned firm in Indianapolis, we are deeply-connected experts who care about the success of our city. We are proud of our roots!</p>
							</div>
							<div class="selling-point">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-focused-on-you.svg" alt="Real Estate Knowledge">
								<h5>Free to focus on you.</h5>
								<p>We don&#39;t answer to stockholders. We aren&#39;t an oversized corporation that only cares about boosting our numbers. We care about your numbers.</p>
							</div>
						</div>
					</div>
				</section>
		</div><!-- end layer-pllx -->
	</div><!-- end section-pllx -->

	<?php 
		get_template_part('library/partials/sectionServiceGrid');
		get_template_part('post-formats/content-section');
		get_template_part('library/partials/sectionCaseStudy');
	?>
				<section id="need-help">
					<div class="wrap">
						<h2>Can&#39;t find what you&#39;re looking for?</h2>
						<p>We want to ensure we make your life as easy as possible. </br>The best way we can serve you is <a class="cta-underline-white" href="https://www.getfeedback.com/r/TXPTw5oV">sending us a message</a> or <a class="cta-underline-white" href="tel:317-663-6000" role="telephone">giving us a call.</a> No hoops.</p>
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
