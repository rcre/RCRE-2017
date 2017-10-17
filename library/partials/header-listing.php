<!-- Header 4 - Listings -->

<?php 
	if ( has_post_thumbnail() ) {
		$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
	} 
?>

<div id="listing-header" class="cs-header" role="banner" style="background-image: url('<?php echo $bannerimg; ?>'); background-repeat: no-repeat; background-size: cover;" itemscope itemtype="http://schema.org/WPHeader">
	
		<div class="pull-r-1of12 pull-l-1of12 m-padding">

			<div class="tag">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', '', ''); ?>
			</div>

					
			<?php if ( is_tax('service') ) { ?>
				<div class="tag">
					<?php echo get_the_term_list( $post->ID, 'service', '', '', ''); ?>
				</div>
			<?php } ?>

				
			<div class="tag red">
				<?php echo get_the_term_list( $post->ID, 'listing-type', '', '', ''); ?>
			</div>
			

			<!-- Callout Section for the Average Page-->
			<div class="cf">

				<div class="cf">
					
					<h1 itemprop="name"><?php the_title(); ?></h1>
					
					<div class="header-link">
						<a class="header-light" href="<?php echo(types_render_field( "google-maps-url", array( 'raw' => true) )); ?>" ><?php echo(types_render_field( "address", array( 'raw' => true) )); ?></a>
					</div>
					
				</div>

				<a title="Download the PDF" class="m-1of2 download-icon pull-l-1of12" href="<?php echo types_render_field( "report-pdf", array( 'raw' => true)); ?>" target="_blank"></a>
			</div>
		</div>
	
</div>

