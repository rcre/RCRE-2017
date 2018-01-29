<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf pull-r-1of12 pull-l-1of12' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
					
				<h1>This is an H1 Tag</h1>
				<h2>This is an H2 Tag</h2>
				<h3>This is an H3 Tag</h3>
				<h4>This is an H4 Tag</h4>
				<h5>This is an H5 Tag</h5>
				<h6>This is an H6 Tag</h6>

				<p>Paragraph Text</p>

				<a href="#" class="btn-minify cta-solid-white">Button Style 1</a>
				<a href="#" class="btn-minify cta-border-gray">Button Style 2</a>
				<a href="#" class="btn-minify cta-border-green">Button Style 3</a>
				<a href="#" class="btn-minify cta-underline-white">Button Style 4</a>
				
				<a href="#" class="btn-minify broker-title">Broker Title</a>

				<a href="#" class="btn-minify header-link">Header Link</a>

				<a href="#" class="btn-minify blue-title">Blue Link</a>



		
				</article>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>
			<?php endwhile; endif; ?>
		</main>			
	</div>
</div>

<?php get_footer(); ?>