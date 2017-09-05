<?php // This SECTION shows case studies, with no real ryhme or reason ?>

<section class="topic cf page--Case-Studies">
		<aside class="m-all t-1of4 d-1of4 pull-l-1of12 right">
			<h3 class="m-padding">Case Studies</h3>
			<div class="m-padding">
				<p>A no-hoops approach gets you a long way. When you do good work, it speaks for itself. Here are just a few of those real stories that we want to share with you.
				</p>
				<a title="Go to All Case Studies" id="cta-border-green" href="/case-studies">Read the Case Studies</a>
					<div class="cf">
						<?php // This will loop through brokers who are a part of this specialty
						
						$args = array(
							'post_type' => array('case-study'),
							'showposts' => 3,							
						);
						
						$custom_posts = new WP_Query( $args );
					
						// Start the Loop.
						while ( $custom_posts->have_posts() ) : $custom_posts->the_post(); ?>

							<a class="m-1of3 t-1of3 d-1of3 pad-top" href="<?php echo esc_url( get_permalink() ); ?>">
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