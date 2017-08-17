<div class="m-all t-1of2 d-1of3">

		<div class="listing-box cf">
			<div class="listing-image d-1of3 t-1of3 m-1of3">
				<?php echo types_render_field( "main-property-picture", array( 'size' => 'thumbnail' )); ?>
			</div>

			<div class="listing-info d-2of3 t-2of3 m-2of3">
				
				<a href="<?php echo esc_url( get_post_permalink() ); ?>"><h4><?php echo the_title(); ?></h4></a>

				<!-- <div class="tag blue">
					<?php // echo get_the_term_list( '', 'specialty', '', '', ''); ?>
				</div>

				<div class="tag red">
					<?php // echo get_the_term_list( '', 'listing-type', '', '', ''); ?>
				</div> -->
				
				<div class="listing-post-details cf">
					
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
				</div>
			</div>
		</div>

</div>