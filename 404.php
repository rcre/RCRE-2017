<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<article id="post-not-found" class="hentry cf">

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
