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
			<img style="margin: 30px" src="<?php echo get_template_directory_uri(); ?>/library/images/best-place-words.svg" alt="RESOURCE is a Best Place to Work">
			<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
			
			<div class="header-buttons cf">
				<a title="Contact Us" href="#" class="drift-open-chat cta-border-blue m-all t-all d-2of5" role="button">Chat with us</a>
				<a title="Search Our Properties" href="<?php echo site_url().'/search-properties'; ?>" class="cta-solid-gray m-all t-all d-2of5" role="button">Search Properties</a>
			</div>
		</div>
	</div>	
</div>
	