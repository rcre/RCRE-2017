<?php 

$facts = types_render_field( "client-quick-facts", array( "separator" => " </br>+ ", 'raw' => true ));
$numbers = types_render_field( "numbers-to-remember", array( "separator" => " </br>+ ", 'raw' => true ));
$challenge = types_render_field( "1-challenge", array( 'raw' => true));
$strategy = types_render_field( "2-strategy", array( 'raw' => true));
$results = types_render_field( "3-results", array( 'raw' => true));
$quote = types_render_field( "client-quote" );
$client = types_render_field( "client-quote-person", array( 'raw' => true));
$clientTitle = types_render_field( "client-quote-title", array( 'raw' => true));

 ?>
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blogposting">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pad-top pull-r-1of12 pull-l-1of12'); ?> role="article">
			
				<aside class="m-all t-1of3 d-1of4 cf">
					<?php get_template_part('template-parts/post-formats/author' , get_post_type() ); ?>
		
					<?php if ( $facts != null ) { ?>
						<h4>Company Quick Facts</h4>
						<p>+ <?php echo $facts; ?>
						</p>
					<?php } ?>

					<?php if ( $numbers != null ) { ?>
						<h4>Statistics</h4>
						<p>+ <?php echo $numbers; ?>
						</p>
					<?php } ?>
					
				</aside>

				<div class="m-all t-2of3 d-3of4">
					<section class="no-margin">
						
						<div class="cs-logo-on-page">
							<?php get_template_part('template-parts/post-formats/content', 'case-study'); ?>
						</div>

						<p style="margin:0;">
							<?php echo $challenge; ?>
						</p>

						<?php if ( $quote != null ) { ?>
							<blockquote>
								<?php echo $quote; ?>
								<p>
									<strong>- <?php echo $client; ?></strong>, <?php echo $clientTitle ?>, <?php the_title(); ?>
								</p>
							</blockquote>
						<?php } ?>
					</section>
			
					<section class="no-margin">
						<h3>Services</h3>
						<p><?php echo $strategy; ?></p>
					</section>
				
					<section class="no-margin">
						<h3>Results</h3>
						<p><?php echo $results; ?></p>
					</section>

					<section class="no-margin">
						<p><strong>Note:</strong> We have several professionals with substantial client transactional experience prior to joining RESOURCE Commercial, which is included above.</p>
					</section>
				</div>


				

			</article>

			
			<?php endwhile; endif; ?>
		</main>
			<?php get_template_part('library/partials/sectionMailChimpSmall'); ?>
			<?php get_template_part('library/partials/sectionContact'); ?>
	</div>
</div>

<?php get_footer(); ?>
