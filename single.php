<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="m-padding pull-l-1of12 pull-r-1of12 cf">

			<main id="main" class="pull-l-1of12 pull-r-1of12 m-all cf" role="main" itemscope itemType="http://schema.org/BlogPosting">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
					get_template_part( 'post-formats/format', get_post_format() );
				
					if ( types_render_field( "report-pdf" ) != null ) { ?>
						<div class="pad-top cf">
							<a id="cta-border-green" class=" d-1of2 green" href="<?php echo types_render_field( "report-pdf", array( 'raw' => true ) ); ?>">Download the report</a>
						</div>
					<?php } 
					
					get_template_part( 'post-formats/author-single' );
				?>

				<?php endwhile; ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
							</footer>
					</article>

				<?php endif; ?>
			
			
			
			</main>
	
		</div>
		<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
	</div>

<?php get_footer(); ?>
