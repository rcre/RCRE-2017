<?php // SECTION Service Grid ?>

<section class="service-grid cf">
	<div class="pull-l-1of12 pull-r-1of12 m-padding">
	<h2 class="header-dark text-center">Everything you need, all in one place.</h2>
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-sale.svg" alt="Property for Sale Icon">
				<h4><a itemprop="name" class="header-link" href="<?php echo site_url().'/search-properties'; ?>">Buy</a></h4>
				<p itemprop="description">Check out our listings, or view our specialties.</p>
				<a itemprop="url" class="blue-link" href="<?php echo site_url().'/search-properties'; ?>">View Our Listings</a>
			</div>
		</div>
		
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box m-end" itemscope itemtype="http://schema.org/Service">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-lease.svg" alt="Property for Lease Icon">
				<h4><a itemprop="name" class="header-link" href="#">Lease</a></h4>
				<p itemprop="description">Check out our listings, or view our specialties.</p>
				<a itemprop="url" class="blue-link" href="/#contactUs">Request Property Tour</a>
			</div>
		</div>
		
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box d-end" itemscope itemtype="http://schema.org/Service">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-sale.svg" alt="Property for Sale Icon">
				<h4><a itemprop="name" class="header-link" href="#contactUs">Sell</a></h4>
				<p itemprop="description">Let us help you find the perfect buyer for your property.</p>
				<a itemprop="url" class="blue-link" href="/#contactUs">List Your Property</a>
			</div>
		</div>
		
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box m-end" itemscope itemtype="http://schema.org/Service">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-cash.svg" alt="Cash and Investments Icon">
				<h4><a itemprop="name" class="header-link" href="#contactUs">Invest</a></h4>
				<p itemprop="description">Ranging from student housing to senior living, expand your investment portfolio.</p>
				<a itemprop="url" class="blue-link" href="/#contactUs">Browse Investment Properties</a>
			</div>
		</div>
		
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box" itemscope itemtype="http://schema.org/Service">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-speech-consultation.svg" alt="Get real estate advice at RESOURCE">
				<h4><a itemprop="name" class="header-link" href="tel:317-663-6000">Get Advice</a></h4>
				<p itemprop="description">Don&#39;t burden yourself! Let an expert help you get you what you need. No strings attached.</p>
				<a itemprop="url" class="blue-link" href="tel:317-663-6000" role="telephone">Give us a Call</a>
			</div>
		</div>
		
		<div class="m-1of2 t-1of3 d-1of3">
			<div class="service-box m-end d-end" itemscope itemtype="http://schema.org/Service">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-computer.svg" alt="Learn more from our blog">
				<h4><a itemprop="name" class="header-link" href="<?php echo site_url().'/blog'; ?>">Learn</a></h4>
				<p itemprop="description">What good is knowledge if you don&#39;t share? We compiled a database of info, free for you.</p>
				<a itemprop="url" class="blue-link" href="<?php echo site_url().'/blog'; ?>">Read the Blog</a>
			</div>
		</div>
	</div>
</section>