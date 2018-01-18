<!-- content-case-study.php -->
	<a class="m-1of3 t-1of3 d-1of3 pad-top" href="<?php echo esc_url( get_permalink() ); ?>">
<?php // Grab the image to the case study ?>
	<div class="case-study-icon">
		<!-- this is where I'm testing -->
		<img src="<?php echo types_render_field( "client-logo", array( 'output' => 'raw' ));  ?>" alt="Client Logo">	
	</div>
	</a>

<?php // I removed: "id"=> "$child_post->ID", from the client logo array, becuase it was calling a child and than was ?>