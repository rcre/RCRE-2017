
	<div class="search-box">
	<a href="<?php esc_url( the_permalink() ); ?>">
	<div class="picture" style="background-image: url('<?php echo rcre_header_image($post); ?>');">
		<div class="left tag-no-link">
			<?php 
				if( taxonomy_exists( 'specialty' ) ) {
					echo strip_tags (
				    	get_the_term_list( get_the_ID(), 'specialty', '','' )
					);

				} ?>
		</div>

		<div class="left tag-no-link">
			<?php 
				if( taxonomy_exists( 'listing-type' ) ) {

					echo strip_tags (
				    	get_the_term_list( get_the_ID(), 'listing-type', '','' )
					);

				} ?>
		</div>
	</div>
	<a href="<?php esc_url( the_permalink() ); ?>">

		<div class="content">
			<h4><?php the_title(); ?></h4>
				
			<?php if ( has_term( 'retail' , 'specialty') && has_term( 'office' , 'service') ) { ?>
				<?php if ( types_render_field( "square-footage" ) != null ) { ?>
					<div class="listing-detail">
						<h5>Square Footage:</h5> <?php echo types_render_field( "square-footage", array( 'raw' => true) ); ?>
					</div>
				<?php } ?>
			<?php } ?>

			<?php if ( has_term( 'multifamily' , 'specialty') ) { ?>
				<?php if ( types_render_field( "units" ) != null ) { ?>
					<div class="listing-detail">
						<h5>Units:</h5> <?php echo types_render_field( "units", array( 'raw' => true) ); ?> 
					</div>
				<?php } ?>
			<?php } ?>

			<?php if ( types_render_field( "lease-rate" ) != null ) { ?>
				<div class="listing-detail">
					<h5>Lease Price:</h5> <?php echo types_render_field( "lease-rate", array( 'raw' => true) ); ?>
				</div>		
			<?php } ?>
			
			<?php if ( types_render_field( "sale-price" ) != null ) { ?>
				<div class="listing-detail">	
					<h5>Sale Price:</h5> <?php echo types_render_field( "sale-price", array( 'raw' => true) ); ?>
				</div>
			<?php } ?>

			<hr>
			
			<div class="text-center">
				<a class="blue-link" href="<?php esc_url( the_permalink() ); ?>">See Details</a>
			</div>
			
		</div>	
	</div>
