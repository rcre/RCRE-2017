<!-- VERSION 2: Page, Post and other Headers -->
<?php 
	if (has_post_thumbnail($page->ID)) 
		$bannerimg = wp_get_attachment_url(get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail'); 
	?>
	
	<div id="page-header" <?php if (has_post_thumbnail($page->ID)) { ?> style="background-image: url('<?php { echo $bannerimg; } ?>');"<?php } ?> role="banner" itemscope itemtype="http://schema.org/WPHeader">

		<!-- Callout Section for the Average Page-->
		<div class="callout cf">
			<div class="m-all t-1of2 d-1of2 center cf">
				<h1 class="page-title" itemprop="headline">
					<?php the_title(); ?>
				</h1>
				<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
				<div class="header-buttons cf">
					<a href="#" id="cta-border-green" class="m-all t-all d-2of5">Read More...</a>
				</div>
			</div>
		</div>
	</div>