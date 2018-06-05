<?php get_header(); ?>
			
	<div id="content">
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

				<?php 
					get_template_part('template-parts/sections/sectionUVP'); 
					get_template_part('template-parts/sections/sectionServiceGrid');
					get_template_part('template-parts/post-formats/content-section');
					get_template_part('template-parts/sections/sectionCaseStudy');
					get_template_part('template-parts/sections/sectionContact');
					get_template_part('template-parts/sections/sectionMailChimpSmall');
				?>

				</article>

				<?php endwhile; endif; ?>
			
			</main>
		</div><?php // End inner-content ?>
	</div><?php // End content ?>

<?php get_footer(); ?>

