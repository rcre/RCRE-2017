<?php 

$icon_1 = types_render_field( "feature-1-icon", array( 'raw' => false) ); 
$icon_2 = types_render_field( "feature-2-icon", array( 'raw' => false) );
$icon_3 = types_render_field( "feature-3-icon", array( 'raw' => false) );
$headline_1 = types_render_field( "feature-1-headline" , array( 'raw' => true));
$headline_2 = types_render_field( "feature-2-headline" , array( 'raw' => true));
$headline_3 = types_render_field( "feature-3-headline" , array( 'raw' => true));
$feature_1 = types_render_field( "feature-1", array( 'raw' => true));
$feature_2 = types_render_field( "feature-2", array( 'raw' => true) );
$feature_3 = types_render_field( "feature-3", array( 'raw' => true));

?>

<section class="pad-top m-padding">
	<div class="uvp">
		<?php echo types_render_field( "service-main-description" ); ?>
	</div>
	<div class="selling-point-grid">
		<div class="selling-point">
			<?php if ( $icon_1 != null ) {
				echo $icon_1;
			} ?>
			<h5><?php echo $headline_1; ?></h5>
			<?php echo $feature_1; ?>
		</div>
		<div class="selling-point">
			<?php if ( $icon_2 != null ) {
				echo $icon_2;
			} ?>
			<h5><?php echo $headline_2; ?></h5>
			<?php echo $feature_2; ?>
		</div>
		<div class="selling-point">
			<?php if ( $icon_3 != null ) {
				echo $icon_3;
			} ?>
			<h5><?php echo $headline_3; ?></h5>
			<?php echo $feature_3; ?>
		</div>
	</div>
</section>