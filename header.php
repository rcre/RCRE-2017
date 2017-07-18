<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>RESOURCE | <?php the_title(); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<meta name="keywords" content="real estate, resource, cre, commercial real estate, lease, office space, industrial, business, research, consulting, owner, occupier, sales,leasing, corporate services, property management, facilities management, project management, mortgage banking, appraisal, development, investment management">
		
		<?php // Safari Pinned tab ?>
		<link rel="mask-icon" href="library/images/website_icon_1.svg" color="#d2db3a">

		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-square-dark.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#d2db3a">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-square-dark.png">
            <meta name="theme-color" content="#d2db3a">
		
		<?php // Google reCaptcha API ?>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		
		<?php // Google reCaptcha code ?>
		<!-- <script>
 			function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);
		</script> -->

		 
		<?php // Enriched Google Cards ?>
		<script type="application/ld+json"> {
			"@context":"http://schema.org",
			"@type":"realEstateAgency",
			"url":"https://rcre.com/",
			"sameAs":["https://www.facebook.com/RESOURCEcre/",
					  "https://www.instagram.com/resourcecre/",
					  "https://www.linkedin.com/company/resource-commercial-real-estate",
					  "https://plus.google.com/u/0/b/104233585404626040656/+ResourceCommercialRealEstateIndianapolis",
					  "https://www.youtube.com/channel/UCpdLW5fmfNOKV4JYr2-0-w",
					  "https://www.pinterest.com/resourcecre",
					  "https://twitter.com/resourcecre"],
		    "@id":"#organization",
		    "name":"RESOURCE Commercial Real Estate",
		    "logo":"http://RCRE.com/wp-content/uploads/2016/02/RESOURCE-Commercial-Real-Estate-logo-01-01.jpg",
			"address" : {
				"@type": "PostalAddress",
				"addressLocality": "Indianapolis", 
				"addressRegion": "IN", 
				"postalCode": "46240", 
				"streetAddress": "9339 Priority Way West Drive" },
			"email":"info@rcre.com",
			"telephone":"3176636000",
			"openingHours": [ 
				"Mo-Fri 8:00-17:00"],
			"Headquarters":"Indianapolis",
			"President":"Kevin H. Adams",
			"Founded":"2005"
		}

		</script>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">
					<!-- Main Site logo -->
					<div id="logo" class="m-1of2 t-1of3 d-1of3">
						<a href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="Call RESOURCE"></a>
					</div>
					
					<div id="mobile-quick-nav" class="last-col">
					<!-- Call Button -->
						<div class="m-1of3 t-1of3 d-1of3">
							<a href="tel:317-663-6000" role="telephone"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-phone.svg" alt="Call RESOURCE" id="phone"></a>
						</div>
					<!-- Search Button -->
						<div class="m-1of3 t-1of3 d-1of3">
							<a href="#" role="search"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-search.svg" alt="Activate Menu" id="search"></a>
						</div>
					<!-- Open Mobile Menu Button -->
						<div id="menu-burger" class="m-1of3 t-1of3 d-1of3">
							<img aria-hidden aria-label="Open Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-menu-burger.svg" alt="Open Mobile Menu">
						</div>
					</div>

					<!-- Top Navigation -->
						<nav id="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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

					<!-- Mobile Navigation (I should add a PHP Function to call one of these)-->
						<nav id="mobile-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<?php wp_nav_menu(array(
		    					         'container' => false,
		    					         'container_class' => 'menu cf',
		    					         'menu' => __( 'The Mobile Menu', 'bonestheme' ),
		    					         'menu_class' => 'nav top-nav cf',               
		    					         'theme_location' => 'mobile-nav',                 
		    					         'before' => '',                                 
		        			               'after' => '',                                 
		        			               'link_before' => '',                           
		        			               'link_after' => '',                             
		        			               'depth' => 0,                                   
		    					         'fallback_cb' => ''  
								)); ?>
						</nav>
				</div>
			</header>

		<?php if ( is_front_page() ) { 
			// Header only for the home page
			get_template_part('library/partials/header-home');
			
		} elseif ( is_page() || is_archive() ) {
			// Header for all other pages
			get_template_part('library/partials/header-default');

		} elseif ( is_single() ) { 
			// Header for individual blog posts, case studies, and research reports
			get_template_part('library/partials/header-post');

		} elseif ( is_single('listing') ) {
			// Header for individual blog posts, case studies, and research reports
			get_template_part('library/partials/header-listing');

		} else {
			get_template_part('library/partials/header-default');
		} ?>
			