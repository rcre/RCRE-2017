<?php // This CONTENT displays the case studies as square icons ?>
<?php // Grab the link to the case study ?>
	<a href="<?php echo esc_url( get_permalink() ); ?>">
<?php // Grab the image to the case study ?>
	<div class="case-study-icon m-1of2 t-1of3 d-1of3">
		<?php echo types_render_field( "client-logo", array( "id"=> "$child_post->ID", "size" => "thumbnail" ));  ?>	
	</div>
	</a>
