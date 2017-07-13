<!-- VERSION 3: Case Studies and Blog Post Headers -->
	<?php 
	if (has_post_thumbnail($page->ID)) 
		$image = wp_get_attachment_url(get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail'); ?>

	<div id="single-header" class="cs-header" style="background-image: url('<?php { echo $image; } ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<!-- Callout Section for the Average Page-->
		<div class="m-padding m-all t-all d-all cf">
			<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-all cf">
				
				<div class="tag tag--post-type">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?>
				</div>

				<div class="tag tag--service">
				<?php echo get_the_term_list( $post->ID, 'service', '', ', ', ''); ?>
				</div>
				
				<h1 class="cs-h1"><?php the_title(); ?></h1>
				<p class="cs-subtitle">
				Catchy Comment about success
				</p>
			</div>
			<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>"></a>
		</div>
	</div>