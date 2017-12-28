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

				<?php get_template_part('library/partials/sectionUVP'); ?>
		
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
