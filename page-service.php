<?php
/*
 Template Name: Service Template
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Service">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/LocalBusinessPosting">

				<?php get_template_part('library/partials/sectionUVP'); ?>

				<?php get_template_part('library/partials/sectionSpecialties'); ?>

				<?php // Services that come with using RESOURCE ?>
					<h2 class="header-dark text-center">Everything you need. All in one Place.</h2>
					<!-- This is a PHP partial -->
					<section class="cf">
						<div class="pull-r-1of12 pull-l-1of12 cf">
							<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
						</div>
					</section>
					
					
				<!-- This is a wp loop for team memebers-->
					<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
						<h2 class="header-dark pad-top">The <?php the_title(); ?> Team</h2>
						<?php get_template_part('library/partials/sectionTeam'); ?>
					</section>

					<?php get_template_part('library/partials/sectionCaseStudy'); ?>
					<?php get_template_part('library/partials/sectionContact'); ?>

			</article>

			<?php endwhile; endif; ?>
		
		</main>

	</div>

</div>

<?php get_footer(); ?>
