<!-- content-listing -->
<?php 
	$listing_closed = types_render_field( "closed-date", array( 'raw' => true) ); 
?>


	<div class="search-box">
	<a href="<?php esc_url( the_permalink() ); ?>">
		<div class="picture" style="background-image: url('<?php echo rcre_header_image($post); ?>');">
		</div>
	</a>
		<div class="content">
			
			<?php // Get all the tags
				echo get_the_term_list( $post->ID, 'specialty', '<div class="tag blue">', '</div><div class="tag blue">', '</div>');
				echo get_the_term_list( $post->ID, 'service', '<div class="tag gray">', '</div><div class="tag gray">', '</div>');
				echo get_the_term_list( $post->ID, 'listing-type', '<div class="tag green">', '</div><div class="tag green">', '</div>'); 
			?>
	
		<div class="cf"></div>
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
