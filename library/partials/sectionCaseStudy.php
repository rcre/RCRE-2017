<?php // This SECTION shows case studies, with no real ryhme or reason ?>

	<section class="topic cf page--Case-Studies">
		<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right">
			<h3 class="m-padding">Case Studies</h3>
			
			<div class="m-padding">
				<p>A no-hoops approach gets you a long way. When you do good work, it speaks for itself. Here are just a few of those real stories that we want to share with you.
				</p>
				
				<a title="Go to All Case Studies" class="cta-border-green btn-minify" href="/case-studies">Read the Case Studies</a>
					
				<div class="cf">
					<?php // This will loop through case studies that are relevant to the page things are on.
					
					global $post;
					$post_slug=$post->post_name; // this is for testing, I might use this to grab the page slug

					if ( has_term( '', 'specialty' )) {
						$custom_taxterms = wp_get_object_terms( $post->ID, 'specialty', array('fields' => 'slugs'));
						$tax = 'specialty';
						$custom_field = 'slug';
					
					} elseif ( has_term( '', 'service' ) ) {
						$custom_taxterms = wp_get_object_terms( $post->ID, 'service', array('fields' => 'slugs'));
						$tax = 'service';
						$custom_field = 'slug';
					
					} elseif ( has_term( '', 'teams' ) ) {
						$custom_taxterms = wp_get_object_terms( $post->ID, 'teams', array('fields' => 'slugs'));
						$tax = 'teams';
						$custom_field = 'slug';

					} elseif ( is_front_page() ) {
						$all_specialties = get_terms( 'specialty' ); // Get all specialty terms.
						$rand_specialty = $all_specialties[ array_rand( $all_specialties ) ]; // Select one at random.
						$custom_taxterms = array( $rand_specialty->term_id );
						$tax = 'specialty';
						$custom_field = 'id';
					}

					$args = array(
						'post_type' => array('case-study'),
						'showposts' => 3,
						'tax_query' => array(
						    array(
						        'taxonomy' => $tax,
						        'field' => $custom_field,
						        'terms' => $custom_taxterms,
						    )
						)						
					);

					$custom_posts = new WP_Query( $args );
				
					// Start the Loop.
					while ( $custom_posts->have_posts() ) : $custom_posts->the_post(); ?>
						
						<a title="Read the Case Study" class="m-1of3 t-1of3 d-1of3 pad-top" href="<?php echo esc_url( get_permalink() ); ?>" role="button">
					<?php // Grab the image to the case study ?>
						<div class="case-study-icon">
							<img src="<?php echo types_render_field( "client-logo", array( 'output' => 'raw' ));  ?>" alt="Client Logo">	
						</div>
						</a>

					<?php endwhile; 
						wp_reset_postdata();
					?>
				</div>
			</div>
		</aside>
		<div class="slant slant--right"></div>
	</section>