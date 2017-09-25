<!-- VERSION 1: Frontpage Header -->
<div id="page-header" class="page--Home" role="banner">
	<!-- Callout Section for the Home Page-->
	<div class="callout cf">
		<div class="m-all t-1of2 d-1of2 center cf">
			<h1 class="page-title" itemprop="headline">Get Things Done.</h1>
			<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
			
			<div class="header-buttons cf">
				<a title="Contact Us" href="/#contactUs" id="cta-border-green" class="m-all t-all d-2of5">Contact Us</a>
				<a title="Search Our Properties" href="<?php echo site_url().'/search-properties'; ?>" id="cta-solid-white" class="m-all t-all d-2of5">Search Properties</a>
			</div>
		</div>
	</div>
</div>