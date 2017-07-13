<?php // Dynamic Version ?>



<?php
	// Using the Types function to load the contents of child posts and then starting a custom loop to output them
	$child_posts = types_child_posts("section"); // Load the contents of related posts in the array
	foreach ($child_posts as $child_post) { // Loop through each of the child post in the array
	?>
		<section class="topic cf">
			<aside class="m-all t-1of4 d-1of4 pull-l-1of12 pull-r-1of12 <?php echo types_render_field( "section-align", array( "id"=> "$child_post->ID", "output" => "raw" )); ?>">
				<h3><?php echo $child_post->post_title; ?></h3>
				<div class="m-padding">
					<p><?php echo types_render_field( "section-description", array( "id"=> "$child_post->ID" )); ?>
					</p>
				</div>
			</aside>

			<div class="slant slant--<?php echo types_render_field( "section-align", array( "id"=> "$child_post->ID", "output" => "raw" )); ?>"></div>

			<style>
				div.slant--<?php echo types_render_field( "section-align", array( "id"=> "$child_post->ID", "output" => "raw" )); ?>::before { background-image: url('<?php echo types_render_field( "section-image", array( "id"=> "$child_post->ID", "output" => "raw" )); ?>'); }
			</style>
		</section>
<?php } ?> 