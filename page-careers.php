<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/LocalBusiness">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
					<?php
						get_template_part( 'library/partials/sectionCareers' ); 
						get_template_part( 'post-formats/content-childSection' );
						get_template_part( 'post-formats/content-section' ); 
					?>
					<section>
						<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
						<h2 class="header-dark text-center">Interested in Starting a Conversation?</h2>
						<p class="text-center">Upload your resume and we'll be in touch.</p>
			
						<script src="https://resourcedealvault.app.box.com/upload-widget/embed.js?folderID=39978049300&title=Submit%20Resume&isDescriptionFieldShown=1&isEmailRequired=1&width=385&height=220&token=kit3msmk6h5qv2nphbtovqa96gb740pu" type="text/javascript"></script>
					</div>
					</section>
					

				</article>

				<footer class="cf">
					<?php get_template_part('library/partials/sectionContact'); ?>
				</footer>
			<?php endwhile; endif; ?>
		</main>			
	</div>
</div>

<?php get_footer(); ?>