<?php 

/*
 Template Name: Error 404
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<article id="post-not-found" class="hentry cf">

				<section class="entry-content">

					<p><?php _e( 'Whoops! We cannot seem to find the page you are looking for. Let us know you could not find it and we will get right on finding a solution.', 'bonestheme' ); ?></p>

				</section>

				<section class="topic search">

						<p><?php get_search_form(); ?></p>

				</section>

				<footer class="article-footer cf">

				<?php get_template_part('library/partials/sectionContact'); ?>

			</footer>

			</article>

		</main>

	</div>

</div>

<?php get_footer(); ?>
