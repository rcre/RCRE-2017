<!-- Header 3 - Frontpage Header -->

<header>
	<div class="header-video">
		<video loop="" muted="" autoplay="" poster="<?php echo get_template_directory_uri(); ?>/library/images/header-desktop.jpg" class="fullscreen">
			<source src="https://rcre.com/wp-content/uploads/2018/01/header.mp4" type="video/mp4">
		</video>
	</div>

	<div class="callout cf">
		<div class="m-all t-1of2 d-1of2 center text-center cf">
			<h1 class="page-title" itemprop="headline">Start the New Year</br>off right.</h1>
			<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
			
			<div class="header-buttons cf">
				<a title="Contact Us" href="/#contactUs" class="cta-border-green m-all t-all d-2of5">Contact Us</a>
				<a title="Search Our Properties" href="<?php echo site_url().'/search-properties'; ?>" class="cta-solid-white m-all t-all d-2of5">Search Properties</a>
			</div>
		</div>
	</div>	
</header>
