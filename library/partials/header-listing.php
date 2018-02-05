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

			<div class="tag blue">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', '', ''); ?>
			</div>

					
			<?php if ( is_tax('service') ) { ?>
				<div class="tag grey">
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
						<a class="header-light" href="<?php echo $listing_google_maps; ?>">
							<?php echo $listing_address; ?>, <?php echo $listing_city; ?>, <?php echo $listing_state; ?>
						</a>
					</div>
					
				</div>

				<a title="Download the PDF" class="m-1of2 download-icon pull-l-1of12" href="<?php echo $listing_flyer; ?>" target="_blank"></a>
			</div>
		</div>
	
</div>

