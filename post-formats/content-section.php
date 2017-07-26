<?php

	global $style;
	$style = 0; 
	//echo '<ul>';
	$base_args = array(
    'hierarchical' => 0
  );
  if (has_children()) {
    $args = array(
      'child_of' => $post->ID,
      'parent' => $post->ID
    );
  } else {
    if (is_top_level()) {
      $args = array(
        'child_of' => $post->post_parent,
        'parent' => $post->post_parent
      );
    } else {
      $args = array(
        'parent' => 0
      );
    }
  }
  
  if (has_children()) {

	  $args = array_merge($base_args, $args);
	  $pages = get_pages($args);

	  foreach ($pages as $page) { 
			$thumb_id = get_post_thumbnail_id($page->ID);
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0]; 
			$style++;

			if($style % 2 == 0){
			    $imgClass = 'left';
			    $descClass = 'right';
			} else {
			    $imgClass = 'right';
			    $descClass = 'left';
			}
	?>

		<section style="background-image: url('<?php echo $thumb_url; ?>');" class="topic cf">

			<aside class="m-all t-1of3 pull-l-1of12 pull-r-1of12 <?php echo $imgClass; ?>">
				<h3><?php echo $page->post_title; ?></h3>
				<div class="m-padding">
					<p><?php echo types_render_field( "excerpt", array( "id"=> "$page->ID" )); ?>
					</p>
					<a href="<?php echo get_permalink("$page->ID"); ?>" class="cta-border-green"><?php echo types_render_field( "tagline", array( "id"=> "$page->ID" )); ?></a>
				</div>
			</aside>

			<div class="slant slant--<?php echo $imgClass; ?>"></div>
		</section>

	<?php } } else { ?>

		<section class="pull-l-1of12 pull-r-1of12 m-all cf">
			<?php the_content(); ?>
		</section>
		

	<?php } wp_reset_postdata(); ?>




	