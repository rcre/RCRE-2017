<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msvalidate.01" content="DF45D5729702D2192315938E6E10F5DD" />
		
		<title><?php wp_title(); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		
		<?php // Behavioral Meta Data ?>
  		<meta name="apple-mobile-web-app-capable" content="yes">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<meta name="keywords" content="<?php the_title(); ?>">

		<script async defer src="https://www.google.com/recaptcha/api.js"></script>	

		<?php // Google Tag Manager ?>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TSZKKGS');</script>
		<!-- End Google Tag Manager -->
		
		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-touch-icon.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/favicons/manifest.json">
		
		<link rel="shortcut icon" href="/favicon.ico">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/library/favicons/browserconfig.xml">

		<link rel="mask-icon" href="https://rcre.com/wp-content/uploads/2018/01/logo-rcre-safari-icon.svg" color="#75caca">
		<meta name="theme-color" content="#75caca">

		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // Enriched Google Cards ?>
		<script type="application/ld+json"> {
			"@context":"http://schema.org",
			"@type":"organization",
			"name":"RESOURCE Commercial Real Estate",
			"url":"https://rcre.com/",
			"logo":"https://rcre.com/wp-content/uploads/2017/09/social-media-icon.jpg",
			"contactPoint": {
			    "@type": "ContactPoint",
			    "telephone": "+1-317-663-6000",
			    "contactType": "Customer service"
			  },
			"sameAs":["https://www.facebook.com/RESOURCEcre/",
					  "https://www.instagram.com/resourcecre/",
					  "https://www.linkedin.com/company/resource-commercial-real-estate",
					  "https://plus.google.com/u/0/b/104233585404626040656/+ResourceCommercialRealEstateIndianapolis",
					  "https://www.youtube.com/channel/UCpdLW5fmfNOKV4JYr2-0-w",
					  "https://www.pinterest.com/resourcecre",
					  "https://vimeo.com/resourcecre",
					  "https://twitter.com/resourcecre"],
			"address" : {
				"@type": "PostalAddress",
				"addressLocality": "Indianapolis", 
				"addressRegion": "IN", 
				"postalCode": "46240", 
				"streetAddress": "9339 Priority Way West Drive" },
			"email":"info@rcre.com",
			"telephone":"3176636000",
			"foundingDate":"2005"
		}

		</script>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSZKKGS" height="0" width="0" style="display:none;visibility:hidden">
			</iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		
	 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div id="container">

			<header>

				<div id="inner-header">

					<div id="logo" itemscope itemtype="http://schema.org/Organization">
						<a title="Go to RESOURCE Homepage" itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow">
							<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo">
						</a>
					</div>
					
					<div class="space"></div>

					<div id="call">
						<a title="Call RESOURCE" itemprop="telephone" href="tel:1-317-663-6000" role="telephone">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-phone.svg" alt="Call RESOURCE">
						</a>
					</div>

					<?php 
						get_template_part( 'searchform' ); 
					?>

					<?php // Top Navigation ?>
						<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
	    					         'container' => false,                           // remove nav container
	    					         'container_class' => 'cf',                 // class of container (should you choose to use it)
	    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					         'theme_location' => 'main-nav',                 // where it's located in the theme
	        			             'depth' => 0,                                   // limit the depth of the nav
	    					         'fallback_cb' => ''                            // fallback function (if there is one)
							)); ?>
						</nav>

					<div id="searchButton">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>

					<div id="menu-burger">
					</div>

				</div>
			</header>

		<?php 
			
			if ( is_front_page() ) {
				get_template_part( 'library/partials/header-home' );
			
			} elseif ( get_post_type() == "employee" ) {
				get_template_part('library/partials/header-none');

			} elseif ( get_post_type() == "listing" ) {
				get_template_part('library/partials/header-listing');

			} elseif ( is_page_template( 'single-landing-page.php' ) ) {
				get_template_part('library/partials/header-none');

			} elseif ( is_404() ) {
				get_template_part('library/partials/header-404');

			} elseif ( is_single() ) {
				get_template_part('library/partials/header-single');

			} elseif ( is_search() ) {
				get_template_part('library/partials/header-none');

			} else {
				get_template_part('library/partials/header-default');
			} ?>
				