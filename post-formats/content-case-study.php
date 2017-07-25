<?php // This CONTENT displays the case studies as square icons ?>
<?php // Grab the link to the case study ?>
	<a class="m-1of3 t-1of3 d-1of3 pad-top" href="<?php echo esc_url( get_permalink() ); ?>">
<?php // Grab the image to the case study ?>
	<div class="case-study-icon">
		<?php echo types_render_field( "client-logo", array( "size" => "thumbnail" ));  ?>	
	</div>
	</a>

<?php // I removed: "id"=> "$child_post->ID", from the client logo array, becuase it was calling a child and than was ?>