<!-- VERSION 5: Listings -->
<div id="single-header" class="cs-header" style="background-image: url('<?php echo(types_render_field( "main-property-picture", array( 'raw' => true) ));  ?>'); background-repeat: no-repeat; background-size: cover;" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<!-- Callout Section for the Average Page-->
		<div class="m-padding m-all t-all d-all cf">
			<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-all cf">
				
				<div class="tag tag--post-type">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?>
				</div>

				<?php if ( is_tax('service') ) { ?>
					<div class="tag tag--service">
				<?php echo get_the_term_list( $post->ID, 'service', '', ', ', ''); ?>
				</div>
				<? } ?>
				
				<h1 class="cs-h1"><?php the_title(); ?></h1>
				<p class="cs-subtitle">
				<?php echo types_render_field( "tagline", array( 'raw' => true)); ?>
				</p>
			</div>

			<p>Square Footage</p>
			<?php // Square Footage SF ?>

			<p>Lease Rate</p>
			<?php // Price SF ?>

			<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>"></a>
		</div>
	</div>

