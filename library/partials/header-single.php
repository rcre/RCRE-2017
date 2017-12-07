<!-- Header 5 - Case Studies and Blog Post Headers -->

	<?php 

	if ( has_post_thumbnail() ) {
				$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			} else {
				$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
			}

	 ?>

	<div id="single-header" class="cs-header" style="background-image: url('<?php echo $bannerimg; ?>'); background-repeat: no-repeat; background-size: cover;" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<!-- Callout Section for the Average Page-->
		<div class="m-padding cf">
			<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-11of12 cf">
				
				<div class="tag blue">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', '', ''); ?>
				</div>

				<?php if ( is_tax('service') ) { ?>
					<div class="tag gray">
				<?php echo get_the_term_list( $post->ID, 'service', '', '', ''); ?>
				</div>
				<?php } ?>
				
				<h1><?php the_title(); ?></h1>
				
				<p class="subtitle">
				<?php echo types_render_field( "tagline", array( 'raw' => true)); ?>
					
				<?php if ( types_render_field( "full-time" ) != null ) {
					echo types_render_field( "full-time", array( 'raw' => true));
				} ?>
				
				</p>

				<?php if ( types_render_field( "read-time" ) != null ) { ?>
					<div class="tag-no-link"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php echo types_render_field( "time-to-read", array( $post->ID, 'raw' => true)); ?> Minute Read</div>
				<?php } ?>


			</div>

			<?php if ( types_render_field( "report-pdf" ) != null ) { ?>
					<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "report-pdf", array( $post->ID, 'raw' => true ) ); ?>" alt="Download the PDF" target="_blank"></a>
				<?php } ?>

			<?php if ( types_render_field( "downloadable-pdf" ) != null ) { ?>
					<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( $post->ID, 'raw' => true)); ?>" alt="Download the PDF" target="_blank"></a>
				<?php } ?>

				<?php if ( types_render_field( "job-pdf" ) != null ) { ?>
					<a title="Download the PDF" class="download-icon pull-l-1of12" href="<?php echo types_render_field( "job-pdf", array( $post->ID, 'raw' => true ) ); ?>" alt="Download the PDF" target="_blank"></a>
				<?php } ?>

			
		</div>
	</div>