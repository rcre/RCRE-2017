<?php
/*
 Template Name: Listing Template
*/
?>

<?php 
	$listing_headline = types_render_field( "flyer-headline" );
	$listing_lease = types_render_field( "lease-rate" );
	$listing_price = types_render_field( "sale-price" );
	$listing_features = types_render_field( "listing-features" );
	$listing_google_maps = types_render_field( "google-maps-url", array( 'raw' => true) );
	$listing_flyer = types_render_field( "property-flyer", array( 'raw' => true) );
	$listing_description = types_render_field( "listing-description", array( 'raw' => true) );
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf m-padding pull-r-1of12 pull-l-1of12" role="main" tabindex="-1" itemscope itemtype="http://schema.org/Product">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="m-all t-all d-2of3 left cf">
				<section class="cf">
					<?php if ( $listing_headline != null ) { ?>
						<h3><?php echo $listing_headline; ?></h3>
					<?php } ?>
					
					<div class="d-all cf">
						<?php if ( $listing_headline != null ) { ?>
							<div class="listing-detail m-1of2 t-1of2 d-1of2">
								<h5>Lease Price:</h5> 
								<?php echo $listing_lease; ?>/SF
							</div>		
						<?php } ?>
				
						<?php if ( $listing_price != null ) { ?>
							<div class="listing-detail m-1of2 t-1of2 d-1of2">	
								<h5>Sale Price:</h5> 
								<?php echo $listing_price; ?>
							</div>
						<?php } ?>
					</div>

					<p itemprop="description">
						<?php echo $listing_description; ?>
					</p>

					<?php if ( $listing_headline != null ) { ?>
						<?php echo $listing_features; ?>
					<?php } ?>
	
					<a href="<?php echo $listing_flyer; ?>" class="cta-underline-gray" target="_blank">
						Property Flyer
					</a>
				

					<a href="<?php echo $listing_google_maps; ?>" class="cta-underline-gray" target="_blank">
						Google Maps
					</a>

				</section>
					
					<hr>

				<section class="cf">
					<h3 class="pad-top">Property Picture</h3>

				<?php 
					    // Do nothing if we don't have Types.
					    if( apply_filters( 'types_is_active', false ) ) {
					 
					        $output = '';
					        $post_id = get_the_ID();
					        $field_slug = 'main-property-picture';
					        $field_definition = wpcf_fields_get_field_by_slug( $field_slug );
					        
					        if( ! empty( $field_definition ) ) {
					     
					            $images = get_post_meta( $post_id, "wpcf-{$field_slug}" );

					            foreach( $images as $image_index => $image ) {

					                // Parameters for the Types field rendering mechanism.
					                $image_parameters = array(
					                    'proportional' => 'true',
					                    'url' => 'true',
					                    'field_value' => $image
					                );

					                // Get an image of specific (maximum) proportions.
					                // NOTE: Update image size to your needs
					                $thumbnail_parameters = array_merge( $image_parameters, array( 'width' => '200', 'height' => '200' ) );
					                $thumbnail_url = types_render_field_single( $field_definition, $thumbnail_parameters, null, '', $image_index );

					                // Get the image in full size.
					                $fullsize_parameters = array_merge( $image_parameters, array( 'size' => 'full' ) );
					                $fullsize_url = types_render_field_single( $field_definition, $fullsize_parameters, null, '', $image_index );

					                // Append the markup (a thumbnail linking to the full image) to existing content.
					                // NOTE: Customize the output to your needs
					                $output .= sprintf(
					                    '<div class="img"><a href=" '. $fullsize_url .' "><img src=" '. $thumbnail_url .' "></a></div>'
					                );
					            }
					        }

					        echo $output;
					    }
					?>
				</section>
			</div>
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


			<div class="cf d-1of3 m-hide">
				<aside id="contactSidebar">
					<?php get_template_part('library/partials/sectionListingContact'); ?>
				</aside>
			</div>
		
		</main>

		<footer class="article-footer cf">
		</footer>

		<div class="listing-contact">
			<div id="closeInfo" class="left">
				<i class="fa fa-close" aria-hidden="true"></i>
			</div>
			<a id="moreInfo" class="cta-border-gray">Request more info</a>
			<?php get_template_part('library/partials/sectionListingContact'); ?>
		</div>

	</div>

</div>

<?php get_footer(); ?>
