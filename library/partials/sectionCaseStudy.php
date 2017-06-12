
<section id="case-study">
	<div class="pad">
		<h3>Case Studies</h3>
	
		<div class="grid">
		<?php $child_posts = types_child_posts("case-study"); 
		foreach ($child_posts as $child_post) { ?>
		
		<?php // Grab the link to the case study ?>
		<a href="#">
		<?php // Grab the image to the case study ?>
		<div class="case-study-icon">
			<?php echo types_render_field( "client-logo", array( "id"=> "$child_post->ID", "size" => "thumbnail" ));  ?>	
		</div>
		</a>

		<?php } ?>
		</div>
	</div>
</section>