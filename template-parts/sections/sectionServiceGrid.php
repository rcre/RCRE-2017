<?php // SECTION Service Grid ?>

<section>
	<h2 class="header-dark text-center header-margin">Everything you need, all in one place.</h2>

	<div class="selling-point-grid">
		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-sale.svg" alt="Property for Sale Icon">
			<h4><a itemprop="url" class="header-link" href="<?php echo site_url().'/search-properties'; ?>">Buy</a></h4>
			<p itemprop="description">Check out our listings, or view our specialties.</p>
		</div>
	
		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-lease.svg" alt="Property for Lease Icon">
			<h4><a itemprop="url" class="header-link" href="/#contactUs">Lease</a></h4>
			<p itemprop="description">Check out our listings, or view our specialties.</p>
		</div>

		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-sale.svg" alt="Property for Sale Icon">
			<h4><a itemprop="url" class="header-link" href="#contactUs">Sell</a></h4>
			<p itemprop="description">Let us help you find the perfect buyer for your property.</p>
		</div>

		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-cash.svg" alt="Cash and Investments Icon">
			<h4><a itemprop="url" class="header-link" href="<?php echo site_url().'/about/team/wernke-team/'; ?>">Invest</a></h4>
			<p itemprop="description">Ranging from student housing to senior living, expand your investment portfolio.</p>
		</div>

		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-speech-consultation.svg" alt="Get real estate advice at RESOURCE">
			<h4><a itemprop="url" class="header-link" href="tel:317-663-6000">Get Advice</a></h4>
			<p itemprop="description">Don&#39;t burden yourself! Let an expert help you get you what you need. No strings attached.</p>
		</div>
	
		<div class="service-box" itemscope itemtype="http://schema.org/Service">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-computer.svg" alt="Learn more from our blog">
			<h4><a itemprop="url" class="header-link" href="<?php echo site_url().'/blog'; ?>">Learn</a>
			</h4>
			<p itemprop="description">What good is knowledge if you don&#39;t share? Check out some of the latest blog posts.</p>
		</div>
	</div>
</section>