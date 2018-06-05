<!-- Listings -->
<?php 
	$listing_address = types_render_field( "address", array( 'raw' => true) );
	$listing_city = types_render_field( "city", array( 'raw' => true) );
	$listing_state = types_render_field( "state", array( 'raw' => true) );
	$listing_google_maps = types_render_field( "google-maps-url", array( 'raw' => true) );
	$listing_flyer = types_render_field( "property-flyer", array( 'raw' => true) );
 ?>

<div id="listing-header" role="banner" style="background-image: url('<?php echo rcre_header_image($post); ?>'); background-repeat: no-repeat; background-size: cover;" itemscope itemtype="http://schema.org/WPHeader">
	
		<div class="pull-r-1of12 pull-l-1of12 m-padding">

			<?php rcre_get_tags($post); ?>

			<?php
				
				// if it's an archive page, we need to get the name of the taxonomy for the title
				if ( is_archive() ) {
					$tax = $wp_query->get_queried_object();
					$archive_title = $tax->name;
				} else {
					$archive_title = get_the_title();
				}
				
			?>
			<!-- Callout Section for the Average Page-->
				<h1 itemprop="name"><?php echo $archive_title; ?></h1>
				
				<div class="header-link">
					<a class="header-light" href="<?php echo $listing_google_maps; ?>" role="button">
						<?php echo $listing_address; ?>, <?php echo $listing_city; ?>, <?php echo $listing_state; ?>
					</a>
				</div>

			
			<?php if ( $listing_flyer != null ) { ?>
				<a title="Download the PDF" class="download-icon pull-r-1of12" href="<?php echo $listing_flyer; ?>" alt="Download the PDF" target="_blank" role="button"></a>
			<?php } ?>

		</div>
	
</div>

