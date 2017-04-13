

<div id="<?php echo types_render_field( "broker-name", array( 'raw' => true)); ?> ?>" class="employee d-1of6 t-1of4 m-1of2">
	
	<?php // Show the Employee's Picture  ?>
	<img class="broker-profile-picture" src="<?php echo types_render_field( "broker-profile-picture", array( 'raw' => true)); ?>" alt="<?php // Broker Name ?>">
	
	<?php // Show the Employee's Name  ?>
	<h4><?php echo types_render_field( "broker-name", array( 'raw' => false) ); ?></h4>

	<?php // Show the Employee's Title  ?>
	<h3><?php echo types_render_field( "broker-title", array( 'raw' => false) ); ?></h3>

	<?php // Link to the Employee's Profile Page  ?>
	<a class="link" href="<?php esc_url( get_permalink() ); ?>">View Profile</a>
</div>