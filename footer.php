			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="m-padding pull-l-1of12 pull-r-1of12 cf">
					
					<div itemscope itemtype="http://schema.org/PostalAddress" class="address left">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <span itemprop="name">RESOURCE Commercial Real Estate</span></p>
						<p itemprop="streetAddress" class="source-org copyright">
							<span itemprop="streetAddress">9339 Priority Way West Drive, Suite 120</span><br>
      						<span itemprop="addressLocality">Indianapolis,</span>
      						<span itemprop="addressRegion">IN,</span>
      						<span itemprop="postalCode">46240</span>
						</p>
					</div>

					<div class="right">
						<nav role="navigation">
							<?php wp_nav_menu(array(
		    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
		    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
		    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
		    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
		    					'theme_location' => 'footer-links',             // where it's located in the theme
		    					'before' => '',                                 // before the menu
		    					'after' => '',                                  // after the menu
		    					'link_before' => '',                            // before each link
		    					'link_after' => '',                             // after each link
		    					'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>

						<div itemscope itemtype="http://schema.org/Organization" class="social m-all">
							<link itemprop="url" href="https://rcre.com">
							
							<a title="Go to the RESOURCE Facebook page" itemprop="sameAs" href="https://www.facebook.com/RESOURCEcre/"><i class="fa fa-facebook" aria-hidden="true"></i></a>

							<a title="Go to the RESOURCE Instagram page" itemprop="sameAs" href="https://www.instagram.com/resourcecre/"><i class="fa fa-instagram" aria-hidden="true"></i></a>

							<a title="Go to the RESOURCE Twitter page" itemprop="sameAs" href="https://twitter.com/resourcecre"><i class="fa fa-twitter" aria-hidden="true"></i></a>

							<a title="Go to the RESOURCE Linkedin page" itemprop="sameAs" href="https://www.linkedin.com/company/resource-commercial-real-estate"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

							<a title="Go to the RESOURCE Vimeo Page" itemprop="sameAs" href="https://vimeo.com/resourcecre"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</footer>

		</div>
		
		<?php // all js scripts are loaded by the library/bones.php ?>
		<?php wp_footer(); ?>
	</body>
</html>
