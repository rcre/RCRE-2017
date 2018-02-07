<!-- Page & Post Headers -->

<div id="scene" data-relative-input="true" data-pointer-events="true">
	
	<div loop="" muted="" autoplay="" class="header header-default" data-depth="0.10" style="background-image: url('<?php echo rcre_header_image($post); ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader"></div>

	<div data-depth="0.30" class="callout cf">
		<div class="m-all t-2of3 d-4of7 center text-center cf">
			<h1 class="page-title" itemprop="headline">
				<?php the_title(); ?>
			</h1>
			<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
			
			<?php if ( is_home() ) { ?>
				<a title="Read More" class="cta-border-green btn-minify" href="<?php echo esc_url( get_permalink( ) ); ?>" role="button">Read More</a>
			<?php } ?>
			
		</div>
	</div>
	
</div><!-- end scene -->