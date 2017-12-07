<?php
/*
 * BROKER PROFILE LAYOUT
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf" itemscope itemtype="http://schema.org/Organization">

		<main id="main" class="cf m-padding" role="main" itemprop="employee" itemscope itemtype="http://schema.org/Person">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf pull-r-1of12 pull-l-1of12'); ?> role="article">

				<header class="profile-header m-all t-all d-all cf">

						<a class="back-button" href="<?php echo site_url().'/about/team'; ?>"><h5>&larr;Back to Team</h5></a>

						<h1 itemprop="name" class="header-dark"><?php the_title(); ?>
						</h1>

						<div itemprop="jobTitle">
							<?php echo types_render_field( "profile-title", array( 'raw' => false) ); ?> 
	
							<?php if ( has_term( '' , 'specialty') && has_term( '' , 'service') ) { ?>

								//&nbsp;<div class="header-link"> <?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?></div> 
								
							<?php } ?>
						</div>
				</header>

				<aside class="m-all t-1of4 d-1of5 cf">
				
					<div class="m-1of2 t-all d-all">
				
						<img  class="broker-profile-picture" src="<?php echo types_render_field( "profile-picture", array( 'raw' => true)); ?>" itemprop="image" alt=" <?php the_title(); ?><?php get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?> ">

						<!-- BUTTON: Contact -> PHP Link to Broker's Email -->
						<a class="cta-border-green" href="mailto:<?php echo(types_render_field( "broker-email-address", array( 'raw' => true) )); ?>">Contact</a>
					</div> 
				
					<?php  // PHP: Broker Contact information ?>
					<div class="profile-info m-1of2 t-all d-all">
							
							<div itemprop="email" class="header-link email"><?php echo types_render_field( "profile-email-address", array( 'raw' => false) ); ?></div>
							
							<div class="broker-office-phone">
								<a href="tel:<?php echo types_render_field( "profile-office-phone", array( 'raw' => false) ); ?>" role="telephone"><strong>Phone:</strong> <span itemprop="telephone"><?php echo types_render_field( "profile-office-phone", array( 'raw' => false) ); ?></span>
								</a>
							</div>
							
							<?php if ( types_render_field( "profile-cell-phone" ) != 0 ) { ?>

								<div class="broker-cell-phone">
									<a href="tel:<?php echo types_render_field( "profile-cell-phone", array( 'raw' => false) ); ?>" role="telephone"><strong>Cell:</strong> <?php echo types_render_field( "profile-cell-phone", array( 'raw' => false) ); ?>
								</a>
								</div>

							<?php } ?>

							<?php if ( types_render_field( "license-number" ) != 0 ) { ?>

								<div class="license-number"><strong>License:</strong> <?php echo types_render_field( "license-number", array( 'raw' => true) ); ?></div>

							<?php } ?>
							
							
							<!-- Link to vcard -->
							<div class="header-link download-icon-dark v-card">
								<a href="<?php echo(types_render_field( "profile-vcard", array( 'raw' => true) )); ?>">Download vCard</a>
							</div><br>
							
							<?php if ( types_render_field( "profile-twitter-url" ) != null ) { ?>
								<div class="header-link">
									<a title="Go to the Twitter page" itemprop="sameAs" href="<?php echo types_render_field( "profile-twitter-url", array( 'raw' => true) ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
								</div>
								
							<?php } ?>
							
							<?php if ( types_render_field( "profile-linkedin-url" ) != null ) { ?>
								<div class="header-link">
									<a title="Go to the Linkedin page" itemprop="sameAs" href="<?php echo types_render_field( "profile-linkedin-url", array( 'raw' => true) ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
								</div>
								
							<?php } ?>
							
							<div class="pad-top">
								<div class="tag gray">
									<?php echo get_the_term_list( '', 'service', '', '', ''); ?>
								</div>

								<div class="tag blue">
									<?php echo get_the_term_list( '', 'specialty', '', '', ''); ?>
								</div>
							</div>
							
					</div>
				</aside>
			
			<!-- SECTION: Broker's Bio, Past Work, and Related Case Studies -->
				<section class="profile-content text-left m-all t-1of2 d-2of3 pull-r-1of12 cf">
				<!-- The Content will just be the biography -->
					<h3>Duties</h3>
					<p><?php echo types_render_field( "profile-duties", array( 'raw' => true) ); ?></p>

					<h3>History</h3>
					<p><?php echo types_render_field( "profile-history", array( 'raw' => true) ); ?></p>
				
				<?php if ( types_render_field( "profile-personal" ) != null ) { ?>
					<h3>Personal</h3>
					<p><?php echo types_render_field( "profile-personal", array( 'raw' => true) ); ?></p>
				<?php } ?>

				<?php if ( types_render_field( "profile-past-client" ) != null ) { ?>
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

					// $child_posts = types_child_posts( "post" );
					//var_dump( $child_posts );

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

			<?php endwhile; ?>

			<?php else : ?>

					<article id="post-not-found" class="cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

		</main>
	</div>
</div>

<?php get_footer(); ?>
