<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="pull-l-1of12 pull-r-1of12 cf">

					<main id="main" class="cf pad-top" role="main">

						<h1 class="header-dark archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<div class="selling-point-grid">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
								
								<?php get_template_part( 'post-formats/content-search-result' ); ?>

							</article>

						<?php endwhile; ?>

					</div>

							<?php else : ?>

									<article id="post-not-found" class="cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					</div>

			</div>

<?php get_footer(); ?>
