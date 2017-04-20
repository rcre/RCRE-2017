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
			"President":"Kevin H. Abrams",
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
		    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
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

		<?php if( is_home() ) { ?>

			<!-- Frontpage Header -->
			<header id="page-header" class="header-home" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<!-- Callout Section for the Home Page-->
				<div class="callout cf">
					<div class="m-all t-1of2 d-1of2 center cf">
						<h1 class="page-title" itemprop="headline">Get Things Done.</h1>
						<p class="subtitle">RESOURCE helps you buy, lease and sell property, manage your assets and focus on what you love.</br>All without the corporate hoops.</p>
						
						<div class="header-buttons cf">
							<a href="#" id="cta-border-green" class="m-all t-all d-2of5">Contact Us</a>
							<a href="#" id="cta-solid-white" class="m-all t-all d-2of5">Search Properties</a>
						</div>
					</div>
				</div>
			</header>
			
		<?php } elseif (is_page()) { ?>
		

		<!-- Page, Post and other Headers -->
			<?php if (has_post_thumbnail($post->ID)) { ?>
			<?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>

				<header id="page-header" style="background-image: url('<?php echo $image; ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<!-- If no Picture, load the default BG -->
				<?php } else { ?> 
				<header id="page-header" class="default-bg" role="banner" itemscope itemtype="http://schema.org/WPHeader"> 
				<?php	} ?>
					
				<!-- Callout Section for the Average Page-->
				<div class="callout cf">
					<div class="m-all t-1of2 d-1of2 center cf">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						<p class="subtitle">RESOURCE helps you buy, lease and sell property, manage your assets and focus on what you love.</br>All without the corporate hoops.</p>
						
						<div class="header-buttons cf">
							<a href="#" id="cta-border-green" class="m-all t-all d-2of5">View Brokers</a>
							<a href="#" id="cta-solid-white" class="m-all t-all d-2of5">Find Properties</a>
						</div>
					</div>
				</div>
					
				</header>

			<?php } elseif (is_single()) { ?>

			
			<?php } else  { ?>

			<!-- Case Studies and Blog Post Headers -->
				<header id="page-header" class="cs-header" style="background-image: url('<?php echo types_render_field( "header-image", array( 'raw' => true)); ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<!-- Callout Section for the Average Page-->
					<div class="m-all t-all d-all cf">
						<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-1of2 cf">
							<div class="tag-post-type">Case Study</div>
							<h1 class="cs-h1"><?php the_title(); ?></h1>
							<p class="cs-subtitle">Catchy Comment about success</p>
						</div>
						<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>"></a>
					</div>
				</header>
		<?php } ?>
			