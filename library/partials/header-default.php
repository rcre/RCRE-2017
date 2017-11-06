<!-- Header 2 - Page, Post and other Headers -->
<?php 
if ( has_post_thumbnail() ) {
	$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
} else {
	$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
}
?>

<div class="section-pllx">
	<div id="scene" class="layer-pllx pllx-back" data-relative-input="true" data-pointer-events="true">
		
		<div class="header header-default"	data-depth="0.10" style="background-image: url('<?php echo $bannerimg; ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader"></div>

		<div data-depth="0.30" class="callout cf">
			<div class="m-all t-2of3 d-4of7 center text-center cf">
				<h1 class="page-title" itemprop="headline">
					<?php the_title(); ?>
				</h1>
				<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
				
				<?php if ( is_home() ) { ?>
					<a title="Read More" class="cta-border-green btn-minify" href="<?php echo esc_url( get_permalink( ) ); ?>">Read More</a>
				<?php } ?>
				
			</div>
		</div>
	</div><!-- end scene -->
</div><!-- end parallax group -->