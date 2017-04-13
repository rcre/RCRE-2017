<?php
/*
 Template Name: Specialty
*/
?>

<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="wrap cf">

			<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
				<!-- Panel 1, the header is the same, the text is dynamic -->
					<section id="Panel-1" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right">
							<h3>Workflow Experience</h3>
							<p><?php // Specialty ?>
								Navigate the entire process of locating  office space that suits your needs, or possibly disposing of space that no longer is viable for you.
							</p>
						</aside>
					</section>
					
					<section id="Panel-2" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left">
							<h3><?php // Specialty ?> Market Experience</h3>
							<p>
								Every market is different. Our team-based service model and extensive research, uncovers all options in the office marketplace.
							</p>
							<a href="<?php // Most Recent Report ?>" id="cta-green">Read the 2016 Office Research Report</a>
						</aside>
					</section>
					
					<section id="Panel-3" class="panel cf">
						<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right">
							<h3>A Network of Collaboration</h3>
							<p><?php // Specialty ?>
								Need something extra for your business? No problem. At RESOURCE, You get small business personalization with corporate reach.
							</p>
						</aside>
					</section>

				<!-- This is a PHP partial -->
					section#Services
					
				<!-- This is a wp loop for team memebers-->
					<section id="SpecialtyTeam">
						<div class="pull-r-1of12 pull-l-1of12">
							
							

						</div>
					</section>
				<!-- This is a wp loop for Case Studies-->
					section#CaseStudies 
					
				<!-- This should be a PHP partial -->
					<section id="RelatedServices">
						<h2 class="header-dark">Related Services</h2>
						<div class="m-1of2 t-1of4 d-1of4 button-service">
							<a href="#">Related Service</a>
						</div>
						<div class="m-1of2 t-1of4 d-1of4 button-service">
							<a href="#">Related Service</a>
						</div>
						<div class="m-1of2 t-1of4 d-1of4 button-service">
							<a href="#">Related Service</a>
						</div>
						<div class="m-1of2 t-1of4 d-1of4 button-service">
							<a href="#">Related Service</a>
						</div>
					</section>

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
						<?php get_template_part('library/partials/proposalContact'); ?>
					</footer>

				</article>

				<?php endwhile; endif; ?>
			</main>
		</div> <!-- End Inner Content -->
	</div> <!-- End Content -->

<?php get_footer(); ?>

