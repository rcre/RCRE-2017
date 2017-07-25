<!-- VERSION 5: Listings -->

<div id="listing-header" class="cs-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
	
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

			<div class="callout cf">
				
				<h1 class="header-dark"><?php the_title(); ?></h1>
				<a id="cta-underline-gray" class="h5" href="<?php echo(types_render_field( "google-maps-url", array( 'raw' => true) )); ?>" ><?php echo(types_render_field( "address", array( 'raw' => true) )); ?></a>
			</div>

			<div class="m-1of2 t-1of3 d-1of6 left pad-top">
				<h4>Square Footage</h4>
					<?php echo(types_render_field( "square-footage", array( 'raw' => true) )); ?> SF
				<h4>Lease Price</h4>
					$<?php echo(types_render_field( "lease-rate", array( 'raw' => true) )); ?>.00/SF
			</div>

			<a class="m-1of2 download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>"></a>
		</div>
	</div>
</div>

