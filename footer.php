			<div class="footer-slant-container">
				<div class="footer-slant-back"></div>
				<div class="footer-slant-front"></div>
			</div>

			<footer class="cf" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="m-padding cf">
					
					<div class="info-block d-1of3" >
						<div id="logo" style="padding: 0;" itemscope itemtype="http://schema.org/Organization">
							<a title="Go to RESOURCE Homepage" itemprop="url" href="<?php echo home_url(); ?>" aria-label="home" rel="nofollow">
								<img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logos/logo-rcre-horiz-light.svg" alt="RESOURCE Commercial Real Estate Logo">
							</a>
						</div>
						
						<div itemscope itemtype="http://schema.org/PostalAddress">
							<h5><a class="cta-underline-white" href="/careers">We're Hiring!</a></h5>
								
								<div class="pad-top">
									<?php get_template_part('library/partials/outputButtons-social'); ?>
								</div>
							

							<div itemprop="streetAddress" class="source-org">
								<span itemprop="streetAddress">9339 Priority Way West Drive, Suite 120</span><br>
	      						<span itemprop="addressLocality">Indianapolis,</span>
	      						<span itemprop="addressRegion">IN,</span>
	      						<span itemprop="postalCode">46240</span><br>
							</div>
						</div>
					</div>

					<div class="d-2of3">
						<nav>
							<?php wp_nav_menu(array(
		    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
		    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
		    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
		    					'menu_class' => 'nav footer-nav',            // adding custom nav class
		    					'theme_location' => 'footer-links',             // where it's located in the theme
		    					'before' => '',                                 // before the menu
		    					'after' => '',                                  // after the menu
		    					'link_before' => '',                            // before each link
		    					'link_after' => '',                             // after each link
		    					'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div>
				</div>
				
				<div class="source-org copyright">&copy; <?php echo date('Y'); ?> <span itemprop="name">RESOURCE Commercial Real Estate</span></div>
				
			</footer>

		</div>
		
		<?php // all js scripts are loaded by the library/bones.php ?>
		<?php wp_footer(); ?>
	</body>
</html>
