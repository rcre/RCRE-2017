<!-- VERSION 3: Case Studies and Blog Post Headers -->

	<div id="single-header" class="cs-header" style="background-image: url('<?php echo $bannerimg; ?>'); background-repeat: no-repeat; background-size: cover;" role="banner" itemscope itemtype="http://schema.org/WPHeader">

	<!-- Callout Section for the Average Page-->
		<div class="m-padding cf">
			<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-11of12 cf">
				
				<div class="tag blue">
				<?php echo get_the_term_list( $post->ID, 'specialty', '', 'x', ''); ?>
				</div>

				<?php if ( is_tax('service') ) { ?>
					<div class="tag gray">
				<?php echo get_the_term_list( $post->ID, 'service', '', '', ''); ?>
				</div>
				<?php } ?>
				
				<h1 class="cs-h1"><?php the_title(); ?></h1>
				<p class="cs-subtitle">
				<?php echo types_render_field( "tagline", array( 'raw' => true)); ?>
				</p>
			</div>

			<?php if ( types_render_field( "report-pdf" ) != null ) { ?>
					<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "report-pdf", array( 'raw' => true)); ?>" alt="Download the PDF"></a>
				<?php } ?>

			<?php if ( types_render_field( "downloadable-pdf" ) != null ) { ?>
					<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>" alt="Download the PDF"></a>
				<?php } ?>
		</div>
	</div>