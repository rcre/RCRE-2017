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
		
		<title>RESOURCE | <?php the_title(); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<meta name="description" content="RESOURCE helps you buy, lease and sell property, manage your assets and focus on what you love. All without the corporate hoops.">

		<meta name="keywords" content="real estate, resource, cre, commercial real estate, lease, office space, industrial, business, research, consulting, owner, occupier, sales,leasing, corporate services, property management, facilities management, project management, mortgage banking, appraisal, development, investment management">
		

		<?php // Safari Pinned tab ?>
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/website_icon_1.svg" color="#d2db3a">

		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-square-dark.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
		<meta name="msapplication-TileColor" content="#75caca">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/ms-icon-144x144.png">
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
			"contactPoint": {
			    "@type": "ContactPoint",
			    "telephone": "+1-317-663-6000",
			    "contactType": "Customer service"
			  }
			"sameAs":["https://www.facebook.com/RESOURCEcre/",
					  "https://www.instagram.com/resourcecre/",
					  "https://www.linkedin.com/company/resource-commercial-real-estate",
					  "https://plus.google.com/u/0/b/104233585404626040656/+ResourceCommercialRealEstateIndianapolis",
					  "https://www.youtube.com/channel/UCpdLW5fmfNOKV4JYr2-0-w",
					  "https://www.pinterest.com/resourcecre",
					  "https://vimeo.com/resourcecre",
					  "https://twitter.com/resourcecre"],
		    "logo":"http://rcre.com/wp-content/uploads/2016/02/RESOURCE-Commercial-Real-Estate-logo-01-01.jpg",
			"address" : {
				"@type": "PostalAddress",
				"addressLocality": "Indianapolis", 
				"addressRegion": "IN", 
				"postalCode": "46240", 
				"streetAddress": "9339 Priority Way West Drive" },
			"department"
			"email":"info@rcre.com",
			"telephone":"3176636000",
			"foundingDate":"2005"
		}

		</script>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div id="container">

			<header role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">
					<div id="logo" class="m-1of2 t-1of3 d-1of3">
						<a itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo"></a>
					</div>
					
					<div id="mobile-quick-nav" class="last-col">
					<!-- Call Button -->
						<div class="m-1of3 t-1of3 d-1of3">
							<a itemprop="telephone" href="tel:317-663-6000" role="telephone"><img id="phone" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-phone.svg" alt="Call RESOURCE"></a>
						</div>
					<!-- Search Button -->
						<!-- <div class="m-1of3 t-1of3 d-1of3">
							<a  href="#" role="search"><img id="search" src="<?php //echo get_template_directory_uri(); ?>/library/images/icons/icon-search.svg" alt="Search rcre.com"></a>
						</div> -->
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

		<?php 


			if ( has_post_thumbnail() ) {
				$bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			} else {
				$bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
			}
			
			if ( is_front_page() ) {
				get_template_part( 'library/partials/header-home' );
			
			} elseif( get_post_type() == "employee") {
				// Header for individual blog posts, case studies, and research reports
				get_template_part('library/partials/header-none');

			} elseif( is_404() ) {
				get_template_part('library/partials/header-404');

			} elseif ( is_single() ) { ?>
			<!-- Header for Single.php -->
			<div id="single-header" style="background-image: url('<?php echo $bannerimg; ?>'); background-repeat: no-repeat; background-size: cover;" role="banner" itemscope itemtype="http://schema.org/WPHeader">

					<div class="m-padding cf">
						<div class="m-all pull-r-1of12 pull-l-1of12 t-1of2 d-11of12 cf">
							
							<div class="tag blue">
							<?php echo get_the_term_list( $post->ID, 'specialty', '', '', ''); ?>
							</div>

							<?php if ( is_tax('service') ) { ?>
								<div class="tag gray">
							<?php echo get_the_term_list( $post->ID, 'service', '', '', ''); ?>
							</div>
							<?php } ?>
							
							<h1 class="cs-h1"><?php the_title(); ?></h1>
							<p class="subtitle">
							<?php echo types_render_field( "tagline", array( 'raw' => true)); ?>
							</p>
						</div>
						<a class="download-icon pull-l-1of12" href="<?php echo types_render_field( "downloadable-pdf", array( 'raw' => true)); ?>" alt="Download the PDF"></a>
					</div>
				</div>

			<?php } elseif ( is_single() ) {
				// Get header based on post type
	 			get_template_part('library/partials/header', get_post_type() );
			
			} else { ?>
			<!-- Header for all other pages -->
				<div id="page-header" style="background-image: url('<?php echo $bannerimg; ?>');" role="banner" itemscope itemtype="http://schema.org/WPHeader">
					<div class="callout cf">
						<div class="m-all t-1of2 d-1of2 center cf">
							<h1 class="page-title" itemprop="headline">
								<?php the_title(); ?>
							</h1>
							<p class="subtitle"><?php echo types_render_field( "tagline", array( 'raw' => true)); ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
				