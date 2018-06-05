<?php 
	$title = types_render_field( "profile-title", array( 'raw' => false ) );
	$email = types_render_field( "profile-email-address", array( 'raw' => true ) );
	$phone = types_render_field( "profile-office-phone", array( 'raw' => true ) );
	$cell = types_render_field( "profile-cell-phone", array( 'raw' => true ) );
	$license = types_render_field( "license-number", array( 'raw' => true ) );
	$vcard = types_render_field( "profile-vcard", array( 'raw' => true ) );
	$linkedin = types_render_field( "profile-linkedin-url", array( 'raw' => true ) );
	$twitter = types_render_field( "profile-twitter-url", array( 'raw' => true ) );
	$duties = types_render_field( "profile-duties", array( 'raw' => true ) );
	$history = types_render_field( "profile-history", array( 'raw' => true ) );
	$personal = types_render_field( "profile-personal", array( 'raw' => true ) );
	$clients = types_render_field( "profile-past-client", array( 'raw' => true ) );
	$picture = types_render_field( "profile-picture", array( 'raw' => true ) );
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf" itemscope itemtype="http://schema.org/Organization">

		<main id="main" class="cf m-padding" role="main" itemprop="employee" itemscope itemtype="http://schema.org/Person">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">

				<header class="profile-header m-all t-all d-all cf">

						<a class="back-button" href="<?php echo site_url().'/about/team'; ?>" role="button">
							<h5>&larr;Back to Team</h5>
						</a>

						<h1 itemprop="name" class="header-dark">
							<?php the_title(); ?>
						</h1>

						<div itemprop="jobTitle">
							<?php echo $title; ?> 

							<?php // Get all the tags
								echo get_the_term_list( $post->ID, 'specialty', '// <div class="header-link">', '</div><div class="header-link">', '</div>');
							?>
	
							<?php if ( has_term( '' , 'specialty') == null ) { ?>

								<?php echo get_the_term_list( $post->ID, 'service', '// <div class="header-link">', '</div><div class="header-link">', '</div>'); ?>
								
							<?php } ?>
						</div>
				</header>

				<aside class="m-all t-1of4 d-1of5 cf">
				
					<div class="m-1of2 t-all d-all">
				
						<img class="broker-profile-picture" src="<?php echo $picture; ?>" itemprop="image" alt="<?php the_title(); get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?>">

						<a class="cta-border-green" href="mailto:<?php echo $email; ?>" role="button">
							Contact
						</a>

					</div> 
				
					<?php  // PHP: Broker Contact information ?>
					<div class="profile-info m-1of2 t-all d-all">

							<a class="cta-underline-gray" itemprop="email" href="mailto:<?php echo $email; ?>">
								<?php echo $email; ?>
							</a>
							
							<a class="cta-underline-gray" href="tel:<?php echo $phone; ?>" role="telephone">
								<strong>Phone:</strong> <span itemprop="telephone"><?php echo $phone; ?></span>
							</a>
						
							
							<?php if ( $cell != null ) { ?>
								<a class="cta-underline-gray" href="tel:<?php echo $cell; ?>" role="telephone">
									<strong>Cell:</strong> <?php echo $cell; ?>
								</a>
							<?php } ?>

							<?php if ( $license != null ) { ?>
								<div class="license-number">
									<strong>License:</strong> <?php echo $license; ?>
								</div>
							<?php } ?>

								<a class="cta-underline-gray" href="<?php echo $vcard; ?>">
									Download vCard
								</a>
							
							<?php if ( $twitter != null ) { ?>
								<a class="cta-underline-gray" title="Twitter page" itemprop="sameAs" href="<?php echo $twitter ?>">
									<i class="fa fa-twitter" aria-hidden="true"></i> Twitter
								</a>
							<?php } ?>
							
							<?php if ( $linkedin != null ) { ?>
								<a class="cta-underline-gray" title="Linkedin page" itemprop="sameAs" href="<?php echo $linkedin; ?>">
									<i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin
								</a>

								<div class="cf pad-top"></div>
							<?php } ?>

							<div>
								<?php // Get all the tags
									rcre_get_tags();
								?>
							</div>
							
					</div>
				</aside>
			
				<section class="profile-content m-all t-1of2 d-2of3 pull-r-1of12 cf">
					<h3>Duties</h3>
					<p><?php echo $duties; ?></p>

					<h3>History</h3>
					<p><?php echo $history; ?></p>
				
				<?php if ( $personal != null ) { ?>
					<h3>Personal</h3>
					<p><?php echo $personal; ?></p>
				<?php } ?>

				<?php if ( $clients != null ) { ?>
					<h3>Select Projects</h3>
					<ul class="blue-bullets"><li> <?php echo types_render_field( "profile-past-client", array( "separator" => " <li> ") ); ?></ul>
				<?php } ?>
					
					
				<?php 

					$child_posts = types_child_posts( "case-study" ); 
					
					if ( $child_posts != null ) { ?>
						
						<h3>Relevant Experience</h3>
							
						<div class="case-study-grid pad-top">
							
							<?php 
								foreach ($child_posts as $child_post) { ?>
									<?php // Grab the link to the case study ?>
									<a href="<?php echo esc_url( get_permalink( $child_post->ID ) ); ?>">
									<?php // Grab the image to the case study ?>
									<div class="case-study-icon">
										<img src="<?php echo types_render_field( "client-logo", array( "raw" => true, "id" => "$child_post->ID" ) ); ?>" alt="Client Logo">
									</div>
									</a>
							<?php } wp_reset_postdata(); ?>
						</div>
				
				<?php } 
					$childargs = array(
						'post_type' => 'post',
						'numberposts' => 3,
						//'meta_key' => 'wpcf-post',
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_query' => array( 
							array( 
								'key' => '_wpcf_belongs_property_id', 
								'value' => get_the_ID(),
								) 
							)
					);

					$child_posts = get_posts( $childargs );

						if ( $child_posts != null ) { ?>
						
						<h3>Blog Posts</h3>
					
						<div class="service-grid">
							<?php 
								foreach ($child_posts as $child_post) { ?>
									
									<div class="m-all t-1of2 d-1of3">
										<div class="service-box">
											<img src="<?php echo ( types_render_field( "post-icon", array( "id"=> "$child_post->ID", 'raw' => true) )); ?>" alt="Specialty">

											<h4><a href="<?php esc_url( the_permalink( $child_post->ID ) ); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_title( $child_post ); ?></a></h3>

											<a class="blue-link" href="<?php esc_url( the_permalink( $child_post->ID ) ); ?>">Read More...</a>
										</div>
									</div>

								<?php } ?>
						</div>
					<?php } ?>
					
				</section>

			</article>

			<?php endwhile; endif; ?>

		</main>
	</div>
</div>

<?php get_footer(); ?>
