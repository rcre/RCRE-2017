<!-- Case Studies & Blog Post Headers -->

<div id="single-header" style="background-image: url('<?php echo rcre_header_image($post); ?>'); background-repeat: no-repeat; background-size: cover;" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<div class="m-padding cf">
		<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-11of12 cf">
			
			<?php // Get all the tags
				echo get_the_term_list( $post->ID, 'specialty', '<div class="tag blue">', '</div><div class="tag blue">', '</div>');
				echo get_the_term_list( $post->ID, 'service', '<div class="tag gray">', '</div><div class="tag gray">', '</div>');
			?>

			<h1><?php the_title(); ?></h1>
			
			<p class="subtitle">
			<?php echo types_render_field( "tagline", array( 'raw' => true)); ?>
				
			<?php if ( types_render_field( "full-time" ) != null ) {
				echo types_render_field( "full-time", array( 'raw' => true));
			} ?>
			
			</p>

			<?php if ( types_render_field( "time-to-read" ) != null ) { ?>
				<div class="tag-no-link"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php echo types_render_field( "time-to-read", array( $post->ID, 'raw' => true)); ?> Minute Read</div>
			<?php } ?>


		</div>

		<?php if ( types_render_field( "report-pdf" ) != null ) { ?>
				<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "report-pdf", array( $post->ID, 'raw' => true ) ); ?>" alt="Download the PDF" target="_blank" role="button"></a>
			<?php } ?>

		<?php if ( types_render_field( "downloadable-pdf" ) != null ) { ?>
				<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( $post->ID, 'raw' => true)); ?>" alt="Download the PDF" target="_blank" role="button"></a>
			<?php } ?>

			<?php if ( types_render_field( "job-pdf" ) != null ) { ?>
				<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "job-pdf", array( $post->ID, 'raw' => true ) ); ?>" alt="Download the PDF" target="_blank" role="button"></a>
			<?php } ?>
	</div>
</div>