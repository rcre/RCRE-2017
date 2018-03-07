<!-- Frontpage Header -->

<div id="hero">
	<div class="header-video">
		<video loop="" muted="" autoplay="" title="Massachusetts Avenue in Downtown Indianapolis" poster="<?php echo get_template_directory_uri(); ?>/library/images/bg/best-places-to-work-small-still.jpg" class="fullscreen">
			<source src="https://rcre.com/wp-content/uploads/2018/03/best-places-to-work-small.mp4" type="video/mp4">
		</video>
	</div>

	<div class="callout cf">
		<div class="m-all t-1of2 d-1of2 center text-center cf">
			<!-- <h1 class="page-title" itemprop="headline">Get Things Done.</h1> -->
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/best-place-words-01-01.svg" alt="">
			<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
			
			<div class="header-buttons cf">
				<a title="Contact Us" href="/#contactUs" class="cta-border-green m-all t-all d-2of5" role="button">Contact Us</a>
				<a title="Search Our Properties" href="<?php echo site_url().'/search-properties'; ?>" class="cta-solid-white m-all t-all d-2of5" role="button">Search Properties</a>
			</div>
		</div>
	</div>	
</div>
	