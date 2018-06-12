<!-- Case Studies & Blog Post Headers -->

<?php 
	$pdf = types_render_field( "downloadable-pdf", array( $post->ID, 'raw' => true));
	$full_time = types_render_field( "full-time", array( 'raw' => true));
	$tagline = types_render_field( "tagline", array( 'raw' => true));
	$time_to_read = types_render_field( "time-to-read" );

	$background = rcre_header_image( $post );
	if ( $background != null ) {
		$styles = "background-repeat: no-repeat; background-size: cover;";
	}
?>

<div id="single-header" style="background-image: url('<?php echo $background; ?>'); <?php echo $styles; ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<div class="m-padding pad-top cf">
		<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-11of12 cf">
			
			<?php rcre_get_tags($post); ?>

			<h1><?php the_title(); ?></h1>
			
			<p class="subtitle">
			<?php echo $tagline; ?>
				
			<?php if ( $full_time != null ) {
				echo $full_time;
			} ?>
			
			</p>

			<?php if ( $time_to_read != null ) { ?>
				<div class="tag"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php echo $time_to_read; ?> Minute Read</div>
			<?php } ?>
		</div>

		<?php // Get the link for the download PDF ?>
		<?php if ( $pdf != null ) { ?>
			<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo $pdf; ?>" alt="Download the PDF" target="_blank" role="button"></a>
		<?php } ?>
	</div>
</div>