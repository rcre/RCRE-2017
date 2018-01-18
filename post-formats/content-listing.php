<!-- content-listing.php -->

<div class="m-all t-1of2 d-1of3">

		<div class="listing-box cf">
		<div class="d-1of4 t-1of3 m-1of4">
			<div class="listing-image">
				<?php echo types_render_field( "main-property-picture", array( 'size' => 'thumbnail' )); ?>
			</div>
		</div>
			<div class="listing-info d-3of4 t-2of3 m-3of4 cf ">

				
				<a class="m-all" href="<?php echo esc_url( get_post_permalink() ); ?>"><h4><?php echo the_title(); ?></h4></a>
				
				<div class="tag-no-link">
					<?php 
						if( taxonomy_exists( 'specialty' ) ) {

							echo strip_tags (
						    	get_the_term_list( get_the_ID(), 'specialty', '','' )
							);

						} ?>
				</div>

				<div class="tag-no-link">
					<?php 
						if( taxonomy_exists( 'listing-type' ) ) {

							echo strip_tags (
						    	get_the_term_list( get_the_ID(), 'listing-type', '','' )
							);

						} ?>
				</div>
				
				<div class="listing-post-details pad-top cf">
					
					<?php if ( has_term( 'retail' , 'specialty') && has_term( 'office' , 'service') ) { ?>
						<div class="d-1of2 t-1of2 m-1of2">
							<?php if ( types_render_field( "square-footage" ) != null ) { ?>
								<h4>Square Footage</h4>
								<?php echo types_render_field( "square-footage", array( 'raw' => true) ); ?>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if ( has_term( 'multifamily' , 'specialty') ) { ?>
						<div class="d-1of2 t-1of2 m-1of2">
							<?php if ( types_render_field( "units" ) != null ) { ?>
								<h4>Units</h4>
								<?php echo types_render_field( "units", array( 'raw' => true) ); ?>
							<?php } ?>
						</div>
					<?php } ?>

					<div class="d-1of2 t-1of2 m-1of2">
						<?php if ( types_render_field( "lease-rate" ) != null ) { ?>
							<h4>Lease Price</h4>
							<?php echo types_render_field( "lease-rate", array( 'raw' => true) ); ?>
						<?php } ?>
					</div>

					<div class="d-1of2 t-1of2 m-1of2">
						<?php if ( types_render_field( "sale-price" ) != null ) { ?>
							<h4>Sale Price</h4>
							<?php echo types_render_field( "sale-price", array( 'raw' => true) ); ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

</div>