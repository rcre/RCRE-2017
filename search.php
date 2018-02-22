<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="pull-l-1of12 pull-r-1of12 m-padding cf">
					<div class="pad-top"></div>
					<main id="main" class="cf pad-top" role="main">
					
					<header class="profile-header">
						<h1 class="header-dark archive-title pad-top"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
					</header>
						

						<hr>

						<div class="selling-point-grid">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
								
								<?php get_template_part( 'post-formats/content-search-result' ); ?>

							</article>

						<?php endwhile; ?>

					</div>

							<?php else : ?>

									<article id="post-not-found" class="cf pad-top">
										<header class="article-header">
											<h2 class="text-center header-dark"><?php _e( 'Sorry, we did not find any results for your search.', 'bonestheme' ); ?></h2>
										</header>

										<section class="entry-content">
											<p class="text-center"><?php _e( 'You can try your search again, or send us an email and we can make sure you get to the right place!', 'bonestheme' ); ?></p>
										</section>
									</article>

							<?php endif; ?>

						</main>

					</div>

			</div>

<?php get_footer(); ?>
