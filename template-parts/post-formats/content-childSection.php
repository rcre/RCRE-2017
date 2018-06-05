<!-- content-childSection.php -->
	<?php 
		
		$child_posts = types_child_posts( "section" ); // Load the contents of related posts in the array
		
		foreach ($child_posts as $child_post) {  

			$section_align = types_render_field( "section-align" , array( "id"=> "$child_post->ID" , "raw" => true ) );
			$button_link = types_render_field( "button-link", array( "id" => "$child_post->ID" ));
			$section_description = types_render_field( "section-description", array( "id" => "$child_post->ID" ));
			$section_image = types_render_field( "section-image", array( "id"=> "$child_post->ID" , 'raw' => true ) );
			
			?>

			<section style="background-image: url('<?php echo $section_image; ?>');" class="topic cf">

			<aside class="m-all t-1of3 d-1of3 pull-l-1of12 pull-r-1of12 <?php echo $section_align; ?>">
				<h3 class="m-padding"><?php echo $child_post->post_title; ?></h3>
				<div class="m-padding">
					<?php echo $section_description; ?>
					
					<?php if ( $button_link != null ) { ?>
						<a href="<?php echo $button_link; ?>" class="cta-border-green"><?php echo $child_post->post_title; ?></a>
					<?php } ?>
				</div>
			</aside>

			<div class="slant slant--<?php echo $section_align; ?>"></div>
			</section>

	<?php } wp_reset_postdata(); ?>