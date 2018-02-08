<section class="pad-top">
	<div class="pull-l-1of12 pull-r-1of12 m-padding cf">
		<div class="uvp">
			<?php echo types_render_field( "service-main-description" ); ?>
		</div>
		<div class="selling-point-grid">
			<div class="selling-point">
				<?php if ( types_render_field( "feature-1-icon") != null ) {
					// Display Icon for the Feature, if an icon has been selected
					echo types_render_field( "feature-1-icon" );
				} ?>
				<h5><?php echo types_render_field( "feature-1-headline" ); ?></h5>
				<?php echo types_render_field( "feature-1" ); ?>
			</div>
			<div class="selling-point">
				<?php if ( types_render_field( "feature-2-icon") != null ) {
					// Display Icon for the Feature, if an icon has been selected
					echo types_render_field( "feature-2-icon" );
				} ?>
				<h5><?php echo types_render_field( "feature-2-headline" ); ?></h5>
				<?php echo types_render_field( "feature-2" ); ?>
			</div>
			<div class="selling-point">
				<?php if ( types_render_field( "feature-3-icon") != null ) {
					// Display Icon for the Feature, if an icon has been selected
					echo types_render_field( "feature-3-icon" );
				} ?>
				<h5><?php echo types_render_field( "feature-3-headline" ); ?></h5>
				<?php echo types_render_field( "feature-3" ); ?>
			</div>
		</div>
	</div>
</section>