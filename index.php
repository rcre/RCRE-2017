<?php get_header(); ?>

<!-- This is where the blog posts are shown -->

			<div id="content">

				<div id="inner-content" class="cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

						<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>
							
							<section class="pull-l-1of12 pull-r-1of12 m-padding">
								<div class="selling-point-grid">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
									
										<?php get_template_part( 'template-parts/post-formats/content', get_post_type() ); ?>
									
								
								<?php endwhile; ?>
								</div>
							</section>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
