<?php // case studies section template ?>
	<section class="topic cf">
			<aside class="m-all t-1of4 d-1of4 pull-r-1of12 left">
				<h3>Case Studies</h3>
				<div class="m-padding">
				<p>Get the funding you need for acquisition, development or refinancing. RESOURCE provides debt and equity solutions for any type of real estate project.
				</p>
				<a id="cta-border-green" href="#">View All Case Studies</a>

				<?php // Loop through the associated case studies ?>
				<?php $child_posts = types_child_posts("case-study"); 
						foreach ($child_posts as $child_post) { ?>
						
						<a href="">
						<div class="case-study d-1of6 m-1of2">
							<?php echo types_render_field( "client-logo", array( "id"=> "$child_post->ID", "size" => "thumbnail" ));  ?>	
						</div>
						</a>

						<?php } ?>
				</div>
			</aside>
			<div class="slant slant--right"></div>
		</section>