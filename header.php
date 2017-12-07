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
		
		<!-- Behavioral Meta Data -->
  		<meta name="apple-mobile-web-app-capable" content="yes">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<meta name="keywords" content="<?php the_title(); ?>">
		
		<?php // icons & favicons ?>
		
		<link rel="apple-touch-icon" sizes="180x180" href="/library/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/library/favicons/manifest.json">
		<link rel="mask-icon" href="/library/favicons/safari-pinned-tab.svg" color="#75caca">
		<link rel="shortcut icon" href="/library/favicons/favicon.ico">
		<meta name="msapplication-config" content="/library/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

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

		<!-- Salesforce Contact For ReCaptcha -->
		<script async defer src="https://www.google.com/recaptcha/api.js"></script>
		<!-- end Salesforce Contact For ReCaptcha -->

		<script>
			// timestamp for Recaptcha form
				  function timestamp() {
				     var response = document.getElementById("g-recaptcha-response");
				     if (response == null || response.value.trim() == "") {
				         var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
				         elems["ts"] = JSON.stringify(new Date().getTime());
				         document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
				     }
				  }
				  setInterval(timestamp, 500);
		</script>
	</head>

	<body <?php body_class(); ?>">
	 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div id="container" class="parallax">

			<header role="banner">

				<div id="inner-header" class="cf">
					<div id="logo" class="m-1of2 t-1of3 d-1of3" itemscope itemtype="http://schema.org/Organization">
						<a title="Go to RESOURCE Homepage" itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo"></a>
					</div>
					
					<div id="mobile-quick-nav" class="last-col">
					<!-- Call Button -->
						<div class="m-1of3 t-1of3 d-1of3">
							<a title="Call RESOURCE" itemprop="telephone" href="tel:317-663-6000" role="telephone"><img id="phone" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon-phone.svg" alt="Call RESOURCE"></a>
						</div>
					</div>

					<!-- Top Navigation -->
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
				get_template_part('library/partials/header-none');

			} elseif( get_post_type() == "listing") {
				get_template_part('library/partials/header-listing');

			} elseif( is_404() ) {
				get_template_part('library/partials/header-404');

			} elseif ( is_single() ) {
				get_template_part('library/partials/header-single');

			} else {
				get_template_part('library/partials/header-default');
			} ?>
				